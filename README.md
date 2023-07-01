# lamp-devcontainer

This is a LAMP devcontainer.
All content inside the html folder is visible to the webclient via the document-root of the webserver.

This Devcontainer is intended for testing and local development. Therefore a couple of security measures arent taken as seriously. The Database Connection doesnt use TLS and the database root password is highly insecure.

## scss
I also installed scss. Any scss inside the scss folder is configured to compile automatically into normal css inside the css folder.Therefore you should never directly edit the css because it will get overwritten.