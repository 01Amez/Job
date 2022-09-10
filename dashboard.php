<?php
include_once('inc/header.php');
if ($_SESSION['email'] == "") {
   header('location:index.php');
}

include_once('inc/header.php');
?>

<table style="margin-top: 20px; margin-bottom: 20px;">
   <thead>
      <tr>
         <th>
            <h1 style="font-weight: bold">Welcome, <?php echo $_SESSION['email']; ?></h1>
         </th>
         <th>
            <div style="margin-left: 600px">
               <p><a style="font-size: 20px; font-weight: bold; width: 100px; height: 45px" class="btn btn-danger" href="logout-user.php">Logout</a></p>
            </div>
         </th>
      </tr>
   </thead>
   <tbody>
   </tbody>
</table>

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
   <div align=center>
      <img src="https://www.ladbible.com/cdn-cgi/image/width=720,quality=70,format=webp,fit=pad,dpr=1/https%3A%2F%2Fs3-images.ladbible.com%2Fs3%2Fcontent%2F7c4e92d758d796e33c518e39559463d3.png" alt="">
   </div>
   <br>
   <br>
   <div class="container" style="background-color:  #5B7DB1;">
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