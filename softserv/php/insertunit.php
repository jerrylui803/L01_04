
<?php
header('Content-Type: application/json');
// php config
$servername= 'localhost';
$username = 'softserv_admin';
$password = 'softserv';
$db = 'softserv';

$unitname = $_GET["unitname"];
// create a connection
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Set SQL query and input the partial course name

//variables
$sql_insertunit = "INSERT INTO UNITS('NAME') VALUES ('$unitname')";

$result_insertunit = mysqli_query($conn, $sql_insertunit);
echo json_encode($unitid);
mysqli_close($conn);

?>