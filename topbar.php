<div>
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
</div>