<?php
include '../includes/db.php';
?>

<div class="container">
    <div class="jumbotron text-center">
    <h2>Admin Panel</h2>    
    <h2>USER DATA TOD STORE</h2>
    </div>
    <br>
    
    <a href=".." role="button" class="btn btn-primary pull-leaft">Home</a>
    <a href="../admin/control-about-us.php" role="button" class="btn btn-primary pull-leaft">SET ABOUT US</a>
    <br>
    
    <br>
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>level</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Action</th>
        </tr>
<?php  		            
		
$query = "SELECT * FROM users ORDER BY id DESC ";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
                    
        $id    = $row['id'];
        $username  = $row['username'];
        $email = $row['email'];
        $level = $row['level'];
        $telepon = $row['telepon'];
        $alamat = $row['alamat'];
?>

        <tr>
            <td><?=$id; ?></td>
            <td><?=$username; ?></td>
            <td><?=$email; ?></td>
            <td><?=$level; ?></td>
            <td><?=$telepon; ?></td>
            <td><?=$alamat; ?></td>
            <td>
               <img src= "../images/tzuyu.jpg" class="thumbnail" width="100px" height="75px">
            </td>
            <td><a href="../admin/update.php?update=<?php echo $id ?>" class="btn btn-success btn-sm" role="button">Update</a>
            <a href="../admin/userdata?delete=<?php echo $id ?>" class="btn btn-danger btn-sm" id="delete" role="button">Delete</a></td>
        </tr>
<?php
    }
}  
        
    if(isset($_GET['delete'])){
        
        $id = $_GET['delete'];

        $image = "SELECT * FROM users WHERE id = $id";
        
        $query1 = mysqli_query($conn,$image);

        while($row = mysqli_fetch_array($query1))
        {
             $img= $row['image'];
        }

            unlink("images/".$img);

        $query = "DELETE FROM users WHERE id = $id";
        
        $result = mysqli_query($conn,$query);
        
        if($result){

            header('location:index.php');
            
        }
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



