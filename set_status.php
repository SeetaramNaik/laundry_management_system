<?php
$link=new mysqli('localhost','root','','laundry');
$id=$_GET['id'];
$check=mysqli_query($link,"SELECT L_status from user_view where cid='$id'");
$arr=mysqli_fetch_array($check);
$status=$arr['L_status'];
if($status=="Done"){
    $update_status1=mysqli_query($link,"UPDATE user_view set L_status ='Not done' where cid = '$id' ");
}
else{
$update_status=mysqli_query($link,"UPDATE user_view set L_status ='Done' where cid = '$id' ");
}
?>
<script>
window.location.href='bill.php';
</script>  
<?php

?>