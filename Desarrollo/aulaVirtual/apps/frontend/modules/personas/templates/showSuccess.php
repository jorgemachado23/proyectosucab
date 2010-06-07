<?php
/*
 * En este archivo se muestran todos los datos de una persona seleccionada con
 * anterioridad.
 */

?>
<br />
<br />
<br />
<br />
<br />
<h1 align="center">Alumno</h1>
<br />
<br />

<table align="center">
  <tbody>
    <tr>
      <th align="left">Nombre:&nbsp;</th>
      <td><?php echo $persona->getNombre() ?></td>
    </tr>
     <tr>
      <th align="left">Segundo Nombre:&nbsp;</th>
      <td><?php echo $persona->getSegundonombre() ?></td>
    </tr>
    <tr>
      <th align="left">Apellido:&nbsp;</th>
      <td><?php echo $persona->getApellido() ?></td>
    </tr>
    <tr>
      <th align="left">Segundo Apellido:&nbsp;</th>
      <td><?php echo $persona->getSegundoapellido() ?></td>
    </tr>
    <tr>
      <th align="left">Tipo:&nbsp;</th>
      <td><?php echo $persona->getTipo() ?></td>
    </tr>
    <tr>
      <th align="left">Cuenta:&nbsp;</th>
      <td><?php echo $persona->getCuenta() ?></td>
    </tr>
    <tr>
      <th align="left">Clave:&nbsp;</th>
      <td><?php echo $persona->getClave() ?></td>
    </tr>
    <tr>
      <th align="left">Seccion:&nbsp;</th>
      <td><?php echo $persona->getSeccion() ?></td>
    </tr>
    <tr>
      <th align="left">Estado:&nbsp;</th>
      <td><?php echo $persona->getEstado() ?></td>
    </tr>
    <tr>
      <th align="left">Correo:&nbsp;</th>
      <td><?php echo $persona->getCorreo() ?></td>
    </tr>
  </tbody>
</table>

<hr />
<br />

<table>
  <tbody>
    <tr>
      <th align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
      <td>&nbsp;<?php echo button_to('Borrar', 'personas/delete?idpersona='.$persona->getIdpersona(), 'confirm=¿Está seguro de que desea borrar este alumno?') ?>
          &nbsp;<?php echo button_to('Editar', 'personas/edit?idpersona='.$persona->getIdpersona()) ?>
          &nbsp;<a href="<?php echo url_for('personas/index') ?>">Listar</a></td>
    </tr>
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