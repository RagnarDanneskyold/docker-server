FROM php:8.1-fpm
# На каждый RUN создается новый слой в образе, поэтому рекомендуется объединять команды. обязательно проставляем перенос строк
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli \
  docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl curl gd \

# docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl curl gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#WORKDIR /var/www/html

# заготовка копировать зависимости composer.lock and composer.json в контейнер
# COPY composer.lock composer.json /var/www/public_html/