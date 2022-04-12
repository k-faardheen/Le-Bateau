--WHERE, GROUP BY, HAVING, ORDER BY

--where
--list the registration id, first name and last name of students
SELECT Registration_ID, first_name, last_name
FROM registration
WHERE role ='student';

--group by
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

--order by
--list the first name and last name of the contributors and thier first name in decsending order
SELECT first_name, last_name
FROM registration
where role = 'contributor'
ORDER BY first_name DESC;