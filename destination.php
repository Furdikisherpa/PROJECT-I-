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
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="icons/logo-gray.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link fw-bold" aria-current="page" href="destination.php"><i class="fa-solid fa-location-dot"></i> DESTINATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="tour-package.php"><i class="fa-sharp fa-solid fa-cube"></i></i>  TOUR PACKAGES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="activities.php"><i class="fa-sharp fa-solid fa-mountain-sun"></i> ACTIVITIES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="aboutus.php"><i class="fa-sharp fa-solid fa-person-hiking"></i></i></i> ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="contactus.php"><i class="fa-sharp fa-solid fa-phone"></i></i> CONTACT US</a>
            </li>
          </ul>
        </div>
  
 
        <div class="sign-in-up">
        <?php if(!isset($_SESSION["loggedin"])){ ?>
          <button class="btn btn-outline-secondary" type="sub"  onclick="popup('login-popup')">
        <i class="fa fa-user"></i></button>
        <?php }?>

        <?php if(isset($_SESSION["loggedin"])){ ?>
        <form action="logout.php" method="post">
        <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-user"></i> LOGOUT</button>
        </form>

        <?php  $name = isset($_SESSION["firstname"])? $_SESSION["firstname"] : " "; ?>
        <button style=" margin-top:1px; width:105px;" class="btn btn-primary"><a  style="text-decoration:none;" class="text-white" href="profile.php"><?php echo  substr($name,0,4); ; ?></a> </button>
        <?php }?>

        </div>
      </div>
    </nav>
    




<div class="popup-container" id="login-popup">
    <div class="popup">
        <form action="login_validate.php" method="post">
            <h2>
                <span>LOGIN</span>
                <button type="reset" onclick="popup('login-popup')">X</button>
            </h2>
            <input type="text" placeholder="Enter your email" name="user_email">
            <input type="password" placeholder="Enter your password" name="password">
            <div class="text"><a href="#">Forgot password?</a></div>
            <button type="submit" class="login-btn" name="login">SUBMIT</button>
            <input type="hidden" name="test" value="1">
            <div class="sign-up-text">Don't have an account? <a onclick="popup('register-popup')">Signup now</a></div>
        </form>
    </div>
</div>

<div class="popup-container" id="register-popup">
    <div class="register popup">
        <form action="login_register.php" method="post">
            <h2>
                <span>SIGN UP</span>
                <button type="reset" onclick="popup('register-popup')">X</button>
            </h2>
            <input type="text" placeholder="Full Name" name="fullname">
            <input type="text" placeholder="Username" name="username">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" class="register-btn" name="register">SIGN-UP</button>
            <div class="login-up-text">Already have an account? <a onclick="popup('register-popup')">Login now</a></div>
        </form>
    </div>
</div>

<script>
    function popup(popup_name)
    {
      get_popup=document.getElementById(popup_name);
      if(get_popup.style.display=="flex")
      {
        get_popup.style.display="none";
      }
      else
      {
        get_popup.style.display="flex";
      }
    }
</script>

<div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="images\mustang-trek.jpg" class="d-block w-100 c-img" alt="..." style="filter: brightness(65%);">
    </div>
    <div class="carousel-item c-item">
      <img src="images/mountain.jpg" class="d-block w-100 c-img" alt="...">
    </div>
    <div class="carousel-item c-item">
      <img src="images/temples.jpg" class="d-block w-100 c-img" alt="...">
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


      
 <!--destination -->
 <main class="my-5">
    <div class="container">
      <Section: Content>
      <section class="text-center">
    
        <h1 class="mb-5"strong>Destinations</h1>

             

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
          <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\b.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title">Kathmandu valley  Tour</h5>
                <!--<p class="card-text">
                Boudhanath also called Boudha is a stupa in Kathmandu, Nepal. Boudha stupa is semicircle shaped and contains the relics and remains of Buddha.
                </p>-->
                <a href="desktm.php" class="btn btn-light">View-details</a>
                
 
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
          <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\durbar.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <h5 class="card-title">Historical Tour </h5>
                <a href="des1history.php" class="btn btn-light">View-details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
          <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\chit.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title"> National park Tour</h5>
                <a href="desnational.php" class="btn btn-light">View-details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <!--<div class="col-lg-4 col-md-6 mb-4">
          <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\Pokhara.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">
                Pokhara’s spellbinding beauty has been the subject of many travel writers.Its pristine air,spectacular backdrop of the snowy peaks, the serene Phewa, Begnas and Rupa Lakes, makes this destination.
                </p>-->
                
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\Pokhara.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title"> Himalayan Tour</h5>
             <a href="#!" class="btn btn-light">view-details</a>
              </div>
            </div>
          </div>

          <!--<div class="col-lg-4 col-md-6 mb-4">
          <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\sc.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">-->
                
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\village.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title">Village Tour</h5>
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
                <img src="images\nnnn.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title">Sunrise Tour</h5>
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
      <!--Section: Content-->
     
  <!--Main layout-->


    </div>
    </div>

    <!-- Copyright -->

    <!-- Copyright -->
  <footer>
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
<div class="blockcode mt-4">
  <footer class="page-footer shadow">
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
          <p class="h5 mb-4 text-secondary" style="font-weight: 600">Social icons</p>
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
  </body>
</html>
 

  