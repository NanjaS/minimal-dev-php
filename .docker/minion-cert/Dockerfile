FROM alpine:latest

RUN apk add openssl
RUN mkdir -p /traefik/cert \
    && mkdir -p /traefik/config \
    && mkdir -p /traefik/install

WORKDIR /traefik/cert