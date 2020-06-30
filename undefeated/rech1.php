<?php
//fetch.php
include "connect2.php";
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "select * from ticket where name like '%$search%' or adress like '%$search%' or tel like '%$search%'";
}
else
{
 $query = "
  SELECT * FROM ticket ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0){
 $output .= "<div class='col-lg-12 col-md-6 Tickets'>
 <h4 style='font-weight:500'>Ticket Reserved</4>
 <table class='table table-hover table-dark'>
 <thead>
     <tr>
         <th class='text-center'>Name  </th>
         <th  class='text-center'>Address  </th>
         <th  class='text-center'>Phone  </th>
     </tr>
 </thead>";
 while($row = mysqli_fetch_array($result))
 {
  $output .= "<tbody>
    <tr>
      <td  class='bg-primary'>".$row['name']."</td>
      <td  class=''>".$row['adress']."</td>
      <td  class='bg-success'>".$row['tel']."</td>
      <td class='text-center'>
    </tr>
</tbody>";
 }
 echo $output;

 echo "</table>
 </div>
 </div>"; "
</div>FIN Row
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
<script src='js/jquery.min.js'></script>           
</body>
</html>";
}
else
{
 echo 'Data Not Found';
}

?>