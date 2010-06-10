<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Documento filter form base class.
 *
 * @package    aulaVirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseDocumentoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'iddocumento' => new sfWidgetFormFilterInput(),
      'nombre'      => new sfWidgetFormFilterInput(),
      'idpersona'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'iddocumento' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'idpersona'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('documento_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Documento';
  }

  public function getFields()
  {
    return array(
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
      'iddocumento' => 'Number',
      'nombre'      => 'Text',
      'idpersona'   => 'Number',
    );
  }
}
