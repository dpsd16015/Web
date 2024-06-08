<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #DCDCDC; /* Webpage background color */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }
        .square {
            width: 90%;
            max-width: 900px; /* Max width of the square */
            height: 100vh;
            background-color: #A9A9A9; /* Square color */
            position: relative;
            margin: 50px auto; /* Center the square */
            border-radius: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: left;
            align-items: flex-start;
            padding: 20px;
            overflow-x: auto;
        }
        /* Container styles */
        .container-custom {
            width: calc(50% - 10px); /* 33.33% width with 20px margin between containers */
            margin: 5px; /* Space between containers */
            padding: 50px; /* Optional padding for content inside the container */
            background-color: #2F4F4F; /* Container background color */
            border-radius: 20px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional box shadow for styling */
            box-sizing: border-box; /* Ensure padding and border are included in the width and height */
            display: flex;
            align-items: flex-end; /* Align items to the bottom */
            justify-content: center; /* Center horizontally */
            text-align: center; /* Center text alignment */
        }
        
        .container-custom h1 {
            font-size: 30px;
            color: #DCDCDC;
        }

        /* Image styles */
        .square img {
            width: 100%;
            max-width: 100%; /* Ensure image fits container width */
            height: auto;
            position: absolute; /* Position image absolutely */
            bottom: 0; /* Align image to the bottom */
            left: 0; /* Align image to the left */
        }
        /* Button styles */
        .btn {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 300px; /* Rounded corners */
        }
        /* Large button style */
        .btn-lg {
            padding: 40px 40px; /* Larger padding */
            font-size: 20px; /* Larger font size */
        }
        /* Primary button color */
        .btn-primary {
            background-color: #008CBA; /* Blue */
        }
        .carousel-item {
            height: 32rem;
            background: #2F4F4F;
        }
    </style>
</head>
<body>
    <div class="carousel-item active">
        <div class="container">
            <a href="#" class="btn btn-lg btn-primary">
                Lalo
            </a>
        </div>
        <div class="square">
            <?php
            $servername = "localhost";
            $username = "dpsd16015";
            $password = "dpsd16015";
            $dbname = "dpsd16015";
            // Connect to MySQL server
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT faghta, glyka FROM eidos";
            $result = mysqli_query($conn, $sql);
            // Loop through the result set
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $id = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="container container-custom">';
                    echo '<h1>' . $row["faghta"] . ' ' . $row["glyka"] . '</h1>';
                    echo '</div>';
                    $id++;
                }
            } else {
                echo '<div class="container container-custom">0 results</div>';
            }
            mysqli_close($conn);
            ?>
            <img src="food.jpg" alt="food">
        </div>
    </div>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
