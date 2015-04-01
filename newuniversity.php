<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
if(isset($_POST['submit']))
{
	include_once('config.php');
	
	$connect = mysqli_connect($servername,$username,$password,$dbname);
	
	$query = "SELECT max(universityID) AS max FROM university;";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	$id = $result['max'] + 1;
	$name = $_POST['name'];
	$description = $_POST['description'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$admin = $_POST['admin'];
	$type = $_POST['type'];
	$query = "INSERT INTO university(universityID,name,description,admin,type,city,state,country) VALUES($id,'$name','$description','$admin','$type','$city','$state','$country');";
	echo $query;
	$result = mysqli_query($connect,$query);
	if(!$result)
	{
		echo "Failed";
	}
}

?>

<form name="f1" action="" method="post">

name : <input type="text" name="name" required/><br>
description : <input type="text" name="description"/><br>
admin : <input type="text" name="admin"/><br>
type : <input type="text" name="type"/><br>
city : <input type="text" name="city"/><br>
state : <input type="text" name="state"/><br>
country : <input type="text" name="country"/><br>
<input type="submit" name="submit" value="add"/>

</form>
</body>
</html>