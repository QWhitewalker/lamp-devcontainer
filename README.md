# LAMP Dev Container

This is a LAMP Dev Container.
It runs on Ubuntu and has an Apache Webserver, MariaDB and PHP installed.
All content inside the html folder is visible to the webclient via the document-root of the webserver.
The Website is available via ***localhost:80***

This Dev Container is intended for testing and local development. Therefore a couple of security measures arent taken as seriously. The Database Connection doesnt use TLS and the database root password is highly insecure.

## scss
I installed [scss](https://sass-lang.com/documentation/). Any scss inside the scss folder is configured to compile automatically into normal css inside the css folder.Therefore you should never directly edit the css because it will get overwritten.

## phpMyAdmin
I installed phpMyAdmin. With it you can easily administrate the database server via GUI. It's available via ***localhost:8080***.

## Hello World
Inside the **style.scss** and the **index.php** file i inserted some Hello World code. If you dont have need for it you can delete the content of style.scss and the content of the body inside index.php.

## sample database
The MariaDB server contains a sample database named **forest** you can play around with.