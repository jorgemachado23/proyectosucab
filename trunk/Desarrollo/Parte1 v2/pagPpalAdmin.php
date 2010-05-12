<?php 
session_start();

$usuario = $_SESSION["usuario"];
$_SESSION["privilegio"];
$tema = $_GET['tema'];
?>

<html><!-- InstanceBegin template="/Templates/plantillaAulaVirtual.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Aula Virtual CSLC</title>
<!-- InstanceEndEditable -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<link href="files/style_.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<!-- ImageReady Slices (plantillaAulaVirtual.ai) -->
<table id="Table_01" width="1024" height="1241" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td rowspan="3">
			<img src="images/plantillaAulaVirtual_01.png" width="1" height="1241" alt=""></td>
		<td colspan="2" align="left" valign="top" background="images/plantillaAulaVirtual_02.png" width="1023" height="393" >
        <table width="75%" height="100%" border="0">
  <tr>
    <td width="11%" height="357">&nbsp;</td>
    <td width="89%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
    <!--Cerrar Sesion-->
     <!-- InstanceBeginEditable name="Cerrar Sesion" -->
	   <h2 style="vertical-align:top"><a href="cerrarSesion.php" class="home" id="link_home" style="color:#666666; font-style:italic; font-size:18px;">Cerrar Sesión >&gt;</a></h2>
	 <!-- InstanceEndEditable -->
    </td>
  </tr>
</table>

		</td>
	</tr>
	<tr>
    
		<td align="left" valign="top" width="672" height="807" background="images/plantillaAulaVirtual_03.png">
        
        <table width="100%" border="0">
  <tr>
    <td width="5%"></td>
    <td width="95%"><!-- InstanceBeginEditable name="Contenido" -->
		<br />
<br />

	 <h2>Bienvenid@&nbsp;
	  	    <?php 
				echo $_SESSION["usuario"];
				$usuario = $_SESSION["usuario"];
			?>
          </h2>
	 <div align="justify" style=" width:95%"><br />
         <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenid@ al sistema de Aula Virtual SAVI, éste sistema está basado en la idea de hacer que el cálculo de notas y elaboración de exámenes resulte más eficiente y útil, e incluso divertido. Después de todo, SAVI tiene:<br />
  <br />
  <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Un foro en el que podrá crear temas de discusión para sus estudiantes, el cuál los ayudará a solventar dudas que puedan aparecer incluso después de varias clases, haciendo mas divertido el estudio y permitiéndole a usted ayudarlos aún estando fuera del aula de clase.<br />
  <br />
  <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Módulo para la elaboración de exámenes virtuales, los cuáles se basaran en preguntas de selección, permitiéndole mantener la atención de sus estudiantes en el estudio de la materia ya que al realizarlos en casa les brinda una sensación de tranquilidad y seguridad al responderlos siendo actividades similares a las realizadas en clase.<br />
  <br />
  <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Además de lo anterior y de gran importancia, es que SAVI le permitirá llevar un control de sus estudiantes y de las notas de cada una de las evaluaciones que haya realizado a través de este sistema o en el aula de clase, ahorrandole tiempo y evitando posibles errores que puedan ocurrir en el traspaso de las mismas debido a la gran cantidad de estudiantes que usted lleva manualmente.<br />
  <br />
  <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disfrute de SAVI, cualquier información o duda debe consultar con los administradores del sistema.
	   
	   </div>
    <!-- InstanceEndEditable --></td>
  </tr>
</table>

        	</td>
  <td rowspan="2" align="left" valign="top" background="images/plantillaAulaVirtual_04.png" width="351" height="848">
			
			<table id="sidebar" width="354" border="0">
              <tr>
                <td>
                <ul class="categorytext">
        <li>
          
          <ul>
            <li><a href="agregarAlumnoAdmin_1.php">Agregar Alumnos</a> </li>
            <li><a href="modificarAlumnoAdmin_1.php">Modificar Alumno</a> </li>
            <li><a href="inhabilitarAlumnoAdmin_1.php">Inhabilitar Alumno</a> </li>
            <li><a href="eliminarAlumnoAdmin_1.php">Eliminar Alumnos</a> </li>
          </ul>
        </li>
      </ul>
                
                </td>
                
              </tr>
              <tr>
                <td>
                
                <ul class="categorytext">
        <li>
          
          <ul>
            <li><a href="agregarExamenAdmin_1.php">Agregar Examen Virtual</a> </li>
            <li><a href="modificarExamenAdmin_1.php">Modificar Examen Virtual</a> </li>
            <li><a href="eliminarExamenAdmin_1.php">Eliminar Examen Virtual</a> </li>
          </ul>
        </li>
      </ul>
                
                </td>
               
              </tr>
              <tr>
                <td>
                
                
          <ul class="categorytext">
        <li>
          
          <ul>
<li><a href="agregarEvaluacionAdmin.php">Agregar Evaluación</a></li>
          <li><a href="modificarEvaluacionAdmin.php">Modificar Evaluación</a></li>
          <li><a href="eliminarEvaluacionAdmin.php">Eliminar Evaluación</a></li>
          <li><a href="cargarNotasAdmin.php">Cargar Notas</a></li>
          <li><a href="consultarNotasAdmin.php">Consultar Notas</a></li>
          <li><a href="modificarNotasAdmin.php">Modificar Notas</a></li>
          </ul>
        </li>
      </ul>
          
                
                </td>
              
              </tr>
              <tr>
                <td>
                
          <ul class="categorytext">
        <li>
          
          <ul>
			<li><a href="gestionarForo.php">Ver Foro</a></li>
    	   <li><a href="crearTema.php">Crear un tema</a></li>
           <li><a href="borrarContenidoForo.php">Borrar Foro</a></li>
          </ul>
        </li>
      </ul>
          
                
                
                </td>
              
              </tr>
            </table></td>
	</tr>
	<tr>
		<td>
			<img src="images/plantillaAulaVirtual_05.png" width="672" height="41" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
</body>
<!-- InstanceEnd --></html>