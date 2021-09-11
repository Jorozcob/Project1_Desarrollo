<?php include("./connection.php"); ?>

<?php include("./includes/header.php"); ?>
<?php include("./includes/footer.php"); ?>
 
   <!-- <fieldset>
        <legend>Ingresar cliente</legend>
        <input type="text" name="Cod_Cliente" placeholder="Ingresa codigo"><br> 
        <input type="text" name="Nombre"><br> 
        <input type="text" name="Apellido"><br> 
        <input type="text" name="Nit"><br> 
        <input type="text" name="Direccion"><br> 
        <button type="submit" id="accion" value="btnRegistrar" name="btnRegistrar" target="formCliente" >Registrar</button> 
       
    </fieldset> -->
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card cadard-body">
                    <form action="Clientes.php" method="post">
                        <input type="text" name="Cod_Cliente" class="form-control" 
                        placeholder="Codigo del cliente" autofocus>

                        <input type="text" name="Nombre" class="form-control" 
                        placeholder="Nombre" autofocus>
                        
                        <input type="text" name="Apellido" class="form-control" 
                        placeholder="Apellido" autofocus>
                        
                        <input type="text" name="Nit" class="form-control" 
                        placeholder="Nit" autofocus>
                        
                        <input type="text" name="Direccion" class="form-control" 
                        placeholder="Direccion" autofocus>
                        <input type="submit" class="btn btn-success btn-block" name="btnAgregar" value="Agregar"> 
                    </fom>
                </div>
            </div>
        </div>
    </div>
