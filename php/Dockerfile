FROM php:fpm
RUN docker-php-ext-install mysqli pdo pdo_mysql opcache
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/bin --filename=composer

