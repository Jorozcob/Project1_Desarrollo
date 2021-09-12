<?php include("../includes/connection.php");?>
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
                    <form action="update.php" method="post">
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

                        <input type="submit" class="btn btn-success btn-block" name="btnActualizarCliente" value="Actualizar">
                        
                    </fom>
                </div>
            </div>
        </div>
    </div>