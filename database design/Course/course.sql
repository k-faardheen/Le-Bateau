--Create table course 
    CREATE TABLE course (
        course_id VARCHAR(4) NOT NULL PRIMARY KEY, 
        name varchar(50) NOT NULL
    ); 

--Populate the table 
INSERT INTO course(course_id, name)
VALUES(
	'C001', 'Java'
); 

INSERT INTO course(course_id, name)
VALUES(
	'C002', 'JavaScript'
); 

INSERT INTO course(course_id, name)
VALUES(
	'C003', 'Python'
); 

INSERT INTO course(course_id, name)
VALUES(
	'C004', 'HTML'
); 

INSERT INTO course(course_id, name)
VALUES(
	'C005', 'CSS' 
); 

INSERT INTO course(course_id, name)
VALUES(
	'C006', 'R'
); 

INSERT INTO course(course_id, name)
VALUES(
	'C007', 'SQL' 
); 

INSERT INTO course(course_id, name)
VALUES(
	'C008', 'Spring Boot'
); 