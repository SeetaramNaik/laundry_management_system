<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laundry management system</title>
  </head>
  <body>

  <a style="color: #fff;" href="./user_view.php">Customer</a>
  <a style="color: #fff;" href="./admin_login.php">Admin</a>
    <div class="container">
       <div class="heading">
          <h1>Welcome to Laundry Management System</h1>
       </div>
       <div class="options">
         
       <a style="color: #fff;" href="./user_view.php">
         <div class="cust">
         <h2>Customer</h2>
         </div>
         </a> 
         <a style="color: #fff;" href="./admin_login.php">
         <div class="adm">
            <h2>Admin</h2>
         </div>
         </a> 
       </div>
    </div>
  

 


    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      body{
          background-color: rgb(61, 59, 59);
      }
       h1{
         color:  #c2c2a3;
         font-size: 40px;
       }
       h2{
         text-align: center;
       }
       a{
         text-decoration: none;
         padding: 20px;
       }
       .container{
         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;
         align-content: center;
         margin-top: 100px;
        }
       .heading{
         margin-top: 50px;
       }
       .options{
         display: flex;
         padding: 20px;
         margin: 20px;
         margin-top: 10px;
       }
       .cust{
         padding: 20px;
         color:  #444422;
         background-color: #fff;
         margin: 30px;
         margin-right: 30px;
         width: 100%;
         border-radius: 15px;
      }
      .adm{
         padding: 20px;
         color:  #444422;
         background-color: #fff;
         margin: 30px;
         width: 100%;
         border-radius: 15px;
      }
      .cust:hover{
        background-color: #e6cbb3;
        transition:ease-in 0.3s;
      }
      .adm:hover{
        background-color: #e6cbb3;
        transition:ease-in 0.3s;
      }

    </style>
  </body>
</html>
