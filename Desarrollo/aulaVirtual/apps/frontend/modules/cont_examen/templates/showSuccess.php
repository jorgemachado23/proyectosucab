<table>
  <tbody>
    <tr>
      <th>Idpregunta:</th>
      <td><?php echo $contenido_examen->getIdpregunta() ?></td>
    </tr>
    <tr>
      <th>Pregunta:</th>
      <td><?php echo $contenido_examen->getPregunta() ?></td>
    </tr>
    <tr>
      <th>Idevaluacion:</th>
      <td><?php echo $contenido_examen->getIdevaluacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('cont_examen/edit?idpregunta='.$contenido_examen->getIdpregunta().'&idevaluacion='.$contenido_examen->getIdevaluacion()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('cont_examen/index') ?>">List</a>
