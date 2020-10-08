<!DOCTYPE html>
<html lang="en">
<head>
    <title>Icecream Parlour</title>
    <link rel="stylesheet" href="home1.css">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script> 
</head>
<body>
<?php include("menu.php")?>
<br><br><br><br><br><br>
<!-- <div id="one"></div> -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" style="width: 100%;height: 500px;"src="2.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" style="width: 100%;height: 500px;" src="2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" style="width: 100%;height: 500px;" src="4.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" style="width: 100%;height: 500px;" src="5.jpg" alt="Second slide">
            </div>  
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>     
<div >
<br><br><br>
  <h1 style="text-align:center">Portfolio</h1>
  <br><br><br>
  <div class="row" style="margin-left:5%;">
  <div class="column">
    <img src="p2.jpg" alt="Snow" >
  </div>
  <div class="column">
    <img src="port1.jpg" alt="Forest" >
  </div>
  <div class="column">
    <img src="p3.jpg" alt="Mountains" >
  </div>
</div>
</div><br><br><br><br>
<div class="mylogin">
<br><br><br>
<h2>Stay in touch with for the latest trends and alerts</h2><br>
    <input type="email" class="fcontrol" placeholder="Email Address" name="email"><br><br>
    <button class="btn" style="background-color:yellow;">Join</button><br><br><br>
</div>
<?php include("footer.php")?>

</body>
</html>