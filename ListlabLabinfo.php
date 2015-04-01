<!DOCTYPE html>
<html>

  <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>         

  <script type="text/javascript">
  window.onload = function() {
		document.getElementById("listlab_name1").disabled;
    	var core = document.getElementById("listlab_button1");
		var academic = document.getElementById("listlab_button2");
		var commercial = document.getElementById("listlab_button3");
		labType2.onclick = handler;
    }

    function handler() {
    	alert('clicked');
    }
	
	   function livevalue(value){
            $.post(
                    "livesearchuniversity.php",
                    {keyword:value},
                    function(data){
                        $("#content").html(data);
                    });
        };
        
	
	
$(document).ready(function () {
    $("#listlab_button1").on("change", function(){        
        $("#listlab_name1").show();
		$("#listlab_name1").prop("disabled",false);
		$("#listlab_name2").hide();
		$("#listlab_name2").prop("disabled",true);
    });
});

$(document).ready(function () {
    $("#listlab_button2").on("change", function(){        
        $("#listlab_name1").show();
		$("#listlab_name1").prop("disabled",false);
		$("#listlab_name2").hide();
		$("#listlab_name2").prop("disabled",true);
    });
});

$(document).ready(function () {
    $("#listlab_button2").on("change", function(){        
        $("#listlab_name1").hide();
		$("#listlab_name1").prop("disabled",true);
		$("#listlab_name2").show();
		$("#listlab_name2").prop("disabled",false);
    });
});

function chkPanelChanged(obj) {
    if (obj.id == "listlab_button1") {
        alert('HI');
    }
    else if (obj.id == "radCreditPanel")
    {
        $("#divLine").hide("medium");
        $("#divCredit").show("medium");
    }
	else{
		alert('ads');
	}
}
  </script>
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
    <p class="labformtypetext">Please select the type of lab</p>
      <label for="cf"><input type="radio" name="lab_type" Value="core" id="listlab_button1" required>Core Facility</input></label></br>
      <label for="al"><input type="radio" name="lab_type" Value="academic" id="listlab_button2"  required>Academic Lab</input></label></br>
      <label for="ci"><input type="radio" name="lab_type" Value="commercial" id="listlab_button3" required>Commercial/Industry</input></label></br>
          <div class="row">
         <div class="col-md-2"></div>
         
        <div class="col-md-8">
           
            <input type="text" name="uname" placeholder="University/ Company Name"  id="listlab_name1" onkeyup="livevalue(this.value)" hidden="" disabled id="search"/></br>
           
           
             	<div id="content"></div>
		 </div>
         </div>
            
           
           
      <input type="text" name="uname" placeholder="University/ Company Name"  id="listlab_name2"  disabled /></br>
      <input type="hidden" name="fname" value=<?php echo $_POST['fname']; ?> />
      <input type="hidden" name="lname" value=<?php echo $_POST['lname']; ?> />
        <input type="hidden" name="email" value=<?php echo $_POST['email']; ?> />
      <input type="hidden" name="contact" value=<?php echo $_POST['contact']; ?> />
      <input type="hidden" name="job" value=<?php echo $_POST['job']; ?> id="listlab_name" autocomplete="off" required />
      <p class="listlabterms"><input type="checkbox" name="checkbox_terms" value="check" id="listlab_terms" required />I agree to the <a href="termsofservice.php">Terms of Service.</a></p></br>
      <input type="submit" name="Submit" Value="Submit"   id="listlab_submit" autocomplete="off" required /></br>
    </form>
  </div>

  </body>
</html>






