CREATE TABLE users(
	id int not null AUTO_INCREMENT,
	fullname VARCHAR(100) NOT NULL,
	username VARCHAR(100) NOT NULL,
	password VARCHAR(250) NOT NULL,
	CONSTRAINT pk_user PRIMARY KEY(id)
) ENGINE=InnoDB  CHARSET'utf8';