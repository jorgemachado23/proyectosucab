<h1>Cont examen List</h1>

<table>
  <thead>
    <tr>
      <th>Idpregunta</th>
      <th>Pregunta</th>
      <th>Idevaluacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($contenido_examen_list as $contenido_examen): ?>
    <tr>
      <td><a href="<?php echo url_for('cont_examen/show?idpregunta='.$contenido_examen->getIdpregunta().'&idevaluacion='.$contenido_examen->getIdevaluacion()) ?>"><?php echo $contenido_examen->getIdpregunta() ?></a></td>
      <td><?php echo $contenido_examen->getPregunta() ?></td>
      <td><a href="<?php echo url_for('cont_examen/show?idpregunta='.$contenido_examen->getIdpregunta().'&idevaluacion='.$contenido_examen->getIdevaluacion()) ?>"><?php echo $contenido_examen->getIdevaluacion() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('cont_examen/new') ?>">New</a>
