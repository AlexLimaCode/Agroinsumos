<?php

include('conection.php');
include('funciones.php');

$padre = "";
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
    <title>Eliminar Productos</title>
</head>
<body>
    <br><br><br>
    <div class="container">
        <div class="container">
            <form method='post' enctype='multipart/form-data' action='./delete.php' name='principal'>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Selecciona para eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if ($padre == 1) {
                                $query = "select IdTestimonio, Nombre, t.Descripcion from testimonios p, tipocultivo t where t.IdTipo = p.IdTipo order by IdTestimonio";
                            }else{
                                $query = "select IdProducto, Nombre, t.Descripcion from productos p, tipoproductos t where t.IdTipoProducto = p.IdTipoProducto order by IdProducto";
                            }
                            
                            $result = mysqli_query($conn,$query);
                            if(mysqli_num_rows($result)>0){
                                while ($row=mysqli_fetch_array($result)){
                                    $id = $row[0];
                                    $name = $row[1];
                                    $descripcion = $row[2];
                        ?>
                                    <tr>
                                        <th scope="row"><?php echo $id ?></th>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $descripcion ?></td>
                                        <?php echo "<td><input type='checkbox' name='chk[]' value='".$id."'></td></tr></td>" ?>
                                    </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <br>
                <?php
                    if ($padre == 1) {
                        ?>
                        <input type="hidden" name='padre' value="1">
                        <?php
                    }else{
                        ?>
                        <input type="hidden" name='padre' value="2">
                        <?php
                    }
                    ?>
                <button class ='btn btn-primary' type="submit" href="./delete.php">Eliminar</button>
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