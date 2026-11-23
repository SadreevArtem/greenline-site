FROM composer:2 AS composer

FROM php:8.5-apache
RUN apt-get update \
    && apt-get install -y --no-install-recommends libonig-dev libzip-dev unzip \
    && docker-php-ext-install -j2 mbstring pdo_mysql zip \
    && a2enmod rewrite \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/greenline
COPY --from=composer /usr/bin/composer /usr/local/bin/composer
COPY composer.json composer.lock ./
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install --no-dev --no-interaction --prefer-dist --no-progress --no-scripts --optimize-autoloader

COPY . .
COPY deploy/apache.conf /etc/apache2/sites-available/000-default.conf
RUN install -d -o www-data -g www-data -m 0750 runtime web/assets \
    && rm web/index-test.php
