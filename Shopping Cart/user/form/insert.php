<?php

if(isset($_POST['submit'])){
    $con =mysqli_connect('localhost','root','','ecommerce');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $Dup_Email=mysqli_query($con,"SELECT * FROM `tbluser` WHERE Email ='$email'");
    $Dup_Username=mysqli_query($con,"SELECT * FROM `tbluser` WHERE Username ='$name'");

    if(mysqli_num_rows($Dup_Email)){
        echo"
        <script>alert('This is Email is already taken')
        window.location.href='register.php';
        </script>
        ";
    }
    else if(mysqli_num_rows($Dup_Username)){
        echo"
        <script>alert('This is Username is already taken')
        window.location.href='register.php';
        </script>
        ";
    }
    else{
    mysqli_query($con,"INSERT INTO `tbluser`( `Username`, `Email`, `Number`, `Password`) VALUES ('$name','$email','$number','$password')");
        echo"
        <script>
        alert('Register Successfully');
        window.location.href='register.php';
        </script>

        ";
    }
}



?>