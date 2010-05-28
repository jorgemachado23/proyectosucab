<?php
$_SESSION["usuario"];

 foreach ($persona_list as $persona):
            if ($persona->getCuenta() == $_SESSION["usuario"] ){
                $id = $persona->getIdpersona();
                $_SESSION["id"]=$id;
}endforeach;
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
    <a href="<?php echo url_for('temas/edit?idtema='.$tema->getIdtema()) ?>">Modificar Tema</a><?php
    }?>
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
        <form id="form1" name="form1" action="<?php echo url_for('comentario/new') ?>" method="POST">
          <div align="center"><br />
              <input type="submit" name="agregar" id="agregar" value="Agregar comentario" style="font-family:Verdana, Arial, Helvetica, sans-serif" />
          </div>
        </form>
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
      <tr><?php
            if ($_SESSION["privilegio"]=="ADMIN"){
                 echo link_to('Borrar', 'temas/deleteComen?idcomentarios='.$comentarios->getIdcomentarios(), array('method' => 'delete', 'confirm' => '¿Está seguro de que desea eliminar el comentario?')) ?>
          <?php }
          else{
                if($comentarios->getIdpersona()==$id){
                    echo link_to('Borrar', 'temas/deleteComen?idcomentarios='.$comentarios->getIdcomentarios(), array('method' => 'delete', 'confirm' => '¿Está seguro de que desea eliminar el comentario?')) ?>
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
    	   <li><a href="<?php echo url_for('temas/new') ?>">&nbsp;&nbsp;Crear un tema</a></li>
           <li><a href="<?php echo url_for('temas/deleteForo') ?>">&nbsp;&nbsp;Vaciar Foro</a></li>
      </ul>
      </div>
<?php end_slot(); ?>