CREATE TABLE answer (
    answerid VARCHAR(4) NOT NULL PRIMARY KEY CHECK(answerid LIKE 'A___'), 
    answers TEXT NOT NULL, 
    quizid VARCHAR(4) REFERENCES quiz(quizid)
); 

INSERT INTO answer(answerid, answers, quizid) VALUES('A001','System.out.println("Hello World!");', 'Q001');
INSERT INTO answer(answerid, answers, quizid) VALUES('A002','String carName = "Volvo";', 'Q002');
INSERT INTO answer(answerid, answers, quizid) VALUES('A003','int maxSpeed = 120;', 'Q003');
INSERT INTO answer(answerid, answers, quizid) VALUES('A004','int x = 5;', 'Q004');
INSERT INTO answer(answerid, answers, quizid) VALUES('A005','var carName = "Volvo"', 'Q005');
INSERT INTO answer(answerid, answers, quizid) VALUES('A006','var x = 50 ', 'Q006');
INSERT INTO answer(answerid, answers, quizid) VALUES('A007','firstName = "John", lastName = "Doe" , age = 35', 'Q007');
INSERT INTO answer(answerid, answers, quizid) VALUES('A008','return hello', 'Q008');
INSERT INTO answer(answerid, answers, quizid) VALUES('A009','print("Hello World")', 'Q009');
INSERT INTO answer(answerid, answers, quizid) VALUES('A010','txt.lower()', 'Q010');
INSERT INTO answer(answerid, answers, quizid) VALUES('A011','if 5 != 10:', 'Q011');
INSERT INTO answer(answerid, answers, quizid) VALUES('A012','alt = "lebateau.netlify.app"', 'Q012');
INSERT INTO answer(answerid, answers, quizid) VALUES('A013','<hr>', 'Q013');
INSERT INTO answer(answerid, answers, quizid) VALUES('A014','<p>Hello World!</p>', 'Q014');
INSERT INTO answer(answerid, answers, quizid) VALUES('A015','class="mystyle"', 'Q015');
