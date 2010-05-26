<br /><br /><br />
<table>
  <tbody>
    <tr>
      <th>Idpersona:</th>
      <td><?php echo $persona->getIdpersona() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $persona->getNombre() ?></td>
    </tr>
     <tr>
      <th>Segundo Nombre:</th>
      <td><?php echo $persona->getSegundonombre() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $persona->getApellido() ?></td>
    </tr>
    <tr>
      <th>Segundo Apellido:</th>
      <td><?php echo $persona->getSegundoapellido() ?></td>
    </tr>
    <tr>
      <th>Tipo:</th>
      <td><?php echo $persona->getTipo() ?></td>
    </tr>
    <tr>
      <th>Cuenta:</th>
      <td><?php echo $persona->getCuenta() ?></td>
    </tr>
    <tr>
      <th>Clave:</th>
      <td><?php echo $persona->getClave() ?></td>
    </tr>
    <tr>
      <th>Seccion:</th>
      <td><?php echo $persona->getSeccion() ?></td>
    </tr>
    <tr>
      <th>Estado:</th>
      <td><?php echo $persona->getEstado() ?></td>
    </tr>
    <tr>
      <th>Correo:</th>
      <td><?php echo $persona->getCorreo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('personas/edit?idpersona='.$persona->getIdpersona()) ?>" style="text-decoration: underline; color: gray">Edit</a>
&nbsp;
<a href="<?php echo url_for('personas/index') ?>">List</a>
