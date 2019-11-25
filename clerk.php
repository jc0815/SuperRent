<html>
    <head>
        <title>CPSC 304 Project - Clerk</title>
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
                Function: Renting a vehicle
            -->
            <hr />
            <h2>Rent a Vehicle</h2>
            <p>You can rent a vehicle here, and confirmation number is optional. 
                <br/>Note: if you insert an existing confirmation number,
                you will still be able to overwrite the rental inputs.
                <br />The system will display a receipt afterwards.</p>
            <form method="POST" action="./clerk.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertRentalQueryRequest" name="insertRentalQueryRequest"/>
                <!-- Rid (Int): &nbsp; <input type="text" name="insRid"  placeholder="Rental ID" required /> <br /><br /> -->
                <!-- VtName: &nbsp; <input type="text" name="insVtName"  placeholder="Vehicle Type Name" required /> <br /><br /> -->
                Vehicle Type: &nbsp; <select class="select" name="insVtName" placeholder="Vehicle Type">
                                                <option value="Economy">Economy</option>
                                                <option value="Compact">Compact</option>
                                                <option value="Mid-size">Mid-size</option>
                                                <option value="Standard">Standard</option>
                                                <option value="Full-size">Full-size</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Truck">Truck</option>
                                            </select><br /><br />
                Vehicle ID: &nbsp; <input type="text" name="insVid"  placeholder="Vehicle ID" required /> <br /><br />
                Driver's License: &nbsp; <input type="text"  placeholder="Customer Driver License" name="insDriverLicense" required /> <br /><br />
                Start Date: &nbsp; <input type="date" name="insFromDate"  placeholder="eg, 2019-11-22" required /> <br /><br />
                Start Time: &nbsp; <input type="time" name="insFromTime"  placeholder="eg, 09:00" required /> <br /><br />
                End Date: &nbsp; <input type="date" name="insToDate"  placeholder="eg, 2019-11-22" required /> <br /><br />
                End Time: &nbsp; <input type="time" name="insToTime"  placeholder="eg, 09:00" required /> <br /><br />
                Odometer: &nbsp; <input type="text" name="insOdometer"  placeholder="Odometer" required /> <br /><br />
                Card Name: &nbsp; <input type="text" name="insCardName"  placeholder="Card Name" required /> <br /><br />
                Card Number: &nbsp; <input type="text" name="insCardNo"  placeholder="Card Number" required /> <br /><br />
                Card Expiry Date: &nbsp; <input type="date" name="insExpDate"  placeholder="eg, 2019-11-22" required /> <br /><br />
                Confirmation Number: &nbsp; <input type="text" name="insConfNo"  placeholder="Confirmation Number" /> <br /><br />
                <input class="button" type="submit" value="Insert" name="insertSubmit"/>
            </form>


            <!--
                Function: Return Vehicle
            -->
            <hr />
            <h2>Return Vehicle</h2>
            <p>You can return a vehicle here (after rental), the system will display a receipt afterwards.</p>
            <form method="POST" action="./clerk.php"> <!--refresh page when submitted-->
                <input type="hidden" id="insertReturnCarQueryRequest" name="insertReturnCarQueryRequest"/>
                Rental ID: &nbsp; <input type="text" name="insRid"  placeholder="Rental ID" required /> <br /><br />
                Return Date: &nbsp; <input type="date" name="insReturnDate"  placeholder="eg, 2019-11-22" required /> <br /><br />
                Return Time: &nbsp; <input type="time" name="insReturnTime"  placeholder="eg, 09:00" required /> <br /><br />
                Odometer: &nbsp; <input type="text" name="insOdometer"  placeholder="Odometer" /> <br /><br />
                Full Tank: &nbsp; <select class="select" name="insFullTank" placeholder="Status">
                            <option value="Yes">Full</option>
                            <option value="No">Not Full</option>
                          </select><br /><br />
                Return Value: &nbsp; <input type="text" name="insReturnValue"  placeholder="Return Value" required /> <br /><br />
                <input class="button" type="submit" value="Insert" name="insertSubmit"/>
            </form>

            <!--
                Function: Report - Daily Rental
            -->
            <hr />
            <h2>Generate Report (Daily Rentals)</h2>
            <p>This report contains information on all the vehicles rented out during the day. </p>
            <form method="GET"> <!--refresh page when submitted-->
                <input type="hidden" id="generateReportDailyRental" name="generateReportDailyRental"/>
                <input class="button" type="submit" value="View" name="getDailyRental"/>
            </form>
            <?php
                function handleDailyRental() {
                    // Part 1
                    $resultOne = executePlainSQL("SELECT * FROM Vehicle WHERE VStatus LIKE 'no' ORDER BY City, VLocation, VtName");
                    echo "<div class='table'>";
                    echo "<a class='table-close' href='./clerk.php'>Close</a>";
                    echo "<h2 class='table-header'>Daily Rental Report:</h2>";
                    echo "<table class='content table-entry' cellpadding='5px' >";
                    echo "<p class='content table-description'>All the vehicles that are currently rented out, sorted by branch and vehicle type:</p>";
                    echo "<tr>";
                    echo "<td> License </td> <td> Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td> Odometer </td>
                            <td> Vehicle Type </td> <td> Location </td> <td> City </td> ";
                    echo "</tr>";
                    while (($row = oci_fetch_array($resultOne)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 2
                    $resultTwo = executePlainSQL("SELECT VtName, COUNT(*) FROM Vehicle WHERE VStatus LIKE 'no' GROUP BY VtName");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>Number of vehicles that are rented out per vehicle type:</p>";
                    echo "<tr><td> VtName </td> <td> Number of Vehicles </td></tr>";
                    while (($row = oci_fetch_array($resultTwo)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 3
                    $resultThree = executePlainSQL("SELECT City, VLocation, VtName, COUNT(*) FROM Vehicle WHERE VStatus LIKE 'no' GROUP BY City, VLocation, VtName ORDER BY City, VLocation, VtName");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>Number of vehicles that are rented out per vehicle type for each branch:</p>";
                    echo "<tr><td> City </td> <td> VLocation </td> <td> VtName </td> <td> Number of Vehicles </td> </tr>";
                    while (($row = oci_fetch_array($resultThree)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 4
                    $todayDate = strval(date("d-M-y"));
                    printToConsole("Today date: " . $todayDate);
                    $resultFour = executePlainSQL("SELECT v.VtName, COUNT(*) FROM Vehicle v, Rental r WHERE r.FromDate = '" . $todayDate . "' AND v.Vid = r.Vid GROUP BY v.VtName");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>Number of vehicles that were rented out today, sorted by vehicle type:</p>";
                    echo "<tr><td> VtName </td> <td> Number of Vehicles </td></tr>";
                    while (($row = oci_fetch_array($resultFour)) != false) {
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
                Function: Report - Daily Rental By Branch
            -->
            <hr />
            <h2>Generate Report (Daily Rentals By Branch)</h2>
            <p>This is the same as the Daily Rental report but it is for one specified branch.</p>
            <form method="GET"> <!--refresh page when submitted-->
                <input type="hidden" id="generateReportDailyRentalByBranch" name="generateReportDailyRentalByBranch"/>
                <!-- Location: &nbsp; <input type="text" name="insLocation" placeholder="Location" required /> <br /><br /> -->
                Location: &nbsp; <select class="select" name="insLocation" placeholder="Vehicle Type">
                                        <option value="Downtown">Downtown</option>
                                        <option value="Airport">Airport</option>
                                 </select><br /><br />
                <!-- City: &nbsp; <input type="text" name="insCity" placeholder="City" required /> <br /><br /> -->
                City: &nbsp; <select class="select" name="insCity" placeholder="Vehicle Type">
                                <option value="Vancouver">Vancouver</option>
                                <option value="Toronto">Toronto</option>
                             </select><br /><br />
                <input class="button" type="submit" value="View" name="getDailyRentalByBranch"/>
            </form>
            <?php
                function handleDailyRentalByBranch() {
                    $location = $_GET['insLocation'];
                    $city = $_GET['insCity'];
                    // Part 1
                    $resultOne = executePlainSQL("SELECT * FROM Vehicle WHERE City LIKE '" . $city . "' AND VLocation LIKE '" . $location . "' AND VStatus LIKE 'no' ORDER BY VtName");
                    echo "<div class='table' cellpadding='5px'>";
                    echo "<a class='table-close' href='./clerk.php'>Close</a>";
                    echo "<h2 class='table-header'>Daily Rental By Branch Report:</h2>";
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>All the vehicles that are currently rented out for a specific branch:</p>";
                    echo "<tr>";
                    echo "<td> License </td> <td> Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td> Odometer </td>
                            <td> Vehicle Type </td> <td> Location </td> <td> City </td> ";
                    echo "</tr>";
                    while (($row = oci_fetch_array($resultOne)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 2
                    $resultTwo = executePlainSQL("SELECT VtName, COUNT(*) FROM Vehicle WHERE City LIKE '" . $city . "' AND VLocation LIKE '" . $location . "' AND VStatus LIKE 'no' GROUP BY VtName");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>Number of vehicles that are rented out per vehicle type for a specific branch:</p>";
                    echo "<tr>";
                    echo "<td> Vehicle Type </td> <td> Number of Vehicles </td>";
                    echo "</tr>";
                    while (($row = oci_fetch_array($resultTwo)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 3
                    $todayDate = strval(date("d-M-y"));
                    $resultThree = executePlainSQL("SELECT v.VtName, COUNT(*) FROM Vehicle v, Rental r WHERE r.FromDate = '" . $todayDate . "' AND v.City LIKE '" . $city . "' AND v.VLocation LIKE '" . $location . "' AND v.Vid = r.Vid GROUP BY v.VtName");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>Number of vehicles that were rented today, per vehicle type, for a specific branch:</p>";
                    echo "<tr>";
                    echo "<td> Vehicle Type </td> <td> Number of Vehicles </td>";
                    echo "</tr>";
                    while (($row = oci_fetch_array($resultThree)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "</div>";
                }
		    ?>
            <!--
                Function: Report - Daily Return
            -->
            <hr />
            <h2>Generate Report (Daily Return)</h2>
            <p>The report contains information on all the vehicles returned during the day. </p>
            <form method="GET"> <!--refresh page when submitted-->
                <input type="hidden" id="generateReportDailyReturn" name="generateReportDailyReturn"/>
                <input class="button" type="submit" value="View" name="getDailyReturn"/>
            </form>
            <?php
                function handleDailyReturn() {
                    // Part one
                    $todayDate = strval(date("d-M-y"));
                    printToConsole("Today date: " . $todayDate);
                    $resultOne = executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, v.VtName, v.VLocation, v.City FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.ReturnDate = '" . $todayDate . "' AND r1.Rid = r2.Rid AND r2.Vid = v.Vid ORDER BY v.VtName, v.VLocation, v.City");
                    echo "<div class='table'>";
                    echo "<a class='table-close' href='./clerk.php'>Close</a>";
                    echo "<h2 class='table-header'>Daily Return Report:</h2>";
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>All the vehicles that were returned today:</p>";
                    echo "<tr>";
                    echo "<td> Vehicle License </td> <td> Vehicle Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td>  Odometer  </td>
                            <td>  Vehicle Type  </td> <td>  Location  </td> <td>  City  </td> ";
                    echo "</tr>";
                    printToConsole($resultOne);
                    while (($row = oci_fetch_array($resultOne)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 2
                    $resultTwo = executePlainSQL("SELECT v.VtName, COUNT(*) FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = '" . $todayDate . "' GROUP BY v.VtName");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>The number of vehicles that were returned today for each vehicle type:</p>";
                    echo "<tr>";
                    echo "<td>  Vehicle Type  </td> <td>  Number of Vehicles  </td>";
                    echo "</tr>";
                    printToConsole($resultTwo);
                    while (($row = oci_fetch_array($resultTwo)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 3
                    $resultThree = executePlainSQL("SELECT v.VtName, SUM(r1.ReturnValue) FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = '" . $todayDate . "' GROUP BY v.Vtname");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>The sum return value for each vehicle type:</p>";
                    echo "<tr>";
                    echo "<td>  Vehicle Type  </td> <td>  Total Return  </td>";
                    echo "</tr>";
                    printToConsole($resultThree);
                    while (($row = oci_fetch_array($resultThree)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 4
                    $resultFour = executePlainSQL("SELECT COUNT(v.Vtname), v.City, v.VLocation, SUM(r1.ReturnValue) FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = '" . $todayDate . "' GROUP BY v.City, v.VLocation, v.Vtname");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>The total revenue per vehicle type for each branch:</p>";
                    echo "<tr>";
                    echo "<td>  City  </td> <td>  Location  </td> <td>  Total Return  </td>";
                    echo "</tr>";
                    printToConsole($resultFour);
                    while (($row = oci_fetch_array($resultFour)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 5
                    $resultFive = executePlainSQL("SELECT SUM(r1.ReturnValue) FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = '" . $todayDate . "'");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>Total revenue for SuperRent (ALL branches):</p>";
                    echo "<tr>";
                    echo "<td>  Total Return  </td>";
                    echo "</tr>";
                    printToConsole($resultFive);
                    while (($row = oci_fetch_array($resultFive)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "</div>";
                }
		    ?>
            <!--
                Function: Report - Daily Return
            -->
            <hr />
            <h2>Generate Report (Daily Return By Branch)</h2>
            <p>This is the same as the Daily Returns report, but it is for one specified branch. </p>
            <form method="GET"> <!--refresh page when submitted-->
                <input type="hidden" id="generateReportDailyReturnByBranch" name="generateReportDailyReturnByBranch"/>
                <!-- Location: &nbsp; <input type="text" name="insLocation" placeholder="Location" required /> <br /><br /> -->
                Location: &nbsp; <select class="select" name="insLocation" placeholder="Vehicle Type">
                                        <option value="Downtown">Downtown</option>
                                        <option value="Airport">Airport</option>
                                 </select><br /><br />
                <!-- City: &nbsp; <input type="text" name="insCity" placeholder="City" required /> <br /><br /> -->
                City: &nbsp; <select class="select" name="insCity" placeholder="Vehicle Type">
                                <option value="Vancouver">Vancouver</option>
                                <option value="Toronto">Toronto</option>
                            </select> <br /><br />
                <input class="button" type="submit" value="View" name="getDailyReturnByBranch"/>
            </form>
            <?php
                function handleDailyReturnByBranch() {
                    $location = $_GET['insLocation'];
                    $city = $_GET['insCity'];
                    $todayDate = strval(date("d-M-y"));
                    printToConsole("Today date: " . $todayDate);
                    $resultOne = executePlainSQL("SELECT v.VLicense, v.VStatus, v.Vid, v.Make, v.Model, v.Color, v.Odometer, v.VtName, v.VLocation, v.City FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.ReturnDate = '" . $todayDate . "' AND r1.Rid = r2.Rid AND v.City LIKE '" . $city . "' AND v.VLocation LIKE '" . $location . "' AND r2.Vid = v.Vid");
                    echo "<div class='table'>";
                    echo "<a class='table-close' href='./clerk.php'>Close</a>";
                    echo "<h2 class='table-header'>Daily Return Report:</h2>";
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>All the vehicles that were returned today, grouped by vehicle types:</p>";
                    echo "<tr>";
                    echo "<td> Vehicle License </td> <td> Vehicle Status </td> <td> Vehicle ID </td> <td> Make </td> <td> Model </td> <td> Color </td> <td>  Odometer  </td>
                            <td>  Vehicle Type  </td> <td>  Location  </td> <td>  City  </td> ";
                    echo "</tr>";
                    printToConsole($resultOne);
                    while (($row = oci_fetch_array($resultOne)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 2
                    $resultTwo = executePlainSQL("SELECT v.VtName, COUNT(*) FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND v.City LIKE '" . $city . "' AND v.VLocation LIKE '" . $location . "' AND r1.ReturnDate = '" . $todayDate . "' GROUP BY v.VtName");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>The number of vehicles that were returned today for each vehicle type, for a specific branch:</p>";
                    echo "<tr>";
                    echo "<td>  Vehicle Type  </td> <td>  Number of Vehicles  </td>";
                    echo "</tr>";
                    printToConsole($resultTwo);
                    while (($row = oci_fetch_array($resultTwo)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 3
                    $resultThree = executePlainSQL("SELECT v.VtName, SUM(r1.ReturnValue) FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND v.City LIKE '" . $city . "' AND v.VLocation LIKE '" . $location . "' AND r1.ReturnDate = '" . $todayDate . "' GROUP BY v.VtName");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>The number of vehicles that were returned today for each vehicle type, for a specific branch:</p>";
                    echo "<tr>";
                    echo "<td>  Vehicle Type  </td> <td>  Total  </td>";
                    echo "</tr>";
                    printToConsole($resultTwo);
                    while (($row = oci_fetch_array($resultThree)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 4:
                    $resultFour = executePlainSQL("SELECT COUNT(v.VtName), SUM(r1.ReturnValue) FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND r1.ReturnDate = '" . $todayDate . "' AND v.City LIKE '" . $city . "' AND v.VLocation LIKE '" . $location . "'");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>The number of vehicles returned and the revenue the specific branch:</p>";
                    echo "<tr>";
                    echo "<td>  Number of Vehicles  </td> <td>  Revenue </td>";
                    echo "</tr>";
                    printToConsole($resultTwo);
                    while (($row = oci_fetch_array($resultFour)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Part 5:
                    $resultFive = executePlainSQL("SELECT SUM(r1.ReturnValue) FROM ReturnCar r1, Rental r2, Vehicle v WHERE r1.Rid = r2.Rid AND r2.Vid = v.Vid AND v.City LIKE '" . $city . "' AND v.VLocation LIKE '" . $location . "' AND r1.ReturnDate = '" . $todayDate . "'");
                    echo "<table class='content table-entry' cellpadding='5px'>";
                    echo "<p class='content table-description'>Total revenue for a specific branch today:</p>";
                    echo "<tr>";
                    echo "<td>  Total Return  </td>";
                    echo "</tr>";
                    printToConsole($resultTwo);
                    while (($row = oci_fetch_array($resultFive)) != false) {
                        echo "<tr>";
                        for ($i = 0; $i < count($row); $i++) {
                            echo "<td>" . $row[$i] . "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "</div>";
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
                return "error";
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                printToConsole("Cannot execute the following command: " . $cmdstr);
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                printToConsole($e['message']);
                $success = False;
                return "error";
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

        // Get count of reservation, helper for insert Reservation
        function handleCountRental() {
            global $db_conn;
            $result = executePlainSQL("SELECT Count(*) FROM rental");
            $count = 0;
            if (($row = oci_fetch_row($result)) != false) {
                $count = intval($row[0]);
            }
            printToConsole("Rental No Created: " . strval($count + 1));
            return $count;
        }

        // INSERT: Rental
        function handleInsertRentalQueryRequest() {
            // Check integer types:
            if (!is_numeric($_POST['insVid']) || !is_numeric($_POST['insOdometer'])) { 
                alertUser("WARNING: Rid, Vid, Odometer has to be integer!");
                return;
            }
            $rentalNo = strval(intval(handleCountRental()) + 1);

            $intFromTime = convertTimeToInt($_POST['insFromTime']);
            $intToTime = convertTimeToInt($_POST['insToTime']);
            $sqlFromDate = convertDateToSql($_POST['insFromDate']);
            $sqlToDate = convertDateToSql($_POST['insToDate']);
            $sqlExpDate = convertDateToSql($_POST['insExpDate']);
            $vehicleID = $_POST['insVid'];
            $driverLicense = $_POST['insDriverLicense'];

            global $db_conn;
            // Insert data into the Rental table
            $tuple = array (
                ":bind1" => $_POST['insVtName'],
                ":bind2" => $_POST['insVid'],
                ":bind3" => $_POST['insDriverLicense'],
                ":bind4" => $sqlFromDate,
                ":bind5" => $intFromTime,
                ":bind6" => $sqlToDate,
                ":bind7" => $intToTime,
                ":bind8" => $_POST['insOdometer'],
                ":bind9" => $_POST['insCardName'],
                ":bind10" => $_POST['insCardNo'],
                ":bind11" => $sqlExpDate,
                ":bind12" => $_POST['insConfNo']
            );
            $alltuples = array (
                $tuple
            );
            $status = executePlainSql("SELECT VStatus FROM Vehicle WHERE vid = '" . $vehicleID . "'");
            if (($row = oci_fetch_row($status)) != false) {
                if (strval($row[0]) == "no") {
                    alertUser("Sorry, vehicle " . strval($vehicleID) . " is unavailable right now!");
                    OCICommit($db_conn);
                    return;
                }
            } else if ($status == "error" ){
                alertUser("Sorry, something went wrong :(");
                OCICommit($db_conn);
                return;
            }
            $result = executeBoundSQL("INSERT INTO Rental VALUES ($rentalNo, :bind1, :bind2, :bind3, :bind4, :bind5, :bind6, :bind7, :bind8, :bind9, :bind10, :bind11, :bind12)", $alltuples, "Rental");
            if (strval($result) == "success") {
                $result2 = executePlainSQL("UPDATE VEHICLE SET VSTATUS = 'no' WHERE VID = '" . $vehicleID . "'");
                if ($result2 != "error") {
                    alertUser("Successfully rented! Rental ID: " . strval($rentalNo) . ", From: " . 
                                strval($sqlFromDate) . ", To: " . strval($sqlToDate) . ", Driver License: " . strval($driverLicense));
                } else {
                    alertUser("Sorry, please try again. Something went wrong :(");
                }
            } else if (strval($result) == "reference") {
                alertUser("We could not find your information in the database, please try again!");
            } else {
                alertUser("Sorry, please try again. Something went wrong :(");
            }
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
            $rentalID = $_POST['insRid'];
            $odometer = $_POST['insOdometer'];
            $returnValue = $_POST['insReturnValue'];

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
            $result = executeBoundSQL("INSERT INTO ReturnCar VALUES (:bind1, :bind2, :bind3, :bind4, :bind5, :bind6)", $alltuples, "ReturnCar");
            if (strval($result) == "success") {
                $result2 = executePlainSQL("UPDATE Vehicle SET VStatus = 'yes', Odometer = '" . $odometer . "' WHERE vid = (SELECT vid FROM RENTAL WHERE RID = '" . $rentalID . "')"); 
                if ($result2 != "error") {
                    alertUser("Successfully returned vehicle! Rental ID: " . strval($rentalID) . ", Return Date: " . $sqlReturnDate . ", Return Costs: $" . $returnValue);
                } else {
                    alertUser("Sorry, please try again. Something went wrong :(");
                }
            } else if (strval($result) == "reference") {
                alertUser("We could not find your information in the database, please try again!");
            } else {
                alertUser("Sorry, please try again. Something went wrong :(");
            }
            OCICommit($db_conn);
        }

        // HANDLE ALL POST ROUTES
        function handlePOSTRequest() {
            if (connectToDB()) {
                printToConsole("Database> Connected");
                try {
                    if (array_key_exists('insertRentalQueryRequest', $_POST)) {
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

        // HANDLE ALL GET ROUTES
        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('getDailyRental', $_GET)) {
                    handleDailyRental();
                } else if (array_key_exists('getDailyRentalByBranch', $_GET)) {
                    handleDailyRentalByBranch();
                } else if (array_key_exists('getDailyReturn', $_GET)) {
                    handleDailyReturn();
                } else if (array_key_exists('getDailyReturnByBranch', $_GET)) {
                    handleDailyReturnByBranch();
                }
                disconnectFromDB();
            }
        }

		if (isset($_POST['insertSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['generateReportDailyRental']) || isset($_GET['generateReportDailyRentalByBranch'])
                    || isset($_GET['generateReportDailyReturn']) || isset($_GET['generateReportDailyReturnByBranch'])) {
            handleGETRequest();
        }
		?>
	</body>
</html>

