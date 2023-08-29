<?php
if(isset($_GET['delete_payments'])){
    $delete_payments=$_GET['delete_payments'];
    // echo  $delete_category;
    $delete_query="delete from `user_payments` where payment_id=$delete_payments ";
    $result=mysqli_query($con,$delete_query);
    if($result){
      echo "<script>alert('Payment is been Deleted successfully')</script>";
      echo "<script>window.open('./index.php?list_payments.php','_self')</script>"; 
    }
}


?>