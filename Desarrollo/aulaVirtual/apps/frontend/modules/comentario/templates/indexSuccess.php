<h1>Comentario List</h1>

<table>
  <thead>
    <tr>
      <th>Idcomentarios</th>
      <th>Comentario</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Idpersona</th>
      <th>Idtema</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($comentarios_list as $comentarios): ?>
    <tr>
      <td><a href="<?php echo url_for('comentario/show?idcomentarios='.$comentarios->getIdcomentarios()) ?>"><?php echo $comentarios->getIdcomentarios() ?></a></td>
      <td><?php echo $comentarios->getComentario() ?></td>
      <td><?php echo $comentarios->getCreatedAt() ?></td>
      <td><?php echo $comentarios->getUpdatedAt() ?></td>
      <td><?php echo $comentarios->getIdpersona() ?></td>
      <td><?php echo $comentarios->getIdtema() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('comentario/new') ?>">New</a>

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