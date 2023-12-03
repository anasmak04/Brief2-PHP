FROM php:latest

COPY /index.php


EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80", "index.php"]
