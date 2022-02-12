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
$arreglo = $_POST['chk'];

if ($padre == 1) {
    for ($i=0; $i < count($arreglo); $i++) { 
        mysqli_query($conn, "delete from testimonios where IdTestimonio = '".$arreglo[$i]."'");  
    }
    header('location:./deleteItems.php?padre=1');
}else if ($padre == 2){
    for ($i=0; $i < count($arreglo); $i++) { 
        mysqli_query($conn, "delete from productos where IdProducto = '".$arreglo[$i]."'");  
    }
    header('location:./deleteItems.php?padre=2');
}else if ($padre == 3){
    for ($i=0; $i < count($arreglo); $i++) { 
        mysqli_query($conn, "delete from banner where IdBanner = '".$arreglo[$i]."'");  
    }
    header('location:./deleteItems.php?padre=3');
}

?>