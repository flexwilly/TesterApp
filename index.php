
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap Link-->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Login Form</title>
</head>
<body>
        <section id ="login-form" class="mb-4 mt-4 ">
                <div class="contaainer">
                        <div class="row">
                                <div class="col-md-4 m-auto border border-danger">
                                        <form action="login_submit.php" method="post">
                                        <h1 class="log-in-header text-center text-dark p-2">Proceed to Login</h1>
                                                      <!--Email-->
                                                <div class="mb-3">
                                                <label for="email">Email</label>
                                                <input class="form-control" type="email" name = "email" placeholder="Email" required>
                                                </div>
                                                       <!--Password--->
                                                <div class="mb-3">
                                                <label for="email">Password</label>
                                                <input class="form-control" type="password" name = "password" placeholder="Password" required>
                                                </div>
                                                       <!--Submit Button--->
                                                <div class="mb-3">
                                                  <button class="form-control bg-danger text-white" type="submit" name="login"  >Login</button>      
                                                </div>
                                        </form>
                                </div>
                        </div>
                        <div class="row text-center mt-4">
                                <div class="col-md-6 m-auto">
                                <a href="sign_up.php" class="btn btn-secondary text-center">Sign Up</a>
                                </div>
                        </div>
                </div>
        </section>
        <!--Bootstrap link-->
        <script src = "bootstrap/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
</body>
</html>