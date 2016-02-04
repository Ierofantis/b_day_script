<?php

$servername = "localhost";
$username = "ODBC";
$password = "";
$dbname = "datetime";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$date = $_POST['date'];
$sql = "INSERT INTO `datetime`.`date` (`date`) VALUES ('$date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


	 
mysqli_close($conn);

?>
