<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Subscription</title>
</head>

<body>

<?php
$email = $_POST['emailID'];
$name = $_POST['name'];
$organisation = $_POST['organisation'];

$connect = mysqli_connect("localhost","root","","researchbros");

$query = "INSERT INTO subscribed(emailID,name,organisation) VALUES('" . $email . "','" . $name . "','" . $organisation . "');";

echo $query . "<br/>";

$result = mysqli_query($connect,$query);

if(!$result)
{
	echo "Error while adding:";
}
else
{
	echo "Successfully added";
	header('Location:index.php');
}
?>

</body>
</html>