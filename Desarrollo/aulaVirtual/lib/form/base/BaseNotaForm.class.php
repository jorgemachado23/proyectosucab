<?php

/**
 * Nota form base class.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseNotaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idnota'       => new sfWidgetFormInputHidden(),
      'created_at'   => new sfWidgetFormDate(),
      'updated_at'   => new sfWidgetFormDate(),
      'nota'         => new sfWidgetFormInput(),
      'idpersona'    => new sfWidgetFormInput(),
      'idevaluacion' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'idnota'       => new sfValidatorPropelChoice(array('model' => 'Nota', 'column' => 'idnota', 'required' => false)),
      'created_at'   => new sfValidatorDate(),
      'updated_at'   => new sfValidatorDate(array('required' => false)),
      'nota'         => new sfValidatorString(array('max_length' => 45)),
      'idpersona'    => new sfValidatorInteger(),
      'idevaluacion' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('nota[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Nota';
  }


}
