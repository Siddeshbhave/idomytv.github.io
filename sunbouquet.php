<!DOCTYPE html>
<html>
<head>


   <!-- nav -->
      <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- nav -->



	<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
	<title>IDO</title>
</head>

<style>
	



/*price panels*/

* {
    box-sizing: border-box;
}

.columns {
 float: left;
    width: 100%;
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
    padding: 7px;
    text-align: center;
    font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif;
    font-size: 15px;
    font-weight: bold;
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
    }

    .button_1{
      padding: 0px 0px;
    }

}



.col-sm-3{
  width: 100%; 
}


.content{
  width: 100%;
}


@media screen and (max-width:600px){
.content{
  width: 100%;
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
      <a href="order.php" class="w3-bar-item w3-button" style="text-decoration: none;">BACK</a>
      <a href="consumer.php" class="w3-bar-item w3-button" style="text-decoration: none;">CONSUMER CHARTER</a>
      <a href="contact.php" class="w3-bar-item w3-button" style="text-decoration: none;">CONTACT US</a>
      
      
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
  <a href="order.php" onclick="w3_close()" class="w3-bar-item w3-button">BACK</a>
  <a href="consumer.php" onclick="w3_close()" class="w3-bar-item w3-button">CONSUMER CHARTER</a>
  <a href="contact.php" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT US</a>
  
</nav>

<br><br><br><br><br><br><br><br>

<div class="content" style="width: 50%;float: left;">


   <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="font-size: 22px;"><b>Tamil Basic</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="font-size: 20px;"><b>₹ 40.00/-</b></a>
         </h4>
        </div>
       <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>SUN TV</li>
<li>KTV</li>
<li>Adithya TV</li>
<li>Sun Music </li>
<li>Chutti TV</li>
<li>Sun News </li>
<li>SUN Life</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


   <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="font-size: 22px;"><b>Tamil Super</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="font-size: 20px;"><b>₹ 50.00/-</b></a>
         </h4>
        </div>
       <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>SUN TV</li>
<li>KTV</li>
<li>Adithya TV</li>
<li>Sun Music </li>
<li>Chutti TV</li>
<li>Sun News </li>
<li>SUN Life</li>
<li>Gemini TV</li>
<li>Gemini Movies</li>
<li>Surya TV</li>
<li>Surya Movies</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


       <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="font-size: 22px;"><b>Telugu Prime</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="font-size: 20px;"><b>₹ 40.00/-</b></a>
         </h4>
        </div>
       <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>Gemini TV</li>
<li>Gemini Movies</li>
<li>Gemini Comedy</li>
<li>Gemini Music</li>
<li>Kushi TV</li>
<li>Gemini Life</li>
<li>Gemini News</li>
<li>SUN TV</li>
<li>KTV</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


           <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="font-size: 22px;"><b>Kannada Basic</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="font-size: 20px;"><b>₹ 30.00/-</b></a>
         </h4>
        </div>
       <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>Udaya TV</li>
<li>Udaya Movies</li>
<li>Udaya Comedy</li>
<li>Udaya Music</li>
<li>Chintu TV</li>
<li>Udaya News</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


               <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" style="font-size: 22px;"><b>Kannada Super</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse9" style="font-size: 20px;"><b>₹ 50.00/-</b></a>
         </h4>
        </div>
       <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>Udaya TV</li>
<li>Udaya Movies</li>
<li>Udaya Comedy</li>
<li>Udaya Music</li>
<li>Chintu TV</li>
<li>Udaya News</li>
<li>SUN TV</li>
<li>KTV</li>
<li>Sun Music </li>
<li>Gemini TV</li>
<li>Gemini Movies</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                   <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse11" style="font-size: 22px;"><b>Kerala Prime</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse11" style="font-size: 20px;"><b>₹ 35.00/-</b></a>
         </h4>
        </div>
       <div id="collapse11" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>Surya TV</li>
<li>Surya Movies</li>
<li>Kuchu TV</li>
<li>Surya Music </li>
<li>Surya Comedy</li>
<li>SUN TV</li>
<li>KTV</li>
<li>Udaya TV</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                   <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse13" style="font-size: 22px;"><b>Sun Ultimate</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse13" style="font-size: 20px;"><b>₹ 65.00/-</b></a>
         </h4>
        </div>
       <div id="collapse13" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>SUN TV</li>
<li>KTV</li>
<li>Adithya TV</li>
<li>Sun Music </li>
<li>Chintu TV</li>
<li>Sun News </li>
<li>SUN Life</li>
<li>Gemini TV</li>
<li>Gemini Movies</li>
<li>Gemini Comedy</li>
<li>Gemini Music</li>
<li>Kushi TV</li>
<li>Gemini Life</li>
<li>Gemini News</li>
<li>Udaya TV</li>
<li>Udaya Movies</li>
<li>Udaya Comedy</li>
<li>Udaya Music</li>
<li>Chintu TV</li>
<li>Udaya News</li>
<li>Surya TV</li>
<li>Surya Movies</li>
<li>Kuchu TV</li>
<li>Surya Music </li>
<li>Surya Comedy</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                   <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse15" style="font-size: 22px;"><b>Tamil Prime HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse15" style="font-size: 20px;"><b>₹ 75.00/-</b></a>
         </h4>
        </div>
       <div id="collapse15" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>SUN TV HD</li>
<li>KTV HD</li>
<li>Adithya TV</li>
<li>Sun Music HD</li>
<li>Chutti TV</li>
<li>Sun News</li>
<li>SUN Life</li>
<li>Gemini TV HD</li>
<li>Surya TV</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                   <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse17" style="font-size: 22px;"><b>Telugu Basic  HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse17" style="font-size: 20px;"><b>₹ 60.00/-</b></a>
         </h4>
        </div>
       <div id="collapse17" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>Gemini TV HD</li>
<li>Gemini Movies HD</li>
<li>Gemini Comedy </li>
<li>Gemini Music HD</li>
<li>Kushi TV</li>
<li>Gemini Life</li>
<li>Gemini News</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                   <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse19" style="font-size: 22px;"><b> Telugu Super HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse19" style="font-size: 20px;"><b>₹ 80.00/-</b></a>
         </h4>
        </div>
       <div id="collapse19" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>Gemini TV HD</li>
<li>Gemini Movies HD</li>
<li>Gemini Comedy </li>
<li>Gemini Music HD</li>
<li>Kushi TV</li>
<li>Gemini Life</li>
<li>Gemini News</li>
<li>SUN TV HD</li>
<li>KTV HD</li>
<li>Udaya TV HD </li>
<li>Udaya Movies</li>
<li>Surya TV HD </li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                   <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse21" style="font-size: 22px;"><b>Kannada Prime HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse21" style="font-size: 20px;"><b>₹ 70.00/-</b></a>
         </h4>
        </div>
       <div id="collapse21" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>Udaya TV HD </li>
<li>Udaya Movies</li>
<li>Udaya Comedy</li>
<li>Udaya Music</li>
<li>Chintu TV</li>
<li>Udaya News</li>
<li>SUN TV HD</li>
<li>KTV HD</li>
<li>Gemini TV HD</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                   <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse23" style="font-size: 22px;"><b>Kerala Basic HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse23" style="font-size: 20px;"><b>₹ 30.00/-</b></a>
         </h4>
        </div>
       <div id="collapse23" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>Surya TV HD </li>
<li>Surya Movies</li>
<li>Kochu TV</li>
<li>Surya Music</li>
<li>Surya Comedy</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                   <div class="col-sm-3"> 
     
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse25" style="font-size: 22px;"><b>Kerala Super HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse25" style="font-size: 20px;"><b>₹ 80.00/-</b></a>
         </h4>
        </div>
       <div id="collapse25" class="panel-collapse collapse">
        <div class="panel-body" style="color: black;"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">

<li>Surya TV HD </li>
<li>Surya Movies</li>
<li>Kochu TV</li>
<li>Surya Music</li>
<li>Surya Comedy</li>
<li>SUN TV HD</li>
<li>KTV HD</li>
<li>Aditya TV</li>
<li>Sun Music HD</li>
<li>Udaya TV HD </li>
<li>Udaya Movies</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>




    </div>




<div class="content" style="width: 50%;float: right;">



 <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="font-size: 22px;"><b>Tamil Prime</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="font-size: 20px;"><b>₹ 45.00/-</b></a>
         </h4>
        </div>
       <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>SUN TV</li>
<li>KTV</li>
<li>Adithya TV</li>
<li>Sun Music </li>
<li>Chutti TV</li>
<li>Sun News </li>
<li>SUN Life</li>
<li>Gemini TV</li>
<li>Surya TV</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


     <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="font-size: 22px;"><b>Telugu Basic</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="font-size: 20px;"><b>₹ 30.00/-</b></a>
         </h4>
        </div>
       <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>Gemini TV</li>
<li>Gemini Movies</li>
<li>Gemini Comedy</li>
<li>Gemini Music</li>
<li>Kushi TV</li>
<li>Gemini Life</li>
<li>Gemini News</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


         <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="font-size: 22px;"><b> Telugu Super</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="font-size: 20px;"><b>₹ 50.00/-</b></a>
         </h4>
        </div>
       <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>Gemini TV</li>
<li>Gemini Movies</li>
<li>Gemini Comedy</li>
<li>Gemini Music</li>
<li>Kushi TV</li>
<li>Gemini Life</li>
<li>Gemini News</li>
<li>SUN TV</li>
<li>KTV</li>
<li>Udaya TV</li>
<li>Udaya Movies</li>
<li>Surya TV</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


             <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" style="font-size: 22px;"><b>Kannada Prime</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" style="font-size: 20px;"><b>₹ 45.00/-</b></a>
         </h4>
        </div>
       <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>Udaya TV</li>
<li>Udaya Movies</li>
<li>Udaya Comedy</li>
<li>Udaya Music</li>
<li>Chintu TV</li>
<li>Udaya News</li>
<li>SUN TV</li>
<li>KTV</li>
<li>Gemini TV</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                 <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" style="font-size: 22px;"><b>Kerala Basic</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse10" style="font-size: 20px;"><b>₹ 20.00/-</b></a>
         </h4>
        </div>
       <div id="collapse10" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>Surya TV</li>
<li>Surya Movies</li>
<li>Kuchu TV</li>
<li>Surya Music </li>
<li>Surya Comedy</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                 <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse12" style="font-size: 22px;"><b>Kerala Super</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse12" style="font-size: 20px;"><b>₹ 45.00/-</b></a>
         </h4>
        </div>
       <div id="collapse12" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>Surya TV</li>
<li>Surya Movies</li>
<li>Kuchu TV</li>
<li>Surya Music </li>
<li>Surya Comedy</li>
<li>SUN TV</li>
<li>KTV</li>
<li>Adithya TV</li>
<li>Sun Music </li>
<li>Udaya TV</li>
<li>Udaya Movies</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                 <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse14" style="font-size: 22px;"><b>Tamil Basic HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse14" style="font-size: 20px;"><b>₹ 70.00/-</b></a>
         </h4>
        </div>
       <div id="collapse14" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>SUN TV HD</li>
<li>KTV HD</li>
<li>Adithya TV</li>
<li>Sun Music HD</li>
<li>Chutti TV</li>
<li>Sun News </li>
<li>SUN Life</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                 <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse16" style="font-size: 22px;"><b> Tamil Super HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse16" style="font-size: 20px;"><b>₹ 80.00/-</b></a>
         </h4>
        </div>
       <div id="collapse16" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>SUN TV HD</li>
<li>KTV HD</li>
<li>Adithya TV</li>
<li>Sun Music HD</li>
<li>Chutti TV</li>
<li>Sun News </li>
<li>SUN Life</li>
<li>Gemini TV HD</li>
<li>Gemini Movies HD</li>
<li>Surya TV</li>
<li>Surya Movies</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                 <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse18" style="font-size: 22px;"><b>Telugu Prime HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse18" style="font-size: 20px;"><b>₹ 75.00/-</b></a>
         </h4>
        </div>
       <div id="collapse18" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>Gemini TV HD</li>
<li>Gemini Movies HD</li>
<li>Gemini Comedy </li>
<li>Gemini Music HD</li>
<li>Kushi TV</li>
<li>Gemini Life</li>
<li>Gemini News</li>
<li>SUN TV HD</li>
<li>KTV HD</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                 <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse20" style="font-size: 22px;"><b>Kannada Basic HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse20" style="font-size: 20px;"><b>₹ 50.00/-</b></a>
         </h4>
        </div>
       <div id="collapse20" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>Udaya TV HD </li>
<li>Udaya Movies</li>
<li>Udaya Comedy</li>
<li>Udaya Music</li>
<li>Chintu TV</li>
<li>Udaya News</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                 <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse22" style="font-size: 22px;"><b>Kannada Super HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse22" style="font-size: 20px;"><b>₹ 80.00/-</b></a>
         </h4>
        </div>
       <div id="collapse22" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>Udaya TV HD </li>
<li>Udaya Movies</li>
<li>Udaya Comedy</li>
<li>Udaya Music</li>
<li>Chintu TV</li>
<li>Udaya News</li>
<li>SUN TV HD</li>
<li>KTV HD</li>
<li>Sun Music HD</li>
<li>Gemini TV HD</li>
<li>Gemini Movies HD</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                 <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse24" style="font-size: 22px;"><b>Kerala Prime HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse24" style="font-size: 20px;"><b>₹ 70.00/-</b></a>
         </h4>
        </div>
       <div id="collapse24" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>Surya TV HD </li>
<li>Surya Movies</li>
<li>Kochu TV</li>
<li>Surya Music</li>
<li>Surya Comedy</li>
<li>SUN TV HD</li>
<li>KTV HD</li>
<li>Udaya TV HD </li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>


                 <div class="col-sm-3">
     
    
       <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title" style="text-align: center">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse26" style="font-size: 22px;"><b>SUN ULTIMATE PACK HD</b></a>
          <br><br>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse26" style="font-size: 20px;"><b>₹ 110.00/-</b></a>
         </h4>
        </div>
       <div id="collapse26" class="panel-collapse collapse">
        <div class="panel-body" style="color: black"><b><span><img src="" height="25" width="25" class="logo" alt="">

          <div class="columns">
  <ul class="price">


<li>Gemini TV HD</li>
<li>Gemini Movies HD</li>
<li>Gemini Comedy </li>
<li>Gemini Music HD</li>
<li>Kushi TV</li>
<li>Gemini Life</li>
<li>Gemini News</li>
<li>SUN TV HD</li>
<li>KTV HD</li>
<li>Aditya TV</li>
<li>Sun Music HD</li>
<li>Chutti TV</li>
<li>Sun News</li>
<li>SUN Life</li>
<li>Udaya TV HD </li>
<li>Udaya Movies</li>
<li>Udaya Comedy</li>
<li>Udaya Music</li>
<li>Chintu TV</li>
<li>Udaya News</li>
<li>Surya TV HD </li>
<li>Surya Movies</li>
<li>Kochu TV</li>
<li>Surya Music</li>
<li>Surya Comedy</li>
    <li class="grey"><a href="payment.php" class="button_1" style="color: white; text-decoration: none;"><b>Subscribe</b></a></li>
  </ul>
</div>

        </div>
        </div>
      </div>
    </div>




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