<?php
$link=new mysqli('localhost','root','','laundry');

$id=$_GET['id'];

$delete=mysqli_query($link,"DELETE from employee where eid='$id'");
header("Location: employee.php");

?>