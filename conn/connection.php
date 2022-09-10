<?php 
$host = "localhost";
$user = "root";
$db_password = "";
$db_name = "job";
$conn= mysqli_connect($host,$user,$db_password,$db_name);

// $namedb='epiz_32537521_job';
// $host='sql212.epizy.com';
// $userdb='epiz_32537521';
// $password='AbGTlKwJP3PcC';


// $conn = new mysqli($host,$userdb, $password, $namedb);
if($conn){
    //echo "Connected";

}
else{
    echo"not connected";
}



?>