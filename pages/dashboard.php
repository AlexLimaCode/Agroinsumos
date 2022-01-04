<?php
    include ('conection.php');
    include ('funciones.php');
    session_start();

    if ($_SESSION['correo'] != "") {
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
            <title>Dashboard Admin</title>
        </head>
        <body>
            <div class="container text-center" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-md">
                        <div class="card" style="width: 30rem;">
                            <img src="../assets/images/emLogo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Testimonios</h5>
                                <p class="card-text">Sube un testimonio que contenga: 1 imagen, 1 video, 1 breve descripcion, 1 frase relevante, nombre, oficio y tipo de cultivo.</p>
                                <br>
                                <a href="upTestimonials.php" class="btn btn-primary">Subir testimonio</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <!-- <div class="card" style="width: 18rem;">
                            <img src="../assets/images/emLogo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <br>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md">
                        <div class="card" style="width: 30rem;">
                            <img src="../assets/images/emLogo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Productos</h5>
                                <p class="card-text">Sube un producto que contenga titulo, descripcion, lista de contenido (separada por comas), foto, tipo de producto, presentaciones (separadas por comas), beneficios y pdf</p>
                                <br>
                                <a href="#" class="btn btn-primary">Subir producto</a>
                            </div>
                        </div>
                    </div>
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
        <?php
    }else{
        header("Location:login.php?bandera=2");
    }
?>