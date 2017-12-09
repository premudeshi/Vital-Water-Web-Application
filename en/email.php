<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Notification Email</title>
</head>
<body>
<div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
  <h1>Your Vital Water Report</h1>
  <div align="center">
    <img src="images/logo2.png" height="100" width="100" alt="PHPMailer rocks"></a>
  </div>
  <p>This email is meant for the adresse, if you think this email is a mistake, please contact us. </p>
  <p>premstechcompany@zoho.com</p>
</div>
<div align="center"> <?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "merchant";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT SUM(ammount) FROM log";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "The total profit earned so far is: " . $row["SUM(ammount)"];
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

</div>
</body>



</html>