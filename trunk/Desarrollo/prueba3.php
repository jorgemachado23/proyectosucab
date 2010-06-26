<?php 
session_start();

$seccion = $_SESSION["seccion"];
$evalu = $_SESSION["evaluacion"];

include('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('fonts/Courier.afm');
$datacreator = array (
                    'Title'=>'Ejemplo PDF',
                    'Author'=>'unijimpe',
                    'Subject'=>'PDF con Tablas',
                    'Creator'=>'unijimpe@hotmail.com',
                    'Producer'=>'http://blog.unijimpe.net'
                    );
$pdf->addInfo($datacreator);

$conexion = mysql_connect("127.0.0.1", "root", "");
	mysql_select_db("aulavirtual", $conexion);

$quePer = "select `nombre`,`apellido`,`segundonombre`,`segundoapellido`, idpersona FROM persona where seccion = '$seccion'  ";
$resPer = mysql_query($quePer, $conexion) or die(mysql_error());

$queEmp = "SELECT e.`nombre` as nombreEval, e.`idevaluacion` as evaluacion FROM aulavirtual.evaluacion e where e.idevaluacion = $evalu";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

$totEmp = mysql_num_rows($resEmp);



if ($totEmp> 0)
{
   
    while ($rowEmp = mysql_fetch_assoc($resEmp)) {

        $eval = $rowEmp['nombreEval'];
        

        $titles = array('num'=>'<b>Alumno</b>', 'mes'=>'<b>'.$eval.'</b>');

        while ($rowPer = mysql_fetch_assoc($resPer)){

            $evaluacion = $rowEmp['evaluacion'];
             $persona = $rowPer['idpersona'];

           
            $queNota = "SELECT `nota` FROM `nota` WHERE `idpersona`=$persona and `idevaluacion`=$evaluacion";
            $resNota = mysql_query($queNota, $conexion) or die(mysql_error());

            $rowNota = mysql_fetch_assoc($resNota);

            $x = $rowPer['nombre']." ".$rowPer['segundonombre']." ".$rowPer['apellido']." ".$rowPer['segundoapellido'];
            $data[] = array('num'=>$x, 'mes'=>''.$rowNota['nota'].'');
        }

     
    }

        $pdf->ezText("<b>Colegio Santiago de Leon de Caracas</b>\n",16);
        $pdf->ezText("Seccion: ".$_SESSION["seccion"]."\n",12);
         $pdf->ezText("Evaluacion: ".$eval."\n",12);
        $pdf->ezTable($data,$titles,'',$options );
        $pdf->ezText("\n\n\n",10);
        $pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"),10);
        $pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n",10);

        $pdf->ezStream();

}




?>