<?php

/**
 * ResDada form base class.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseResDadaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'num_pregunta' => new sfWidgetFormInputHidden(),
      'respuesta'    => new sfWidgetFormInput(),
      'idnota'       => new sfWidgetFormInputHidden(),
      'idpersona'    => new sfWidgetFormInputHidden(),
      'idevaluacion' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'num_pregunta' => new sfValidatorPropelChoice(array('model' => 'ResDada', 'column' => 'num_pregunta', 'required' => false)),
      'respuesta'    => new sfValidatorInteger(),
      'idnota'       => new sfValidatorPropelChoice(array('model' => 'ResDada', 'column' => 'idnota', 'required' => false)),
      'idpersona'    => new sfValidatorPropelChoice(array('model' => 'ResDada', 'column' => 'idpersona', 'required' => false)),
      'idevaluacion' => new sfValidatorPropelChoice(array('model' => 'ResDada', 'column' => 'idevaluacion', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('res_dada[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResDada';
  }


}
