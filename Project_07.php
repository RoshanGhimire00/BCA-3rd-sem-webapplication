<?php
// Function to set a cookie with current date, time, and day
function setDateTimeCookie() {
    date_default_timezone_set('Asia/Kathmandu');
    $currentDateTime = date("Y-m-d H:i:sA");
    setcookie("datetime_cookie", $currentDateTime, time() + 3600); // Cookie expires in 1 hour
}

// Check if the "List Cookies" button is clicked
if (isset($_POST['list_cookies'])) {
    // Display all cookies
    echo "<h2>Stored Cookies:</h2>";
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";
}

// Set the current date, time, and day into a cookie when the page is loaded
setDateTimeCookie();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Date, Time, and Day</title>
</head>
<body>
    <h1>Current Date, Time, and Day</h1>
    <?php
    // Display current date, time, and day
    $currentDate = date("Y-m-d");
    $currentTime = date("H:i:sA");
    $currentDay = date("l");

    echo "<p>Date: $currentDate</p>";
    echo "<p>Time: $currentTime</p>";
    echo "<p>Day: $currentDay</p>";
    ?>

    <!-- Button to list cookies -->
    <form method="post" action="">
        <input type="submit" name="list_cookies" value="List Cookies">
    </form>
</body>
</html>
