/*
Daily Returns for Branch: This is the same as the Daily Returns report, but it is for one specified branch. 

Goal: 
- 1a) Return vehicles returned where r.ReturnDate == (Today's Date), group by Vehicle Type 
- 2.
    - 2a) Return number of vehicles returned per category (Vtname)
    - 2b) Return revenue per category (Vtname)
    - 2c) Return subtotals for the number of vehicles returned [per category?] (Vtname)
    - 2d) Return grand totals for the day of the branch

*/ 

-- 1a) Return vehicles returned today, group by vehicle type
SELECT * 
    FROM ReturnCar r1, Rental r2, Vehicle v
    WHERE r1.ReturnDate == ("today's date") AND r1.Rid == r2.Rid AND r2.Vid == v.Vid 
        AND v.City LIKE (PHP form city) AND v.Location LIKE (PHP form Vlocation)
    GROUP BY v.Vtname

-- 2a) Return number of vehicles returned per category(Vtname) (Not grouped by branch) 
SELECT COUNT(*)
    FROM ReturnCar r1, Rental r2, Vehicle v
    WHERE r1.Rid == r2.Rid AND r2.Vid == v.Vid
    GROUP BY v.Vtname

-- 2b) Return revenue per category (Vtname)
SELECT SUM(r1.ReturnValue)
    FROM ReturnCar r1, Rental r2, Vehicle v
    WHERE r1.Rid == r2.Rid AND r2.Vid == v.Vid
        AND v.City LIKE (PHP form city) AND v.Location LIKE (PHP form Vlocation)
    GROUP BY v.Vtname


-- 2c) Return subtotals for the number of vehicles returned(Vtname) (Assuming not for category)
-- TODO: Ask TA or Instructor for clarification

-- 2d) Return grand totals for the day for the branch 
SELECT SUM(r1.ReturnValue)
    FROM ReturnCar r1, Rental r2, Vehicle v
    WHERE r1.Rid == r2.Rid AND r2.Vid == v.Vid
        AND v.City LIKE (PHP form city) AND v.Location LIKE (PHP form Vlocation)

--- PHP Translation 

-- 1 
executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, 
            v.VtName, v.VLocation, v.City FROM ReturnCar r1, Rental r2, Vehicle v 
            WHERE r1.ReturnDate = (today's date) AND r1.Rid = r2.Rid AND v.City LIKE ("PHP form VCity") AND v.Location LIKE ("PHP form VLocation")
            AND r2.Vid = v.Vid  GROUP v.Vtname");

--2a) 
executePlainSQL("SELECT v.VtName, COUNT(*) FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid 
            AND v.City LIKE ("PHP form VCity") AND v.Location LIKE ("PHP form VLocation") AND r1.ReturnDate = ("todaysdate") GROUP BY v.VtName");

--2b) 
executePlainSQL("SELECT v.VtName, SUM(r1.ReturnValue) FROM ReturnCar r1, Rental r2, Vehicle v 
                WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND v.City LIKE ("PHP form VCity") AND v.Location LIKE ("PHP form VLocation")
                AND r1.ReturnDate = ("todaysdate") GROUP BY v.VtName")


-- 2c) 
executePlainSQL("SELECT COUNT(v.Vtname), SUM(r1.ReturnValue) FROM ReturnCar r1, Rental r2, Vehicle v 
        WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = ("todaysdate") 
        GROUP BY v.Vtname");


-- 2d) 
executePlainSQL("SELECT SUM(r1.ReturnValue) FROM FROM ReturnCar r1, Rental r2, Vehicle v 
                WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND v.City LIKE (PHP form city) AND v.Location LIKE (PHP form Vlocation) AND r1.ReturnDate = ("todaysdate")")