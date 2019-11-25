/*if the customer exists in the data base returns a tuple
if the tuple is empty insert a new customer into the table 
with a new cid*/
CREATE VIEW checkNew AS ( 
    SELECT *
    FROM Customer c
    WHERE c.DriverLicence = inputNum
)
GO
/*For a reservation customer would input cartype,
time interval and location return a tuple with available cars during that 
time if there is one we insert, from this returned table pick one of the vehicles
set it to rented and update tables as needed. If list is empty return an error*/
CREATE VIEW AvailableTimeFrame AS ( /*union this table with the already available cars if they specify timeframe*/
    /* SELECT VtName
    FROM Reservation r 
    WHERE r.FromDate >inputToDate AND r.FromTime > inputToTime 
    OR r.ToDate < inputFromDate AND r.ToTime < inputFromTime
    UNION ALL*/
    SELECT  Vid -- Vid
    FROM Rentals re
    WHERE re.ToDate < inputFromDate AND re.ToTime < inputFromTime   
    GROUP BY VtName 
)
GO
CREATE VIEW custAll AS ( /*if cust puts in all inputs*/
    SELECT *, count(*)
    FROM Vehicle v, AvailableTimeFrame a
    WHERE v.Vid = a.Vid AND  v.VStatus LIKE '%yes%' AND v.VLocation LIKE custLoc AND v.VtName LIKE inputVtName 
    GROUP BY VtName
    HAVING count(*) > 0
)

-- If it is a new customer we add that customer to the customer table
-- and than we create a new reservation for that customer