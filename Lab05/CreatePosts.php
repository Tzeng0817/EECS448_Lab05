<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "f096t004", "Uthee3fu", "f096t004");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$username = $_POST["username"];
$content = $_POST["content"];
$my_query = "SELECT * FROM Users WHERE user_id = '$username'";
$result = mysqli_query($mysqli, $my_query);
$row_num = mysqli_num_rows($result);
if($row_num == 1)
{
	if($content == '')
	{
		echo "Error: Cannot enter blank content";
	}
	else
	{
		$d = "INSERT INTO Posts (author_id, content) VALUES ('$username', '$content')";
		if($mysqli->query($d) === TRUE)
		{
			echo "New Record Created Successfully";
		}
		else
		{
			echo "Error: " . $d . "<br>" . $mysqli->error;
		}
	}
}
else
{
	echo "Error: User ID Does Not Exist";
}
/* close connection */
$mysqli->close();
?>
