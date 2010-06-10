<?php

/**
 * Tema form base class.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseTemaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idtema'      => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInput(),
      'created_at'  => new sfWidgetFormDate(),
      'updated_at'  => new sfWidgetFormDate(),
      'descripcion' => new sfWidgetFormInput(),
      'idpersona'   => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'idtema'      => new sfValidatorPropelChoice(array('model' => 'Tema', 'column' => 'idtema', 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 45)),
      'created_at'  => new sfValidatorDate(),
      'updated_at'  => new sfValidatorDate(array('required' => false)),
      'descripcion' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'idpersona'   => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('tema[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tema';
  }


}
