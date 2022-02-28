<?php
include "php/curso/curso.php";
session_start();
        $curso      = new curso; 
        $curs       = $curso->getCurso();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Listas</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/stylo.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

          <?php include "php/acceso.php"?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Lista de cursos</h1>
              
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Maestro</th>  
                                            <th>Numero de alumnos</th>
                                            <th>Seccion</th>
                                            <th>Grado</th>
                                       
                                            <th>Opciones</th>



                                        </tr>
                                    </thead>
                            
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>

                                    </tfoot>
                                    <tbody>       
                         <?php 
                    if (count($curs)>0) {
                        foreach ($curs as $column => $value) {   
              
                ?>
                                        <tr>
                                            <td><?php echo $value['maestro'];?></td>
                           
                                            <td><?php echo $value['num_alumnos'];?></td>
                                            <td><?php echo "Seccion " .$value['seccion'];?></td>
                                            <td><?php echo $value['grado'];?></td>

                                            <td><?php if($_SESSION['tipo_usu'] == 'administrador'){ ?><div> <input type="button" class= "btn btn-success" onclick="location='editar_alumno.php?id=<?=$value['id_alumno']?>'"  value="editar"> </div> <?php } ?></td> 
                                          

                                        </tr>

                                <?php }  ?>
                                 <?php }  ?>
                                    </tbody>
                                </table> 
               
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
    <script src="js/datable.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/chartJS/Chart.min.js"></script>
    </body>
</html>
