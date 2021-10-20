<?php

include('connection.php');

if(isset($_POST['sign_up'])){
        $email = trim($_POST['email']);
        $fname = trim($_POST['firstname']);
        $lname = trim($_POST['lastname']);
        $phone = trim($_POST['phone']);
        $course = trim($_POST['course']);
        $country = trim($_POST['country']);
        $pass = trim($_POST['password']);

        // echo $email."<br/>";
        // echo $fname."<br/>";
        // echo $lname."<br/>";
        // echo $phone."<br/>";
        // echo $course."<br/>";
        // echo $country."<br/>";

        $query = "INSERT INTO user (email,firstname,lastname,phone,course,country,pass) VALUES ('$email','$fname','$lname','$phone','$course','$country','$pass')";

        $result = mysqli_query($conn,$query);

        if(!$result){
                echo "<script>
                alert('Query failed');
                window.location.href = 'sign_up.php';
                </script>";
        }else{
                echo "<script>
                alert('Query Successful');
                window.location.href = 'index.php';
                </script>";
        }
}


?>