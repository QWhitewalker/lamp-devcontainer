-- creatin a database named "forest"
CREATE DATABASE forest;

-- opening the database "forest"
USE forest;

-- creating a new table named "tbl_tree"
CREATE TABLE tbl_tree(
PID INT NOT NULL AUTO_INCREMENT,
name VARCHAR(50),
PRIMARY KEY(PID)
);

-- inserting 5 rows into the table "tbl_tree"
INSERT tbl_tree (name)
VALUES ('Oak'),('Maple'),('Birch'),('Elm'),('Hawthorn');