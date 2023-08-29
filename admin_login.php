<?php
include('../includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta http-="X-UA-compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
     <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--foont awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
       body{
           overflow: hidden;
           background-color: aqua;
       } 
    </style>
  </head>
  <body>
     <div class="container-fluid m-3">
         <h2 class="text-center mb-5">Admin Login</h2>
         <div class="row d-flex justify-content-center ">
           <div class="col-lg-6 col-xl-3">
               <img src="../image/p5.webp" alt="Admin Registration" class="imag-fluid">
           </div> 
           <div class="col-lg-6 col-xl-3">
              <form action="" method="post">
                 <div class="form-outline mb-4">
                     <label for="username" class="form-label">Username</label>
                     <input type="text" id="username" name="username" placeholder="Enter Your Username" required="required" class="form-control">
                 </div> 
                 <div class="form-outline mb-4">
                     <label for="Password" class="form-label">Password</label>
                     <input type="Password" id="Password" name="Password" placeholder="Enter Your Password" required="required" class="form-control">
                 </div> 
                 <div>
                    <input type="submit" id="" class="bg-info py-2 px-3 border-0" name="admin_login" value="Login"> 
                    <p class="small fw-bold mt-3 pt-2">Don't you have any accont? <a href="admin_registration.php" class="link-danger">Regiter</a></p>
                 </div>
              </form> 
           </div> 
         </div>
     </div>
  </body>
</html>
<?php
if(isset($_POST['admin_login'])){
  $username=$_POST['username'];
  $Password=$_POST['Password'];  
  $select_query="select * from `admin_table` where username='$username'";
  $mysqli_result=mysqli_query($con,$select_query);
  $row_data=mysqli_fetch_assoc($mysqli_result);
  if($row_data>0){
    $_SESSION['username']=$username;
      if(password_verify($password,$row_data['password'])){
        // echo "<script>alert('Login Successful')</script>"; 
        if($row_count==1){
            $_SESSION['username']=$username;
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }

      }else{
        echo "<script>alert('Invalid Credentials')</script>";    
      }
  }
}



?>