<?php

/**
 * Lapso form base class.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseLapsoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'idlapso' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'idlapso' => new sfValidatorPropelChoice(array('model' => 'Lapso', 'column' => 'idlapso', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('lapso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lapso';
  }


}
