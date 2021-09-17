<?php include 'includes/header.php'; ?>
<?php
  if(isset($_POST['signup_submit'])){
    $name = $_POST['signup_name'];
    $email = $_POST['signup_email'];
    $password = $_POST['signup_password'];
    $q = "INSERT INTO user_detail (`user_name`,`user_email`,`user_password`)
          VALUES ('$name','$email','$password')";
    if(mysqli_query($db,$q)){
       $successmsg = "successfully registered";
    }
    else{
       echo mysqli_error($db);
    }
  }
?>
    <hr>
    <!--top bar ends-->
    <div class="row m-2">
      <!--form starts here-->
      <div class="offset-md-3 col-lg-5 bg-light">
        <nav>
          <form class="form-horizontal" action="signup.php" method="post">
            <span class="text-success"><?php if(isset($successmsg)){echo $successmsg;} ?></span>
            <div class="form-group">
              <label>Name: </label>
                <input name="signup_name" type="text" class="form-control"  placeholder="name here" required>
            </div>
            <div class="form-group">
              <label>Email: </label>
                <input name="signup_email" type="email" class="form-control"  placeholder="Email here" required>
            </div>
            <div class="form-group">
              <label>Password: </label>
                <input class="form-control" type="password" name="signup_password" placeholder="password here" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="submit" name="signup_submit">
                <input type="reset" class="btn btn-danger" value="reset">
            </div>
         </form>
        </nav>
      </div>
    </div>
    <hr>
<?php include 'includes/footer.php';?>
