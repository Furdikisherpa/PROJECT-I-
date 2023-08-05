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

if(isset($_SESSION["booked"])){
  echo"
  <script>
      alert('Your package is booked!!!');
      window.location.href = 'tour-package.php';
  </script>
  ";
  unset ($_SESSION["booked"]);
}

require_once 'connection.php';
$query = "SELECT * FROM package";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(isset($_SESSION['loggedin'])){
  unset($_SESSION['notloggedin']);
}
else{
  $_SESSION['notloggedin']=1;
}


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
    <link rel="stylesheet" href="tour-package.css";>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      #anchor{
        text-decoration: none;
      }
    </style>

  </head>
  <body class="p-3 m-0 border-0 bd-example">
    
  <?php require_once 'topbar.php'; ?>


<div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active c-item">
      <img src="images/tour-main-img.jpg" class="d-block w-100 c-img" alt="...">
    </div>
</div>

<h1 class="text-center mt-4">Tour Packages</h1>
<!--package-->
<p style="text-align:center; margin-top: 20px;  font-size: 20px">Please do contact us for more information and booked package cancellation.</p>

<img src="/" alt="">

            <table id="t2">
      
            <div id="table data">
                <?php foreach ($result as $single){?>
                 
                    <tr>
                        <td rowspan="3" style="width:90px;">
                        <!-- <img src="pimage/"<?php echo $single["Photo"];?>" alt="" height="150px" width="150px"> -->
                        <img src="pimage/<?php echo $single["Photo"];?>" alt="" height="150px" width="150px">
  
                      </td>
                        <td colspan="5" style="font-size:30px; font-weight:Bold;">
                         <?php echo $single["Title"];?><hr>
                        </td>
                        
                        
                    </tr>
                    <tr >
                      <td rowspan="2" style="width:700px; Max-width:700px; font-style:italic; border-right:1px solid rgb(184, 181, 181);"><?php echo $single["Description"];?></td>
                        <th class="text-center" style="font-size:15px;">Days</th>
                        <th class="text-center" style="font-size:15px;">Cost</th>
                        <th class="text-center" style="font-size:15px;">Passenger</th>
                        <td><button class="btn btn-secondary mt-1"><a href="destination.php" style="text-decoration:none; color:white;">VIEW MORE PLACES</a></button></td>
                        
                    </tr>
                    <tr class="text-center " >
                        <th style="font-size:20px; text-align:center;">
                    <?php echo $single["Days"];?>
                        </th>
                        <th style="font-size:20px; text-align:center;">
                            <?php echo $single["Cost"];?>
                        </th>
                        <th style="font-size:20px; text-align:center;">
                            <?php echo $single["Passenger"];?>
                        </th>
                        <td>

                      
                        <form action="Admin/dboard/book_handle.php" method="post">
                          <input type="hidden" value="<?php echo $single['package_id'];?>" name="pid">
                        <button type="submit" class="btn btn-primary " style="width:170px" 
                        
                        <?php echo (isset($_SESSION['notloggedin']))? "disabled" : "";?>

                        ><a id="anchor" class="text-white" >Book Now</a></button>

                        </form>
                        </td>
                        </tr>
                    
                <?php } ?>
                </div>

            
                </table>
        

<?php require_once 'footer.php'; ?>

  </body>
  </html>
   