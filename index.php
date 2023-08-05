<?php
session_start();

if(isset($_GET["UNF"])){
    echo"
    <script>
        alert('User Not Found !!!');
        window.location.href = 'index.php';
    </script>
    ";

}
if(isset($_GET["PNM"])){
    echo"
    <script>
        alert('Password Not Matched !!!');
        window.location.href = 'index.php';
    </script>
    ";
}
if(isset($_GET["ex"])){
    echo"
    <script>
        alert('User Already Exists !!!');
        window.location.href = 'index.php';
    </script>
    ";
}
// unset($_SESSION["loggedin"]);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="style.css" >
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <title>SWA</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


  </head>
  <body class="p-3 m-0 border-0 bd-example">
  <?php require_once 'topbar.php'; ?>

  <div class="modal fade" id="global-modal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!--Modal Content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" style="margin-top: -16px; font-size: 28px;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>

      </div>
      <div class="modal-body" style="padding: 0;">
        <p> Please Login in First to book our packages </p>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  $('#global-modal').modal('show');
});</script>
               <!-- carousel slides for home page image -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"  >
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="images/swoyambhunath.jpg" class="d-block w-100 c-img" alt="..." style="filter: brightness(70%);">
      <div class="carousel-caption top-0 mt-4 d-none d-md-block">
        <p class="mt-5 fs-3 text-uppercase">Discover the hidden worlds</p>
        <h1 class="display-1 fw-bolder text-capitalize">Sherpa World Adventures</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-4"><a href="tour-package.php" class="text-decoration-none text-white">Book & Tour</a></button> 
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="images/mountain.jpg" class="d-block w-100 c-img" alt="..." style="filter: brightness(70%);">
      <div class="carousel-caption top-0 mt-4 d-none d-md-block">
        <p class="mt-5 fs-3 text-uppercase">Discover the hidden worlds</p>
        <h1 class="display-1 fw-bolder text-capitalize">Sherpa World Adventures</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-4"><a href="tour-package.php" class="text-decoration-none text-white">Book & Tour</a></button> 
      </div>
    </div>
    <div class="carousel-item c-item">
      <img src="images/temples.jpg" class="d-block w-100 c-img" alt="..." style="filter: brightness(70%);">
      <div class="carousel-caption top-0 mt-4 d-none d-md-block">
        <p class="mt-5 fs-3 text-uppercase">Discover the hidden worlds</p>
        <h1 class="display-1 fw-bolder text-capitalize">Sherpa World Adventures</h1>
        <button class="btn btn-primary px-4 py-2 fs-5 mt-4"><a href="tour-package.php" class="text-decoration-none text-white">Book & Tour</a></button> 
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 
<!-- destinations -->

<div class="dest-block">
<h1 class="mt-5 fs-2 text-center text-underline">Choose Your Destinations</h1><hr>

<div class="card-group">
  <div class="card">
    <img src="images/mountain.jpg" class="card-img-top  c-img" alt="...">
    <div class="card-img-overlay">
      <h1 class="text-center dest-title"><a href="#" class="text-decoration-none text-white text-bg-primary text-black fs-4 p-2">Mt. Everest</a></h1>
    </div>
  </div>
  <div class="card">
    <img src="images/swoyambhunath.jpg" class="card-img-top  c-img" alt="...">
    <div class="card-img-overlay">
      <h1 class="text-center dest-title"><a href="#" class="text-decoration-none text-white text-bg-primary text-black fs-4 p-2">Swoyambhunath</a></h1>
    </div>
  </div>
  <div class="card">
    <img src="images/temples.jpg" class="card-img-top  c-img" alt="...">
    <div class="card-img-overlay">
      <h1 class="text-center dest-title"><a href="#" class="text-decoration-none text-white text-bg-primary text-black fs-4 p-2">Bhaktapur</a></h1>
    </div>
  </div>
  </div>

  <div class="text-center mt-5">
 <h1><a href="destination.php" class="text-decoration-none text-black fs-5">See All Destinations <i class="fa-solid fa-arrow-right"></i></a></h1>
  </div>
  </div>


  <!-- Packages -->

  <div class="packages ">
<h1 class="mt-5 fs-2 text-center text-underline pt-5 text-white">Featured Packages</h1><hr>

<div class="card-group ">
  <div class="card">
    <img src="images/mountain.jpg" class="card-img-top pck-img" alt="...">
    <div class="card-img">
      <h1 class=" card-title "><a href="#" class="text-decoration-none text-black text-black fs-5 pck-title1">Everest Base Camp Private Trek</a></h1><br>
      <table>
        <tr>
        <td>DAYS</td>
        <td>PACKAGE COST</td>
        <td>PASSENGER</td>
        </tr>
        <tr>
          <th>15</th>
          <th><a href="#" class="text-decoration-none fs-5">Contact</a></th>
          <th>30</th>
        </tr>
      </table>
    </div>
  </div>
  <div class="card">
    <img src="images/swoyambhunath.jpg" class="card-img-top pck-img" alt="...">
    <div class="card-img">
      <h1 class="card-title"><a href="#" class="text-decoration-none text-black text-black fs-5 pck-title1">Kathmandu-Chitwan-Pokhara Tours</a></h1><br>
      <table>
        <tr>
        <td>DAYS</td>
        <td>PACKAGE COST</td>
        <td>PASSENGER</td>
        </tr>
        <tr>
          <th>15</th>
          <th><a href="#" class="text-decoration-none fs-5 ">Contact</a></th>
          <th>30</th>
        </tr>
      </table>
    </div>
  </div>
  <div class="card">
    <img src="images/temples.jpg" class="card-img-top pck-img" alt="...">
    <div class="card-img">
      <h1 class="card-title"><a href="#" class="text-decoration-none text-black text-black fs-5 pck-title1">Kathmandu Day Tours</a></h1><br>
      <table>
        <tr>
        <td>DAYS</td>
        <td>PACKAGE COST</td>
        <td>PASSENGER</td>
        </tr>
        <tr>
          <th>15</th>
          <th><a href="#" class="text-decoration-none fs-5">Contact</a></th>
          <th>30</th>
        </tr>
      </table>
    </div>
  </div>
</div>

<div class="text-center">
<button type="button" class="btn btn-primary pck-button p-3"><a href="tour-package.php" class="text-decoration-none text-white p-4 ">EXPLORE MORE</a></button>
</div>

<?php require_once 'service-popup.php'; ?>

<!-- testimonials -->

<!-- testimonials -->


<!-- footer -->
<?php require_once 'footer.php'; ?>

</body>
</html>