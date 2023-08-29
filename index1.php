<!--- connect file -->
<?php
include('../includes/connect.php');
include('D:\xampp\htdocs\website\functions\common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta http-="X-UA-compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HaHa Vuba</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--foont awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<!-- css file -->
<link rel="stylesheet" href="style.css" type="text/css">
<style>
body{
  overflow-x:hidden;  
}
</style>
  </head>
<body>
    <!-- navbar -->
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
      <img src="photo/imag.jpg" alt="..." class="logo" >
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="display_all.php">products</a>
          </li>
          <?php
            if(isset($_SESSION['username'])){
              echo "<li class='nav-item'>
              <a class='nav-link' href='profile.php'>My Account</a>
            </li>";
             }else{
              echo "<li class='nav-item'>
              <a class='nav-link' href='user_registration.php'>Register</a>
            </li>";
             }

          ?>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"><sup><?php cart_item();?></sup></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">total price: <?php total_cart_price(); ?>/-</a>
          </li>
        </ul>
        <form class="d-flex" action="search_product.php" method="GET">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
          <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
        </form>
     </div>
     </div>
   </nav>
   <!-- calling cart function -->
   <?php
    cart();
   ?>
 </div>
 <!-- second child-->
 <nav class="navbar navbar-expand-lg  navbar-dark bg-secondary">
   <ul class="navbar-nav me-auto">
      
      <?php
        if(!isset($_SESSION['username'])){ 
          echo "<li class='nav-item'>
          <a class='nav-link' href='#'>Welcome Guest</a>
        </li>";
        }else{
          echo "<li class='nav-item'>
          <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
        </li>";
        }
      if(!isset($_SESSION['username'])){ 
        echo "<li class='nav-item'>
        <a class='nav-link' href='user_login.php'>login</a>
      </li>";
      }else{
        echo "<li class='nav-item'>
        <a class='nav-link' href='logout.php'>logout</a>
      </li>";
      }

      ?>
   </ul>
  </nav>
  <!-- third child-->
  <div class="bg-light">
    <h3 class="text-center">Shop every where you are</h3>
    <p class="text-center">communications is at the heart of e-commerce and community</p>
  </div>
  <!-- fourth child -->
  <div class="row px-1">
    <div class="col-md-10">
      <!-- products -->
      <div class="row">
        <!-- fetching products -->
        <?php
          // calling function
           getproducts();
           get_unique_categories();
           get_unique_brands();
          //  $ip =getIPAddress();
          //  echo 'User Real IP Address - '.$ip;
        ?> 
       
        <!-- row end -->
      </div>
      <!-- col end -->
    </div>
    <div class="col-md-2">
      <!-- sidenav -->
      <div class="col-mid-2 bg-secondary p-0" class="claude"> 
        <!-- blands tobe displayed -->
        <ul class="navbar-nav me-au text-center">  
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>delivery brands</a>
          </li>
          <?php
            getbrands();
          ?>
       </ul>
        <!-- categories to be displayed-->
        <ul class="navbar-nav me-au text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light"><h4>categories</a>
          </li>
          <?php
            getcategories();
          ?>
        </ul>
      </div>
    </div>
     <!-- last child-->
    <!-- include footer -->
    <?php include('D:\xampp\htdocs\website\includes\footer.php') ?>

  </div>
   
  <!-- bootstrap js link-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>