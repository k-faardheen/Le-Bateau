CREATE OR REPLACE FUNCTION get_rows(n VARCHAR) RETURNS INTEGER AS $$
DECLARE q TEXT;
DECLARE r INTEGER; 
BEGIN
	q := 'SELECT COUNT(*) FROM ' || n; 
	EXECUTE q INTO r; 
	RETURN r; 
END; $$
LANGUAGE PLPGSQL; 