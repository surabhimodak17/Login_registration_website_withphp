<?php  
 
include 'db.php';
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM card_activation order by 1 desc";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>S.L</th>  
                           
                         <th>Product Name</th>  
                         <th>Price</th>
                         <th>Description</th>  
                         <th>Created_at</th>
                         <th>Updated_at</th>  
                         <th>Add_by_user</th>
                         <th>Issue Date:</th>
                    </tr>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($result))
  {
    $sl = ++$i;
   $output .= '
    <tr>  
                         <td > '.$sl.' </td>
                         
                         <td>'.$row["name"]'</td>   
                         <td>'.$row["price"]'</td>
                         <td>'.$row["description"]'</td>  
                         <td>'.$row["created_at"] '</td>  
                        <td>'.$row["updated_at"]'</td>  
                        <td>'.$row["add_by_user"]'</td>
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Shivshakti_all_Cards_Data.xls');
  echo $output;
 }
}
?>