-----------------------------------------------------------------------------------------------------------
-- SIMPLE QUERIES
-- WHERE, GROUP BY, HAVING, ORDER BY
-----------------------------------------------------------------------------------------------------------

--WHERE
--list the registration id, first name and last name of students
SELECT Registration_ID, first_name, last_name
FROM registration
WHERE role ='student';

--GROUP BY
-- list the number of registration id in each country
SELECT COUNT(Registration_ID), Country
FROM registration
GROUP BY Country;

--HAVING
-- list the student id who have enrolled in more than 2 courses
SELECT student_id, COUNT(student_id)
FROM enrollement
GROUP BY student_id
HAVING COUNT(student_id) > 2

--ORDER BY
--list the first name and last name of the contributors and thier first name in decsending order
SELECT first_name, last_name
FROM registration
where role = 'contributor'
ORDER BY first_name DESC;



-----------------------------------------------------------------------------------------------------------
-- COMPLEX QUERIES
-- Total of 4 queries
-----------------------------------------------------------------------------------------------------------

--list the name of the student and the course name that may or may not take part in the quiz 
SELECT  r.first_name, r.last_name, c.name
FROM 
(
    (SELECT Registration_ID, first_name, last_name FROM registration) r
    FULL OUTER JOIN
    (SELECT Registration_ID, student_Id FROM student) s on r.Registration_ID = s.Registration_ID
    FULL OUTER JOIN 
    (SELECT student_Id , quiz_id FROM student_quiz) sq on s.student_Id = sq.student_Id
	FULL OUTER JOIN 
    (SELECT quiz_id , course_id FROM quiz) q on sq.quiz_id = q.quiz_id
	FULL OUTER JOIN 
    (SELECT course_id , name FROM course) c on q.course_id = c.course_id
)

--• UNION, INTERSECT, EXCEPT
SELECT City FROM registration
where role = 'contributor'
UNION
SELECT City FROM registration
where role = 'student'
order by city


--• Call built-in functions
SELECT CONCAT(first_name,' ', last_name)
FROM registration
WHERE role = 'contributor'
AND country = 'Poland'


--• Call Date functions
SELECT first_name, last_name, age(dob)
FROM registration r , student s, enrollement e, course c
WHERE r.registration_id = s.registration_id
AND s.student_id = e.student_id
AND e.course_id = c.course_id
AND c.name = 'Python'


-----------------------------------------------------------------------------------------------------------
-- STORED PROCEDURES
-----------------------------------------------------------------------------------------------------------

--To implement >=2 database functions (insert, update or delete) using stored procedures, with appropriate
--error messages when user input violates any constraints etc

--INSERT FUNCTION
CREATE FUNCTION insertReg (id VARCHAR(5), fname VARCHAR(30) , lname VARCHAR(30),role VARCHAR(15), email VARCHAR(50), gender char,
						   DOB date, streetName varchar(50) ,city varchar(30),postalCode varchar(20),country varchar(30)
						  ) RETURNS void AS $$
	BEGIN
		INSERT INTO registration(Registration_ID, first_name, last_name, role, email, gender, DOB, streetName, city, postalCode, country) 
		VALUES (id , fname, lname,role, email, gender,DOB,  streetName ,city ,postalCode,country);

		RAISE NOTICE 'Insert Successful';
		RETURN;

		EXCEPTION WHEN others THEN

		RAISE NOTICE 'Error Message : % %', SQLERRM, SQLSTATE;
	END; $$
LANGUAGE plpgsql;

-- calling the function/ adding new data/ Implementation
SELECT insertReg('R1002', 'Fran', 'Jeness', 'contributor', 'fjeness1d@webnode.com', 'M', '1905-03-22', 'Westport', 'Gereykhanovskoye', '368792', 'Russia')

--DELETE FUNCTION
CREATE FUNCTION deleteReg (id VARCHAR(5)) RETURNS void AS $$
	DECLARE
	rowcount int;
	BEGIN
		DELETE FROM registration WHERE registration_id = id;

		GET DIAGNOSTICS rowcount = ROW_COUNT;
		IF rowcount=0 THEN
			RAISE NOTICE 'Record not found.';
			RETURN;
		ELSE
			RAISE NOTICE '% Rows Deleted.', rowcount;
			RETURN;
		END IF;

		EXCEPTION WHEN others THEN
		RAISE NOTICE 'Error Message : % %', SQLERRM, SQLSTATE;

	END; $$
LANGUAGE plpgsql;

--UPDATE FUNCTION

CREATE FUNCTION updateReg (id VARCHAR(5), Ecountry VARCHAR(30)) RETURNS void AS $$
DECLARE
rowcount int;
	BEGIN

		UPDATE registration SET country = Ecountry
		WHERE registration_id = id;
		GET DIAGNOSTICS rowcount = ROW_COUNT;

		IF rowcount=0 THEN
			RAISE NOTICE 'Record not found.';
			RETURN;
		ELSE
			RAISE NOTICE '% update successful.', rowcount;
			RETURN;
		END IF;

		EXCEPTION WHEN others THEN
		RAISE NOTICE 'Error Message : % %', SQLERRM, SQLSTATE;

	END; $$
LANGUAGE plpgsql;

--CALLING UPDATE FUNCTION
SELECT updateReg('R1002', 'Mauritius')

-----------------------------------------------------------------------------------------------------------
-- TRIGGERS
-----------------------------------------------------------------------------------------------------------

-- Trigger Functions
CREATE OR REPLACE FUNCTION insert_function() RETURNS trigger AS 
	$$
	DECLARE
	_role VARCHAR; 
	_id VARCHAR; 
	BEGIN

		_role := (SELECT NEW.role FROM registration WHERE registration_id = NEW.registration_id); --grab the role of the new user

		IF (_role = 'contributor') THEN 
			_id := CONCAT('CON',(SELECT get_rows('contributor')) + 3); -- creating an contributor_id
			INSERT INTO contributor VALUES(_id, NEW.registration_id); -- inserting the contributor_id and the registration_id into the table contributor. 
			RETURN NEW; 
		ELSIF (_role = 'student') THEN 
			_id := CONCAT('S',(SELECT get_rows('student')) + 1);
			INSERT INTO student VALUES(_id, NEW.registration_id);
			RETURN NEW; 
		END IF;

		EXCEPTION WHEN others THEN
		RAISE NOTICE 'Error Message : % %', SQLERRM, SQLSTATE;

		RETURN NULL; 
	END;
	$$
LANGUAGE plpgsql; 

-- IMPLEMENT 1ST TRIGGER 
--Creating a trigger that will automatically make an entry to the respective table based on the user's role. 
CREATE OR REPLACE TRIGGER trigger_insert AFTER INSERT 
ON registration
FOR EACH ROW
EXECUTE PROCEDURE insert_function(); 


-- 2nd trigger Function
CREATE OR REPLACE FUNCTION delete_function() RETURNS trigger AS 
$$
BEGIN 

INSERT INTO disactivated_account VALUES(OLD.first_name, OLD.last_name, OLD.role, OLD.email, OLD.registration_id);
RETURN OLD;

END; 
$$
LANGUAGE plpgsql; 


--IMPLEMENT 2ND TIGGER
CREATE OR REPLACE TRIGGER trigger_delete BEFORE DELETE ON registration
FOR EACH ROW
EXECUTE PROCEDURE delete_function(); 




