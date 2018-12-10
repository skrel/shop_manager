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

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
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

.success {background-color: #0066ff;} /* Green */
.success:hover {background-color: #46a049;}

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="http://10.77.10.136/record">Home</a>
  <a href="http://10.77.10.136/record/search.php">Search</a>
<a href="https://trimgroup.sharepoint.com/sites/VirtualConstructionandDesign/Shared%20Documents/Forms/AllItems.aspx?id=%2Fsites%2FVirtualConstructionandDesign%2FShared%20Documents%2FPrefabrication%20Design">SharePoint</a>
  <a href="http://10.77.10.136/record/bom.html">BOM</a>
  <a href="#about">About</a>
</div>

<form id ="regForm" action="index.php" method="post">
<fieldset>
<legend><h3>Create new job record</h3></legend>
<label id="fname">Job Number:</label><br/>
<input type="text" name="fname"><br/>
<label id="lname">Task Code:</label><br/>
<input type="text" name="lname"><br/>
<label id="file">File Link:</label><br/>
<input type="text" name="file" size="60"><br/>
<label id="age">Description:</label><br/>
<input type="text" name="age" size="60"><br/>
<label id="dayneeded">Day Needed:</label><br/>
<input type="date" name="dayneeded"><br/>
<p></p>
<center><button type="submit" name="save" class="btn success">Submit</button></center></fieldset>
</form>


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

  if(isset($_POST['save']))
{
    $sql = "INSERT INTO users (fname, lname, age, file, dayneeded)
    VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["age"]."','".$_POST["file"]."','".$_POST["dayneeded"]."')";

	    $result = mysqli_query($conn,$sql);
}

$sql = "SELECT id, fname, lname, age, file, dayneeded, start, complete, delivered from users order by dayneeded, id desc";
$result = $conn-> query($sql);
?>

<table width=100% border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table id="customers">
<tr>
</tr>

<tr>
<td align="center"><strong>id</strong></td>
<td align="center"><strong>job</strong></td>
<td align="center"><strong>task code</strong></td>
<td align="center"><strong>description, short summury</strong></td>
<td align="center"><strong>file</strong></td>
<td align="center"><strong>needed</strong></td>
<td align="center"><strong>start</strong></td>
<td align="center"><strong>complete</strong></td>
<td align="center"><strong>delivered</strong></td>
<td align="center"><strong>edit</strong></td>
<td align="center"><strong>delete</strong></td>
</tr>

<?php
while ($row = $result-> fetch_assoc()) {
?>

<tr>
<td align="center"><?php echo $row['id']; ?><br/></td>
<td align="center"><?php echo $row['fname']; ?><br/></td>
<td align="center"><?php echo $row['lname']; ?><br/></td>
<td><?php echo $row['age']; ?><br/></td>
<td align="center"><a href="<?php echo $row['file']; ?>">file</a><br/></td>
<td align="center"><?php echo $row['dayneeded']; ?><br/></td>
<td align="center"><?php echo $row['start']; ?><br/></td>
<td align="center"><?php echo $row['complete']; ?><br/></td>
<td align="center"><?php echo $row['delivered']; ?><br/></td>
<td align="center"><a href="edit.php?edit=<?php echo $row['id']; ?>">edit...</a><br/></td>
<td align="center"><a href="delete.php?delete=<?php echo $row['id']; ?>">delete</a><br/></td>
</tr>

<?php
}
?>

</table>
</td>
</tr>
</table>

<?php
$conn->close();
?>
		
</body>
</html>