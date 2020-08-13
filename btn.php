<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>IDO</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>



      <!-- categories -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>

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
    color: #FF7F00;/*#f1f1f1*/
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

.content {
      width: 94%;
      margin: 4em auto;
      font-size: 20px;
      line-height: 30px;
      text-align: justify;
      padding-top: 10px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}



/*TABS*/
*{
  margin:0;
  padding:0;
}

/*hiding label and checkbox*/
input[type=checkbox],
.show-menu{
  visibility: visible;
}

/*styling our wrapper*/
.tabs{
  max-width:960px;
  margin:0 auto;
  color:#ecf0f1;
  font-family:helvetica;
}

/*styling h1 in wrapper*/
.tabs h1{
  padding:20px;
  text-align:center;
}

/*styling navigation*/
.navigation{
  display:flex;
  list-style-type:none;
}

/*styling list items->li in navigation*/
.navigation li{
  background:#29292A;
  flex:1;
  text-align:center;
  transition:all .2s ease;
}

/*giving border left to all list items, but not to our first list item*/
.navigation li:not(:first-child){
  border-left:1px solid #ecf0f1;
}

/*styling hover*/
.navigation li:hover{
  background:#333333;
  flex:1.1;
}

/*styling our anchor tag*/
.navigation li a{
  display:block;
  padding:20px 0;
  color:inherit;
  text-decoration:none;
}



/*giving style for mobile*/

@media screen and (max-width:600px){
  /*styling our show menu button*/
  .show-menu{
    background:#342a2a;
    display:flex;
    cursor:pointer;
    padding: 20px 0;
    justify-content:center;
    margin-right: 35%;
    margin-top: 2%;
    width: 100%;
  }
  /*hiding our navigation*/
  .navigation{
    display:none;
  }
  
  /*displaying our list items as block element; if checkbox is check*/
  input[type=checkbox]:checked ~ .navigation{
    display:block;
  }
  
  /*removing border left from the pseudo class*/
  .navigation li:not(:first-child){
    border:0;
  }
  /*giving margin to list item, excluding last list item*/
  .navigation li:not(:last-child){
    margin:2px 0;
  }
}


/*res-table*/
.res-table{
  overflow-x: auto;
  margin-right: 10px;
  margin-left: 10px;
}

.res-table table{
  border-collapse: collapse;
  width: 100%;
  font-size: 18px;
  text-align: center;
}

.res-table th{
  background-color: #29292A;/*blue #183a5b*/
  color: white;
}

.res-table th,td{
  border: 2px solid #ddd;
  padding: 15px;
}






body {font-family: "Lato", sans-serif;}

.cities {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
.cities li {float: left;}

/* Style the links inside the list items */
.cities li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
.cities li a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.cities li a:focus, .active {
    background-color: #ccc;
}

/* Style the tab content */
.citycontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}




/*price panels*/

* {
    box-sizing: border-box;
}

.columns {
  float: left;
    width: 28%;
    padding: 8px;
}

.price {
    list-style-type: none;
    border: 1px solid black;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 50px 0 rgba(0,0,0,0.5)
}

.price .header {
    background-color: #29292A;
    color: white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: darkgrey;/*#eee*/
    font-size: 20px;
}

.button_1 {
    background-color: #183a5b;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
        margin-top: 10%;
    }
}


/*paris_table*/
.paris-table{
  overflow-x: auto;
  margin-right: 10px;
}

.paris-table table{
  border-collapse: collapse;
  width: 100%;
  font-size: 18px;
  text-align: center;
}

.paris-table th{
  background-color: #29292A;
  color: white;
}

.paris-table th,td{
  border: 2px solid #ddd;
  padding: 15px;
}

@media screen and (max-width:600px){

.paris-table{
  padding-top: 17%;
  margin-left: 10px;
}

}


/*button_2*/

.button2 {
    background-color: orange;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    margin-left: 40%;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}



/*result_table*/

.result_table{
  overflow-x: auto;
  margin-right: 10px;
  margin-left: 10px;
}

.result_table table{
  border-collapse: collapse;
  width: 100%;
  font-size: 18px;
  text-align: center;
}

.result_table th{
  background-color: #29292A;
  color: white;
}

.result_table th,td{
  border: 2px solid #ddd;
  padding: 15px;
}



* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial;
}

