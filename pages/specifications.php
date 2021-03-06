<?php

    include('conection.php');
    include('funciones.php');
    $id = 0;
    $idp = 0;
    if(isset($_POST["id"])){
        $id = trim($_POST["id"]); 
        if ($id == ""){
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                if ($id == ""){
                    $id = "";
                }
            }
        }
    }    
    else{ 
        if ($id == ""){
            $id = "";
        }
        if(isset($_GET["id"])){ 
            $id = $_GET["id"];
            if ($id == ""){
                $id = "";
            }
        }    
    }
    if(isset($_POST["idp"])){
        $idp = trim($_POST["idp"]); 
        if ($idp == ""){
            if(isset($_GET["idp"])){
                $idp = $_GET["idp"];
                if ($idp == ""){
                    $idp = "";
                }
            }
        }
    }    
    else{ 
        if ($idp == ""){
            $idp = "";
        }
        if(isset($_GET["idp"])){ 
            $idp = $_GET["idp"];
            if ($idp == ""){
                $idp = "";
            }
        }
    }

    $nombre = "";
    $descripcion = "";
    $contenido = "";
    $presentaciones = "";
    $beneficios = "";
    $pdf = "";
    $imagen = "";

    $query = "select Nombre, p.Descripcion, Contenido, Presentaciones, Beneficios, Imagen, Pdf, t.Descripcion from productos p, tipoproductos t where p.IdTipoProducto = t.IdTipoProducto and IdProducto = ".$id;
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result)){
            $nombre = $row['Nombre'];
            $descripcion = $row[1];
            $contenido = $row['Contenido'];
            $presentaciones = $row['Presentaciones'];
            $beneficios = $row['Beneficios'];
            $imagen = $row['Imagen'];
            $pdf = $row['Pdf'];
            $tipoproductos = $row[7];
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
        <title>EM Agroinsumos</title>
    
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/fontawesome-all.min.css" rel="stylesheet">
        <link href="../css/aos.min.css" rel="stylesheet">
        <link href="../css/swiper.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <!-- Favicon -->
        <link rel="icon" href="../assets/images/favicon.png">
    
    </head>
<body>

     <!-- Navigation -->
     <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> -->

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="../index.html"><img src="../assets/images/emLogo.png" style="width: 130px; height: 100px;" alt=""></a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Con??cenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catalogo de soluciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuestro Trabajo</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false" href="#">Drop</a>
                        
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="article.html">Article Details</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="terms.html">Terms Conditions</a></li>
                            <li><div class="dropdown-divider"></div></li>
                            <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    
    <!-- end of navigation -->

    <!-- Home -->
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5"  data-aos="fade-right"> 
            <h1 class="headline">EM <br>AGROINSUMOS</h1>
            <h4 class="para para-light py-3">La agricultura es nuestra cultura.</h4>
        </div> <!-- end of container -->
    </section> <!-- end of home -->


    
    <section style="background-color: #D9DFC2;">
        <br><br><br>
        <div class="container text-light">
            <div class="text-center pb-4" >
                <h2 class="py-2"><?php echo $nombre;?></h2>
            </div>
            <br><br><br>
            <div class="row">
                
                <div class="col-4">
                   <?php echo '<img src="../products/images/'.$imagen.'" class="img-fluid" alt="">' ?>
                </div>
                <div class="col-md">
                    <h5>Sobre el producto</h5>
                    <hr>
                    <p><?php echo $descripcion; ?></p>
                    <br>
                    <h5>Beneficios</h5>
                    <hr>
                    <p><?php echo $beneficios; ?></p>
                    <br>
                    <h5>Contenido</h5>
                    <hr>
                    <p><?php echo $contenido; ?></p>
                    <br>
                    <h5>Presentaciones</h5>
                    <hr>
                    <p><?php echo $presentaciones; ?></p>
                    <br><br><br>
                    <?php echo '<a class="btn btn-primary" href="verifySession.php?pdf='.$pdf.'">Solicitar ficha t??cnica</a>'; ?>
                    <br><br>
                </div>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of services -->

    <!-- Scripts -->
    <script src="../js/bootstrap.min.js"></script><!-- Bootstrap framework -->
    <script src="../js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="../js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
    <script src="../js/aos.js"></script><!-- AOS on Animation Scroll -->
    <script src="../js/script.js"></script>  <!-- Custom scripts -->
</body>
</html>