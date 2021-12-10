<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "muhammadahsan", "Pi9eingu",
"muhammadahsan");
/* check connection */
if ($mysqli->connect_errno) {
 printf("Connect failed: %s\n", $mysqli->connect_error);
 exit();
}
     $query = "SELECT user_id from Users";
    $answer = $mysqli->query($query);
echo "<p style='color: Brown; font-size:30px'> ViewUsers</p>";

    echo "<table style='border: 4px solid black; color: Red; font-size:24px'>";
    echo "<tr>";
    echo "<td>" . "USERS:" . "</td>";
    echo "</tr>";
    if ($answer->num_rows > 0){
        while ($row = $answer->fetch_assoc()){
            echo "<tr>";
            echo "<td style='border: 3px solid black; color:Blue'>" . $row["user_id"] . "</td>";
            echo "</tr>";
        }
    }
    echo "</table>";

$mysqli->close();
?>
