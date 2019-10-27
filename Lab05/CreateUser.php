<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "f096t004", "Uthee3fu", "f096t004");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user_id = $_POST["user_id"];
if($user_id == '')
{
	echo "You Are Not Allowed to Create a Username w/o Any Characters !";
}
else{
$d = "INSERT INTO Users (user_id) VALUES ('$user_id')";
if($mysqli->query($d) === TRUE) {
	echo "New Record Created Successfully !";
	}
else{
	echo "ERROR: " . $d . "<br>" . $mysqli->error . "!";
}
}
/* close connection */
$mysqli->close();
?>
