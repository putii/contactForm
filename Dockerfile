FROM php:8.2-cli
EXPOSE 4000
WORKDIR /app
RUN docker-php-ext-install pdo pdo_mysql
CMD ["php", "-S", "0.0.0.0:4000"]