<?php 
include("./connection.php");


if(isset($_POST['btnActualizar'])){
    update($conection);
}
function update($conection){
    $Cod_Cliente = $_POST["Cod_Cliente"];
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Nit = $_POST["Nit"];
    $Direccion = $_POST["Direccion"];
    
    $consulta = "UPDATE clientes SET Nombre = '$Nombre', Apellido = '$Apellido',Nit = '$Nit',Direccion = '$Direccion' 
    WHERE Cod_Cliente='$Cod_Cliente'";
   $resultado = mysqli_query($conection,$consulta);
    mysqli_close($conection);

    if(!$resultado){
        $_SESSION['message'] = 'Ingresa un ID valido';
        $_SESSION['message_type']= 'danger';
        header('Location: prueba.php');
    }else{
        $_SESSION['message'] = 'Actualizado';
        $_SESSION['message_type']= 'success';
        header('Location: prueba.php');
    }
}
?>