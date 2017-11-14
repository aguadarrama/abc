<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php
        include_once '../libs/scripts.inc';
        include_once '../libs/functions.php';
        ?>        
        <title></title>
        <script>
            var _option = 'new';
            $('document').ready(function() {
                $("#div-rep-cont").hide();
                $("input,select").attr("disabled", "disabled");
            });

            function fnNewRegistry() {
                $("input, select").removeAttr("disabled");
                $("#email").focus();
            }


            function fnGrabar() {
                console.log(_option);
                if (_option === 'new') {
                    $.post("usuarios.dba.php?action=saveNew", {email: $("#email").val(), pass: $("#pass").val(), activo: $("#activo").val()}, function(req) {
                        fnReport();
                    });
                }
                if (_option === 'edit') {
                    console.log('here');
                    console.log($("#email").val());
                    $.post("usuarios.dba.php?action=saveEdit", {userId: $("#userId").val(), email: $("#email").val(), pass: $("#pass").val(), activo: $("#activo").val()}, function(req) {
                        _option = 'new';
                        fnReport();
                    });
                }
                fnReset();
                return false;
            }

            function fnReset() {
                _option = 'new';
                $("input").val("");
                $("select").val(1);
                $("input,select").attr("disabled", "disabled");
            }
//        <!--        lee lso campos de nuevo usurio
//                mamda grabar
//                si es editar los lee y los manda actualizar
//                
//                
//                reresa un ok
//                
            /* MUESTRA REPORTE EN PANTALLA */
            function fnReport() {
                $("#div-reporte").load("usuarios.dba.php?action=report", function() {
                    $("#div-rep-cont").fadeIn();
                });
//                ver reporte 
//                manda la consulta y la muestra
            }

            /* CIERRA VENTANA DE REPORTE */
            function fnClose() {
                $("#div-rep-cont").fadeOut();
            }

            /* CARGA DATOS PARA EDITAR */
            function fnEdit(userId) {
                $.getJSON("usuarios.dba.php", {action: 'edit', userId: userId}, function(req) {
                    $("#userId").val(req.userId);
                    $("#email").val(req.Demail);
                    $("#pass").val(req.Dpass);
                    $("#activo").val(req.activo);
                    _option = 'edit';
                    $("input,select").removeAttr("disabled");
                });
            }

            /* BORRA UN USUARIO DEL SISTEMA */
            function fnDelete(userId) {
                var r = confirm("Confirmara Borrar Usuario");
                if (r == true) {
                    $.get("usuarios.dba.php", {action: "delete", userId: userId}, function(req) {
                        alert("Usuario Borrado");
                        fnReport();
                    });
                } else {
                    //alert("Borrar Usuario Cancelado");
                }
            }
        </script>
        <style>
            #div-master #div-forma table td{height: 40px; padding-left: 1rem; font-family:  'Roboto','SegoeUI','Arial'; font-size: 10pt;}
            #div-rep-cont table td{height: 40px; padding-left: 1rem; font-family:  'Roboto','SegoeUI','Arial'; font-size: 10pt;}
            #div-master table label{font-family: 'Roboto','SegoeUI','Arial'; font-weight: normal; margin-top: 7px; font-size: 1.3rem;}
            form table td:nth-child(1){width: 6%;}
            form table td:nth-child(2){width: 20%;}
            form table td:nth-child(3){width: 6%;}
            form table td:nth-child(4){width: 20%;}
            form table td:nth-child(5){width: 48%;}
            #div-reporte{margin-top: 1rem;}
            #div-master button.btn{font-family: 'Roboto','SegoeUI','Arial'; font-size: 10pt;}
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <?php
            fn_header("Usuarios");
            fn_menu_privado(1);
            ?>
            <div id="div-master">
            <div class="row" style="margin-top: 1rem;">
                <div class="col-sm-12 text-right">
                    <button class="btn btn-info" type="button" onclick="fnNewRegistry();"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nuevo Usuario</button>
                    <button class="btn btn-success" type="button" onclick="fnReport();"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Reporte</button>
                </div>
            </div>
            <div id="div-forma" class="row" style="margin-top: 1rem;">
                <div class="col-sm-12">
                    <form onsubmit="return fnGrabar();">
                        <table style="width: 100%;">
                            <tr>
                                <td><label>Email</label></td>
                                <td><input class="form-control  form-control-sm" id="email" name="email" type="email" required=""></td>
                                <td><label>Contrase&ntilde;a</label></td>
                                <td><input class="form-control form-control-danger" id="pass" name="pass" type="password" required=""></td>
                                <td>
                                    <button class="btn btn-info" type="submit">Grabar</button>
                                    <button class="btn btn-danger" type="button" onclick="fnReset();">Cancelar</button>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Estatus</label></td>
                                <td>
                                    <select class="form-control" id="activo">
                                        <option value="1" selected="">Activo</option>
                                        <option value="0">No Activo</option>
                                    </select>                            
                                </td>
                                <td><label>Nivel</label></td>
                                <td><input class="form-control" value="1" readonly=""></td>
                                <td></td>
                            </tr>
                        </table>
                        <input type="hidden" id="userId" value="">
                    </form>
                </div>
            </div>
            <div id="div-rep-cont" class="panel panel-info" style="margin-top: 1rem;">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-sm-6">
                            Reporte de Usuarios
                        </div>
                        <div class="col-sm-6 text-right">
                            <button class="btn btn-info btn-sm" type="button" onclick="fnClose();">Cerrar Reporte</button>
                        </div>
                    </div>
                </div>
                <div id="div-reporte">
                </div>
            </div>

        </div>
        </div>
    </body>
</html>
