<?php
include_once('resources/init.php');

if(!isset($_GET['id'])){
    header("Location:index.php");
    die();
}
delete(posts,$_GET['id']);

header("Location:manage_post.php");
die();