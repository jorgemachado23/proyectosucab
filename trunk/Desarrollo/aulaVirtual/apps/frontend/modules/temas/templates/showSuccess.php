<?php
$_SESSION["usuario"];
?>

<br />
<br />
<br />
<h1>Tema: <?php echo $tema->getNombre() ?></h1>
<br />
<br />

<table width="400">
  <tbody>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $tema->getNombre() ?></td>
    </tr>
    <tr></tr>
    <tr>
      <th>Descripción:</th>
      <td><?php echo $tema->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<br />
<br />
<a href="<?php echo url_for('temas/edit?idtema='.$tema->getIdtema()) ?>">Modificar Tema</a>
&nbsp;
<a href="<?php echo url_for('temas/index') ?>">Volver</a>
<br />
<br />
<br />
<br />
<hr />
<br />
<br />
<h1 align="center">Comentarios:</h1>
<br />

        <form id="form1" name="form1" action="" method="POST">
          <table width="477" border="0" align="center">
            <tr>
              <td height="82">Agregar Comentario: </td>
              <td><textarea name="comentario" cols="50" rows="4" id="comentario"></textarea></td>
            </tr>
          </table>
          <div align="center"><br />
              <input type="submit" name="agregar" id="agregar" value="Agregar" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </div>
        </form>
<br />
<br />
<br />
<br />

<?php foreach ($comentarios_list as $comentarios):
    if ($comentarios->getIdtema()== $tema->getIdtema()){
    ?>
<table width="400">
    <tbody>
      <hr />
      <tr><br /></tr>
      <tr style="font-weight: bold"><?php echo $comentarios->getComentario() ?></tr>
      <tr><br /></tr>
      <tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $comentarios->getCreatedAt() ?></tr>
      <tr><br /></tr>
      <tr>
             <?php foreach ($persona_list as $persona):
            if ($persona->getIdpersona()== $comentarios->getIdpersona()){

                ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $persona->getCuenta();

            }endforeach;
            ?>
      </tr>
      <tr><br /></tr>
      <tr><?php echo link_to('Delete', 'temas/deleteComen?idcomentarios='.$comentarios->getIdcomentarios(), array('method' => 'delete', 'confirm' => '¿Está seguro de que desea eliminar el comentario?')) ?></tr>
      <tr><br /></tr>
      <hr />
    </tbody>
</table>
  
    <?php }endforeach; ?>

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
            <li><a href="">&nbsp;&nbsp;Inhabilitar Alumno</a> </li>
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
    	   <li><a href="<?php echo url_for('temas/index') ?>">&nbsp;&nbsp;Ver Foro</a></li>
    	   <li><a href="">&nbsp;&nbsp;Crear un tema</a></li>
           <li><a href="">&nbsp;&nbsp;Borrar Foro</a></li>
      </ul>
      </div>
<?php end_slot(); ?>