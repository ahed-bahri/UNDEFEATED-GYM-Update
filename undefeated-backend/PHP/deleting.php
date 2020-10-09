<?php

include "connect.php";
if($_GET['id']){
    $id=$_GET['id'];

$sql="SELECT * FROM ticket WHERE id= {$id}";
$res=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($res);

$connect->close();
?>

<html>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin=anonymous">
    <link rel="stylesheet" href="http:localhost:5500/css/repportStyle.css">
    <title>Delete</title>

    <body style=" background:url('trash.jpg'); background-repeat: no-repeat;background-size: cover;">
        <div style="margin-left:500px; margin-top:100px;">
            <h1 style="color:red"> <b>Are you sure ?</b></h1>
        </div>
        <form action="deletingRequest.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id'] ?> ">
                <div style="margin-left:550px; margin-top:60px;">
                <button type="submit" class="btn btn-success">Totally </button>
                <a href="repport.php"><button type="button" class=" btn btn-danger">Back</button></a>
        </form>
    </body>
</html>
<?php
}
?>