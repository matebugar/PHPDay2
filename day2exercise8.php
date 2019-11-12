<!DOCTYPE html>

<html>
<body>
<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "cr09_mate_bugar_carrental";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
/* sql to create table
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
*/



$sql = "SELECT booking.booking_date, bookinglocation.pickup_location, bookinglocation.return_location, bookingdate.pickup_date,bookingdate.return_date,agency.location_city,agency.location_country, rentalagent.first_name,rentalagent.last_name
FROM booking 
INNER JOIN bookinglocation ON booking.booking_id = bookinglocation.fk_booking_id
INNER JOIN bookingdate ON booking.booking_id = bookingdate.fk_booking_id
INNER JOIN rentalagent ON booking.booking_id = rentalagent.fk_booking_id 
INNER JOIN agency ON agency.agency_id = rentalagent.fk_agency_id /*WHERE user_id = 1*/";

$result = mysqli_query($conn, $sql);

if($result->num_rows == 0){
	$row= "No results";
	$status=0;
}elseif($result->num_rows == 1){
	$row = $result->fetch_assoc();
	$status=1;
} else {
	$row = $result->fetch_all(MYSQLI_ASSOC);
	$status= 2;
}

// if($status == 0){
// 	echo $row;
// } elseif($status == 1){
// 	echo $row['firstname'] . ' ' . $row['lastname'];
// }else {
// 	foreach ($row as $value) {
// 		echo $value['firstname'] . ' ' . $value['lastname'] . ' ' . $value['email'].'<br>';
// 	}
// }


echo "<table border='1'><tr>";
foreach ($row[0] as $key => $value) {
	echo '<td>'.$key.'</td>';
}
echo "</tr>";

foreach ($row as $value) {
	echo "<tr>";
	foreach ($value as $val) {
		echo '<td>'.$val.'</td>';
	}
	echo "</tr>";
}
echo "</table>";


/*

// fetch the next row (as long as there are any) into $row
while($row = mysqli_fetch_assoc($result)) {
       printf("ID=%s %s (%s)<br>",
                     $row[ "user_id"], $row["lastname"],$row["firstname"],$row["email"]);
}
echo  "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);
*/
// Close connection
mysqli_close($conn);
?>
</body>
</html>