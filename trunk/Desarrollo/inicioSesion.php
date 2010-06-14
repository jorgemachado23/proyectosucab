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
</head>
<body>
<div id="wrapper">
  <div class="header">
    	
    <div class="inner">
      <ul class="nav">
        <li><a href="http://www.free-css.com/" class="home" id="link_home">Home</a></li>
        <li><a href="http://www.free-css.com/" class="about" id="link_about">About</a></li>
        <li><a href="http://www.free-css.com/" class="contact" id="link_contact">Contact</a></li>
      </ul>
    </div>
    <div class="paperclip"></div>
	<div style="position:absolute; left: 237px; top: 269px;"> 
    <h2>Bienvenido al Sistema de Aula Virtual</h2></div>
  </div>

  <div id="container">
    <div id="contentInicioSesion">
      <div id="content_top">
        
		<div class="post">
		    	    <td align="left">Para ingresar al sistema introduzca su usuario y contraseña y haga clic en el</td>
		<h2>&nbsp;</h2>
		<td>botón "Iniciar Sesión" que aparece a continuación.</td>
        </div>
        <div class="post">
        <form id="form1" name="form1" method="post" action="" style="font-family:Verdana, Arial, Helvetica, sans-serif">
          <table width="705" border="0" style="font-family:Verdana, Arial, Helvetica, sans-serif">
            <tr>
              <td width="151">Nombre de Usuario:</td>
              <td><input name="nombreUsuario" type="text" id="nombreUsuario" size="50" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></td>
            </tr>
            <tr>
              <td>Contraseña</td>
              <td><input type="password" name="clave" id="clave" size="50" style="font-family:Verdana, Arial, Helvetica, sans-serif"/></td>
            </tr>
          </table>
          <div align="center">
            <p>
              <input type="submit" name="inicioSesion" id="inicioSesion" value="Iniciar Sesión" style="font-family:Verdana, Arial, Helvetica, sans-serif"/>
            </p>
            <p><a href="olvidoContrasena.php">¿Olvido su contraseña?</a></p>
          </div>
        </form> 
         
<?php 

if (isset($_POST["inicioSesion"]))
{

	$nombreUsuario = strtoupper($_POST["nombreUsuario"]);
	$clave = strtoupper($_POST["clave"]);
	
	$_SESSION["usuario"] = $nombreUsuario;
	$_SESSION["privilegio"] = $clave;

	
	$conexion = mysql_connect("127.0.0.1", "root", "dvazquez");
	mysql_select_db("metodologia", $conexion); 
	
	$queEmp = "SELECT p.`clave` as clave, p.`tipo` as tipo FROM metodologia.persona p WHERE p.`cuenta` = '$nombreUsuario'";
	$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());

	$totEmp = mysql_num_rows($resEmp); 
	
	
	if ($totEmp> 0) {
   		while ($rowEmp = mysql_fetch_assoc($resEmp)) {
     		
			if ($clave == $rowEmp['clave'])
			{
				
				if ($rowEmp['tipo']== "ADMIN")
				{
				?>
				<script language="javascript">
					window.location = "pagPpalAdmin.php";
				</script>
				
				<? }
				else if ($rowEmp['tipo']== "ALUM")
				{
				?>
				<script language="javascript">
					window.location = "pagPpal.php";
				</script>
				
				<? 
				
				}
			}
			
   }
} else 
			{
			?>
				<script language="javascript">
					window.alert("El nombre de usuario no existe. Verifique los datos o \n comuniquese con el administrador");
				</script>
				
				<? 
			}

}


?>      
         
        </div>
    </div>
    <div id="sidebarInicioSesion">
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
