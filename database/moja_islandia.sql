DROP DATABASE moja_islandia;
CREATE DATABASE moja_islandia;

CREATE TABLE users
(
  id_user int(6) NOT NULL AUTO_INCREMENT,
  nick varchar(35) NOT NULL,
  password varchar(64) NOT NULL,
  email varchar(100) NOT NULL,
  added timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  ip varchar(50) NOT NULL,
  PRIMARY KEY (id_user)
); 

CREATE TABLE wpisy
(
	id_wpis integer NOT NULL AUTO_INCREMENT,
    id_user int(6) NOT NULL,
    wpis varchar(300) NOT NULL,
	added timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (id_wpis)
);




