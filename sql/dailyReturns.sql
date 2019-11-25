/* 
The report contains information on all the vehicles returned during the day. 
The entries are grouped by branch, and within each branch, the entries are grouped by vehicle category. 
The report also shows the number of vehicles returned per category, the revenue per category, 
    subtotals for the number of vehicles and revenue per branch, and the grand totals for the day.

Goal: 
- 1a) Return vehicles returned where r.ReturnDate = (Today's Date), group by branch and then Vehicle Type 
- 2.
    - 2a) Return number of vehicles returned per category (Vtname)
    - 2b) Return revenue per category (Vtname)
    - 2c) Return subtotals for the number of vehicles returned [per category?] (Vtname)
    - 2d) Return revenue per branch (Vtname)
    - 2e) Return grand totals for the day 
*/ 

-- 1a) Return vehicles returned today, group by branch and then vehicle type
SELECT * 
    FROM ReturnCar r1, Rental r2, Vehicle v
    WHERE r1.ReturnDate = ("today's date") AND r1.Rid = r2.Rid 
        AND r2.Vid = v.Vid
    GROUP BY v.City, v.VLocation, v.Vtname

-- 2a) Return number of vehicles returned per category(Vtname) (Not grouped by branch) 
SELECT COUNT(*)
    FROM ReturnCar r1, Rental r2, Vehicle v
    WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = ("todaysdate")
    GROUP BY v.Vtname

-- 2b) Return revenue per category (Vtname)
SELECT SUM(r1.ReturnValue)
    FROM ReturnCar r1, Rental r2, Vehicle v
    WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = ("todaysdate")
    GROUP BY v.Vtname


-- 2c) Return subtotals for the number of vehicles returned(Vtname) (Assuming not for category)
-- TODO: Ask TA or Instructor for clarification


-- 2d) Return revenue per branch (Vtname)
SELECT SUM(r1.ReturnValue)
    FROM ReturnCar r1, Rental r2, Vehicle v
    WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = ("todaysdate")
     GROUP BY v.City, v.VLocation

-- 2e) Return grand totals for the day 
SELECT SUM(r1.ReturnValue)
    FROM ReturnCar r1, Rental r2, Vehicle v
    WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = ("todaysdate")

-- php translations
--1
executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, 
v.VtName, v.VLocation, v.City FROM ReturnCar r1, Rental r2, Vehicle v 
WHERE r1.ReturnDate = (today's date) AND r1.Rid = r2.Rid 
AND r2.Vid = v.Vid  GROUP BY v.City, v.VLocation, v.Vtname");

/* orignal
executePlainSQL("SELECT SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, 
        v.VtName, v.VLocation, v.City FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.Rid = r2.Rid 
        AND r2.Vid = v.Vid ORDER BY v.City, v.VLocation, v.Vtname; FROM ReturnCar r1, Rental r2, Vehicle v 
        WHERE r1.ReturnDate = ("todaysdate") AND r1.Rid = r2.Rid AND r2.Vid = v.Vid ORDER BY v.City, v.VLocation, v.Vtname");*/
--2a)
executePlainSQL("SELECT v.VtName, COUNT(*) FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid
        AND r1.ReturnDate = ("todaysdate") GROUP BY v.VtName");
-- 2b)
executePlainSQL("SELECT v.VtName, SUM(r1.ReturnValue) FROM ReturnCar r1, Rental r2, Vehicle v 
        WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = ("todaysdate")GROUP BY v.Vtname");
-- 2c and 2d)
executePlainSQL("SELECT COUNT(v.Vtname), v.City, v.VLocation, SUM(r1.ReturnValue) FROM ReturnCar r1, Rental r2, 
        Vehicle v WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = ("todaysdate") 
        GROUP BY v.City, v.VLocation, v.Vtname");


-- 2e)
executePlainSQL("SELECT SUM(r1.ReturnValue)
    FROM ReturnCar r1, Rental r2, Vehicle v
    WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = ("todaysdate")");

/* 
Test Status 
1 - Tested. Working. 
2a - Tested. Working. 
2b - Tested. Working. 
2c - Not tested. Not Implemented. 
2d - Tested. Working 
2e - Tested. Working 

NOTE: THESE ARE ALL TO BE CONFIRMED WORKING WITHOUT TODAY'S DATE
*/ 