<head>
    <title>HALAMAN HOMEPAGE</title>
</head>
<?php
include 'includes/db.php';
require_once 'berhasil_login.php';
?>

<div class="container">
    <div class="jumbotron text-center">
        <h2>ABOUT US TODSTORE</h2>
        <?php echo "<h1>Selamat Datang, " . $_SESSION['username'] ."!". "</h1>"; ?>
    </div>
    <br>
    
    <a href="admin_index.php" role="button" class="btn btn-primary pull-right">KE HALAMAN ADMIN</a>
    <br>
    
    <br>
<h1></h1>
<?php  		            
		
$query = "SELECT * FROM tentangtodstore ORDER BY id DESC ";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
       
        $deskripsi  = $row['deskripsi'];
?>
        
        <tr>
           
            <td><?=$deskripsi; ?></td>
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

            unlink("images/".$img);

        $query = "DELETE FROM produk WHERE id = $id";
        
        $result = mysqli_query($conn,$query);
        
        if($result){

            header('location:index.php');
            
        }
    }    
         
?>

    </table>
</div>


