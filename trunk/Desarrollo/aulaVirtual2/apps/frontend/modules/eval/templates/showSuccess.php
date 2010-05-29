<table>
  <tbody>
    <tr>
      <th>Idevaluacion:</th>
      <td><?php echo $evaluacion->getIdevaluacion() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $evaluacion->getNombre() ?></td>
    </tr>
    <tr>
      <th>Porcentaje:</th>
      <td><?php echo $evaluacion->getPorcentaje() ?></td>
    </tr>
    <tr>
      <th>Tipo:</th>
      <td><?php echo $evaluacion->getTipo() ?></td>
    </tr>
    <tr>
      <th>Fecha fin:</th>
      <td><?php echo $evaluacion->getFechaFin() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $evaluacion->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $evaluacion->getEstado() ?></td>
    </tr>
    <tr>
      <th>Duracion:</th>
      <td><?php echo $evaluacion->getDuracion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('eval/edit?idevaluacion='.$evaluacion->getIdevaluacion()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('eval/index') ?>">List</a>
