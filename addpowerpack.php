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
  margin-left: -89px;
}
}

a
{
  color: black;
}


.w3-border-green, .w3-hover-border-green:hover {
    border-color: #337ab7!important;
}



.button {
  background-color: #5E3C58; /* Green */
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  margin-top: 30px;
}

.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>


<body>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
  <br>
  <a href="dashboard.php" class="w3-bar-item w3-button" style="font-size: 18px;">DASHBOARD</a>
  <a href="adduser.php" class="w3-bar-item w3-button" style="font-size: 18px;">USER ACCOUNT</a>
  <a href="addchannels.php" class="w3-bar-item w3-button" style="font-size: 18px;">CHANNELS</a>
  <a href="addpowerpack.php" class="w3-bar-item w3-button-active" style="font-size: 18px; color: #009688;"><b>POWER PACKS</b></a>
  <a href="addminipack.php" class="w3-bar-item w3-button" style="font-size: 18px;">MINI PACKS</a>
  <a href="alacarte.php" class="w3-bar-item w3-button" style="font-size: 18px;">A LA CARTE</a>
  <a href="broadcastersbouquet.php" class="w3-bar-item w3-button" style="font-size: 18px;">BROADCASTERS BOUQUET</a>
  <br><br>
  <a href="login.php" class="w3-bar-item w3-button" style="font-size: 18px;">LOG-OUT</a>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>POWER PACKS  <i class="material-icons" style="font-size:48px;color:white">queue</i></h1>
  </div>
</div>




<div id="myDIV" style="margin-left: 42%; margin-top: 6%;">

   <a href="javascript:void(0)" onclick="openCity(event, 'London');">
  <button class="btn1  active">ADD BOUQUET </button></a>
<!--    <a href="javascript:void(0)" onclick="openCity(event, 'Paris');">
  <button class="btn1">UPDATE USER</button></a>
   <a href="javascript:void(0)" onclick="openCity(event, 'Tokyo');">
  <button class="btn1">DELETE USER</button></a>
  <a href="javascript:void(0)" onclick="openCity(event, 'New-york');">
  <button class="btn1">VIEW USER</button></a> -->
</div>




<div id="London" class="w3-container city" style="display:none;">
  
<a href="newbouquet.php"><button class="button button2">Add Bouquet</button></a>  
<button class="button button2" style="float: right;">Generate Excel</button>

<div class="content" style="margin-top: 30px;margin-bottom: 50px;">

<table id="Tab1" class="table table-striped" style="overflow-x: auto;">  
        <thead>  
          <tr>  
            <th>Sr No.</th>  
            <th>Bouquet Name</th>  
            <th>Bouquet Code</th>  
            <th>Bouquet Status</th>
            <th>Bouquet Category</th>  
          </tr>  
        </thead>  
        <tbody>  
          <tr>  
            <td>001</td>  
            <td>FTA-2</td>  
            <td>11</td>  
            <td>Active</td>
            <td>Basic</td>  
          </tr>  
          <tr>  
            <td>002</td>  
            <td>GOLD-2</td>  
            <td>12</td>  
            <td>Active</td>
            <td>Basic</td> 
          </tr>  
          <tr>  
            <td>003</td>  
            <td>HD SILVER-2</td>  
            <td>13</td>  
            <td>Active</td> 
            <td>Basic</td>
          </tr>  
       <tr>  
            <td>004</td>  
            <td>HD GOLD-2</td>  
            <td>14</td>  
            <td>Active</td> 
            <td>Basic</td>
          </tr>  
          <tr>  
            <td>005</td>  
            <td>FTA-3</td>  
            <td>15</td>  
            <td>Active</td>
            <td>Basic</td>
          </tr>  
          <tr>  
            <td>006</td>  
            <td>ADDON PACK-1</td>  
            <td>16</td>  
            <td>Active</td> 
            <td>Basic</td>
          </tr>  
      
       <tr>  
            <td>007</td>  
            <td>ADDON PACK-2</td>  
            <td>17</td>  
            <td>Active</td>
            <td>Addon</td> 
          </tr>  
          <tr>  
            <td>008</td>  
            <td>ADDON PACK-3</td>  
            <td>18</td>  
            <td>Active</td>
            <td>Basic</td>
          </tr>  
          <tr>  
            <td>009</td>  
            <td>ADDON PACK-4</td>  
            <td>19</td>  
            <td>Active</td>
            <td>Addon</td>
          </tr>  
      
        <tr>  
            <td>010</td>  
            <td>Marathi Base(49)</td>  
            <td>20</td>  
            <td>Active</td>
            <td>Basic</td>
          </tr>  
          <tr>  
            <td>011</td>  
            <td>Bouquet-1</td>  
            <td>21</td>  
            <td>Active</td>
            <td>Addon</td>
          </tr>  
          <tr>  
            <td>012</td>  
            <td>Bouquet-2</td>  
            <td>22</td>  
            <td>Active</td>
            <td>Addon</td>
          </tr>  
        </tbody>  
      </table>  
      </div>

<script>
$(document).ready(function(){
    $('#Tab1').dataTable();
});
</script>

</div>


<!--   <div id="Paris" class="w3-container city" style="display:none">
    
 
<h1>oiuojzlkcmzlkjczoijdfklm</h1>

  </div>



  <div id="Tokyo" class="w3-container city" style="display:none">

<h1>ioqwuroidnjn</h1>

  </div>

  <div id="New-york" class="w3-container city" style="display:none;">


<h1>jsakdf;sdf</h1>

  </div> -->

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
