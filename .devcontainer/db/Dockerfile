# MariaDB Base image
FROM mariadb

WORKDIR /docker-entrypoint-initdb.d

COPY forest.sql .

RUN chmod 700 forest.sql

ENTRYPOINT docker-entrypoint.sh

# && mariadb -u root -ppassword < forest.sql