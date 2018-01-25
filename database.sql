CREATE DATABASE myOOP;

CREATE TABLE tbl_users(
	id int unsigned AUTO_INCREMENT PRIMARY KEY,
	full_name varchar(255),
	user_name varchar(255) UNIQUE NOT NULL,
	password varchar(255) NOT NULL,
	user_email varchar(255) UNIQUE NOT NULL,
	profile_image varchar(255),
	created_on datetime,
	index (full_name, user_name)
)