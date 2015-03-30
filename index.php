<?php
include_once('config.php');
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
    <link rel="stylesheet" href="main.css">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <script src="Scripts/jquery-1.9.1.min.js"></script>

    <!-- Particle -->
    <script src="particlejs/particles.js"></script>
    

 </head>

  <body>
      <div class="sback">
      <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li ><a href="index.php"><img src="img/logo1.png" height="20px"></a></li>
        </ul>


        <ul  class="pull-right">                  
          <li class="listlab"><a href="ListlabGetstarted.php">List Your Services</a></li>
          <li><a href="#">Log In</a></li>
        </ul>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1>Find Research, Testing And Prototyping Services</h1>

        <div class="supportline">
        <img src="img/headerli.png">
        <p> We are in Privte Beta. Stay informed when we go live. </p> <!--Supporting Think in India and Make in India Initiatives-->
        <img src="img/headerli.png">
        </div>

        <div class="comingsoon">
         <p><a href="#join" class="scroll">Get Notified</a></p>
        </div>
        </div>
        </div>

      </div>
    </div> 
   </div>




<div id="particles-js">
</div>



 <div class="features">
	  <div class="container">
      <h2>What We Do</h2>	
          <img src="img/headerline.png" class="headerlineimg">

      	<div class="row">
	      <div class="col-md-4">
			<ul>
             <li>
                <img src="img/featureimg1.png" class="featureimg">         
            </li>
            <li>
             <h3>Search</h3>
			 <p>Enjoy a simplifed search experiance for R&D services and equipments. Search from research to prototyping services offered by the world's best labs.</p>
            </li>
           </ul>
	      </div>

	      <div class="col-md-4">
			<ul>
             <li>
                <img src="img/featureimg1.png" class="featureimg">         
            </li>
            <li>
             <h3>Build Lab Presence</h3>
			 <p>Showcase your lab's expertise to industries and researchers around the world by listing services and equipments on researchbros.</p>
            </li>
           </ul>
	      </div>
		  
          <div class="col-md-4">
			<ul>
             <li>
                <img src="img/featureimg1.png" class="featureimg">         
            </li>
            <li>
             <h3>Lab Management</h3>
			 <p>Use our lab management tools to manage your lab bookings and inventory.</p>
            </li>
           </ul>
	      </div>
	    </div>
	  </div>
	</div>



  <div class="stat">
	  <div class="container">
	</div>
  </div>

  <div class="partner1">
	  <div class="container">

      	<div class="row">
          
          <div class="col-md-4">10+ LABS</div>
	      
          <div class="col-md-4">60+ SERVICES</div>

          <div class="col-md-4">20+ EQUIPMENTS</div>
	  </div>
	</div>
   </div>


<div class="joinus">
	  <div class="container">
      <h2 id="join">STAY UPDATED</h2>	
          <img src="img/headerline.png" class="joinusimg">
      <p>Enter your details below and we will notify you when we launch</p> <!-- soon we will have our first beta release. If you don’t want to miss our release you can sign up for the project newsletter. -->
      


      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
         <form method="POST" action="addSubscription.php" class="joinbox">
          <input type="text" name="name" placeholder="Name"   id="join_name" autocomplete="off" required />
          <input type="email" name="emailID" placeholder="Email"  id="join_email" autocomplete="off" required />
          <br>
          <input type="text" name="organisation" placeholder="Organisation"   id="join_org" autocomplete="off" required />
          <button type="submit" value="submit" id="join_button">
           <img src="img/mail1.png" class="join_img" />
          </button>
         </form>
        </div>
        <div class="col-md-2"></div>
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
  
   <!--<div class="madebottom">
       <p>Made in India</p>
   </div> -->


    <script src="particlejs/app.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 500);
            });
        });
    </script>
    
    <!--<script type="text/javascript">
        NProgress.start();
        NProgress.set(0.4);
        NProgress.inc();
        NProgress.done();
    </script>-->


  </body>
</html>