<?php 
session_start(); 
if (!isset($_SESSION['usernam'])) {
    header("location:index.php") ;    
 }


if(isset($_GET['delete_product'])){

include "../includes/db.php"; 

$delete_id = $_GET['delete_product'];

$delete_pro = "delete from culture where id='$delete_id'";

$run_delete = mysqli_query($con,$delete_pro);

if($run_delete){

echo "<script>alert('One article Has been deleted')</script>";

echo "<script>window.open('index.php?view_products','_self')</script>";

}

}

?>