<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>register</title>
</head>

<body>
   <form action="addCV.php" method="post" enctype="multipart/form-data">
      <div class="container pt-5">
         <div class="form-group">
            <label for="exampleFormControlInput1">Full Name</label>
            <input type="text" name='name' class="form-control" id="exampleFormControlInput1" placeholder="ahmad hadi ali">
         </div>
         <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" name='email' class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
         </div>
         <div class="form-group">
            <label for="exampleFormControlTextarea1">information about yourself</label>
            <textarea class="form-control" name="detail" id="exampleFormControlTextarea1" rows="3"></textarea>
         </div>
         <div class="my-5">
            <div class="form-group cv-upload d-inline-block">
               <label for="exampleFormControlFile1">uplod your cv</label>
               <input type="file" name="cv" class="form-control-file" id="exampleFormControlFile1" accept=".pdf">
            </div>
            <div class="form-group img-upload d-inline-block">
               <label for="exampleFormControlFile1">uplod your image</label>
               <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1" accept="image/*">

            </div>
         </div>
         <?php include 'conn/config.php';

         if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $detail = $_POST['detail'];
            //   $cv=$_POST['cv'];
            //   $image=$_POST['img'];      

            if ($_FILES["img"]["error"] === 4 ||$_FILES["cv"]["error"] === 4 ) {

               echo 'nadaxa';
            } else {

               $imgName = $_FILES['img']['name'];
               $imgTmp = $_FILES["img"]["tmp_name"];
               $imgSize = $_FILES['img']['size'];
               $imgAllowE = ['jpg', 'png', 'jepg'];
               $imgE = explode('.', $imgName);
               $imgE = strtolower(end($imgE));

               $fileName = $_FILES['cv']['name'];
               $fileTmp = $_FILES["cv"]["tmp_name"];
               $fileSize = $_FILES['cv']['size'];
               $fileAllowE = ['jpg', 'png', 'jepg','pdf'];
               $fileE = explode('.', $fileName);
               $fileE = strtolower(end($fileE));

               if (!(in_array($imgE, $imgAllowE))||!(in_array($fileE, $fileAllowE))) {

                  echo 'bbwra jory file kat xalata ';
               } else {
                  if ($imgSize > 1000000||$fileSize > 1000000) {
                     echo 'siz ekay gawraya';
                  } else {
                     $newImgName = uniqid();
                     $newImgName .= '.' . $imgE;
                     move_uploaded_file($imgTmp, 'people/' . $newImgName);
                     // insertPeople($name,$email,$detail,null,$newImgName);
                     $newFileName = uniqid();
                     $newFileName .= '.' . $fileE;
                     move_uploaded_file($fileTmp, 'cv/' . $newFileName);
                     
                     $sql = "INSERT INTO people (name,email,detail,cv,img)
VALUES ('$name', '$email', '$detail','$newFileName','$newImgName')";

                     if (mysqli_query($db, $sql)) {

                        header("Location:dashboard.php");
                     }
                  }
               }
            }
         }
         ?>
         <div class="d-flex justify-content-start ">
            <input class='button btn btn-lg btn-primary mr-3' type="submit" name="submit" value="submit" />

            <a href="dashboard.php" class="button btn btn-lg btn-danger">cancel</a>
         </div>
   </form>
   </div>
</body>

</html>