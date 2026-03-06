FROM php:8.1-apache

LABEL org.opencontainers.image.source="https://github.com/yeathtit/upgraded-potato"
LABEL org.opencontainers.image.description="upgraded-potato web application"
LABEL org.opencontainers.image.licenses="MIT"

# Copy application files into the Apache web root
COPY . /var/www/html/

# Remove version-control and CI metadata from the web root
RUN rm -rf /var/www/html/.git /var/www/html/.github

EXPOSE 80
