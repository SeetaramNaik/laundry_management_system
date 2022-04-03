<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    /> -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">  

    <title>Customer</title>
  </head>
  <body>
  
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="dashboard.php" style="margin-left:20px;">Admin panel</a>
       
            <ul class="navbar-nav  mb-2 mb-lg-0" style="margin-right:25px;">
            <li class="nav-item">
              <a class="nav-link" href="custSearchFilter.php">Search and Filter</a>
            </li>
             <li class="nav-item">
               <a class="nav-link" href="index.php">Home</a>
             </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Customer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="employee.php">Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bill.php">Bill</a>
              </li>
            </ul>
          <!-- </div> -->
        </div>
      </nav>


    <div class="container">
      <form method='post' action="" >

        <h2 style="text-align: center;margin:20px;">Customer Details</h2>

        <div class="row mb-3">
          <div style="width:15%;">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
          </div>
          <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputEmail3" required/>
          </div>
        </div>

        <div class="row mb-3">
          <div style="width:15%;">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Coupan ID</label>
            <!-- <small>Note: The Coupan ID should be number only</small>  -->
          </div>         
          <div class="col-sm-10">
            <input type="number" name="coupan" class="form-control" id="inputPassword3" required/>
          </div>
        </div>
        
        <div class="row mb-3">
          <div style="width:15%;">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Staffs</label>
          </div>
        <div class="col-sm-10">
          <select class="form-select" name="staff" aria-label="Default select example" required>
            <option value="" disabled selected>Select available staff</option>
          <?php
$link=new mysqli('localhost','root','','laundry');
$staff=mysqli_query($link,"SELECT * from employee");
while($row=mysqli_fetch_array($staff)){
  echo '<option>'.$row['name'] .'</option>';
}
    ?>
          </select>
        </div>  
        </div>


        <div class="row mb-3">
          <div style="width:15%;">
             <label for="inputPassword3" class="col-sm-2 col-form-label">Delicate clothes</label>
          </div>
          <div class="col-sm-10">
            <input type="number" name="delicate" class="form-control" id="inputPassword3" required/>
          </div>
        </div>


        <div class="row mb-3">
          <div style="width:15%;">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Heavy clothes</label>     
          </div>
          <div class="col-sm-10">
            <input type="number" name="heavy" class="form-control" id="inputPassword3" required/>
          </div>
        </div>


        <div class="row mb-3">
          <div style="width:15%;">
             <label for="inputPassword3" class="col-sm-2 col-form-label">Kids clothes</label>
          </div>
          <div class="col-sm-10">
            <input type="number" name="kids" class="form-control" id="inputPassword3" required/>
          </div>
        </div>


        <div class="row mb-3">
          <div style="width:15%;">
             <label for="inputPassword3" class="col-sm-2 col-form-label">Other clothes</label>
          </div>
          <div class="col-sm-10">
            <input type="number" name="other" class="form-control" id="inputPassword3" required/>
          </div>
        </div>


        <div class="row mb-3">
          <div style="width:15%;">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Services</label>
          </div>
          <div class="col-sm-10">
            <select class="form-select" name="service" aria-label="Default select example" aria-placeholder="select service" required>
              <option value="" disabled selected>Select service</option>
              <option>Dry wash</option>
              <option>Lacromat</option>
              <option>Wash & Ironing</option>
              <option>Only Ironing</option>
            </select>
          </div> 
        </div>


        <div class="row mb-3">
          <div style="width:15%;">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Phone No.</label>
          </div>
          <div class="col-sm-10">
            <input name="phone" type="text" class="form-control" pattern="\d*" maxlength="10" required/>
          </div>
        </div>


          <div class="row mb-3">
            <div style="width:15%;">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
            </div>
            <div class="col-sm-10">
              <input name="address" type="text" class="form-control" id="inputPassword3" required/>
            </div>
          </div>

          <div class="row mb-5">
            <input name="submit" type="submit" value="SUBMIT" class="form-control btn btn-primary" id="inputPassword3" />
          </div>

        </div>
      </form>
    </div>



<?php

$prices=mysqli_query($link,"SELECT * from price");
while($row=mysqli_fetch_array($prices)){
  $h=$row['heavy'];
  $k=$row['kids'];
  $d=$row['delicate'];
  $o=$row['other'];
}

echo "";

