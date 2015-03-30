
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
    <link rel="stylesheet" href="contactus.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  </head>

  <body>

  <div class="topbar">
      <a href="" onClick="history.go(-1); return false;"><img src="img/close_button.png" ></a>
      <p>Get in Touch</p>
  </div>
  
  <div class="row">
   <div class="col-md-6">
    <div class="listlabinfo">
     <h5>For general inquiries and support, please fill out the form below.</h5>
     <form action="listlabLabinfo.php" method="post">
      <input type="text" name="name" placeholder="Name"   id="contact_name" autocomplete="off" required /></br>
      <input type="email" name="name" placeholder="Email Id"   id="contact_name" autocomplete="off" required /></br>
      <input type="text" name="name" placeholder="Subject"   id="contact_name" autocomplete="off" required /></br>
      <textarea cols="40" rows="4" placeholder="Message" id="contact_textarea" required></textarea>
      <input type="submit" name="Submit" Value="Submit"   id="contact_submit" autocomplete="off" required /></br>
     </form>
     </div>
   </div>
   <div class="col-md-6">

    <div class="contactinfo"> 
        <h5>EMAIL</h5><p> support@researchbros.com</p></br>
        <h5>PHONE</h5><p>+91 - 869.972.9383</p>
    </div>
   </div>  
   </div>
  </div>

   <div class="bottom">
    <div class="nav  bottomnav">
      <div class="container" >
        <ul class="pull-left">
          <li class="bottomcopyright">&copy ResearchBros.Com</li>
        </ul>
        <ul  class="pull-right">                  
          <li><a href="termsofservice.php">Terms of Service</a></li>
          <li><a href="privacypolicy.php">Privacy Policy</a></li>
          <li><a href="ListlabGetStarted.php">List Your Services</a></li>
          <li><a href="team.php">About Us</a></li>
           <li><a href="contactus.php">Contact</a></li>
        </ul>
      </div>
    </div>
   </div>

  </body>
</html>






