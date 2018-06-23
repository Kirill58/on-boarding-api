FROM php:7-fpm

MAINTAINER Ivan Levchuk <levchuk.ivan.by@gmail.com>

RUN apt-get update && apt-get install -y \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
