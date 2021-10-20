<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap Link-->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Sign Up Form</title>
</head>
<body>
        <section id ="login-form" class="mb-4 mt-4 ">
                <div class="container">
                        <div class="row">
                                <div class="col-md-5 m-auto border border-danger">
                                        <form id = "custom-form" action="sign_up_submit.php" method="post">
                                        <h1 class="sign-up-header text-center text-dark p-2">Proceed to SignUp</h1>
                                                      <!--Email-->
                                                <div class="mb-3">
                                                <label for="email">Email</label>
                                                <input id="email"class="form-control" type="text" name = "email" placeholder="Email" required>
                                                </div>
                                                       <!--FirstName-->
                                                       <div class="mb-3">
                                                <label for="firstname">FirstName</label>
                                                <input id="fname" class="form-control" type="text" name = "firstname" placeholder="FirstName" required>
                                                </div>
                                                       <!--LastName-->
                                                       <div class="mb-3">
                                                <label for="lastname">LastName</label>
                                                <input id="lname" class="form-control" type="text" name = "lastname" placeholder="LastName" required>
                                                </div>
                                                        <!--Phone-->
                                                 <div class="mb-3">
                                                <label for="phone">Phone</label>
                                                <input id="phone" class="form-control" type="text" name = "phone" placeholder="PhoneNumber" required>
                                                </div>
                                                         <!--Course-->
                                                         <div class="mb-3">
                                                <label for="course">Course</label>
                                                <input id="course" class="form-control" type="text" name = "course" placeholder="Course" required>
                                                </div>
                                                         <!--Country-->
                                                        <div class="mb-3"> 
                                                        <label for="Country">Country</label>
                                                        <select id="country" name="country" size="2" class="form-select" aria-label="Default select example">
                                                        <option selected>Select A Country</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        </select>
                                                </div>
                                                
                                                       <!--Password--->
                                                <div class="mb-3">
                                                <label for="email">Password</label>
                                                <input id ="pwd" class="form-control" type="password" name = "password" placeholder="Password" required>
                                                </div>
                                                       <!--Submit Button--->
                                                <div class="mb-3">
                                                  <button id="submit-btn" class="form-control bg-danger text-white" type="submit" name="sign_up"  >Sign Up</button>      
                                                </div>
                                        </form>
                                </div>
                        </div>
                        <div class="row text-center mt-4">
                                <div class="col-md-6 m-auto">
                                        <a class="btn btn-primary text-white" href="index.php">Login</a>
                                </div>
                        </div>
                </div>
        </section>
        <!--Bootstrap link-->
        <script src = "bootstrap/js/bootstrap.min.js"></script>
        
        <script src="myJs/script.js"></script>
       
</body>
</html>