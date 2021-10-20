<?php
session_start();
include("connection.php");
if(empty($_SESSION)){
        header("Location: index.php");
}

$id = $_GET['id'];

$query1 = "SELECT * FROM user WHERE id = ".$id;
$result1 = mysqli_query($conn,$query1);



if(isset($_POST['update'])){
        $fname = mysqli_real_escape_string($conn,$_POST['firstname']);
        $lname = mysqli_real_escape_string($conn,$_POST['lastname']);
        $phone = mysqli_real_escape_string($conn,$_POST['phone']);
        $course = mysqli_real_escape_string($conn,$_POST['course']);
        $country = mysqli_real_escape_string($conn,$_POST['country']);
        $pass = mysqli_real_escape_string($conn,$_POST['password']);

        $query2 = "UPDATE user set firstname = '$fname' , lastname = '$lname' , phone = '$phone' , course = '$course' , country = '$country' , pass = '$pass' WHERE id = ". $id;


        $result2 = mysqli_query($conn,$query2);
        if($result2){
                echo "<script>
                alert('Record Updated Successfully');
                window.location.href = 'welcome.php';
                </script>";

        }else{
                echo "<script>
                alert('Update Failed');
                </script>";   
        }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap Link-->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Update User</title>
</head>
<body>
        <section id ="update-form" class="mb-4 mt-4 ">
                <div class="container">
                        <div class="row">
                                <div class="col-md-5 m-auto border border-danger">
                                        <form id = "custom-form" action="update_user.php?id=<?php echo urlencode($id);?>" method="post">
                                        <h1 class="text-center text-dark p-2">Proceed to Update User </h1>
                                               <?php
                                               if(mysqli_num_rows($result1)>0){
                                                       while($row = mysqli_fetch_assoc($result1)){
                                                             
                                                ?>
                                                       <!--FirstName-->
                                                       <div class="mb-3">
                                                <label for="firstname">FirstName</label>
                                                <input id="fname" class="form-control" type="text" name = "firstname" value="<?php echo $row['firstname'];?>"placeholder="FirstName" required>
                                                </div>
                                                       <!--LastName-->
                                                       <div class="mb-3">
                                                <label for="lastname">LastName</label>
                                                <input id="lname" class="form-control" type="text" name = "lastname" value="<?php echo $row['lastname'];?>" placeholder="LastName" required>
                                                </div>
                                                        <!--LastName-->
                                                        <div class="mb-3">
                                                <label for="email">Email</label>
                                                <input id="email" class="form-control" type="text" name = "lastname" value="<?php echo $row['email'];?>" placeholder="Email" required>
                                                </div>


                                                        <!--Phone-->
                                                 <div class="mb-3">
                                                <label for="phone">Phone</label>
                                                <input id="phone" class="form-control" type="text" name = "phone" value="<?php echo $row['phone'];?>"placeholder="PhoneNumber" required>
                                                </div>
                                                         <!--Course-->
                                                         <div class="mb-3">
                                                <label for="course">Course</label>
                                                <input id="course" class="form-control" type="text" name = "course" value="<?php echo $row['course'];?>"placeholder="Course" required>
                                                </div>
                                                         <!--Country-->
                                                        <div class="mb-3"> 
                                                         <label id="country" for="country">Country</label>       
                                                        <select name="country"  class="form-select" value="<?php echo $row['country'];?>">
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="Uganda">Uganda</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        </select>
                                                </div>
                                               
                                                       <!--Password--->
                                                <div class="mb-3">
                                                <label for="password">Password</label>
                                               <input id="pwd" type="password" name="password" class="form-control" value="<?php echo $row['pass'];?>">
                                                </div>

                                                <?php         
                                                       }
                                               }
                                               
                                               ?>
                                                       <!--Submit Button--->
                                                <div class="mb-3">
                                                  <button class="form-control bg-danger text-white" type="submit" name="update"  >Update</button>      
                                                </div>
                                        </form>
                                </div>
                        </div>
                </div>
        </section>
        <!--Bootstrap link-->
        <script src = "bootstrap/js/bootstrap.min.js"></script>
        <script src="myJs/script.js"></script>
</html>