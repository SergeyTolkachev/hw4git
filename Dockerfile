FROM php:7.4.1-apache
RUN apt update
RUN apt install libpq-dev -y
RUN docker-php-ext-install pdo_pgsql