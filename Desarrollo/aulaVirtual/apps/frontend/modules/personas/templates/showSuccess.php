<br /><br /><br />
<table>
  <tbody>
    <tr>
      <th>Idpersona:</th>
      <td><?php echo $persona->getIdpersona() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $persona->getNombre() ?></td>
    </tr>
     <tr>
      <th>Segundo Nombre:</th>
      <td><?php echo $persona->getSegundonombre() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $persona->getApellido() ?></td>
    </tr>
    <tr>
      <th>Segundo Apellido:</th>
      <td><?php echo $persona->getSegundoapellido() ?></td>
    </tr>
    <tr>
      <th>Tipo:</th>
      <td><?php echo $persona->getTipo() ?></td>
    </tr>
    <tr>
      <th>Cuenta:</th>
      <td><?php echo $persona->getCuenta() ?></td>
    </tr>
    <tr>
      <th>Clave:</th>
      <td><?php echo $persona->getClave() ?></td>
    </tr>
    <tr>
      <th>Seccion:</th>
      <td><?php echo $persona->getSeccion() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $persona->getEstado() ?></td>
    </tr>
    <tr>
      <th>Correo:</th>
      <td><?php echo $persona->getCorreo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('personas/edit?idpersona='.$persona->getIdpersona()) ?>" style="text-decoration: underline; color: gray">Edit</a>
&nbsp;
<a href="<?php echo url_for('personas/index') ?>">List</a>

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
           <li><a href="new">&nbsp;&nbsp;Agregar Alumnos</a> </li>
            <li><a href="inhabilitar">&nbsp;&nbsp;Inhabilitar Alumno</a> </li>
            <li><a href="seccion">&nbsp;&nbsp;Listar Alumnos</a> </li>
            <li><a href="eliminar">&nbsp;&nbsp;Eliminar Alumnos</a> </li>
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