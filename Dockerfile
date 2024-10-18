FROM php:5.4-fpm

COPY --link ./app.dev.ini $PHP_INI_DIR/conf.d/app.dev.ini

RUN docker-php-ext-install mysql \
    && docker-php-ext-enable mysql

