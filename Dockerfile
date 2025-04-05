# Базовый образ
FROM php:8.2-fpm
# Устанавливаем зависимости
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libpq-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install pdo_mysql mbstring zip exif pcntl gd && \
    apt-get clean && rm -rf /var/lib/apt/lists/*
# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# Устанавливаем рабочую директорию
WORKDIR /var/www
# Копируем файлы проекта
COPY . .
# Устанавливаем зависимости Laravel
RUN composer install
# Создаём пользователя и группу www для приложения Laravel
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www
# Даем права на запись storage и bootstrap/cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
# Открываем порт
EXPOSE 9000
# запускаем php-fpm
CMD ["php-fpm"]
