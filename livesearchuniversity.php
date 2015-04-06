<?php
     
include('config.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$qu=$_POST["keyword"];

if(strlen($qu) == 0)
{
    echo "";
    exit();
}   

$sql = "SELECT name FROM university WHERE name like '%$qu%';";
$result = $conn->query($sql);


$count=1;
$top=490;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo '<a onClick="changetext'. $count.'()" ><div style="top:'.$top.'px;" class="suggestionlist" id="option'. $count . '"><p style="margin-top:12px;">' . $row['name'] . '</p></div></a>';
         $count=$count+1;
         $top=$top+50;
    }
} else {
    echo "




    <div id='light'>
            <p>No Results Found! Add a New One!</p>
            <form name='f1' action='' method='post'>

                    <input type='text' name='name' required placeholder='Name'/><br>
                    <input type='text' name='description' placeholder='Description'/><br>
                    <input type='text' name='admin' placeholder='Admin'/><br>
                    <input type='text' name='type' placeholder='Type'/><br>
                    <input type='text' name='city' placeholder='City'/><br>
                    <input type='text' name='state' placeholder='State'/><br>
                    <input type='text' name='country' placeholder='Country'/><br>
                    <input type='submit' name='submit' value='ADD'/>

            </form>


    </div>
    <div id='fade' onClick='lightbox_close();'></div> 




    ";
}
$conn->close();
?>

<script type="text/javascript">
            window.document.onkeydown = function (e)
        {
            if (!e){
                e = event;
            }
            if (e.keyCode == 27){
                lightbox_close();
            }
        }

        function lightbox_open(){
            window.scrollTo(0,0);
            document.getElementById('light').style.display='block';
            document.getElementById('fade').style.display='block';  
        }

        function lightbox_close(){
            document.getElementById('light').style.display='none';
            document.getElementById('fade').style.display='none';
        }



    </script>

<style>
   .suggestionlist{
    width:750px;
    height:50px;
    background-color: white;
    float: left;
    color:#0eb493;
    font-family: 'Open Sans';
    font-size: 18px;
    text-align: left;
    padding-left: 32px;
    position: absolute;
    z-index: 2;
}
.suggestionlist:hover{
    background-color: #0eb493;
    color:white;
}
#fade{
    
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: #000;
    z-index:1001;
    -moz-opacity: 0.7;
    opacity:.70;
    filter: alpha(opacity=70);
}
#light{
    position: absolute;
    top: 50%;
    left: 50%;
    width: 300px;
    height: 200px;
    margin-left: -150px;
    margin-top: -100px;                 
    padding: 10px;
    
    background: #fff;
    z-index:1002;
    overflow:visible;
}


    </style>