<?php $user = "Vital Water User";

require "../vendor/autoload.php"; 
?>

<!DOCTYPE html>
<html>
<title>Vital Water Gateway</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/w3.css">
<link rel="stylesheet" href="../css/google.css">
<link rel="stylesheet" href="../css/font-awesome.css">
<style>
@font-face {
font-family: FontAwsome;
src: url(/fonts/FontAwesome.otf);
}

html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

#button {
    font-family: FontAwesome;
}


input[type=submit] {
    background: transparent url("path/to/image.jpg") 0 0 no-repeat;
    font-weight: bold;
    display: inline-block;
    text-align: center;
    cursor: pointer;
    height: 331px; /* height of the background image */
    width: 500px; /* width of the background image */
    border: 5px solid #fff;
    border-radius: 4em;
}

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
    <a href="../index.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="purchase.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-money fa-fw"></i>  Purchase</a>
    <a href="balance.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-newspaper-o fa-fw"></i>  Balance</a>
    <a href="statement.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-line-chart fa-fw"></i>  Statement</a>
    <a href="news.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <form action="pay.php" method="post">
  <header class="w3-container" style="padding-top:22px">
       <h5><b><span class="fa fa-drivers-license-o "></span> Please Scan the wCard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $water = test_input($_POST["choose"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo $water;


?>
  <div class="w3-container">
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <img src="/w3images/avatar2.png" class="w3-left w3-circle w3-margin-right" style="width:35px">
        <span class="w3-xlarge"><div class="w3-row-padding w3-margin-bottom">
    Card: <input type="password" name="card">
    <!-- <input type="checkbox" name="cost" value=<?php echo $water; ?> -->
<button type="submit" value="<?php echo $water ?>"name="export" class="w3-button w3-dark-grey">Pay  <i class="fa fa-money"></i></button></span><br>
      </li>

    </ul>
  </div>
    

</form>

</div>
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
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>Managed By</h4>
    <p><a href="mailto:premudeshi99@gmail.com">Vital Water</a></p>
  </footer>
</body>
</html>
