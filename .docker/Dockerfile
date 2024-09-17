FROM php:8.3-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    curl \
    unzip \
    gnupg

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

RUN npm install -g serverless

COPY . .

EXPOSE 80

CMD [ "php", "-S", "0.0.0.0:80", "-t", "public" ]
