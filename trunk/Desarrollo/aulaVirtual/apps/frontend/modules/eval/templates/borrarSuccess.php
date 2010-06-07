<br />
<br />
<br />
<br />
<h1>Evaluaciones:</h1>
<br />
<br />
<br />

<table border="1" align="center" width="510">
  <thead>
    <tr>
      <th>&nbsp;</th>
      <th>Nombre</th>
      <th>Porcentaje</th>
      <th>Descripción</th>
      <th>Tipo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($evaluacion_list as $evaluacion): ?>
    <tr>
      <td>
      <?php echo link_to('Borrar', 'eval/delete?idevaluacion='.$evaluacion->getIdevaluacion(), array('method' => 'delete', 'confirm' => '¿Está seguro de que desea borrar la Evaluación?')) ?>
      </td>
      <td><?php echo $evaluacion->getNombre() ?></td>
      <td><?php echo $evaluacion->getPorcentaje() ?></td>
      <td><?php echo $evaluacion->getDescripcion() ?></td>
      <td><?php echo $evaluacion->getTipo() ?></td>
    </tr>
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
          <li><a href="">&nbsp;&nbsp;Cargar Notas</a></li>
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