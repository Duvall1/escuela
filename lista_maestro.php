<?php
include "php/maestro/maestro.php";
        $maestro     = new maestro;       
        $maestros    = new maestro; 
        $estadistica = new maestro;
        $estadisticL = new maestro;
        $maestro     = $maestro->getMaestro(); 
        $maestros    = $maestros->getMaestroEst();
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
        <title>Lista de Maestros</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/stylo.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">

          <?php include "php/acceso.php"?>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Lista de Maestros</h1>
                        <ol class="breadcrumb mb-4">
        <div> <input type="button" onclick="location='registro_maestro.php'" class="btn btn-success" value="Registrar"> </div>
                        </ol> 
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Cedula</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                    
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
                    if (count($maestro)>0) {
                        foreach ($maestro as $column => $value) {   
              
                ?>
                                        <tr>
                                            <td><?php echo $value['nombre'];?></td>
                                            <td><?php echo $value['apellido'];?></td>
                                            <td><?php echo $value['cedula'];?></td>
                                            <td><?php echo $value['correo'];?></td>
                                            <td><?php echo $value['telefono'];?></td>
                                      
                                            <td><a href="php/maestro/maestro_controler.php?id=<?=$value['id_maestro']?>&delete" class="btn btn-danger">ELIMINAR</a> <a href="editar_maestro.php?id=<?=$value['id_maestro']?>&editar" class="btn btn-warning">EDITAR</a></td>
                                           


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
                    <div class="title-m">
                    <h2>ESTADISTICA DE CURSOS</h2> 
                <hr class="stylerf">
                <div style="width: 100%; display:flex; flex-wrap: wrap;">
                            <div style="width: 30%; margin: auto; text-align: left;">
                            <?php
                    if (count($estadistica)>0) { 
                        foreach ($estadistica as $column => $value) {
                            ?>
                             
                        <?php echo  $value['maestro']. '= ' .$value['suma']. ' (' .intval(($value['suma']) * 100 / $i ). '%)'; ?><br>
                <?php 
                    }
                    } 
                ?>
            </div>
                <div style="width: 70%; padding: 20px;" >
                        <canvas id="canvas2"  style="width: 100%;"></canvas>    
                    </div>
        
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
