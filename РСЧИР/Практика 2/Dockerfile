FROM php:7.3-apache
#1 практика
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

#для рисовалки
RUN apt-get update && apt-get install -y sendmail libpng-dev
RUN docker-php-ext-install gd