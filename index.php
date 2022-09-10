<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="image/findj.png" class="img-fluid" alt="Phone image">
                </div>

                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form action='index.php' method='POST'>
                        <!-- Email input -->



                        <?php
                        if (count($errors) > 0) {
                        ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach ($errors as $showerror) {
                                    echo $showerror;
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>



                        <div class="form-outline mb-4">
                            <label class="form-label" for="form1Example13">Email address</label>


                            <input style="height: 50px" type="email" name="email" id="form1Example13" class="form-control" value="<?php if (isset($_COOKIE["email"])) {
                                                                                                                                        echo $_COOKIE["email"];
                                                                                                                                    } ?>" required>


                        </div>


                        <!-- Password input -->
                        <div class="form-outline mb-4">

                            <label class="form-label" for="form1Example23">Password</label>

                            <div>
                                <input style="height: 50px" type="password" name="password" id="form1Example23" class="form-control" value="<?php if (isset($_COOKIE["password"])) {
                                                                                                                                                echo $_COOKIE["password"];
                                                                                                                                            } ?>" required>

                            </div>

                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">


                                <label for="login-remember"><input type="checkbox" id="remember" name="remember" <?php if (isset($_COOKIE["email"])) { ?> checked <?php } ?>> Remember Me</label>
                                <label for="show-password"><input type="checkbox" id="show" name="show" onclick="myFunction()"> show password</label>
                            </div>


                            <a href="forgot-password.php">Forgot password?</a>
                        </div>

                        <!-- Submit button -->
                        <input class='btn btn-lg btn-primary btn-block' type="submit" name="login" value="login" />

                        <div class="divider d-flex align-items-center my-4">
                            <a class='button btn btn-primary btn-lg btn-block' href="signup-user.php">sign up</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        function myFunction() {
            var x = document.getElementById("form1Example23");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>


</body>

</html>