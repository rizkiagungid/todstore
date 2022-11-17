<?php

include 'db.php';


if(isset($_POST['insert'])){
    
    $name  = clean($_POST['name']);
    $model_produk = clean($_POST['model_produk']);
    $harga = clean($_POST['harga']);
    
    $query = "INSERT INTO `student` (name,model_produk,harga) VALUES ('".escape($name)."','".escape($model_produk)."','".escape($harga)."') ";
    
    $result = mysqli_query($conn,$query);
    
    if($result){
        
        header('location:../index.php');
    }
    
}


?>