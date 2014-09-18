#!/bin/bash
echo ''
echo "MAPAS CULTURAIS: Debian-Based Distros Install Script"
echo ''
echo 'Please use this script as a document for installing MAPAS CULTURAIS dependencies in your distribution:'
echo ''
echo 'curl php5 php5-gd php5-cli php5-json php5-curl php5-pgsql php-apc postgresql postgresql-contrib postgis postgresql-9.3-postgis-2.1 postgresql-9.3-postgis-2.1-scripts'
echo ''1
echo -n "MAPAS CULTURAIS: Press Enter to continue, or Ctrl-C to abort."
read enter

# echo 'MAPASCULTURAIS: The installer will add PostgreSQL APT repositories:'
# echo ''
# sudo ./mapasculturais/scripts/apt.postgresql.org.sh

echo "MAPAS CULTURAIS: Installing Dependencies. Please confirm."
echo ''

sudo apt-get update
sudo apt-get install -y curl php5-common php5-gd php5-cli php5-json php5-curl php5-pgsql php-apc postgresql postgresql-contrib postgis postgresql-9.3-postgis-2.1 postgresql-9.3-postgis-2.1-scripts git

echo "MAPAS CULTURAIS: Checking Composer Dependency Manager for PHP"
if ! type composer.phar 2>/dev/null; then
    echo "MAPAS CULTURAIS: Installing Composer"
    curl -sS https://getcomposer.org/installer | php
    sudo mv composer.phar /usr/local/bin/composer.phar
fi

echo "MAPAS CULTURAIS: Getting Dependencies using Composer"
composer.phar --working-dir=./mapasculturais/src/protected install --prefer-dist

echo "MAPAS CULTURAIS: Setting up mapasculturais PostgreSQL Database"
# ./mapasculturais/scripts/install.sh

PGUSER=postgres
DBNAME=mapasculturais
DBUSER=mapasculturais
DBPASS=mapasculturais

sudo -u ${PGUSER} dropdb --if-exists ${DBNAME}
sudo -u ${PGUSER} dropuser --if-exists ${DBUSER}

sudo -u ${PGUSER} psql -d postgres -c "CREATE USER ${DBUSER} WITH PASSWORD '${DBPASS}';"
sudo -u ${PGUSER} createdb --owner ${DBUSER} ${DBNAME}

sudo -u ${PGUSER} psql -d ${DBNAME} -c 'CREATE EXTENSION postgis;'
sudo -u ${PGUSER} psql -d ${DBNAME} -c 'CREATE EXTENSION unaccent;'

sudo PGPASSWORD=${DBPASS} -u ${PGUSER} psql -d ${DBNAME} -U ${DBUSER} -h 127.0.0.1 -f ./mapasculturais/db/schema.sql
sudo PGPASSWORD=${DBPASS} -u ${PGUSER} psql -d ${DBNAME} -U ${DBUSER} -h 127.0.0.1 -f ./mapasculturais/db/initial-data.sql

# ./install-sp-shapefiles.sh
DBPASS=mapasculturais

tar xC /tmp -f ./mapasculturais/db/sp-shapefile-sql.tar.xz

sudo PGPASSWORD=${DBPASS} -u postgres psql -U mapasculturais -d mapasculturais -h 127.0.0.1 -f /tmp/sp-shapefile-sql/sp_regiao.sql
sudo PGPASSWORD=${DBPASS} -u postgres psql -U mapasculturais -d mapasculturais -h 127.0.0.1 -f /tmp/sp-shapefile-sql/sp_distrito.sql
sudo PGPASSWORD=${DBPASS} -u postgres psql -U mapasculturais -d mapasculturais -h 127.0.0.1 -f /tmp/sp-shapefile-sql/sp_subprefeitura.sql

rm -rf /tmp/sp-shapefile-sql/

# end of ./mapasculturais/scripts/install.sh


echo "MAPAS CULTURAIS: Running initial-configuration.sh"
# ./mapasculturais/scripts/initial-configuration.sh

# cd ..
PWD="./mapasculturais"
# WEBGROUP="www-data"

