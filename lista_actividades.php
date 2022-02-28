<?php
include "php/unidad_c/unidad.php";
        $unidad     = new unidad;       
        $unidad_g   = $unidad->getUnidad(); 
     
        $i = 0;
        foreach ($unidad_g as $column => $value) { 
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
        <title>Lista de Maestros</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

          <?php include "php/acceso.php"?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Lista de Actividades</h1>
                        <ol class="breadcrumb mb-4">
        <div>
                        </ol> 
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Maestro</th>
                                            <th>Actividad</th>
                                            <th>Fecha.S</th>
                                            <th>Fecha.E</th>
                                            <th>Ponderacion</th>
                                            <th>Aprovados</th>
                                            <th>No aprovado</th>
                                            <th>Opcion</th>

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
                    if (count($unidad_g)>0) {
                        foreach ($unidad_g as $column => $value) {   
              
                ?>
                                        <tr>
                                            <td><?php echo $value['maestro'];?></td>
                                            <td><?php echo $value['unidad_nom'];?></td>
                                            <td><?php echo $value['fecha_inicio'];?></td>
                                            <td><?php echo $value['fecha_entrega'];?></td>
                                            <td><?php echo $value['ponderacion'];?></td>
                                            <td><?php echo $value['ponderacion'];?></td>
                                            <td><?php echo $value['ponderacion'];?></td>

                                      
                                            <td><a href="php/unidad_c/unidad_controler.php?id=<?=$value['id_unidad'];?>&delete" class="btn btn-danger">ELIMINAR</a> <a href="editar_maestro.php?id=<?=$value['id_maestro']?>&editar" class="btn btn-warning">EDITAR</a></td>
                                           


                                        </tr>

                                <?php }  ?>
                                 <?php }  ?>
                                    </tbody>
                                </table>  
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
        <script>
    var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

    var barChartData = {
        labels : [
                    <?php 

                    $color = ["#F7464A","#46BFBD","#FDB45C","#949FB1","#4D5360"];$b = 0;
                        foreach ($estadistica as $column => $value) { ?>
                    '<?php echo $value['maestro'];?>',
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
