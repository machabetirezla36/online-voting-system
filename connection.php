<?php
$servername = "localhost";
$username = "root";
<<<<<<< HEAD
$password = ""; // your MySQL password if applicable
$database = "db_igma_project";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();
=======
$password = "";
$dbname = "db_batch5_ovs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br/>";
>>>>>>> 55dde70cd0434da8d17e9b0bdf9c8cc8b793bcec
?>