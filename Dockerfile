# Stage 1: Build assets
FROM node:18 as node

WORKDIR /app

# Copy package files and install dependencies
COPY package*.json ./
RUN npm install

# Copy required frontend files
COPY resources/ resources/
COPY vite.config.js .
COPY tailwind.config.js .
COPY postcss.config.js .

# Expose the port for the Vite dev server
EXPOSE 3000

# Start the Vite development server
CMD ["npm", "run", "dev"]

# Stage 2: Laravel setup
FROM php:8.1-fpm-alpine

# Install system dependencies and PHP extensions
RUN apk add --no-cache \
    bash git curl unzip libpng-dev libzip-dev libpq-dev oniguruma-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring zip bcmath exif pcntl gd

# Set working directory
WORKDIR /var/www

# Copy Laravel app code
COPY . .

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 storage bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
