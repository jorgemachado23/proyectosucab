<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('notas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idnota='.$form->getObject()->getIdnota().'&idpersona='.$form->getObject()->getIdpersona().'&idevaluacion='.$form->getObject()->getIdevaluacion() : '')) ?>" method="POST" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="PUT" />
<?php endif; ?>
<table align="center">
    <tfoot>
      <tr>
        <td colspan="2">   
            <input align="" type="submit" value="Save" />
          &nbsp;<?php echo button_to('Volver','notas/seccion');?>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'notas/delete?idnota='.$form->getObject()->getIdnota().'&idpersona='.$form->getObject()->getIdpersona().'&idevaluacion='.$form->getObject()->getIdevaluacion(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>     
</form>
