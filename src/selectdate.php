<?php
// This could be supplied by a user, for example

#connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datetime";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Formulate Query
// This is the best way to perform an SQL query
// For more examples, see mysql_real_escape_string()
$query = sprintf("SELECT * FROM datetime.date WHERE TO_DAYS(date)=To_DAYS(NOW())");
   

// Perform Query
$result = mysql_query($query);

// Check result
// This shows the actual query sent to MySQL, and the error. Useful for debugging.
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

// Use result
// Attempting to print $result won't allow access to information in the resource
// One of the mysql result functions must be used
// See also mysql_result(), mysql_fetch_array(), mysql_fetch_row(), etc.
while ($row = mysql_fetch_array($result)) {
    $now=$row['date'];
	
	echo $now;
}

// Free the resources associated with the result set
// This is done automatically at the end of the script
mysql_free_result($result);
?>