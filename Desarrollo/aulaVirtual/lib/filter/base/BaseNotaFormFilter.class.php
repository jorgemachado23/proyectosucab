<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Nota filter form base class.
 *
 * @package    aulaVirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BaseNotaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'nota'         => new sfWidgetFormFilterInput(),
      'idlapso'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'nota'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'idlapso'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('nota_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Nota';
  }

  public function getFields()
  {
    return array(
      'idnota'       => 'Number',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
      'nota'         => 'Number',
      'idpersona'    => 'Number',
      'idevaluacion' => 'Number',
      'idlapso'      => 'Number',
    );
  }
}
