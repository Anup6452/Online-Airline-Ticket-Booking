<?php include 'setup/Database.php';
  session_start();
  if(!($_SESSION['active'] == TRUE)){
    header('Location: index.php');
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
    <form  action="logout.php" method="post">
      <input type="submit" name="logout" value="logout" class="btn btn-danger">
    </form>
