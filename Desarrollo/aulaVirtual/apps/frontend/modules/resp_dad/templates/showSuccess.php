<table>
  <tbody>
    <tr>
      <th>Num pregunta:</th>
      <td><?php echo $res_dada->getNumPregunta() ?></td>
    </tr>
    <tr>
      <th>Respuesta:</th>
      <td><?php echo $res_dada->getRespuesta() ?></td>
    </tr>
    <tr>
      <th>Idnota:</th>
      <td><?php echo $res_dada->getIdnota() ?></td>
    </tr>
    <tr>
      <th>Idpersona:</th>
      <td><?php echo $res_dada->getIdpersona() ?></td>
    </tr>
    <tr>
      <th>Idevaluacion:</th>
      <td><?php echo $res_dada->getIdevaluacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('resp_dad/edit?num_pregunta='.$res_dada->getNumPregunta().'&idnota='.$res_dada->getIdnota().'&idpersona='.$res_dada->getIdpersona().'&idevaluacion='.$res_dada->getIdevaluacion()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('resp_dad/index') ?>">List</a>
