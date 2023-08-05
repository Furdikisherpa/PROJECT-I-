<?php
session_start();
require_once "connection.php";
if(isset($_SESSION['loggedin'])){
$query = "SELECT * FROM registered_users WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$_SESSION['userid']]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// $_SESSION['data'] = $result;
// $data = $_SESSION['data'];
}

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
    
 <?php require_once "topbar.php" ?>
   

<?php  foreach ($result as $row) { ?>
<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-80">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="images/user (2).png"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-2">
                <div class="row pt-1">
                <!-- <div class="col-6 mb-2">
                    <h6>Userid</h6>
                    <p class="text-muted"><?php echo $row['user_id']; ?></p>
                  </div> -->
                  <h6>User Name</h6>
                    <p class="text-muted"><?php echo $row['username']; ?></p>
                  </div>
                  <div class="col-6 mb-2">
                    <h6>Name</h6>
                    <p class="text-muted"><?php echo $row['full_name']; ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $row['email']; ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Password</h6>
                    <p class="text-muted"><?php echo $row['password']; ?></p>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php }?>

</body>
</html>