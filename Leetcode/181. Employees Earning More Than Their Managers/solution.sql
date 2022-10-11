# Write your MySQL query statement below

SELECT  name as Employee
FROM    Employee mto
WHERE   EXISTS
        (
        SELECT  1
        FROM    Employee mti
        WHERE   mti.id = mto.managerId AND mto.salary > mti.salary
        
        )