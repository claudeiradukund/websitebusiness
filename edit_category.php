<?php

if(isset($_GET['edit_category'])){
   $edit_category=$_GET['edit_category'] ;
//    echo  $edit_category; 
$get_query="select * from `categories` where category_id=$edit_category";
$result=mysqli_query($con,$get_query);
$row=mysqli_fetch_assoc($result);
$category_title=$row['category_title'];
// echo $category_title; 
}
if(isset($_POST['edit_cat'])){
  $cat_title=$_POST['Category_title'];
  $update_query="update `categories` set Category_title='$cat_title' where category_id=$edit_category";
  $result_cat=mysqli_query($con,$update_query);
  if($result_cat){
      echo "<script>alert('category is been updated successfully')</script>";
      echo "<script>window.open('./index.php?view_categories.php','_self')</script>";
  }
}

?>

<div class="container mt-3">
    <h1 class="text-center">Edit Category</h1>
    <form action="" method="POST" class="text-center">
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="Category_title" class="form-label">Category Title</label>
        <input type="text" name="Category_title" id="Category_title" class="form-control" required="required" value="<?php echo $category_title; ?>">
    </div>
    <input type="submit" value="Update Category" class="btn btn-info px-3 mb-3" name="edit_cat">
    </form>
</div> 