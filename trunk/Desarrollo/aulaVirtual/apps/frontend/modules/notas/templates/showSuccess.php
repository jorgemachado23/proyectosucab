<table>
  <tbody>
    <tr>
      <th>Idnota:</th>
      <td><?php echo $nota->getIdnota() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $nota->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $nota->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Nota:</th>
      <td><?php echo $nota->getNota() ?></td>
    </tr>
    <tr>
      <th>Idpersona:</th>
      <td><?php echo $nota->getIdpersona() ?></td>
    </tr>
    <tr>
      <th>Idevaluacion:</th>
      <td><?php echo $nota->getIdevaluacion() ?></td>
    </tr>
    <tr>
      <th>Idlapso:</th>
      <td><?php echo $nota->getIdlapso() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('notas/edit?idnota='.$nota->getIdnota().'&idpersona='.$nota->getIdpersona().'&idevaluacion='.$nota->getIdevaluacion()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('notas/index') ?>">List</a>

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