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
            <a class="navbar-brand logo-text" href="../index.php"><img src="../assets/images/emLogo.png"
                    style="width: 130px; height: 100px;" alt=""></a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.html">Conócenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./products.php">Catalogo de soluciones</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Nuestro Trabajo</a>
                    </li> -->
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
                        <a class="nav-link" href="../index.php#contact">Contacto</a>
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
                echo "<section style='background-color: #D9DFC2;' id=".$id.">";
                ?>
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
                                        <div class="col-md-4">
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
                            }else{
                                echo "<br>";
                                echo "<h5>En proceso de actualización</h5>";
                                echo "<br>";
                            } 
                        ?>
                        </div> <!-- end of row -->
                    </div> <!-- end of container -->
                </section> <!-- end of services -->
                <?php
            }
        }

    ?>


<!-- Contact -->
<section class="contact d-flex align-items-center py-5" id="contact">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5"
                    data-aos="fade-right">
                    <div style="width:90%">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <p style="text-align: justify; text-justify: inter-word;">CONTACTO</p>
                            <h2 class="py-2">Envianos tus requerimietos</h2>
                            <p class="para-light">
                                Realizamos cualquier cotizacion de acuerdo a tus necesidades y tu presupuesto
                            </p>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input"
                                            id="exampleFormControlInput1" placeholder="Nombre completo" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input"
                                            id="exampleFormControlInput2" placeholder="Telefono" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group py-1">
                                <input type="email" class="form-control form-control-input"
                                    id="exampleFormControlInput3" placeholder="Correo Electronico" required>
                            </div>
                            <div class="form-group py-1">
                                <label> Selecciona el tipo de cultivo:</label>
                                <br>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="Jitomate">Jitomate</option>
                                    <option value="Pepino">Pepino</option>
                                    <option value="Pimiento">Pimiento</option>
                                    <option value="Flores">Flores</option>
                                    <option value="Fresa">Fresa</option>
                                    <option value="Maiz">Maíz</option>
                                    <option value="Trigo">Trigo</option>
                                    <option value="Cebada">Cebada</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="form-group py-1">
                                <label>Actividad:</label>
                                <br>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="Producto">Producto</option>
                                    <option value="Asesor">Asesor</option>
                                    <option value="Estudiante">Estudiante</option>
                                </select>
                            </div>
                            <div class="form-group py-1">
                                <div id="country">
                                    <label>País</label>
                                    <input class="form-control" id="countryInput" type="text" tabindex="3"
                                        name="country">
                                </div>
                                <div id="city">
                                    <label>Ciudad</label>
                                    <input class="form-control" id="cityInput" type="text" tabindex="3" name="city">
                                </div>
                            </div>
                            <div class="form-group py-2">
                                <textarea class="form-control form-control-input" id="exampleFormControlTextarea1"
                                    rows="6" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="my-3">
                            <a class="btn btn-success" href="#your-link">Enviar</a>
                        </div>
                    </div> <!-- end of div -->
                </div> <!-- end of col -->
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
                    <div class="container">
                        <img class="img-fluid d-none d-lg-block" src="../assets/images/emLogo.png" alt="contact"
                            style="width:600px; height:500px;">
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of contact -->
    <!-- Scripts -->
    <script src="../js/bootstrap.min.js"></script><!-- Bootstrap framework -->
    <script src="../js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="../js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
    <script src="../js/aos.js"></script><!-- AOS on Animation Scroll -->
    <script src="../js/script.js"></script>  <!-- Custom scripts -->
</body>
</html>