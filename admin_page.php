<?php

@include 'config.php';

if(isset($_POST['add_product'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
  $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;
if(empty($product_name) || empty($product_price) || empty($product_image)){
      $message[] = 'svp, de tout remplir';
   }else{
      $insert = "INSERT INTO products(name, price, image) VALUES('$product_name', '$product_price', '$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'nouveau produit ajoute avec succes';
      }else{
         $message[] = 'impossible dajouter le produit';
      }
   }

};
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM products WHERE id = $id");
   header('location:admin_page.php');
};?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="A.css">

<style>


span{
   margin-left: 5px;
   color: black;
   font-size: 16px;
}
i{
   color: white;
}

</style>

   <!-- custom css file link  -->


</head>
<body>



<div class="topbutton">
<a href="admin.php"><span class="fas fa-angle-up"> </span></a>

</div>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>Ajouter nouvelle produit :</h3> <br>
          <span > Nom de produit :*</span>
         <input type="text" placeholder="enter le nom de produit" name="product_name" class="box">
         <span>  Prix de pdoduit :*</span>
         <input type="number" placeholder="enter le prix de produit" name="product_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" id ="image"class="box">
         <input type="submit" class="btn" name="add_product" value="ajouter produit">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM products");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>produit</th>
            <th>nom </th>
            <th>prix  </th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?>DA</td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i>
                Modifier </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i>
                Supprimer</a>
            </td>
         </tr>
      <?php } ?>
      </table>
    
     
   </div>

</div>


</body>
</html>