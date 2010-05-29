<table>
  <tbody>
    <tr>
      <th>Created at:</th>
      <td><?php echo $documento->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $documento->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Iddocumento:</th>
      <td><?php echo $documento->getIddocumento() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $documento->getNombre() ?></td>
    </tr>
    <tr>
      <th>Idpersona:</th>
      <td><?php echo $documento->getIdpersona() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('doc/edit?created_at='.$documento->getCreatedAt()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('doc/index') ?>">List</a>
