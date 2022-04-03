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

    <title>Employee</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="dashboard.php">Admin panel</a>
        
            <ul class="navbar-nav  mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="empSearchFilter.php">Search and Filter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="customer.php">Customer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bill.php">Bill</a>
              </li>
            </ul>
          <!-- </div> -->
        </div>
      </nav>
    <center>
      <div class="container" style="margin:20px ;">
        <form method="post" action="">
          <h2 style="text-align: center;margin:20px;">Employee Details</h2>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input name="name" type="text" class="form-control" id="inputEmail3" required/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Phone No.</label>
            <div class="col-sm-10">
              <input name="phone" type="text" class="form-control" maxlength="10" required/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
              <input  name="address" type="text" class="form-control" id="inputEmail3" required/>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Salary</label>
            <div class="col-sm-10">
              <input name="salary" type="text" class="form-control" pattern="\d*" id="inputEmail3" required/>
            </div>
          </div>
          <div class="row mb-3">
            <div style="width: 15%;">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
            </div>
            <div class="col-sm-10">
            <select name="gender" class="form-select" aria-label="Default select example" required>
                <option selected>Male</option>
                <option>Female</option>
              </select>
            </div>

          </div>
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Age</label>
            <div class="col-sm-10">
              <input name="age" type="number" class="form-control" id="inputEmail3" required/>
            </div>
          </div>
          <div class="row">
              <input name="submit" type="submit" value="SUBMIT" class="form-control btn btn-primary" id="inputPassword3" />
            </div>
        </form>
      </div>
    </center>

      <div class="container-fluid" style="margin-top: 30px;">
        <div class="alert alert-success ml-4"  style="text-align: center;">
            <label>Currently working Employees are listed below </label>
        </div>

      </div>


<?php
$link=new mysqli('localhost','root','','laundry');
if(isset($_POST['submit'])){
$employee=mysqli_query($link,"INSERT INTO `employee`(`eid`, `name`, `phone`, `address`, `salary`, `gender`, `age`) 
                        VALUES (NULL,'$_POST[name]','$_POST[phone]','$_POST[address]','$_POST[salary]','$_POST[gender]','$_POST[age]')");
?>
<script>
window.location.href='employee.php';
</script>
<?php
}
echo "<table class='table table-dark'>
<tr>
<th scope='col'>Name</th>
<th scope='col'>Phone No.</th>
<th scope='col'>Address</th>
<th scope='col'>Salary</th>
<th scope='col'>Gender </th>
<th scope='col'>Age</th>
<th scope='col'></th>
<th scope='col'></th>
</tr>";
$emp=mysqli_query($link,"SELECT * from employee");
while($row=mysqli_fetch_array($emp)){
  echo "<tr>";
  echo "<td>"; echo $row['name'];echo "</td>";
  echo "<td>"; echo $row['phone'];echo "</td>"; 
  echo "<td>"; echo $row['address'];echo "</td>";
  echo "<td>"; echo $row['salary'];echo "</td>";
  echo "<td>"; echo $row['gender'];echo "</td>";
  echo "<td>"; echo $row['age'];echo "</td>";

  echo "<td>"; ?><a href="emp_edit.php?id=<?php echo $row["eid"]; ?>"> <button type="text/javascript" class='btn btn-primary'>Edit</button><?php echo "</td>" ;
  echo "<td>"; ?><a href="emp_delete.php?id=<?php echo $row["eid"]; ?>"> <button type="text/javascript" class='btn btn-danger'>Delete</button><?php echo "</td>" ;
  echo "</tr>";
}


?>


<style>

</style>
</body>
</html>