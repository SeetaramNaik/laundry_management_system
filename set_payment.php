<?php
$link=new mysqli('localhost','root','','laundry');
$id=$_GET['id'];
$check=mysqli_query($link,"SELECT P_status from user_view where cid='$id'");
$arr=mysqli_fetch_array($check);
$status=$arr['P_status'];
if($status=="Paid"){
$update_status=mysqli_query($link,"UPDATE user_view set P_status ='Not Paid' where cid = '$id' ");
}
else{
    $update_status=mysqli_query($link,"UPDATE user_view set P_status ='Paid' where cid = '$id' ");
}
?>
<script>
window.location.href='bill.php';
</script>  
<?php

?>