<html>
    <head>
        <title>CPSC 304 Project - Customer</title>
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
            <!--
                Function: Insert Customer 
            -->
            <hr />
            <h2>New User</h2>
            <p>If you have never registered with your driver's license, please fill out this form!</p>
            <form method="POST" action="./customer.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertCustomerQueryRequest" name="insertCustomerQueryRequest" />
                Full Name: &nbsp; <input type="text" name="insCName" placeholder="Name" required /> <br /><br />
                Address: &nbsp; <input type="text" name="insPAddress" placeholder="Address" required /> <br /><br />
                Driver's License: &nbsp; <input type="text" name="insDriverLicense" placeholder="Driver's License" required /> <br /><br />
                CellPhone: &nbsp; <input type="text" name="insCellPhone" placeholder="Cellphone" required /> <br /><br />
                <input class="button" type="submit" value="Insert" name="insertSubmit" required />
            </form>


            <!--
                Function: Insert Reservation 
            -->
            <hr />
            <h2>Make a Reservation</h2>
            <p>You can reserve a vehicle here (optional for rental). Please have a registered account with us before you start.</p>
            <form method="POST" action="./customer.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertReservationQueryRequest" name="insertReservationQueryRequest"/>
                Vehicle Type: &nbsp; <select class="select" name="insVtName" placeholder="Vehicle Type">
                                                <option value="Economy">Economy</option>
                                                <option value="Compact">Compact</option>
                                                <option value="Mid-size">Mid-size</option>
                                                <option value="Standard">Standard</option>
                                                <option value="Full-size">Full-size</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Truck">Truck</option>
                                            </select><br /><br />
                Driver's License: &nbsp; <input type="text" name="insDriverLicense" placeholder="Driver's License" required /> <br /><br />
                Start Date: &nbsp; <input type="date" name="insFromDate" placeholder="eg, 2019-11-22" required /> <br /><br />
                Start Time: &nbsp; <input type="time" name="insFromTime" placeholder="eg, 09:00" required /> <br /><br />
                End Date: &nbsp; <input type="date" name="insToDate" placeholder="eg, 2019-11-22" required /> <br /><br />
                End Time: &nbsp; <input type="time" name="insToTime" placeholder="eg, 18:00" required /> <br /><br />
                <input class="button" type="submit" value="Insert" name="insertSubmit"/>
            </form>

            <!--
                Function: View Available Vehicles
            -->
            <hr />
            <h2>View Available Vehicles</h2>
            <p>You can view the available vehicles that satisfy your requirements below. 
                <br />If you select "Vehicle", it will group the vehicle types, and display 
                the count for each one available. <br/>If you select "All", it will display
                ALL available vehicles with the satisfied inputs.</p>
            <form method="POST" action="./customer.php"> <!--refresh page when submitted-->
                <input type="hidden" id="viewVehiclesRequest" name="viewVehiclesRequest"/>
                Vehicle Type: &nbsp; <select class="select" name="insVtName" placeholder="Vehicle Type">
                                        <option value="All">All</option>
                                        <option value="Economy">Economy</option>
                                        <option value="Compact">Compact</option>
                                        <option value="Mid-size">Mid-size</option>
                                        <option value="Standard">Standard</option>
                                        <option value="Full-size">Full-size</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Truck">Truck</option>
                                    </select>
                &nbsp; Select: &nbsp; <select class="select" name="insSelect" placeholder="Select">
                                        <option value="All">All</option>
                                        <option value="Vehicle">Vehicle</option>
                                    </select>
                <br /><br />
                Location: &nbsp; <input type="text" name="insLocation" placeholder="Location" /> <br /><br />
                Start Date: &nbsp; <input type="date" name="insFromDate" placeholder="eg, 2019-11-21" />
                &nbsp; End Date: &nbsp; <input type="date" name="insToDate" placeholder="eg, 2019-11-22" /> <br /><br />
                <input class="button" type="submit" value="View" name="viewVehicles"/>
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
                printToConsole("Cannot parse the following command: " . $cmdstr);;
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                printToConsole($e['message']);
                $success = False;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                printToConsole("Cannot execute the following command: " . $cmdstr);
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                printToConsole($e['message']);
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
            $result = "success";

            if (!$statement) {
                alertUser("Cannot parse the following command: " . $cmdstr);
                printToConsole("Cannot parse the following command: " . $cmdstr);
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
                $result = "fail";
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    // echo $val;
                    // echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); // make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
                }

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    printToConsole("Cannot execute the following command: " . $cmdstr);
                    // echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    printToConsole($e['message']);
                    if (strpos($e['message'], 'unique') !== false) { // already a driver license
                        $result = "unique"; // assign result as unique
                    } else if (strpos($e['message'], 'parent') !== false) {
                        $result = "reference";
                    } else {
                        $result = "fail";
                    }
                    $success = False;
                }
            }
            if ($success) {
                $result = "success";
            }
            return $result;
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
            $result = executeBoundSQL("INSERT INTO Customer VALUES (:bind1, :bind2, :bind3, :bind4)", $alltuples, "Customer");
            if (strval($result) == "success") {
                alertUser("Successfully signed up! Name: " . strval($_POST['insCName']) . ", Address: " . 
                            strval($_POST['insPAddress']) . ", Driver License: " . strval($_POST['insDriverLicense']) 
                            . ", CellPhone: " . strval($_POST['insCellPhone']));
            } else if (strval($result) == "unique") {
                alertUser("There is already a user with driver license: " . strval($_POST['insDriverLicense']));
            } else if (strval($result) == "reference") {
                alertUser("We could not find your information in the database, please try again!");
            } else {
                alertUser("Sorry, please try again. Something went wrong :(");
            }
            OCICommit($db_conn);
        }

        // Get count of reservation, helper for insert Reservation
        function handleCountReservation() {
            global $db_conn;
            $result = executePlainSQL("SELECT Count(*) FROM reservation");
            $count = 0;
            if (($row = oci_fetch_row($result)) != false) {
                $count = intval($row[0]);
            }
            printToConsole("Confirmation No Created: " . strval($count + 1));
            return $count;
        }

        // INSERT: Reservation
        function handleInsertReservationQueryRequest() {
            $confNo = strval(intval(handleCountReservation()) + 1);
            printToConsole("SQL> INSERT INTO Reservation");

            $intFromTime = convertTimeToInt($_POST['insFromTime']);
            $intToTime = convertTimeToInt($_POST['insToTime']);
            $sqlFromDate = convertDateToSql($_POST['insFromDate']);
            $sqlToDate = convertDateToSql($_POST['insToDate']);

            global $db_conn;
            // Insert data into the Reservation table
            $tuple = array (
                ":bind1" => $confNo,
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
            $result = executeBoundSQL("INSERT INTO Reservation VALUES (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6, :bind7)", $alltuples, "Reservation");
            if (strval($result) == "success") {
                alertUser("Successfully made a reservation! Confirmation Number: " . strval($confNo) . 
                            ", Vehicle Type: " . strval($_POST['insVtName']) . ", Driver License: " .
                            strval($_POST['insDriverLicense']) . " Start Date: " . strval($sqlFromDate) .
                            ", Start Time: " . strval($intFromTime) . ", End Date: " . strval($sqlToDate) . 
                            ", End Time: " . strval($intToTime));
            } else if (strval($result) == "reference") {
                alertUser("We could not find your information in the database, please try again!");
            } else {
                alertUser("Sorry, please try again. Something went wrong :(");
            }
            OCICommit($db_conn);
        }

        // TODO: Finish view vehicle query
        function handleViewRequest() {
            printToConsole("View request called.");
            global $db_conn;
            $vehicleType = strval($_POST['insVtName']);
            $vehicleLocation = strval($_POST['insLocation']);
            $fromDate = strval($_POST['insFromDate']);
            $fromDateSql = strval(convertDateToSql($_POST['insFromDate']));
            $toDate = strval($_POST['insToDate']);
            $toDateSql = strval(convertDateToSql($_POST['insToDate']));
            $select = strval($_POST['insSelect']);
            // printToConsole("vehicleType: " . $vehicleType);
            // printToConsole("vehicleLocation: " . $vehicleLocation);
            // printToConsole("fromDate: " . $fromDate);
            // printToConsole("toDate: " . $toDate);
            // printToConsole("select: " . $select);
            echo "<div class='table' >";
            echo "<a class='table-close' href='./customer.php'>Close</a>";
            echo "<h2 class='table-header'>View Available Vehicles:</h2>";
            echo "<table class='content table-entry' cellpadding='5px'>";
            echo "<p class='content table-description'>Here are the vehicles available with your specified inputs:</p>";
            if ($vehicleType == "All" && $vehicleLocation == "" && $fromDate == "" && $toDate == "" && $select == "Vehicle") { // GOOD
                printToConsole("All vehicles, grouped.");
                $result = executePlainSql("SELECT VtName, count(*) FROM Vehicle WHERE VStatus LIKE 'yes' GROUP BY VtName ORDER BY VtName");
                echo "<tr>";
                echo "<td> Vehicle Type </td> <td> Number Available </td>";
                echo "</tr>";
            } else if ($vehicleType == "All" && $vehicleLocation == "" && $fromDate == "" && $toDate == "" && $select == "All") { // GOOD
                printToConsole("All vehicles, not grouped.");
                $result = executePlainSQL("SELECT * FROM Vehicle WHERE VStatus LIKE 'yes'");
                echo "<tr>";
                echo "<td> License </td> <td> Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td> Odometer </td>
                        <td> Vehicle Type </td> <td> Location </td> <td> City </td> ";
                echo "</tr>";
            } else if ($vehicleType == "All" && $vehicleLocation != "" && $fromDate == "" && $toDate == "" && $select == "Vehicle") { // GOOD
                printToConsole("All vehicles, grouped, with location.");
                $result = executePlainSQL("SELECT VtName, count(*) FROM Vehicle WHERE VStatus LIKE 'yes' AND VLocation LIKE '" . $vehicleLocation . "'");
                echo "<tr>";
                echo "<td> Vehicle Type </td> <td> Number Available </td>";
                echo "</tr>";
            } else if ($vehicleType == "All" && $vehicleLocation != "" && $fromDate == "" && $toDate == "" && $select == "All")  { // GOOD
                printToConsole("All vehicles, not grouped, with location.");
                $result = executePlainSQL("SELECT * FROM Vehicle WHERE VStatus LIKE 'yes' AND VLocation LIKE '" . $vehicleLocation . "'");
                echo "<tr>";
                echo "<td> License </td> <td> Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td> Odometer </td>
                        <td> Vehicle Type </td> <td> Location </td> <td> City </td> ";
                echo "</tr>";
            } else if ($vehicleType == "All" && $vehicleLocation != "" && $fromDate != "" && $toDate != "" && $select == "Vehicle") { // GOOD
                printToConsole("All vehicles, grouped, with location and timeframe.");
                $result = executePlainSQL("SELECT v.VtName, count(*) FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VLocation LIKE '" . $vehicleLocation . "' AND (re.ToDate < '" . $fromDateSql . "' OR re.FromDate > '" . $toDateSql . "') GROUP BY v.VtName ORDER BY v.VtName");
                echo "<tr>";
                echo "<td> Vehicle Type </td> <td> Number Available </td>";
                echo "</tr>";
            } else if ($vehicleType == "All" && $vehicleLocation != "" && $fromDate != "" && $toDate != "" && $select == "All") { // GOOD
                printToConsole("All vehicles, not grouped, with location and timeframe.");
                $result = executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, v.VtName, v.VLocation, v.City FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VLocation LIKE '" . $vehicleLocation . "' AND (re.ToDate < '" . $fromDateSql . "' OR re.FromDate > '" . $toDateSql . "')");
                echo "<tr>";
                echo "<td> License </td> <td> Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td> Odometer </td>
                        <td> Vehicle Type </td> <td> Location </td> <td> City </td> ";
                echo "</tr>";
            } else if ($vehicleType == "All" && $vehicleLocation == "" && $fromDate != "" && $toDate != "" && $select == "Vehicle") { // GOOD
                printToConsole("All vehicles, grouped, with timeframe.");
                $result = executePlainSQL("SELECT v.VtName, count(*) FROM Vehicle v, Rental re WHERE v.VStatus LIKE 'yes' OR v.Vid = re.Vid AND (re.ToDate < '" . $fromDateSql . "' OR re.FromDate > '" . $toDateSql . "') GROUP BY v.VtName ORDER BY v.VtName");
                echo "<tr>";
                echo "<td> Vehicle Type </td> <td> Number Available </td>";
                echo "</tr>";
            } else if ($vehicleType == "All" && $vehicleLocation == "" && $fromDate != "" && $toDate != "" && $select == "All") { // GOOD
                printToConsole("All vehicles, not grouped, with timeframe.");
                $result = executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, v.VtName, v.VLocation, v.City FROM Vehicle v, Rental re WHERE v.VStatus LIKE 'yes' OR v.Vid = re.Vid AND (re.ToDate < '" . $fromDateSql . "' OR re.FromDate > '" . $toDateSql . "')");
                echo "<tr>";
                echo "<td> License </td> <td> Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td> Odometer </td>
                        <td> Vehicle Type </td> <td> Location </td> <td> City </td> ";
                echo "</tr>";
            } else if ($vehicleType != "All" && $vehicleLocation == "" && $fromDate == "" && $toDate == "" && $select == "Vehicle") { // GOOD
                printToConsole("Specific vehicle, grouped.");
                $result = executePlainSQL("SELECT VtName, count(*) FROM Vehicle WHERE VStatus LIKE 'yes' AND VtName LIKE '" . $vehicleType . "' GROUP BY VtName ORDER BY VtName");
                echo "<tr>";
                echo "<td> Vehicle Type </td> <td> Number Available </td>";
                echo "</tr>";
            } else if ($vehicleType != "All" && $vehicleLocation == "" && $fromDate == "" && $toDate == "" && $select == "All"){ // GOOD
                printToConsole("Specific vehicle, not grouped.");
                $result = executePlainSQL("SELECT * FROM Vehicle WHERE VStatus LIKE 'yes' AND VtName LIKE '" . $vehicleType . "'");
                echo "<tr>";
                echo "<td> License </td> <td> Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td> Odometer </td>
                        <td> Vehicle Type </td> <td> Location </td> <td> City </td> ";
                echo "</tr>";
            } else if ($vehicleType != "All" && $vehicleLocation != "" && $fromDate == "" && $toDate == "" && $select == "Vehicle") { // GOOD
                printToConsole("Specific vehicle, grouped, with location.");
                $result = executePlainSQL("SELECT VtName, count(*) FROM Vehicle v WHERE VStatus LIKE 'yes' AND VLocation LIKE '" . $vehicleLocation . "' AND VtName LIKE '" . $vehicleType . "' GROUP BY VtName ORDER BY VtName");
                echo "<tr>";
                echo "<td> Vehicle Type </td> <td> Number Available </td>";
                echo "</tr>";
            } else if ($vehicleType != "All" && $vehicleLocation != "" && $fromDate == "" && $toDate == "" && $select == "All") { // GOOD
                printToConsole("Specific vehicle, not grouped, with location.");
                $result = executePlainSQL("SELECT * FROM Vehicle v WHERE VStatus LIKE 'yes' AND VLocation LIKE '" . $vehicleLocation . "' AND VtName LIKE '" . $vehicleType . "'");
                echo "<tr>";
                echo "<td> License </td> <td> Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td> Odometer </td>
                        <td> Vehicle Type </td> <td> Location </td> <td> City </td> ";
                echo "</tr>";
            } else if ($vehicleType != "All" && $vehicleLocation == "" && $fromDate != "" && $toDate != "" && $select == "Vehicle") { // GOOD
                printToConsole("Specific vehicle, grouped, with timeframe.");
                $result = executePlainSQL("SELECT v.VtName, count(*) FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VtName LIKE '" . $vehicleType . "' AND (re.ToDate < '" . $fromDateSql . "' OR re.FromDate > '" . $toDateSql . "') GROUP BY v.VtName ORDER BY v.VtName");
                echo "<tr>";
                echo "<td> Vehicle Type </td> <td> Number Available </td>";
                echo "</tr>";
            } else if ($vehicleType != "All" && $vehicleLocation == "" && $fromDate != "" && $toDate != "" && $select == "All") { // GOOD
                printToConsole("Specific vehicle, grouped, with timeframe.");
                $result = executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, v.VtName, v.VLocation, v.City  FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VtName LIKE '" . $vehicleType . "' AND (re.ToDate < '" . $fromDateSql . "' OR re.FromDate > '" . $toDateSql . "')");
                echo "<tr>";
                echo "<td> License </td> <td> Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td> Odometer </td>
                        <td> Vehicle Type </td> <td> Location </td> <td> City </td> ";
                echo "</tr>";
            } else if ($vehicleType != "All" && $vehicleLocation != "" && $fromDate != "" && $toDate != "" && $select == "Vehicle") {
                printToConsole("Specific vehicle, grouped, with location and timeframe.");
                $result = executePlainSQL("SELECT v.VtName, count(*) FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VLocation LIKE '" . $vehicleLocation . "' AND v.VtName LIKE '" . $vehicleType . "' AND (re.ToDate < '" . $fromDateSql . "' OR re.FromDate > '" . $toDateSql . "') GROUP BY v.VtName ORDER BY v.VtName");
                echo "<tr>";
                echo "<td> Vehicle Type </td> <td> Number Available </td>";
                echo "</tr>";
            } else if ($vehicleType != "All" && $vehicleLocation != "" && $fromDate != "" && $toDate != "" && $select == "All") {
                printToConsole("Specific vehicle, not grouped, with location and timeframe.");
                $result = executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, v.VtName, v.VLocation, v.City FROM Vehicle v, Rental re WHERE (v.VStatus LIKE 'yes' OR v.Vid = re.Vid) AND v.VLocation LIKE '" . $vehicleLocation . "' AND v.VtName LIKE '" . $vehicleType . "' AND (re.ToDate < '" . $fromDateSql . "' OR re.FromDate > '" . $toDateSql . "')");
                echo "<tr>";
                echo "<td> License </td> <td> Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td> Odometer </td>
                        <td> Vehicle Type </td> <td> Location </td> <td> City </td> ";
                echo "</tr>";
            }
            while (($row = oci_fetch_array($result)) != false) {
                echo "<tr>";
                for ($i = 0; $i < count($row); $i++) {
                    echo "<td>" . $row[$i] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        }

        // HANDLE ALL POST ROUTES
        function handlePOSTRequest() {
            if (connectToDB()) {
                printToConsole("Database> Connected");
                try {
                    if (array_key_exists('insertCustomerQueryRequest', $_POST)) {
                        handleInsertCustomerQueryRequest();
                    } else if (array_key_exists('insertReservationQueryRequest', $_POST)) {
                        handleInsertReservationQueryRequest();
                    } else if (array_key_exists('viewVehiclesRequest', $_POST)) {
                        handleViewRequest();
                    }
                } catch (Exception $e) {
                    printToConsole("Caught exception: " .  $e->getMessage());
                } finally {
                    disconnectFromDB(); // ALWAYS disconnect
                    printToConsole("Database> Disconnected");
                }
            }
        }

        // HANDLE ALL GET ROUTES
        function handleGETRequest() {
            if (connectToDB()) {
                printToConsole("Database> Connected");
                try {
                    // if (array_key_exists('viewVehiclesRequest', $_GET)) {
                    //     handleViewRequest();
                    // }
                } catch (Exception $e) {
                    printToConsole("Caught exception: " . $e->getMessage());
                } finally {
                    disconnectFromDB(); // ALWAYS disconnect
                    printToConsole("Database> Disconnected");
                }
            }
        }

        if (isset($_POST['insertSubmit']) || isset($_POST['viewVehiclesRequest'])) {
            handlePOSTRequest();
        }
        ?>
	</body>
</html>

