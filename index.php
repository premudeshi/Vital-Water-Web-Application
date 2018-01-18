<?php require "login/loginheader.php"; 
$user = $_SESSION['username'];
require "vendor/autoload.php"; 

echo exec('sudo chmod 666 /dev/Vital-Water-Master');
require "dbconf.php"; 
$link = mysql_connect($servername, $username, $password);
mysql_select_db($dbname, $link);


$result = mysql_query("SELECT * FROM log", $link);
$num_rows = mysql_num_rows($result);


$result1 = mysql_query("SELECT * FROM card", $link);
$num_rows1 = mysql_num_rows($result1);




?>

<!DOCTYPE html>
<html>
<title>Vital Water Gateway</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/google.css">
<link rel="stylesheet" href="css/font-awesome.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">
<head>
<link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADiqyn/4qsp/+KrKf/iqyn/4qsp/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOKrKf/iqyn/4qsp/+KrKf/iqyn////////////iqyn/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOKrKf/iqyn/4qsp/+KrKf/iqyn/4qsp/+KrKf/iqyn//////+KrKf8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADiqyn/4qsp/+KrKf/iqyn/4qsp/zPMZv/iqyn/4qsp/+KrKf//////AAAAAAAAAAAAAAAAAAAAAAAAAADiqyn/4qsp/wDMZv9PxFj/4qsp/+KrKf8zzGb/M8xm/+KrKf/iqyn//////+KrKcsAAAAAAAAAAAAAAAAAAAAAAAAAAOKrKf8AzGb/AMxm/+KrKf/iqyn/M8xm/zPMZv8zzGb/4qsp/+KrKf/iqyn/AAAAAAAAAAAAAAAAAAAAAAAAAAAAzGb/AMxm/wDMZv8AzGb/vLI2/7yyNv+8sjb/vLI2/+KrKf/iqyn/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4qsp/+KrKf/iqyn/4qsp/+KrKf/iqyn/4qsp/+KrKf/iqyn/4qsp/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADiqyn/4qsp/+KrKf/iqyn/4qsp/+KrKf/iqyn/4qsp/+KrKf8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4qsp/+KrKf/iqyn/4qsp/+KrKf/iqyn/4qsp/+KrKf8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADiqyn/4qsp/+KrKf/iqyn/4qsp/3JaEg0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOKrKf/iqyn/4qsp/+KrKf8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADiqyn/4qsp/+KrKf8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOKrKf/iqyn/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA4qsp/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/B8AAPAPAADgBwAA4AcAAMADAADgAwAA4AcAAOAHAADwBwAA8A8AAPg/AAD8PwAA/H8AAP5/AAD/fwAA//8AAA==" rel="icon" type="image/x-icon" />
</head>
<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Vital Water</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
       <img src="images/logo2.png" alt="Vital Water" style="width:75px;height:75px;" class="w3-circle w3-margin-right">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $user;?></strong></span><br>
      <a href="notifyemail.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="settings.php" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="en/index.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="en/purchase.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-money fa-fw"></i>  Purchase</a>
    <a href="en/balance.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-newspaper-o fa-fw"></i>  Balance</a>
    <a href="en/statement.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-line-chart fa-fw"></i>  Statement</a>
    <a href="en/news.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-handshake-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $num_rows ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Total Orders</h4>
      
    <style type="text/css">
.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: blue;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 150px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}

    </style>
<a href="en/purchase.php"><button class="button1" style="vertical-align:middle"><span>New </span></button></a>
    </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-id-card-o w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $num_rows1 ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Authorised Cards</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Shares</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>

  <hr>
  <div class="w3-container">
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <img src="/w3images/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <i class="fa fa-quote-left fa-4x"></i><span class="w3-xlarge">Nothing is softer or more flexible than water, yet nothing can resist it.</span><i class="fa fa-quote-right fa-4x"></i><br>
        <span class="w3-large">- Lao Tzu</span><br>
    </ul>
  </div>
  <hr>


  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>Managed By</h4>
    <p><a href="mailto:premudeshi99@gmail.com">Vital Water</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
