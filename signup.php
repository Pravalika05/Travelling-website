<?php

if(isset($_POST['submit'])){
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $mob=$_POST['phone'];
    $gender=$_POST['gender'];
    $pwd=$_POST['password'];

    include('connection.php');

    $qry="insert into signup values ('$name','$email','$mob','$gender','$pwd')";
    if(!mysqli_query($conn,$qry)){
        echo "Query error";
    }
    else{
        echo"Inserted Successfully";
    }
}

?>