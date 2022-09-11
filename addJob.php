<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css">
      
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://releases.jquery.com/git/jquery-3.x-git.min.js"></script>
     <!-- JavaScript Bundle with Popper -->

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
      <title>add Job</title>
   </head>
   <body>
      <form action="addJob.php" method="post">
         <div class="container pt-5">
            <div class="form-group">
               <label for="exampleFormControlInput1">Job name</label>
               <input type="text" name='name' class="form-control" id="exampleFormControlInput1" placeholder="developer ">
            </div>
            <div class="form-group">
               <label for="exampleFormControlInput1">Email address</label>
               <input type="email" name='email' class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
               <label for="exampleFormControlTextarea1">information job</label>
               <textarea class="form-control" name="information" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
           <div class="form-group">
        
           <div class="form-group">
               <label for="exampleFormControlInput1">Job reqirement</label>
               <input type="text" name='requirement' class="form-control" id="exampleFormControlInput1" placeholder="developer ">
            </div>
   


           </div>
            <?php include 'conn/config.php';

             if(isset($_POST['submit'])){
              $name=$_POST['name'];
              $email=$_POST['email'];
              $information=$_POST['information'];
              $requirement=$_POST['requirement'];
              
              insertJob($name,$email,$information,$requirement);

             }   
            ?>
            <div class="d-flex justify-content-start ">
            <input class ='button btn btn-lg btn-primary mr-3' type="submit" name="submit" value="submit"  />
            
               <a href="dashboard.php"  class="button btn btn-lg btn-danger">cancel</a>
            </div>
      </form>
      </div>
   </body>
</html>