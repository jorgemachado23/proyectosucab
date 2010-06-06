<?php

/**
 * Nota form base class.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
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
      'idpersona'    => new sfWidgetFormInputHidden(),
      'idevaluacion' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idnota'       => new sfValidatorPropelChoice(array('model' => 'Nota', 'column' => 'idnota', 'required' => false)),
      'created_at'   => new sfValidatorDate(),
      'updated_at'   => new sfValidatorDate(array('required' => false)),
      'nota'         => new sfValidatorInteger(array('required' => false)),
      'idpersona'    => new sfValidatorPropelChoice(array('model' => 'Nota', 'column' => 'idpersona', 'required' => false)),
      'idevaluacion' => new sfValidatorPropelChoice(array('model' => 'Nota', 'column' => 'idevaluacion', 'required' => false)),
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
