<?php

/**
 * Respuesta form base class.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseRespuestaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idrespuesta' => new sfWidgetFormInputHidden(),
      'respuesta'   => new sfWidgetFormInput(),
      'tipo'        => new sfWidgetFormInput(),
      'idpregunta'  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idrespuesta' => new sfValidatorPropelChoice(array('model' => 'Respuesta', 'column' => 'idrespuesta', 'required' => false)),
      'respuesta'   => new sfValidatorString(array('max_length' => 100)),
      'tipo'        => new sfValidatorString(array('max_length' => 45)),
      'idpregunta'  => new sfValidatorPropelChoice(array('model' => 'Respuesta', 'column' => 'idpregunta', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('respuesta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Respuesta';
  }


}
