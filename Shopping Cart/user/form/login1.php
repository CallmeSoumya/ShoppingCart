<?php
$name=$_POST['name'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','','ecommerce');
$result=mysqli_query($con,"Select * from `tbluser` WHERE (Username='$name' OR Email='$name') AND Password='$password'");
session_start();
if(mysqli_num_rows($result)){
    $_SESSION['user']=$name; 
    $_SESSION['cart']=array(); //session create
    echo"
        <script>
        alert('Successfully Login');
        window.location.href='../index.php';
        </script>
    
    
    ";
}
else{
    echo"
    <script>
    alert('Login Failed,Check your Username or Password');
    window.location.href='login.php';
    </script>
    ";
}
?>