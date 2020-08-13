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


</head>

<style>

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 10px;
}

select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 10px;
}

.btn {
  background-color: #1b476e;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 49.6%;
  font-size: 20px;
}

.btn:hover {
  opacity: 0.9;
  color: white;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
  width: 50%;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

@media screen and (max-width: 600px){
  .container{
    width: 100%;
  }
  .btn{
    width: 100%;
  }
}

</style>


<body>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
  <br>
  <a href="dashboard.php" class="w3-bar-item w3-button" style="font-size: 18px;">DASHBOARD</a>
  <a href="adduser.php" class="w3-bar-item w3-button-active" style="font-size: 18px; color: #009688;"><b>USER ACCOUNT</b></a>
  <a href="addchannels.php" class="w3-bar-item w3-button" style="font-size: 18px;">CHANNELS</a>
  <a href="broadcastersbouquet.php" class="w3-bar-item w3-button" style="font-size: 18px;">BROADCASTERS BOUQUET</a>
  <a href="addpowerpack.php" class="w3-bar-item w3-button" style="font-size: 18px;">POWER PACKS</a>
  <a href="addminipack.php" class="w3-bar-item w3-button" style="font-size: 18px;">MINI PACKS</a>
  <a href="alacarte.php" class="w3-bar-item w3-button" style="font-size: 18px;">A LA CARTE</a>
  <br><br>
  <a href="login.php" class="w3-bar-item w3-button" style="font-size: 18px;">LOG-OUT</a>

</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>USER ACCOUNT  <i class="fa fa-users" style="font-size:48px;color:white"></i></h1>
  </div>
</div>



<!-- form -->
<form action="">

  <div class="container" style="margin-top: 30px;">
    <h1 style="text-align: center;margin-bottom: 30px;">New User Creation</h1>

    <label for="category"><b style="font-size: 17px;">Category</b></label>
    <select style="width: 100%;" required="">
      <option hidden="" value="">SELECT</option>
      <option value="group">GROUP</option>
      <option value="mso">MSO</option>
      <option value="distributor">DISTRIBUTOR</option>
      <option value="subdistributor">SUBDISTRIBUTOR</option>
      <option value="lco">LCO</option>
    </select>

    <label for="userid"><b style="font-size: 17px;">User Id</b></label>
    <input type="text" placeholder="Enter User Id" name="uname" required>

    <label for="category"><b style="font-size: 17px;">User Type</b></label>
    <select style="width: 100%;" required="">
      <option hidden="" value="">SELECT</option>
      <option value="web">WEB USER</option>
      <option value="mobile">MOBILE USER</option>
      </select>

    <label for="psw"><b style="font-size: 17px;">Password</b></label>
    <input type="text" placeholder="Enter Password" name="psw" required>

    <label for="psw"><b style="font-size: 17px;">Confirm Password</b></label>
    <input type="text" placeholder="Enter Password" name="psw" required>

    <label for="phone"><b style="font-size: 17px;">Phone No.</b></label>
    <input type="text" placeholder="Enter Mobile No." minlength="10" maxlength="10" onkeypress="return validatePhone(event);" name="psw" required>

    <label for="email"><b style="font-size: 17px;">Email id</b></label>
    <input type="text" placeholder="Enter Email id" name="psw" required>
        
    <button class="btn" type="submit">Submit</button>
    <a href="adduser.php"><button class="btn" type="button" class="cancelbtn">Cancel</button></a>
  </div>

</form>



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


<script type="text/javascript">
  function validatePhone(event) {

    //event.keycode will return unicode for characters and numbers like a, b, c, 5 etc.
    //event.which will return key for mouse events and other events like ctrl alt etc. 
    var key = window.event ? event.keyCode : event.which;

    if(event.keyCode == 8 || event.keyCode == 46 || event.keyCode == 37 || event.keyCode == 39) {
      // 8 means Backspace
      //46 means Delete
      // 37 means left arrow
      // 39 means right arrow
      return true;
    } else if( key < 48 || key > 57 ) {
      // 48-57 is 0-9 numbers on your keyboard.
      return false;
    } else return true;
  }
</script>

</body>
</html>