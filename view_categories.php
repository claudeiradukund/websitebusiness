<h3 class="text-center text-success">All Categories</h3>
<table class="table table-bordered mt-5 w-50 m-auto">
    <thead class="bg-info text-center ">
      <tr>
        <th>Slno</th>
        <th>Category Title</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php
       $select_cat="select * from `categories`";
       $result_query=mysqli_query($con,$select_cat);
       $number=0;
       while($row=mysqli_fetch_assoc($result_query)){
           $category_id=$row['category_id'];
           $category_title=$row['category_title'];
           $number++;
      
       ?>
    <tr class='text-center'>
        <td><?php echo $number; ?></td>
        <td><?php echo $category_title; ?></td>
        <td><a href='index.php?edit_category=<?php echo $category_id ?>' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
        <td><a href='index.php?delete_category=<?php echo $category_id ?>' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
    </tr>
    <?php
   }?>
    </tbody>
</table>