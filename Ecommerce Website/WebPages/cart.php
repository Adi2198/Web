<?php 
 include 'common.php';
 if(!isset($_SESSION['email'])){
     header('location: login.php');
 }
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>

    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <title>Lifestyle.com</title>
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="./css/style.css">
  </head>
  <body>

    <?php 
        include './includes/header.php';
        $user_id = $_SESSION['id'];
        $get_user_data = "SELECT * FROM users_products WHERE `user_id`='$user_id'";
        $get_user_result = mysqli_query($con,$get_user_data);
        $num_of_user = mysqli_num_rows($get_user_result);
        
        if($num_of_user == 0){?>
      <main class="row_style">
      <center>
          <div class="jumbotron"><h3>Add items to the cart first!</h3></div>
          
          <div class="col-lg-3"></div></center>
    </main>
      <?php }else {
          $sum = 0;
          $item_number = 0;?>
      
      <main class="row_style">
      <center>
        
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Item Number</th>
                <th>Item Name</th>
                <th>Price</th>
              </tr>
            </thead>
      
      <?php
          while($num_of_user!=0){
              $product_id=mysqli_fetch_array($get_user_result);
              $i = $product_id['product_id'];
              $get_product_price = "SELECT * FROM products WHERE id = '$i'";
              $get_product_result = mysqli_query($con,$get_product_price);
              $product_price = mysqli_fetch_array($get_product_result);
              $sum = $sum + $product_price['price'];
              $item_number+=1;
              echo "<tr><td>".$item_number.".</td>";
              echo "<td>".$product_price['name']."</td>";
              echo "<td>Rs.".$product_price['price']."</td>";
              echo "<td><a href='cart-remove.php?id={$product_id['product_id']}'
class='remove_item_link'> Remove</a></td></tr>";
             
              $num_of_user = $num_of_user - 1 ;
          }
          echo "<tr><td> </td>";
          echo "<td><b>Total</b></td>";
          echo "<td><b>Rs.".$sum."</b></td>";
      ?>
      <td><a href='success.php'><button type="submit" class="btn btn-primary btn-block" >Confirm Order</button></a></td></tr>
          
         <?php } ?>
          </table></center></main>
    <?php 
        include './includes/footer.php';
        ?>
  </body>
    </html>
   
   