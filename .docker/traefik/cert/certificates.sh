#!/bin/sh

# =============================================================================
# ssl-certs.sh - Self signing SSL certificates
#
# Author: Steve Shreeve <steve.shreeve@gmail.com>
#   Date: Dec 17, 2022
# =============================================================================

# Use https://gist.github.com/shreeve/3358901a26a21d4ddee0e1342be7749d
# See https://gist.github.com/fntlnz/cf14feb5a46b2eda428e000157447309

# variables
name="Kaapiii Minimal Dev."
base="minimal.localhost"
root="rootCA"
opensslConf="openssl.cnf"
dynCertificatesConf="/traefik/config/certificates"

# Create the openssl.cnf file form the dist, it does not exists
if [ ! -f "${opensslConf}" ]; then
  echo "No ${opensslConf} file provided or found. A new ${opensslConf} is created.";
  cp "${opensslConf}.dist" "${opensslConf}"
  chmod ug+x ${opensslConf}
fi

if [ ! -f "${dynCertificatesConf}.yaml" ]; then
  echo "No ${dynCertificatesConf}.yaml file provided or found. A new ${dynCertificatesConf}.yaml is created.";
  cp "${dynCertificatesConf}.dist.yaml" "${dynCertificatesConf}.yaml"
fi

# create root key and certificate
if [ ! -f "${root}.key" ]; then
  openssl genrsa -out "${root}.key" 3072
  echo "No ${root}.key file is not provided. A new local ${root}.key is created.";
fi
if [ ! -f "${root}.crt" ]; then
  openssl req -x509 -nodes -sha256 -new -key "${root}.key" -out "${root}.crt" -days 731 \
    -subj "/CN=Custom Root" \
    -addext "keyUsage = critical, keyCertSign" \
    -addext "basicConstraints = critical, CA:TRUE, pathlen:0" \
    -addext "subjectKeyIdentifier = hash"
  echo "No ${root}.crt is not provided or does not exist. A new local ${root}.crt is created.";
fi
# Copy rootCa.crt to /traefik/install for easy installation
cp "${root}.crt" /traefik/install/"${root}.crt"

# create our key and certificate signing request
if [ ! -f "${base}.key" ]; then
  echo "No ${base}.key for a certificate signing request is not provided or does not exist. A new local ${base}.key is created.";
  openssl genrsa -out "${base}.key" 2048
fi
if [ ! -f "${base}.csr" ]; then
  echo "No ${base}.csr for a certificate signing request is not provided or does not exist. A new local ${base}.csr is created.";
  openssl req -sha256 -new \
    -key "${base}.key" \
    -subj "/CN=*.${base}/O=${name}/OU=minimal@localhost" \
    -reqexts SAN \
    -config <(echo "[SAN]\nsubjectAltName=DNS:${base},DNS:*.${base}") \
    -out "${base}.csr"
fi

# create our final certificate and sign it
openssl x509 -req -sha256 \
  -in "${base}.csr" \
  -out "${base}.crt" \
  -days 3650 \
  -CAkey "${root}.key" \
  -CA "${root}.crt" \
  -CAcreateserial -extfile "${opensslConf}"
echo "Update the certificates";
# review files
#echo "--"; openssl x509 -in "${root}.crt" -noout -text
#echo "--"; openssl req  -in "${base}.csr" -noout -text
#echo "--"; openssl x509 -in "${base}.crt" -noout -text
#echo "--";