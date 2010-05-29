<?php 

if ($_SESSION["privilegio"]=="ADMIN"){
    
    ?>
    <br />
    <br />
    <br />
    <br />
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenid@ al sistema de Aula Virtual SAVI, éste sistema está basado en<br /><br />
    la idea de hacer que el cálculo de notas y elaboración de exámenes resulte más <br /><br />
    eficiente y útil, e incluso divertido. Después de todo, SAVI tiene:<br /><br /><br /><br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Un foro en el que podrá crear temas de discusión para sus estudiantes, el<br /><br />
    cuál los ayudará a solventar dudas que puedan aparecer incluso después de<br /><br />
    varias clases, haciendo más divertido el estudio y permitiéndole a usted <br /><br />
    ayudarlos aún estando fuera del aula de clase.<br /><br /><br /><br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Módulo para la elaboración de exámenes virtuales, los cuáles se basaran<br /><br />
    en preguntas de selección, permitiéndole mantener la atención de sus<br /><br />
    estudiantes en el estudio de la materia ya que al realizarlos en casa les brinda<br /><br />
    una sensación de tranquilidad y seguridad al responderlos siendo actividades<br /><br />
    similares a las realizadas en clase.<br /><br /><br /><br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Además de lo anterior y de gran importancia, es que SAVI le permitirá <br /><br />
    llevar un control de sus estudiantes y de las notas de cada una de las eva-<br /><br />
    luaciones que haya realizado a través de este sistema o en el aula de clase,<br /><br />
    ahorrandole tiempo y evitando posibles errores que puedan ocurrir en el<br /><br />
    traspaso de las mismas debido a la gran cantidad de estudiantes que usted<br /><br />
    lleva manualmente.<br /><br /><br /><br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disfrute de SAVI, cualquier información o duda debe consultar con<br /><br />
    los administradores del sistema.
    </p> <?php

}
    else{
        
        ?> <br /><br /><br /><br /><br /><br />
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenid@ amiguit@ al sistema de Aula Virtual SAVI, esperamos que dis-<br /><br /><br />
        frutes de todos los servicios que te ofrecemos. Cualquier duda o información <br /><br /><br />
        adicional que necesites, puedes acudir al módulo de ayuda, donde encontrarás  <br /><br /><br />
        preguntas frecuentes sobre el manejo del sistema.<br /><br /><br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recuerda repasar todos los días la materia vista en clase. Que tengas<br /><br /><br />
        un lindo día.</p> <?php
        
} ?>

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
           <li><a href="">&nbsp;&nbsp;Borrar Foro</a></li>
      </ul>
      </div>
<?php end_slot(); ?>