<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>IDO</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

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
    color: orange;
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
			<li class="tablink" onclick="openPage('MY_PLANS', this, '#FF7F00')" id="defaultOpen"><a  href="myplans.php"><b>MY PLAN</b></a></li>
			<li class="tablink" onclick="openPage('ORDER', this, '#FF7F00' /*#183A5B*/)"><a href="order.php"><b>ORDER</b></a></li>
			<li class="tablink" onclick="openPage('CHANGE_PLAN', this, '#FF7F00')"><a href="#"><b>CHANGE PLAN</b></a></li>
			<li class="tablink" onclick="openPage('LODGE_SERVICE_REQUEST', this, '#FF7F00')"><a href="#"><b>LODGE SERVICE REQUEST</b></a></li>
		</ul>
	
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