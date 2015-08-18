<!DOCTYPE html>
<html>
<head>
<style>

#results {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 80%;
    border-collapse: collapse;
}

#results td, #results th {
    font-size: 1em;
    border: 1px solid ##6600CC;
    padding: 3px 7px 2px 7px;
}

#results th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #6600CC;
    color: #ffffff;
}

#results tr.alt td {
    color: #000000;
    background-color: #EAF2D3;
}

table, td, th {
     border: 1px solid purple;
     padding: 10px;
     font: Arial;
}

th

{

background-color: purple;
    color: white;
    font: Arial;
}
</style>

</head>
<body>

<body bgcolor="#000000">
        
<h1><font face="verdana" color="black">Race Results!</font></h1>
                <br>
                <p><font face="verdana" color="black" size="5">This simple race results application is running in a Runnable Sandbox!</font></p>
                <br>
                <br>
                <p><font face="verdana" color="black" size="3">GitHub integration made it really easy to get started.</font></p>



<table id="results">

<tr><th>Place</th><th>DivTot</th><th>Div</th><th>Gun Time</th><th>Net Time</th><th>Pace</th><th>First</th><th>Last</th><th>Age</th><th>Gender</th><th>Race #</th>
<th>City</th><th>State</th></tr>

<?php

//Get environment variables to connect

$servername = getenv('dbhost');
$username = getenv("username");
$password = getenv("dbpassword");
$dbname = getenv("dbname");

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "SELECT id, firstname, lastname FROM results";

$sql = "SELECT * FROM results";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo "<tr>";

echo "<td>" . $row["place"] . "</td>";

echo "<td>" . $row["divtot"] . "</td>";

echo "<td>" . $row["div"] . "</td>";

echo "<td>" . $row["guntime"] . "</td>";

echo "<td>" . $row["nettime"] . "</td>";

echo "<td>" . $row["pace"] . "</td>";

echo "<td>" . $row["firstname"] . "</td>";

echo "<td>" . $row["lastname"] . "</td>";

echo "<td>" . $row["age"] . "</td>";

echo "<td>" . $row["gender"] . "</td>";

echo "<td>" . $row["raceno"] . "</td>";

echo "<td>" . $row["city"] . "</td>";

echo "<td>" . $row["state"] . "</td>";

echo "</tr>" ;

   }

} else {
    echo "0 results";
}
$conn->close();

?>

</table>

</body>
</html>





