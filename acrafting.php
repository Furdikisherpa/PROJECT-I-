<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <link rel="stylesheet" href="style.css" >
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
* {
  box-sizing:border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 15px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 1px;
}

.large-font {
  font-size: 32px;
}

.xlarge-font {
  font-size: 40px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #04AA6D;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}
</style>
</head>
<body  class="p-3 m-0 border-0 bd-example">

<?php require_once "topbar.php" ?>
<div style="text-align:center ">
  <h2></h2>
  <p>.</p>
</div>
<div class="carousel-inner" style="margin-top:-40px">
<img src="images/rafting.jpeg">
  


<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Rafting in Nepal</b></h1>
      <p> Nepal has many rivers for you to explore: Trishuli River (1 up to 3 days rafting/kayaking), Seti River (2 days rafting trip), Bhote Koshi River (1 day rafting trip), Kali Gandaki River (3 days rafting trip), Marsyandi River (1 to 2 days rafting/kayaking trip), Sun Koshi River (7 to 9 days rafting trip), Arun River (9 days rafting adventure combining with trek), Karnali River (10 days whitewater rafting and kayaking), Tamur River ( 10 to 11 days rafting adventure combining with 4 days trek).
The water is warm and Nepal houses the world’s most thrilling whitewater in a wide range of difficulties with bug free beaches for camping to top it off.

Our mountains, Rivers and everything inbetween creates a wealth of unlimited world class opportunities for great river rafting, kayaking, climbing, mountaineering, biking, hiking and the ever popular trekking adventures in Nepal. Nepal has something to offer to everyone.

We are proud to share our wonderful country, culture and our many years of experience adventuring across Nepal with you. We offer unique opportunity to explore Nepal’s remote  countryside from the river. </p>
    </div>
    <div class="column-33">
        <img src="images/raf.jpg" width="600" height="600">
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="container" style="background-color:#f1f1f1">
  <div class="row">
  <div class="column-33">
      <img src="images\raft.jpg"  width="335" height="600">
    </div>
    <div class="column-66" style="margin-top:-40px; margin-bottom:-50px">
      <h1 class="large-font" style="color:black; "><b>Best rafting place </b></h1>
      <p> 1. Trisuli River </p>
      <p> 2. Bhote Koshi river</p>
      <p> 3. kali ghandaki River </p>
      <p> 4. Marshandi  River </p>
      <p> 5. Seti River </p>
      <p> 6. sun koshi River <p>
      <p> 7. Karnali River </p> 
    </div>
  </div>
</div>

<!-- footer -->
<?php require "footer.php" ?>
</body>
</html>