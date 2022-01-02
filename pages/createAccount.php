<?php

    include('conection.php');
    include('funciones.php');

    $bandera = "";
    if(isset($_POST["bandera"])){
        $bandera = trim($_POST["bandera"]); 
        if ($bandera == ""){
            if(isset($_GET["bandera"])){
                $bandera = $_GET["bandera"];
                if ($bandera == ""){
                    $bandera = "";
                }
            }
        }
    }    
    else{ 
        if ($bandera == ""){
            $bandera = "";
        }
        if(isset($_GET["bandera"])){ 
            $bandera = $_GET["bandera"];
            if ($bandera == ""){
                $bandera = "";
            }
        }    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Crear Cuenta</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome-all.min.css" rel="stylesheet">
    <link href="../css/aos.min.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <!-- Favicon -->
    <link rel="icon" href="../assets/images/favicon.png">
    <script language="javascript">
        $(document).ready(function(){
            $("#estado").change(function () {
                $("#estado option:selected").each(function () {
                    id_estado = $(this).val();
                    $.post("./getMunicipio.php", { id_estado: id_estado }, function(data){
                        $("#municipio").html(data);
                    });            
                });
            })
        });
    </script>
    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
            height: 100%;
        }
        }
    </style>
</head>
<body>
<section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="../assets/images/emLogo.png" class="img-fluid"
                alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form action="verifySession.php?padre=2" enctype='multipart/form-data' method="post" class="form-container" name='principal'>
                    <br>
                    <!-- Email input -->
                    <div class="form-outline ">
                        <input type="email" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Ingresa un correo valido" name="correo" required />
                        <label class="form-label" for="form3Example3">Correo Electronico</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline">
                        <input type="password" id="form3Example4" class="form-control form-control-lg"
                        placeholder="Ingresa una contraseña para inciar sesión" name="contrasenia" required />
                        <label class="form-label" for="form3Example4">Contraseña</label>
                    </div>

                    <!-- Name input -->
                    <div class="form-outline ">
                        <input type="text" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Ingresa tu nombre completo" name="nombre" required />
                        <label class="form-label" for="form3Example3">Nombre Completo</label>
                    </div>

                    <!-- telefono input -->
                    <div class="form-outline ">
                        <input type="number" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Ingresa un numero telefonico valido" name="telefono" required/>
                        <label class="form-label" for="form3Example3">Numero Telefonico</label>
                    </div>

                    <!-- Tipo de cultivo input -->
                    <div class="form-outline">
                        <?php
                        LlenaComboSaltado("select IdTipo, Descripcion from tipocultivo order by IdTipo","algo","cultivo");
                        ?>
                        <label class="form-label" for="form3Example4">Tipo de cultivo</label>
                    </div>

                    <!-- Actividad input -->
                    <div class="form-outline ">
                        <?php
                        LlenaComboSaltado("select IdActividad, Descripcion from tipoactividad order by IdActividad","algo","actividad");
                        ?>
                        <label class="form-label" for="form3Example4">Tipo de Actividad</label>
                    </div>


                    <div class='form-outline '>
                        <?php
                        LlenaComboSaltado("select id, estado from estados order by id","algo","estado");
                        ?>
                        <label class="form-label" for="form3Example4">Estado</label>
                    </div>
                    <div class='form-outline "'>
                        <select class='form-select' aria-label='Default select example' name="municipio" id="municipio" required>
                        </select>
                        <label class="form-label" for="form3Example4">Municipio</label>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-success btn-lg"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
                    </div>
                </form>
                <?php
                    if($bandera != ""){
                        ?>
                        <br>
                        <div class="alert alert-danger" role="alert">
                            Ya existe una cuenta con esos datos!!
                        </div>
                        <?php
                    }
                ?>
            </div>
            </div>
        </div>
        
    </section>
    <!-- Scripts -->
    <script src="../js/bootstrap.min.js"></script><!-- Bootstrap framework -->
    <script src="../js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="../js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
    <script src="../js/aos.js"></script><!-- AOS on Animation Scroll -->
    <script src="../js/script.js"></script>  <!-- Custom scripts -->
</body>
</html>