# Download WordPress DockerFile
https://github.com/docker-library/wordpress/tree/master/latest/php8.0/apache

# set files permissions
chmod +x docker-entrypoint.sh

# Specify database information
wp-config.php

# Build
docker build -t wordpress:php8.0-apache-v5.8.2 .
