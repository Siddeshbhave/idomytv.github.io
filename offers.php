<!DOCTYPE html>
<html>

   <head>
   	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <title>IDO</title>

   </head>
<style>
  
body {
    font-family: 'Lato', sans-serif;

}

.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #ef3939;/*#f1f1f1*/
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}


@media screen and (max-height: 600px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
  .navbar-brand{
    float: left;
  }
}

@media screen and (max-height: 600px) {
  .content{
    margin-bottom: -30%;
  }
}

.menu{
background: rgba(255,255,255, 0.4);   
  color: #f1f1f1;
  width: 100%;
  float: right;
  height: 100px;
  
  }

</style>

   <body>


    <body style="background-image: url(icons/wall4.png);">

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="login.php">LOG-IN</a>
    <br>
    <a href="register.php">REGISTER</a>
    <br>
    <a href="aboutus.php">ABOUT IDO</a>
    <br>
    <a href="contact.php">CONTACT US</a>
  </div>
</div>


<div class="menu">
<a class="navbar-brand" href="index.php"><img src="icons/IDO_01.png" height="120" width="220" class="img-responsive margin center-block" alt="" style="float: left; margin-top: -20px; margin-left: -10px; " ></a>
<!-- <a class="navbar-brand" href="index.php"><img src="icons/asianet_ecost.png" height="110" width="240"  class="img-responsive margin center-block"  alt="" style="margin-left: 24%;"></a> -->
<span  style="font-size:27px;cursor:pointer; float:right; margin-top: 25px; color: black; margin-right: 8px;" onclick="openNav()">&#9776; <b>Menu</b></span>
  </div><br><br><br>


      <marquee behavior="alternate" scrollamount="15"><img src="icons/hot_offers.gif" /></marquee>

      <!-- <marquee behavior="alternate" scrollamount="15"><img src="icons/hotoffer.png" height="20%" width="20%" style="margin-left: 10%;" /></marquee> -->


     <!-- Place somewhere in the <body> of your page -->
<div class="flexslider carousel">
  <ul class="slides">
    <li>
      <img src="icons/movie.png" />
    </li>
    <li>
      <img src="icons/movie.png" />
    </li>
    <li>
      <img src="icons/movie.png" />
    </li>
    <li>
      <img src="icons/movie.png" />
    </li>
    <!-- items mirrored twice, total of 12 -->
  </ul>
</div>


<script>
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,
    itemMargin: 5
  });
});
</script>




<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>

   </body>
</html>