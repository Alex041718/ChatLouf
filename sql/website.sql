CREATE DATABASE IF NOT EXISTS `WebSite`;
USE `WebSite`;

CREATE TABLE `_User` (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    mail VARCHAR(255),
    userName VARCHAR(255),
    password VARCHAR(255)
);

insert into _User (mail, userName, password) values ('alexandre.alm18@gmail.com, alexalm35, alm');