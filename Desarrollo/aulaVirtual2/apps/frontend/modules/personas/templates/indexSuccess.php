<?php
$seccion = "A";
?>

<br /><br />
<h1>Lista de Alumnos</h1>
<br /><br />




<table>
  <thead>
    <tr>
      
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Segundonombre</th>
      <th>Segundoapellido</th>
     
      
    </tr>
  </thead>
  <tbody>

    <?php foreach ($persona_list as $persona): ?>
      <?php if ((($persona->getTipo())=="ALUM")&&(($persona->getSeccion())==$seccion)){?>
    <tr>
      <td><a href="<?php echo url_for('personas/show?idpersona='.$persona->getIdpersona()) ?>"><?php echo $persona->getNombre() ?></td>
      <td><?php echo $persona->getApellido() ?></td>
      <td><?php echo $persona->getSegundonombre() ?></td>
      <td><?php echo $persona->getSegundoapellido() ?></td>
    </tr>
    <?php }?>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('personas/new') ?>">New</a>
