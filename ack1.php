<!DOCTYPE html>
<html>
<head>
  
  <title>IDO</title>

   <!-- nav -->
      <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- nav -->
</head>

<style>

body {
    font-family: 'Lato', sans-serif;
}

 

@media screen and (max-width:600px){
.content{
  margin-top: 30%;
}
}  




</style>

  <body style="background-image: url(icons/wall3.jpg);">

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="navbar" style="background-color: #f1f1f1; color: #173579;font-size: 17px;" id="myNavbar">
    <a href="index.php" class="w3-bar-item w3-button w3-wide"><img src="icons/IDO_01.png" height="90" width="170" class="img-responsive margin center-block" alt=""></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small" style="margin-top: 23px;">
      <a href="consumer.php" class="w3-bar-item w3-button" style="text-decoration: none;">CONSUMER CHARTER</a>
      <a href="contact.php" class="w3-bar-item w3-button" style="text-decoration: none;">CONTACT US</a>
      <a href="login.php" class="w3-bar-item w3-button" style="text-decoration: none;">LOG-OUT</a>
      
      
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars" style="font-size: 20px;"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="consumer.php" onclick="w3_close()" class="w3-bar-item w3-button">CONSUMER CHARTER</a>
  <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT US</a>
  
</nav>


<br><br><br>


  <div class="content">

    <!-- <h1 style="margin-top: 15%;">ACKNOWLEDGEMENT</h1> -->
    <h1 style="color: #4F6FA7; animation-delay: 0s; padding-top: 10%">

      <b>ACKNOWLEDGEMENT</b>
    </h1>

    <h3 style="text-align: left;margin-right: 20px;margin-left: 20px;background-color: #ADCDEA; padding: 10px 10px 10px 10px;">

       <p>•  Dear Subscriber</p>
       <p>We acknowledge with thanks your requests . The same are being processed and will be executed as per your instructions.</p>
       <p style="margin-top: 50px;">In case the Service requirement remains unfulfilled , please connect with us on____________quoting above Number</p>
    </h3>




    
  </div>



<script>

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>