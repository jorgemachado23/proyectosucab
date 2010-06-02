<?php

/**
 * Este archivo contiene el esquema del formulario que ejecutara el crear, modi-
 * ficar y eliminar tema.
 *
 */

?>
<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('temas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idtema='.$form->getObject()->getIdtema() : '')) ?>" method="POST" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="PUT" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
            <br />
          <br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;
          &nbsp;<?php echo button_to('Volver','temas/index') ?>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;
            <?php echo button_to('Borrar','temas/delete?idtema='.$form->getObject()->getIdtema(), 'confirm=¿Está seguro de que desea borrar el Tema?, se eliminarán también todos los comentarios asociados') ?>
          <?php endif; ?>
            &nbsp;
          <input type="submit" value="Aceptar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>