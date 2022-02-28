<?php include "php/curso/curso.php";
include "php/maestro/maestro.php";

   
        $curso      = new curso;
        $maestro    = new maestro;
        $get_maestro = $maestro->getMaestro();
        $get_curso  = $curso->getCurso();
        ?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro de Alumno</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include "php/acceso.php"?>
                        <h1 class="mt-4">Registro de Alumno</h1>
                        
                        <div class="row justify-content-center">
                                    <div class="card-body">
                                        <form action="php/alumno/alumno_controler.php" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="nombre" />
                                                        <label for="inputFirstName">Nombre</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="apellido" />
                                                        <label for="inputLastName">Apellido</label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                           <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="nombre_rep" />
                                                        <label for="inputFirstName">Nombre Completo del Representante</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="tlf" />
                                                        <label for="inputLastName">Tlf.Representante</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="date" placeholder="Enter your first name" name="nacimiento" />
                                                        <label for="inputFirstName">Fecha de Nacimiento</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                
                                                        <select class="form-control" name="grado">
                                                            <?php foreach ($get_curso as $key => $value) { ?>
                                                            <option value="<?= $value['grado'] .' SECCION ' .$value['seccion'] ?>"><?=$value['grado'] .' SECCION ' .$value['seccion'] ?></option>
                                                          <?php }  ?>
                                                        </select>
                                
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="cedula" />
                                                        <label for="inputFirstName">Cedula(Opcional)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="discapacidad" />
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
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Derechos de Autor &copy; Duvall Rujano</div>
                        </div>
                    </div>
                </footer>
            </div>
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