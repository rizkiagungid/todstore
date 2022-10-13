<?php
include 'includes/db.php';
?>

<?php 

if(isset($_GET['update'])){
    
    
    $id = $_GET['update'];
    

$query = "SELECT * FROM produk WHERE id = $id";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
            $name  = $row['name'];
            $model = $row['model'];
            $harga = $row['harga'];
            $stok = $row['stok'];
            $ukuran = $row['ukuran'];
            $image = $row['image'];

        }
    }
}

if(isset($_POST['update'])){
    

    $name         = clean($_POST['name']);
    $model      = clean($_POST['model']);
    $harga        = clean($_POST['harga']);
    $stok        = clean($_POST['stok']);
    $ukuran        = clean($_POST['ukuran']);
    $image_name   = $_FILES['image']['name'];
    $image        = $_FILES['image']['tmp_name'];

    $location     = "images/".$image_name;

    move_uploaded_file($image, $location);

    $query  = "UPDATE produk SET ";
    $query .= "name = '".escape($name)."', ";
    $query .= "model = '".escape($model)."', ";
    $query .= "harga = '".escape($harga)."', ";
    $query .= "stok = '".escape($stok)."', ";
    $query .= "ukuran = '".escape($ukuran)."', ";
    $query .= "image = '{$image_name}' ";
    $query .= "WHERE id = {$id} ";
    
    $result = mysqli_query($conn,$query);
    
    if($result){
        
        header('location:index.php');
    }
    else
    {
        die('error' . mysqli_error($conn));
    }
    
}

?>
<div class="container">
    <div class="jumbotron text-center">
        <h2>Crud Application Using PHP</h2>
    </div>
    <br>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $name ?>">
    </div>
    <div class="form-group">
        <label for="name">model_produk:</label>
        <input type="text" name="model" class="form-control" placeholder="Enter batch" value="<?php echo $model ?>">
    </div>
    <div class="form-group">
        <label for="name">harga:</label>
        <input type="text" name="harga" class="form-control" placeholder="Enter harga" value="<?php echo $harga ?>">
    </div>
    <div class="form-group">
        <label for="name">stok:</label>
        <input type="text" name="stok" class="form-control" placeholder="Enter harga" value="<?php echo $stok ?>">
    </div>
    <div class="form-group">
        <label for="name">ukuran:</label>
        <input type="text" name="ukuran" class="form-control" placeholder="Enter harga" value="<?php echo $ukuran ?>">
    </div>
    <div class="form-group">
        <label for="name">Image:</label>
        <img src= "<?= "images/".$image?>" alt="" width="100px" height="100px" class="thumbnail">
        <input type="file" name="image" class="form-control" placeholder="Enter harga" value="<?php echo $harga ?>">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Update data" name="update">
    </div>
</form>

</div>
