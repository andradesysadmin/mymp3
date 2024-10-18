FROM php:latest

WORKDIR /var/app

COPY . .

EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80"]
