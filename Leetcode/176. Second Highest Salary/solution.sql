-- 176. Second Highest Salary

SELECT MAX(salary) AS SecondHighestSalary 
FROM employee 
WHERE salary <> (SELECT MAX(salary) 
FROM employee)