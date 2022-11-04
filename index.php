<?php
    $pageTitle = "Shopifyy";
    include 'includes/languages/english.php';
    include 'includes/functions/title.php';
    include "includes/templates/header.php";
?>
<link href="layout/css/index.css" rel="stylesheet">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

    <a class="navbar-brand" href="#"><?php echo lang('home')?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav m-auto">
        <a class="nav-link" href="#">Summer Collection</a>
        <a class="nav-link" href="#">Winter Collection</a>
        <a class="nav-link" href="#">New Arrivals</a>
        <a class="nav-link" href="#">Accessories</a>
      </div>
      <div class="navbar-nav ml-auto">
        <a class="nav-link" href="#">Sign Up</a>
        <a class="nav-link" href="#">Login</a>
      </div>
      
    </div>

  </div>
</nav>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
    <li data-target="#carouselExampleFade" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="layout/images/slider2.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      <h5>New <span>limited</span> edition</h5>
        <p>Sale | free shipping</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="layout/images/slider1.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>50% <span>off</span></h5>
        <p>on new summer collection</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="layout/images/slider30.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5><span>new</span> arrivals</h5>
        <p>we've got the season covered</p>
      </div>
    </div>
  </div>
</div>


<?php
include "includes/templates/footer.php";
?>