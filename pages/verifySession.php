<?php

    include('conection.php');
    session_start();

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

    $pdf="";
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
    // echo "Entro";

    if ($padre==1) { //Si viene del login
        if ($_SESSION['correo']!='') {
            header("Location:showPdf.php?pdf=".$pdf);
        }else{

            $correo = "";
            $contrasenia = "";

            if(isset($_POST["correo"])){
                $correo = trim($_POST["correo"]); 
                if ($correo == ""){
                    if(isset($_GET["correo"])){
                        $correo = $_GET["correo"];
                        if ($correo == ""){
                            $correo = "";
                        }
                    }
                }
            }    
            else{ 
                if ($correo == ""){
                    $correo = "";
                }
                if(isset($_GET["correo"])){ 
                    $correo = $_GET["correo"];
                    if ($correo == ""){
                        $correo = "";
                    }
                }    
            }
        
            if(isset($_POST["contrasenia"])){
                $contrasenia = trim($_POST["contrasenia"]); 
                if ($contrasenia == ""){
                    if(isset($_GET["contrasenia"])){
                        $contrasenia = $_GET["contrasenia"];
                        if ($contrasenia == ""){
                            $contrasenia = "";
                        }
                    }
                }
            }    
            else{ 
                if ($contrasenia == ""){
                    $contrasenia = "";
                }
                if(isset($_GET["contrasenia"])){ 
                    $contrasenia = $_GET["contrasenia"];
                    if ($contrasenia == ""){
                        $contrasenia = "";
                    }
                }    
            }

            $query = "select IdUsuario from usuarios where Correo = '".$correo."' and Contrasenia = '".$contrasenia."'";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                //Mando al pdf
                $_SESSION['correo'] = $correo;
                $ruta = "Location:showPdf.php?pdf=".$pdf;
                header($ruta);
            }else{
                header("Location:login.php?bandera=2&pdf=".$pdf);
            }
        }
    }else if ($padre == 2){ //Si va para el admin
        $correo = "";
        $contrasenia = "";

        if(isset($_POST["correo"])){
            $correo = trim($_POST["correo"]); 
            if ($correo == ""){
                if(isset($_GET["correo"])){
                    $correo = $_GET["correo"];
                    if ($correo == ""){
                        $correo = "";
                    }
                }
            }
        }    
        else{ 
            if ($correo == ""){
                $correo = "";
            }
            if(isset($_GET["correo"])){ 
                $correo = $_GET["correo"];
                if ($correo == ""){
                    $correo = "";
                }
            }    
        }
    
        if(isset($_POST["contrasenia"])){
            $contrasenia = trim($_POST["contrasenia"]); 
            if ($contrasenia == ""){
                if(isset($_GET["contrasenia"])){
                    $contrasenia = $_GET["contrasenia"];
                    if ($contrasenia == ""){
                        $contrasenia = "";
                    }
                }
            }
        }    
        else{ 
            if ($contrasenia == ""){
                $contrasenia = "";
            }
            if(isset($_GET["contrasenia"])){ 
                $contrasenia = $_GET["contrasenia"];
                if ($contrasenia == ""){
                    $contrasenia = "";
                }
            }    
        }

        $query = "select IdUsuario from usuariosadmin where Correo = '".$correo."' and Contrasenia = '".$contrasenia."'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            //Mando al panel de control de admin
            $_SESSION['correo'] = $correo;
            header("Location:dashboard.php");
        }else{
            header("Location:login.php?bandera=2&padre=3");
        }
    }else{ //Si viene de registrarse
        $name = $_POST['nombre'];
        $contrasenia = $_POST['contrasenia'];  
        $correo = $_POST['correo']; 
        $telefono = $_POST['telefono'];
        $cultivo = $_POST['cultivo'];
        $actividad = $_POST['actividad'];
        $estado = $_POST['estado'];
        $municipio = $_POST['municipio'];

        $query = "select IdUsuario from usuarios where Correo = '".$correo."'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            header("Location:createAccount.php?bandera=1");
        }else{
            $query = "insert into usuarios (Correo, Contrasenia, Nombre, Telefono, IdTipo, IdActividad, IdEstado, IdMunicipio) 
            values ('".$correo."','".$contrasenia."','".$name."','".$telefono."','".$cultivo."','".$actividad."','".$estado."','".$municipio."')";
            $result = mysqli_query($conn,$query);
            header("Location:login.php?pdf=".$pdf);
        }
    }
?>