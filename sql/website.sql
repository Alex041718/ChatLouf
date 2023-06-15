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
    time VARCHAR(19),
    content VARCHAR(400),

    CONSTRAINT message_fk_user FOREIGN KEY (userID) REFERENCES `_User`(userID)
);


insert into _User (mail, userName, password) values ('alexandre.alm18@gmail.com', 'alexalm35', 'alm');
insert into _User (mail, userName, password) values ('	
cadoret.du@gmail.com', 'duncan', 'ph');


insert into _Message (userID, time, content) values (1, NOW(), 'Bonne nuit les tipeu');
insert into _Message (userID, time, content) values (2, NOW(), 'À peut-être une alternance mais ne vendons pas la peau de l ours avant de l avoir tué');
insert into _Message (userID, time, content) values (1, NOW(), 'Je veux me faire tatouer une fleur ! <3');
insert into _Message (userID, time, content) values (2, NOW(), 'La madame est trop maginifique mais j ai peur');
insert into _Message (userID, time, content) values (1, NOW(), 'C est vrai que c est chouette les madame (Manon coeur sur toi)');