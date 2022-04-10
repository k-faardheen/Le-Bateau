-- creating enrollement table

CREATE TABLE ENROLLEMENT(

    Enroll_Id VARCHAR(4) NOT NULL,
    PRIMARY KEY (Enroll_Id),
    Course_Id VARCHAR(4),
    FOREIGN KEY (Course_Id) REFERENCES course(Course_Id),
     Student_Id VARCHAR(4),
    FOREIGN KEY (Student_Id) REFERENCES Student(Student_Id),
     Date_Enrolled TIMESTAMP
)

-- populating into the table

INSERT INTO ENROLLEMENT (Enroll_Id, Course_Id, Student_Id, Date_Enrolled)
values  ('E001', 'C003', 'S213', CURRENT_TIMESTAMP),
        ('E002', 'C014', 'S206', CURRENT_TIMESTAMP),
        ('E003', 'C003', 'S211', CURRENT_TIMESTAMP),
        ('E004', 'C009', 'S201', CURRENT_TIMESTAMP),
        ('E005', 'C004', 'S204', CURRENT_TIMESTAMP),
        ('E006', 'C001', 'S202', CURRENT_TIMESTAMP),
        ('E007', 'C009', 'S209', CURRENT_TIMESTAMP),
        ('E008', 'C013', 'S205', CURRENT_TIMESTAMP),
        ('E009', 'C007', 'S209', CURRENT_TIMESTAMP),
        ('E010', 'C014', 'S207', CURRENT_TIMESTAMP),
        ('E011', 'C015', 'S205', CURRENT_TIMESTAMP),
        ('E012', 'C004', 'S203', CURRENT_TIMESTAMP),
        ('E013', 'C002', 'S214', CURRENT_TIMESTAMP),
        ('E014', 'C001', 'S201', CURRENT_TIMESTAMP),
        ('E015', 'C008', 'S205', CURRENT_TIMESTAMP),
        ('E016', 'C007', 'S211', CURRENT_TIMESTAMP),
        ('E017', 'C009', 'S205', CURRENT_TIMESTAMP),
        ('E018', 'C001', 'S213', CURRENT_TIMESTAMP),
        ('E020', 'C015', 'S207', CURRENT_TIMESTAMP),
        ('E021', 'C006', 'S211', CURRENT_TIMESTAMP),
        ('E022', 'C015', 'S213', CURRENT_TIMESTAMP),
        ('E023', 'C006', 'S208', CURRENT_TIMESTAMP),
        ('E024', 'C014', 'S216', CURRENT_TIMESTAMP),
        ('E025', 'C003', 'S207', CURRENT_TIMESTAMP),
        ('E026', 'C002', 'S213', CURRENT_TIMESTAMP),
        ('E027', 'C011', 'S210', CURRENT_TIMESTAMP),
        ('E028', 'C006', 'S212', CURRENT_TIMESTAMP),
        ('E029', 'C004', 'S202', CURRENT_TIMESTAMP),
        ('E030', 'C008', 'S203', CURRENT_TIMESTAMP),
        ('E031', 'C011', 'S201', CURRENT_TIMESTAMP);