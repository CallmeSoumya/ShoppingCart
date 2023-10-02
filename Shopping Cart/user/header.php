<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
  <?php
  session_start();
  $count=0;
if(isset($_SESSION['cart'])){
  $count=count($_SESSION['cart']);
}
  ?>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand pb-2"><img src="logo.jpg" alt="" width="120vw" height="70vh"></a>

    <div class="d-flex">
   <a href="index.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-house"></i>Home  |</a>
   <a href="viewCart.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i>Cart(<?php echo $count?>) |</a>

   <span class="text-warning text-decoration-none pe-2">
   <i class="fa-solid fa-user"></i>Hello,<?php

   if(isset($_SESSION['user'])){
     echo $_SESSION['user'];
    echo"
   | <a href='form/logout.php' class='text-warning text-decoration-none pe-2'><i class='bi bi-box-arrow-right'></i>Logout  |</a> 
    ";
   }
   else{
    echo"
    | <a href='form/login.php' class='text-warning text-decoration-none pe-2'><i class='bi bi-box-arrow-left'></i>Login  |</a> 
     ";
   }
   
   
   
   
   ?> 
   <a href="../admin/mystore.php" class="text-warning text-decoration-none pe-2"><i class="bi bi-person-bounding-box"></i>Admin</a>
   </span>
   </div>
</nav>
</div>


<div class="bg-danger sticky-top font-monospace">
  <ul class="list-unstyled d-flex justify-content-center">
    <li><a href="laptop.php" class="text-decoration-none text-white fs-4 px-5 fw-bold">LAPTOPS</a></li>
    <li><a href="mobile.php" class="text-decoration-none text-white fs-4 px-5 fw-bold">MOBILES</a></li>
    <li><a href="bag.php" class="text-decoration-none text-white fs-4 px-5 fw-bold">BAGS</a></li>
    <li><a href="dress.php" class="text-decoration-none text-white fs-4 px-5 fw-bold">DRESSES</a></li>
    <li><a href="shoes.php" class="text-decoration-none text-white fs-4 px-5 fw-bold">SHOES</a></li>
  </ul>
</div>
</body>
</html>