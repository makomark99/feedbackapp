# feedbackapp
sql: 
Adtabázis létrehozása: CREATE DATABASE feedbackapp;
Fő tábla létrehozása: 
CREATE TABLE answers(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FROM_WHERE BIT NOT NULL,
    SUBCRIBE BIT NOT NULL,
    EMAIL TINYTEXT NOT NULL,
    SATISFACTION BIT NOT NULL
);
Az adatbázisba már nagyon szépen feltölti