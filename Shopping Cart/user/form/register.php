<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
                <p class="text-warning fs-3 fw-bold my-3 text-center">User Register</p>
                <form action="insert.php" method="POST">
                    <div class="mb-3">
                        <label for="">UserName:</label>
                        <input type="text" name="name" id="" placeholder="Enter User Name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">UserEmail:</label>
                        <input type="email" name="email" id="" placeholder="Enter User Email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">UserNumber:</label>
                        <input type="number" name="number" id="" placeholder="Enter User Number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">UserPassword:</label>
                        <input type="password" name="password" id="" placeholder="Enter User Password" class="form-control">
                    </div>
                    <div>
                    <button name="submit" class="w-100 bg-warning fs-4 text-white mb-2">REGISTER</button>
                    </div>
                    <div>
                    <button class="w-100 bg-danger fs-4 text-white mb-2"><a href="login.php" class="text-white text-decoration-none">ALREADY ACCOUNT?</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>