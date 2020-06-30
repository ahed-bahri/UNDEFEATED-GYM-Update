<?php

include "connect2.php";

    $id=$_POST['id'];
	$nom = $_POST['nom'];
	$address = $_POST['adr'];
    $tel = $_POST['nb'];
    $sql= "UPDATE ticket SET name= '$nom', adress='$address', tel='$tel' WHERE id= {$id} ";
    
    if (mysqli_query($connect,$sql)){
        header('location: rapport.php');
    }
    //print_r($res);
$connect->close();

?>
