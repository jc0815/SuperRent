/*
Daily Rentals for Branch: This is the same as the Daily Rental report but it is for one specified branch

Goal: 
- 1) Return the vehicles where VStatus = Yes (vehicle is rented) 
    - Group by category (VtName) 
- 2a) Group vehicles by category (Vtname), find Vstatus = True (vehicle is rented) and return number 
    - 2b) Repeat for rentals for all branches that are new (That happened today)
*/ 

-- 1) Return vehicles that are rented out 
SELECT * 
    FROM Vehicle v
    WHERE v.VStatus LIKE 'no' AND v.City LIKE (PHP form city) 
        AND v.Location LIKE (PHP form Vlocation)
    ORDER BY v.VtName

-- 2a) Return number of vehicles rented per category
SELECT SUM(*)
    FROM Vehicle v 
    WHERE v.Vstatus like 'no' AND v.City LIKE (PHP form city) 
        AND v.Location LIKE (PHP form Vlocation)
    GROUP BY v.VtName

-- 2b) Return number of vehicles rented per category that are new 
SELECT SUM(*)
    FROM Rental r, Vehicle v
    WHERE r.FromDate == ("today's date") AND v.Vid = r.Vid AND v.City LIKE (PHP form city) 
        AND v.Location LIKE (PHP form Vlocation)
    GROUP BY v.VtName

----- PHP Translations ---------
-- 1
executePlainSQL("SELECT * FROM Vehicle WHERE City LIKE '(Form-value)' AND VLocation LIKE '(Form-value)' AND
                VStatus LIKE 'no' ORDER BY VtName")
-- 2a 
executePlainSQL("SELECT VtName, COUNT(*) FROM Vehicle WHERE City LIKE '(Form-value)' 
                AND VLocation LIKE '(Form-value)' AND VStatus LIKE 'no' GROUP BY VtName")
-- 2b
executePlainSQL("SELECT VtName, COUNT(*) FROM Vehicle v, Rental r, WHERE r.FromDate = (today's date) 
                AND City LIKE '(Form-value)' AND VLocation LIKE '(Form-value)'
                AND v.Vid = r.Rid GROUP BY VtName") 


/* 
Test Status 
1 - Working, tested with City LIKE 'Vancouver' AND VLocation LIKE 'Downtown'
2a - Working, tested with City LIKE 'Vancouver' AND VLocation LIKE 'Downtown'
2b - Not tested, need sysdate from PHP 
*/