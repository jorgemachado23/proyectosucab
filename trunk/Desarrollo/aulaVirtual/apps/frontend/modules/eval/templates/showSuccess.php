<table>
  <tbody>
    <tr>
      <th>Idevaluacion:</th>
      <td><?php echo $evaluacion->getIdevaluacion() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $evaluacion->getNombre() ?></td>
    </tr>
    <tr>
      <th>Porcentaje:</th>
      <td><?php echo $evaluacion->getPorcentaje() ?></td>
    </tr>
    <tr>
      <th>Tipo:</th>
      <td><?php echo $evaluacion->getTipo() ?></td>
    </tr>
    <tr>
      <th>Fecha fin:</th>
      <td><?php echo $evaluacion->getFechaFin() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $evaluacion->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $evaluacion->getEstado() ?></td>
    </tr>
    <tr>
      <th>Duracion:</th>
      <td><?php echo $evaluacion->getDuracion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('eval/edit?idevaluacion='.$evaluacion->getIdevaluacion()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('eval/index') ?>">List</a>

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
            <li><a href="personas/seccion">&nbsp;&nbsp;Listar Alumnos</a> </li>
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