<?php

include('conection.php');
include('funciones.php');


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
                        <a class="nav-link" href="#">Conócenos</a>
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


    
    
    <?php
        $id = 0;
        $nombre = "";
        $descripcion = "";
        $query = "select IdTipoProducto, Descripcion, Resumen from tipoproductos order by IdTipoProducto asc";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){
                $id = $row['IdTipoProducto'];
                $nombre = $row['Descripcion'];
                $descripcion = $row['Resumen'];
                ?>
                <section style="background-color: #D9DFC2;">
                    <br><br><br>
                    <div class="container text-light">
                        <div class="text-center pb-4" >
                            <h2 class="py-2"><?php echo $nombre; ?></h2>
                            <h4 class="para-light"><?php echo $descripcion; ?></h4>
                        </div>
                        <div class="row">
                        <?php
                            $query2 = "select IdProducto, Nombre, Descripcion from productos where IdTipoProducto = ".$id;
                            //echo $query2;
                            $result2 = mysqli_query($conn,$query2);
                            if(mysqli_num_rows($result2)>0){
                                while($row2 = mysqli_fetch_array($result2)){
                                    $idP = $row2['IdProducto'];
                                    $nombreProduct = $row2['Nombre'];
                                    $descripcionp = $row2['Descripcion'];
                                    ?>
                                        <div class="col-md">
                                            <?php echo '<a href="./specifications.php?id='.$idP.'&tipo='.$id.'">'; ?>
                                                <div class="productsCard bg-transparent hover-zoom image">
                                                    <?php
                                                        $query3 = "select Imagen from productos where IdProducto = ".$idP;
                                                        $result3 = mysqli_query($conn,$query3);
                                                        $imagen = "";
                                                        while ($row3 = mysqli_fetch_array($result3)){
                                                            $imagen = $row3['Imagen'];
                                                        }
                                                        //echo $imagen;
                                                        echo '<img src="../products/images/'.$imagen.'" class="img-fluid"
                                                        >';
                                                    ?>
                                                    <br><br>
                                                    <div class="text-center">
                                                        <h1>
                                                            <?php echo $nombreProduct; ?>
                                                        </h1>
                                                        <p style="text-align: justify; text-justify: inter-word;">
                                                            <?php echo $descripcionp; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php
                                }
                            } 
                        ?>
                            <div class="col-md">
                                <a href="./specifications.html">
                                    <div class="productsCard bg-transparent image">
                                        <img src="../assets/products/2.png" class="img-fluid">
                                        <br><br>
                                        <div class="text-center">
                                            <h1>
                                                Titulo de Producto
                                            </h1>
                                            <p style="text-align: justify; text-justify: inter-word;">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md">
                                <a href="./specifications.html">
                                    <div class="productsCard bg-transparent image">
                                        <img src="../assets/products/2.png" class="img-fluid">
                                        <br><br>
                                        <div class="text-center">
                                            <h1>
                                                Titulo de Producto
                                            </h1>
                                            <p>
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div> <!-- end of row -->
                    </div> <!-- end of container -->
                </section> <!-- end of services -->
                <?php
            }
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