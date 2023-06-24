FROM mcr.microsoft.com/devcontainers/base:jammy

RUN apt update && apt-get -y install apache2

RUN rm /var/www/html/index.html && rmdir /var/www/html && ln -s /workspaces/lamp-devcontainer/html /var/www

EXPOSE 80