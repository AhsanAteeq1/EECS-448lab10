<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "muhammadahsan", "Pi9eingu",
"muhammadahsan");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}

$user= $_POST["user"];
if($user== "")
{
	echo "Not stored because the text field is empty";
	exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('".$user."')";
if($mysqli->query($query))
	{
		echo "New user ".$user." stored successfully <br>";
	}
	else{
		echo "The user ".$user." already exists<br>";
	}


$mysqli->close();
?>
