#FROM php:8.0-fpm-alpine
#FROM php:7.2-cli
FROM php:8.2-cli
#ADD ./php/www.conf /usr/local/etc/php-fpm.d/www.conf

#RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

#RUN mkdir -p /var/www/html

#ADD ../src/* /var/www/html

#RUN docker-php-ext-install pdo pdo_mysql

#RUN chown -R laravel:laravel /var/www/html


#WORKDIR /app
#COPY . /app

RUN apt-get update -y && apt-get install -y libmcrypt-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#RUN docker-php-ext-install pdo mbstring


WORKDIR /app
COPY . /app

RUN composer install

EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000