<table>
  <tbody>
    <tr>
      <th>Idrespuesta:</th>
      <td><?php echo $respuesta->getIdrespuesta() ?></td>
    </tr>
    <tr>
      <th>Respuesta:</th>
      <td><?php echo $respuesta->getRespuesta() ?></td>
    </tr>
    <tr>
      <th>Tipo:</th>
      <td><?php echo $respuesta->getTipo() ?></td>
    </tr>
    <tr>
      <th>Idpregunta:</th>
      <td><?php echo $respuesta->getIdpregunta() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('resp/edit?idrespuesta='.$respuesta->getIdrespuesta().'&idpregunta='.$respuesta->getIdpregunta()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('resp/index') ?>">List</a>
