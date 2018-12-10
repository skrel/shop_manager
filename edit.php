<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>InHouse</title>
<style>

#regForm {
	background-color: #ffffff;
	width: 40%;
	min-width: 350px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.btn {
    border: none;
    color: white;
    padding: 8px 22px;
    font-size: 14px;
    cursor: pointer;
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

</style>
</head>

<body>

<div class="topnav">
  <a class="active" href="http://10.77.10.136/record">Home</a>
  <a href="http://10.77.10.136/record/search.php">Search</a>
  <a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=4345a7b9-9a63-4910-a426-35363201d503&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3d8WPFW83-e06baluP0sxsvPDho5LXXC7qj1bZM1ExuvfMH3QOa2S4D8eBWDIxXaD-WpvwEE_D525-IcnFf1Pc_yNAj0IRy03Tj9znW7ipLuWyJsIvVW2uzi-RVBP68QKjpVOsl8b0wteBApeh6XlFqewUAlieIBk9RJQMcscBlDY8EYmQY8HTQRhTbx8s6IT0yTwF4i95g9wc_pWQvfhQE0G_oY9TLleXb9n60DtuaPI&nonce=636788350106107950.NDFhOGE1YzktMTNjNy00NTczLWE2MjQtZmI1YmNkZWY5ZTUyZmNkOWI1NzctODJlNS00ZjFiLTgxNjEtNzczZWRhODQzOTA3&redirect_uri=https%3a%2f%2fwww.office.com%2f&ui_locales=en-US&mkt=en-US&client-request-id=2c02c2c4-13a6-4776-8b5b-9642a5f0e6b6&login_hint=skrel%40tri-mgroup.com&msafed=0">SharePoint</a>
  <a href="#about">About</a>
</div>

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

if( isset($_GET['edit']) )
{
$id = $_GET['edit'];
$sql="SELECT * FROM users WHERE id='$id'";
$res = $conn-> query($sql);
$row = mysqli_fetch_array($res);
}

if( isset($_POST['newfname']) )
{
	$newfname     = $_POST['newfname'];
	$newlname     = $_POST['newlname'];
	$newage       = $_POST['newage'];
	$newfile      = $_POST['newfile'];
	$newdayneeded = $_POST['newdayneeded'];
	$newstart     = $_POST['newstart'];
	$newcomplete  = $_POST['newcomplete'];
	$newdelivered = $_POST['newdelivered'];
	$id           = $_POST['id'];
	$sql          = "UPDATE users SET fname='$newfname', lname='$newlname', age='$newage', file='$newfile', dayneeded='$newdayneeded', start='$newstart', complete='$newcomplete', delivered='$newdelivered' WHERE id='$id'";
	$res          = mysqli_query($conn,$sql);
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}
$conn->close();
?>


<form id ="regForm" action="edit.php" method="POST">
<fieldset>
<legend><h3>Update the job record</h3></legend>
<label id="fname">Job Number</label><br/>
<input type="text" name="newfname" value="<?php echo $row['fname']; ?>"><br/>
<label id="lname">Task Code</label><br/>
<input type="text" name="newlname" value="<?php echo $row['lname']; ?>"><br/>
<label id="age">Description</label><br/>
<input type="text" name="newage" size="60" value="<?php echo $row['age']; ?>"><br/>
<label id="file">File</label><br/>
<input type="text" name="newfile" size="60" value="<?php echo $row['file']; ?>"><br/>
<label id="dayneeded">Day needed</label><br/>
<input type="text" name="newdayneeded" value="<?php echo $row['dayneeded']; ?>"><br/>
<label id="start">Start</label><br/>
<input type="text" name="newstart" value="<?php echo $row['start']; ?>"><br/>
<label id="complete">Complete</label><br/>
<input type="text" name="newcomplete" value="<?php echo $row['complete']; ?>"><br/>
<label id="delivered">Delivered</label><br/>
<input type="date" name="newdelivered" value="<?php echo $row['delivered']; ?>"><br/>
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<p> </p>
<center><input type="submit" value="Update" class="btn success"></center></fieldset>
</form>


</body>
</html>