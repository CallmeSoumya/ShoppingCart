<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body class="bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-6 shadow m-auto border border-primary mt-3 bg-white p-3 font-monospace">
<form action="login1.php" method="post" enctype="multipart/form-data">
<div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">Login</p>

<div class="mb-3">
  <label class="form-label">Name</label>
  <input type="text" class="form-control" name="username" placeholder="Enter username" required>
</div>

<div class="mb-3">
  <label class="form-label">Password</label>
  <input type="password" class="form-control"  name="userpassword" placeholder="Enter Password" required>
</div>
<button class="bg-success fs-4 fw-bold my-3 form-control text-white">Login</button>
</form>
            </div>
        </div>
    </div>
</body>
</html>