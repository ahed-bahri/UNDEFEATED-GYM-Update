<?php
    $query = $_GET['name']; 
    // gets value sent over search form
     
    $min_length = 1;
    // you can set minimum length of the query if you want
    $raw_results = mysql_query("SELECT * FROM contact WHERE (`name` LIKE '%".$query."%') OR (`email` LIKE '%".$query."%')") or die(mysql_error());
        if(mysql_num_rows($raw_results) > 0){ 
            while($results = mysql_fetch_array($raw_results)){
                echo "<p><h3>".$results['name']."</h3>".$results['email']."</p>";
            }
        }
        else{ 
            echo "No results";
        }

?>