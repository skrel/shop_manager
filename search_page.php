<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="$1">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>InHouse</title>
<style>

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

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="http://10.77.10.136/record">Home</a>
  <a href="http://10.77.10.136/record/search.php">Search</a>
  <a href="https://trimgroup.sharepoint.com/sites/VirtualConstructionandDesign/Shared%20Documents/Forms/AllItems.aspx?id=%2Fsites%2FVirtualConstructionandDesign%2FShared%20Documents%2FPrefabrication%20Design">SharePoint</a>
  <a href="#about">About</a>
</div>

<table border="1" width=100%>
<tr>
<th>id</th>
<th>job number</th>
<th>task code</th>
<th>description</th>
<th>needed</th>
<th>start</th>
<th>complete</th>
<th>delivered</th>
</tr>

<?php

$conn=mysqli_connect("localhost","root","","test_db");
$set=$_POST['search'];
if($set){
	$show="SELECT * FROM users WHERE age like '%$set%'";
	$result=mysqli_query($conn,$show);
	while($rows=mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>";
		echo $rows['id'];
		echo "</td>";
		echo "<td>";
		echo $rows['fname'];
		echo "</td>";
		echo "<td>";
		echo $rows['lname'];
		echo "</td>";
		echo "<td>";
		echo $rows['age'];
		echo "</td>";
		echo "<td>";
		echo $rows['dayneeded'];
		echo "</td>";
		echo "<td>";
		echo $rows['start'];
		echo "</td>";
		echo "<td>";
		echo $rows['complete'];
		echo "</td>";
		echo "<td>";
		echo $rows['delivered'];
		echo "</td>";
		echo "</tr>";
		echo "<br/>";
}
}
else {
	echo "No Record Found";
}

$conn->close();
?>

</table></center>
</body>
</html>