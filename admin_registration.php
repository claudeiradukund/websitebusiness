<?php
include('../includes/connect.php');
include('D:\xampp\htdocs\website\functions\common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta http-="X-UA-compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
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
         <h2 class="text-center mb-5">Admin Registration</h2>
         <div class="row d-flex justify-content-center ">
           <div class="col-lg-6 col-xl-3">
               <img src="../image/p5.webp" alt="Admin Registration" class="imag-fluid">
           </div> 
           <div class="col-lg-6 col-xl-3">
              <form action="" method="post">
                 <div class="form-outline mb-4">
                     <label for="username" class="form-label">Username</label>
                     <input type="text" id="username" name="admin_name" placeholder="Enter Your Username" required="required" class="form-control">
                 </div> 
                 <div class="form-outline mb-4">
                     <label for="email" class="form-label">Email</label>
                     <input type="text" id="email" name="admin_email" placeholder="Enter Your Email" required="required" class="form-control">
                 </div> 
                 <div class="form-outline mb-4">
                     <label for="Password" class="form-label">Password</label>
                     <input type="Password" id="Password" name="Password" placeholder="Enter Your Password" required="required" class="form-control">
                 </div> 
                 <div class="form-outline mb-4">
                     <label for="confirm_Password" class="form-label">Confirm Password</label>
                     <input type="Password" id="confirm_Password" name="confirm_Password" placeholder="Confirm Your Password" required="required" class="form-control">
                 </div> 
                 <div>
                    <input type="submit" id="" class="bg-info py-2 px-3 border-0" name="admin_registration" value="Register"> 
                    <p class="small fw-bold mt-3 pt-2">Do you have already any accont? <a href="admin_login.php" class="link-danger">Login</a></p>
                 </div>
              </form> 
           </div> 
         </div>
         
     </div>
  </body>
</html>
<!-- php codes -->
<?php
if(isset($_POST['admin_registration'])){
    $admin_name=$_POST['admin_name'];
    $admin_email=$_POST['admin_email'];
    $admin_password=$_POST['admin_password'];
    $hash_password=password_hash($password,PASSWORD_DEFAULT);
    $confirm_Password=$_POST['confirm_Password'];
    $user_ip=getIPAddress();
   // select query
    $select_query="select * from `admin_table` where admin_name='$admin_name' or admin_email='$admin_email'";
    $result_query=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result_query);
    if($rows_count>0){
     echo "<script>alert('username and email already exist')</script>";  
    }else if($admin_password!= $confirm_Password){
     echo "<script>alert('passwords do not match')</script>"; 
    }
        else{
      // insert_query,user_ip,user_address,user_mobile
   $insert_query="insert into `admin_table` (admin_name,admin_email,admin_password) value ('$admin_name','$admin_email','$hash_password')";
   $sql_execute=mysqli_query($con,$insert_query);
    }
 
 }
 ?>