<h1>Eval List</h1>

<table>
  <thead>
    <tr>
      <th>Idevaluacion</th>
      <th>Nombre</th>
      <th>Porcentaje</th>
      <th>Tipo</th>
      <th>Fecha fin</th>
      <th>Descripcion</th>
      <th>Estado</th>
      <th>Duracion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($evaluacion_list as $evaluacion): ?>
    <tr>
      <td><a href="<?php echo url_for('eval/show?idevaluacion='.$evaluacion->getIdevaluacion()) ?>"><?php echo $evaluacion->getIdevaluacion() ?></a></td>
      <td><?php echo $evaluacion->getNombre() ?></td>
      <td><?php echo $evaluacion->getPorcentaje() ?></td>
      <td><?php echo $evaluacion->getTipo() ?></td>
      <td><?php echo $evaluacion->getFechaFin() ?></td>
      <td><?php echo $evaluacion->getDescripcion() ?></td>
      <td><?php echo $evaluacion->getEstado() ?></td>
      <td><?php echo $evaluacion->getDuracion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('eval/new') ?>">New</a>
