<html>
    <head>
        <title>CPSC 304 Project</title>
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

        <!-- Cover Page -->
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
            <br />
            <h1 class="w3-wide">SuperRent</h1>
            <br/>
            <h2 class="w3-wide">CPSC 304 2019W1</h2>
            <p class="w3-opacity">Car Rental Project</p>
            <p class="w3-justify">
                This is a database system for a typical Car Renting Company called
                SuperRent. There are two types of users: Clerk or Customer. Clerks
                will be able to rent a vehicle, return a vehicle, and view various
                reports. Customers will be able to view and reserve vehicles.
            </p>
            <p class="w3-justify"><br />Tools: PHP, SQL+, Apache</p>
        </div>
        <!-- About Us Section -->
        <div class="w3-black" id="tour">
            <div class="w3-container w3-content w3-padding-64" style="max-width:1000px">
            <h2 class="w3-wide w3-center">Developers</h2>

            <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                <div class="w3-third w3-margin-bottom">
                <div class="w3-container w3-white">
                    <p><b>Toji Nakabayashi</b></p>
                    <p class="w3-opacity">B.Sc. Computer Science</p>
                    <a class="w3-button w3-black w3-margin-bottom" href="https://github.com/nappyu">GitHub</a>
                </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                <div class="w3-container w3-white">
                    <p><b>Deonne Millaire</b></p>
                    <p class="w3-opacity">B.Sc. Statistics</p>
                    <a class="w3-button w3-black w3-margin-bottom" href="https://github.com/deonnem">GitHub</a>
                </div>
                </div>
                <div class="w3-third w3-margin-bottom">
                <div class="w3-container w3-white">
                    <p><b>James Chuang</b></p>
                    <p class="w3-opacity">B.Sc. Computer Science & Statistics</p>
                    <a class="w3-button w3-black w3-margin-bottom" href="https://github.com/jc0815">GitHub</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- COVER IMAGE -->
        <img src="./assets/cover.jpg" class="w3-image w3-greyscale-min" style="width:100%">
	</body>


    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
        <a href="https://github.com/jc0815/CPSC304-Project">
            <i class="fa fa-github w3-hover-opacity" href="https://github.com/jc0815/CPSC304-Project"></i>
        </a> 
        <p class="w3-medium">Thanks for coming on our website!</p>
    </footer>

</html>

