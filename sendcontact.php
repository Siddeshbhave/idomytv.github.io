<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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



.container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 50px;
  margin: 16px 0
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  border-radius: 50%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}


.menu{
background: rgba(255,255,255, 0.3);   
  color: #f1f1f1;
  width: 100%;
  float: right;
  
  }

</style>
</head>
<body>

<body style="background-image: url(icons/wall3.jpg);">

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="login.php">LOG-OUT</a>
    <br>
    <a href="#">ABOUT IDO</a>
    <br>
    <a href="contact.php">CONTACT US</a>
  </div>
</div>

<div class="menu">
<a class="navbar-brand" href="index.php"><img src="icons/IDO_01.png" height="120" width="220" class="img-responsive margin center-block" alt="" style="float: left;margin-top: -5px;margin-left: -2px;" ></a>
<span style="font-size:27px;cursor:pointer; float:right; margin-top: 20px;margin-right: 10px;color: black" onclick="openNav()">&#9776; <b>Menu</b><span>
  </div><br><br>




<div class="container" style="margin-top: 20%; width: 50%; margin-left: 20%;">
  <img src="icons/IDO_01.png" alt="Avatar" style="width:100px;margin-left: 42%;">

 

  <p style="text-align: center; font-size: 20px;">"Thanks for connecting us! We will get in touch with you in shortly."</p>

  <!-- <h4 style="text-align: center;">Tap To:</h4>
  <a href=""><img style="margin-left: 37%;" src="icons/call1.png" height="10%"; width="10%";></a>
  <a href=""><img style="margin-left: 5%;" src="icons/mail.png" height="10%"; width="10%";></a> -->

</div>


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