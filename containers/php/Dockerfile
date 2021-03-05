FROM php:7.2-fpm

MAINTAINER test <test@test.com>

RUN mkdir /var/log/test
RUN chmod 777 /var/log/test

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libzip-dev \
	    libpq-dev \
	&& docker-php-ext-install zip \
    #&& docker-php-ext-install -j$(nproc) iconv mcrypt \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

#        libpng12-dev \

RUN docker-php-ext-install mbstring
RUN docker-php-ext-install exif
RUN docker-php-ext-install opcache
RUN docker-php-ext-install bcmath
RUN docker-php-ext-enable bcmath
RUN docker-php-ext-enable zip
# RUN apt-get install php7.0-zip

RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pgsql pdo_pgsql

CMD ["php-fpm"]