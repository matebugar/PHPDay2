<?php
$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "day2_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: "  . mysqli_connect_error());
}
/*
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
   echo "Table Users created successfully"  . "\n";
} else {
   echo  "Error creating table: " . mysqli_error($conn) . "\n";
}
*/

/*
$sql = "INSERT INTO Users (firstname, lastname, email)
VALUES ('Ching', 'Thao', 'conquereyourcountry@dictator.com')";
if (mysqli_query($conn, $sql)) {
    echo "New record created.\n";
} else {
   echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
}
*/

mysqli_close($conn);
?>
