<HTML>
    <HEAD>
        <TITLE>Gráficos Garduino</TITLE>
        <link rel="stylesheet" type="text/css" href="bootstrap.css">
        <style type="text/css">
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
            	<div id="program" align="center">
                    <div class="col-xs-12 col-md-12">
                        <div style="margin-top:26px;"></div>
                    <a class="button" href="temperatura.php" style="width: 21%;">Temperatura V/S Tiempo</a>
            	</div>

                <div id="program" align="center">
                    <div class="col-xs-12 col-md-12">
                    <div style="margin-top:26px;"></div>    
                    <a class="button" href="ambiente.php" style="width: 21%;">Humedad Ambiente V/S Tiempo</a>
                </div>     
                <div id="program" align="center">
                    <div class="col-xs-12 col-md-12">
                    <div style="margin-top:26px;"></div>    
                    <a class="button" href="suelo.php" style="width: 21%;">Humedad Tierra V/S Tiempo</a>
                </div>                                                   
            </div>
        </div>
    </BODY>
</HTML>
