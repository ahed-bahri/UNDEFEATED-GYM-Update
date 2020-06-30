<?php
session_start();
include ("connect2.php") ;
$user= $_POST['user'];
$password= $_POST['password'];
$sql = "SELECT * FROM login WHERE username = '". $user ."' AND mdp = '". $password ."'" ;
$_SESSION['login_user']= $user;
$res= mysqli_query($connect,$sql);
if (empty($user) || empty($password)){
     
     echo"<script> alert('Please,Fill input first'); 
     window.location.href='http://127.0.0.1:5500/login.html';
     </script>";
}
else {
     
     if ($res){
          if(isset($_SESSION['login_user'])){
          header("Location:http://localhost/undefeated/rapport.php");
          exit();
          }
     }
     else {
          echo "<script> alert('Sorry,You don't exist in our Database !'); 
          window.location.href=' http://127.0.0.1:5500/index.html';
          </script>";
     }
}
?>
