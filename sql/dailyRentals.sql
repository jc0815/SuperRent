/*
This report contains information on all the vehicles rented out during the day. 
The entries are grouped by branch, and within each branch, the entries are grouped by vehicle category. 
The report also displays the number of vehicles rented per category (e.g., 5 sedan rentals, 2 SUV rentals, etc.),
 the number of rentals at each branch, and the total number of new rentals across the whole company

Goal: 
- 1) Return the vehicles where VStatus = True (vehicle is rented) 
    - Group by branch (VLocation)
        - Within branch, group by category (VtName) 
- 2a) Group vehicles by category (Vtname), find Vstatus = True (vehicle is rented) and return number 
    - 2b) Repeat for each branch
    - 2c) Repeat for rentals for all branches that are new (That happened today)
*/

-- 1) Return vehicles that are rented out 
SELECT * 
    FROM Vehicle v
    WHERE v.VStatus like 'no' (v.Vstatus = String )
    ORDER BY v.City, v.VLocation, v.VtName

-- 2a) Return number of vehicles rented per category
SELECT SUM(*)
    FROM Vehicle v 
    WHERE v.Vstatus like "no" 
    GROUP BY v.VtName

-- 2b) Return number of vehicles rented per category for each branch
SELECT SUM(*)
    FROM Vehicle v 
    WHERE v.Vstatus like "no" 
    GROUP BY v.City, v.VLocation, v.VtName

-- 2c) Return number of vehicles rented per category that are new (all branches)
SELECT SUM(*)
    FROM Rental r, Vehicle v
    WHERE r.FromDate == "today's date", v.Vid = r.Vid 
    GROUP BY v.VtName

----- PHP Translations ---------
-- 1
executePlainSQL("SELECT * FROM Vehicle WHERE VStatus LIKE 'no' ORDER BY City, VLocation, VtName")
-- 2a 
executePlainSQL("SELECT VtName, COUNT(*) FROM Vehicle WHERE VStatus LIKE 'no' GROUP BY VtName")
-- 2b
executePlainSQL("SELECT City, VLocation, VtName, COUNT(*) FROM Vehicle WHERE VStatus LIKE 'no' GROUP BY City, VLocation, VtName ORDER BY City, VLocation, VtName")
-- 2c 
executePlainSQL("SELECT v.VtName, COUNT(*) FROM Vehicle v, Rental r, WHERE r.FromDate = (today's date) AND v.Vid = r.Rid GROUP BY VtName") 

/* 
Query 1, 2a, 2b all confirmed to work. Query 2c requires PHP to test but should be good. 
*/ 