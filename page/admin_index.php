<head>
    <title>HALAMAN HOMEPAGE</title>
</head>
<?php
include 'includes/db.php';
require_once './berhasil_login.php';
?>

<div class="container">
    <div class="jumbotron text-center">
        <h4>HALAMAN ADMIN</h4>
        <?php echo "<h2>Login Sebagai: " . $_SESSION['username'] ."!". "</h2>"; ?>
    </div>
    <br>
    
    <a href="insert.php" role="button" class="btn btn-primary pull-right">INSERT DATA</a>
    <a href="admin/userdata.php" role="button" class="btn btn-primary pull-leaft">USER DATA</a>
    <a href="homepage.php" role="button" class="btn btn-primary pull-leaft">Homepage</a>
    <a href="transaksi.php" role="button" class="btn btn-primary pull-leaft">transaksi</a>
    <a href="profile.php" role="button" class="btn btn-primary pull-leaft">Profile</a>
    <br>
    
    <br>
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Model Produk</th>
            <th>Stok</th>
            <th>Size</th>
            <th>Image</th>
            <th></th>
        </tr>
<?php  		            
$no=1;	
$query = "SELECT * FROM produk ORDER BY id ASC ";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
        $id    = $row['id'];
        $name  = $row['name'];
        $harga = $row['harga'];
        $model = $row['model'];
        $stok = $row['stok'];
        $ukuran = $row['ukuran'];
        $image = $row['image'];

?>
        
        <tr>
            <td><?=$id; ?></td>
            <td><?=$name; ?></td>
            <td>RP.<?=$harga; ?></td>
            <td><?=$model; ?></td>
            <td><?=$stok; ?></td>
            <td><?=$ukuran; ?></td>
            <td>
               <img src= "<?= "images/".$image?>" alt="<?= $name ?>" class="thumbnail" width="100px" height="75px">
            </td>
            <td><a href="update.php?update=<?php echo $id ?>" class="btn btn-success btn-sm" role="button">Update</a>
            <a href="admin_index.php?delete=<?php echo $id ?>" class="btn btn-danger btn-sm" id="delete" role="button">Delete</a></td>
        </tr>
<?php
    }
}  
        
    if(isset($_GET['delete'])){
        
        $id = $_GET['delete'];

        $image = "SELECT * FROM produk WHERE id = $id";
        
        $query1 = mysqli_query($conn,$image);

        while($row = mysqli_fetch_array($query1))
        {
             $img= $row['image'];
        }

            // unlink("./images/".$img);

        $query = "DELETE FROM produk WHERE id = $id";
        
        $result = mysqli_query($conn,$query);
        
        // if($result){

        //     header('location:admin_index.php');
            
        // }
    }    
         
?>

    </table>
</div>

<script>
    $(document).ready(function(){

        $('#delete').click(function(){
            if(!confirm("do you want to delete?"))
            {
                return false;
            }
            else
            {
                return true;
            }
        });


    });
</script>



<?php 



