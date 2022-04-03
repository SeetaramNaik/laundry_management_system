<?php
$link=new mysqli('localhost','root','','laundry');

$values=mysqli_query($link,"SELECT * from employee where eid='$_GET[id]'");
while($row=mysqli_fetch_array($values)){
    $name=$row['name'];
    $phone=$row['phone'];
    $address=$row['address'];
    $salary=$row['salary'];
    $gender=$row['gender'];
    $age=$row['age'];
    $eid=$row['eid'];
}



?>


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

    <title>Edit employee details</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="dashboard.php">Admin panel</a>
        
            <ul class="navbar-nav  mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customer.php">Customer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="employee.php">Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bill.php">Bill</a>
              </li>
            </ul>
          <!-- </div> -->
        </div>
      </nav>
<div class="container" style="margin:20px;">
        <form method="post" action="">
          <h2 style="text-align: center;margin:20px;">Edit Employee Details</h2>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input name="name" type="text" class="form-control" id="inputEmail3" value="<?php echo $name; ?>" />
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone No.</label>
            <div class="col-sm-10">
              <input name="phone" type="text" class="form-control" maxlength="10" value="<?php echo $phone; ?>"/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
              <input  name="address" type="text" class="form-control" id="inputEmail3" value="<?php echo $address; ?>"/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Salary</label>
            <div class="col-sm-10">
              <input name="salary" type="text" class="form-control" id="inputEmail3" value="<?php echo $salary; ?>"/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
            <select name="gender" class="form-select" aria-label="Default select example" value="<?php echo $gender; ?>">
                <option>Male</option>
                <option>Female</option>
              </select>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-10">
              <input name="age" type="number" class="form-control" id="inputEmail3" value="<?php echo $age; ?>"/>
            </div>
          </div>
          <div class="row">
              <input name="update" type="submit" value="UPDATE" class="form-control btn btn-primary" id="inputPassword3" />
            </div>
        </form>
      </div>



  <?php
  if(isset($_POST['update'])){
  $update=mysqli_query($link,"UPDATE `employee` SET `name`='$_POST[name]',
  `phone`='$_POST[phone]',`address`='$_POST[address]',`salary`='$_POST[salary]',`gender`='$_POST[gender]',
  `age`='$_POST[age]' WHERE eid='$_GET[id]'");

  ?>
<script>

window.location.href='employee.php';

</script>

<?php
  }
?>


</body>
</html>