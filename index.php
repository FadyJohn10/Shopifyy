<?php
    $pageTitle = "Shopifyy";
    include 'includes/languages/english.php';
    include 'includes/functions/title.php';
?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link href="layout/css/home.css" rel="stylesheet">
        <title><?php getTitle() ?></title>
    </head>
    <body>

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
      <img class="d-block w-100" src="layout/images/slider10.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      <h5>New <span>limited</span> edition</h5>
        <p>Sale | free shipping</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="layout/images/slider20.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5><span>50% </span>off</h5>
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


<div class="promo text-center">
  <h3>Use Code <span>XG37</span> To Get Free Shipping On 100USD</h3>
</div>

<div class="cats">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-3 cat">
      <img src="layout/images/cat1.jpg" class="img-fluid">
      <a href="#" class="btn">MEN</a>
    </div>
    <div class="col-md-3 cat">
    <img src="layout/images/cat2.jpg" class="img-fluid">
    <a href="#" class="btn">women</a>
    </div>
    <div class="col-md-3 cat">
    <img src="layout/images/cat3.jpg" class="img-fluid">
    <a href="#" class="btn">Kids</a>
    </div>
    <div class="col-md-3 cat">
    <img src="layout/images/cat4.jpg" class="img-fluid">
    <a href="#" class="btn">Accessories</a>
    </div>
  </div>
  </div>
</div>

<?php
include "includes/templates/footer.php";
?>