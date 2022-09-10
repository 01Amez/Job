
<?php
$host = "localhost";
$user = "root";
$db_password = "";
$db_name = "job";
$db= mysqli_connect($host,$user,$db_password,$db_name);


// $namedb='epiz_32537521_job';
// $host='sql212.epizy.com';
// $userdb='epiz_32537521';
// $password='AbGTlKwJP3PcC';
// $db = new mysqli($host,$userdb, $password, $namedb);

//ini_set('display_errors', 0);

function insertPeople($name, $email, $detail, $cv,$img) {
    global $db;
    
    $sql = "INSERT INTO people (name,email,detail,cv,img)
    VALUES ('$name', '$email', '$detail','$cv',$img')";

    if (mysqli_query($db, $sql)) {

        header("Location:dashboard.php");
    }
}
function insertJob($name, $email, $information, $requirement) {
    global $db;
    
    $sql = "INSERT INTO job (name,email,information,requirement)
    VALUES ('$name', '$email', '$information','$requirement')";

    if (mysqli_query($db, $sql)) {

        header("Location:dashboard.php");
  
}
}
?>