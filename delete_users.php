<?php
if(isset($_GET['delete_users'])){
    $delete_users=$_GET['delete_users'];
    // echo  $delete_category;
    $delete_query="delete from `user_table` where user_id=$delete_users";
    $result=mysqli_query($con,$delete_query);
    if($result){
      echo "<script>alert('User is been Deleted successfully')</script>";
      echo "<script>window.open('./index.php?list_users.php','_self')</script>"; 
    }
}


?>