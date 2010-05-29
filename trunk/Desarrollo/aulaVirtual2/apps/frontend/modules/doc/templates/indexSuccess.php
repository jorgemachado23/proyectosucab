<h1>Doc List</h1>

<table>
  <thead>
    <tr>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Iddocumento</th>
      <th>Nombre</th>
      <th>Idpersona</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($documento_list as $documento): ?>
    <tr>
      <td><a href="<?php echo url_for('doc/show?created_at='.$documento->getCreatedAt()) ?>"><?php echo $documento->getCreatedAt() ?></a></td>
      <td><?php echo $documento->getUpdatedAt() ?></td>
      <td><?php echo $documento->getIddocumento() ?></td>
      <td><?php echo $documento->getNombre() ?></td>
      <td><?php echo $documento->getIdpersona() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('doc/new') ?>">New</a>
