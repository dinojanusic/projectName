<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="script.js" type="text/javascript"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title></title>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark padding">
        <a class="navbar-brand" href="index.php"> <i class="fas fa-plane-departure"></i> Travel2Be</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto ml-5">


            <li class="nav-item">
            <a href="#" class="nav-link"></a>
          </li>
          </ul>
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-twitter-square mr-5"></i></a>


            <?php
              if (isset($_SESSION['userId'])) {
                echo '<form class="ml-5" action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit" class="btn btn-secondary btn-sm">LogOut</button>
                  </form>';


              }
              else {
                echo '<form class="" action="includes/login.inc.php" method="post">
                  <input type="text" name="mailuid" placeholder="Username/E-mail...">
                  <input type="password" name="pwd" placeholder="Password">
                  <button type="submit" name="login-submit" class="btn btn-secondary btn-sm align-middle">Login</button>
                    </form>
                    <a href="signup.php" style="color: white;" class="ml-2">Signup</a>';
              }

             ?>




      </div>
    </nav>
    </header>

  </body>
</html>
