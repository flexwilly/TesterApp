<?php
session_start();
include("connection.php");
if(empty($_SESSION)){
        header("Location: index.php");
}

$id = $_GET['id'];

$query = "DELETE FROM user WHERE id = ".$id;

$result = mysqli_query($conn,$query);

if(mysqli_affected_rows($conn)>0){
        echo "<script> alert('Delete Successful');
        window.location.href = 'welcome.php';
        </script>";

}else{
        echo "<script> alert('Delete Failed');
        window.location.href = 'welcome.php';
        </script>";
}

?>