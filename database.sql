create database school;
use school;
CREATE TABLE students (
    id INT(8),
    firstname CHAR(20),
    lastname CHAR(20),
    PRIMARY KEY (id)
);

INSERT INTO students (id, firstname, lastname) VALUES
    (1, 'YACINE', 'KERMAME');
   

CREATE TABLE admin (
    id INT(8),
    firstname CHAR(20),
    lastname CHAR(20),
    PRIMARY KEY (id)
);

INSERT INTO admin (id, firstname, lastname) VALUES (1, 'yacine', '123456789');

CREATE TABLE teacher (
    id INT(8),
    firstname CHAR(20),
    lastname CHAR(20),
    module CHAR(30),
    PRIMARY KEY (id)
);

INSERT INTO teacher (id, firstname, lastname, module) VALUES
    (1, 'yacine', 'kermame', 'Web Developpement');
  
