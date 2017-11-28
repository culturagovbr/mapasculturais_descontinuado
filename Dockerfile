from ubuntu:14.04

RUN apt-get update -y && apt-get install -y git curl npm ruby2.0 ruby2.0-dev postgresql postgresql-contrib postgis \
 postgresql-9.3-postgis-2.1 postgresql-9.3-postgis-2.1-scripts \
 php5 php5-gd php5-cli php5-json php5-curl php5-pgsql php-apc php5-fpm imagemagick libmagickcore-dev libmagickwand-dev php5-imagick nginx

RUN curl -sL https://deb.nodesource.com/setup_4.x | sudo -E bash -
RUN sudo apt-get install -y nodejs

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer.phar

RUN apt-get install zip -y

RUN npm install -g uglify-js uglifycss autoprefixer

# Inicia usuário mapas

RUN mkdir -p /srv/mapas
COPY . /srv/mapas/mapasculturais

RUN useradd -G www-data -d /srv/mapas -s /bin/bash mapas; \
    mkdir -p /srv/mapas/mapasculturais/src/assets; \
    mkdir -p /srv/mapas/mapasculturais/src/files; \
    chown -R mapas:www-data /srv/mapas

# RUN rm /etc/apache2/apache2.conf \
    # && ln -sf /srv/mapas/mapasculturais/scripts/docker_apache2.conf /etc/apache2/apache2.conf

USER mapas
WORKDIR /srv/mapas/mapasculturais

RUN (cd src/protected \
        && composer.phar -n install --prefer-dist \
        && composer.phar -n dump-autoload --optimize)

# WORKDIR /srv/mapas/mapasculturais/
# USER mapas
# RUN  cd src/protected/ && composer.phar -n install --prefer-dist \
#         && composer.phar -n dump-autoload --optimize

# USER root
# RUN /etc/init.d/postgresql start
# RUN sudo -u postgres psql -c "CREATE USER mapas"
