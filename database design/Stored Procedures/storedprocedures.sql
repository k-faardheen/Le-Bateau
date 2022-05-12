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

SELECT insertReg('damien', 'smith', 'student', 'damian@gmail.com', 'M', '2002-12-12', 'xxx', 'xxx', 'xxx', 'xxx');

-- calling the function/ adding new data
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

--CALLING FUNCTION
SELECT updateReg('R1002', 'Mauritius')

--Sample stored procedure to implement a complex database constraint (one that cannot be implemented using CHECK)
