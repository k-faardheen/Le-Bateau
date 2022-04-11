--create table 
CREATE TABLE quiz (
    quizid varchar(4) NOT NULL PRIMARY KEY, 
    questions text NOT NULL, 
    courseid varchar(4) REFERENCES course(courseid)
); 

CREATE TABLE answer (
    answerid varchar(4) NOT NULL PRIMARY KEY, 
    answers text NOT NULL, 
    quizid varchar(4) REFERENCES quiz(quizid)
); 

CREATE TABLE marks ( 
    marks smallint NOT NULL, 
    quizid varchar(4) REFERENCES quiz(quizid)
); 


-- Questions 
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q001', 'Insert the missing part of the code below to output "Hello World".', 'C002'); 
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q002', 'Create a variable named carName and assign the value Volvo to it.', 'C002');
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q003', 'Create a variable named maxSpeed and assign the value 120 to it.', 'C001');
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q004', 'Display the sum of 5 + 10, using two variables: x and y', 'C001');

INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q005', 'Create a variable called carName and assign the value Volvo to it.', 'C002'); 
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q006', 'Create a variable called x, assign the value 50 to it.', 'C002');
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q007', 'On one single line, declare three variables with the following names and values:firstName = "John", lastName = "Doe", age = 35', 'C002');
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q008', 'Make the function return "hello" ', 'C002');

INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q009', 'Insert the missing part of the code below to output "Hello World".', 'C003'); 
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q010', 'Convert the value of txt to lower case.', 'C003');
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q011', 'Use the correct comparison operator to check if 5 is not equal to 10.', 'C003');


INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q012', 'Specify an alternate text for the image. Alternate text is useful when the image cannot be displayed, like when the page is read by a screen reader. ', 'C004');
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q013', 'Add a horizontal rule between the heading and the paragraph.', 'C004');
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q014', 'Use the correct HTML tag to add a paragraph with the text "Hello World!".', 'C004');
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q015', 'Add the correct class to make the H1 element red." ', 'C004');


INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q016', 'Add the correct class to make the H1 element red." ', 'C005');
INSERT INTO quiz (quizid, questions, courseid) VALUES ('Q017', 'Add the correct class to make the H1 element red." ', 'C006');


-- Answers
INSERT INTO answer (answerid, answers, quizid) VALUES ('A001', 'System.out.println("Hello World! ");', 'Q001');
INSERT INTO answer (answerid, answers, quizid) VALUES ('A002', 'String carName = "Volvo"; ', 'Q002');
INSERT INTO answer (answerid, answers, quizid) VALUES ('A003', 'int maxSpeed = 120;', 'Q003');
INSERT INTO answer (answerid, answers, quizid) VALUES ('A004', 'int x = 5;', 'Q004');

INSERT INTO answer (answerid, answers, quizid) VALUES ('A005', 'var carName = "Volvo" ', 'Q005');
INSERT INTO answer (answerid, answers, quizid) VALUES ('A006', 'var x = 50 ', 'Q006');
INSERT INTO answer (answerid, answers, quizid) VALUES ('A007', 'firstName = "John", lastName = "Doe" , age = 35', 'Q007');
INSERT INTO answer (answerid, answers, quizid) VALUES ('A008', 'return "hello"', 'Q008');


INSERT INTO answer (answerid, answers, quizid) VALUES ('A009', 'print("Hello World")', 'Q009');
INSERT INTO answer (answerid, answers, quizid) VALUES ('A010', 'txt.lower()', 'Q010');
INSERT INTO answer (answerid, answers, quizid) VALUES ('A011', 'if 5 != 10:', 'Q011');



INSERT INTO answer (answerid, answers, quizid) VALUES ('A012', 'alt = "lebateau.netlify.app" ', 'Q012');
INSERT INTO answer (answerid, answers, quizid) VALUES ('A013', '<hr>', 'Q013');
INSERT INTO answer (answerid, answers, quizid) VALUES ('A014', '<p>Hello World!</p>', 'Q014');
INSERT INTO answer (answerid, answers, quizid) VALUES ('A015', 'class="mystyle"', 'Q015');

