<?php 
include("./includes/header.php");
include("includes/footer.php");
include("./connection.php");


?>

  <form action="Clientes.php" method="post">
  <fieldset>
        <legend>Ingresar cliente</legend>
        <input type="text" name="Cod_Cliente" placeholder="Ingresa codigo"><br> 
        <input type="text" name="Nombre"><br> 
        <input type="text" name="Apellido"><br> 
        <input type="text" name="Nit"><br> 
        <input type="text" name="Direccion"><br> 
        <button type="submit" id="accion" value="btnRegistrar" name="btnRegistrar" target="formCliente" >Registrar</button> 
       
    </fieldset>
  </form>