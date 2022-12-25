# feedbackapp
Kell egy "feedbackapp" nevű adatbázis.
Kell két darab tábla.
CREATE TABLE answers(
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FROM_WHERE tinyint,
    SUBSCRIBE tinyint,
    EMAIL tinytext,
    SATISFACTION tinyint,
    DATE_TIME datetime
);
CREATE TABLE users(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username longtext NOT NULL,
    pwd longtexr NOT NULL
);
 Az users táblába kézzel kell beírni az adatot:
 admin
 $2y$10$RRHmtsJlBPU2Mqz.LkJYmOp4iHAr3q45qrtcYNv/U8yoXun0WqOFm