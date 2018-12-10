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
  <a href="https://trimgroup.sharepoint.com/sites/VirtualConstructionandDesign/Shared%20Documents/Forms/AllItems.aspx?id=%2Fsites%2FVirtualConstructionandDesign%2FShared%20Documents%2FPrefabrication%20Design">SharePoint</a>
  <a href="#about">About</a>
</div>
<p></p>
<fieldset><center><p>Search by "Description"</p>
<p></p>
<form action="search_page.php" method="post">

<input type="text" name="search" size="60"/><br/>
<p></p>
<button class="btn success">Search</button></form></center></fieldset>

</body>
</html>
