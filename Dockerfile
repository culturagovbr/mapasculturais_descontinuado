FROM alpine:3.6

MAINTAINER Fabio Montefuscolo <fabio.montefuscolo@gmail.com>

RUN echo "@testing http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories

RUN apk add --update php5 php5-cli php5-json php5-phar php5-openssl php5-pdo php5-pdo_pgsql php5-curl php5-dom php5-xml sassc nodejs nodejs-npm composer@testing bash

COPY . /var/www/html

WORKDIR /var/www/html

RUN npm install -g uglify-js uglifycss autoprefixer

RUN ln -s /usr/bin/php5 /usr/bin/php
RUN ln -s /usr/bin/sassc /usr/bin/sass

RUN (cd src/protected \
        && composer -n install --prefer-dist \
        && composer -n dump-autoload --optimize)

# WORKDIR /var/www/html/scripts
# RUN ["./deploy.sh", "dev.mapas.cultura.gov.br"]
