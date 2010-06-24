
<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<form action="<?php echo url_for('cont_examen/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idpregunta='.$form->getObject()->getIdpregunta().'&idevaluacion='.$form->getObject()->getIdevaluacion() : '')) ?>" method="POST" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="PUT" />
<?php endif; ?>
  <table align="center">
    <tfoot>
      <tr>
        <td colspan="2" align="center">
          <br /><?php echo button_to('Finalizar','cont_examen/index?idevaluacion='.$_SESSION["evaluacion"]) ?>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'cont_examen/delete?idpregunta='.$form->getObject()->getIdpregunta().'&idevaluacion='.$form->getObject()->getIdevaluacion(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Aceptar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
