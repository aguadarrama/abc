<?php

//$nombres = ["nombre"=>"angel","edad"=>"49","depto"=>"sistemas"];
//$nombres["cred"]=$_GET['credencial'];
////$nombres["cred"]=474747;
////echo $nombres;
////echo "<br>";
////echo json_encode($nombres);
//if(isset($_GET['callback'])){
//    echo $_GET['callback'].'('.json_encode($nombres).')';
//}else{
//    echo json_encode($nombres);
//}

//$credencial = $_GET['credencial'];

//$credencial = filter_input(INPUT_GET, "credencial");
$folio = filter_input(INPUT_GET, "folio");

//echo $credencial;



//$folio = '471243';
//ini_set ('mssql.charset',  'UTF-8');//

$dns = "Driver={SQL Server};Server=172.16.26.185\suspes,1433;Database=SUSPE;Integrated Security=SSPI;Persist Security Info=False;";
$conn = odbc_connect($dns, 'sa', 'Suspe3');
//odbc_exec($conn, "SET NAMES 'UTF8'");
//odbc_exec($conn, "SET client_encoding='UTF-8'");

//$ses_sql = "SELECT * FROM Webpersona WHERE NumCredencial = '" . $credencial . "'";
$ses_sql = "SELECT * FROM WebEstudiosEmitidos WHERE idestudio = '" . $folio . "'";
//echo $ses_sql;
$rs = odbc_exec($conn, $ses_sql);
//echo odbc_error();
//echo "<br>";
echo odbc_errormsg();
if (!$rs) {
    exit("error en la consulta sql");
}
//echo "-------------------<br>";
//echo odbc_num_rows($rs);
//echo "<br>";
//echo "-------------------<br>";

//--$Acredencial = array();

//print_r($Acredencial);
//echo "<br>";

if (odbc_num_rows($rs) > 0) {

    //while ($row2 = odbc_fetch_array($rs)) {//        inicia ciclo que recorre todos los registros leidos del ses
    $row2 = odbc_fetch_array($rs);//        inicia ciclo que recorre todos los registros leidos del ses
        //print_r($row2);
        //$Acredencial[] = $row2;
        
        
        //array_walk_recursive($Acredencial, function(&$entry){
        //    $entry = iconv('windows-1250','UTF-8',$entry);
        //});
        //echo $row2['idestudio'];
       // echo "<br";
        //echo utf8_encode($row2['ApMaterno']);
        
        foreach ($row2 as $key => $value) {
            $row2[$key] = utf8_encode($value);
        }
        $row2["status"]="success";
        //echo "<br>";
        //print_r($row2);
        //--$Acredencial[] = $row2;
        
        
        
        
        //echo "<br";
        //echo array_map('utf8_encode', $row2);
        //echo "++<br>";
    //}
        
        
        //WebEstudiosEmitidosDetalle
        
        $ses_sqlDetalle = "SELECT Estudio FROM WebEstudiosEmitidosDetalle WHERE IdEstudio='".$folio."'";
        $rsDetalle = odbc_exec($conn, $ses_sqlDetalle);
        //print_r($rsDetalle);
        //echo "<br><br>";
        //var_dump($rsDetalle);
        //echo "<br><br>";
        $strDetalle = "";
        while ($rowDetalle = odbc_fetch_array($rsDetalle)) {
            
        //echo "<br><br>";
        //var_dump($rowDetalle);
            $strDetalle = $strDetalle.trim($rowDetalle["Estudio"]).", ";
        }
        //echo "<br><br>";
        
        //echo $strDetalle;
        //echo utf8_encode($strDetalle);
        
        //echo "<br><br>";
        
        //echo substr($strDetalle, 0,strlen($strDetalle)-2);
        //echo "<br><br>";
        
        //IdEstudio
        //Estudio
        //$row2["estudio"] = $strDetalle;
        $row2["estudio"] = utf8_encode(substr($strDetalle, 0,strlen($strDetalle)-2));
        
        
        
        
        
}else{
$row2["status"]="error";
}
//echo "**<br>array";
//print_r($Acredencial);
//echo "**<br>json";
//echo json_encode($Acredencial);
//echo json_encode($row2);




if(isset($_GET['callback'])){
    //--echo $_GET['callback'].'('.json_encode($Acredencial).')';
    echo $_GET['callback'].'('.json_encode($row2).')';
}else{
    //--echo json_encode($Acredencial);
    echo json_encode($row2);
}





//lee la credencial
//hace la coneccion
//corre el query
//hay registros?
//s/i
//a/rma el array
//n/o hay registros
//m/sg de erros en el array
//fin
//envia el array
?>