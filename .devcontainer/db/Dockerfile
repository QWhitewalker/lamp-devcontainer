# MariaDB Base image
FROM mariadb

WORKDIR /docker-entrypoint-initdb.d

COPY forest.sql .

RUN chmod 700 forest.sql

RUN top >> log.txt

#RUN mariadb -u root -ppassword < forest.sql

#ENTRYPOINT ["docker-entrypoint.sh"]

#CMD ["mariadbd"]