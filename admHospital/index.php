<!--MENU PRINCIPAL-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="jQuery/jquery-2.1.3.min.js" type="text/javascript"></script>
        <link href="css/global.css" type="text/css" rel="stylesheet">
        <script src="jQuery/bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript"></script>
        <link href="jQuery/bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css" rel="stylesheet">
        <link href="jQuery/bootstrap-3.3.7-dist/css/bootstrap-theme.css" type="text/css" rel="stylesheet">        
        <?php
        //include_once 'libs/scripts.inc';
        include_once 'libs/functions.php';
        ?>        
        <title>Menu Principal</title>
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
            //fn_header("Sistema de Administraci&oacute;n de Internamiento Cl&iacute;nico");
            fn_header("Men&uacute; Principal");
            fn_menu2(0);            
            ?>
            <?= fn_pie(); ?>
        </div>
    </body>
</html>
<!--
la idea de este proyecyto es llevar el control de cobro a las pocientes qeu se atienden

habra que dicidir el proyecto en tres paartes principales

--el mtto a conceptos, lo cual es donde se da de alta todo loque s epueda cobrar
la entrada al pacinte....

seguimiento al paciente....
cada vez que l paciente rcibe un servicio/materila/medicament se agrega al corte abierto o ODS

caundo el responsable firma se genera el 
alta del paciente...... esto genera que se pueda cerrar el cobro
corte en caja de odsegumiento
se gener un cargo al cleinte
cunado el cliente pag ao abona se descuenta de este cargo



el paciente llega a recepcion a dar sus datso generales, incluido el tratamiento que esta solicitando
recepcion le genera un folio y si es paciente nuevo, una clave, sino uso la misma clave eanterior, esto 
es para tener un historial medico
se registra dia y hora

despues el paciente se dirige al cuarto de aplicacion

la enfermera encargada, basada en el tratamiento que se va a aplicar, se dirije a la farmacia y solicita
el material y el medicamento con cargo al folio...

este ciclo se repite la cantidad de veces necesaria hasta finalizar la infusion

durante la estacia de la paciente en su cuarto, la enfernera moitorea el progreso... 
cada visita es reportada a la estacionde enfermeria con cargo al folio

si un doctor esta presente y monitorea a la paciente durante su estacia, el doctor
debe de reportarse en la estacion de enfermeria con cargo al folio

estos precesos se repiten mientras la paciente no haya sido dada de alta

el material, el medicamento, los procedimeintos, las horas de enfermera y las horas de doctor se van
contabiklizando en el folio asignado

cuando el paciente termina y es dado de alta, pasa a caja
elsistema ya registro el alta y contabiliza todo los parametrso de costo que se cargaron al folio
y ademas basado en el dia y la hora agrega el costo del cuarto
se genera una factura

el paciente paga en efectivo o tarjeta
se cierra el folio y se cierra la factura y se anexa a expediente

si el paciente no paga en elmoemnto
el folio se cierrrra y la factura queda abbierta
el aeudo se va a la clave del paceinte y se manda la factura a cuenta x cobrar
ahi el depto de cobranza dar aseguimiento al pago

cuandoe lapciente paga se cierra la factura tambien, y se anexa a expediente
y el ciclo termina

las facturas de compra se deben de capturara para alimentar la gfarmacia
una vez alimentada la facvtura e compra se pasa a ceuntas por pagar
se le hace un cargo a favor del proveedor y se programa el pago
la remision queeda en expediente y la factura aabierta hasta su pago
una vez pagadaa la factura, esta se cierra y va a expediente
-->
<a href="recepcion/">recepcion</a>
<a href="enfermeria/">enfermeria</a>
<a href="farmacia/">farmacia</a>
<a href="caja/">caja</a>
<a href="cxc/">cxc</a>
<a href="cxp/">cxp</a>