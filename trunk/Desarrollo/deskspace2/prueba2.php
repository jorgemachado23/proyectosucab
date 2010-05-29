<?php 
session_start();

$_SESSION["seccion"];
 
echo "<table border='0' align='center'>";
 
$conexion = mysql_connect("localhost", "root", "12345");
mysql_select_db("metodologia", $conexion); 

$queEmp = "SELECT e.`nombre` as nombreEval, e.`idEVALUACION` as evaluacion FROM metodologia.evaluacion e";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

$totEmp = mysql_num_rows($resEmp);
		

if ($totEmp> 0) {
	 
echo "<tr><td></td>";


while ($rowEmp = mysql_fetch_assoc($resEmp)) {
   
   echo " 
    <td width='10' style='background:white; top:102p x; right:934px; width:10px; writing-mode:tb-rl; filter:flipV() flipH()'>
      ".$rowEmp['nombreEval']."
   </td> ";
   
   	}	
	echo  "</tr>";
	
$queEmp = "SELECT e.`nombre` as nombreEval, e.`idEVALUACION` as evaluacion FROM metodologia.evaluacion e";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

$totEmp = mysql_num_rows($resEmp);

	

	
	$seccion=$_SESSION["seccion"];
	
	$queEmp2 = "SELECT p.`nombre` as nombre, p.`apellido` as apellido, p.`segundoNombre` as nombre2, p.`segundoApellido` as apellido2, p.`idPERSONA` as ident FROM metodologia.persona p WHERE p.`seccion`='$seccion'";
	$resEmp2 = mysql_query($queEmp2, $conexion) or die(mysql_error());

	$totEmp2 = mysql_num_rows($resEmp2);
	

	
	while ($rowEmp2 = mysql_fetch_assoc($resEmp2)) {
	$cont=0;
	echo "<tr>";
	 echo " 
    <td width='300'>
      ".$rowEmp2['nombre']." ".$rowEmp2['nombre2']." ".$rowEmp2['apellido']." ".$rowEmp2['apellido2']."
   </td> ";
   
   while ($cont <= $totEmp){
   $pers=$rowEmp2['ident'];
   $eval=$rowEmp['evaluacion'];
   $queEmp3 = "SELECT n.`nota` as nota FROM metodologia.nota n
WHERE n.`PERSONA_idPERSONA`=$pers AND n.`EVALUACION_idEVALUACION`=$cont";
	$resEmp3 = mysql_query($queEmp3, $conexion) or die(mysql_error());

	$totEmp3 = mysql_num_rows($resEmp3);
	
	if ($totEmp3> 0) {	
  		while ($rowEmp3 = mysql_fetch_assoc($resEmp3)) {
   	
    		echo " <td>".$rowEmp3['nota']."</td> ";
     	}
	 }
	
	$cont=$cont+1;
   }
   
   
   	echo "</tr>";
	
	}
	
	

	}
	
			

 
 
 
 

?>


<tr>
    <td width="62">&nbsp;</td>
    <td width="82">&nbsp;</td>
    <td width="42">&nbsp;</td>
  </tr>
</table>
