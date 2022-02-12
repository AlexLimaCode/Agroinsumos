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

    if ($padre == 1) {
        //Sube producto
        $name = $_POST['name'];  
        $tipo = $_POST['tipo']; 
        $des = $_POST['des'];
        $contenido = $_POST['contenido'];
        $presentaciones = $_POST['presentaciones'];
        $beneficios = $_POST['beneficios'];
        $id = 0;
        $query = "INSERT INTO productos(Nombre, Descripcion, IdTipoProducto, Contenido, Presentaciones, Beneficios) 
        VALUES('".$name."','".$des."','".$tipo."', '".$contenido."', '".$presentaciones."', '".$beneficios."')";
        $result = mysqli_query($conn,$query);
        $query = "select IdProducto from productos order by IdProducto desc limit 1";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)){
                $id = $row[0];
            }
        }else{
            $id = $id + 1;
        }


        //imagen
        $imagen=$_FILES['im1']['name'];
        $tipo = $_FILES['im1']['type'];
        $temp = $_FILES['im1']['tmp_name'];
        //$imagen = "imagen-".$id;
        //echo $imagen."\n";
        move_uploaded_file($temp,'../products/images/'.$id.'-'.$imagen);

        $pdf = $_FILES['pdf']['name'];
        $tipoPdf = $_FILES['pdf']['type'];
        $tempPdf = $_FILES['pdf']['tmp_name'];
        move_uploaded_file($tempPdf,'../products/pdf/'.$id.'-'.$pdf);

        // Now let's Insert the pdf path into database
        $sql = "update productos set Imagen = '".$id."-".$imagen."', Pdf = '".$id.'-'.$pdf."' where IdProducto = ".$id;
        //echo $sql;
        mysqli_query($conn, $sql);
        header("Location: upProducts.php?padre=1");

    }else if ($padre == 2) {
        //Sube testimonio
        $name = $_POST['name'];
        $actividad = $_POST['actividad'];  
        $cultivo = $_POST['cultivo']; 
        $des = $_POST['des'];
        $frase = $_POST['frase'];
        $id = 0;
        $query = "INSERT INTO testimonios(Nombre, IdActividad, IdTipo, Descripcion, Frase) 
        VALUES('".$name."','".$actividad."','".$cultivo."','".$des."','".$frase."')";
        $result = mysqli_query($conn,$query);
        //echo $query."\n\n\n";
        $query = "select IdTestimonio from testimonios order by IdTestimonio desc limit 1";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)){
                $id = $row[0];
            }
        }else{
            $id = $id + 1;
        }
        

        //imagen
        $imagen=$_FILES['im1']['name'];
        $tipo = $_FILES['im1']['type'];
        $temp = $_FILES['im1']['tmp_name'];
        //$imagen = "imagen-".$id;
        //echo $imagen."\n";
        move_uploaded_file($temp,'../testimonials/images/'.$id.'-'.$imagen);



        //Video
        $video_name = $_FILES['vi1']['name'];
        $tmp_name = $_FILES['vi1']['tmp_name'];
        $error = $_FILES['vi1']['error'];

        if ($error === 0) {
            $video_ex = pathinfo($video_name, PATHINFO_EXTENSION);

            $video_ex_lc = strtolower($video_ex);

            $allowed_exs = array("mp4", 'webm', 'avi', 'flv', 'M4V');

            if (in_array($video_ex_lc, $allowed_exs)) {
                
                $new_video_name = uniqid($id."-video-", false). '.'.$video_ex_lc;
                $video_upload_path = '../testimonials/videos/'.$new_video_name;
                //echo $video_upload_path."\t";
                move_uploaded_file($tmp_name, $video_upload_path);

                // Now let's Insert the video path into database
                $sql = "update testimonios set Imagen = '".$id."-".$imagen."', Video = '".$new_video_name."' where IdTestimonio = ".$id;
                //echo $sql;
                mysqli_query($conn, $sql);
                header("Location: upTestimonials.php?padre=1");
            }else {
                header("Location: upTestimonials.php?padre=2");
            }
        }
    }else if ($padre == 3){
        $id = 0;
        $url = $_POST['url'];
        $query = "INSERT INTO banner(UrlImagen) VALUES ('".$url."')";
        $result = mysqli_query($conn,$query);
        $query = "select IdBanner from banner order by IdBanner desc limit 1";
        $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) {
            while ($row=mysqli_fetch_array($result)){
                $id = $row[0];
            }
        }else{
            $id = $id + 1;
        }
        //imagen
        $imagen=$_FILES['im1']['name'];
        $tipo = $_FILES['im1']['type'];
        $temp = $_FILES['im1']['tmp_name'];
        //$imagen = "imagen-".$id;
        //echo $imagen."\n";
        move_uploaded_file($temp,'../banner/'.$id.'-'.$imagen);
        $sql = "update banner set Imagen = '".$id."-".$imagen."' where IdBanner = ".$id;
        mysqli_query($conn, $sql);
        header("Location: upBanner.php?padre=1");
    }

?>