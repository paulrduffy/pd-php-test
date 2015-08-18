<!DOCTYPE html>

<?php
// Example use of getenv()
$ip = getenv('REMOTE_ADDR');


echo "IP is" . $ip;

$servername = getenv('dbhost');

echo "dbhost is " . $servername;

$username = getenv("username");

echo "username is " . $username;

$password = getenv("dbpassword");

echo "password is " . $password;

$dbname = getenv("dbname");

echo "dbname is " . $dbname;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM results";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - raceno: " . $row["raceno"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body bgcolor="#0000FF">
        <div class="container">
            <div class="hero-unit">
                <h1><font face="verdana" color="yellow">Very Simple PHP Test Application...</font></h1>
                <br>
                <p><font face="verdana" color="yellow" size="5">This simple PHP test application was deployed in a Runnable Sandbox!</font></p>
                <br>
                <br>
                <p><font face="verdana" color="yellow" size="3">GitHub integration made this really simple to get running in a Runnable Sandbox</font></p>
            </div>
        </div>

    </body>

</html>


