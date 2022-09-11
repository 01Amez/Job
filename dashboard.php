<?php
include_once('inc/header.php');
if ($_SESSION['email'] == "") {
   header('location:index.php');
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div class="m-5 mx-5  d-flex">
<h1 class="mr-auto" style="font-weight: bold">Welcome, <?php echo $_SESSION['email']; ?></h1>
<a class="button btn btn-danger btn-lg ml-auto  "   href="logout-user.php">Logout</a>
</div>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
   <title>home</title>
</head>

<body style="background-color: dark;">

   
   <div class="container " style="background-color:  #5B7DB1;" >
      <section id="post">
         <br>
         <div align=center>
            <h1>do you want uplod your self</h1>
            <a href="addCV.php" class="button btn btn-lg btn-warning">Upload your CV</a>
            <a href="addJob.php" class="button btn btn-lg btn-warning">Upload your Job</a>
         </div>
         <form action="dashboard.php" method="post">

            <input type="radio" name="a1" value="job" /> Job</br>
            <input type="radio" name="a1" value="CV" /> CV</br>
            <input type="submit" name="a" value="submit" class='button' /></br>
         </form>
      </section>
      <section id="people">
         <?php include 'show.php';
         if (isset($_POST['a'])) {
            if (!empty($_POST['a1'])) {
               $selected = $_POST['a1'];
               if ($selected == 'CV') {
                  $back = showCV();
               } else {
                  $back = showJob();
               }
            } else {
               //if no option was selected, set home as default
               showCV();
            }
         } else {
            //    if($back=='job'){
            //       showJob();
            //    }else{
            //    showCV(); 

            // }
         }
         ?>


      </section>
   </div>
</body>

</html>