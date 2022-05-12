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
values  ('E001', 'C003', 'S001', CURRENT_TIMESTAMP),
        ('E002', 'C014', 'S002', CURRENT_TIMESTAMP),
        ('E003', 'C003', 'S011', CURRENT_TIMESTAMP),
        ('E004', 'C009', 'S091', CURRENT_TIMESTAMP),
        ('E005', 'C004', 'S024', CURRENT_TIMESTAMP),
        ('E006', 'C001', 'S022', CURRENT_TIMESTAMP),
        ('E007', 'C009', 'S029', CURRENT_TIMESTAMP),
        ('E008', 'C013', 'S005', CURRENT_TIMESTAMP),
        ('E009', 'C007', 'S009', CURRENT_TIMESTAMP),
        ('E010', 'C014', 'S007', CURRENT_TIMESTAMP),
        ('E011', 'C015', 'S010', CURRENT_TIMESTAMP),
        ('E012', 'C004', 'S003', CURRENT_TIMESTAMP),
        ('E013', 'C002', 'S014', CURRENT_TIMESTAMP),
        ('E014', 'C001', 'S031', CURRENT_TIMESTAMP),
        ('E015', 'C008', 'S055', CURRENT_TIMESTAMP),
        ('E016', 'C007', 'S041', CURRENT_TIMESTAMP),
        ('E017', 'C009', 'S095', CURRENT_TIMESTAMP),
        ('E018', 'C001', 'S013', CURRENT_TIMESTAMP),
        ('E020', 'C015', 'S737', CURRENT_TIMESTAMP),
        ('E021', 'C006', 'S081', CURRENT_TIMESTAMP),
        ('E022', 'C015', 'S019', CURRENT_TIMESTAMP),
        ('E023', 'C006', 'S008', CURRENT_TIMESTAMP),
        ('E024', 'C014', 'S016', CURRENT_TIMESTAMP),
        ('E025', 'C003', 'S227', CURRENT_TIMESTAMP),
        ('E026', 'C002', 'S113', CURRENT_TIMESTAMP),
        ('E027', 'C011', 'S110', CURRENT_TIMESTAMP),
        ('E028', 'C006', 'S012', CURRENT_TIMESTAMP),
        ('E029', 'C004', 'S182', CURRENT_TIMESTAMP),
        ('E030', 'C008', 'S045', CURRENT_TIMESTAMP),
        ('E031', 'C011', 'S001', CURRENT_TIMESTAMP);