echo "<table class='table table-dark'>
<tr>
<th scope='col'>Name</th>
<th scope='col'>Coupan ID</th>
<th scope='col'>Staff</th>
<th scope='col'>Heavy</th>
<th scope='col'>Delicate</th>
<th scope='col'>Kids</th>
<th scope='col'>Other</th>
<th scope='col'>Service</th>
<th scope='col'>Phone</th>
<th scope='col'>Address</th>
<th scope='col'></th> 
<th scope='col'></th> 
</tr>";
?><h4 style="text-align:center;margin-bottom:20px;">Currently stored all customer's data listed below:</h4> <?php
$customers=mysqli_query($link,"SELECT * from customer");
while($row=mysqli_fetch_array($customers)){
  echo "<tr>";
  echo "<td>"; echo $row['cname'];echo "</td>";
  echo "<td>"; echo $row['coupan'];echo "</td>";
  echo "<td>"; echo $row['staff'];echo "</td>";
  echo "<td>"; echo $row['delicate'];echo "</td>";
  echo "<td>"; echo $row['heavy'];echo "</td>";
  echo "<td>"; echo $row['kids'];echo "</td>";
  echo "<td>"; echo $row['other'];echo "</td>";
  echo "<td>"; echo $row['service'];echo "</td>";
  echo "<td>"; echo $row['phone'];echo "</td>";
  echo "<td>"; echo $row['address'];echo "</td>";
  
  echo "<td>"; ?><a href="edit.php?id=<?php echo $row["cid"]; ?>"> <button type="text/javascript" class='btn btn-primary'>Edit</button><?php echo "</td>" ;
  echo "<td>"; ?><a href="delete.php?id=<?php echo $row["cid"]; ?>"> <button type="text/javascript" class='btn btn-danger'>Delete</button><?php echo "</td>" ;

  echo "</tr>";
}

//Inserting customer data to database

$date=date("Y/m/d");

if(isset($_POST['submit'])){
  $staff_id=mysqli_query($link,"SELECT eid from employee where `name`='$_POST[staff]'");
while($row=mysqli_fetch_array($staff_id)){
  $eid=$row['eid'];
}
$check=mysqli_query($link,"SELECT coupan from customer where coupan='$_POST[coupan]'");
$num=mysqli_num_rows($check);
if($num>0){
  echo "<script>alert('Coupan already present!');</script>";
 
}
else{

$customer=mysqli_query($link,"INSERT INTO `customer`(`cid`, `coupan`,`eid`,`cname`, `delicate`, 
`heavy`, `kids`, `other`, `service`,`phone`, `address`, `date`,`staff`) 
VALUES (NULL,'$_POST[coupan]','$eid','$_POST[name]','$_POST[delicate]','$_POST[heavy]',
'$_POST[kids]','$_POST[other]','$_POST[service]','$_POST[phone]','$_POST[address]','$date','$_POST[staff]')");

$query=mysqli_query($link,"SELECT cid from customer where coupan='$_POST[coupan]' ");
while($fetch_cid=mysqli_fetch_array($query)){
  $cid=$fetch_cid['cid'];
}

$hvy=$h * $_POST['heavy'];
$del=$d * $_POST['delicate'];
$kid=$k * $_POST['kids'];
$oth=$o * $_POST['other'];

$total= $hvy + $del +$kid + $oth;

$bill=mysqli_query($link,"INSERT INTO `bill`(`bill_id`,`cid`, `heavy`, `delicate`, `kids`, `other`, `total`) 
VALUES ( NULL,'".$cid."','".$hvy."', '".$del."','".$kid."','".$oth."','".$total."' ) ");



$query=mysqli_query($link,"SELECT `pid` FROM `price`");
while($fetch_pid=mysqli_fetch_array($query)){
  $pid=$fetch_pid['pid'];
}

$cust_view=mysqli_query($link,"INSERT INTO `user_view`(`cid`, `pid`, `coupan`,`name`, `heavy`, `delicate`, `kids`, `other`, `t_amount`) 
VALUES ('".$cid."','".$pid."','$_POST[coupan]','$_POST[name]','$_POST[heavy]','$_POST[delicate]','$_POST[kids]','$_POST[other]','".$total."')");

?>
<script>
window.location.href='customer.php';
</script>  


<?php
}
}

?>




<style>
option[value=""][disabled] {
  display: none;
}
</style>


  </body>
</html>
