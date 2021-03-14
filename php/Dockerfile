FROM php:7.4-fpm-alpine
RUN apk upgrade --update && \
  apk --no-cache add icu-dev autoconf make g++ gcc
COPY php.ini /usr/local/etc/php/
RUN docker-php-ext-install pdo_mysql mysqli
