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
    // echo "Entro";

    if ($padre==1) {
        if ($_SESSION['correo']!='') {
            //Mando al pdf
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
            }else{
                header("Location:login.php?bandera=2");
            }
        }
    }else{
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
            header("Location:login.php");
        }
    }
?>