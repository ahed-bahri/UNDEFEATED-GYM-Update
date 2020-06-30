<?php
include "connect2.php";
        $output = '';
        if(isset($_POST["query"]))
        {
         $search = mysqli_real_escape_string($connect, $_POST["query"]);
         $query = "
          SELECT * FROM contact 
          WHERE name LIKE '%".$search."%'
          OR email LIKE '%".$search."%' 
          OR phone LIKE '%".$search."%'
          OR subject LIKE '%".$search."%'
          OR content LIKE '%".$search."%'
         ";
        }
        else
        {
         $query = "
          SELECT * FROM contact ORDER BY name ";
        }
        
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)    
        {
         $output .= " <div class='container'>
         <div class='row'>
             <div class='col-lg-12 col-md-6 Feedbacks'><br>
                 <h4 style='font-weight:500'>Feedbacks</4><br><br>
                 <table class='table table-hover table-dark'>
                 <thead>
                     <tr>
                         <th class='text-center'>Name  </th>
                         <th  class='text-center'>E-mail  </th>
                         <th  class='text-center'>Phone  </th>
                         <th class='text-center'>Subject  </th>
                         <th class='text-center'> Content </th>
                         
                     </tr>
                 </thead>
         ";
         while($row = mysqli_fetch_array($result))
         {
          $output .= "<tbody>
          <tr>
              <td  class='bg-primary'>".$row['name']."</td>
              <td  class=''>".$row['email']."</td>
              <td  class='bg-success'>".$row['phone']."</td>
              <td  class=''>".$row['subject']."</td>
              <td  class='bg-danger'>".$row['content']."</td>                                
          </tr>
        </tbody>";
        
        }      
        echo $output;
        }
        else
        {
         echo 'Data Not Found';
        }

        ?>