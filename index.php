<?php 

include("./includes/connection.php");

$Cod_Cliente = $_GET["Cod_Cliente"];
   
    $consulta = "DELETE FROM clientes WHERE Cod_Cliente ='$Cod_Cliente'";
    $resultado=mysqli_query($conection,$consulta);
    mysqli_close($conection);
    if(!$resultado){
        die('Failed');
    }else{
        $_SESSION['message'] = 'Eliminado';
        header('Location: prueba.php');
    }
?>

 