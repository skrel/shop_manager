<center><button type="button" onclick="window.location.href='http://10.77.10.136/record'">Back</button></center>
<p></p>
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

if( isset($_GET['file']) )
{
$id = $_GET['file'];
$sql="SELECT * FROM users WHERE id='$id'";
$res = $conn-> query($sql);
$row = mysqli_fetch_array($res);

echo "<center><img src='files/".$row['file']."' hight='1000pt' width='1000pt'></center>";

}

$conn->close();
?>


