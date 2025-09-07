FROM php:8.2-cli
EXPOSE 4000
WORKDIR /app
CMD ["php", "-S", "0.0.0.0:4000"]