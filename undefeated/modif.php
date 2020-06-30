<?php

include "connect2.php";

if ($_GET['id']) {

    $id=$_GET['id'];
    $sql="SELECT * FROM ticket WHERE id = {$id}";
    $res=mysqli_query($connect,$sql);
    $row=mysqli_fetch_assoc($res);
    $connect->close();
?> 
 <body style=" background:url('testY.jpg'); background-repeat: no-repeat;background-size: cover;">
 <div style="margin-left:500px; margin-top:400px;">
<form action ="modif2.php" method="POST" >
<div style="text-align:center">

<fieldset style="width:50px" >
    <legend>Feedbacks Updates</legend>
<table>
    <tr>
    <td>Name </td>
    <td><input type="text" name="nom" value =" <?php echo $row['name'] ?> "></td>
    </tr>

    <tr>
    <td>Address </td>
    <td><input type="text" name="adr" value =" <?php echo $row['adress'] ?> "></td>
    </tr>

    <tr>
    <td>Number </td>
    <td><input type="text" name="nb" value =" <?php echo $row['tel'] ?> "></td>
    </tr>

    <input type="hidden" name="id" value ="<?php echo $row['id'] ?>"/>


<td> <button type="submit" class="btn btn-success"> Save </button></td>
 
<td> <a href="rapport.php"><button type="button" class=" btn btn-danger"> Back </button></a></td>
</table>
</fieldset>
</div>
</form>
</div>
</body>
<?php
}
?>