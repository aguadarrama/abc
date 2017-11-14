<!--CAJA-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php
        include_once '../libs/scripts.inc';
        include_once '../libs/functions.php';
        ?>
        <title>Caja</title>
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
            fn_header("Caja");
            fn_menu2(4);
            ?>
            <img src="../images/pharma.png" style="position: absolute; top: 150px; opacity: 0.25;">

            <div class="card">
                <div>
                    <label>Folio:</label>
                    <input>
                    <button>Buscar</button>
                </div>
            </div>

            
<!--ventana donde meustra todos los cenceptos a cobrar-->
<!--al final boton agregar concepto-->

<div>
    <div>
        <table>
            <tr>
                <th>CANTIDADx</th>
                <th>CLAVE</th>
                <th>DESCRIPCION</th>
                <th>PRECIO UNITARIO</th>
                <th>PRECIO TOTALx</th>
            </tr>
            <tr>
                <td>1</td>
                <td>784512</td>
                <td>SOLUCION SUERO GLUCOSADO</td>
                <td>$ 98.00</td>
                <td>$ 98.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>373839</td>
                <td>MANGUERA</td>
                <td>$ 110.00</td>
                <td>$ 110.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>913758</td>
                <td>CATETER</td>
                <td>$ 55.00</td>
                <td>$ 55.00</td>
            </tr>
            <tr>
                <td>1</td>
                <td>852647</td>
                <td>MICROGOTERO</td>
                <td>$ 70.00</td>
                <td>$ 70.00</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>SUBTOTAL</td>
                <td></td>
                <td>$ 333.00</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>IMPUESTO</td>
                <td></td>
                <td>$ 0.00</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>TOTAL</td>
                <td></td>
                <td>$ 333.00</td>
            </tr>
        </table>
    </div>
</div>
<!--
boton cerrar folio
botn pago
al prsionar pago
se muestra efectico
tarejta de credito
a cuenta personal
auenta convenio <--- la cuenta convenio debe de ser dada de alta
-->
            
            <!--buscar r nonbre-->
<!--            
            abre ventana de busqueda por nombre
            campo nonbre + limpiar
            buscar
            
            
            ventana con un lista de nobres encontrados
            -->
    
        
        
        
        
<!--        <div class="row" style="position:fixed; bottom: 0px; background-color: #2b5797; width: 100%; height: 25px; line-height: 25px;">
            <div class="col-sm-12 text-white-tras text-right" style="font-family: 'Roboto','SegoeUI','Arial'; font-size: 8.5pt;">
                Sistema de Administraci&oacute;n de Internamiento Cl&iacute;nico &copy 2017. Design by Ing. Angel Guadarrama R.
            </div>
        </div>-->
<?=  fn_pie();?>          
        </div>
    </body>
</html>
