<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <?php
    include 'header.php';
    ?>
</head>
<body>
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
    <h1 class="text-warning font-monospace text-center my-3">LAPTOPS</h1>
    <?php
    include '../admin/product/config.php';
    $Record = mysqli_query($con,"SELECT * FROM `tbiproduct`");
while($row = mysqli_fetch_array($Record)) {
    $check_page = $row['Pcategory'];
    if($check_page === 'Laptop') {


        echo"
<div  class='col-md-6 col-lg-4 m-auto mb-3'>
<form action='insertcart.php' method = 'POST'>
        <div class='card m-auto' style='width: 18rem;'>
        <img src='../admin/product/$row[Pimage]' class='card-img-top' alt='...'>
        <div class='card-body text-center'>
        <h5 class='card-title text-danger fs-4 fw-bold'>$row[Pname]</h5>
        <p class='card-text text-danger fs-4 fw-bold'>RS :";?> <?php echo  number_format($row['Pprice']);?><?php echo"</p>
        <input type='hidden' name='Pname' value = '$row[Pname]'>
        <input type ='hidden' name='Pprice' value='$row[Pprice]'>
        <input type='number' name='Pquantity' value='min='1' max='20' placeholder='Quantity'><br><br>
        <input type='submit' name='addCart' class='btn btn-warning text-white w-100' value='Add to Cart'>
    </div>
    </div>
    </form>
</div>
";
    }
}
?>

</div>
<?php
include 'footer.php';
?>
</body>
</html>