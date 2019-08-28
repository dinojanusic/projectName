<?php
 require "header.php";
 ?>

 <main>
   <form action="includes/signup.inc.php" method="POST" style="width: 500px; margin: auto" class="form-group mb-5">
     <?php

     if (isset($_GET['error'])) {
      if ($_GET['error'] == "emptyfields") {
      echo '<p class="lead text-center" style="color: red;">Fill all the fields!</p>';
      }
      elseif ($_GET['error'] == "invaliduidmail") {
        echo '<p class="lead text-center" style="color: red;">Invalid username or e-mail!</p>';
      }
      elseif ($_GET['error'] == "invalidmuid") {
        echo '<p class="lead text-center" style="color: red;">Invalid username!</p>';
      }
        elseif ($_GET['error'] == "invalidmail") {
          echo '<p class="lead text-center" style="color: red;">Invalid e-mail!</p>';
        }
         elseif ($_GET['error'] == "passwordcheck") {
            echo '<p class="lead text-center" style="color: red;">Your password dont match!</p>';
          }
            elseif ($_GET['error'] == "usertaken") {
              echo '<p class="lead text-center" style="color: red;">Username already taken up!</p>';
            }
     }
elseif ($_GET['signup'] == "success") {
  echo '<p class="lead text-center" style="color: green;">Signup successful!</p>';
}
      ?>
     <div class="row">
       <div class="col-md-6">
         <div class="form-group">
     <label for="first">Username</label>
     <input type="text" name="uid" id="ime" class="form-control" placeholder="Username">
       </div>
     </div>
     <div class="col-md-6">
       <div class="form-group">
     <label for="last">Email</label>
     <input type="text" name="mail" id="prezimeime" class="form-control" placeholder="e-mail" >
       </div>
       </div>
     </div>
     <div class="form-group">
     <label for="uid">Password</label>
     <input type="password" name="pwd" id="username" class="form-control" placeholder="password">
     </div>
     <div class="form-group">
     <label for="uid">Password</label>
     <input type="password" name="pwd-repeat" id="username" class="form-control" placeholder="Repeat password">
     </div>

     <div class="form-check mt-3">
   <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
   <label class="form-check-label" for="defaultCheck1">
     Prihvaćam uvjete
   </label>
 </div>
 <button type="submit" name="signup-submit" class="btn btn-success mt-3">Signup</button>
   </form>
 </main>

 <?php
require "footer.php";
  ?>
