FROM alpine:latest

RUN apk add openssl
RUN mkdir -p /traefik/cert \
    && mkdir -p /traefik/config

WORKDIR /traefik/cert