<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "merchant");
$output = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $card = test_input($_POST["number"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if(isset($_POST["export"]))
{
 $query = "SELECT * FROM log WHERE card = '$card' ";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
  <p>Card Number:'. $card .'</p>
   <table class="table" bordered="1">  
                    <tr>  
                         
                         <th>Date</th>
                         <th>User</th>  
                         <th>Ammount</th>  

                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["time"].'</td>
                         <td>'.$row["user"].'</td>  
                         <td>'.$row["ammount"].'</td>  

                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=card_log.xls');
  echo $output;
 }
}
?>