# LAMP Dev Container

This is a LAMP Dev Container.
It runs on Ubuntu and has an Apache webserver, MariaDB and PHP installed.
All content inside the html folder is visible to the webclient via the document-root of the webserver.
The Website is available via ***localhost:80***.

This Dev Container is intended for testing and local development. Therefore a couple of security measures aren't taken as seriously. The Database Connection doesn't use TLS and the database root password is highly insecure.

## SCSS
I installed [SCSS](https://sass-lang.com/documentation/). Any SCSS inside the scss folder is configured to compile automatically into normal CSS inside the css folder. Therefore you should never directly edit the CSS because it will get overwritten.

## phpMyAdmin
I installed phpMyAdmin. With it you can easily administrate the database server via GUI. It's available via ***localhost:8080***.

## Hello World
I inserted some Hello World code inside the **style.scss** and the **index.php** file. If you don't have need for it you can delete the content of style.scss and the content of the body inside index.php.

## sample database
The MariaDB server contains a sample database named **forest** you can play around with.

# What's a Dev Container
*If you know what a Dev Container is and how to use it, you can skip this section.*

A Dev Container (in this case for Visual Studio Code) lets you write and execute code live inside a container. You can set specific Visual Studio Code settings and extension for inside the container. You can set these in the **devcontainer.json** file.

## Setup
Here i show a simple setup you can use to run this Dev Container. (Windows)

### installing
- download and install [git](https://git-scm.com/downloads)
- download and install [Visual Studio Code](https://code.visualstudio.com/)
- download and install [Docker Desktop](https://www.docker.com/)
- install the [Dev Containers](https://marketplace.visualstudio.com/items?itemName=ms-vscode-remote.remote-containers) Visual Studio Code Extension

### running
- run Docker
- open Visual Studio Code
- Press **Ctrl + Shift + P**
- Type **Clone Repository in Container Volume** and press **Enter**
- Insert the git link to this GitHub (https://github.com/QWhitewalker/lamp-devcontainer.git) and press **Enter**

### stopping
- Press **Ctrl + Shift + P**
- Type **Close Remote Connection** and press **Enter**
- stop Docker

### changing
If you want to make changes and keep them, you probably would want to do a few additional things. I won't explain it here in detail, but you might want to create a GitHub account and use this repo inside your own GitHub. If you want to push changes, remember to [set your local git username and email](https://git-scm.com/book/en/v2/Getting-Started-First-Time-Git-Setup#_your_identity) to the same username and email as your GitHub.
