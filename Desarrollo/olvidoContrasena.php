<?php 
session_start();

$_SESSION["usuario"];
$_SESSION["privilegio"];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Aula Virtual</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="files/style.css" type="text/css" media="screen" />
<!--[if IE 7]>	<link rel="stylesheet" type="text/css" media="all" href="files/style_ie.css" /><![endif]-->
<!--[if lt IE 7]><link rel="stylesheet" type="text/css" media="all" href="files/style_ie6.css" /><![endif]-->
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
</head>
<body>
<div id="wrapper">
  <div class="header">
    <div class="inner">
      <ul class="nav">
        <li><a href="" class="home" id="link_home">Home</a></li>
        <li><a href="" class="about" id="link_about">About</a></li>
        <li><a href="" class="contact" id="link_contact">Contact</a></li>
      </ul>
    </div>
	
	
	<div class="paperclip"></div>
	<div style="position:absolute; left: 237px; top: 269px;"> 
    <h2>¿Olvido su Usuario o Contraseña?</h2></div>
  </div>
  
  <div id="container">
    <div id="contentInicioSesion">
      <div id="content_top">
		<div class="post">
<td align="left">Su nombre de Usuario y Contraseña seran enviados a la dirección de correo</td>
		<h2>&nbsp;</h2>
		<td>electrónico secundaria que facilitó cuando ingreso por primera vez al sistema.</td>
        </div>
        <div class="post">
        <form id="form2" name="form2" method="post" action="">
          <p><span class="style1">Correo alterno:</span> 
            <input name="correo" type="text" id="correo" size="50" style="font-family:Verdana, Arial, Helvetica, sans-serif" /> 
            <input type="submit" name="button" id="button" value="Enviar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </p>
          </form>
        
        
         
<?php 


if (isset($_POST["button"]))
{
	$cor = $_POST["correo"];
	if ($cor <> "")
	{
	
	$correo = strtoupper($_POST["correo"]);	
	
	$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
	mysql_select_db("metodologia", $conexion); 
	
	$queEmp = "SELECT p.`correo` as correo,p.`clave` as clave FROM persona p WHERE p.`correo` = '$correo'";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

	$totEmp = mysql_num_rows($resEmp); 
	
	
	if ($totEmp> 0) {
   		while ($rowEmp = mysql_fetch_assoc($resEmp)) {
     		
			$cuerpo="La clave es: ".$rowEmp['clave'];
			
			
			?>
				<script language="javascript">
					window.location = "inicioSesion.php";
					window.alert("Su contraseña ha sido enviada al correo alterno.");
				</script>
				
				
			<?
			
			/* if(mail("anampardo@gmail.com","Contrasena",$cuerpo))
			
			{
				?>
				<script language="javascript">
					window.location = "inicioSesion.php";
					window.alert("Su contraseña ha sido enviada al correo alterno.");
				</script>
				
				
				<?
			
			}
			 */			
   }
} else 
   			{	?>
				<script language="javascript">
					window.alert("El correo no esta registrado.");
				</script>
				
				
				<? }
	} else
	{
	?>
	<script language="javascript">
		window.alert("Debe ingresar el correo.");
	</script>			
	<?
	}
   

}


?>      
         
        </div>
        

    </div>
    <div id="sidebarInicioSesion2">
    </div>
  </div>
  <div id="footer">
    <div class="the-site">
      <ul>
        <li><a>Derechos Reservados(C) CAD 2009</a></li>
      </ul>
    </div>
    <hr noshade size=1 />
  </div>
</div>
</body>
</html>