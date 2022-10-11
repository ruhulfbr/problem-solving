#Option 01
#==========
SELECT Customers.name as Customers from Customers
LEFT JOIN Orders ON Orders.customerId = Customers.id
WHERE Orders.id IS NULL

#Option 02
#==========
SELECT name as Customers from Customers WHERE id NOT IN (
    SELECT customerId FROM Orders
)