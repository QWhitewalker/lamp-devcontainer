# MariaDB Base image
FROM mariadb

# copy database initialization script into image
# (gets executed on first container start)
COPY forest.sql /docker-entrypoint-initdb.d