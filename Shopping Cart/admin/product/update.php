
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
<?php
$id;
$Record;
$data;
if(isset($_GET['ID'])){
// echo $id;
$id=$_GET['ID'];
include 'config.php';
$Record  = mysqli_query($con,"SELECT * FROM `tbiproduct` WHERE  Id = $id");
$data = mysqli_fetch_array($Record);


}




?> 

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
<form action="update.php" method="post" enctype="multipart/form-data">
<div class="mb-3">
  <p class="text-center fw-bold fs-3 text-warning">Product Update</p>

<div class="mb-3">
  <label class="form-label">Product Name</label>
  <input type="text" value="<?php echo $data['Pname']?>" class="form-control" name="Pname" placeholder="Enter Product Name">
</div>

<div class="mb-3">
  <label class="form-label">Product Price</label>
  <input type="text" value="<?php echo $data['Pprice']?>" class="form-control"  name="Pprice" placeholder="Enter Product Price">
</div>
<div class="mb-3">
  <label class="form-label">Add Product image</label>
  <input type="file" class="form-control" name="Pimage" >
<img src="<?php echo $data['Pimage']?>" alt="" height="100px" width="">
</div>
<div class="mb-3">
  <label class="form-label">Select Page Category</label>
  <select class="form-select" aria-label="Default select example" name="Pages" required>
  <option value="Home">Home</option>
  <option value="Laptop">Laptop</option>
  <option value="Bag">Bag</option>
  <option value="Mobile">Mobile</option>
</select>
</div>
<input type="text" name="id"  value="<?php echo $data['Id']?>">
<button class="bg-success fs-4 fw-bold my-3 form-control text-white" name="update">Update</button>
</form>
            </div>
        </div>
    </div>



    <!-- update code -->


    <?php
        if(isset($_POST['update'])){
            $id=$_POST['id'];
            $product_name = $_POST['Pname'];
$product_price = $_POST['Pprice'];
$product_image = $_FILES['Pimage'];
$image_loc=$_FILES['Pimage']['tmp_name'];
$image_name=$_FILES['Pimage']['name'];
$img_des="Uploadimage/.$image_name";
move_uploaded_file($image_loc, $img_des);
$product_category = $_POST['Pages'];

            include 'Config.php';
            mysqli_query($con,"UPDATE `tbiproduct` SET `Pname`='$product_name',`Pprice`='$product_price',
            `Pimage`='$img_des',`Pcategory`='$product_category' WHERE Id=$id");
            header("location:index.php");
            //print_r()
        }
    ?> 
    </body>
</html>