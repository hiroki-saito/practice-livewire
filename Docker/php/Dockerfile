FROM node:18 AS node

FROM php:8.1-apache

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN apt-get update \
 && apt-get install git curl unzip libonig-dev libxml2-dev -y \
 && apt-get clean \
 && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
 && php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
 && php composer-setup.php \
 && php -r "unlink('composer-setup.php');" \
 && mv composer.phar /usr/local/bin/composer \
 && pecl install apcu \
 && docker-php-ext-install -j "$(nproc)" pdo_mysql mbstring pcntl bcmath opcache \
 && docker-php-ext-enable apcu \
 && mkdir -p /var/www/livewire \
 && a2enmod rewrite expires

COPY --from=node /usr/local/bin/ /usr/local/bin/
COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules

WORKDIR /var/www/livewire

COPY Docker/php/sites-available/000-default.conf "$APACHE_CONFDIR/sites-available/000-default.conf"
COPY Docker/php/conf.d/cloud-run.ini-development "$PHP_INI_DIR/conf.d/cloud-run.ini"
RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
