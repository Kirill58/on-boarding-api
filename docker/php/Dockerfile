FROM php:7-fpm

MAINTAINER Ivan Levchuk <levchuk.ivan.by@gmail.com>

RUN apt-get update && apt-get install -y --no-install-recommends \
        git \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
