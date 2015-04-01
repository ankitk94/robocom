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
$top=65;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo '<a onClick="changetext'. $count.'()" ><div style="top:'.$top.'px;" class="suggestionlist" id="option'. $count . '">' . $row['name'] . '</div></a>';
         $count=$count+1;
         $top=$top+50;
    }
} else {
    echo "No results found";
}
$conn->close();
?>

<style>
   .suggestionlist{
    width:750px;
    height:50px;
    background-color: white;
    float: left;
    color:#0eb493;
    font-family: 'Open Sans';
    font-size: 18px;
    padding-top: 12px;
    text-align: left;
    padding-left: 32px;
    position: absolute;
    z-index: 2;
}
.suggestionlist:hover{
    background-color: #0eb493;
    color:white;
}
    </style>