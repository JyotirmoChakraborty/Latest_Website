CREATE DATABASE IF NOT EXISTS `alien`;

USE `alien`;

DROP TABLE IF EXISTS `slider`;

DROP TABLE IF EXISTS `articles`;

DROP TABLE IF EXISTS `blog`;

DROP TABLE IF EXISTS `catagories`;

DROP TABLE IF EXISTS `contacted_data`;

DROP TABLE IF EXISTS `testimonial`;

DROP TABLE IF EXISTS `writter`;

CREATE TABLE Articles (
    Article_Id INTEGER NOT NULL AUTO_INCREMENT COMMENT 'This is the primary key',
    Article_Title TEXT NOT NULL COMMENT 'This is the title',
    Article_Body TEXT NOT NULL COMMENT 'This is the body',
    Created_At TIMESTAMP NOT NULL COMMENT 'This is the date at which this was created',
    Updated_At TIMESTAMP NOT NULL COMMENT 'This is the date at which this was updated',
    Writer_Id INTEGER NOT NULL COMMENT 'This is the primary key',
    PRIMARY KEY (Article_Id)
) COMMENT 'This is the table of articles';

CREATE TABLE Blog (
    Blog_Id INTEGER NOT NULL AUTO_INCREMENT COMMENT 'This is the primary key',
    Blog_Title TEXT NOT NULL COMMENT 'This is the title',
    Blog_Body TEXT NOT NULL COMMENT 'This is the body',
    Blog_Image LONGBLOB NOT NULL COMMENT 'This is the blog image',
    Created_At TIMESTAMP NOT NULL COMMENT 'This is the date at which it was created at',
    Updated_At TIMESTAMP NOT NULL COMMENT 'This is the date at which it was updated at',
    Writer_Id INTEGER NOT NULL COMMENT 'This is the primary key',
    PRIMARY KEY (Blog_Id)
) COMMENT 'This is the table for blogs';

CREATE TABLE Catagories (
    Catagory_Id INTEGER NOT NULL AUTO_INCREMENT COMMENT 'This is the primary key',
    Catagory_Title TEXT NOT NULL COMMENT 'This is the title',
    Catagory_Body TEXT NOT NULL COMMENT 'This is the body',
    Catagory_Image LONGBLOB NOT NULL COMMENT 'This is the image section',
    Created_At TIMESTAMP NOT NULL COMMENT 'This is the date at which this was created ',
    Updated_At TIMESTAMP NOT NULL COMMENT 'This is the date at which this was updated',
    Writer_Id INTEGER NOT NULL COMMENT 'This is the primary key',
    PRIMARY KEY (Catagory_Id)
) COMMENT 'This is the table of catagories';

DROP TABLE IF EXISTS `Contacted_Data`;

CREATE TABLE Contacted_Data (
    Contact_Id INTEGER NOT NULL AUTO_INCREMENT COMMENT 'This is the primary key',
    Person_Name VARCHAR(225) NOT NULL COMMENT 'This is the name of the person',
    Phone_Numer INTEGER NOT NULL COMMENT 'This is the phone number of the person',
    Person_Email CHAR(20) NOT NULL COMMENT 'This is the email id of the person',
    Person_Message TEXT NOT NULL COMMENT 'This is the message , which the person wants us to know',
    Contacted_Date CHAR(10) NOT NULL COMMENT 'This is the date , at which the person contacted is',
    Created_At TIMESTAMP NOT NULL COMMENT 'This is the date , at which the date was created',
    Updated_At TIMESTAMP NULL COMMENT 'This is the date , at which the date was updated',
    PRIMARY KEY (Contact_Id)
) COMMENT 'This is the table where the people , who contacted us will be shown';

CREATE TABLE Slider (
    Slider_Id INTEGER NOT NULL AUTO_INCREMENT COMMENT 'This is the primary key',
    Slider_Title TEXT NOT NULL COMMENT 'This is the title',
    Updated_At CHAR(10) NOT NULL COMMENT 'This is the date at which this was updated',
    Created_At CHAR(10) NOT NULL COMMENT 'This is the date at which this was created',
    Writer_Id INTEGER NOT NULL COMMENT 'This is the primary key',
    PRIMARY KEY (Slider_Id)
) COMMENT 'Slider Table';

CREATE TABLE Testimonial (
    Testimonial_Id INTEGER NOT NULL AUTO_INCREMENT COMMENT 'This is the primary key',
    Customer_Name VARCHAR(225) NOT NULL COMMENT 'This is the customer name',
    Testimonial TEXT NOT NULL COMMENT 'This is the testimonial',
    Customer_Image LONGBLOB NOT NULL COMMENT 'This is the customer image',
    Created_At TIMESTAMP NOT NULL COMMENT 'This is the date at which the data was created',
    Updated_At TIMESTAMP NOT NULL COMMENT 'This is the date at which the data was updated',
    Writer_Id INTEGER NOT NULL COMMENT 'This is the primary key',
    PRIMARY KEY (Testimonial_Id)
) COMMENT 'This is the table for testimonial';

CREATE TABLE Writter (
    Writer_Id INTEGER NOT NULL AUTO_INCREMENT COMMENT 'This is the primary key',
    Writter_First_Name VARCHAR(225) NOT NULL COMMENT 'This is the first name of the writter',
    Writter_Last_Name VARCHAR(225) NOT NULL COMMENT 'This is the last name of the writter',
    Writter_Pnone_Number INTEGER NOT NULL COMMENT 'This is the phone number of the writter',
    Writter_Email CHAR(30) NOT NULL COMMENT 'This is the email id of the writter',
    Writter_Address VARCHAR(225) NOT NULL COMMENT 'This is the address of the writter',
    Created_At TIMESTAMP NOT NULL COMMENT 'This is the date at which the data was created',
    Updated_At TIMESTAMP NOT NULL COMMENT 'This is the date at which the data was updated',
    PRIMARY KEY (Writer_Id)
) COMMENT 'Detailes of the writter who wrote all of these';

ALTER TABLE Slider
ADD CONSTRAINT FK_Writter_TO_Slider FOREIGN KEY (Writer_Id) REFERENCES Writter (Writer_Id);

ALTER TABLE Catagories
ADD CONSTRAINT FK_Writter_TO_Catagories FOREIGN KEY (Writer_Id) REFERENCES Writter (Writer_Id);

ALTER TABLE Articles
ADD CONSTRAINT FK_Writter_TO_Articles FOREIGN KEY (Writer_Id) REFERENCES Writter (Writer_Id);

ALTER TABLE Blog
ADD CONSTRAINT FK_Writter_TO_Blog FOREIGN KEY (Writer_Id) REFERENCES Writter (Writer_Id);

ALTER TABLE Testimonial
ADD CONSTRAINT FK_Writter_TO_Testimonial FOREIGN KEY (Writer_Id) REFERENCES Writter (Writer_Id);

SHOW TABLES;

DESCRIBE `slider`;

SELECT * FROM `slider` WHERE 1;

SELECT * FROM `articles` WHERE 1;