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
