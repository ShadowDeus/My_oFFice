<?php
include "cafe_db.php"; 
$id = $_GET['id'];
$delete = "delete from cafe where id='$id'";
$result = mysqli_query($conn,$delete);

if($result){
    echo "<script>alert('product Delete Successfully')</script>";
    echo "<script>window.location.href= 'cart.php';</script>";
}