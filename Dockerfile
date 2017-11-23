FROM alpine:3.6

MAINTAINER Fabio Montefuscolo <fabio.montefuscolo@gmail.com>

RUN apk add --update php5 php5-cli php5-json php5-phar sassc nodejs nodejs-npm wget

COPY . /var/www/html

RUN wget https://getcomposer.org/download/1.5.2/composer.phar -o /var/www/html/scripts/composer.phar

WORKDIR /var/www/html/scripts

RUN npm install -g uglify-js uglifycss autoprefixer

WORKDIR /var/www/html/scripts

RUN ["./deploy.sh", "dev.mapas.cultura.gov.br"]

# RUN (cd src/protected \
#         && composer -n install --prefer-dist \
#         && composer -n dump-autoload --optimize)
