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

    <title>Bill search filter page</title>
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
            <a class="nav-link" href="bill.php">Back to bill page</a>
          </li>
        </div>
</nav>
<div class="container">
        <h2 style="text-align:center;margin-bottom:30px;">SEARCH AND FILTER</h2>
        <div class="row">
            <form class="form-horizontal" action="" method="post">
                <h5 style="text-align:center;margin-bottom:30px;">You can search customer's bill information by entering his/her NAME</h5>
              <div class="row mb-3">
                <div style="width:15%;">
                    <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label> -->
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
    $query="SELECT c.cid,c.cname,c.coupan,b.heavy,b.delicate,b.kids,b.other,b.total,u.L_status,u.P_status from bill b,customer c,user_view u where c.cid=b.cid and c.cid=u.cid and c.cname like '%$name%'";
    $bill=mysqli_query($link,$query);
    $num=mysqli_num_rows($bill);
    if($num>0){
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
    while($row=mysqli_fetch_array($bill)){
    $cid=$row['cid'];
    $name=$row['cname'];
    $heavy=$row['heavy'];
    $delicate=$row['delicate'];
    $kids=$row['kids'];
    $other=$row['other'];
    $total=$row['total'];
    $L_status=$row['L_status'];
    $P_status=$row['P_status'];
    ?>                  
    <tr>
    <td>  <?php echo "$name";?></td>
    <td>  <?php echo "$heavy";?></td>
    <td>  <?php echo "$delicate";?></td>
    <td>  <?php echo "$kids";?></td>
    <td>  <?php echo "$other";?></td>
    <td>  <?php echo "$total";?></td>                    
    <td><a href="set_status.php?id=<?php echo "$cid"; ?>> <button type="text/javascript" class='btn btn-primary'><?php echo $L_status; ?></button> </td> 
    <td><a href="set_payment.php?id=<?php echo "$cid"; ?>> <button type="text/javascript" class='btn btn-danger'><?php echo $P_status; ?></button> </td>   
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