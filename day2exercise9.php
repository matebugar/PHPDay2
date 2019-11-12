<!DOCTYPE html>

<html>
<body>
<form action="day2exercise9data.php" method ="POST">
Name: <input type="text"  name="name" />
Age: <input type ="text" name="age" />
<input  type="submit" name="submit" />
</form>


<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "day2_database";
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