/* Rentinga Vehicle: The system will display a receipt with the necessary details 
(e.g., confirmation number, date of reservation, type of car, location, how long the rental period lasts for,
etc.) for the customer. 

TODO 
- Need two options 
    1. The reservation exists, fill rental based on reservation 
    2. The reservation does not exist, fill rental based on customers data 
*/ 

-- Case 1 
INSERT INTO Rentals(VtName, Vid, CellPhone, FromDate, FromTime, ToDate, ToTime, Odometer, CardName,
                    CardNo, ExpDate, ConfNo)
            VALUES() 
            -- VtName, CellPhone, FromDate, FromTime, ToDate, ToTime, ConfNo, all come from the reservation 
            -- In PHP can have, enter reservation code, and then fetch values matching that res
            -- Still need Vid, Odometer, CardName, CardNo, ExpDate from the form 

-- Case 2
INSERT INTO Rentals(VtName, Vid, CellPhone, FromDate, FromTime, ToDate, ToTime, Odometer, CardName,
                    CardNo, ExpDate, ConfNo)
            VALUES() -- Need values from PHP form 


---------------------------------------------------------------
-- Translation to PHP 

-- Case 1: Rentals where reservation exists 

-- Case 2: Rentals where reservation does not exist 
<h2>Insert Values into Rentals</h2>
        <form method="POST" action="oracle-test.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertRentalsQueryRequest" name="insertRentalsQueryRequest">
            VtName: <input type="text" name="insVtName"> <br /><br />
            Vid: <input type="text" name="insVid"> <br /><br />
            CellPhone: <input type="text" name="insCellPhone"> <br /><br />
            FromDate: <input type="text" name="insFromDate"> <br /><br />
            FromTime: <input type="text" name="insFromTime"> <br /><br />
            ToDate: <input type="text" name="insToDate"> <br /><br />
            ToTime: <input type="text" name="insToTime"> <br /><br />
            Odometer: <input type="text" name="insOdometer"> <br /><br />
            CardName: <input type="text" name="insCardName"> <br /><br />
            CardNo: <input type="text" name="insCardNo"> <br /><br />
            ExpDate: <input type="text" name="insExpDate"> <br /><br />

            <input type="submit" value="Insert" name="insertSubmit"></p>
        </form>

        <hr />

function handleInsertRentalsQueryRequest() {
            global $db_conn;

            //Getting the values from user and insert data into the rental table
            $tuple = array (
                ":bind1" => $_POST['insVtName'],
                ":bind2" => $_POST['insVid']
                ":bind3" => $_POST['insCellPhone'],
                ":bind4" => $_POST['insFromDate']
                ":bind5" => $_POST['insFromTime'],
                ":bind6" => $_POST['insToDate']
                ":bind7" => $_POST['insToTime'],
                ":bind8" => $_POST['insName']
                ":bind9" => $_POST['insOdometer'],
                ":bind10" => $_POST['insCardName']
                ":bind11" => $_POST['insCardNo'],
                ":bind12" => $_POST['insExpDate']
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into rentals values (:bind1, :bind2, :bind3, :bind4, :bind5, 
            :bind6, :bind7, :bind8, :bind9, :bind10, :bind11, :bind12)", $alltuples);
            OCICommit($db_conn);
        }

/* 
In handlePostRequest(){} add: 
} else if (array_key_exists('insertRentalsQueryRequest', $_POST)) {
                    handleInsertRentalsQueryRequest();
}
*/ 

