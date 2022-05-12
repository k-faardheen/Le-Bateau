CREATE TABLE STUDENT(
    Student_Id VARCHAR(4) NOT NULL,
    PRIMARY KEY(Student_Id),
    Registration_id varchar(5),
    FOREIGN KEY (Registration_id) REFERENCES REGISTRATION(Registration_ID) ON DELETE CASCADE
)

insert into Student (Student_Id, Registration_Id)
values  ('S201', 'R201'),
        ('S202', 'R202'),
        ('S203', 'R203'),
        ('S204', 'R204'),
        ('S205', 'R205'),
        ('S206', 'R206'),
        ('S207', 'R207'),
        ('S208', 'R208'),
        ('S209', 'R209'),
        ('S210', 'R210'),
        ('S211', 'R211'),
        ('S212', 'R212'),
        ('S213', 'R213'),
        ('S214', 'R214'),
        ('S215', 'R215'),
        ('S216', 'R216');