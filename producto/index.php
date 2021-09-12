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
                    <form action="productos.php" method="post">
                        <input type="text" required name="Cod_Producto" class="form-control" 
                        placeholder="Codigo del producto" autofocus >

                        <input type="text" required name="Nombre" class="form-control" 
                        placeholder="Nombre" autofocus >
                        
                        <label>Fecha cadicidad</label>
                        <input type="date" name="Fecha_Caducidad" class="form-control" 
                        placeholder="Fecha Caducidad" autofocus>
                       
                        <input type="submit" class="btn btn-success btn-block" name="btnAgregarProducto" value="Agregar">
                        
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
                    <th>Codigo Producto</th>
                    <th>Nombre</th>
                    <th>Fecha caducidad</th>
                    <th>Opciones</th>
             </thead>
             
              <?php 
              $data ="SELECT Cod_Producto, Nombre, Fecha_Caducidad FROM productos";
              $result = mysqli_query($conection, $data);
              if(mysqli_num_rows($result)>0){
                  while($row = mysqli_fetch_assoc($result)){
                   ?>         
             <tr>
                 <td><?php echo $row["Cod_Producto"] ?> </td>
                 <td><?php echo $row['Nombre']?></td>
                 <td><?php echo $row['Fecha_Caducidad']?></td>
                 <td>
                     <a href="formupdate.php" class="btn btn-secundary" >
                        <i class="fas fa-edit" ></i> 
                    </a>
                     <a href="productos.php?Cod_Producto=<?php echo $row['Cod_Producto'] ?> " 
                        class="btn btn-danger" >
                     <i class="far fa-minus-circle" ></i>  
                    </a>
                    
                 </td>
             </tr>
             <?php }  }  ?>  
            </table>
        </div>
    </div>
    