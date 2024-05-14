DROP DATABASE IF EXISTS Real_Estate;

CREATE DATABASE Real_Estate;
USE Real_Estate;

CREATE TABLE User_Roles(
    RoleID int not null AUTO_INCREMENT,
    RoleName varchar(128),
    PRIMARY KEY (RoleID)
);

CREATE TABLE Users(
    UserID int not null AUTO_INCREMENT,
    UserName varchar(128),
    Password varchar(16),
    RoleID int,
    PRIMARY KEY (UserID),
    CONSTRAINT FOREIGN KEY (RoleID) REFERENCES User_Roles(RoleID) ON DELETE SET NULL ON UPDATE CASCADE
);

CREATE TABLE Customer (
	CustomerID int not null AUTO_INCREMENT,
    CustomerName varchar(128),
    CustomerPhone varchar(12),
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
    Detail varchar(256),
    DateCreate datetime,
    Address varchar(256),
    PRIMARY KEY (ID)
);

INSERT INTO User_Roles(RoleName) VALUES ("admin"),("user");

DELIMITER //
CREATE TRIGGER user_insert_trigger
BEFORE INSERT ON Users
FOR EACH ROW
BEGIN
    IF NEW.RoleID IS NULL THEN
        SET NEW.RoleID = 2;
    END IF;
END//
DELIMITER ;

INSERT INTO Users(UserName,Password,RoleID) VALUES("admin","123",1);
INSERT INTO Users(UserName,Password) VALUES("user","123");

INSERT INTO Customer(CustomerName,UserID) VALUES("admin",1);
INSERT INTO Customer(CustomerName,UserID) VALUES("user",2);

INSERT INTO Real_Estate(Title,Price, Author, Type, Image, Area, Detail, DateCreate, Address) 
VALUES("BÁN ĐẤT Ở BÌNH PHAN",530000000,"Nguyễn Văn A", "Bất Động Sản","https://cdn.batdongsan.vn/queue/upload/file/realestate/2023/12/199095/638379/14-168-82-229-dat.jpg",
985, """BÁN ĐẤT Ở BÌNH PHAN 1000M2 , CHỢ GẠO, TIỀN GIANG, GẦN BỜ SÔNG GIA ĐÌNH CẦN BÁN GẤP Ạ, GIÁ CẢ CÓ THỂ THƯƠNG LƯỢNG""", 2023-9-8, "XÃ BÌNH PHAN ,Huyên Chơ Gạo tỉnh Tiền Giang");

INSERT INTO Real_Estate(Title,Price, Author, Type, Image, Area, Detail, DateCreate, Address) 
VALUES("CHỦ GẤP BÁN TRƯỚC TẾT LÊ HỒNG PHONG QUẬN 5 RA MẶT TIỀN ĐƯỜNG 15M",7350000000,"Phước Hân", "Bất Động Sản","https://cdn.batdongsan.vn/queue/upload/file/realestate/2023/12/199094/638378/113-172-162-253-58.jpg",
41, """Diện tích công nhận 41m, thực tế 66m ngang 3.3m.
- Kết cấu 2 tầng thông sàn, đang cho thuê 15tr/tháng.
- Vị trí trung tâm Quận 5, sát Quận 1, Quận 10.
- Pháp lý sạch sẽ sẽ, sổ vuông vức, hoàn công đủ, công chứng ngay.""", 
2024-1-5, "LÊ HỒNG PHONG PHƯỜNG 2 QUẬN 5");


INSERT INTO Real_Estate(Title,Price, Author, Type, Image, Area, Detail, DateCreate, Address) 
VALUES("BÁN ĐẤT Ở BÌNH PHAN",530000000,"Nguyễn Văn A", "Bất Động Sản","https://cdn.batdongsan.vn/queue/upload/thumb/file/realestate/2023/12/176298/638282/113-162-176-145-a.jpg",
985, """BÁN ĐẤT Ở BÌNH PHAN 1000M2 , CHỢ GẠO, TIỀN GIANG, GẦN BỜ SÔNG GIA ĐÌNH CẦN BÁN GẤP Ạ, GIÁ CẢ CÓ THỂ THƯƠNG LƯỢNG""", 2023-9-8, "XÃ BÌNH PHAN ,Huyên Chơ Gạo tỉnh Tiền Giang");

INSERT INTO Real_Estate(Title,Price, Author, Type, Image, Area, Detail, DateCreate, Address) 
VALUES("CHỦ GẤP BÁN TRƯỚC TẾT LÊ HỒNG PHONG QUẬN 5 RA MẶT TIỀN ĐƯỜNG 15M",7350000000,"Phước Hân", "Bất Động Sản","https://cdn.batdongsan.vn/queue/upload/thumb/file/realestate/2023/12/192888/638346/171-248-215-114-1.jpg",
41, """Diện tích công nhận 41m, thực tế 66m ngang 3.3m.
- Kết cấu 2 tầng thông sàn, đang cho thuê 15tr/tháng.
- Vị trí trung tâm Quận 5, sát Quận 1, Quận 10.
- Pháp lý sạch sẽ sẽ, sổ vuông vức, hoàn công đủ, công chứng ngay.""", 
2024-1-5, "LÊ HỒNG PHONG PHƯỜNG 2 QUẬN 5");


INSERT INTO Real_Estate(Title,Price, Author, Type, Image, Area, Detail, DateCreate, Address) 
VALUES("BÁN ĐẤT Ở BÌNH PHAN",530000000,"Nguyễn Văn A", "Bất Động Sản","https://cdn.batdongsan.vn/queue/upload/thumb/file/realestate/2023/12/186522/636702/14-238-95-38-01.jpg",
985, """BÁN ĐẤT Ở BÌNH PHAN 1000M2 , CHỢ GẠO, TIỀN GIANG, GẦN BỜ SÔNG GIA ĐÌNH CẦN BÁN GẤP Ạ, GIÁ CẢ CÓ THỂ THƯƠNG LƯỢNG""", 2023-9-8, "XÃ BÌNH PHAN ,Huyên Chơ Gạo tỉnh Tiền Giang");

INSERT INTO Real_Estate(Title,Price, Author, Type, Image, Area, Detail, DateCreate, Address) 
VALUES("CHỦ GẤP BÁN TRƯỚC TẾT LÊ HỒNG PHONG QUẬN 5 RA MẶT TIỀN ĐƯỜNG 15M",7350000000,"Phước Hân", "Bất Động Sản","https://cdn.batdongsan.vn/queue/upload/thumb/file/realestate/2023/12/196635/636726/27-2-0-200-70.jpg",
41, """Diện tích công nhận 41m, thực tế 66m ngang 3.3m.
- Kết cấu 2 tầng thông sàn, đang cho thuê 15tr/tháng.
- Vị trí trung tâm Quận 5, sát Quận 1, Quận 10.
- Pháp lý sạch sẽ sẽ, sổ vuông vức, hoàn công đủ, công chứng ngay.""", 
2024-1-5, "LÊ HỒNG PHONG PHƯỜNG 2 QUẬN 5");