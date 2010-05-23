<?php

/**
 * Documento form base class.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BaseDocumentoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'created_at'  => new sfWidgetFormInputHidden(),
      'updated_at'  => new sfWidgetFormDate(),
      'iddocumento' => new sfWidgetFormInput(),
      'nombre'      => new sfWidgetFormInput(),
      'idpersona'   => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'created_at'  => new sfValidatorPropelChoice(array('model' => 'Documento', 'column' => 'created_at', 'required' => false)),
      'updated_at'  => new sfValidatorDate(array('required' => false)),
      'iddocumento' => new sfValidatorInteger(),
      'nombre'      => new sfValidatorString(array('max_length' => 45)),
      'idpersona'   => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('documento[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Documento';
  }


}
