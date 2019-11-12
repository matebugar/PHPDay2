<?php

if( isset($_POST['submit']))
{
if( $_POST["name" ] || $_POST["age"] )
{
echo "Welcome ". $_POST[ 'name']. "<br />";
echo "You are " . $_POST['age']. " years old.";
}
}

$sql = "UPDATE Users SET lastname='Johny' WHERE user_id=2";
mysqli_query($conn, $sql);

if (mysqli_query($conn, $sql)) {
   echo "That worked, folks!"  . "\n";
} else {
   echo  "Run for your lives, bitches!" . mysqli_error($conn) . "\n";
};
?>