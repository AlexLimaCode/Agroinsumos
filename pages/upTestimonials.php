<?php

    include('conection.php');
    include('funciones.php');

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
        <h4 class="text-center">Llena los datos del testimonio</h4>
            <form method='post' enctype='multipart/form-data' action='./upload.php?padre=2' name='principal'>
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label" style="color:black;">Nombre del usuario</label>
                    <input type="text" class="form-control" id="validationDefault01" name="name" placeholder="Nombre" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label" style="color:black;">A que se dedica:</label>
                    <?php
                        LlenaComboSaltado("select IdActividad, Descripcion from tipoactividad order by IdActividad","algo","actividad");
                    ?>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label" style="color:black;">Tipo de cultivo que tiene</label>
                    <?php
                        LlenaComboSaltado("select IdTipo, Descripcion from tipocultivo order by IdTipo","algo","cultivo");
                    ?>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label" style="color:black;">Descripcion breve del testimonio</label>
                    <input type="text" class="form-control" id="validationDefault02" name="des" placeholder="Un campesino ..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label" style="color:black;">Frase relevante del testimonio</label>
                    <input type="text" class="form-control" id="validationDefault02" name="frase" placeholder="El mejor producto..." required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label" style="color:black;">Imagen</label>
                    <input type="file" class="form-control" id="validationDefault02" name="im1" required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label" style="color:black;">Video</label>
                    <input type="file" class="form-control" id="validationDefault02" name="vi1" required>
                </div>
                <br>
                <button class='btn btn-outline-dark btnBajo' type='submit' href='./upload.php?padre=2'>Registrar</button>
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