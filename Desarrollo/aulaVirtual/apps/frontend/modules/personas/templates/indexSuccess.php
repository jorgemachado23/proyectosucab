<?php
if ($_SESSION["seccion"]==null){

$seccion = $_POST["seccion"];
$_SESSION["seccion"]=$seccion;

}

else $seccion = $_SESSION["seccion"];
?>

<br /><br />
<h1>Lista de Alumnos</h1>
<br /><br />




<table>
  <thead>
    <tr>
      
      <th>Nombre</th>
      <th>Segundo Nombre</th>
      <th>Apellido</th>
      <th>Segundo Apellido</th>
     
      
    </tr>
  </thead>
  <tbody>

    <?php foreach ($persona_list as $persona): ?>
      <?php if ((($persona->getTipo())=="ALUM")&&(($persona->getSeccion())==$seccion)){?>
    <tr>
        <td width="150"><a href="<?php echo url_for('personas/show?idpersona='.$persona->getIdpersona()) ?>" style="text-decoration:underline;color: gray"><?php echo $persona->getNombre() ?></td>
      <td width="150"><?php echo $persona->getSegundonombre() ?></td>
      <td width="150"><?php echo $persona->getApellido() ?></td>
      <td width="150"><?php echo $persona->getSegundoapellido() ?></td>
    </tr>
    <?php }?>
    <?php endforeach; ?>
  </tbody>
</table>

 <!--<a href="<?php //echo url_for('personas/new') ?>">New</a>-->

  <!-- Aquí se define el slot que me devuelve el menú para el usuario ALUM -->

<?php slot('menuSidebarAlumno')
      ?>
      <div class="linkstext">
        <ul>
		<p></p>
		<p></p>
                <br />
		<a href="">Ver Temas</a>
        </ul>
      </div>
      <div class="linkstext">
      <ul>
	  <p></p>
	  <p></p>
          <br />
	       <a href="">Responder Exámen</a>
      </ul>
      </div>
<?php end_slot(); ?>

<!-- Aquí se define el slot que me devuelve el menú para el usuario ADMIN -->

<?php slot('menuSidebarAdmin')
      ?>
       <ul class="categorytext">
        <li class="categories">
          <h2>
            <!-- -->
          </h2>
          <ul>
            <li><a href="">&nbsp;&nbsp;Agregar Alumnos</a> </li>
            <li><a href="">&nbsp;&nbsp;Modificar Alumno</a> </li>
            <li><a href="seccion">&nbsp;&nbsp;Listar Alumnos</a> </li>
            <li><a href="">&nbsp;&nbsp;Eliminar Alumnos</a> </li>
          </ul>
        </li>
      </ul>
      <div class="newcomments">
        <ul>
           <li><a href="">&nbsp;&nbsp;Agregar Exámen Virtual</a></li>
        	<li><a href="">&nbsp;&nbsp;Modificar Exámen Virtual</a></li>
        	<li><a href="">&nbsp;&nbsp;Eliminar Exámen Virtual</a></li>
        </ul>
      </div>
      <div class="linkstext">
        <ul>
		<li><a href="">&nbsp;&nbsp;Agregar Evaluación</a></li>
          <li><a href="">&nbsp;&nbsp;Modificar Evaluación</a></li>
          <li><a href="">&nbsp;&nbsp;Eliminar Evaluación</a></li>
          <li><a href="">&nbsp;&nbsp;Cargar Notas</a></li>
          <li><a href="">&nbsp;&nbsp;Consultar Notas</a></li>
          <li><a href="">&nbsp;&nbsp;Modificar Notas</a></li>
        </ul>
      </div>
      <div class="linkstext">
      <ul>
    	   <li><a href="">&nbsp;&nbsp;Ver Foro</a></li>
    	   <li><a href="">&nbsp;&nbsp;Crear un tema</a></li>
           <li><a href="">&nbsp;&nbsp;Borrar Foro</a></li>
      </ul>
      </div>
<?php end_slot(); ?>