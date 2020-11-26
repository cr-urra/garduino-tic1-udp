<HTML>
<HEAD>
 <TITLE>Gráfico Humedad Ambiente V/S Tiempo</TITLE>
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <style type="text/css">
            #space{
                margin-bottom: 47px;
            }

            @media screen and (max-width: 991px){
                
                #cae{
                    margin-left: -140px;
                }

                #project{
                    margin-left: -133px;
                }

            }

            @media screen and (max-width: 602px){
                
                #logo{
                    margin-left: 68px;
                }
            }

            @media screen and (min-width: 603px) and (max-width: 727px){
                
                #logo{
                    margin-left: 104px;
                }
            }

            @media screen and (min-width: 728px){
                
                #logo{
                    margin-left: 150px;
                }
            }            

            @media screen and (max-width: 991px){
                
                #logo2{ 
                    text-align: center;
                }
            }
            
            #logo{
                height: 22%;
                width: 71%;
                margin-top: 33px;
            }
              

            #cae{
                margin-top: 95px;
                font-style: oblique;
                color: red;
                font-weight: bold;
                font-size: 369%;
            }

            .sub{
                font-style: oblique;
                color: red;
                font-weight: bold;
            }
            #program{
                margin-top: 100px;
            }

            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }             
        </style>
</HEAD>
<BODY>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <img id="logo" align="center"; src="images/logo_udp.PNG"></img>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div id="logo2">
                    <div class="col-xs-12 col-md-12">
                        <div id="cae">Garduino</div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div id="project" class="sub">Proyecto TIC I - Artefacto Arduino</div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div id="names" class="sub" style="margin-right: 38px;">Diego Far&iacuteas - Benjam&iacuten Morales - Crist&oacutebal Urra</div>
                    </div>
                    <div class="col-xs-12 col-md-12">
                        <div id="profe" class="sub" style="margin-right: 215px";>Profesor: Jorge Elliott</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 cold-md-12">
<meta charset="utf-8"> 
<meta http-equiv="refresh" content="5" />
<div id="space"></div>
<?php
require_once("class.php");
//Creamos un objeto de la clase randomTable
$rand = new RandomTable();
//obtenemos toda la información de la tabla random
$rawdata = $rand->getAllInfo2();

//nos creamos dos arrays para almacenar el tiempo y el valor numérico
$valoresArray;
$timeArray;
//en un bucle for obtenemos en cada iteración el valor númerico y 
//el TIMESTAMP del tiempo y lo almacenamos en los arrays 
for($i = 0 ;$i<count($rawdata);$i++){
    $valoresArray[$i]= $rawdata[$i][1];
    //OBTENEMOS EL TIMESTAMP
    $time= $rawdata[$i][2];
    $date = new DateTime($time);
    //ALMACENAMOS EL TIMESTAMP EN EL ARRAY
    $timeArray[$i] = $date->getTimestamp()*1000;
}
?>
<div id="contenedor"></div>

<script src="https://code.jquery.com/jquery.js"></script>
    <!-- Importo el archivo Javascript de Highcharts directamente desde su servidor -->
<script src="http://code.highcharts.com/stock/highstock.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>

chartCPU = new Highcharts.StockChart({
    chart: {
        renderTo: 'contenedor'
        //defaultSeriesType: 'spline'

    },
    rangeSelector : {
        enabled: false
    },
    title: {
        text: 'Gráfica Humedad Ambiente V/S Tiempo'
    },
    xAxis: {
        type: 'datetime'
        //tickPixelInterval: 150,
        //maxZoom: 20 * 1000
    },
    yAxis: {
        minPadding: 0.2,
        maxPadding: 0.2,
        title: {
            text: 'Valores (%)',
            margin: 10
        }
    },
    series: [{
        name: 'valor',
        data: (function() {
                // generate an array of random data
                var data = [];
                <?php
                    for($i = 0 ;$i<count($rawdata);$i++){
                ?>
                data.push([<?php echo $timeArray[$i];?>,<?php echo $valoresArray[$i];?>]);
                <?php } ?>
                return data;
            })()
    }],
    credits: {
            enabled: false
    }
});

</script> 
<div class="col-xs-12 cold-md-12">
<div align="center">
<a href="index.php" class="button">Volver</a>
</div>
</div>
</div>

</div> 
</BODY>

</html>