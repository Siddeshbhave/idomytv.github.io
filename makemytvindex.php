<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    color: #ef3939;/*#f1f1f1*/
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}


@media screen and (max-height: 600px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
  .navbar-brand{
    float: left;
  }
}

@media screen and (max-height: 600px) {
  .content{
    margin-bottom: -30%;
  }
}

.menu{
background: rgba(255,255,255, 0.4);   
  color: #f1f1f1;
  width: 100%;
  float: right;
  height: 100px;
  
  }



</style>


<body style="background-image: url(icons/wall4.png);">

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="login.php">LOG-IN</a>
    <br>
    <a href="register.php">REGISTER</a>
    <br>
    <a href="contact.php">CONTACT US</a>
    <br>
    <a href="consumer.php">CONSUMER CHARTER</a>
    <br>
    <a href="consumer.php">CONSUMER CHANNELS</a>
    <br>
    <a href="ourclientnetwork.php">OUR CLIENT NETWORK</a>
  </div>
</div>


<div class="menu">
<a class="navbar-brand" href="index.php"><p style="float: left; margin-top: 15px; font-size: 50px;margin-left: 20px;" ><b style="color: #c62626;">Makemy<b style="color: #173579;">TV</b></b></p></a>
<!-- <a class="navbar-brand" href="index.php"><img src="icons/asianet_ecost.png" height="110" width="240"  class="img-responsive margin center-block"  alt="" style="margin-left: 24%;"></a> -->
<span  style="font-size:27px;cursor:pointer; float:right; margin-top: 25px; color: black; margin-right: 8px;" onclick="openNav()">&#9776; <b>Menu</b></span>
  </div><br><br><br>



                          <div class="content" style="margin-top: 10%;margin-bottom: 5%;margin-left: 10%;margin-right: 10%;font-size: 20px; font-family: sans-serif;">
   
<fieldset>

<p>Welcome to <b style="color: #c52727">Makemy</b><b style="color: #173579;">TV</b>, India’s first and only Self-Care Portal for Cable TV Subscribers!</p>
<p>Dear subscribers, for us as well as our Client <a href="ourclientnetwork.php"><b>Networks</b></a>,</p> 
<p>You  are the King . You have the full discretion to decide what you watch, how much you pay and how long . After all Subscribers have the unquestionable M3C(My Money My Choice) Right in any relationship.</p>
<p>The  ever growing , exciting and entertaining Television World that is now at your fingertips.</p>
<p>Indian TV Viewers have an abundance of <a href="hinditables.php"><b>Content</b></a> choice with over 800 Channels of which 332 are Pay and rest are Free to Air.</p>
<p><b style="color: #c52727">Makemy</b><b style="color: #173579;">TV</b> will help you make a well-infirmed choice based on Language, Genre, Tariff and Format(Standard/High Definition) in which it is Broadcast.</p>
<p>You have the option to avail our Services by using this Portal or our Mobile APP or through the Field Executives appointed by your Cable TV Operator.</p>
</fieldset>

<br>

<fieldset>
  <legend><b style="font-size: 20px;">USER TIPS:</b></legend>
<p><b style="color: #c52727">Makemy</b><b style="color: #173579;">TV</b> Services are available only to Registered Users who are availing services from our <a href="ourclientnetwork.php"><b>Clients</b></a> from the Cable TV World.</p>
<p>We therefore suggest that you check whether your Service Provider has been on-boarded on <b style="color: #c52727">Makemy</b><b style="color: #173579;">TV</b> or not.</p>
<p>Once satisfied on this count, please proceed to <a href="register.php"><b>Register</b></a> either on the Portal or by downloading the Mobile APP, link for which would be sent by our Clients. </p>
<p>Please note that all Cable Networks do not carry all the Channels on Air . We therefore request you to recheck the Channel availability in A la Carte as well as Bouquet form that would be displayed by your Service Provider.</p>
<p>Please note that you can <a href="login.php"><b>Order</b></a> or renew  Channel/Bouquet in advance  and need not wait for the Subscription plan to expire.</p>
<p>You can order additional Content anytime during the validity of Plans already subscribed to.</p>
<p>You also have freedom to choose and order  Free Channels . Please note that all Networks charge a basic Network Capacity Fee for fist 100 Channels and additional Network Capacity fees for additional Free to Air Channels that you may opt for.</p>
<p>We suggest that you check the Fees that your Network charges and also the Network Retail Price for Pay Channels. The Network Pricing may be same as or lower than the Maximum Retail Price shown in the <a href="hinditables.php"><b>Informative List</b></a> of Channels.</p>
<p>To access all the information about your Rights and Entitlements, please click on <a href="consumer.php"><b>Consumers Corner</b></a>.</p>
</fieldset>

<br>

<fieldset>
  <legend><b style="font-size: 20px;">OTHER FEATURES:</b></legend>
<p>Apart from Channel and Package selection, we enable you to-</p>
<ul type="square">
    <li> View your Account and currently subscribed Channels.</li>
    <li> Lodge Service Requests.</li>
    <li> Make On line payments.</li>
    <li> Avail services through the Authorized Employees working for your Service Provider Network.</li>
    <li> Track the status of your Order and request by generating a Ticket Number 
Please note that depending on type of request, the Networks are provided between 8 hours to 72 hours to meet with your requirements. The Ticket number would be handy for you to follow up in case the matter is not resolved in time.  
</li>
</ul>
</fieldset>

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