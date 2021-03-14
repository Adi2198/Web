<?php 
 require 'common.php';
 if(isset($_SESSION['email'])){
     header('loaction:products.php');
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
    ?>

    <main>
        <div class="banner_image"><a href="product.php"></a>
            <center>
              <div class="banner_content">
                <h3>We sell lifestyle</h3>
                <p>Falt 40% OFF on premium brands.</p>
                <a href="product.php" class="btn btn-danger btn-lg active"><b>Shop Now</b></a>
              </div>
            </center>
          </div>
    
      <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="product.php#cameras" >
                            <div class="thumbnail">
                                <img src="./images/4.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="product.php#watches" >
                            <div class="thumbnail">
                                <img src="./images/9.jpg" alt="Watches">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="product.php #shirts" >
                            <div class="thumbnail">
                                <img src="./images/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

    </main>
    <?php 
     include './includes/footer.php';
    ?>
  </body>
</html>

