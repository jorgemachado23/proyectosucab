<?php

/**
 * Evaluacion form base class.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseEvaluacionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idevaluacion' => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormInput(),
      'porcentaje'   => new sfWidgetFormInput(),
      'tipo'         => new sfWidgetFormInput(),
      'fecha_fin'    => new sfWidgetFormDate(),
      'descripcion'  => new sfWidgetFormInput(),
      'estado'       => new sfWidgetFormInput(),
      'duracion'     => new sfWidgetFormInput(),
      'idlapso'      => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'idevaluacion' => new sfValidatorPropelChoice(array('model' => 'Evaluacion', 'column' => 'idevaluacion', 'required' => false)),
      'nombre'       => new sfValidatorString(array('max_length' => 45)),
      'porcentaje'   => new sfValidatorInteger(),
      'tipo'         => new sfValidatorString(array('max_length' => 45)),
      'fecha_fin'    => new sfValidatorDate(array('required' => false)),
      'descripcion'  => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'estado'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'duracion'     => new sfValidatorInteger(array('required' => false)),
      'idlapso'      => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('evaluacion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evaluacion';
  }


}
