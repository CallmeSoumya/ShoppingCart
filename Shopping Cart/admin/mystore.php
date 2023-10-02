<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin home-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
      body{
        background-color: #f4a460;
      }
    </style>
</head>
<?php
session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");

}
?>
<body>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>Mystore</h1></a>

    <span>
    <i class="fa-solid fa-user-tie"></i>
    Hello,<?php echo $_SESSION['admin']?>
    <i class="fa-solid fa-right-from-bracket"></i>
    <a href="form/logout.php" class="text-decoration-none text-white">Logout</a>
    <a href="../user/index.php" class="text-decoration-none text-white">Userpanel</a>
    </span>
  </div>
</nav>
<div>
    <h2 class="text-center text-white">Dashboard</h2>
</div>
<div class="col-md-6 bg-danger text-center m-auto">
    <a href="product/index.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Add Post</a>
    <a href="user.php" class="text-white text-decoration-none fs-4 fw-bold px-5">Users</a>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script> -->
</body>
</html>