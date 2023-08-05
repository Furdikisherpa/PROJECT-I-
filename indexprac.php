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

  <img src="images/cover-image.jpg" class="img-fluid" alt="Responsive image"  >

  <div style="text-align:center; margin-top:50px; margin-bottom:50px">
  <h3 >READY TO SPARK YOUR WONDERLUST AND FIND YOUR NEXT ADVENTURE</h3>
    <p><pre>        Well, you're in the right place. I'm here to make hiking, background camping and road trips easier so you car spend less time
        inside and more time outside. Whether you're a first-time hiker or a seasoned-vet, you'll be able to find new destination ides from 
        the Pacific North West and beyond, hiking tips & tricks, gear advice and more in my travel blog.    
    </pre></p>
  </div>

  <div style="width:1320px; height: 250px; margin-top:-10px" class="bg-primary"></div>
  <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="images/boudhanath.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Boudhanath</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/janak.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Janakpur</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/mustang-trek.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mustang</h5>
    </div>
  </div>
</div>

<?php require_once 'service-popup.php'; ?>

<!-- testimonials -->

<!-- testimonials -->


<!-- footer -->
<?php require_once 'footer.php'; ?>

</body>
</html>