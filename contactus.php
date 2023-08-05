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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example">

  <?php require_once 'topbar.php'; ?>

<div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="images/istockphoto-1418045846-170667a.webp" class="d-block w-100 c-img" alt="...">
      <div class="carousel-caption top-0 mt-4 d-none d-md-block">
        <!-- <p class="mt-5 fs-3 text-uppercase">Discover the hidden worlds</p> -->

      </div>
    </div>

</div>
<h1 class="text-center mt-4">Contact Us</h1>

<!--Section: Contact v.2-->
<section class="">
    <!--Section heading-->

    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row ">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-6">
            <form id="contact-form" name="contact-form" action="contact_entry.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!-- Grid column -->
                <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="number" name="number" class="form-control">
                            <label for="subject" class="">Mobile No.</label>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Enquiry</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            

            <div class="text-center text-md-left-3">
                <!-- <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a> -->
                <input type="submit" value="Send" name="submit" class="btn btn-primary">
            </div>
            <div class="status"></div>
        </div>
        </form>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Boudha, Kathmandu, Nepal</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>sherpaworldadven12@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

<!-- map -->


<!-- map -->

<!-- footer -->
<?php require_once 'footer.php'; ?>
<!-- footer -->
</body>
</html>