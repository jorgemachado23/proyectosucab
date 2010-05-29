<h1>Lapsos List</h1>

<table>
  <thead>
    <tr>
      <th>Idlapso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($lapso_list as $lapso): ?>
    <tr>
      <td><a href="<?php echo url_for('lapsos/show?idlapso='.$lapso->getIdlapso()) ?>"><?php echo $lapso->getIdlapso() ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('lapsos/new') ?>">New</a>
