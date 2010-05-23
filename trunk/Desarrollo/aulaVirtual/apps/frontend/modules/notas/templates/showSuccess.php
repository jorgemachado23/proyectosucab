<table>
  <tbody>
    <tr>
      <th>Idnota:</th>
      <td><?php echo $nota->getIdnota() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $nota->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $nota->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Nota:</th>
      <td><?php echo $nota->getNota() ?></td>
    </tr>
    <tr>
      <th>Idpersona:</th>
      <td><?php echo $nota->getIdpersona() ?></td>
    </tr>
    <tr>
      <th>Idevaluacion:</th>
      <td><?php echo $nota->getIdevaluacion() ?></td>
    </tr>
    <tr>
      <th>Idlapso:</th>
      <td><?php echo $nota->getIdlapso() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('notas/edit?idnota='.$nota->getIdnota().'&idpersona='.$nota->getIdpersona().'&idevaluacion='.$nota->getIdevaluacion()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('notas/index') ?>">List</a>
