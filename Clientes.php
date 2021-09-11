<?php include("./connection.php"); ?>
<?php include("./includes/header.php"); ?>
<?php include("./includes/footer.php"); ?>



<?php 
if(isset($_POST['btnAgregar'])){
    insert($conection);
}


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
        header("Location prueba.php");
        die("<script type='text/javascript'>alert('Verifica que el ID sea valido');</script>");
        
    }
    else{
        
        header("Location: prueba.php");
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

?>
