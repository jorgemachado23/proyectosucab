<br /><br /><br />
<form id="form1" name="form1" method="post" action="inhabilitar2">

<table>

  <tbody>

    <tr>
        <td>
           <select name="inhabilitarA" id="inhabilitarA">
               <?php
               $persona_list = PersonaPeer::getActiveEstudiantes();
               foreach ($persona_list as $persona):
                   if($persona->getTipo()=="ALUM"){
                   echo "<option value=".$persona->getIdpersona().">".$persona->getNombre()."</option>";
                   }
               endforeach;

               ?>
               
            </select>

            
        </td>
    </tr>
    <tr>
        <td>
          <input type="submit" name="button" id="button" value="Enviar" />
        </td>

    </tr>

  </tbody>
</table>

</form>

<?php

slot('menuSidebarAlumno')
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