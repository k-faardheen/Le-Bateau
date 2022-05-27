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

-- TRIGGER 

--Creating a trigger that will automatically make an entry to the respective table based on the user's role. 
CREATE OR REPLACE TRIGGER trigger_insert AFTER INSERT 
ON registration
FOR EACH ROW
EXECUTE PROCEDURE insert_function(); 


-- 2nd trigger

CREATE OR REPLACE FUNCTION delete_function() RETURNS trigger AS 
$$
BEGIN 

INSERT INTO disactivated_account VALUES(OLD.first_name, OLD.last_name, OLD.role, OLD.email, OLD.registration_id);
RETURN OLD;

END; 
$$
LANGUAGE plpgsql; 

CREATE OR REPLACE TRIGGER trigger_delete BEFORE DELETE ON registration
FOR EACH ROW
EXECUTE PROCEDURE delete_function(); 

