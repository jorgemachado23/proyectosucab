<table>
  <tbody>
    <tr>
      <th>Idcomentarios:</th>
      <td><?php echo $comentarios->getIdcomentarios() ?></td>
    </tr>
    <tr>
      <th>Comentario:</th>
      <td><?php echo $comentarios->getComentario() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $comentarios->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $comentarios->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Idpersona:</th>
      <td><?php echo $comentarios->getIdpersona() ?></td>
    </tr>
    <tr>
      <th>Idtema:</th>
      <td><?php echo $comentarios->getIdtema() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('comentario/edit?idcomentarios='.$comentarios->getIdcomentarios()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('comentario/index') ?>">List</a>
