FROM composer:2.8.5 AS composer

FROM php:8.3.17-apache-bullseye

RUN apt-get update && apt install zip unzip

COPY --from=composer /usr/bin/composer /usr/bin/composer
