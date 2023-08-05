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
    <!--favicon-->
    <link rel="icon"type="image/png" href="C:\xampp\htdocs\Project I\icons\logo-gray.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="style.css" >
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    <!-- Navbar -->
    <?php require_once 'topbar.php'; ?>
<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about us" class="about us">
    <div class="container">

    
        
      </div>


      <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="images/A.jpg" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4 d-none d-md-block">
        <!-- <p class="mt-5 fs-3 text-uppercase">Discover the hidden worlds</p> -->
      </div>
    </div>
</div>

<h1 class="text-center mt-4">About Us</h1>

    </div>
  </section--><!-- End About Section -->
  <div class="container">

    <!-- Page Heading -->
    <!-- <h1 class="my-4">
      <small>ABOUT US</small>
    </h1> -->

    <!-- Project One -->
    <div class="row">
      <div class="col-md-10">
        <a href="#">
          <img class="d" src="" alt="">
        </a>
      </div>
      <div class="col-md-9">
     
        <h3>Who we are</h3>
<p>Sherpa World Adventure is a leading adventure trips operating company operated by a highly qualified and experienced team specializing in arranging a wide range of travel services throughout Nepal, Tibet, Bhutan and India. The company is especially expertise in organizing full scale of Trekking, Mountain Expedition, Peak Climbing, Rafting, Tours, Jungle Safari, Mountain Biking, Mountain Flight, Paragliding and other various adventurous activities in the Himalayan regions of Nepal, Tibet, Bhutan and India. The company also specializes in tailoring trips and expeditions for family, individuals and groups who like to travel in a different way by customizing the trips.</p>
      
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="images\img-who-we-are.png" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Our Mission</h3>
        <p>Our mission is to provide a highly personalized and quality service to our valued clients by paying attention to all the factors that play important role into making a unique, memorable and rewarding journey of a life-time.

Apart from that being a company that involves in bringing people to the Himalayan land, we are also very much concerned and committed to preserve the pristine Himalayan environment that has been degrading in recent days due to the increased numbers of visitors to the area, and not being that environment friendly while doing / operating a trip.


      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="images\offer.png" alt="">
        </a>
      </div>
      <div class="col-md-19">
        <h3></h3>
        <p>We offer something for everyone at any age, skill or ability level. Therefore, If you are also looking for exciting and unique holiday trips in the Himalayas or elsewhere then, we are here to offer you an outstanding and a highly personalized trip to suit your time, interest and budget in order to make your once in a life-time journey completely different and memorable ones. So come and explore the Himalayan world and other dream destinations with us.</p>
        
  
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">

      <div class="col-md-7">
        <a href="#">
          <img class="img-fluid rounded mb-3 mb-md-0" src="images\why.jpg" alt="">
        </a>
      </div>
      <div class="col-md-5">
        <h3>Why with us</h3>
        <p>Sherpa World Adventure is an outdoor company established and operated by highly experienced and qualified team of Sherpas actively involved in the tourism field more than a decade. With our long experience in the field of tourism and travel industry, we understand the essence of any kinds of trips thoroughly whether that be, trekking, tour or mountain expeditions. Using our experience and expertise, we create unique and unforgettable journey for our clients by understanding their needs and interests.

Our field guides, cooks and other staffs are well trained, knowledgeable and they are quite familiar with the mountain and its surroundings environment and possess good skills of dealing with unpredictable situation as well just in case of need.</p>
       
      </div>
    </div>
  
    <div class="blockcode mt-4">

<footer class="page-footer shadow" style="margin-left:-90px;width:1300px">
  <div class="d-flex flex-column mx-auto py-5" style="width: 80%">
    <div class="d-flex flex-wrap justify-content-between">
      <div>
        <a href="/#" class="d-flex align-items-left p-0 text-secondary">
          <img alt="logo" src="icons/logo-gray.png" width="80px" />
          <span class="ms-3 h5 font-weight-bold">SHERPA WORLD ADVENTURE</span>
        </a>
        <p class="h5 mb-4" style="font-weight: 600"></p>
        <ul class="p-0" style="list-style: none; cursor: pointer">
          <li class="my-2">
            <a class="text-secondary text-decoration-none" href="/destination.php"><i class="fa fa-chevron-right" aria-hidden="true"></i> Destination</a>
          </li>
          <li class="my-2">
            <a class="text-secondary text-decoration-none" href="/tour-package.php"><i class="fa fa-chevron-right" aria-hidden="true"></i> Tour Packages</a>
          </li>
          <li class="my-2">
            <a class="text-secondary text-decoration-none" href="/"><i class="fa fa-chevron-right" aria-hidden="true"></i> Activities</a>
          </li>
          <li class="my-2"><a class="text-secondary text-decoration-none" href="/"><i class="fa fa-chevron-right" aria-hidden="true"></i> About Us</a></li>
          <li class="my-2"><a class="text-secondary text-decoration-none" href="/contactus.php"><i class="fa fa-chevron-right" aria-hidden="true"></i> Contact Us</a></li>
        </ul>
      </div>
      <div>
        <p class="h5 mb-4 text-secondary" style="font-weight: 600">SOCIAL ICONS</p>
        <ul class="p-0" style="list-style: none; cursor: pointer">
          <li class="my-2">
            <a class="text-secondary text-decoration-none" href="#"><img src="icons/facebook.png" alt="" width="30px"> Facebook</a>
          </li>
          <li class="my-2">
            <a class="text-secondary text-decoration-none" href="/"><img src="icons/instagram (1).png" alt="" width="30px"> Instagram</a>
          </li>
          <li class="my-2">
            <a class="text-secondary text-decoration-none" href="/"><img src="icons/viber.png" alt="" width="30px"> Viber</a>
          </li>
          <li class="my-2">
            <a class="text-secondary text-decoration-none" href="/"><img src="icons/whatsapp.png" alt="" width="30px"> Whatsapp</a>
          </li>
        </ul>
      </div>
      <div>
        <p class="h5 mb-4 text-secondary" style="font-weight: 600">GET IN TOUCH</p>
        <ul class="p-0" style="list-style: none; cursor: pointer">
          <li class="my-2">
            <a class="text-secondary text-decoration-none fs-5" href="/">Sherpa World Adventure Pvt.Ltd</a>
          </li>
          <li class="my-2">
            <a class="text-secondary text-decoration-none" href="/"><i class="fa fas fa-location-dot"></i> Boudha, Kathmandu, Nepal</a>
          </li>
          <li class="my-2">
            <a class="text-secondary text-decoration-none" href="/"> <i class="fa fas fa-phone"></i>+977 1 4253029</a>
          </li>
          <li class="my-2">
            <a class="text-secondary text-decoration-none" href="/"><i class="fa fas fa-mobile"></i>+977 9841697870</a>
          </li>
        </ul>
      </div>
    </div>
    
      <small class="text-secondary">&copy; Sherpa world adventures Pvt. Ltd., 2020. All rights reserved.</small>
    </div>
  </div>
</footer>
</div>

<!-- footer -->
</body>
</html>
    