FROM php:8.1-fpm

COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html
# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u 1000 -d /home/soviena soviena
RUN mkdir -p /home/soviena/.composer && \
    chown -R soviena:soviena /home/soviena

COPY entrypoint.sh /home/soviena/
RUN chmod +x /home/soviena/entrypoint.sh
# Set working directory
WORKDIR /var/www/html/

USER soviena

EXPOSE 9000

ENTRYPOINT ["/home/soviena/entrypoint.sh"]

