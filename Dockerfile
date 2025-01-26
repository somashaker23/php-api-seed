# Use official PHP image
FROM php:8.0-fpm

# Install Composer (optional if you use Composer in Docker)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
