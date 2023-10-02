<?php
$con = mysqli_connect('localhost','root','','ecommerce');

$A_name = $_POST['username'];
$A_password = $_POST['userpassword'];
$result = mysqli_query($con, "SELECT * FROM `admin` where username = '$A_name' AND userpassword = '$A_password'");
session_start();
if(mysqli_num_rows($result)){
$A_name = $_POST['username'];
    $_SESSION['admin'] = $A_name;
    echo"
    <script>
    alert('Login Successfully');
    window.location.href='../mystore.php';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('Invalid username/password');
    window.location.href='login.php';
    </script>
    ";  
}

?>