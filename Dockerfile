# Dockerfile for Laravel Backend Deployment on Google Cloud Run
FROM php:8.3-cli-alpine

# Install system dependencies & PostgreSQL extensions
RUN apk add --no-cache \
    postgresql-dev \
    libzip-dev \
    icu-dev \
    oniguruma-dev \
    git \
    unzip

# Install PHP extensions required for Laravel & Neon PostgreSQL
RUN docker-php-ext-install pdo pdo_pgsql pgsql zip mbstring intl bcmath opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy application files
COPY . .

# Install dependencies (production mode)
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Set directory permissions
RUN chmod -R 777 storage bootstrap/cache

# Production Environment default settings
ENV PORT=8080
EXPOSE 8080

# Entrypoint script to handle PORT dynamically on Cloud Run
CMD ["sh", "-c", "php artisan config:cache && php artisan route:cache && php artisan view:cache && php artisan serve --host=0.0.0.0 --port=${PORT:-8080}"]
