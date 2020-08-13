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
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
  width: 100%;
}

span.psw {
  float: right;
  padding-top: 16px;
}


.button{
  padding-right: 10px;
  padding-left: 10px;
  padding-top: 10px;
  padding-bottom: 10px;
  border: none;
  width: 100%;
}



input[type=text],input[type=password],input[type=submit]{
      width: 100%;
      font-size: 15px;
      border-radius: 5px;
}



label{
      font-size: 17px;
      font-weight: bold;
      color: #29292A;
}

input[type=submit]{
      background: #29292A;
      border: none;color: #fff;
      font-size: 20px;
      font-weight: bold;
      margin-top: 20px;
      padding: 15px;
      cursor: pointer;
}

input[type=submit]:hover{
      background: maroon;
}





@media screen and (max-width: 600px){
input[type=text],input[type=password],input[type=submit]{
  width: 100%;
  padding: 0px;
}

select{
  padding: 0px;
}
}


</style>


<body>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
  <br>
  <a href="dashboard.php" class="w3-bar-item w3-button" style="font-size: 18px;">DASHBOARD</a>
  <a href="adduser.php" class="w3-bar-item w3-button" style="font-size: 18px;">USER ACCOUNT</a>
  <a href="addchannels.php" class="w3-bar-item w3-button-active" style="font-size: 18px; color: #009688;">CHANNELS</a>
  <a href="addpowerpack.php" class="w3-bar-item w3-button" style="font-size: 18px;">POWER PACKS</a>
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
    <h1>CHANNELS  <i class="fa fa-film" style="font-size:48px;color:white"></i></h1>
  </div>
</div>



<!-- form -->
<form action="">

<div class="container">

  <h1 style="text-align: center;margin-bottom: 30px;">New Channels</h1>

  <div class="container" style="margin-top: 30px;float: left;width: 35%;margin-left: 13%;padding-right: 10%;">
    
    <label for="broadcastor">Broadcastor Name<b style="font-size: 20px; color: red;">*</b></label>
    <select required="">
      <option hidden="" value="">SELECT</option>
      <option value="zee entertainment enterprise limited">ZEE ENTERTAINMENT ENTERPRISE LIMITED</option>
      <option value="star india private limited">STAR INDIA PRIVATE LIMITED</option>
      <option value="9x media private limited">9X MEDIA PRIVATE LIMITED</option>
      <option value="direct news">DIRECT NEWS PVT. LTD.</option>
      <option value="tv vision limited">TV VISION LIMITED</option>
    </select>

    <label for="channelgenre">Channel Genre<b style="font-size: 20px; color: red;">*</b></label>    

    <!-- Modal -->
    <a href="" type="" data-toggle="modal" data-target="#myModal" style="float: right; margin-right: -25%; margin-top: 15%;color: red;">New</a>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <label>Channel Genre</label> 
        </div>
        <div class="modal-body">
           <label for="flag">Enter Genre <b style="font-size: 20px; color: red;">*</b></label>
     <input type="text" required=""> &nbsp;

     <label for="flag">Remarks(Optional)</label>
     <input type="text"> &nbsp;
        </div>
        <div class="modal-footer">
          <button type="submit" style="float: left;">Submit</button>
          <button type="button" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>  
</div>
<!-- Modal -->

    <select required="">
      <option hidden="" value="">SELECT</option>
      <option value="sports">SPORTS</option>
      <option value="hindi gec">HINDI GEC</option>
      <option value="english gec">ENGLISH GEC</option>
      <option value="kannada">KANNADA</option>
      <option value="telugu">TELUGU</option>
    </select>


    <label for="channel_lcn">Channel LCN<b style="font-size: 20px; color: red;">*</b></label> 


