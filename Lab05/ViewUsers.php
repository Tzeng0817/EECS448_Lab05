<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "f096t004", "Uthee3fu", "f096t004");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT user_id FROM Users ORDER BY user_id ASC";
echo "<table>";
if ($result = $mysqli->query($query)) {
    /* fetch associative array */
    echo "Table for all Users: ";
    while ($row = $result->fetch_assoc()) {
	echo "<tr><td>".$row["user_id"]."</td></tr>";	
    }
echo "</table>";
    /* free result set */
    $result->free();
}
/* close connection */
$mysqli->close();
?>
