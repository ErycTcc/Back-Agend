FROM docker.io/php:8.1-fpm

WORKDIR /app

COPY --from=docker.io/composer:latest /usr/bin/composer /usr/bin/composer

RUN apt update					\
	&& apt install zip unzip -y		\
	&& docker-php-ext-install pdo_mysql	\
	&& chown 1000:1000 -R .

USER 1000
