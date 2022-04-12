--total of 4 quries
--• INNER JOIN, OUTER JOIN
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

select first_name, last_name, age(dob)
from registration r , student s, enrollement e, course c
where r.registration_id = s.registration_id
AND s.student_id = e.student_id
AND e.course_id = c.course_id
AND c.name = 'Python'
