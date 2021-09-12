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
                    <form action="facturas.php" method="post">
                      
                            <div class="modal-body">
                            <input type="text" required name="No_Factura" class="form-control" 
                            placeholder="No Factura" autofocus >
                             <label>Codigo cliente</label>
                              <select name="Cod_Cliente">
                              <?php 
                                $data ="SELECT Cod_Cliente FROM clientes";
                                $result = mysqli_query($conection, $data);
                                if(mysqli_num_rows($result)>0){
                                    while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <?php echo "<option value=".$row["Cod_Cliente"].">" .$row["Cod_Cliente"]."</option>"; } } ?>  
                              </select>             
                             
                             <input type="date" name="Fecha" class="form-control" 
                             placeholder="Fecha Caducidad" autofocus>
                             
                            
                             <button type="submit" class="btn btn-success btn-block" name="btnAgregarFactura" value="Agregar">

                             <i class="fas fa-plus-square" ></i> 
                             </button>        
                                        
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
                    <th>No Factura</th>
                    <th>Codigo cliente</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
             </thead>
             
              <?php 
              $data ="SELECT No_Factura, Fecha, Cod_Cliente FROM facturas";
              $result = mysqli_query($conection, $data);
              if(mysqli_num_rows($result)>0){
                  while($row = mysqli_fetch_assoc($result)){
                   ?>         
             <tr>
                 <td><?php echo $row["No_Factura"] ?> </td>
                 <td><?php echo $row['Cod_Cliente']?></td>
                 <td><?php echo $row['Fecha']?></td>
                 <td>
                     <a href="formupdate.php" class="btn btn-success" >
                        <i class="fas fa-edit" ></i> 
                    </a>

                     <a href="facturas.php?No_Factura=<?php echo $row['No_Factura'] ?> " 
                        class="btn btn-danger" >
                     <i class="far fa-minus-circle" ></i>  
                    </a>
                    
                 </td>
             </tr>
             <?php }  }  ?>  
            </table>
        </div>
    </div>
    