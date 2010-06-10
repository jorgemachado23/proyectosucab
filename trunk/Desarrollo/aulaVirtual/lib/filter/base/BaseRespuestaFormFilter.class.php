<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Respuesta filter form base class.
 *
 * @package    aulaVirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseRespuestaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'respuesta'   => new sfWidgetFormFilterInput(),
      'tipo'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'respuesta'   => new sfValidatorPass(array('required' => false)),
      'tipo'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('respuesta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Respuesta';
  }

  public function getFields()
  {
    return array(
      'idrespuesta' => 'Number',
      'respuesta'   => 'Text',
      'tipo'        => 'Text',
      'idpregunta'  => 'Number',
    );
  }
}
