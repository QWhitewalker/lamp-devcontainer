# MariaDB Base image
FROM mariadb

#WORKDIR /docker-entrypoint-initdb.d

COPY forest.sql /docker-entrypoint-initdb.d

#RUN chmod 700 forest.sql


#RUN mariadbd --user=root && top -b -n 1 > log.txt

#RUN mariadb -u root -ppassword < forest.sql

#ENTRYPOINT docker-entrypoint.sh && while sleep 1000; do :; done

#CMD ["mariadbd"]