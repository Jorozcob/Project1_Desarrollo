<?php include("../includes/connection.php"); ?>

<?php include("../includes/header.php"); ?>
<?php include("../includes/footer.php"); ?>
 
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">

                    <?php if(isset($_SESSION['message'])){  ?>

                        <div class="alert alert-<?=  $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                        <?php echo $_SESSION['message']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        
                    <?php session_unset(); } ?>
                    
                <div class="card cadard-body">
                    <form action="Clientes.php" method="post">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-plus-circle" ></i> 
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            
                                <input type="text" required name="Cod_Cliente" class="form-control" 
                                placeholder="Codigo del cliente" autofocus >

                                <input type="text" required name="Nombre" class="form-control" 
                                placeholder="Nombre" autofocus >
                                
                                <input type="text" name="Apellido" class="form-control" 
                                placeholder="Apellido" autofocus>
                                
                                <input type="text" name="Nit" class="form-control" 
                                placeholder="Nit" autofocus>
                                
                                <input type="text" name="Direccion" class="form-control" 
                                placeholder="Direccion" autofocus>

                                
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success btn-block" name="btnAgregarCliente" value="Agregar">
                                    <i class="fas fa-plus-square" ></i> 
                                </button>
                            </div>
                            </div>
                        </div>
                        </div>

                        
                        
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
                    <th>Opciones</th>
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
                 <td>
                     <a href="formupdate.php" class="btn btn-secundary" >
                        <i class="fas fa-edit" ></i> 
                    </a>
                     <a href="Clientes.php?Cod_Cliente=<?php echo $row['Cod_Cliente'] ?> " 
                        class="btn btn-danger" >
                     <i class="far fa-minus-circle" ></i>  
                    </a>
                    
                 </td>
             </tr>
             <?php }  }  ?>  
            </table>
        </div>
    </div>
    