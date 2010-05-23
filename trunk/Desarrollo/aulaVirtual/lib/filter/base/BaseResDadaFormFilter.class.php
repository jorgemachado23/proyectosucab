<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * ResDada filter form base class.
 *
 * @package    aulaVirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseResDadaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'respuesta'    => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'respuesta'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('res_dada_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ResDada';
  }

  public function getFields()
  {
    return array(
      'num_pregunta' => 'Number',
      'respuesta'    => 'Number',
      'idnota'       => 'Number',
      'idpersona'    => 'Number',
      'idevaluacion' => 'Number',
    );
  }
}