/* Style tab links */
.tlink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tlink:hover {
    background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tcontent {
    color: black;
    display: none;
    padding: 100px 20px;
    height: 100%;
}

</style>


</style>
<body>
      <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="login.php">LOG-OUT</a>
    <br>
    <a href="#">ABOUT US</a>
    <br>
    <a href="#">CONTACT US</a>
  </div>
</div>

<div>
<a class="navbar-brand" href="index.php"><img src="icons/IDO-TXT.png" height="90" width="150" class="logo" alt="" style="float: left;" ></a>
<span style="font-size:30px;cursor:pointer; float:right; margin-top: 30px; margin-right: 25px;" onclick="openNav()">&#9776; Menu<span>
  </div>

<br><br><br><br><br><br><br>

  <div class="tabs">
  
    <label for="show-menu" class="show-menu">Show Menu</label>
    <input style="opacity: 0.1" type="checkbox" id="show-menu">
    <ul class="navigation">
      <li class="tablink" onclick="openPage('MY_PLANS', this, '#FF7F00')" id="defaultOpen"><a href="#"><b>MY PLAN</b></a></li>
      <li class="tablink" onclick="openPage('ORDER', this, '#FF7F00' /*#183A5B*/)"><a href="#"><b>ORDER</b></a></li>
      <li class="tablink" onclick="openPage('CHANGE_PLAN', this, '#FF7F00')"><a href="#"><b>CHANGE PLAN</b></a></li>
      <li class="tablink" onclick="openPage('LODGE_SERVICE_REQUEST', this, '#FF7F00')"><a href="#"><b>LODGE SERVICE REQUEST</b></a></li>
    </ul>
  
  </div>

  <br><br><br><br>

  <div id="MY_PLANS" class="tabcontent"><!--MY PLANS-->

  
    <p style="margin-left: 20px;font-size: 20px;"><b>Channels you have subscribed to are:</b></p>
    <br><br>

    <div class="res-table">
      <table>
        <tbody>
          <tr>
            <th>Sr No.</th>
            <th>Channel Name</th>
            <th>Language</th>
            <th>Valid Till</th>
            <th>Fees</th>
          </tr>
          <tr>
            <td><b>1.</b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
          </tr>
          <tr>
            <td><b>2.</b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
          </tr>
          <tr>
            <td><b>3.</b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
          </tr>
          <tr>
            <td><b>4.</b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
          </tr>
          <tr>
            <td><b>5.</b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
          </tr>
        </tbody>
      </table>
      
    </div>
  </div>


   
   <div id="ORDER" class="tabcontent"><!-- ORDER -->

    <div class="cities">
  <li><a href="#" class="citytab" onclick="openCity(event, 'London')">London</a></li>
  <li><a href="#" class="citytab" onclick="openCity(event, 'Paris')">Paris</a></li>
  <li><a href="#" class="citytab" onclick="openCity(event, 'Tokyo')">Tokyo</a></li>
</div>


<div id="London" class="citycontent">
  

<div class="columns">
  <ul class="price">
    <li class="header">POWER-PACK-1</li>
    <li class="grey">₹ [Price]</li>
    <li>• Channel 1</li>
    <li>• Channel 2</li>
    <li>• Channel 3</li>
    <li>• Channel 4</li>
    <li>• Channel 5</li>
    <li>• Channel 6</li>
    <li>• Channel 7</li>
    <li>• Channel 8</li>
    <li>• Channel 9</li>
    <li>• Channel 10</li>
    <li class="grey"><a href="#" class="button_1"><b>Subscribe</b></a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">POWER-PACK-2</li>
    <li class="grey">₹ [Price]</li>
    <li>• Channel 1</li>
    <li>• Channel 2</li>
    <li>• Channel 3</li>
    <li>• Channel 4</li>
    <li>• Channel 5</li>
    <li>• Channel 6</li>
    <li>• Channel 7</li>
    <li>• Channel 8</li>
    <li>• Channel 9</li>
    <li>• Channel 10</li>
    <li class="grey"><a href="#" class="button_1"><b>Subscribe</b></a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">POWER-PACK-3</li>
    <li class="grey">₹ [Price]</li>
    <li>• Channel 1</li>
    <li>• Channel 2</li>
    <li>• Channel 3</li>
    <li>• Channel 4</li>
    <li>• Channel 5</li>
    <li>• Channel 6</li>
    <li>• Channel 7</li>
    <li>• Channel 8</li>
    <li>• Channel 9</li>
    <li>• Channel 10</li>
    <li class="grey"><a href="#" class="button_1"><b>Subscribe</b></a></li>
  </ul>
</div>


</div>

<div id="Paris" class="citycontent">
  

<div class="paris-table" style="overflow-x: auto;">
  <p style="font-size: 20px;"><b>Mini-Packs Name</b></p>
  <br>
      <table>
        <tbody>
          <tr>
            <th>Sr No.</th>
            <th>Channels</th>
            <th>Description</th>
            <th>Price</th>
          </tr>
          <tr>
            <td><b>1.</b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
          </tr>
          <tr>
            <td><b>2.</b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
          </tr>
          <tr>
            <td><b>3.</b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
          </tr>
        </tbody>
      </table>
      
    </div>
    <br><br>

 <div class="paris-table" style="overflow-x: auto;">
  <p style="font-size: 20px;"><b>Mini-Packs Name</b></p>
  <br>
      <table>
        <tbody>
          <tr>
            <th>Sr No.</th>
            <th>Channels</th>
            <th>Description</th>
            <th>Price</th>
          </tr>
          <tr>
            <td><b>1.</b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
          </tr>
          <tr>
            <td><b>2.</b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
          </tr>
          <tr>
            <td><b>3.</b></td>
            <td><b></b></td>
            <td><b></b></td>
            <td><b></b></td>
          </tr>
        </tbody>
      </table>
      <br>
      <button class="button2" style="margin-top: 10px;margin-bottom: 50px;">Subscribe</button>
    </div>


</div>

<div id="Tokyo" class="citycontent">
  

<p style="text-align: center;font-size: 20px;"><b>Search channels by:</b></p>


<div class="selection" style="margin-left: 33%;">
<div class="form-group col-md-6 col-lg-6 col-sm-6" style="font-family: sans-serif;">
  <label>Choose Languages</label>
  <select id="DDLActivites" data-style="btn-default" class="selectpicker form-control" multiple data-max-options="4">
        <option>English</option>
        <option>Hindi</option>
        <option>Marathi</option>
        <option>Gujrati</option>
     </select>
     <br><br>
     <label>Choose Genere</label>
  <select id="DDLActivites" data-style="btn-default" class="selectpicker form-control" multiple data-max-options="4">
        <option>Movies</option>
        <option>Cartoon</option>
        <option>Action</option>
        <option>Sports</option>
     </select>
     <br><br>
     <label>Choose Offers</label>
  <select id="DDLActivites" data-style="btn-default" class="selectpicker form-control" multiple data-max-options="4">
        <option>Offer-1</option>
        <option>Offer-1</option>
        <option>Offer-1</option>
        <option>Offer-1</option>
     </select>
     <br><br>
     <label>Choose Fees</label>
  <select id="DDLActivites" data-style="btn-default" class="selectpicker form-control" multiple data-max-options="4">
        <option>Fee-1</option>
        <option>Fee-2</option>
        <option>Fee-3</option>
        <option>Fee-4</option>
     </select>
     <br><br>
     <label>Choose Format</label>
  <select id="DDLActivites" data-style="btn-default" class="selectpicker form-control" multiple data-max-options="4">
        <option>HD</option>
        <option>SD</option>
        <option>Format-1</option>
        <option>Format-2</option>
     </select>
<br><br>
     <button class="button2">Search</button>
</div>
</div>


<div class="result_table" style="margin-top: 40%">
      <table>
          <tr>
            <th>Sr No.</th>
            <th>Channel Name</th>
            <th>Description</th>
            <th>Fees</th>
            <th>Add to Plan</th>
          </tr>
          <tr>
            <td><b>1.</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align: center;"><input type="checkbox" name="chkbox"/></td>

          </tr>
          <tr>
            <td><b>2.</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align: center;"><input type="checkbox" name="chkbox"/></td>

          </tr>
          <tr>
            <td><b>3.</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align: center;"><input type="checkbox" name="chkbox"/></td>

          </tr>
          <tr>
            <td><b>4.</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align: center;"><input type="checkbox" name="chkbox"/></td>
          </tr>
          <tr>
            <td><b>5.</b></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align: center;"><input type="checkbox" name="chkbox"/></td>
          </tr>
      </table>


      <button class="button2" style="margin-top: 10px; margin-bottom: 50px;">Subscribe</button>
      <br><br>
    </div>


</div>


   </div>


 


 
  <div id="CHANGE_PLAN" class="tabcontent"><!--CHANGE_PLAN-->
    

   <button class="tlink" onclick="openPage('Home', this, 'red')" id="defaultOpen">Home</button>
<button class="tlink" onclick="openPage('News', this, 'green')" >News</button>
<button class="tlink" onclick="openPage('Contact', this, 'blue')">Contact</button>
<button class="tlink" onclick="openPage('About', this, 'orange')">About</button>


<div id="Home" class="tcontent">
  <h3>Home</h3>
  <p>Home is where the heart is..</p>
</div>

<div id="News" class="tcontent">
  <h3>News</h3>
  <p>Some news this fine day!</p> 
</div>

<div id="Contact" class="tcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

  </div>



  

  <div id="LODGE_SERVICE_REQUEST" class="tabcontent"><!--LODGE SERVICE REQUEST-->
    


  </div>


          

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>


<!-- tabs -->
      <script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";

   }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>





</body>
</html>