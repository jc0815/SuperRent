<html>
    <head>
        <title>CPSC 304 Project - Insert</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="./assets/util.css">
    </head>
    <style>
        body {
            font-family: "Lato", sans-serif;
        }
        .content {
            margin: 5rem;
            font-size: 12px;
        }
    </style>
    <body>
        <!-- NAVIGATION BAR 
             NOTE: Reference from https://www.w3schools.com/w3css/w3css_templates.asp
        -->
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card">
                <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
                <a href="./main.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
                <a href="./customer.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Customer</a>
                <a href="./clerk.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Clerk</a>
                <a href="./insert.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Insert</a>
                <a href="./view.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">View</a>
                <a href="./main.php" class="w3-bar-item w3-button w3-padding-large w3-right"> SuperRent </a>
            </div>
        </div>
        <!-- Responsive -->
        <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
            <a href="./main.php"  class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Home</a>
            <a href="./customer.php"  class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Customer</a>
            <a href="./clerk.php"  class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Clerk</a>
            <a href="./insert.php"  class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Insert</a>
            <a href="./view.php"  class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">View</a>
        </div>

        <script>
            // Used to toggle the menu on small screens when clicking on the menu button
            function myFunction() {
                var x = document.getElementById("navDemo");
                if (x.className.indexOf("w3-show") == -1) {
                    x.className += " w3-show";
                } else { 
                    x.className = x.className.replace(" w3-show", "");
                }
            }
        </script>

        <div class="content">
            <p>Note: This is NOT part of the project. This is for quick adding to the SQL database only. </p>
            <!--
                Function: Insert Customer 
            -->
            <hr />
            <h2>Customer</h2>
            <form method="POST" action="./insert.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertCustomerQueryRequest" name="insertCustomerQueryRequest" />
                CName: &nbsp; <input type="text" name="insCName" placeholder="Name" required /> <br /><br />
                PAddress: &nbsp; <input type="text" name="insPAddress" placeholder="Address" required /> <br /><br />
                DriverLicense: &nbsp; <input type="text" name="insDriverLicense" placeholder="Driver's License" required /> <br /><br />
                CellPhone (Int): &nbsp; <input type="text" name="insCellPhone" placeholder="Cellphone" required /> <br /><br />
                <input class="button" type="submit" value="Insert" name="insertSubmit" required />
            </form>

            <!--
                Function: Insert Vehicle Types 
            -->
            <hr />
            <h2>Vehicle Type</h2>
            <form method="POST" action="./insert.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertVehicleTypeQueryRequest" name="insertVehicleTypeQueryRequest"/>
                <!-- VtName: &nbsp; <input type="text" name="insVtName" placeholder="Vehicle Type Name" required /> <br /><br /> -->
                VtName (VehicleType): &nbsp; <select class="select" name="insVtName" placeholder="Vehicle Type">
                                                <option value="Economy">Economy</option>
                                                <option value="Compact">Compact</option>
                                                <option value="Mid-size">Mid-size</option>
                                                <option value="Standard">Standard</option>
                                                <option value="Full-size">Full-size</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Truck">Truck</option>
                                            </select><br /><br />
                Features: &nbsp; <input type="text" name="insFeatures" placeholder="Features" /> <br /><br />
                Wrate (Int): &nbsp; <input type="text" name="insWrate" placeholder="Weekly Rate" required /> <br /><br />
                Drate (Int): &nbsp; <input type="text" name="insDrate" placeholder="Daily Rate" required /> <br /><br />
                Hrate (Int): &nbsp; <input type="text" name="insHrate" placeholder="Hourly Rate" required /> <br /><br />
                Wirate (Int): &nbsp; <input type="text" name="insWirate" placeholder="Weekly Insurance Rate" required /> <br /><br />
                Dirate (Int): &nbsp; <input type="text" name="insDirate" placeholder="Daily Insurance Rate" required /> <br /><br />
                Hirate (Int): &nbsp; <input type="text" name="insHirate" placeholder="Hourly Insurance Rate" required /> <br /><br />
                Krate (Int): &nbsp; <input type="text" name="insKrate" placeholder="Kilometer Rate" required /> <br /><br />
                <input class="button" type="submit" value="Insert" name="insertSubmit"/>
            </form>

            <!--
                Function: Insert Vehicle 
            -->
            <hr />
            <h2>Vehicle</h2>
            <form method="POST" action="./insert.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertVehicleQueryRequest" name="insertVehicleQueryRequest"/>
                VLicense: &nbsp; <input type="text" name="insVLicense" placeholder="License" required /> <br /><br />
                VStatus: &nbsp; <select class="select" name="insVStatus" placeholder="Status">
                            <option value="Yes">Available</option>
                            <option value="No">Not Available</option>
                            <option value="Maintenance">Maintenance</option>
                         </select><br /><br />
                Vid (Int): &nbsp; <input type="text" name="insVid" placeholder="ID" required /> <br /><br />
                Make: &nbsp; <input type="text" name="insMake" placeholder="Make" required /> <br /><br />
                Model: &nbsp; <input type="text" name="insModel" placeholder="Model" required /> <br /><br />
                Color: &nbsp; <input type="text" name="insColor" placeholder="Color" required /> <br /><br />
                Odometer (Int): &nbsp; <input type="text" name="insOdometer" placeholder="Odometer" required /> <br /><br />
                <!-- VtName (VehicleType): &nbsp; <input type="text" name="insVtName" placeholder="Vehicle Type Name" required /> <br /><br /> -->
                VtName (VehicleType): &nbsp; <select class="select" name="insVtName" placeholder="Vehicle Type">
                                                <option value="Economy">Economy</option>
                                                <option value="Compact">Compact</option>
                                                <option value="Mid-size">Mid-size</option>
                                                <option value="Standard">Standard</option>
                                                <option value="Full-size">Full-size</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Truck">Truck</option>
                                            </select><br /><br />
                VLocation: &nbsp; <input type="text" name="insVLocation" placeholder="Location" required /> <br /><br />
                City: &nbsp; <input type="text" name="insCity" placeholder="City" required /> <br /><br />
                <input class="button" type="submit" value="Insert" name="insertSubmit"/>
            </form>

            <!--
                Function: Insert Reservation 
            -->
            <hr />
            <h2>Reservation</h2>
            <form method="POST" action="./insert.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertReservationQueryRequest" name="insertReservationQueryRequest"/>
                ConfNo (Int): &nbsp; <input type="text" name="insConfNo" placeholder="Confirmation Number" required /> <br /><br />
                <!-- VtName (VehicleType): &nbsp; <input type="text" name="insVtName" placeholder="Vehicle Type Name" required /> <br /><br /> -->
                VtName (VehicleType): &nbsp; <select class="select" name="insVtName" placeholder="Vehicle Type">
                                                <option value="Economy">Economy</option>
                                                <option value="Compact">Compact</option>
                                                <option value="Mid-size">Mid-size</option>
                                                <option value="Standard">Standard</option>
                                                <option value="Full-size">Full-size</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Truck">Truck</option>
                                            </select><br /><br />
                DriverLicense (Customer): &nbsp; <input type="text" name="insDriverLicense" placeholder="Driver License" required /> <br /><br />
                FromDate: &nbsp; <input type="date" name="insFromDate" placeholder="From Date" required /> <br /><br />
                FromTime: &nbsp; <input type="time" name="insFromTime" placeholder="From Time" required /> <br /><br />
                ToDate: &nbsp; <input type="date" name="insToDate" placeholder="To Date" required /> <br /><br />
                ToTime: &nbsp; <input type="time" name="insToTime" placeholder="To Time" required /> <br /><br />
                <input class="button" type="submit" value="Insert" name="insertSubmit"/>
            </form>


            <!--
                Function: Insert Rental 
            -->
            <hr />
            <h2>Rental</h2>
            <form method="POST" action="./insert.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertRentalQueryRequest" name="insertRentalQueryRequest"/>
                Rid (Int): &nbsp; <input type="text" name="insRid"  placeholder="Rental ID" required /> <br /><br />
                <!-- VtName: &nbsp; <input type="text" name="insVtName"  placeholder="Vehicle Type Name" required /> <br /><br /> -->
                VtName (VehicleType): &nbsp; <select class="select" name="insVtName" placeholder="Vehicle Type">
                                                <option value="Economy">Economy</option>
                                                <option value="Compact">Compact</option>
                                                <option value="Mid-size">Mid-size</option>
                                                <option value="Standard">Standard</option>
                                                <option value="Full-size">Full-size</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Truck">Truck</option>
                                            </select><br /><br />
                Vid (Int, Vehicle): &nbsp; <input type="text" name="insVid"  placeholder="Vehicle ID" required /> <br /><br />
                DriverLicense (Customer): &nbsp; <input type="text"  placeholder="Customer Driver License" name="insDriverLicense" required /> <br /><br />
                FromDate: &nbsp; <input type="date" name="insFromDate"  placeholder="From Date" required /> <br /><br />
                FromTime: &nbsp; <input type="time" name="insFromTime"  placeholder="From Time" required /> <br /><br />
                ToDate: &nbsp; <input type="date" name="insToDate"  placeholder="To Date" required /> <br /><br />
                ToTime: &nbsp; <input type="time" name="insToTime"  placeholder="To Time" required /> <br /><br />
                Odometer (Int): &nbsp; <input type="text" name="insOdometer"  placeholder="Odometer" required /> <br /><br />
                CardName: &nbsp; <input type="text" name="insCardName"  placeholder="Card Name" required /> <br /><br />
                CardNo: &nbsp; <input type="text" name="insCardNo"  placeholder="Card Number" required /> <br /><br />
                ExpDate: &nbsp; <input type="date" name="insExpDate"  placeholder="Expiry Date" required /> <br /><br />
                ConfNo (Int, Reservation): &nbsp; <input type="text" name="insConfNo"  placeholder="Confirmation Number" required /> <br /><br />
                <input class="button" type="submit" value="Insert" name="insertSubmit"/>
            </form>

            <!--
                Function: Insert Return Car 
            -->
            <hr />
            <h2>Return Car</h2>
            <form method="POST" action="./insert.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertReturnCarQueryRequest" name="insertReturnCarQueryRequest"/>
                Rid (Int, Rental): &nbsp; <input type="text" name="insRid"  placeholder="Rental ID" required /> <br /><br />
                ReturnDate: &nbsp; <input type="date" name="insReturnDate"  placeholder="Return Date" required /> <br /><br />
                ReturnTime: &nbsp; <input type="time" name="insReturnTime"  placeholder="Return Time" required /> <br /><br />
                Odometer (Int): &nbsp; <input type="text" name="insOdometer"  placeholder="Odometer" /> <br /><br />
                FullTank: &nbsp; <select class="select" name="insFullTank" placeholder="Status">
                            <option value="Yes">Full</option>
                            <option value="No">Not Full</option>
                          </select><br /><br />
                ReturnValue (Int): &nbsp; <input type="text" name="insReturnValue"  placeholder="Return Value" required /> <br /><br />
                <input class="button" type="submit" value="Insert" name="insertSubmit"/>
            </form>
        </div>
        <?php

        $success = True; //keep track of errors so it redirects the page only if there are no errors
        $db_conn = NULL; // edit the login credentials in connectToDB()
        $show_debug_alert_messages = False; // set to True if you want alerts to show you which methods are being triggered (see how it is used in debugAlertMessage())

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type='text/javascript'>alert('" . $message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
            //echo "<br>running ".$cmdstr."<br>";
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr); 
            //There are a set of comments at the end of the file that describe some of the OCI specific functions and how they work

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
		}

        function executeBoundSQL($cmdstr, $list, $table) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection. 
		See the sample code below for how this function is used */

			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                alertUser("Cannot parse the following command: " . $cmdstr);
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    //echo $val;
                    //echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
				}

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    alertUser("Cannot execute the following command: " . $cmdstr);
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
            if ($success) {
                alertUser("Successfully inserted into table: " . $table);
            }
        }

        function connectToDB() {
            global $db_conn;
            $db_conn = OCILogon("ora_example", "a1843zzzz", "dbhost.students.cs.ubc.ca:1522/stu");
            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;
            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        function convertTimeToInt($time) {
            $hour = substr($time, 0, 2);
            $minute = substr($time, 3, 5);
            $returnInt = ((int)$hour * 60) + (int)$minute;
            printToConsole("Converted: " . $time . " -> " . $returnInt);
            return $returnInt;
        }

        function convertDateToSql($date) {
            // Example: 2019-08-11 -> 11/AUG/2019
            $timestamp = strtotime($date);
            $day = date('d', $timestamp);
            $month = date('M', $timestamp);
            $year = date('Y', $timestamp);
            $returnSqlTime = $day . "/" . strtoupper($month) . "/" . $year;
            printToConsole("Converted: " . $timestamp . " -> " . $dreturnSqlTime);
            return $returnSqlTime;
        }

        function printToConsole($statement) {
            echo("<script>console.log('$statement');</script>");
        }

        function alertUser($statement) {
            echo("<script>alert('$statement');</script>");
        }

        // INSERT: Customer
        function handleInsertCustomerQueryRequest() {
            // Check integer types:
            if (!is_numeric($_POST['insCellPhone'])) {
                alertUser(gettype($_POST['insCellPhone']));
                alertUser("WARNING: Cellphone has to be integer!");
                return;
            }

            printToConsole("SQL> INSERT INTO Customer");
            global $db_conn;
            // Insert data into the Customer table
            $tuple = array (
                ":bind1" => $_POST['insCName'],
                ":bind2" => $_POST['insPAddress'],
                ":bind3" => $_POST['insDriverLicense'],
                ":bind4" => $_POST['insCellPhone']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("INSERT INTO Customer VALUES (:bind1, :bind2, :bind3, :bind4)", $alltuples, "Customer");
            OCICommit($db_conn);
        }

        // INSERT: Vehicle Type
        function handleInsertVehicleTypeQueryRequest() {
            // Check integer types:
            if (!is_numeric($_POST['insWrate']) || !is_numeric($_POST['insDrate']) ||
                !is_numeric($_POST['insHrate']) || !is_numeric($_POST['insWirate']) ||
                !is_numeric($_POST['insDirate']) || !is_numeric($_POST['insHirate']) ||
                !is_numeric($_POST['insKrate']) ) { 
                alertUser("WARNING: Rates has to be integer!");
                return;
            }
            printToConsole("SQL> INSERT INTO VehicleType");
            global $db_conn;
            // Insert data into the VehicleType table
            $tuple = array (
                ":bind1" => $_POST['insVtName'],
                ":bind2" => $_POST['insFeatures'],
                ":bind3" => $_POST['insWrate'],
                ":bind4" => $_POST['insDrate'],
                ":bind5" => $_POST['insHrate'],
                ":bind6" => $_POST['insWirate'],
                ":bind7" => $_POST['insDirate'],
                ":bind8" => $_POST['insHirate'],
                ":bind9" => $_POST['insKrate']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("INSERT INTO VehicleType VALUES (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6, :bind7, :bind8, :bind9)", $alltuples, "VehicleType");
            OCICommit($db_conn);
        }

        // INSERT: Vehicle
        function handleInsertVehicleQueryRequest() {
            // Check integer types:
            if (!is_numeric($_POST['insOdometer']) || !is_numeric($_POST['insVid'])) { 
                alertUser("WARNING: Odometer and Vid has to be integer!");
                return;
            }

            printToConsole("SQL> INSERT INTO Vehicle");
            global $db_conn;
            // Insert data into the Vehicle table
            $tuple = array (
                ":bind1" => $_POST['insVLicense'],
                ":bind2" => $_POST['insVStatus'],
                ":bind3" => $_POST['insVid'],
                ":bind4" => $_POST['insMake'],
                ":bind5" => $_POST['insModel'],
                ":bind6" => $_POST['insColor'],
                ":bind7" => $_POST['insOdometer'],
                ":bind8" => $_POST['insVtName'],
                ":bind9" => $_POST['insVLocation'],
                ":bind10" => $_POST['insCity']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("INSERT INTO Vehicle VALUES (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6, :bind7, :bind8, :bind9, :bind10)", $alltuples, "Vehicle");
            OCICommit($db_conn);
        }


        // INSERT: Reservation
        function handleInsertReservationQueryRequest() {
            // Check integer types:
            if (!is_numeric($_POST['insConfNo'])) { 
                alertUser("WARNING: ConfNo has to be integer!");
                return;
            }

            printToConsole("SQL> INSERT INTO Reservation");

            $intFromTime = convertTimeToInt($_POST['insFromTime']);
            $intToTime = convertTimeToInt($_POST['insToTime']);
            $sqlFromDate = convertDateToSql($_POST['insFromDate']);
            $sqlToDate = convertDateToSql($_POST['insToDate']);

            global $db_conn;
            // Insert data into the Reservation table
            $tuple = array (
                ":bind1" => $_POST['insConfNo'],
                ":bind2" => $_POST['insVtName'],
                ":bind3" => $_POST['insDriverLicense'],
                ":bind4" => $sqlFromDate,
                ":bind5" => $intFromTime,
                ":bind6" => $sqlToDate,
                ":bind7" => $intToTime
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("INSERT INTO Reservation VALUES (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6, :bind7)", $alltuples, "Reservation");
            OCICommit($db_conn);
        }

        // INSERT: Rental
        function handleInsertRentalQueryRequest() {
            // Check integer types:
            if (!is_numeric($_POST['insRid']) || !is_numeric($_POST['insVid']) ||
                !is_numeric($_POST['insOdometer']) || !is_numeric($_POST['insConfNo'])) { 
                alertUser("WARNING: Rid, Vid, Odometer, and ConfNo has to be integer!");
                return;
            }

            $intFromTime = convertTimeToInt($_POST['insFromTime']);
            $intToTime = convertTimeToInt($_POST['insToTime']);
            $sqlFromDate = convertDateToSql($_POST['insFromDate']);
            $sqlToDate = convertDateToSql($_POST['insToDate']);
            $sqlExpDate = convertDateToSql($_POST['insExpDate']);

            global $db_conn;
            // Insert data into the Rental table
            $tuple = array (
                ":bind1" => $_POST['insRid'],
                ":bind2" => $_POST['insVtName'],
                ":bind3" => $_POST['insVid'],
                ":bind4" => $_POST['insDriverLicense'],
                ":bind5" => $sqlFromDate,
                ":bind6" => $intFromTime,
                ":bind7" => $sqlToDate,
                ":bind8" => $intToTime,
                ":bind9" => $_POST['insOdometer'],
                ":bind10" => $_POST['insCardName'],
                ":bind11" => $_POST['insCardNo'],
                ":bind12" => $sqlExpDate,
                ":bind13" => $_POST['insConfNo']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("INSERT INTO Rental VALUES (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6, :bind7, :bind8, :bind9, :bind10, :bind11, :bind12, :bind13)", $alltuples, "Rental");
            OCICommit($db_conn);
        }

        // INSERT: ReturnCar
        function handleInsertReturnCarQueryRequest() {
            // Check integer types:
            if (!is_numeric($_POST['insRid']) || !is_numeric($_POST['insOdometer']) ||
                !is_numeric($_POST['insReturnValue'])) { 
                alertUser("WARNING: Rid, Odometer, and ReturnValue has to be integer!");
                return;
            }

            $intReturnTime = convertTimeToInt($_POST['insReturnTime']);
            $sqlReturnDate = convertDateToSql($_POST['insReturnDate']);

            printToConsole("SQL> INSERT INTO ReturnCar");
            global $db_conn;
            // Insert data into the ReturnCar table
            $tuple = array (
                ":bind1" => $_POST['insRid'],
                ":bind2" => $sqlReturnDate,
                ":bind3" => $intReturnTime,
                ":bind4" => $_POST['insOdometer'],
                ":bind5" => $_POST['insFullTank'],
                ":bind6" => $_POST['insReturnValue']
            );
            $alltuples = array (
                $tuple
            );
            executeBoundSQL("INSERT INTO ReturnCar VALUES (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6)", $alltuples, "ReturnCar");
            executePlainSQL("UPDATE Vehicle SET VStatus='no', Odometer=:bind4 FROM Rental r WHERE r.rid = :bind1 AND r.vid = Vehicle.vid"); 
            OCICommit($db_conn);
        }

        // HANDLE ALL POST ROUTES
        function handlePOSTRequest() {
            if (connectToDB()) {
                printToConsole("Database> Connected");
                try {
                    if (array_key_exists('insertCustomerQueryRequest', $_POST)) {
                        handleInsertCustomerQueryRequest();
                    } else if (array_key_exists('insertVehicleTypeQueryRequest', $_POST)) {
                        handleInsertVehicleTypeQueryRequest();
                    } else if (array_key_exists('insertVehicleQueryRequest', $_POST)) {
                        handleInsertVehicleQueryRequest();
                    } else if (array_key_exists('insertReservationQueryRequest', $_POST)) {
                        handleInsertReservationQueryRequest();
                    } else if (array_key_exists('insertRentalQueryRequest', $_POST)) {
                        handleInsertRentalQueryRequest();
                    } else if (array_key_exists('insertReturnCarQueryRequest', $_POST)) {
                        handleInsertReturnCarQueryRequest();
                    }
                } catch (Exception $e) {
                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                } finally {
                    disconnectFromDB(); // ALWAYS disconnect
                    printToConsole("Database> Disconnected");
                }
            }
        }

		if (isset($_POST['insertSubmit'])) {
            handlePOSTRequest();
        }
		?>

	</body>
</html>

