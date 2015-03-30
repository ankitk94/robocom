
<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html>

  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content=""> 
    
    <link rel="stylesheet" href="content/bootstrap.min.css">
    <link rel="stylesheet" href="searchresult.css">
    <link rel="stylesheet" href="listlabSubmit.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script language="text/javascript">  document.getElementById("emailInfo").value="sadhhsabdahsbahsb"; </script>

  </head>

  <body>

  <div class="topbar">
      <a href="index.php"><img src="img/close_button.png" ></a>
      <p class="touchtop">You are on the list </p>
  </div>
  	
    <?php
	if(isset($_POST['Submit']))
	{
		include_once('config.php');
		$connect = mysqli_connect($servername,$username,$password,$dbname);
		$query = "INSERT INTO user(emailID,password,first_name,last_name,contact,job_title,university,labtype) VALUES('" . $_POST['email'] . "','" . $_POST['password'] . "','" . $_POST['fname'] . "','" . $_POST['lname'] . "','" . $_POST['contact'] . "','" . $_POST['job'] . "','" . $_POST['uname'] . "','" . $_POST['lab_type'] . "');";
	
	
	
	
	//echo $query;
	
	$result = mysqli_query($connect,$query);
	if(!$result)
	{
		echo "Failed";
	}
	else
	{
		$_SESSION['emailID'] = $_POST['email'];
		$_SESSION['name'] = $_POST['fname'] . " " . $_POST['lname'];
		header('Location:confirmationEmail.php');
	}
	
	/*if(!$result)
	{
		echo "Failed";
	}
	else
	{
		echo "Added successfully";
	}*/
	}
	?>
    
  <div class="listlabinfo">
    <p class="contacttop">We'll be in touch with you shortly.</p>
    <p class="contactinfo">In the mean time if you have any queries please contact support@researchbros.com or call us at +91-8699729383.</p>
  </div>

  </body>
</html>






