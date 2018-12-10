<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//if( isset($_GET['delete']) )
{
$id = $_GET['delete'];
//$sql="DELETE FROM users WHERE id='$id'";
$res = $conn-> query($sql);
}


$conn->close();
?>
<center><p>Do you want to delete this record?</p></center>
<center><form action="delete.php" method="POST">
<input type="submit" value="delete">
</form></center>
<center><button type="button" onclick="window.location.href='http://10.77.10.136/record'">Back</button></center>
<p></p>
<center><button type="button" onclick="window.location.href='http://10.77.10.136/record'">Home page</button></center>