<?php include 'setup/Database.php'; ?>
<?php
  if(isset($_POST['user_submit'])){
    $username = $_POST['user_email'];
    $password = $_POST['user_password'];

    $q = "SELECT * FROM  `user_detail` WHERE `user_email` = '$username' AND `user_password` = '$password'";
    $r = $db->query($q);
    $row = mysqli_fetch_assoc($r);
    if(mysqli_num_rows($r) == 1){
      session_start();
      $_SESSION['user'] = $username;
      $_SESSION['active'] = TRUE;
      header('Location: home.php');
    }else{
      $errormsg = '<br> <span class="text-danger">Try Again!!!</span>';
    }
  }
?>
<?php
  if(isset($_POST['admin_submit'])){
    $username = $_POST['admin_email'];
    $password = $_POST['admin_password'];

    $q = "SELECT * FROM  `admin_detail` WHERE `admin_email` = '$username' AND `admin_password` = '$password'";
    $r = $db->query($q);
    $row = mysqli_fetch_assoc($r);
    if(mysqli_num_rows($r) == 1){
      session_start();
      $_SESSION['user'] = $username;
      $_SESSION['active'] = TRUE;
      header('Location: admin/home.php');
    }else{
      $errormsg = '<br> <span class="text-danger">Try Again!!!</span>';
    }
  }
?>
<?php
  if(isset($_POST['user_signup'])){
      header('Location: signup.php');
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flight</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
  </head>

  <body>
    <!--top bar starts-->
    <div class="container-fluid top-bar bg-light" style="font-family: Impact; font-size: 18pt">
      <a href="home.php" style="color:#000;">AIRLINES TICKET BOOKING SERVICE</a>
    </div>
    <hr>
    <!--top bar ends-->
    <div class="row m-2">
      <!--form starts here-->
      <div class="offset-md-3 col-lg-5 bg-light">
        <nav>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="oneWay-tab" data-toggle="tab" href="#one-content" role="tab">
                user login
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="twoWay-tab" data-toggle="tab" href="#two-content" role="tab">
                Admin login
              </a>
            </li>
          </ul>
          <div class="tab-content p-4" id="myTabContent">
              <div class="tab-pane fade show active" id="one-content" role="tabpanel">
                <div class="container">
                  <form class="" action="" method="post">
                    <?php if(isset($errormsg)){echo $errormsg; } ?>
                    <div class="form-group">
                      <input class="form-control" type="email" name="user_email" placeholder="enter your email">
                    </div>
                    <div class="form-group">
                      <input class="form-control" type="password" name="user_password" placeholder="enter your password">
                    </div>
                    <div class="form-group">
                      <input class="btn btn-primary" type="submit" name="user_submit" value="login">
                      <input class="btn btn-danger" type="submit" name="user_signup" value="Signup">
                    </div>
                  </form>
                </div>
              </div>
            <div class="tab-pane fade" id="two-content" role="tabpanel">
              <div class="container">
                <form class="" action="" method="post">
                  <?php if(isset($errormsg)){echo $errormsg; } ?>
                  <div class="form-group">
                    <input class="form-control" type="email" name="admin_email" placeholder="enter your email">
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="password" name="admin_password" placeholder="enter your password">
                  </div>
                  <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="admin_submit" value="login">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <hr>
<?php include 'includes/footer.php';?>
