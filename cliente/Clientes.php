<?php include("../includes/connection.php"); ?>
<?php include("../includes/header.php"); ?>
<?php include("../includes/footer.php"); ?>



<?php 
if(isset($_POST['btnAgregarCliente'])){
    insert($conection);
}


delete($conection);

function insert($conection){
    $Cod_Cliente = $_POST["Cod_Cliente"];
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Nit = $_POST["Nit"];
    $Direccion = $_POST["Direccion"];
    
    $consulta = "INSERT INTO clientes(Cod_Cliente, Nombre, Apellido, Nit, Direccion)
    Values ('$Cod_Cliente', '$Nombre','$Apellido','$Nit','$Direccion')";
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
    $Cod_Cliente = $_GET["Cod_Cliente"];
   
    $consulta = "DELETE FROM clientes WHERE Cod_Cliente ='$Cod_Cliente'";
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
