from ubuntu:14.04

RUN apt-get update -y && apt-get install -y git curl npm ruby2.0 ruby2.0-dev postgresql postgresql-contrib postgis \
 postgresql-9.3-postgis-2.1 postgresql-9.3-postgis-2.1-scripts \
 php5 php5-gd php5-cli php5-json php5-curl php5-pgsql php-apc php5-fpm imagemagick libmagickcore-dev libmagickwand-dev php5-imagick nginx

RUN curl -sL https://deb.nodesource.com/setup_4.x | sudo -E bash -
RUN sudo apt-get install -y nodejs

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer.phar

RUN apt-get install zip -y
RUN update-alternatives --install /usr/bin/node node /usr/bin/nodejs 10

RUN npm install -g uglify-js uglifycss autoprefixer

