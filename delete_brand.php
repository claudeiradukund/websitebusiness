<?php
if(isset($_GET['delete_brand'])){
    $delete_brand=$_GET['delete_brand'];
    // echo  $delete_category;
    $delete_query="delete from `brands` where brand_id=$delete_brand ";
    $result=mysqli_query($con,$delete_query);
    if($result){
      echo "<script>alert('brand is been Deleted successfully')</script>";
      echo "<script>window.open('./index.php?view_brands.php','_self')</script>"; 
    }
}


?>