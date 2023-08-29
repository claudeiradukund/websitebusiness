<!--- connect file -->
<?php
include('../includes/connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" >
    <meta http-="X-UA-compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--foont awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- css file -->
<link rel="stylesheet" href="style.css" type="text/css">
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
          <li class="nav-item">
            <a class="nav-link" href="user_registration.php">register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">contact</a>
          </li>
        </ul>
        <form class="d-flex" action="search_product.php" method="GET">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
          <input type="submit" value="search" class="btn btn-outline-light" name="search_data_product">
        </form>
     </div>
     </div>
    </nav>
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
    <h3 class="text-center">hidden store</h3>
    <p class="text-center">communications is at the heart of e-commerce and community</p>
  </div>
  <!-- fourth child -->
  <div class="row px-1">
      <div class="col-md-12">
         <!-- products -->
          <div class="row">
              <?php
               if(!isset($_SESSION['username'])){
                 include('user_login.php');
                }else{
                 include('payment.php');   
                }
               ?>
          </div>
          <!-- row end -->
       </div>
     
      
    </div>
    <!-- last child-->
    <!-- include footer -->
    <?php include('C:\xampp\htdocs\website\includes\footer.php') ?>

  </div>
   
  <!-- bootstrap js link-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>