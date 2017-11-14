<!--CUENTAS POR PAGAR-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php 
        include_once '../libs/scripts.inc';
        include_once '../libs/functions.php';
        ?>
        <title>Cuentas por Pagar</title>
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
        fn_header("Cuentas por Pagar");
            fn_menu2(6);
        ?>
            <img src="../images/pharma.png" style="position: absolute; top: 150px; opacity: 0.25;">
            
            
              manda llamar a otro menu
            
            consultas/// pagos//edc
            
 <?=  fn_pie();?>                    
        </div>
    </body>
</html>
