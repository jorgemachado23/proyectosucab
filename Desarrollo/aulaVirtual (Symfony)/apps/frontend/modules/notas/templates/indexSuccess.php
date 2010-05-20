<h1>Notas List</h1>

<table>
  <thead>
    <tr>
      <th>Idnota</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Nota</th>
      <th>Idpersona</th>
      <th>Idevaluacion</th>
      <th>Idlapso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nota_list as $nota): ?>
    <tr>
      <td><a href="<?php echo url_for('notas/show?idnota='.$nota->getIdnota().'&idpersona='.$nota->getIdpersona().'&idevaluacion='.$nota->getIdevaluacion()) ?>"><?php echo $nota->getIdnota() ?></a></td>
      <td><?php echo $nota->getCreatedAt() ?></td>
      <td><?php echo $nota->getUpdatedAt() ?></td>
      <td><?php echo $nota->getNota() ?></td>
      <td><a href="<?php echo url_for('notas/show?idnota='.$nota->getIdnota().'&idpersona='.$nota->getIdpersona().'&idevaluacion='.$nota->getIdevaluacion()) ?>"><?php echo $nota->getIdpersona() ?></a></td>
      <td><a href="<?php echo url_for('notas/show?idnota='.$nota->getIdnota().'&idpersona='.$nota->getIdpersona().'&idevaluacion='.$nota->getIdevaluacion()) ?>"><?php echo $nota->getIdevaluacion() ?></a></td>
      <td><?php echo $nota->getIdlapso() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('notas/new') ?>">New</a>
