from ubuntu:14.04

RUN apt-get update -y && apt-get install -y git curl npm ruby2.0 ruby2.0-dev postgresql postgresql-contrib postgis \
 postgresql-9.3-postgis-2.1 postgresql-9.3-postgis-2.1-scripts \
 php5 php5-gd php5-cli php5-json php5-curl php5-pgsql php-apc php5-fpm imagemagick libmagickcore-dev libmagickwand-dev php5-imagick nginx
RUN curl -sL https://deb.nodesource.com/setup_4.x | sudo -E bash -
RUN sudo apt-get install -y nodejs

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer.phar

RUN apt-get install zip -y

RUN npm install -g uglify-js2 uglifycss autoprefixer
RUN update-alternatives --install /usr/bin/uglifyjs uglifyjs /usr/bin/uglifyjs2 10

RUN gem2.0 install sass -v 3.4.22

# Inicia usuário mapas

RUN mkdir -p /srv/mapas
COPY . /srv/mapas/mapasculturais

RUN useradd -G www-data -d /srv/mapas -s /bin/bash mapas; \
    mkdir -p /srv/mapas/mapasculturais/src/assets; \
    mkdir -p /srv/mapas/mapasculturais/src/files; \
    chown -R mapas:www-data /srv/mapas

USER mapas

WORKDIR /srv/mapas/mapasculturais

RUN (cd src/protected \
        && composer.phar -n install --prefer-dist \
        && composer.phar -n dump-autoload --optimize)

COPY src/protected/application/conf/config.template.php src/protected/application/conf/config.php

USER root

RUN mkdir /var/log/mapasculturais
RUN chown mapas:www-data /var/log/mapasculturais

USER mapas

RUN mkdir -p src/assets && mkdir -p src/files

USER root

ADD config_files/nginx/mapas.conf /etc/nginx/sites-available
RUN ln -s /etc/nginx/sites-available/mapas.conf /etc/nginx/sites-enabled/mapas.conf \
&& rm /etc/nginx/sites-available/default

RUN echo "daemon off;" >> /etc/nginx/nginx.conf

ADD config_files/php5/mapas.conf /etc/php5/fpm/pool.d

USER root

RUN  /etc/init.d/postgresql start \
&& su - postgres -c "psql -c 'CREATE USER MAPAS;'" \
&& su - postgres -c "createdb --owner mapas mapas" \
&& su - postgres -c "psql -d mapas -c 'CREATE EXTENSION postgis;'" \
&& su - postgres -c "psql -d mapas -c 'CREATE EXTENSION unaccent;'" \
&& su - mapas -c "psql -f mapasculturais/db/schema.sql" \
&& su - mapas -c "psql -f mapasculturais/db/initial-data.sql"\
&& su - mapas -c "./mapasculturais/scripts/deploy.sh"

RUN update-rc.d postgresql defaults && update-rc.d nginx defaults && update-rc.d php5-fpm defaults

ADD config_files/entrypoint.sh entrypoint.sh 
RUN chmod +x entrypoint.sh

ENTRYPOINT ["/srv/mapas/mapasculturais/entrypoint.sh"]

EXPOSE 8090:80
