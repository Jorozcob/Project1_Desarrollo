<?php include("./connection.php"); ?>

<?php include("./includes/header.php"); ?>
<?php include("./includes/footer.php"); ?>
 
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">

                    <?php if(isset($_SESSION['message'])){  ?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Guardado!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        
                    <?php session_unset(); } ?>
                    
                <div class="card cadard-body">
                    <form action="Clientes.php" method="post">
                        <input type="text" required name="Cod_Cliente" class="form-control" 
                        placeholder="Codigo del cliente" autofocus >

                        <input type="text" name="Nombre" class="form-control" 
                        placeholder="Nombre" autofocus required>
                        
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
<!-- ------------------------------------------------------------------Get clientes-------------------------------------------------------- -->
<div class='container'>   
        <div class="row">
            <table class="table table-bordered">

                <thead>
                    <tr></tr>
                    <th>Codigo cliente</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nit</th>
                    <th>Direccion</th>
             </thead>
             
              <?php 
              $data ="SELECT Cod_Cliente, Nombre, Apellido, Nit, Direccion FROM clientes";
              $result = mysqli_query($conection, $data);
              if(mysqli_num_rows($result)>0){
                  while($row = mysqli_fetch_assoc($result)){
                   ?>         
             <tr>
                 <td><?php echo $row["Cod_Cliente"] ?> </td>
                 <td><?php echo $row['Nombre']?></td>
                 <td><?php echo $row['Apellido']?></td>
                 <td><?php echo $row['Nit']?></td>
                 <td><?php echo $row['Direccion']?></td>
             </tr>
             <?php }  }  ?>  
            </table>
        </div>
    </div>
    