<?php
 require "header.php";
 ?>

 <main>



   <?php
if (isset($_SESSION['userId'])) {
  echo '<div class="container bg-light text-center">
     <p>You are logged In!</p>
   </div>';
}
else {
  echo '<div class="container bg-light text-center">
     <p>You are logged Out!</p>
   </div>';
}
    ?>

    <div class="container-fluid mt-5 padding">
      <div class="row">
        <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/fiji.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Otputuj na FIJI</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              <a href="#" class="btn btn-secondary btn-lg">Saznaj Više!</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/egipt.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Last Minute Egipt</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <a href="#" class="btn btn-secondary btn-lg">Saznaj Više!</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/jamajca.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Posjeti Jamajku</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              <a href="#" class="btn btn-secondary btn-lg">Saznaj Više!</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

      </div>

    </div>

    <!---Tražilica----->

    <div class="container-fluid mt-3 bg-light padding">
    <div class="row justify-content-center mb-4">
      <h1>Upiši svoju željenu destinaciju....</h1>
      <button onclick="revealMessage" type="button" name="button" class="btn btn-success" id="upis">Upiši</button>
    </div>
    <div id="hiddenMessage" class="row justify-content-center">
      <div class="form-inline mb-3">
      <input class="form-control form-control-lg mr-sm-5" type="search" placeholder="Upiši Ime Grada ili Države" aria-label="Search">
    <button type="button" class="btn btn-secondary btn-lg">Traži! </button>
    </div>
    </div>
    <hr class="my-4">
    <div class="row justify-content-center">
      <div id="filterbtn">
    <button type="button" name="button" class="btn btn-outline-secondary btn-sm"><i class="fas fa-arrow-down"></i>Podesi Filtere</button>
    </div>
    </div>
    <div class="filteri">


    <div class="row" id="filteri">
      <div class="col-md-6">
        <div class="form-group">
      <label for="exampleFormControlSelect1">Odaberi Zemlju:</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Hrvatska</option>
        <option>Španjolska</option>
        <option>Portugal</option>
        <option>Grčka</option>
        <option>Egipat</option>
      </select>
    </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
      <label for="exampleFormControlSelect1">Odaberi Grad:</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Dubrovnik</option>
        <option>New York</option>
        <option>Amsterdam</option>
        <option>Tokyo</option>
        <option>Bangladeš</option>
      </select>
    </div>

      </div>

    </div>
    <div class="row">
      <div class="col-md-6">
        <form>
      <div class="form-group">
        <label for="formControlRange">500KN</label>
        <label for="formControlRange ml-5">1500KN</label>
        <input type="range" class="form-control-range" id="formControlRange">
      </div>
    </form>
      </div>
      <div class="col-md-6">
        <div class="form-check">
          <label></label>
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Default checkbox
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
      <label class="form-check-label" for="defaultCheck2">
        Disabled checkbox
      </label>
    </div>

      </div>

    </div>
    </div>
    </div>
    <div class="container-fluid ah mt-4 padding">
      <div class="row">
    <div class="col-md-4">
      <a href="#" data-toggle="modal" data-target="#exampleModalLong">
      <div class="jumbotron hr jumbotron-fluid">
      <div class="container">
        <h1 class="display-5">Hrvatska</h1>
          <hr class="my-4">
        <p class="lead">Otputuj u neku od domačih destinacija.</p>
      </div>
    </div>
    </a>
    </div>
    <div class="col-md-4">
    <a class="tipka">
      <div class="jumbotron eu jumbotron-fluid">
      <div class="container">
        <h1 class="display-5">Europa</h1>
        <hr class="my-4">
        <p class="lead">Otputuj u neku od europskih destinacija.</p>
      </div>
    </div>
    </a>
    </div>
    <div class="col-md-4">
      <a href="#">
      <div class="jumbotron sv jumbotron-fluid">
      <div class="container">
        <h1 class="display-5">Svijet</h1>
          <hr class="my-4">
        <p class="lead">Otputuj u neku od svjetskih destinacija.</p>
      </div>
    </div>
    </a>
    </div>

      </div>

    </div>


 </main>

 <?php
require "footer.php";
  ?>
