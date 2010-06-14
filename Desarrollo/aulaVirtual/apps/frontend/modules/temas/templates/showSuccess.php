<?php
$_SESSION["usuario"];

 foreach ($persona_list as $persona):
            if ($persona->getCuenta() == $_SESSION["usuario"] ){
                $id = $persona->getIdpersona();
                $_SESSION["id"]=$id;
}endforeach;

/**
 *
 * En este archivo se muestra la informacion referente a un tema, el cual puede
 * ser modificado. Ademas se muestran todos los comentarios asociados a el.
 */
?>

<br />
<br />
<br />
<br />
<br />
<br />
<h1 align="center">Tema: <?php echo $tema->getNombre() ?></h1>
<br />
<br />

<table width="400">
  <tbody>
    <tr>
      <td>Nombre: <?php echo $tema->getNombre() ?></td>
    </tr>
    <tr></tr>
    <tr>
      <td>Descripción: <?php echo $tema->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<?php $_SESSION["idtema"]=$tema->getIdtema();  ?>

<br />
<br />
    <?php if ($_SESSION["privilegio"]=="ADMIN"){
    ?>
    <?php echo button_to('Modificar','temas/edit?idtema='.$tema->getIdtema()) ?><?php
    }?>
&nbsp;
<?php echo button_to('Volver','temas/index') ?>
<br />
<br />
<br />
<br />
<hr />
<br />
<br />
<h1 align="center">Comentarios</h1>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
<?php echo button_to('Agregar Comentario', 'comentario/new?idtema='.$tema->getIdtema()) ?>

<br />
<br />
<br />
<br />

<?php foreach ($comentarios_list as $comentarios):
    if ($comentarios->getIdtema()== $tema->getIdtema()){
    ?>
<table width="500">
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
      <tr align="center"><?php
            if ($_SESSION["privilegio"]=="ADMIN"){
                 echo button_to('Borrar', 'temas/deleteComen?idcomentarios='.$comentarios->getIdcomentarios(), 'confirm=¿Está seguro de que desea borrar el comentario?')  ?>
        <?php }
          else{
                if($comentarios->getIdpersona()==$id){
                 echo button_to('Borrar', 'temas/deleteComen?idcomentarios='.$comentarios->getIdcomentarios(), 'confirm=¿Está seguro de que desea borrar el comentario?')  ?>
           <?php     }
            }?>
      </tr>
      <tr><br /></tr>
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