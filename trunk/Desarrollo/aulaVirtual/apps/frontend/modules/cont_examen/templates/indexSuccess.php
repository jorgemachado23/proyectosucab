<br />
<br />
<br />
<br />
<br />
<h1 align="center">Contenido del examen</h1>


<br /><br />
    <?php
   // echo "<h2 align='center'>".$evaluacion->getIdevaluacion()."</h2>";

    ?>
<br />
<?php
    foreach ($contenido_examen_list as $contenido_examen):
        if($contenido_examen->getIdevaluacion()==$evaluacion->getIdevaluacion()){?>
 <br />
<table>
  <tr>
      <td><a style="text-decoration:none; color:#333; font-weight: bold" href="
            <?php echo url_for('cont_examen/edit?idpregunta='.$contenido_examen->getIdpregunta().'&idevaluacion='.$contenido_examen->getIdevaluacion()) ?>">
              <?php echo $contenido_examen->getPregunta() ?></a></td>
    </tr>
  </table>

  <br />

  <table style="margin-left:30px">
    <?php foreach ($respuesta_list as $respuesta):
        if($respuesta->getIdpregunta()==$contenido_examen->getIdpregunta()){?>
    <tr>




      <td>  <a style="text-decoration:none; color:#666; font-weight: bold" href="
            <?php echo url_for('resp/edit?idrespuesta='.$respuesta->getIdrespuesta().'&idpregunta='.$contenido_examen->getIdpregunta()) ?>">
              <?php echo $respuesta->getRespuesta() ?></a> </td>
      <td>
          &nbsp;-->&nbsp;
      </td>
      <td><?php echo $respuesta->getTipo() ?></td>
    
    </tr>
    <?php }
    endforeach; ?>
    </table>

    <?php }
    endforeach; ?>


  <a href="<?php echo url_for('cont_examen/new') ?>">New</a>

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