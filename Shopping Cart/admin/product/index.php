<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<style>
  body{
    background-color: #aec6cf;
  }
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
<form action="insert.php" method="post" enctype="multipart/form-data">
<div class="mb-3">
  <p class="text-center fw-bold fs-3">Product Details</p>

<div class="mb-3">
  <label class="form-label">Product Name</label>
  <input type="text" class="form-control" name="Pname" placeholder="Enter Product Name" required>
</div>

<div class="mb-3">
  <label class="form-label">Product Price</label>
  <input type="text" class="form-control"  name="Pprice" placeholder="Enter Product Price" required>
</div>
<div class="mb-3">
  <label class="form-label">Add Product image</label>
  <input type="file" class="form-control" name="Pimage" required>
</div>
<div class="mb-3">
  <label class="form-label">Select Page Category</label>
  <select class="form-select" aria-label="Default select example" name="Pages" required>
  <option value="Home">Home</option>
  <option value="Laptop">Laptop</option>
  <option value="Bag">Bag</option>
  <option value="Mobile">Mobile</option>
  <option value="Shoes">Shoes</option>
  <option value="Dress">Dress</option>
</select>
</div>
<button class="bg-success fs-4 fw-bold my-3 form-control text-white" name="submit">Upload</button>
</form>
            </div>
        </div>
    </div>

    <!-- fetch data -->

    <div class="container">
      <div class="row">
        <div class="col-md-10 m-auto">

<table class="table border border-warning table-hover  my-5">

<thead class="fs-5 font-monospace text-center bg-dark text-white text-center">
    <th>Id</th>
    <th>Name</th>
    <th>Price</th>
    <th>Image</th>
    <th>Category</th>
    <th>Delete</th>
    <th>Update</th>
</thead>
<tbody class="text-center" >
<?php
include 'config.php';
$Record = mysqli_query($con,"SELECT * FROM `tbiproduct`");
    while($row = mysqli_fetch_array($Record))
    echo"
    <tr>
  <td>$row[Id]</td>
  <td>$row[Pname]</td>
  <td>$row[Pprice]</td>
  <td><img src='$row[Pimage]' height='200vw' width = '200vh'></td>
  <td>$row[Pcategory]</td>
  <td><a href='delete.php?ID=$row[Id]' class='btn btn-danger'>Delete</a></td>
  <td><a href='update.php?ID=$row[Id]' class='btn btn-warning'>Update</a></td>
</tr>



    ";





?>




</tbody>




</table>
</div>
</div>
</div>

</body>
</html>