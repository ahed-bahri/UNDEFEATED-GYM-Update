<?php 

if (!empty($_POST)){
    if (!empty($_FILES)){
        $file_name=$_FILES['fichier']['name'];
        $file_type=$_FILES['fichier']['type'];
        $file_tmp_name=$_FILES['fichier']['tmp_name'];
        $file_dest = 'newfolder/'.$file_name;
        $file_extension= strrchr($file_name,".");
        $extensions_autorisees=array('.jpeg', '.JPEG', '.jpg', '.JPG', '.png', '.PNG', '.gif', '.GIF');
         if (in_array($file_extension, $extensions_autorisees)){
            if(move_uploaded_file($file_tmp_name,$file_dest)){
                echo "Uploaded";
            }else{       
                echo "Erreur";
            }
        }else{
            echo "NO";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ticket</title>
        <link rel="shortcut icon" href="Ticket-icon.png">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="animate/animate.css">
        <link rel="stylesheet" href="ticketStyle.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body style='background-image: url("ticket.jpg")'>
        <div class="container Total">
            <div class="container fils">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="FromHere.png" class="img-responsive left-side animated bounceInLeft" alt="Ticket">
                    </div>
                    <div class="col-lg-6">
                        <div class="container right-side animated flash delay-1s">
                            <form action="ticketGen.php" method="POST" enctype="multipart/form-data">
                                <h3>Reserve Your Ticket</h3>
                                <div class="form-group row">
                                    <label for="nom" class=" col-lg-3 col-sm-2 col-form-label"> Name </label>
                                    <div class="col-sm-10">
                                        <input type="text" id="nom" name="nomm" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mail" class="col-lg-3 col-sm-2 col-form-label"> Address </label>
                                    <div class="col-sm-10">
                                        <input type="email" id="mail"  name="adresse" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tel" class=" col-lg-3 col-sm-2 col-form-label"> Phone </label>
                                    <div class="col-sm-10">
                                        <input type="number" id="tel"  name="tele" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="uploadi" class=" col-lg-3 col-sm-2 col-form-label"> Upload CIN </label>
                                    <div class="col-sm-10">
                                        <input type="file" id="uploadi"  name="fichier" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10 col-lg-4">
                                        <button type="submit" name ="upload" class="btn btn-danger">Done</button>
                                    </div>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Font Awsome-->
        <script src="https://kit.fontawesome.com/009122852a.js"></script>
    </body>
</html>