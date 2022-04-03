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
    <title>Admin Login Page</title>
</head>
<body style="background: #000;color: #fff;">
    <center>
    <div class="container">
    <div class="col-md-6 login-form-1">
                    <h3 style="margin-top:150px;">Admin Login Page</h3>
                    <form action="" method="post" class="dark">
                        <div class="form-group" style="margin: 30px;">
                            <input type="text" class="form-control" placeholder="Username" value="" name="username"/>
                        </div>
                        <div class="form-group" style="margin: 30px;">
                            <input type="password" class="form-control" placeholder="Password" value="" name="password"/>
                        </div>
                        <div class="form-group" style="margin: 30px;">
                            <input type="submit" class="btn btn-primary" value="Login" name="submit"/>
                        </div>
                        <!-- <div class="form-group">
                            <a href="#" class="btnForgetPwd">Forget Password?</a>
                        </div> -->
                    </form>
                </div>
    </div>
    </center>


<?php
  $admin_username='admin';
  $admin_password='admin'; 

  if(isset($_POST['submit'])){
     if($admin_username==$_POST['username'] && $admin_password==$_POST['password']){
        header('location: dashboard.php');
        die;
     }
     else{
        echo "<script>alert('Username or password doesn't matched...');</script>";
     }
}

?>






</body>
</html>