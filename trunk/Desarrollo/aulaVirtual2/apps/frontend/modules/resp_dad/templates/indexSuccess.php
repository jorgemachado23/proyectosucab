<h1>Resp dad List</h1>

<table>
  <thead>
    <tr>
      <th>Num pregunta</th>
      <th>Respuesta</th>
      <th>Idnota</th>
      <th>Idpersona</th>
      <th>Idevaluacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($res_dada_list as $res_dada): ?>
    <tr>
      <td><a href="<?php echo url_for('resp_dad/show?num_pregunta='.$res_dada->getNumPregunta().'&idnota='.$res_dada->getIdnota().'&idpersona='.$res_dada->getIdpersona().'&idevaluacion='.$res_dada->getIdevaluacion()) ?>"><?php echo $res_dada->getNumPregunta() ?></a></td>
      <td><?php echo $res_dada->getRespuesta() ?></td>
      <td><a href="<?php echo url_for('resp_dad/show?num_pregunta='.$res_dada->getNumPregunta().'&idnota='.$res_dada->getIdnota().'&idpersona='.$res_dada->getIdpersona().'&idevaluacion='.$res_dada->getIdevaluacion()) ?>"><?php echo $res_dada->getIdnota() ?></a></td>
      <td><a href="<?php echo url_for('resp_dad/show?num_pregunta='.$res_dada->getNumPregunta().'&idnota='.$res_dada->getIdnota().'&idpersona='.$res_dada->getIdpersona().'&idevaluacion='.$res_dada->getIdevaluacion()) ?>"><?php echo $res_dada->getIdpersona() ?></a></td>
      <td><a href="<?php echo url_for('resp_dad/show?num_pregunta='.$res_dada->getNumPregunta().'&idnota='.$res_dada->getIdnota().'&idpersona='.$res_dada->getIdpersona().'&idevaluacion='.$res_dada->getIdevaluacion()) ?>"><?php echo $res_dada->getIdevaluacion() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('resp_dad/new') ?>">New</a>
