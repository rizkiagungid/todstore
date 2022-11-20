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
if($result){
        
    header('location:detailproduk.php');
}
?>
<div class="container">
    <div class="jumbotron text-center">
        <h2>Crud Application Using PHP</h2>
    </div>
    <br>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $name ?>">
    </div>