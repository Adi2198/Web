<?php 
 include 'common.php';
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
        ?>
    
    <main class="row_style">
      <center>
          <div class="jumbotron">
            <h4>You are successfully Logged Out Thank you for shopping with us. <a href="login.php">Click here</a> to login</h4>
          </div>
        
      </center>
      <div class="col-md-3"></div>
    </main>
      <?php 
        include './includes/footer.php';
        ?>
      </body>
    </html>
    
    <?php
    session_unset();
    session_destroy();
    ?>