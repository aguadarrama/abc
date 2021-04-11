<!--ENFERMERIA-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php 
        include_once '../libs/scripts.inc';
        include_once '../libs/functions.php';
        ?>
        <title>Enfermeria</title>
<style>
            html,body{background-color: #eff4ff;}
            a{text-shadow: 1px 1px 1px #ffffff;}
            a.disabled{text-shadow: none;}            
            .text-white-tras{color:rgba(255,255,255,0.7);}
        </style>                
    </head>
    <body>
        <div class="container-fluid">
        <?php
        fn_header("Enfermeria");
            fn_menu2(2);
        ?>
            <img src="../images/pharma.png" style="position: absolute; top: 150px; opacity: 0.25;">
            -----
            captura de folio
            
            registro de servicio de enfermera o doctor<----- deben estar dados de alta con tarifa
            reghistro de procedimiento
            -----
            abc de doctres y enfermeras
            <!--
            Se debe seguir el mismo patron de diseño que los usados para los Médicos
            -->
            ----
            reportes del dia/// reporte por enfermera/// por dr/// por folio
            
            <?=  fn_pie();?>          
        </div>
    </body>
</html>
