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
    <title>Bootstrap Example</title>
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
        <?php }?>

        </div>
      </div>
    </nav>
    


<?php if(isset($_SESSION["loggedin"])){ ?>
   <?php  $name = isset($_SESSION["firstname"])? $_SESSION["firstname"] : " "; ?>
   <p> <?php echo "Hi, " . $name . " you are logged in."; ?> </p>
    <?php }?>


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



<main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center">
    
        <h4 class="mb-5"><strong> NATIONAL PARK DESTINATIONS</strong></h4>
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
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
                <h5 class="card-title">Chitwan National Park</h5>
                <!--<p class="card-text">
                Boudhanath also called Boudha is a stupa in Kathmandu, Nepal. Boudha stupa is semicircle shaped and contains the relics and remains of Buddha.
                </p>-->
                <a href="ktm.php" class="btn btn-light">View-details</a>
                
 
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
          <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\sagar.webp" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <h5 class="card-title">Sagarmatha National Park</h5>
                <a href="#!" class="btn btn-light">View-details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
          <div class="card bg-light text-dark">
    <div class="card-body"></div>
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\L.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title">langtang National Park</h5>
                <a href="#!" class="btn btn-light">View-details</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
     
                
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\S.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title"> Shey Phuksundo National Park</h5>
             <a href="#!" class="btn btn-light">view-details</a>
              </div>
            </div>
          </div>


                
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\Rara.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title">Rara National Park</h5>
           
              <a href="#!" class="btn btn-light">View-details</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="images\bhardi.jpeg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card bg-light text-dark">
    <div class="card-body"></div>
                <h5 class="card-title"> Bardiya National Park</h5>
   
                <a href="#!" class="btn btn-light">View-details</a>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!--Section: Content-->

      <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#"tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="destination.php">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="destination.php">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </main>
  <!--Main layout-->


    </div>

    <hr class="m-0" />

    
    </div>

    <!-- Copyright -->

    <!-- Copyright -->
  </footer>
  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
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
 

  