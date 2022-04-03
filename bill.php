<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    /> -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <title>Bill</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">Admin panel</a>
  
        <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
              <a class="nav-link" href="billSearchFilter.php">Search and Filter</a>
            </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customer.php">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="employee.php">Employee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Bill</a>
          </li>
        </ul>
  
      </div>
    </nav>
<div class="container-fluid" style="margin-top: 30px;">
        <div class="alert alert-success ml-4"  style="text-align: center;">
            <label>Bills of all customers are listed below:</label>
        </div>

      </div>
<?php
$link=new mysqli('localhost','root','','laundry');
$bill=mysqli_query($link,"SELECT c.cid,c.cname,c.coupan,b.heavy,b.delicate,b.kids,b.other,b.total from bill b,customer c  where c.cid=b.cid");
echo "<table class='table table-dark'>
<tr>
<th scope='col'>Name</th>
<th scope='col'>Heavy cloth price</th>
<th scope='col'>Delicate cloth price</th>
<th scope='col'>Kids cloth price</th>
<th scope='col'>Other cloth price</th>
<th scope='col'>Total price</th>
<th scope='col'>Laundry Status</th>
<th scope='col'>Paid Status</th>
</tr>";
$user_view=mysqli_query($link,"SELECT * from user_view");
while($row=mysqli_fetch_array($bill)){
    $name=$row['cname'];
  $h=$row['heavy'];
  $k=$row['kids'];
  $d=$row['delicate'];
  $o=$row['other'];
  $total=$row['total'];
  echo "<tr>";
    echo "<td>"; echo $name;echo "</td>";
    echo "<td>"; echo $h;echo "</td>";
    echo "<td>"; echo $d;echo "</td>";
    echo "<td>"; echo $k;echo "</td>";
    echo "<td>"; echo $o;echo "</td>";
    echo "<td>"; echo $total;echo "</td>";
    $row=mysqli_fetch_array($user_view);
      $L_status=$row['L_status'];
      $P_status=$row['P_status'];
    
    echo "<td>"; ?><a href="set_status.php?id=<?php echo $row["cid"]; ?>">  <button type="text/javascript" class='btn btn-primary'><?php echo $L_status;  ?></button></a><?php echo "</td>" ;
    echo "<td>"; ?> <a href="set_payment.php?id=<?php echo $row["cid"]; ?>"> <button type="text/javascript" class='btn btn-danger'><?php echo $P_status;  ?></button></a><?php echo "</td>" ;
    echo "</tr>";
  
  
}




?>
</body>
</html>