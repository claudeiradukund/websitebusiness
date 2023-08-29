<h3 class="text-center text-success">All Payments</h3>
<table class="table table-bordered mt-5 w-50 m-auto">
   <thead class="bg-info ">
       <?php 
         $get_orders="select * from `user_payments`";
        $result=mysqli_query($con,$get_orders);
        $row_count=mysqli_num_rows( $result);  
if($row_count==0){
    echo "<h2 class='text-danger text-center mt-5 w-50 m-auto'>No Payment Orders Yet</h2>";
}else{
  echo " <tr>
  <th>Payment Id</th>
  <th>Invoice Numberr</th>
  <th>Amount</th>
  <th>Payment Mode</th>
  <th>Date</th>
  <th>Delete</th>
</tr>
</thead> 
<tbody class='bg-secondary text-light'>";
 $number=0;
 while($row_data=mysqli_fetch_assoc($result)){
   $payment_id=$row_data['payment_id'];
   $order_id=$row_data['order_id']; 
   $invoice_number=$row_data['invoice_number']; 
   $amount=$row_data['amount']; 
   $payment_mode=$row_data['payment_mode']; 
   $date_of_payment=$row_data['date'];  
   $number++; 
   ?>
   <tr> 
   <td><?php echo $number ?></td> 
   <td> <?php echo $invoice_number ?></td> 
   <td> <?php echo $amount ?></td> 
   <td> <?php echo $payment_mode ?></td> 
   <td> <?php echo $date_of_payment ?></td>
   <td><a href='index.php?delete_payments=<?php echo $number ?>' class='text-light'><i class='fa-solid fa-trash'></i></a></td> 
 </tr>
 <?php
 }  
 
}
?>
      
     
   </tbody>
</table>