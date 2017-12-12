#!/bin/bash

set -e

chown -R mapas:www-data /srv/mapas/mapasculturais/src/protected/application

echo "Starting the mysql daemon"
service postgresql start

echo "Starting php5-fpm daemon"
service php5-fpm start

echo "Starting nginx daemon"
nginx

