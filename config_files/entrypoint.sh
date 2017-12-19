#!/bin/bash

set -e

chown -R mapas:www-data /srv/mapas/mapasculturais/src/protected/application

echo "Starting the postgresql daemon"
service postgresql start

echo "Wait postgresql start"
until pg_isready 2>/dev/null; do
  sleep 1
done

echo "Deploying app"
su - mapas -c "cd /srv/mapas/mapasculturais/scripts/ && ./deploy.sh"

echo "Starting php5-fpm daemon"
service php5-fpm start

echo "Starting nginx daemon"
nginx

