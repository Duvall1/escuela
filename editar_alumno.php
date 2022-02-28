<?php 
	include "php/alumno/alumno.php";
	$alumno = new alumno;
	$id = isset($_GET['id'])?$_GET['id']:NULL;
	$alumno = $alumno->getUserById($id);
	$id = "";
	$nombre = "";
	$apellido = "";
	$cedula = "";
	$tlf = "";
	$nacimiento = "";
	$nombre_rep = "";
	$discapacidad = "";
	$curso = "";
	if ($alumno) {
		$id 			= $alumno[0]['id_alumno'];
		$nombre			= $alumno[0]['nombres'];
		$apellido		= $alumno[0]['apellidos'];
		$cedula 		= $alumno[0]['cedula'];
		$tlf 			= $alumno[0]['tlf'];
		$nacimiento		= $alumno[0]['nacimiento'];
		$nombre_rep		= $alumno[0]['nombre_rep'];
		$discapacidad 	= $alumno[0]['discapacidad'];
		$curso 			= $alumno[0]['curso'];

	}




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
	<?php include "php/acceso.php"?>

		<h1 class="mt-4">Editar Alumno</h1>
                        
                        <div class="row justify-content-center">
                                    <div class="card-body">
                                        <form action="php/alumno/alumno_controler.php" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="nombre" value="<?=$nombre;?>" />
                                                        <label for="inputFirstName">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="apellido" value="<?=$apellido;?>" />
                                                        <label for="inputLastName">Apellido</label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                           <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="nombre_rep" value="<?=$nombre_rep;?>" />
                                                        <label for="inputFirstName">Nombre Completo del Representante</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="tlf" value="<?=$tlf;?>"  />
                                                        <label for="inputLastName">Tlf.Representante</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="date" placeholder="Enter your first name" name="nacimiento" value="<?=$nacimiento;?>" />
                                                        <label for="inputFirstName">Fecha de Nacimiento</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="curso" value="<?=$curso;?>" />
                                                        <label for="inputLastName">Grado de ingreso</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="cedula" value="<?=$cedula;?>" />
                                                        <label for="inputFirstName">Cedula(Opcional)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="discapacidad" value="<?=$discapacidad;?>" />
                                                        <label for="inputLastName">Discapacidad(Opcional)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" name="crear"></div>
                                            </div>
                                        </form>
                                    </div>
                             </div>
                </main>





 <script src="js/boostrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="js/chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="js/datable.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>