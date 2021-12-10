<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "muhammadahsan", "Pi9eingu",
"muhammadahsan");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}
$user= $_POST["user"];
$post=$_POST["post"];

	if ($post == ""){
        echo " Post cannot be empty";
        exit();
    }

    $query = "SELECT user_id from Users";
    $answer = $mysqli->query($query);

    $user_found = FALSE;
    if ($answer->num_rows > 0){
        while ($row = $answer->fetch_assoc()){
            if ($row["user_id"] == $user){
                $user_found = TRUE;
            }
        }
    }
    if (!$user_found){
        echo "User Not Found!!";
        exit();
    }
    $query = "INSERT INTO Posts (content, author_id) VALUES ('" . $post . "', '" . $user .  "')";
    if ($result = $mysqli->query($query)){
        echo "Post for ".$user." have been created successfully";
    }
    else{
        echo "Error!! Try with valid input!";
    }

$mysqli->close();
?>
