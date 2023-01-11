

CREATE TABLE IF NOT EXISTS password_info(
    id  INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username  varchar(150) NOT NULL,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(300) NOT NULL,
    website VARCHAR(25) NOT NULL
);