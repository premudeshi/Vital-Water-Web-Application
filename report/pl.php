<?php  
//export.php  
$connect = mysqli_connect("localhost", "root", "", "merchant");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM log ";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         
                         <th>Date</th>
                         <th>User</th>  
                         <th>Card Number</th>  
                         <th>Ammount</th>  

                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["time"].'</td>
                         <td>'.$row["user"].'</td>  
                         <td>'.$row["card"].'</td>  
                         <td>'.$row["ammount"].'</td>  

                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=purchase_log.xls');
  echo $output;
 }
}
?>