<!DOCTYPE html>
<html>
<title>IDO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<!-- panels -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <title>IDO</title>
</head>

<style>




/* Style the sub buttons */
.btn1 {
    border: none;
    outline: none;
    padding: 10px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
    font-size: 22px;
   border: 2px solid grey;

}

/* Style the active class, and buttons on mouse-over */
.active, .btn1:hover {
    background-color: #666;
    color: white;
}


@media screen and (max-width:600px){
.btn1{
  width: 117%;
  margin-left: -63px;
}
}

a
{
  color: black;
}




/*cards*/

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}


</style>


<body>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
  <br>
  <a href="dashboard.php" class="w3-bar-item w3-button" style="font-size: 18px;">DASHBOARD</a>
  <a href="adduser.php" class="w3-bar-item w3-button" style="font-size: 18px;">USER ACCOUNT</a>
  <a href="addchannels.php" class="w3-bar-item w3-button" style="font-size: 18px;">CHANNELS</a>
  <a href="addpowerpack.php" class="w3-bar-item w3-button" style="font-size: 18px;">POWER PACKS</a>
  <a href="addminipack.php" class="w3-bar-item w3-button" style="font-size: 18px;">MINI PACKS</a>
  <a href="alacarte.php" class="w3-bar-item w3-button" style="font-size: 18px;">A LA CARTE</a>
  <a href="broadcastersbouquet.php" class="w3-bar-item w3-button-active" style="font-size: 18px; color: #009688;"><b>BROADCASTERS BOUQUET</b></a>
  <br><br>
  <a href="login.php" class="w3-bar-item w3-button" style="font-size: 18px;">LOG-OUT</a>

</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>BROADCASTERS BOUQUET</h1>
  </div>
</div>



<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "15.5%";
  document.getElementById("mySidebar").style.width = "";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>
