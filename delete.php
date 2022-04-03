<?php
$link=new mysqli('localhost','root','','laundry');

$id=$_GET['id'];

$delete=mysqli_query($link,"DELETE from customer where cid='$id'");
header("Location: customer.php");

?>