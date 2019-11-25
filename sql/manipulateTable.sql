-- See all tables in the database
SELECT table_name FROM users_tables;
-- Insert data into a table
INSERT INTO Customer VALUES ('zack', 'robson', '672', 6049928837);
-- Delete data from a table
DELETE FROM Vehicle WHERE Vid = 123;
-- Update data in a table
UPDATE Customer  SET CName = 'Alvin' WHERE CName = 'Bob';
-- Get all data from a specific table
SELECT * FROM Reservations;