<table>
  <tbody>
    <tr>
      <th>Idlapso:</th>
      <td><?php echo $lapso->getIdlapso() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('lapsos/edit?idlapso='.$lapso->getIdlapso()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('lapsos/index') ?>">List</a>
