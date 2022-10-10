CREATE DATABASE IF NOT EXISTS appDB2;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT ON appDB2.* TO 'user'@'%';
FLUSH PRIVILEGES;
set names 'utf8';
CREATE TABLE IF NOT EXISTS users (user varchar(191) not null, passwd varchar(191), primary key (user));
INSERT INTO users VALUE ('holz', '{SHA}fCIvspJ9goryL1khNOiTJIBjfA0='); 

CREATE TABLE `books` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`book` VARCHAR(200),
	PRIMARY KEY (`id`)
);
INSERT INTO books VALUE (NULL, 'Голиков', 'Колобок'); 
INSERT INTO books VALUE (NULL, 'Каменцева', 'Война и мир'); 
INSERT INTO books VALUE (NULL, 'Хмизюк', 'Маша и Медведь'); 
INSERT INTO books VALUE (NULL, 'Юрзина', 'Айболит'); 
INSERT INTO books VALUE (NULL, 'Волков', 'Крестный отец'); 