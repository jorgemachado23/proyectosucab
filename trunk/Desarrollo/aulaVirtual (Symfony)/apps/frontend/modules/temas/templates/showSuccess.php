<table>
  <tbody>
    <tr>
      <th>Idtema:</th>
      <td><?php echo $tema->getIdtema() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $tema->getNombre() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $tema->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $tema->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $tema->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Idpersona:</th>
      <td><?php echo $tema->getIdpersona() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('temas/edit?idtema='.$tema->getIdtema()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('temas/index') ?>">List</a>
