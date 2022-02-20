<!DOCTYPE html>
<html lang="en">
<head>
    <title>Smart Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bebas+Neue&family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    
<!-- Navigation Bar  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Smart Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="customeers.php">Our Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transactions.php">Transfer History</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Carousel  -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- slideshow  -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/card.jpg" alt="Easy Transfer" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Easy Money Transfer</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/notes.jpg" alt="Quick Deposit" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Quick Personal Loans</h3>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/img6.jpg" alt="Low interests" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Customer Satisfaction</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- About  -->
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluids">
      <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="img/bank.jpg" class="img-fluid">
          </div>
          <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">Smart Bank</h2>
          <p1 class="py-5"> 
          Smart Bank is a part of Smart foundation. It is one of Znations's leading private banks and was among the first to receive approval from the Central bank of Znation (CBZ) to set up a private sector bank in 992 ZY.
          Today, Smart Bank has a banking network of 5,608 branches and 16,087 ATM's in 2,902 cities/towns. Smart Bank offers a diverse range of financial products and banking services to customers(Which are dead actually, because they are SmartS) through a growing branch and ATM network and digital channels such as Netbanking, Phonebanking and MobileBanking.
          
          </div>
      </div>
</div>

</section>

<!-- disclaimer  -->
<section class="my-5">
<div class="py-5">
<h2 class="text-center" >Disclaimer</h2>
  <p1>This website is the
      outcome of a intern project, and does not
      necessarily represent the views of any organisation or any other individuals referenced or
      acknowledged within the website. Anyone may reproduce, distribute, adapt, translate the content on the website, without explicit permission, provided that the content is accompanied by an acknowledgement that Zombie Bank website is the source and that it is clearly indicated if changes were made to the original content.</p1>
</div>


<footer class="text-center mt-2 py-5">
        <p>&copy 2022  <b>Shreya Thorat</b> </br>Chairman, Smart Foundation</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>>
</body>
</html>

