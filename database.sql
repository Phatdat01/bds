DROP DATABASE IF EXISTS Real_Estate;

CREATE DATABASE Real_Estate;
USE Real_Estate;

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

CREATE TABLE Real_Estate(
    ID int AUTO_INCREMENT,
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

INSERT INTO Real_Estate(Title,Price, Author, Type, Image, Area, Detail, DateCreate, Address) 
VALUES("BÁN ĐẤT Ở BÌNH PHAN",530000000,"Nguyễn Văn A", "Bất Động Sản","https://cdn.batdongsan.vn/queue/upload/file/realestate/2023/12/199095/638379/14-168-82-229-dat.jpg",
985, """BÁN ĐẤT Ở BÌNH PHAN 1000M2 , CHỢ GẠO, TIỀN GIANG, GẦN BỜ SÔNG GIA ĐÌNH CẦN BÁN GẤP Ạ, GIÁ CẢ CÓ THỂ THƯƠNG LƯỢNG""", 2023-9-8, "XÃ BÌNH PHAN ,Huyên Chơ Gạo tỉnh Tiền Giang");