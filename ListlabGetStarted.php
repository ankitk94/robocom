
<?php

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
    <link rel="stylesheet" href="listlabGetStarted.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  </head>

  <body>

  <div class="topbar">
      <a href="" onClick="history.go(-1); return false;"><img src="img/close_button.png" ></a>
      <p>Join our Network of Labs</p>
  </div>
  
  <div class="listlabinfo">
    <h5>Get Started</h5>
    <p class="formtop">Please fill in the details below to get started.</p>
    <form action="listlabLabinfo.php" method="post">
      <input type="text" name="fname" placeholder="First Name"   id="listlab_name" autocomplete="off" required /></br>
      <input type="text" name="lname" placeholder="Last Name"   id="listlab_name" autocomplete="off" required /></br>
      <input type="email" name="email" placeholder="Email Id"   id="listlab_name" autocomplete="off" required /></br>
      <input type="password" name="password" placeholder="Password"   id="listlab_name" autocomplete="off" required /></br>
      <input type="tel" name="contact" placeholder="Phone Number"   id="listlab_name" autocomplete="off" required /></br>
      <input type="text" name="job" placeholder="Job Title"   id="listlab_name" autocomplete="off" required /></br>
      <input type="submit" name="Submit" Value="Next"   id="listlab_submit" autocomplete="off" required /></br>
    </form>
  </div>




  </body>
</html>






