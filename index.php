<?php

include('./pages/conection.php');
include('./pages/funciones.php');

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
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/fontawesome-all.min.css" rel="stylesheet">
    <link href="./css/aos.min.css" rel="stylesheet">
    <link href="./css/swiper.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: #D9DFC2;
        }
    </style>
    <!-- Favicon -->
    <!-- <link rel="icon" href="./assets/images/favicon.png"> -->
</head>
<body>
    
    <!-- Navigation -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">

            <!-- Image Logo -->
            <!-- <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.svg" alt="alternative"></a> -->

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index.html"><img src="./assets/images/emLogo.png" style="width: 130px; height: 100px;" alt=""></a>

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#header">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/about.html">Conócenos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/products.php">Catalogo de soluciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plans">Nuestro Trabajo</a>
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
                        <a class="nav-link" href="#contact">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/login.php?padre=3">Admin</a>
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

    <!-- About -->
    <section class="aboutHome d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h3>Conoce lo que tu cultivo necesita <br> de forma rapida y sencilla</h3>
                </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <img class="img-fluid" src="./assets/images/about.jpg" alt="about" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->

    <br><br><br>
    <!-- Services -->
    <section class="services d-flex align-items-center py-5" id="services">
        <div class="container text-light text-center">
            <div class="text-center pb-4" >
                <h2 class="py-2">Somos una distribuidora con </h2><span><h2 class="py-2" style="color:orange;"> +40 soluciones</h2></span>
                <h2 class="py-2">distintas para tu cultivo</h2>
            </div>
            <div class="row gy-4 " data-aos="zoom-in">
                <?php
                    for ($i=1; $i < 10; $i++) { 
                        ?>
                        <div class="col-lg-3">
                            <div class="card bg-transparent">.
                        <?php
                                echo "<img src='./assets/products/".$i.".svg'>"
                        ?>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of services -->
    <br><br><br>
    <!-- Services -->
    <section class="aboutHome d-flex align-items-center text-light py-5" id="about">
        <div class="container text-light text-center">
            <div class="text-center pb-4" >
                <h2 class="py-2">Estamos 100% comprometidos con nuestros valores, por esa razón solo estamos asociados con aquellas marcas que compartan "La Nueva Forma De Ver La Agricultura".</h2>
                <img src="./assets/images/home/banner.svg" alt="" class="img-fluid">
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of services -->

    <?php

        $query = "select count(*) from testimonios";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            ?>
                 <!-- Testimonials -->
                <div class="slider-1 testimonial text-light d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="text-center w-lg-75 m-auto pb-4">
                                <h1>TESTIMONIOS</h1>
                            </div>
                        </div> <!-- end of row -->
                        <div class="row p-2" data-aos="zoom-in">
                            <div class="col-lg-12">

                                <!-- Card Slider -->
                                <div class="slider-container">
                                    <div class="swiper-container card-slider">
                                        <div class="swiper-wrapper">
                                            <?php
                                                $query = "select Nombre, a.Descripcion, Frase, Imagen from testimonios t, tipoactividad a where t.IdActividad = a.IdActividad order by IdTestimonio";
                                                $result = mysqli_query($conn,$query);
                                                if(mysqli_num_rows($result)>0){
                                                    while ($row=mysqli_fetch_array($result)){
                                                        ?>
                                                        <!-- Slide -->
                                                        <div class="swiper-slide">
                                                            <div class="testimonial-card p-4">
                                                                <p> <?php echo $row[2]; ?></p>
                                                            
                                                                <div class="d-flex pt-4">
                                                                    <div>
                                                                        <?php echo "<img class='avatar' src='./testimonials/images/".$row[3]."' alt='testimonial'>"; ?>
                                                                    </div>
                                                                    <div class="ms-3 pt-2">
                                                                        <h6><?php echo $row[0]; ?></h6>
                                                                        <p><?php echo $row[1]; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end of swiper-slide -->
                                                        <!-- end of slide -->
                                                        <?php
                                                    }
                                                }
                                            
                                            ?>
                                        </div> <!-- end of swiper-wrapper -->
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <!-- end of add arrows -->
                    
                                    </div> <!-- end of swiper-container -->
                                </div> <!-- end of slider-container -->
                                <!-- end of card slider -->

                            </div> <!-- end of col -->
                        </div> <!-- end of row -->
                    </div> <!-- end of container -->
                </div> <!-- end of testimonials -->
            <?php
        }else{
            
        }

    ?>
   

    <!-- Contact -->
    <section class="contact d-flex align-items-center py-5" id="contact">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
                    <div style="width:90%">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <p>CONTACT</p>
                            <h2 class="py-2">Send your query</h2>
                            <p class="para-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dicta mollitia totam explicabo obcaecati quia laudantium repudiandae.</p>
                        </div>
                        <div>
                            <div class="row" >
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input" id="exampleFormControlInput1" placeholder="Enter name">
                                    </div>                                
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="email" class="form-control form-control-input" id="exampleFormControlInput2" placeholder="Enter phone number">
                                    </div>                                 
                                </div>
                            </div>
                            <div class="form-group py-1">
                                <input type="email" class="form-control form-control-input" id="exampleFormControlInput3" placeholder="Enter email">
                            </div>  
                            <div class="form-group py-2">
                                <textarea class="form-control form-control-input" id="exampleFormControlTextarea1" rows="6" placeholder="Message"></textarea>
                            </div>                            
                        </div>
                        <div class="my-3">
                            <a class="btn form-control-submit-button" href="#your-link">Submit</a>
                        </div>
                    </div> <!-- end of div -->
                </div> <!-- end of col -->
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
                    <div class="container">
                        <img class="img-fluid d-none d-lg-block" src="./assets/images/contact.jpg" alt="contact">        
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of contact -->



    <!-- Footer -->
    <section class="footer text-light">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="col-lg-3 py-4 py-md-5">
                    <div class="d-flex align-items-center">
                        <h4 class="">EM Agroinsumos</h4>
                    </div>
                    <p class="py-3 para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi repudiandae explicabo esse maxime, impedit rem voluptatibus amet error quas.</p>
                    <div class="d-flex">
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-facebook-f fa-2x py-2"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-twitter fa-2x py-2"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-instagram fa-2x py-2"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        <h4 class="py-2">Paginas</h4>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#about"><p class="ms-3">Conocenos</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#"><p class="ms-3">Clientes</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#"><p class="ms-3">Productos</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#"><p class="ms-3">Testimonios</p></a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        <h4 class="py-2">Links Frecuentes</h4>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="privacy.html"><p class="ms-3">Privacy</p></a>
                            
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="terms.html"><p class="ms-3">Terms</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link"><p class="ms-3">Contacto</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link"><p class="ms-3">FAQ</p></a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div class="d-flex align-items-center">
                        <h4>Suscribirse</h4>
                    </div>
                    <p class="py-3 para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, ab.</p>
                    <div class="d-flex align-items-center">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control p-2" placeholder="Enter Email" aria-label="Recipient's email">
                            <button class="btn-secondary text-light"><i class="fas fa-envelope fa-lg"></i></button>       
                        </div>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of footer -->


    <!-- Bottom -->
    <div class="bottom py-2 text-light" >
        <div class="container d-flex justify-content-between">
            <div>
                <p>Copyright © Zeetech</p><br>
                <p>Distributed by: <a href="https://www.zeetech.com.mx/">Zeetech</a></p>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of bottom -->
 
    
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="assets/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    
    <!-- Scripts -->
    <script src="./js/bootstrap.min.js"></script><!-- Bootstrap framework -->
    <script src="./js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="./js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
    <script src="./js/aos.js"></script><!-- AOS on Animation Scroll -->
    <script src="./js/script.js"></script>  <!-- Custom scripts -->
</body>
</html>