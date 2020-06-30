<?php
include "connect2.php";
session_start();
echo "<h2 class='text-center'> Welcome <span style=font-weight:700><u>".$_SESSION['login_user']."</u></span></h2>";
echo"<div class='text-center'><a href='logout.php'><button type='button' class='btn btn-md btn-danger'>EXIT</button></a></div>";

$sql2="SELECT * FROM ticket";
$res2=mysqli_query($connect,$sql2);

if (mysqli_num_rows($res2)>0){
    
    echo '
    <html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Rapport</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin=anonymous">
            <link rel="stylesheet" href="http:localhost:5500/css/rapportStyle.css"> <body>



    
  <div class="container">
   <br />
   <h2 align="center">Ajax Live Data Search using Jquery PHP MySql</h2><br />


   <!-- Search form -->
<div class="md-form mt-0">
  <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search_text" id="search_text" >
</div>


   </div>


   <br />
   <div id="result"></div>
  </div>';



  echo "
  <div class='col-lg-12 col-md-6 Tickets'>
  <h4 style='font-weight:500'>Ticket Reserved</4>
  <table class='table table-hover table-dark'>
  <thead>
      <tr>
          <th class='text-center'>Name  </th>
          <th  class='text-center'>E-mail Address  </th>
          <th  class='text-center'>Phone  </th>
          <th class='text-center'>Modification  </th>
          <th class='text-center'> Delete </th>
      </tr>
  </thead>";
  while($row=mysqli_fetch_assoc($res2)){
          echo"<tbody>
          <tr>
              <td  class='bg-primary'>".$row['name']."</td>
              <td  class=''>".$row['adress']."</td>
              <td  class='bg-success'>".$row['tel']."</td>
              <td class='text-center'>
              <a href='modif.php?id=".$row['id']."'><button class='btn btn-primary'>Modify</button></a></td>
              <td class='text-center'> <a href='supp.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></a></td>
          </tr>
      </tbody>";
  };
  echo "</table>
</div>
</div>";"
</div>FIN Row




  
 </body>
</html>
";

echo" 
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:'fetch.php',
   method:'POST',
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>";
}
