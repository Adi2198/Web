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

    <main>
      
      <div class="container">
        <div class="row row_style">
          <div class="col-xs-4 col-xs-offset-4">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h4>LOGIN</h4>
              </div>
              <div class="panel-body"><p class="text-warning">Login to make a purchase</p>
              <form method="post" action="./database/login_submit.php">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" id="email" name="email" required="true">
                  
                </div>
                <div class="form-group">
                  <input type="password" class="from-control" placeholder="Password" id="password" name="password" required="true">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
              </form><br>
            </div>
            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
    <?php 
        include './includes/footer.php';
        ?>
    </body>
    </html>




















