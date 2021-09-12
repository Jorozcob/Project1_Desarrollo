<?php include("../includes/connection.php"); ?>
<?php include("../includes/header.php"); ?>
<?php include("../includes/footer.php"); ?>



<?php 
if(isset($_POST['btnAgregarFactura'])){
    insert($conection);
}


delete($conection);

function insert($conection){
    
       
    $No_Factura = $_POST["No_Factura"];
    $Fecha = $_POST["Fecha"];
    $Cod_Cliente = $_POST["Cod_Cliente"];
    
    $consulta = "INSERT INTO facturas(No_Factura, Fecha, Cod_Cliente)
    Values ('$No_Factura', '$Fecha','$Cod_Cliente')";
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
    $No_Factura = $_GET["No_Factura"];
   
    $consulta = "DELETE FROM facturas WHERE No_Factura ='$No_Factura'";
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
