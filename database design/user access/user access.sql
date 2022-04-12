-- CREATE USER
CREATE USER faardheen; 
CREATE USER muntaswir; 
--As admin we have access on the whole database. 
GRANT ALL PRIVILEGES ON DATABASE lebateau TO faardheen;
GRANT ALL PRIVILEGES ON DATABASE lebateau TO muntaswir;

-- Contributor 
-- Suzy and Shawna are both registered as Contributor. 
CREATE USER Suzy; 
CREATE USER Shawna; 

-- GRANT Suzy & Shawna permission to view data and insert data into table course, quiz, answer; 
GRANT SELECT, INSERT ON course, quiz, answer TO Suzy; 
GRANT SELECT, INSERT ON course, quiz, answer TO Shawna; 


