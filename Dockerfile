# Lab 4 Task 2 — PHP/Apache web app image
# NOTE: Type these lines manually to avoid “smart quotes” issues.
FROM php:7.4-apache
# Copy everything in this directory into Apache's web root
COPY . /var/www/html/
# Expose HTTP
EXPOSE 80
