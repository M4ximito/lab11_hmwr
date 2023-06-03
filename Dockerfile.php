FROM php:7.4-fpm

# Instalacja rozszerzenia mysqli dla PHP
RUN docker-php-ext-install mysqli

# Ustawienie katalogu roboczego na /var/www/html/
WORKDIR /var/www/html
