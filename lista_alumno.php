<?php
include "php/alumno/alumno.php";
session_start();
        $alumno      = new alumno; 
        $alumnos     = new alumno; 
        $estadistica = new alumno;
        $estadisticL = new alumno;
        $alumno      = $alumno->getAlumno();
        $alumnos     = $alumnos->getAlumnoEst();
        $estadistica = $estadistica->getEstadistica(); 
        $estadisticL = $estadisticL->getEstadisticaByN();
        $i = 0;
        foreach ($estadisticL as $column => $value) { 
        $i++;
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
        <title>Listas</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="css/stylo.css" rel="stylesheet" />
    </head>
     <div class="modal fade" id="ventana">
        <button class="close" data-dismiss = "modal" aria-hidden="true">&times;</button>
        <div class="col-md-5" style="margin: auto;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h3 class="modal-title">INGRESE LOS SIGUIENTES DATOS</h3>
                        
                        
                    </div>
                    <div class="modal-body">
                        <div class="container">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    <body class="sb-nav-fixed">
       
          <?php include "php/acceso.php"?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Lista</h1>
                        <ol class="breadcrumb mb-4">
<div> <input type="button" onclick="location='registro_alumno.php'" value="Registrar"> </div>
                        </ol> 
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Cedula</th>
                                            <th>Telefono</th>
                                            <th>fecha de nacimiento</th>
                                            <th>Curso</th>
                                            <th>Nombre de representante</th>
                                            <th>discapacidad</th>
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
                    if (count($alumno)>0) {
                        foreach ($alumno as $column => $value) {   
              
                ?>
                                        <tr>
                                            <td><?php echo $value['nombres'];?></td>
                                            <td><?php echo $value['apellidos'];?></td>
                                            <td><?php echo $value['cedula'];?></td>
                                            <td><?php echo $value['tlf'];?></td>
                                            <td><?php echo $value['nacimiento'];?></td>
                                            <td><?php echo $value['curso'];?></td>
                                            <td><?php echo $value['nombre_rep'];?></td>
                                            <td><?php echo $value['discapacidad'];?></td>

                                            <td id="da"><?php if($_SESSION['tipo_usu'] == 'administrador'){ ?><div> <input type="button" class= "btn btn-success" onclick="location='editar_alumno.php?id=<?=$value['id_alumno']?>'"  value="editar"> </div> <?php } ?> <btn type="button"  data-toggle="modal"  class="btn-info" data-proposito="<?=value['id_alumno'];?> sdadksm">Ver</a></td> 
                                          

                                        </tr>

                                <?php }  ?>
                                 <?php }  ?>
                                    </tbody>
                                </table> 
                                <div class="wall-p" style="width: 100%;">
                    <div class="title-m">
                    <h2>ESTADISTICA DE CURSOS</h2> 
                <hr class="stylerf">
                <div style="width: 100%; display:flex; flex-wrap: wrap;">
                            <div style="width: 20%; margin: auto; text-align: left;">
                            <?php
                    if (count($estadistica)>0) { 
                        foreach ($estadistica as $column => $value) {
                            ?>
                             
                        <?php echo  $value['curso']. ' = ' .$value['suma']. ' (' .intval(($value['suma']) * 100 / $i ). '%)'; ?><br>
                <?php 
                    }
                    } 
                ?>
            </div>
                <div style="width: 80%; padding: 20px;" >
                        <canvas id="canvas2"  style="width: 100%;"></canvas>    
                    </div>
        
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

    <script src="js/scripts.js"></script>
    <script src="js/chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="js/datable.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/chartJS/Chart.min.js"></script>
    <script>
   

    var barChartData = {
        labels : [
                    <?php 

                    $color = ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"];$b = 0;
                        foreach ($estadistica as $column => $value) { ?>
                    '<?php echo $value['curso'];?>',
                <?php } ?>

        ],
        datasets : [
            {
                fillColor : "#46BFBD",
                strokeColor : "#82E0AA",
                highlightFill: "#82E0AA",
                highlightStroke: "#82E0AA",
                data : [
                <?php 
            
    
                    if (count($estadistica)>0) {
                        foreach ($estadistica as $column => $value) { 
                         
                            ?>

                    <?=$value['suma']?>,
                <?php 
        }
        } 
            ?>
                
                ]
            }
        ]

    }
          


    window.onload = function(){
        var ctx = document.getElementById("canvas2").getContext("2d");
        window.myBar = new Chart(ctx).Bar(barChartData, {
        responsive : true
        });

    }

    </script>
    </body>
</html>
