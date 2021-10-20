<?php
session_start();
include('connection.php');

if(!isset($_SESSION['email'])){
        echo "<script> alert('Please Login to view this page');
        window.location.href = 'index.php';
        </script>";
}
$email  = $_SESSION['email'];


$query1 = "SELECT * FROM user ";

$query = "SELECT * FROM user WHERE email = '$email'";


$result1 = mysqli_query($conn,$query1);

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

//print_r($row);

$firstName = $row['firstname'];
$lastName = $row['lastname'];
$_SESSION['firstName'] = $firstName;
$_SESSION['lastName'] = $lastName;

//echo $email;


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
        <title>Welcome</title>
</head>
<body>
      
<h1 class="welcome-header text-center mt-4"> Welcome: <?php echo $_SESSION['firstName']. ' '.$_SESSION['lastName'];?></h1>
        

        <section class="mb-4 mt-4 ">
                <div class="container">
                        <div class="row">
                                <div id="table-div" class=" col-md-6 m-auto">
                                        <table class="table table-dark table-striped text-center">
                                                <thead>
                                                       <tr>
                                                               <th scope ="col">#</th>
                                                               <th scope="col">FirstName</th>
                                                               <th scope="col">LastName</th>
                                                               <th scope="col">Email</th>
                                                               <th scope="col">Phone</th>
                                                               <th scope="col">Course</th>
                                                               <th scope="col">Country</th>
                                                               <th scope="col" colspan="2">Links</th>
                                                       </tr> 
                                                </thead>
                                                <tbody>
                                                        <?php
                                                        if(mysqli_num_rows($result1)>0){
                                                                while($myrow = mysqli_fetch_assoc($result1)){
                                                       
                                                        
                                                        ?>
                                                        <tr>
                                                                <td><?php echo $myrow['id'];?></td>
                                                                <td><?php echo $myrow['firstname']?></td>
                                                                <td><?php echo $myrow['lastname']?></td>
                                                                <td>
                                                                <?php echo $myrow['email']?>  
                                                                </td>
                                                                <td>
                                                                <?php echo $myrow['phone']?>
                                                                </td>
                                                                <td>
                                                                <?php echo $myrow['course']?>
                                                                </td>
                                                                <td>
                                                                <?php echo $myrow['country']?>
                                                                </td>
                                                                <td>
                                                                    <a class="btn btn-primary text-white"href="update_user.php?id=<?php echo urlencode($myrow['id']);?>">Update</a>    
                                                                </td>
                                                                <td>
                                                                    <a class="btn btn-danger text-white"href="delete_user.php?id=<?php echo urlencode($myrow['id']);?>" onclick = "return confirm('Are you sure');">Delete</a>    
                                                                </td>

                                                        </tr>
                                                         <?php
                                                                          
                                                                        }
                                                                }
                                                         
                                                         ?>
                                                </tbody>
                                        </table>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6 m-auto text-center">
                                <a class="btn btn-warning text-white" href="logout.php">Logout</a>
                                </div>
                        </div>
                </div>
        </section>


</body>
</html>