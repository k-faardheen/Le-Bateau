-- CREATE ADMIN TABLE
CREATE TABLE ADMINISTRATOR(
    Admin_Id VARCHAR(4) NOT NULL,
    PRIMARY KEY(Admin_Id),
    Registration_Id varchar(5),
    FOREIGN KEY (Registration_id) REFERENCES REGISTRATION(Registration_ID)
)
--POPULATE INTO TABLE
INSERT INTO ADMINISTRATOR (Admin_Id, Registration_Id)
VALUES  ('A001', 'R001'),
        ('A002', 'R002');