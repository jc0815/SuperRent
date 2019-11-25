<html>
    <head>
        <title>CPSC 304 Project - View</title>
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
            <p>Note: This is NOT part of the project. This is for quick viewing of the SQL database only. </p>
            <!--
                Function: View customer
            -->
            <hr />
            <h2>View Customer</h2>
            <form method="GET"> <!--refresh page when submitted-->
                <input type="hidden" id="getCustomer" name="getCustomer"/>
                <input class="button" type="submit" value="View" name="getCustomer"/>
            </form>
            <?php
                function handleCustomerRequest() {
                    $resultOne = executePlainSQL("SELECT * FROM CUSTOMER");
                    echo "<div class='table'>";
                    echo "<a class='table-close' href='./view.php'>Close</a>";
                    echo "<h2 class='table-header'>Customer:</h2>";
                    echo "<table class='content table-entry' cellpadding='5px' >";
                    echo "<tr>";
                    echo "<td> Name </td> <td> Address </td> <td> Driver License </td> <td> Cellphone </td> ";
                    echo "</tr>";
                    while (($row = oci_fetch_array($resultOne)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<div />";
                }
		    ?>
            <!--
                Function: View vehicle
            -->
            <hr />
            <h2>View Vehicle</h2>
            <form method="GET"> <!--refresh page when submitted-->
                <input type="hidden" id="getVehicle" name="getVehicle"/>
                <input class="button" type="submit" value="View" name="getVehicle"/>
            </form>
            <?php
                function handleVehicleRequest() {
                    $resultOne = executePlainSQL("SELECT * FROM VEHICLE");
                    echo "<div class='table'>";
                    echo "<a class='table-close' href='./view.php'>Close</a>";
                    echo "<h2 class='table-header'>Vehicle:</h2>";
                    echo "<table class='content table-entry' cellpadding='5px' >";
                    echo "<tr>";
                    echo "<td> License </td> <td> Status </td> <td> ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td> Odometer </td> <td> Vehicle Type </td> <td> Location </td> <td> City </td>";
                    echo "</tr>";
                    while (($row = oci_fetch_array($resultOne)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<div />";
                }
		    ?>
            <!--
                Function: View vehicle type
            -->
            <hr />
            <h2>View Vehicle Type</h2>
            <form method="GET"> <!--refresh page when submitted-->
                <input type="hidden" id="getVehicleType" name="getVehicleType"/>
                <input class="button" type="submit" value="View" name="getVehicleType"/>
            </form>
            <?php
                function handleVehicleTypeRequest() {
                    $resultOne = executePlainSQL("SELECT * FROM VEHICLETYPE");
                    echo "<div class='table'>";
                    echo "<a class='table-close' href='./view.php'>Close</a>";
                    echo "<h2 class='table-header'>Vehicle Type:</h2>";
                    echo "<table class='content table-entry' cellpadding='5px' >";
                    echo "<tr>";
                    echo "<td> Vehicle Type </td> <td> Features </td> <td> Weekly Rate </td> <td> Daily Rate </td> <td> Hourly Rate </td> <td> Weekly Insurance </td> <td> Daily Insurance </td> <td> Hourly Insurance </td> <td> Kilometer Rate </td>";
                    echo "</tr>";
                    while (($row = oci_fetch_array($resultOne)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<div />";
                }
		    ?>
            <!--
                Function: View rental
            -->
            <hr />
            <h2>View Rental</h2>
            <form method="GET"> <!--refresh page when submitted-->
                <input type="hidden" id="getRental" name="getRental"/>
                <input class="button" type="submit" value="View" name="getRental"/>
            </form>
            <?php
                function handleRentalRequest() {
                    $resultOne = executePlainSQL("SELECT * FROM RENTAL");
                    echo "<div class='table'>";
                    echo "<a class='table-close' href='./view.php'>Close</a>";
                    echo "<h2 class='table-header'>Rental:</h2>";
                    echo "<table class='content table-entry' cellpadding='5px' >";
                    echo "<tr>";
                    echo "<td> Rental ID </td> <td> Vehicle Type </td> <td> Vehicle ID </td> <td> Driver License </td> <td> From Date </td> <td> From Time </td> <td> To Date </td> <td> To Time </td> <td> Odometer </td> <td> Card Name </td> <td> Card No </td> <td> Exp Date </td> <td> Conf No </td>";
                    echo "</tr>";
                    while (($row = oci_fetch_array($resultOne)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<div />";
                }
		    ?>
            <!--
                Function: View reserve
            -->
            <hr />
            <h2>View Reserve</h2>
            <form method="GET"> <!--refresh page when submitted-->
                <input type="hidden" id="getReserve" name="getReserve"/>
                <input class="button" type="submit" value="View" name="getReserve"/>
            </form>
            <?php
                function handleReserveRequest() {
                    $resultOne = executePlainSQL("SELECT * FROM RESERVATION");
                    echo "<div class='table'>";
                    echo "<a class='table-close' href='./view.php'>Close</a>";
                    echo "<h2 class='table-header'>Reserve:</h2>";
                    echo "<table class='content table-entry' cellpadding='5px' >";
                    echo "<tr>";
                    echo "<td> Conf No </td> <td> Vehicle Type </td> <td> Driver License </td> <td> From Date </td> <td> From Time </td> <td> To Date </td> <td> To Time </td>";
                    echo "</tr>";
                    while (($row = oci_fetch_array($resultOne)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<div />";
                }
		    ?>
            <!--
                Function: View reserve
            -->
            <hr />
            <h2>View Return</h2>
            <form method="GET"> <!--refresh page when submitted-->
                <input type="hidden" id="getReturn" name="getReturn"/>
                <input class="button" type="submit" value="View" name="getReturn"/>
            </form>
            <?php
                function handleReturnRequest() {
                    $resultOne = executePlainSQL("SELECT * FROM RETURNCAR");
                    echo "<div class='table'>";
                    echo "<a class='table-close' href='./view.php'>Close</a>";
                    echo "<h2 class='table-header'>Return:</h2>";
                    echo "<table class='content table-entry' cellpadding='5px' >";
                    echo "<tr>";
                    echo "<td> Return ID </td> <td> Return Date </td> <td> Return Time </td> <td> Odometer </td> <td> Full Tank </td> <td> Return Value </td> ";
                    echo "</tr>";
                    while (($row = oci_fetch_array($resultOne)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "<div />";
                }
		    ?>
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

        // HANDLE ALL GET ROUTES
        function handleGETRequest() {
            if (connectToDB()) {
                printToConsole("Database> Connected");
                try {
                    if (array_key_exists('getCustomer', $_GET)) {
                        handleCustomerRequest();
                    } else if (array_key_exists('getVehicle', $_GET)) {
                        handleVehicleRequest();
                    } else if (array_key_exists('getVehicleType', $_GET)) {
                        handleVehicleTypeRequest();
                    } else if (array_key_exists('getRental', $_GET)) {
                        handleRentalRequest();
                    } else if (array_key_exists('getReturn', $_GET)) {
                        handleReturnRequest();
                    } else if (array_key_exists('getReserve', $_GET)) {
                        handleReserveRequest();
                    }
                } catch (Exception $e) {
                    printToConsole("Caught exception: " . $e->getMessage());
                } finally {
                    disconnectFromDB(); // ALWAYS disconnect
                    printToConsole("Database> Disconnected");
                }
            }
        }

        if (isset($_GET['getCustomer']) || isset($_GET['getVehicle']) || isset($_GET['getVehicleType'])
            || isset($_GET['getReserve']) || isset($_GET['getRental']) || isset($_GET['getReturn'])) {
            handleGETRequest();
        }
        ?>
	</body>
</html>

