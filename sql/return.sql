/*
Returning a Vehicle: Only a rented vehicle can be returned. Trying to return a vehicle that has not been 
rented should generate some type of error message for the clerk.  

Goal: 
-* Change VStatus and Odomoter of the vehicle that is being returned (Show it is available again)
-* Insert values into ReturnCar 
- We need two executeBoundSQL(..) calls 
*/ 


UPDATE Vehicle 
        SET Vstatus = F, odometer = insOdometer
        WHERE Vehicle.rid = return.rid 
        
-- AND rentals.vid = vehicles.vid Removed this, not needed. 

INSERT INTO ReturnCar(Rid, returnDate, returnTime, odometer, fulltank, value)
            VALUES() -- Need values from PHP form 


---------------------------------------------------------------
--- Translation to PHP ---

-- Insert this line into pre-existing return vehicle function 
executePlainSQL("UPDATE Vehicle SET VStatus ='no' AND Odometer = :bind4 FROM Vehicle WHERE 
        vid == :bind1")
            