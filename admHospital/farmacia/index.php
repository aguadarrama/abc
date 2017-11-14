<!--FARMACIA-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php 
        include_once '../libs/scripts.inc';
        include_once '../libs/functions.php';
        ?>
        <title>Farmacia</title>
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
        fn_header("Farmacia");
            fn_menu2(3);        
        ?>
            <img src="../images/pharma.png" style="position: absolute; top: 150px; opacity: 0.25;">
            
            pide folio
            que medicamento o meteria se requiere
            quien lo pide
            
            **Movimientos del dia
            **reportes salidas del dia ... salidas x folio .... salidas por convenio
            **reporte de inventario
            
            
            <?=  fn_pie();?>          
        </div>
    </body>
</html>
