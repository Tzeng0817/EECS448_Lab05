<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "f096t004", "Uthee3fu", "f096t004");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$delete = $_POST["checkbox"];
foreach($delete as $value)
{
	$query = "DELETE FROM Posts WHERE post_id = '$value'";
	if($mysqli->query($query) === TRUE)
	{
		echo "Post id: " .$value. " deleted.";
		echo "<br>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $mysqli->error;
	}
}
/* close connection */
$mysqli->close();
?>
