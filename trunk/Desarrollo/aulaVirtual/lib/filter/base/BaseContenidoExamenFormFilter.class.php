<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * ContenidoExamen filter form base class.
 *
 * @package    aulaVirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseContenidoExamenFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'pregunta'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'pregunta'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('contenido_examen_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContenidoExamen';
  }

  public function getFields()
  {
    return array(
      'idpregunta'   => 'Number',
      'pregunta'     => 'Text',
      'idevaluacion' => 'Number',
    );
  }
}
