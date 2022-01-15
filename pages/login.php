<?php
    include('conection.php');
    include('funciones.php');
    session_start();
    $correo = "";
    if ($_SESSION['correo'] != "") {
        
    }else {
        $_SESSION['correo'] = "";
    }
    $bandera = "";
    $padre = "";
    $producto = "";
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

    $pdf = "";
    if(isset($_POST["pdf"])){
        $pdf = trim($_POST["pdf"]); 
        if ($pdf == ""){
            if(isset($_GET["pdf"])){
                $pdf = $_GET["pdf"];
                if ($pdf == ""){
                    $pdf = "";
                }
            }
        }
    }    
    else{ 
        if ($pdf == ""){
            $pdf = "";
        }
        if(isset($_GET["pdf"])){ 
            $pdf = $_GET["pdf"];
            if ($pdf == ""){
                $pdf = "";
            }
        }    
    }

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

    if(isset($_POST["producto"])){
        $producto = trim($_POST["producto"]); 
        if ($producto == ""){
            if(isset($_GET["producto"])){
                $producto = $_GET["producto"];
                if ($producto == ""){
                    $producto = "";
                }
            }
        }
    }    
    else{ 
        if ($producto == ""){
            $producto = "";
        }
        if(isset($_GET["producto"])){ 
            $producto = $_GET["producto"];
            if ($producto == ""){
                $producto = "";
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
    <title>Login</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/fontawesome-all.min.css" rel="stylesheet">
    <link href="../css/aos.min.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script type="text/javascript" src="../js/main.js"></script>
    <!-- Favicon -->
    <link rel="icon" href="../assets/images/favicon.png">
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
    <script language="javascript">
        $(document).ready(function(){
            $("#servicio").change(function () {
                $("#servicio option:selected").each(function () {
                    id_servicio = $(this).val();
                    $.post("./getCategoria.php", { id_servicio: id_servicio }, function(data){
                        $("#categoria").html(data);
                    });            
                });
            })
        });
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
</head>
<body>
    <?php
        if ($_SESSION['correo'] != "" && $padre != 3) {
            //QUIERE DECIR QUE ESTA EL USUARIO
            $_SESSION['correo'] = "";
            header("Location:login.php?padre=3&pdf=".$pdf);
        } else if ($padre == 3 && $_SESSION['correo'] == "admin@gmail.com"){
            //Va para el admin
            //Entonces lo llevo a la pagina de admin
        } else if ($padre == 3 && $_SESSION['correo'] == ""){
            ?>
            <section class="vh-100">
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="../assets/images/emLogo.png" class="img-fluid"
                        alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form action="verifySession.php?padre=2" method="post" class="form-container">

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" name="correo"/>
                                <label class="form-label" for="form3Example3">Correo Electronico</label>
                            </div>
                            <input type="hidden" value="<?php echo $pdf; ?>" name = "pdf">
                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" name="contrasenia"/>
                                <label class="form-label" for="form3Example4">Contraseña</label>
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
                                    Datos incorrectos!!
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                    </div>
                </div>
            </section>
            <?php
        } else if ($_SESSION['correo'] == "" && $padre != 3){
            //Hacer login de persona
            ?>
            <section class="vh-100">
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="../assets/images/emLogo.png" class="img-fluid"
                        alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form action="verifySession.php?padre=1" method="post" class="form-container">

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" name="correo"/>
                                <label class="form-label" for="form3Example3">Correo Electronico</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" name="contrasenia"/>
                                <label class="form-label" for="form3Example4">Contraseña</label>
                            </div>
                            <input type="hidden" value="<?php echo $pdf; ?>" name = "pdf">
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn btn-success btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">¿Aun no tienes cuenta? <a href="createAccount.php"
                                    class="link-danger">Register</a></p>
                            </div>

                        </form>
                        <?php
                            if($bandera != ""){
                                ?>
                                <br>
                                <div class="alert alert-danger" role="alert">
                                    Datos incorrectos!!
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                    </div>
                </div>
            </section>
            <?php
        }
        
    ?>
    
    <!-- Scripts -->
    <script src="../js/bootstrap.min.js"></script><!-- Bootstrap framework -->
    <script src="../js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="../js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
    <script src="../js/aos.js"></script><!-- AOS on Animation Scroll -->
    <script src="../js/script.js"></script>  <!-- Custom scripts -->
</body>
</html>