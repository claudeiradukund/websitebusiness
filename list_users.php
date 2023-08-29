<h3 class="text-center text-success">All Users</h3>
<table class="table table-bordered mt-5 w-50 m-auto">
   <thead class="bg-info ">
       <?php 
         $get_orders="select * from `user_table`";
        $result=mysqli_query($con,$get_orders);
        $row_count=mysqli_num_rows( $result);  
if($row_count==0){
    echo "<h2 class='text-danger text-center mt-5 w-50 m-auto'>No Users Registered</h2>";
}else{
  echo " <tr>
  <th>User Id</th>
  <th>User Name</th>
  <th>User Email</th>
  <th>User Image</th>
  <th>User Address</th>
  <th>User Mobile</th>
  <th>Delete</th>
</tr>
</thead> 
<tbody class='bg-secondary text-light'>";
 $number=0;
 while($row_data=mysqli_fetch_assoc($result)){
   $user_id=$row_data['user_id'];
   $username=$row_data['username']; 
   $user_email=$row_data['user_email']; 
   $user_image=$row_data['user_image']; 
   $user_address=$row_data['user_address']; 
   $user_mobile=$row_data['user_mobile'];  
   $number++; 
   ?>
   <tr> 
   <td><?php echo $number ?></td> 
   <td> <?php echo $username ?></td> 
   <td> <?php echo $user_email ?></td> 
   <td><img src="\website\index/user_images/<?php echo $user_image ?>" alt="<?php echo $username ?>" class="product-img"></td> 
   <td> <?php echo $user_address ?></td>
   <td> <?php echo $user_mobile ?></td>
   <td><a href='index.php?delete_users=<?php echo $number ?>' class='text-light'><i class='fa-solid fa-trash'></i></a></td> 
 </tr>
 <?php
 }  
 
}
?>
      
     
   </tbody>
</table>