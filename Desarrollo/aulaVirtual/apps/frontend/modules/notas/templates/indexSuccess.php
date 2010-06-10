<h1>Notas List</h1>


<?php
if ($_SESSION["seccion"]==null){

$seccion = $_POST["seccion"];
$_SESSION["seccion"]=$seccion;

}
?>

<table>
  <thead>
    <tr>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Nota</th>
      <th>Idpersona</th>
      <th>Idevaluacion</th>
      <th>Idlapso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nota_list as $nota): ?>
    <tr>
      <td><a href="<?php echo url_for('notas/show?idnota='.$nota->getIdnota().'&idpersona='.$nota->getIdpersona().'&idevaluacion='.$nota->getIdevaluacion()) ?>"><?php echo $nota->getIdnota() ?></a></td>
      <td><?php echo $nota->getCreatedAt() ?></td>
      <td><?php echo $nota->getUpdatedAt() ?></td>
      <td><?php echo $nota->getNota() ?></td>
      <td><a href="<?php echo url_for('notas/show?idnota='.$nota->getIdnota().'&idpersona='.$nota->getIdpersona().'&idevaluacion='.$nota->getIdevaluacion()) ?>"><?php echo $nota->getIdpersona() ?></a></td>
      <td><a href="<?php echo url_for('notas/show?idnota='.$nota->getIdnota().'&idpersona='.$nota->getIdpersona().'&idevaluacion='.$nota->getIdevaluacion()) ?>"><?php echo $nota->getIdevaluacion() ?></a></td>
      <td><?php echo $nota->getIdlapso() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('notas/new') ?>">New</a>

<!-- Aquí se define el slot que me devuelve el menú para el usuario ALUM -->

<?php slot('menuSidebarAlumno')
      ?>
      <div class="linkstext">
        <ul>
		<p></p>
		<p></p>
                <br />
		<a href="<?php echo url_for('temas/index') ?>">Ver Temas</a>
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
            <li><a href="personas/inhabilitar">&nbsp;&nbsp;Inhabilitar Alumno</a> </li>
            <li><a href="personas/seccion">&nbsp;&nbsp;Listar Alumnos</a> </li>
            <li><a href="personas/eliminar">&nbsp;&nbsp;Eliminar Alumnos</a> </li>
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