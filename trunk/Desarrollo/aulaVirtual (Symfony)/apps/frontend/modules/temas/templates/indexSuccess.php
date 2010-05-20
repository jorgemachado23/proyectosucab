<h1>Temas List</h1>

<table>
  <thead>
    <tr>
      <th>Idtema</th>
      <th>Nombre</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Descripcion</th>
      <th>Idpersona</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tema_list as $tema): ?>
    <tr>
      <td><a href="<?php echo url_for('temas/show?idtema='.$tema->getIdtema()) ?>"><?php echo $tema->getIdtema() ?></a></td>
      <td><?php echo $tema->getNombre() ?></td>
      <td><?php echo $tema->getCreatedAt() ?></td>
      <td><?php echo $tema->getUpdatedAt() ?></td>
      <td><?php echo $tema->getDescripcion() ?></td>
      <td><?php echo $tema->getIdpersona() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('temas/new') ?>">New</a>
