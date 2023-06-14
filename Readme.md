# Minimal PHP LEMP Stack

## Stack
- Nginx: [localhost:8099](http://localhost:8099)
- PHP: localhost:9003
- MariaDB: localhost:13306

Note: Change the PHP Version in the .env file

## Initial Setup

Create the .env file
On Linux
```sh
cp .env.example .env
```

On Windows
```cmd
copy .env.example .env
```

##Start the Development Environment
```
docker-composer up -d
```



Resources:
 - https://traefik.io/blog/traefik-2-tls-101-23b4fbee81f1/
 - https://brianturchyn.net/basic-traefik-configuration-for-http-and-https/
 - https://kanzitelli.medium.com/deploying-postgresql-and-redis-behind-traefik-in-the-cloud-c8eade9b5874
 - https://dgu2000.medium.com/working-with-self-signed-certificates-in-chrome-walkthrough-edition-a238486e6858