<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<?php
for ($index = 0; $index < 10; $index++) { ?>


<form action="<?php echo url_for('notas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idnota='.$form->getObject()->getIdnota().'&idpersona='.$form->getObject()->getIdpersona().'&idevaluacion='.$form->getObject()->getIdevaluacion() : '')) ?>" method="POST" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="PUT" />
<?php endif; ?>
<table>
    <tfoot>
      <tr>
        <td colspan="2">
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
<?php }?>
          <input align="" type="submit" value="Save" />
          &nbsp;<a href="<?php echo url_for('notas/index') ?>">Cancel</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'notas/delete?idnota='.$form->getObject()->getIdnota().'&idpersona='.$form->getObject()->getIdpersona().'&idevaluacion='.$form->getObject()->getIdevaluacion(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
</form>
