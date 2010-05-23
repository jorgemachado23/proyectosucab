<?php

/**
 * Persona form base class.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 12815 2008-11-09 10:43:58Z fabien $
 */
class BasePersonaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idpersona'       => new sfWidgetFormInputHidden(),
      'nombre'          => new sfWidgetFormInput(),
      'apellido'        => new sfWidgetFormInput(),
      'tipo'            => new sfWidgetFormInput(),
      'cuenta'          => new sfWidgetFormInput(),
      'clave'           => new sfWidgetFormInput(),
      'seccion'         => new sfWidgetFormInput(),
      'estado'          => new sfWidgetFormInput(),
      'correo'          => new sfWidgetFormInput(),
      'segundonombre'   => new sfWidgetFormInput(),
      'segundoapellido' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'idpersona'       => new sfValidatorPropelChoice(array('model' => 'Persona', 'column' => 'idpersona', 'required' => false)),
      'nombre'          => new sfValidatorString(array('max_length' => 45)),
      'apellido'        => new sfValidatorString(array('max_length' => 45)),
      'tipo'            => new sfValidatorString(array('max_length' => 45)),
      'cuenta'          => new sfValidatorString(array('max_length' => 45)),
      'clave'           => new sfValidatorString(array('max_length' => 45)),
      'seccion'         => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'estado'          => new sfValidatorString(array('max_length' => 45)),
      'correo'          => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'segundonombre'   => new sfValidatorString(array('max_length' => 45)),
      'segundoapellido' => new sfValidatorString(array('max_length' => 45)),
    ));

    $this->widgetSchema->setNameFormat('persona[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }


}
