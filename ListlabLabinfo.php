
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
    <link rel="stylesheet" href="listlabLabinfo.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  </head>

  <body>

  <div class="topbar">
      <a href="" onClick="history.go(-1); return false;"><img src="img/close_button.png" ></a>
      <p>Join our Network of Labs</p>
  </div>
  
  <div class="listlabinfo">
    <h5>Additional Info</h5>
    <p class="formtop">Please fill in the Lab details below.</p>
    <form action="listlabSubmit.php" method="post">
      <input type="text" name="uname" placeholder="University/ Company Name"   id="listlab_name" autocomplete="off" required /></br>
      <p class="labformtypetext">Please select the type of lab</p>
      <label for="cf"><input type="radio" name="lab_type" Value="core" id="listlab_button" autocomplete="off" checked required>Core Facility</input></label></br>
      <label for="al"><input type="radio" name="lab_type" Value="academic" id="listlab_button" autocomplete="off" required>Academic Lab</input></label></br>
      <label for="ci"><input type="radio" name="lab_type" Value="commercial" id="listlab_button" autocomplete="off" required>Commercial/Industry</input></label></br>
      <input type="hidden" name="fname" value=<?php echo $_POST['fname']; ?> />
      <input type="hidden" name="lname" value=<?php echo $_POST['lname']; ?> />
        <input type="hidden" name="email" value=<?php echo $_POST['email']; ?> />
        <input type="hidden" name="password" value=<?php echo $_POST['password']; ?> />
      <input type="hidden" name="contact" value=<?php echo $_POST['contact']; ?> />
      <input type="hidden" name="job" value=<?php echo $_POST['job']; ?> id="listlab_name" autocomplete="off" required />
      <p class="listlabterms"><input type="checkbox" name="checkbox_terms" value="check" id="listlab_terms" required />I agree to the <a href="termsofservice.php">Terms of Service.</a></p></br>
      <input type="submit" name="Submit" Value="Submit"   id="listlab_submit" autocomplete="off" required /></br>
    </form>
  </div>

  </body>
</html>






