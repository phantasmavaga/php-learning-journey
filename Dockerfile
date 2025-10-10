FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    libxml2-dev \
    libsqlite3-dev \
 && docker-php-ext-install pdo_sqlite soap \
 && a2enmod rewrite \
 && rm -rf /var/lib/apt/lists/*
