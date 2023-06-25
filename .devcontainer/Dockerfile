# Ubuntu Devcontainer Base image
FROM mcr.microsoft.com/devcontainers/base:jammy

# install Apache webserver
RUN apt update && apt-get -y install apache2

# delete standard index.html of apache and create symlink to devcontainer directory
RUN rm /var/www/html/index.html && rmdir /var/www/html && ln -s /workspaces/lamp-devcontainer/html /var/www

# install php
RUN apt-get -y install php

# install sass
RUN apt-get -y install sass

EXPOSE 80