<?php
    include ('conection.php');
    include ('funciones.php');

    $padre="";
    if(isset($_POST["padre"])){
        $padre = trim($_POST["padre"]); 
        if ($padre == ""){
            if(isset($_GET["padre"])){
                $padre = $_GET["padre"];
                if ($padre == ""){
                    $padre = "";
                }
            }
        }
    }    
    else{ 
        if ($padre == ""){
            $padre = "";
        }
        if(isset($_GET["padre"])){ 
            $padre = $_GET["padre"];
            if ($padre == ""){
                $padre = "";
            }
        }    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome-all.min.css" rel="stylesheet">
    <link href="../css/aos.min.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script type="text/javascript" src="../js/main.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="mb-3">
        <br>
        <h4 class="text-center">Llena los datos de la imagen</h4>
            <form method='post' enctype='multipart/form-data' action='upload.php?padre=3' name='principal'>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label" style="color:black;">Url</label>
                    <input type="text" class="form-control" id="validationDefault01" name="url" placeholder="Copia y pega URL" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label" style="color:black;">Imagen</label>
                    <input type="file" class="form-control" id="validationDefault02" name="im1" required>
                </div>
                <br>
                <button class='btn btn-outline-dark btnBajo' type='submit' href='upload.php?padre=3'>Registrar</button>

                <?php

                if ($padre == 1) {
                ?>
                    <br>
                    <div class="alert alert-success" role="alert">
                        Registro exitoso!!
                    </div>
                <?php
                }else if ($padre == 2) {
                ?>
                    <br>
                    <div class="alert alert-danger" role="alert">
                        Datos incorrectos!!
                    </div>
                <?php
                }

                ?>
            </form>
            <br>
            <a class ='btn btn-primary' href="./dashboard.php">Regresar</a>
        </div>
    </div>
    <!-- Scripts -->
    <script src="../js/bootstrap.min.js"></script><!-- Bootstrap framework -->
    <script src="../js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="../js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
    <script src="../js/aos.js"></script><!-- AOS on Animation Scroll -->
    <script src="../js/script.js"></script>  <!-- Custom scripts -->
</body>
</html>