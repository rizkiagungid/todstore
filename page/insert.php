<?php
include 'includes/db.php';

if(isset($_POST['insert']))
{
    $name         = clean($_POST['name']);
    $model = clean($_POST['model']);
    $harga        = clean($_POST['harga']);
    $stok        = clean($_POST['stok']);
    $ukuran        = clean($_POST['ukuran']);
    $image_name   = $_FILES['image']['name'];
    $image        = $_FILES['image']['tmp_name'];

    $location     = "images/".$image_name;


    move_uploaded_file($image, $location);


    $query = "INSERT INTO produk (name,model,harga,stok,ukuran,image) VALUES ('".escape($name)."', '".escape($model)."','".escape($harga)."' ,'".escape($stok)."' ,'".escape($ukuran)."' , '$image_name')";

    $result = mysqli_query($conn,$query);

    if($result == true)
    {
        header("Location:homepage.php");
    }
    else
    {
        die('error' . mysqli_error($conn));
    }

}


?>
<div class="container">

    <div class="jumbotron text-center">
        <h2>Menambahkan Produk</h2>
    </div>
    <br>
<div class="row">
<div class="col-md-12">
    
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Nama Produk">
    </div>
    <div class="form-group">
        <label for="name">model:</label>
        <input type="text" name="model" class="form-control" placeholder="Enter Model">
    </div>
    <div class="form-group">
        <label for="name">stok:</label>
        <input type="text" name="stok" class="form-control" placeholder="Enter Stok">
    </div>
    <div class="form-group">
        <label for="name">ukuran:</label>
        <input type="text" name="ukuran" class="form-control" placeholder="Enter Ukuran">
    </div>
    <div class="form-group">
        <label for="name">harga:</label>
        <input type="text" name="harga" class="form-control" placeholder="Enter harga">
    </div>
    <div class="form-group">
        <label for="name">Image:</label>
        <input type="file" class="btn btn-primary" name="image" class="form-control" placeholder="Enter harga">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Insert data" name="insert">
    </div>
</form>
</div>
</div>

</div>
