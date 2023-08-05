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
  <link rel="stylesheet" href="activities.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="style.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    <!-- Navbar -->
        
       <?php require_once 'topbar.php'; ?>


    <div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="images/rafting.jpeg" class="d-block w-100 c-img" alt="...">
      
    </div>

</div>
   
</div>

<h1 class="text-center mt-4">Activities</h1>

  <!-- Page Heading -->
  <main class="my-5">
    <div class="container">
      <Section: Content>
      <section class="text-center">

  <!-- Pagination -->
  <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
          <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\reaft.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title">Rafting</h5>
                <!--<p class="card-text">
                Boudhanath also called Boudha is a stupa in Kathmandu, Nepal. Boudha stupa is semicircle shaped and contains the relics and remains of Buddha.
                </p>-->
                <a href="acrafting.php" class="btn btn-light">View-details</a>
                
 
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
          <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\bungee.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <h5 class="card-title">Bungee jumping</h5>
                <a href="des1history.php" class="btn btn-light">View-details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
          <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\T.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title">Trekking</h5>
                <a href="desnational.php" class="btn btn-light">View-details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
                
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\para.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title">Paragliding</h5>
             <a href="#!" class="btn btn-light">view-details</a>
              </div>
            </div>
          </div>
                
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\chit.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title">Jungle safari</h5>
              <!--<p class="card-text">
                Solukhumbu district that lies in the eastern Himalayan region of Nepal known for its trail for the expedition to Everest Base Camp. This district is Nepal’s major destination for mountain tourism.
                </p>-->
              <a href="#!" class="btn btn-light">View-details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\flight.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class> Mountain Flight</h5>
         <!-- <p class="card-text">
                Siddhartha Gautama, the Lord Buddha, was born in 623 B.C. in the famous gardens of Lumbini, which soon became a place of pilgrimage. 
             It  is one of the  most holiest places
             </p>-->
                <a href="#!" class="btn btn-light">View-details</a>
              </div>
            </div>
          </div>
        </div>
      </section>


  </div>


<!-- footer -->
<?php require_once 'footer.php'; ?>
</body>
</html>

        