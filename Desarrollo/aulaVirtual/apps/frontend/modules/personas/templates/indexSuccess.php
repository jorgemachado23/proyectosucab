<?php
/*
 * En este archivo se muestra la lista de los alumnos pertenecientes a la 
 * seccion seleccionada con anterioridad.
 */

if ($_SESSION["seccion"]==null){

$seccion = $_POST["seccion"];
$_SESSION["seccion"]=$seccion;

}

else $seccion = $_SESSION["seccion"];
?>

<br />
<br />
<br />
<br />
<br />
<h1 align="center">Lista de Alumnos</h1>
<br />
<br />


<table>
  <thead>
    <tr>
      
      <th align="left">Nombre</th>
      <th align="left">Segundo Nombre</th>
      <th align="left">Apellido</th>
      <th align="left">Segundo Apellido</th>
     
      
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
            <li><a href="<?php echo url_for('personas/new') ?>">&nbsp;&nbsp;Agregar Alumnos</a> </li>
            <li><a href="<?php echo url_for('personas/seccion') ?>">&nbsp;&nbsp;Listar Alumnos</a> </li>
            <li><a href="<?php echo url_for('personas/eliminar') ?>">&nbsp;&nbsp;Eliminar Alumnos</a> </li>
            <li><a>&nbsp;&nbsp;</a></li>
          </ul>
        </li>
      </ul>
      <div class="newcomments">
        <ul>
          <li><a href="<?php echo url_for('cont_examen/evaluacion') ?>">&nbsp;&nbsp;Agregar Exámen Virtual</a></li>
        	<li><a href="">&nbsp;&nbsp;Modificar Exámen Virtual</a></li>
        	<li><a href="">&nbsp;&nbsp;Eliminar Exámen Virtual</a></li>
        </ul>
      </div>
      <div class="linkstext">
        <ul>
	  <li><a href="<?php echo url_for('eval/new') ?>">&nbsp;&nbsp;Agregar Evaluación</a></li>
          <li><a href="<?php echo url_for('eval/index') ?>">&nbsp;&nbsp;Ver Evaluaciones</a></li>
          <li><a href="<?php echo url_for('eval/borrar') ?>">&nbsp;&nbsp;Eliminar Evaluación</a></li>
          <li><a href="<?php echo url_for('notas/seccion') ?>">&nbsp;&nbsp;Cargar Notas</a></li>
          <li><a href="">&nbsp;&nbsp;Consultar Notas</a></li>
          <li><a href="">&nbsp;&nbsp;Modificar Notas</a></li>
        </ul>
      </div>
      <div class="linkstext">
      <ul>
    	   <li><a href="<?php echo url_for('temas/index') ?>">&nbsp;&nbsp;Ver Foro</a></li>
    	   <li><a href="<?php echo url_for('temas/new') ?>">&nbsp;&nbsp;Crear un tema</a></li>
           <li><a href="">&nbsp;&nbsp;Borrar Foro</a></li>
      </ul>
      </div>
<?php end_slot(); ?>