<!-- Modal -->
<a href="" type="" data-toggle="modal" data-target="#myModal3" style="float: right; margin-right: -30%; margin-top: 15%;color: black;">Change</a>
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <label>Channel LCN availabilty</label> 
        </div>
        <div class="modal-body">
           <label for="flag">LCN No <b style="font-size: 20px; color: red;">*</b></label>
           <input type="text" id="lcn" required=""> &nbsp;

        </div>
        <div class="modal-footer">
          <button type="submit" style="float: left;">Submit</button>
          <button type="button" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div> 
</div>
<!-- Modal -->


    <input type="text" id="lcn" name="" disabled="" style="cursor: not-allowed;">   


    <label for="channelcode">Channel Code<b style="font-size: 20px; color: red;">*</b></label>
    <input type="text" name="" required=""> 


    <label for="flag">Channel Status<b style="font-size: 20px; color: red;">*</b></label>
    <br><br>
    <input type="radio" name="1" required=""> Active &nbsp;
    <input type="radio" name="1" required=""> Inactive 


<br><br><br><br>
    <a href="addchannels.php"><button type="button" class="button" style="background-color: #ee3036; color: white;">Cancel</button></a>  

  </div>




<div class="container" style="margin-top: 30px;float: right;width: 35%;margin-right: 13%;padding-right: 10%;">

    <label for="category">Channel Name<b style="font-size: 20px; color: red;">*</b></label>
    <input type="text" name="" required="">


    <label for="category">Channel Language<b style="font-size: 20px; color: red;">*</b></label>    

    <!-- Modal -->
    <a href="" type="" data-toggle="modal" data-target="#myModal1" style="float: right; margin-right: -25%; margin-top: 15%;color: red;">New</a>
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <label>Channel Language</label> 
        </div>
        <div class="modal-body">
           <label for="flag">Enter Language <b style="font-size: 20px; color: red;">*</b></label>
     <input type="text" required=""> &nbsp;

     <label for="flag">Remarks(Optional)</label>
     <input type="text"> &nbsp;
        </div>
        <div class="modal-footer">
          <button type="submit" style="float: left;">Submit</button>
          <button type="button" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div> 
</div>
<!-- Modal -->


    <select required="">
      <option hidden="" value="">SELECT</option>
      <option value="hindi">HINDI</option>
      <option value="english">ENGLISH</option>
      <option value="kannada">KANNADA</option>
      <option value="gujrati">GUJRATI</option>
      <option value="marathi">MARATHI</option>
      <option value="telugu">TELUGU</option>
      </select>  



      <label for="channelposition">Channel Position<b style="font-size: 20px; color: red;">*</b></label> 


    <!-- Modal -->
    <a href="" type="" data-toggle="modal" data-target="#myModal2" style="float: right; margin-right: -30%; margin-top: 15%;color: black;">Change</a>
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <label>Channel Position availabilty</label> 
        </div>
        <div class="modal-body">
           <label for="flag">Position No <b style="font-size: 20px; color: red;">*</b></label>
           <input type="text" id="position" required=""> &nbsp;

        </div>
        <div class="modal-footer">
          <button type="submit" style="float: left;">Submit</button>
          <button type="button" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div> 
</div>
<!-- Modal -->


    <input type="text" id="position" name="" disabled="" style="cursor: not-allowed;">  


    <label for="flag">Flag<b style="font-size: 20px; color: red;">*</b></label>
    <br><br>
    <input type="radio" name="2" required="">&nbsp;&nbsp; Pay &nbsp;&nbsp;
    <input type="radio" name="2" required="">&nbsp;&nbsp; Free  

<br><br>

    <label for="flag">Channel Type<b style="font-size: 20px; color: red;">*</b></label>
    <br><br>
    <input type="radio" name="3" required="">&nbsp;&nbsp; SD &nbsp;&nbsp;
    <input type="radio" name="3" required="">&nbsp;&nbsp; HD

<br><br><br><br>
<button class="button" id="submit" type="submit" style="background-color: #3498db; color: white;">Submit</button>
  </div>


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