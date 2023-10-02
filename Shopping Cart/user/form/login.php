<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
                <p class="text-warning fs-3 fw-bold my-3 text-center">User Login</p>
                <form action="login1.php" method="POST">
                    <div class="mb-3">
                        <label for="">UserName:</label>
                        <input type="text" name="name" id="" placeholder="Enter UserName or UserEmail" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">UserPassword:</label>
                        <input type="password" name="password" id="" placeholder="Enter User Password" class="form-control">
                    </div>
                    <div>
                    <button name="submit" class="w-100 bg-warning fs-4 text-white mb-2">Login</button>
                    </div>
                    <div>
                    <button class="w-100 bg-danger fs-4 text-white mb-2"><a href="register.php" class="text-white text-decoration-none">REGISTER</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>