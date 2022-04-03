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

    <title>Search and Filter</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php" style="margin-left:20px;">Admin panel</a>
        <ul class="navbar-nav mb-2 mb-lg-0" style="margin-right: 20px;">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customer.php">Back to customer page</a>
          </li>
        </div>
</nav>
  
    <div class="container">
        <h2 style="text-align:center;margin-bottom:30px;">SEARCH AND FILTER</h2>
        <div class="row">
            <form class="form-horizontal" action="" method="post">
                <h5 style="text-align:center;margin-bottom:30px;">You can search customer's data by entering his/her NAME or SERVICE TYPE</h5>
              <div class="row mb-3">
                <div style="width:15%;">
               
                </div>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Search or Filter through Name or Service"/>
                </div>
              </div>
              <div class="row mb-5">
                <center><input name="submit" type="submit" value="SEARCH" class="form-control btn btn-primary" id="inputPassword3" style="width:30%;"/></center>
              </div>

            </form>
        </div>
    </div>

<?php
$link=new mysqli('localhost','root','','laundry');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $service=$_POST['service']??null;
  
    $query="SELECT * FROM customer WHERE `cname` LIKE '%$name%' or `service` LIKE '%$name%'";
    $data=mysqli_query($link,$query);

    $num=mysqli_num_rows($data);

    if($num>0){
      
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
            while($row=mysqli_fetch_assoc($data)){
                $name=$row['cname'];
                $coupan=$row['coupan'];
                $delicate=$row['delicate'];
                $heavy=$row['heavy'];
                $kids=$row['kids'];
                $other=$row['other'];
                $service=$row['service'];
                $staff=$row['staff'];
                $phone=$row['phone'];
                $address=$row['address'];
                $cid=$row['cid'];

                ?>
                  
                <tr>
                <td>  <?php echo "$name";?></td>
                <td>  <?php echo "$coupan";?></td>
                <td>  <?php echo "$staff";?></td>
                <td>  <?php echo "$delicate";?></td>
                <td>  <?php echo "$heavy";?></td>
                <td>  <?php echo "$kids";?></td>
                <td>  <?php echo "$other";?></td>
                <td>  <?php echo "$service";?></td>
                <td>  <?php echo "$phone";?></td>
                <td>  <?php echo "$address";?></td>

                <td><a href="edit.php?id=<?php echo "$cid"; ?>> <button type="text/javascript" class='btn btn-primary'>Edit</button> </td> 
                <td><a href="delete.php?id=<?php echo "$cid"; ?>> <button type="text/javascript" class='btn btn-danger'>Delete</button></td>

                <?php
            }
        }
        else{
            ?>
               <h1 style="text-align:center;margin-top:50px;color: red;">Record not found...</h1>
               <center><h1 style="font-size:100px;">&#128529</h1></center>
            <?php
        }

}
?>



</body>
</html>