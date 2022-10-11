#Option 01
#==========
SELECT email
FROM Person
GROUP BY email
HAVING COUNT(id) > 1;

#Option 02
#==========
SELECT distinct(tab1.email) from Person as tab1 
join Person as tab2 
on (tab1.Id != tab2.Id and tab1.Email = tab2.Email)

#Option 03
#==========
select distinct p1.email
from Person p1, Person p2
where p1.id <> p2.id and p1.email = p2.email
