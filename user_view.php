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

    <title>User view</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="user_view.php" style="font-size: 22px;">Welcome to the Customer Panel</a>
          
            <ul class="navbar-nav  mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link" href="index.php">
               <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/><i class="bi bi-box-arrow-left"></i></svg>
               Logout
                </a>
             </li>
             
            </ul>
        
        </div>
      </nav>



    <h1 style="text-align:center;margin-top:150px;">You can view your Laundry status here</h1>
    <div class="container">
    <br/>
 
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" action="" method="post">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" name="coupan" type="search" placeholder="Enter Coupan ID for your Laundry status">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit" name="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>

<?php

// $link=new mysqli('localhost','root','','laundry');
// if(isset($_POST['submit'])){
//     $user_view=mysqli_query($link,"call get_user_view('$_POST[coupan]')");   //Stored procedure 
//       echo "<table class='table table-dark'>
//     <tr>
//     <th scope='col'>Name</th>
//     <th scope='col'>Heavy cloth price</th>
//     <th scope='col'>Delicate cloth price</th>
//     <th scope='col'>Kids cloth price</th>
//     <th scope='col'>Others cloth price</th>
//     <th scope='col'>Total amount</th>
//     <th scope='col'>Laundry status</th>
//     <th scope='col'>Payment status</th>
//     </tr>";

//     while($row=mysqli_fetch_array($user_view)){

//      echo "<tr>";
//      echo "<td>"; echo $row['name'];echo "</td>";
//      echo "<td>"; echo $row['heavy'];echo "</td>"; 
//      echo "<td>"; echo $row['delicate'];echo "</td>";
//      echo "<td>"; echo $row['kids'];echo "</td>";
//      echo "<td>"; echo $row['other'];echo "</td>";
//      echo "<td>"; echo $row['t_amount'];echo "</td>";
//      echo "<td>"; echo $row['L_status'];echo "</td>";
//      echo "<td>"; echo $row['P_status'];echo "</td>";
//      echo "</tr>";
//     }
//     }


$link=new mysqli('localhost','root','','laundry');
if(isset($_POST['submit'])){
    


    $user_view=mysqli_query($link,"call get_user_view('$_POST[coupan]')");   //Stored procedure
   
    if(mysqli_num_rows($user_view)==0){
       echo '<h1 style="text-align:center;margin-top:50px;color: red;">Looks like you\'re information not found in the database</h1>';
       echo '<center><h1 style="font-size:100px;">&#128529</h1></center>';
    }
    else{

        echo "<table class='table table-dark'>
      <tr>
      <th scope='col'>Name</th>
      <th scope='col'>Heavy cloth price</th>
      <th scope='col'>Delicate cloth price</th>
      <th scope='col'>Kids cloth price</th>
      <th scope='col'>Others cloth price</th>
      <th scope='col'>Total amount</th>
      <th scope='col'>Laundry status</th>
      <th scope='col'>Payment status</th>
      </tr>";
  
      while($row=mysqli_fetch_array($user_view)){
  
       echo "<tr>";
       echo "<td>"; echo $row['name'];echo "</td>";
       echo "<td>"; echo $row['heavy'];echo "</td>"; 
       echo "<td>"; echo $row['delicate'];echo "</td>";
       echo "<td>"; echo $row['kids'];echo "</td>";
       echo "<td>"; echo $row['other'];echo "</td>";
       echo "<td>"; echo $row['t_amount'];echo "</td>";
       echo "<td>"; echo $row['L_status'];echo "</td>";
       echo "<td>"; echo $row['P_status'];echo "</td>";
       echo "</tr>";
      }
    
      
    }
    
    }
    
?>

</body>
</html>