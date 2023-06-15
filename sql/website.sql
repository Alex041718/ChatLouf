DROP DATABASE IF EXISTS `WebSite`;
CREATE DATABASE IF NOT EXISTS `WebSite`;
USE `WebSite`;

CREATE TABLE `_User` (
    userID INT AUTO_INCREMENT PRIMARY KEY,
    mail VARCHAR(255),
    userName VARCHAR(255),
    password VARCHAR(255)
);

CREATE TABLE `_Message` (
    messageID INT AUTO_INCREMENT PRIMARY KEY,
    userID INT,
    time DATETIME,
    content VARCHAR(400),

    CONSTRAINT message_fk_user FOREIGN KEY (userID) REFERENCES `_User`(userID)
);


insert into _User (mail, userName, password) values ('alexandre.alm18@gmail.com', 'alexalm35', 'alm');
insert into _User (mail, userName, password) values ('cadoret.du', 'duncan', 'ph');