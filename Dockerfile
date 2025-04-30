FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    unzip \
    zip \
    curl \
    git \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Laravel permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Expose port
EXPOSE 80
