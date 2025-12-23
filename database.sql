CREATE TABLE employee (
    User_ID INT PRIMARY KEY,
    User_Name VARCHAR(100)
);

CREATE TABLE location (
    Loc_ID INT PRIMARY KEY,
    Room_Number VARCHAR(50)
);

CREATE TABLE asset (
    Asset_ID INT PRIMARY KEY AUTO_INCREMENT,
    Serial_Number VARCHAR(50),
    Device_Type VARCHAR(50),
    Brand_Model VARCHAR(100),
    IP_Address VARCHAR(20),
    Install_Date DATE,
    Status VARCHAR(20),
    User_ID INT,
    Loc_ID INT,
    FOREIGN KEY (User_ID) REFERENCES employee(User_ID),
    FOREIGN KEY (Loc_ID) REFERENCES location(Loc_ID)
);

INSERT INTO employee VALUES (101, 'Ahmed Ali'), (102, 'Sara Mohsen'), (103, 'Khalid Sami');
INSERT INTO location VALUES (1, 'IT Dept - Room 202'), (2, 'HR Dept - Room 105'), (3, 'Pharmacy - Main');
INSERT INTO asset (Serial_Number, Device_Type, Brand_Model, IP_Address, Install_Date, Status, User_ID, Loc_ID) VALUES 
('SN-1001', 'Computer', 'Dell OptiPlex 7090', '192.168.1.50', '2023-01-15', 'Active', 101, 1),
('SN-1002', 'Printer', 'HP LaserJet Pro', '192.168.1.51', '2022-11-20', 'Active', 102, 2),
('SN-1003', 'Scanner', 'Canon ImageFormula', '192.168.1.52', '2021-05-10', 'Under Repair', 103, 3);