echo "Creating  file upload directory:

$PWD/src/files
"

mkdir $PWD/src/files

# echo "Configuring write permission in file upload directory:
# $PWD/src/files
# "
# sudo chown -R ${WEBGROUP}:${WEBGROUP} $PWD/src/files

# echo "Configuring write permission in asset minification directory:
# $PWD/src/protected/application/themes/active/assets/gen
# "
# mkdir $PWD/src/protected/application/themes/active/assets/gen
# sudo chown -R $USER:${WEBGROUP} $PWD/src/protected/application/themes/active/assets/gen
# sudo chmod 770 $PWD/src/protected/application/themes/active/assets/gen

echo "Configuring write permission in ORM proxy directory
$PWD/src/protected/application/lib/MapasCulturais/DoctrineProxies
"
mkdir $PWD/src/protected/application/lib/MapasCulturais/DoctrineProxies
# sudo chown -R $USER:${WEBGROUP} $PWD/src/protected/application/lib/MapasCulturais/DoctrineProxies
# sudo chmod 770 $PWD/src/protected/application/lib/MapasCulturais/DoctrineProxies

echo "Generating Doctrine ORM  Proxy Classes
"
cd $PWD/src/protected/tools

REQUEST_METHOD='CLI' REMOTE_ADDR='127.0.0.1' REQUEST_URI='/' SERVER_NAME=127.0.0.1 SERVER_PORT="8000" ./doctrine orm:generate-proxies

# FIXME not in original initial-configuration.sh.
cd /home/vagrant/mapasculturais

echo ""
#  end of ./mapasculturais/scripts/initial-configuration.sh


echo "MAPAS CULTURAIS: Please edit src/protected/application/conf/config.php"
cp ./src/protected/application/conf/config.template.php ./src/protected/application/conf/config.php
echo ""

echo "MAPAS CULTURAIS: Install Finished"
echo ""

echo "The application can be tested running in http://localhost:8000
By the PHP built-in web server you can use with command
php -S 0.0.0.0:8000 -t ./src ./src/router.php &

If you want to serve in other address IP change base.url in src/protected/application/conf/config.php
"
php -S 0.0.0.0:8000 -t ./src ./src/router.php &



# open id
# cd ..
# git clone https://github.com/hacklabr/mapasculturais-openid.git || die "Problemas ao clonar repositorio"
# vagrant ssh -c "cd /vagrant/repository/mapasculturais/src/protected ; composer.phar update --prefer-dist" || die "Pau no composer.phar"
#
# cp mapasculturais-openid/iddacultura/settings_local.py.sample mapasculturais-openid/iddacultura/settings_local.py || die "falha ao copiar settings_local.py"
#
# vagrant ssh -c "cd /vagrant/repository/; sed \"s/RECAPTCHA_PUBLIC_KEY = ''/RECAPTCHA_PUBLIC_KEY = '6Lf53_USAAAAAFOh0cbdGZ9VdXZDVA8Pe9iOUh'/g\" -i  mapasculturais-openid/iddacultura/settings_local.py" || die "ao configurar recaptcha do django"
# vagrant ssh -c "cd /vagrant/repository/; sed \"s/RECAPTCHA_PRIVATE_KEY = ''/RECAPTCHA_PRIVATE_KEY = '6Lf53_USAAAAAFyHkak2qxo6b5YWhjq8qHoKlNLW'/g\" -i mapasculturais-openid/iddacultura/settings_local.py" || die "ao configurar recaptcha do django"
#
# vagrant ssh -c "cd /vagrant/repository/mapasculturais-openid; /mapasculturais-openid-env/bin/python /repository/mapasculturais-openid/manage.py syncdb" || die "falha ao fazer syncdb do django"
#
# vagrant ssh -c "cd /tmp/ ; wget http://static.hacklab.com.br/mapasculturais/openid.conf ; sudo mv /tmp/openid.conf /etc/init/"
# # vagrant ssh -c "sudo apt-get -y install apache2 libapache2-mod-php5; sudo a2enmod rewrite"
#
# vagrant reload
# vagrant ssh -c "sudo restart openid"
