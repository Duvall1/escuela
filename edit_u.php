<?php include "php/users/users.php"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>U.E.B "Manuel Piar"</title>
    <link href="css/stylo.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="js/all.min.js" crossorigin="anonymous">
    </script>   
</head>
<body>
	  <?php include "php/acceso.php";
$user = new users;
$user = $user->getUserById($_SESSION['id_usuario']);
      ?>
	  <div class="card-body">
	  <form action="php/users/user_controler.php" method="POST">
	  	  								<div class="row mb-3" >
                                        
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="nombre" value="<?= 
                                                        $user[0]['nombres'];?>" />
                                                        <label for="inputFirstName">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="apellido" value="<?= 
                                                        $user[0]['apellidos'];?>" /> 
                                                        <label for="inputLastName">Apellido</label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                           <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="ingrese su cedula" name="cedula" value="<?= 
                                                        $user[0]['cedula'];?>" /> 
                                                        <label for="inputFirstName">cedula</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputUser" type="text" placeholder="Enter your first name" name="usuario" value="<?= 
                                                        $user[0]['usuario'];?>" /> 
                                                        <label for="inputUser">Usuario</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="pass" />
                                                        <label for="inputLastName">contraseña</label>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row mb-3">
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <input type="submit" name="editar" value="Editar" class="btn btn-success">
                            
                                                </div>
                                                <a href="solicitudes.php" class="btn btn-warning" style="display: block;">Solicitudes</a>
                                            </div>
                                        </form>
                                      </div>
                                      <script src="js/boostrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="js/chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="js/datatable.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
	
</body>
</html>