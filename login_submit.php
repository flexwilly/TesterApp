<?php
session_start();

include('connection.php');

if(isset($_POST['login'])){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $query = "SELECT * FROM user WHERE email = '$email' AND pass='$password' ";
        // echo $query;
        $result = mysqli_query($conn,$query);
       if(mysqli_num_rows($result)>0){
               $_SESSION['email'] = $email;
               echo "<script> alert('Login Successful');
               window.location.href = 'welcome.php';
               </script>";
       }else{
        // $_SESSION['message'] = 'Wrong username/Password';
               echo "<script> alert('Wrong username/ password');
               window.location.href = 'welcome.php';
               </script>";
              
       }
}
?>