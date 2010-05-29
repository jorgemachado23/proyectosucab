<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Evaluacion filter form base class.
 *
 * @package    aulaVirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseEvaluacionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'       => new sfWidgetFormFilterInput(),
      'porcentaje'   => new sfWidgetFormFilterInput(),
      'tipo'         => new sfWidgetFormFilterInput(),
      'fecha_fin'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'descripcion'  => new sfWidgetFormFilterInput(),
      'estado'       => new sfWidgetFormFilterInput(),
      'duracion'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'porcentaje'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipo'         => new sfValidatorPass(array('required' => false)),
      'fecha_fin'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'descripcion'  => new sfValidatorPass(array('required' => false)),
      'estado'       => new sfValidatorPass(array('required' => false)),
      'duracion'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('evaluacion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evaluacion';
  }

  public function getFields()
  {
    return array(
      'idevaluacion' => 'Number',
      'nombre'       => 'Text',
      'porcentaje'   => 'Number',
      'tipo'         => 'Text',
      'fecha_fin'    => 'Date',
      'descripcion'  => 'Text',
      'estado'       => 'Text',
      'duracion'     => 'Number',
    );
  }
}
