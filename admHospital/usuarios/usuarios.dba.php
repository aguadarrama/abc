<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$link = mysqli_connect("127.0.0.1", "root", "", "admhospital");
//insertar nuevoi registro
//INSERT [LOW_PRIORITY | DELAYED | HIGH_PRIORITY] [IGNORE]
//    [INTO] tbl_name
//    [PARTITION (partition_name [, partition_name] ...)]
//    [(col_name [, col_name] ...)]
//    {VALUES | VALUE} (value_list) [, (value_list)] ...
//    [ON DUPLICATE KEY UPDATE assignment_list]
if ($_GET["action"] == "saveNew") {
    $sql = "INSERT INTO usuarios
        (email,password,activo)
        VALUES
        (
        AES_ENCRYPT('" . $_POST['email'] . "','741517366022'),
        AES_ENCRYPT('" . $_POST['pass'] . "','741517366022'),
        '" . $_POST['activo'] . "'
        )";
    mysqli_query($link, $sql);
}
//leer refgistro para edicion
if ($_GET['action'] == "edit") {
    $abc = array();
    $sql = "SELECT userId,AES_DECRYPT(email,'741517366022') as Demail,AES_DECRYPT(password,'741517366022') as Dpass,activo FROM usuarios WHERE userId='" . $_GET['userId'] . "'";
    $res = mysqli_query($link, $sql);
    $abc = mysqli_fetch_assoc($res);
    echo json_encode($abc);
}
//
//
//mostrar la consulta en un load  AES_DECRYPT
if ($_GET['action'] == "report") {
    $sql = "SELECT userId,AES_DECRYPT(email,'741517366022') as Demail,AES_DECRYPT(password,'741517366022') as Dpass,activo FROM usuarios WHERE flagDelete='0'";
    $res = mysqli_query($link, $sql);
    ?>
    <table class="table table-condensed table-striped table-hover">
        <thead class="thead-inverse">
            <tr>
                <th>Id</th><th>Correo Electr&oacute;nico</th><th>Contrase&ntilde;a</th><th>Activo</th><th colspan="2">Acci&oacute;n</th>
            </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_assoc($res)) {
            ?>
            <tr>
                <td><?= $row['userId'] ?></td>
                <td><?= $row['Demail'] ?></td>
                <td><?= $row['Dpass'] ?></td>
                <td><?= $row['activo'] ?></td>
                <td><button class="btn btn-info btn-sm" type="button" onclick="fnEdit('<?= $row['userId'] ?>');"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</button></td>
                <td><button class="btn btn-danger btn-sm" type="button" onclick="fnDelete('<?= $row['userId'] ?>');"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Borrar</button></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}

//
//
//
//actualizar registro
if ($_GET["action"] == "saveEdit") {
//borarr registro
    $sql = "UPDATE usuarios SET email = AES_ENCRYPT('" . $_POST['email'] . "','741517366022'),password = AES_ENCRYPT('" . $_POST['pass'] . "','741517366022'), activo = '" . $_POST['activo'] . "' WHERE userId = '" . $_POST['userId'] . "' LIMIT 1";
    mysqli_query($link, $sql);
//DELETE [LOW_PRIORITY] [QUICK] [IGNORE] FROM tbl_name
//    [PARTITION (partition_name [, partition_name] ...)]
//    [WHERE where_condition]
//    [ORDER BY ...]
//    [LIMIT row_count]
}

//UPDATE [LOW_PRIORITY] [IGNORE] table_reference
//    SET assignment_list
//    [WHERE where_condition]
//    [ORDER BY ...]
//    [LIMIT row_count]
//
if ($_GET["action"] == "delete") {
//borarr registro
    $sql = "UPDATE usuarios SET flagDelete = 1,DELETE_REGISTRY=NOW() WHERE userId = '" . $_GET['userId'] . "' LIMIT 1";
    mysqli_query($link, $sql);
//DELETE [LOW_PRIORITY] [QUICK] [IGNORE] FROM tbl_name
//    [PARTITION (partition_name [, partition_name] ...)]
//    [WHERE where_condition]
//    [ORDER BY ...]
//    [LIMIT row_count]
}
//userId
//email
//password
?>
