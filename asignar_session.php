<?php
include "php/maestro/maestro.php";
$maestro     = new maestro;    
$maestro     = $maestro->getMaestro(); 
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Secciones</title>
        <link href="css/stylo.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include "php/acceso.php"?>
                        <h1 class="mt-4">Asignar Seccion</h1>
                        
                        <div class="row justify-content-center">
                                    <div class="card-body">
                                        <form action="php/curso/curso_controler.php" method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select class="form-control" name="grado">
                                                            <option value="1ER GRADO">1ER GRADO</option>
                                                            <option value="2DO GRADO">2DO GRADO</option>
                                                            <option value="3ER GRADO">3ER GRADO</option>
                                                            <option value="4TO GRADO">4TO GRADO</option>
                                                            <option value="5TO GRADO">5TO GRADO</option>
                                                            <option value="6TO GRADO">6TO GRADO</option>

                                                         
                                                        </select>
                                                        <label for="inputFirstName">Grado</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <select class="form-control" name="seccion">
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                            <option value="F">F</option>
                                                        </select>
                                                        <label for="inputLastName">Sección</label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                           <div class="row mb-3">
                                        
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                    <select name="maestro_c" class="form-control">
                                                                  <?php foreach ($maestro as $column => $value) { ?>
                                                            <option value="<?=$value['nombre']?> <?=$value['apellido']?>"><?=$value['nombre']?> <?=$value['apellido']?></option>
                                                        <?php }?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" name="crear" class="btn btn-success"></div>
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
        <script src="js/boostrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="js/chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="js/datatable.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>  
    </body>
</html>