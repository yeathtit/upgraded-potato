FROM php:8.1-apache

# Copy application files into the container
COPY . /var/www/html/

# Remove non-web files from the web root
RUN rm -rf /var/www/html/.git \
           /var/www/html/.github

EXPOSE 80
