<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantilla.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin título</title>
<!-- InstanceEndEditable -->
<style type="text/css">
<!--
body {
	background-color: #000000;
}
.cuerpo{
	padding-left:180px;
}
.titulo {
	color:#FFF;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;}
.autor {
	color:#CCC;
	font-family:Verdana, Geneva, sans-serif;
	font-size:12px;
	}
.linkTitulo {
	color:#FF9933;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
	text-decoration:none;
	font-weight:bold;
}
.autor {
	color:#FFF;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
	padding-left: 30px;
	}
-->
</style>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>


<div align="center">
  <table width="80%" border="0" align="center">
    <tr>
      <td height="274" valign="top"><img src="images/Banner-Publicacion.png" width="832" height="257" /><br />
</td>
    </tr>
    <tr>
      <td background="images/Menu_buscar_Publicacion.png" style="background-repeat:no-repeat" width="832" height="67">
      	<form id="form1" name="form1" method="post" action="">
        	<table width="100%" border="0">
        		<tr>
          			<td width="17%">&nbsp;</td>
          			<td width="29%">
            			<select name="select" id="select" >
            			  <option value="0">Todos</option>
            			  <option value="1" selected="selected">Estrategia</option>
                          <option value="2">Gerencia</option>
                          <option value="3">Mercadeo</option>
            			  <option value="4">Creatividad e Innovacion</option>
                          <option value="5">Liderazgo</option>
                          <option value="6">Comunicación</option>
            			  <option value="7">Desarrollo Humano</option>
                          <option value="8">Legal</option>
                          <option value="9">Arte</option>
                          <option value="10">Filosofía</option>
                          <option value="11">Negociación</option>
            			</select>
          			</td>
          			<td width="54%"><label>
          			  <input type="submit" name="button" id="button" value="Buscar" />
       			    </label></td>
        		</tr>
      		</table>
       	</form>
       </td>
    </tr>
    <tr>
      <td class="cuerpo">
      
      <!-- InstanceBeginEditable name="articulos" -->
      <?php

require_once('domxml-php4-to-php5.php');

function CargarXML($ruta_fichero) 
{ 
	$contenido = ""; 
	if($da = fopen($ruta_fichero,"r")) 
	{ 
		while ($aux= fgets($da,1024)) 
		{ 
			$contenido.=$aux; 
		} 
		fclose($da); 
	} 
	else 
	{	 
		echo "Error: no se ha podido leer el archivo <strong>$ruta_fichero</strong>"; 
	} 


	$tagnames = array ("seccion","titulo","autor","url"); 

	if (!$xml = domxml_open_mem($contenido)) 
	{ 
		echo "Ha ocurrido un error al procesar el documento<strong> \"$ruta_fichero\"</strong> a XML <br>"; 
		exit; 
	}	 
	else 
	{ 
		$raiz = $xml->document_element();

		
		$tam=sizeof($tagnames); 

		for($i=0; $i<$tam; $i++) 
		{ 
			$nodo = $raiz->get_elements_by_tagname($tagnames[$i]); 
			$j=0; 
			foreach ($nodo as $etiqueta) 
			{ 
				$matriz[$j][$tagnames[$i]]=$etiqueta->get_content(); 
				$j++; 
			} 
		} 

	return $matriz; 
	} 
} 	  

function imprimirXML($matriz,$selecSeccion){
	
	$num_fila = 0; 
	$num_noticias=sizeof($matriz); 
	for($i=0;$i<$num_noticias;$i++) 
	{ 
		if($selecSeccion=="Todos"){
			echo ' 
			<table width=500>';
			
   			if ($num_fila%2==0) 
      	 		echo '<tr bgcolor=#666666'; //si el resto de la división es 0 pongo un color 
   			else 
      	 		echo '<tr bgcolor=#333333'; //si el resto de la división NO es 0 pongo otro color 
   			echo ">";
			
			echo '<td><a href='.$matriz[$i]["url"].' class="linkTitulo" target="_blank">'.$matriz[$i]["titulo"].'</a></td></tr>'; 
			
			if ($num_fila%2==0) {
      	 		echo "<tr bgcolor=#666666"; //si el resto de la división es 0 pongo un color 
			}
   			else{ 
      	 		echo "<tr bgcolor=#333333"; //si el resto de la división NO es 0 pongo otro color 
			}
   			echo ">";
			
			echo '<td class="autor">'.$matriz[$i]["autor"].'</td></tr>
			</table><br> '; 
		
			$num_fila++;
			}
		else if($matriz[$i]["seccion"]==$selecSeccion){
			echo ' 
			<table width=500>';
			
   			if ($num_fila%2==0) 
      	 		echo '<tr bgcolor=#666666'; //si el resto de la división es 0 pongo un color 
   			else 
      	 		echo '<tr bgcolor=#333333'; //si el resto de la división NO es 0 pongo otro color 
   			echo ">";
			
			echo '<td><a href='.$matriz[$i]["url"].' class="linkTitulo" target="_blank">'.$matriz[$i]["titulo"].'</a></td></tr>'; 
			
			if ($num_fila%2==0) {
      	 		echo "<tr bgcolor=#666666"; //si el resto de la división es 0 pongo un color 
			}
   			else{ 
      	 		echo "<tr bgcolor=#333333"; //si el resto de la división NO es 0 pongo otro color 
			}
   			echo ">";
			
			echo '<td class="autor">'.$matriz[$i]["autor"].'</td></tr>
			</table><br> '; 
		
			$num_fila++;
		} 
	} 	
}

function buscarSeccion($seccion){
	
	switch ($seccion){
		
		case "0":
			return "Todos";
			break;
		case "1":
			return "Estrategia";
			break;
		case "2":
			return "Gerencia";
			break;
		case "3":
			return "Mercadeo";
			break;
		case "4":
			return "Creatividad e Innovacion";
			break;
		case "5":
			return "Liderazgo";
			break;
		case 6:
			return "Comunicacion";
			break;
		case "7":
			return "Desarrollo Humano";
			break;
		case "8":
			return "Legal";
			break;
		case "9":
			return "Arte";
			break;
		case "10":
			return "Filosofia";
			break;
		case "11":
			return "Negociacion";
			break;
		}
	}


if(isset($_POST["button"])){
	
	$seccion = $_POST["select"];
	//echo $seccion;
	$selecSeccion = buscarSeccion($seccion);
	$matriz = cargarXML("prueba.xml");
	imprimirXML($matriz,$selecSeccion);
	

}
	 
 
 
      ?>
      <!-- InstanceEndEditable -->
     
      </td>
    </tr>
  </table>


</div>
</body>
<!-- InstanceEnd --></html>
