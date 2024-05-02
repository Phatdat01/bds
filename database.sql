DROP DATABASE IF EXISTS Real_Estate;

CREATE DATABASE Real_Estate;
USE Real_Estate;

CREATE TABLE Real_Estate(
    ID varchar(50),
	Title varchar(200),
    Price double(12,2),
    Author varchar(128),
    Type varchar(128),
    Image varchar(128),
    Area double(12,2),
    Detail nvarchar(256),
    DateCreate datetime,
    Address nvarchar(256),
    PRIMARY KEY (ID)
);

CREATE TABLE Users(
    UserID int not null AUTO_INCREMENT,
    UserName varchar(128),
    Password varchar(16),
    PRIMARY KEY (UserID)
);

CREATE TABLE Customer (
	CustomerID int not null AUTO_INCREMENT,
    CustomerName varchar(128),
    CustomerPhone varchar(12),
    CustomerIC varchar(14),
    CustomerEmail varchar(200),
    CustomerAddress varchar(200),
    CustomerGender varchar(10),
    UserID int,
    PRIMARY KEY (CustomerID),
    CONSTRAINT FOREIGN KEY (UserID) REFERENCES Users(UserID) ON DELETE SET NULL ON UPDATE CASCADE
);