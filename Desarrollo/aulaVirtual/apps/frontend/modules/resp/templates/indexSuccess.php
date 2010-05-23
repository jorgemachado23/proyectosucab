<h1>Resp List</h1>

<table>
  <thead>
    <tr>
      <th>Idrespuesta</th>
      <th>Respuesta</th>
      <th>Tipo</th>
      <th>Idpregunta</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($respuesta_list as $respuesta): ?>
    <tr>
      <td><a href="<?php echo url_for('resp/show?idrespuesta='.$respuesta->getIdrespuesta().'&idpregunta='.$respuesta->getIdpregunta()) ?>"><?php echo $respuesta->getIdrespuesta() ?></a></td>
      <td><?php echo $respuesta->getRespuesta() ?></td>
      <td><?php echo $respuesta->getTipo() ?></td>
      <td><a href="<?php echo url_for('resp/show?idrespuesta='.$respuesta->getIdrespuesta().'&idpregunta='.$respuesta->getIdpregunta()) ?>"><?php echo $respuesta->getIdpregunta() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('resp/new') ?>">New</a>
