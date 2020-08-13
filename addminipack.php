<!DOCTYPE html>
<html>
<title>IDO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    <!-- table pagination -->
  <meta name="description" content="Bootstrap.">  
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

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



.w3-border-green, .w3-hover-border-green:hover {
    border-color: #337ab7!important;
}



input[type=text], input[type=password] {
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


.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td{
  border: none;
}

.table-striped>tbody>tr:nth-child(odd)>td,{
  background-color: none;
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
  <a href="addminipack.php" class="w3-bar-item w3-button-active" style="font-size: 18px; color: #009688;"><b>MINI PACKS</b></a>
  <a href="alacarte.php" class="w3-bar-item w3-button" style="font-size: 18px;">A LA CARTE</a>
  <a href="broadcastersbouquet.php" class="w3-bar-item w3-button" style="font-size: 18px;">BROADCASTERS BOUQUET</a>
  <br><br>
  <a href="login.php" class="w3-bar-item w3-button" style="font-size: 18px;">LOG-OUT</a>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>MINI PACKS  <i class="material-icons" style="font-size:36px; color: white">queue</i></h1>
  </div>
</div>




<div id="myDIV" style="margin-left: 26%; margin-top: 6%;">

   <a href="javascript:void(0)" onclick="openCity(event, 'London');">
  <button class="btn1  active">MINI-PACKS </button></a>
   <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
  <button class="btn1">ADD MINI-PACKS</button></a>
  <a href="javascript:void(0)" onclick="openCity(event, 'Uk');">
  <button class="btn1">Delete MINI-PACKS</button></a>
</div>

<!-- 

    <div class="w3-row" style="margin-top: 8%">
    <a href="javascript:void(0)" onclick="openCity(event, 'London');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 20%"><button class="button button5"><h5>POWER-PACKS</h5></button></div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 20%"><button class="button button5"><h5>MINI-PACKS</h5></button></div>
    </a>
    <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');">
      <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding" style="width: 20%"><button class="button button5"><h5>A LA CARTE</h5></button></div>
    </a>
  </div> -->

<div id="London" class="w3-container city" style="display:none;">


  <div class="content" style="margin-top: 30px;margin-bottom: 50px;">

<table id="Tab1" class="table table-striped" style="overflow-x: auto;">  
        <thead>  
          <tr>  
            <th>Sr No.</th>  
            <th>Mini-Pack Channels Name</th>  
            <th>Description</th>  
            <th>Fees</th> 
          </tr>  
        </thead>  
        <tbody>  
          <tr>  
            <td>001</td>  
            <td>Zee Kannada</td>  
            <td>GEC</td>  
            <td style="float: right;">19</td>  
          </tr>  
          <tr>  
            <td>002</td>  
            <td>Colors Kannada</td>  
            <td>GEC</td>  
            <td style="float: right;">19</td> 
          </tr>  
          <tr>  
            <td>003</td>  
            <td>Colors Super</td>  
            <td>GEC</td>  
            <td style="float: right;">14</td>
          </tr>  
       <tr>  
            <td>004</td>  
            <td>Colors Gujarati</td>  
            <td>GEC</td>  
            <td style="float: right;">5</td>
          </tr>  
          <tr>  
            <td>005</td>  
            <td>News18 Urdu</td>  
            <td>NCA</td>  
            <td style="float: right;">1</td>
          </tr>  
          </tbody>  
      </table>  
      </div>


<script>
$(document).ready(function(){
    $('#Tab1').dataTable();
});
</script>


<div class="content" style="margin-top: 30px;margin-bottom: 50px;">

<table id="Tab" class="table table-striped" style="overflow-x: auto;">  
        <thead>  
          <tr>  
            <th>Sr No.</th>  
            <th>Mini-Pack Channels Name</th>  
            <th>Description</th>  
            <th>Fees</th> 
          </tr>  
        </thead>  
        <tbody>  
          <tr>  
            <td>001</td>  
            <td>News18 Kannada</td>  
            <td>NCA</td>  
            <td style="float: right;">0.5</td>  
          </tr>  
          <tr>  
            <td>002</td>  
            <td>Colors Kannada</td>  
            <td>GEC</td>  
            <td style="float: right;">19</td> 
          </tr>  
          <tr>  
            <td>003</td>  
            <td>Kannada Cinema</td>  
            <td>Movies</td>  
            <td style="float: right;">1</td>
          </tr>  
       <tr>  
            <td>004</td>  
            <td>Rishtey</td>  
            <td>GEC</td>  
            <td style="float: right;">1</td>
          </tr>  
          <tr>  
            <td>005</td>  
            <td>Cineplex</td>  
            <td>Movies</td>  
            <td style="float: right;">8</td>
          </tr> 
          </tbody>  
      </table>  
      </div> 


<script>
$(document).ready(function(){
    $('#Tab ').dataTable();
});
</script>

</div>


</div>


  <div id="Paris" class="w3-container city" style="display:none">
    

<!-- form -->
<form action="">

  <div class="container" style="margin-top: 30px;">

<fieldset>
  <legend><b style="font-size: 30px">Mini-Packs</b></legend>
<br>
   <label for="userid"><b style="font-size: 17px;">Mini-Pack Name:</b></label>
    <input type="text" placeholder="Enter pack name" name="uname" required>


<br><br><br>
     <label for="userid"><b style="font-size: 17px;">Mini-Pack ID:</b></label>
    <input type="text" placeholder="Enter pack Id" name="uname">


     <label for="userid"><b style="font-size: 17px;">Channel Name:</b></label>
    <input type="text" placeholder="Enter channel name" name="uname">


     <label for="userid"><b style="font-size: 17px;">Price:</b></label>
    <input type="text" placeholder="Enter price" name="uname">
</fieldset>
  <button class="btn" type="submit">Add</button>
    <a href="addminipack.php"><button class="btn" type="button" class="cancelbtn">Cancel</button></a>
 <br><br>


     <label for="userid"><b style="font-size: 17px;">Mini-Pack ID:</b></label>
    <input type="text" placeholder="Enter pack Id" name="uname">


     <label for="userid"><b style="font-size: 17px;">Channel Name:</b></label>
    <input type="text" placeholder="Enter channel name" name="uname">


     <label for="userid"><b style="font-size: 17px;">Price:</b></label>
    <input type="text" placeholder="Enter price" name="uname">
</fieldset>
  <button class="btn" type="submit">Add</button>
    <a href="addminipack.php"><button class="btn" type="button" class="cancelbtn">Cancel</button></a>

 <br><br>
     <label for="userid"><b style="font-size: 17px;">Mini-Pack ID:</b></label>
    <input type="text" placeholder="Enter pack Id" name="uname">


     <label for="userid"><b style="font-size: 17px;">Channel Name:</b></label>
    <input type="text" placeholder="Enter channel name" name="uname">


     <label for="userid"><b style="font-size: 17px;">Price:</b></label>
    <input type="text" placeholder="Enter price" name="uname">
</fieldset>
  <button class="btn" type="submit">Add</button>
    <a href="addminipack.php"><button class="btn" type="button" class="cancelbtn">Cancel</button></a>

    <br><br>


     <label for="userid"><b style="font-size: 17px;">Mini-Pack ID:</b></label>
    <input type="text" placeholder="Enter pack Id" name="uname">


     <label for="userid"><b style="font-size: 17px;">Channel Name:</b></label>
    <input type="text" placeholder="Enter channel name" name="uname">


     <label for="userid"><b style="font-size: 17px;">Price:</b></label>
    <input type="text" placeholder="Enter price" name="uname">
</fieldset>
  <button class="btn" type="submit">Add</button>
    <a href="addminipack.php"><button class="btn" type="button" class="cancelbtn">Cancel</button></a>

 <br><br>
     <label for="userid"><b style="font-size: 17px;">Mini-Pack ID:</b></label>
    <input type="text" placeholder="Enter pack Id" name="uname">


     <label for="userid"><b style="font-size: 17px;">Channel Name:</b></label>
    <input type="text" placeholder="Enter channel name" name="uname">


     <label for="userid"><b style="font-size: 17px;">Price:</b></label>
    <input type="text" placeholder="Enter price" name="uname">
</fieldset>
  <button class="btn" type="submit">Add</button>
    <a href="addminipack.php"><button class="btn" type="button" class="cancelbtn">Cancel</button></a>

    <br><br>


     <label for="userid"><b style="font-size: 17px;">Mini-Pack ID:</b></label>
    <input type="text" placeholder="Enter pack Id" name="uname">


     <label for="userid"><b style="font-size: 17px;">Channel Name:</b></label>
    <input type="text" placeholder="Enter channel name" name="uname">


     <label for="userid"><b style="font-size: 17px;">Price:</b></label>
    <input type="text" placeholder="Enter price" name="uname">
</fieldset>
  <button class="btn" type="submit">Add</button>
    <a href="addminipack.php"><button class="btn" type="button" class="cancelbtn">Cancel</button></a>

 <br><br>
     <label for="userid"><b style="font-size: 17px;">Mini-Pack ID:</b></label>
    <input type="text" placeholder="Enter pack Id" name="uname">


     <label for="userid"><b style="font-size: 17px;">Channel Name:</b></label>
    <input type="text" placeholder="Enter channel name" name="uname">


     <label for="userid"><b style="font-size: 17px;">Price:</b></label>
    <input type="text" placeholder="Enter price" name="uname">
</fieldset>
  <button class="btn" type="submit">Add</button>
    <a href="addminipack.php"><button class="btn" type="button" class="cancelbtn">Cancel</button></a>


</form>
</div>

  </div>



<div id="Uk" class="w3-container city" style="display:none;">


<h1>jsakdf;sdf</h1>

  </div>

<script>
// Add active class to the current button (highlight it)
 document.getElementsByClassName("w3-container city")[0].click();
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn1");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

  <script>
  document.getElementsByClassName("btn1")[0].click();
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("btn1");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-green", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-green";

}
</script>



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
