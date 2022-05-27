-----------------------------------------------------------------------------------------------------------
-- CREATE TABLES 
-----------------------------------------------------------------------------------------------------------

--CREATE TABLE REGISTRATION
CREATE TABLE REGISTRATION (
        Registration_ID Registration_Domain,
        first_name varchar(30),
        last_name varchar(30),
        role varchar(15),
        email varchar(50),
        gender char CHECK (gender IN('M', 'F')),
        DOB date,
        streetName varchar(50) ,
        city varchar(30),
        postalCode varchar(20),
        country varchar(30),
        PRIMARY KEY (Registration_ID) 
)

--CREATE TABLE STUDENT
CREATE TABLE STUDENT(
    Student_Id VARCHAR(4) NOT NULL,
    PRIMARY KEY(Student_Id),
    Registration_id varchar(5),
    FOREIGN KEY (Registration_id) REFERENCES REGISTRATION(Registration_ID) ON DELETE CASCADE
)

--CREATE TABLE contributor
CREATE DOMAIN Registration_Domain AS VARCHAR(5)
CHECK (
    VALUE LIKE 'R%'
)

CREATE TABLE CONTRIBUTOR(
    Contributor_Id VARCHAR(7) NOT NULL,
    PRIMARY KEY(Contributor_Id),
    Registration_id varchar(5),
    FOREIGN KEY (Registration_id) REFERENCES REGISTRATION(Registration_ID) ON DELETE CASCADE
)

--CREATE TABLE course
    CREATE TABLE course (
        course_id VARCHAR(4) NOT NULL PRIMARY KEY, 
        name varchar(50) NOT NULL
    ); 

--CREATE TABLE contributor_course
CREATE TABLE contributor_course (
	contributor_id VARCHAR(7) NOT NULL REFERENCES contributor(contributor_id), 
	course_id VARCHAR(4) NOT NULL REFERENCES course(course_id)
)


--CREATE TABLE quiz
CREATE TABLE quiz (
    quizid varchar(4) NOT NULL PRIMARY KEY, 
    questions text NOT NULL, 
    courseid varchar(4) REFERENCES course(courseid)
); 


--CREATE TABLE student_quiz
CREATE TABLE student_quiz ( 
    student_id varchar(5) REFERENCES student(student_id),
    quiz_id varchar(4) REFERENCES quiz(quiz_id)             
);

--CREATE TABLE answer
CREATE TABLE answer (
    answerid varchar(4) NOT NULL PRIMARY KEY, 
    answers text NOT NULL, 
    quizid varchar(4) REFERENCES quiz(quizid)
); 

-----------------------------------------------------------------------------------------------------------
-- USER ACCESS & PRIVILEGES. 
-----------------------------------------------------------------------------------------------------------

-- CREATE USER
CREATE USER faardheen; 
CREATE USER muntaswir; 
--As admin we have access on the whole database. 
GRANT ALL PRIVILEGES ON DATABASE lebateau TO faardheen WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON DATABASE lebateau TO muntaswir WITH GRANT OPTION;

-- Contributor 
-- Suzy and Shawna are both registered as Contributor. 
CREATE USER Suzy; 
CREATE USER Shawna; 

-- GRANT Suzy & Shawna permission to view data and insert data into table course, quiz, answer; 
GRANT SELECT, INSERT ON course, quiz, answer TO Suzy; 
GRANT SELECT, INSERT ON course, quiz, answer TO Shawna; 



-----------------------------------------------------------------------------------------------------------
-- VIEWS 
-----------------------------------------------------------------------------------------------------------

--List the names of the students and the course they are enrolled to. 
CREATE VIEW student_data AS 
    SELECT s.student_id, r.first_name, r.last_name, r.email, c.name AS course_name
    FROM registration r, student s, enrollement e, course c
    WHERE s.registration_id = r.registration_id 
    AND s.student_id = e.student_id 
    AND e.course_id = c.course_id;  

-- Granted view(student_data) access to SUZY 
GRANT SELECT ON student_data TO suzy; 

--List the names of the contributor and the number of courses they contributed to. 
CREATE VIEW contributor_course_contributed AS
    SELECT cc.contributor_id, r.first_name, r.last_name, r.email, COUNT(cc.course_id) AS Number_Of_Courses_Contributed
    FROM registration r, contributor c, contributor_course cc
    WHERE c.registration_id = r.registration_id
    AND c.contributor_id = cc.contributor_id
    GROUP BY (cc.contributor_id, r.first_name, r.last_name, r.email)
    ORDER BY contributor_id; 

-----------------------------------------------------------------------------------------------------------
-- INDEXING
-----------------------------------------------------------------------------------------------------------

CREATE INDEX registration_index ON registration(dob); 
