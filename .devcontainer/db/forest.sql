CREATE DATABASE forest;

USE forest;

CREATE TABLE tbl_tree(
PID INT NOT NULL AUTO_INCREMENT,
name VARCHAR(50),
PRIMARY KEY(PID)
);

INSERT tbl_tree (name)
VALUES ('Oak'),('Maple'),('Birch'),('Elm'),('Hawthorn');