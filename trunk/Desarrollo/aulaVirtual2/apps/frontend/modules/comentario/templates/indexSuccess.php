<h1>Comentario List</h1>

<table>
  <thead>
    <tr>
      <th>Idcomentarios</th>
      <th>Comentario</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Idpersona</th>
      <th>Idtema</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($comentarios_list as $comentarios): ?>
    <tr>
      <td><a href="<?php echo url_for('comentario/show?idcomentarios='.$comentarios->getIdcomentarios()) ?>"><?php echo $comentarios->getIdcomentarios() ?></a></td>
      <td><?php echo $comentarios->getComentario() ?></td>
      <td><?php echo $comentarios->getCreatedAt() ?></td>
      <td><?php echo $comentarios->getUpdatedAt() ?></td>
      <td><?php echo $comentarios->getIdpersona() ?></td>
      <td><?php echo $comentarios->getIdtema() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('comentario/new') ?>">New</a>
