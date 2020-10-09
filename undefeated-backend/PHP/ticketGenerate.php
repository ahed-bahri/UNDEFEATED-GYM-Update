<?php

include "connect.php";

$nom=$_POST['nomm'];
$adresse=$_POST['adresse'];
$tele=$_POST['tele'];
$image=$_FILES['fichier']['name'];

if (empty($nom) || empty($adresse) || empty($tele) ){
    echo"<script> alert('Please,Fill input first');
    window.location.href='http://127.0.0.1/undefeated/ticka.php';
    </script>";
}
else {

    $sql="INSERT INTO ticket (name, adress, tel, upload) VALUES ('$nom','$adresse','$tele', '$image')";
    
    if ($res=mysqli_query($connect,$sql)){      
        echo "<script>
        alert('Thank you for joining');
        window.location.href='http://127.0.0.1:5500/index.html';
        </script>";
    }  
    else{
        echo"<script> alert('Something went wrong');</script>";
    }
}
?>