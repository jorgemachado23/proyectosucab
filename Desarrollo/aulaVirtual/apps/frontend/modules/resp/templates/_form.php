
<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>
<?php
echo $_SESSION["pregunta"];
$preg = $_SESSION["pregunta"];
$eval = $_SESSION["evaluacion"];
echo "-".$eval;
?>

<form action="<?php echo url_for('resp/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idrespuesta='.$form->getObject()->getIdrespuesta().'&idpregunta='.$form->getObject()->getIdpregunta() : '')) ?>" method="POST" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="PUT" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php
          $_SESSION["eval2"]=$eval;
          echo url_for('cont_examen/new?idevaluacion='.$eval) ?>">Finalizar</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'resp/delete?idrespuesta='.$form->getObject()->getIdrespuesta().'&idpregunta='.$form->getObject()->getIdpregunta(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
