FROM mcr.microsoft.com/devcontainers/base:jammy

RUN sudo apt update

RUN sudo apt-get -y install apache2

EXPOSE 80

CMD ["apache2","start"]