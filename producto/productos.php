<?php include("../includes/connection.php"); ?>
<?php include("../includes/header.php"); ?>
<?php include("../includes/footer.php"); ?>



<?php 
if(isset($_POST['btnAgregarProducto'])){
    insert($conection);
}


delete($conection);

function insert($conection){
    $Cod_Producto = $_POST["Cod_Producto"];
    $Nombre = $_POST["Nombre"];
    $Fecha_Caducidad = $_POST["Fecha_Caducidad"];
    
    $consulta = "INSERT INTO productos(Cod_Producto, Nombre, Fecha_Caducidad)
    Values ('$Cod_Producto', '$Nombre','$Fecha_Caducidad')";
    $result = mysqli_query($conection,$consulta);
    mysqli_close($conection);
    
    if(!$result){
        $_SESSION['message'] = 'ID no valido';
        $_SESSION['message_type']= 'danger';
        header('Location: index.php');
        
    }
    else{
        
        header("Location: index.php");
        $_SESSION['message'] = "Agregado";
        $_SESSION['message_type']= 'success';
        }
}

function GetClientes($conection){
    $consulta = " SELECT * FROM clientes";
    $result =mysqli_query($conection,$consulta);
    mysqli_close($conection);
    
    if(!$result){
        die("<script type='text/javascript'>alert('Failed getting data');</script>");
    }
}

function delete($conection){
    $Cod_Producto = $_GET["Cod_Producto"];
   
    $consulta = "DELETE FROM productos WHERE Cod_Producto ='$Cod_Producto'";
    $resultado=mysqli_query($conection,$consulta);
    mysqli_close($conection);
    if(!$resultado){
        die('Failed');
    }else{
        $_SESSION['message'] = 'Eliminado';
        $_SESSION['message_type']= 'danger';
        header('Location: index.php');
    }
}


?>
