<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Persona filter form base class.
 *
 * @package    aulaVirtual
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 13459 2008-11-28 14:48:12Z fabien $
 */
class BasePersonaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'          => new sfWidgetFormFilterInput(),
      'apellido'        => new sfWidgetFormFilterInput(),
      'tipo'            => new sfWidgetFormFilterInput(),
      'cuenta'          => new sfWidgetFormFilterInput(),
      'clave'           => new sfWidgetFormFilterInput(),
      'seccion'         => new sfWidgetFormFilterInput(),
      'estado'          => new sfWidgetFormFilterInput(),
      'correo'          => new sfWidgetFormFilterInput(),
      'segundonombre'   => new sfWidgetFormFilterInput(),
      'segundoapellido' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'          => new sfValidatorPass(array('required' => false)),
      'apellido'        => new sfValidatorPass(array('required' => false)),
      'tipo'            => new sfValidatorPass(array('required' => false)),
      'cuenta'          => new sfValidatorPass(array('required' => false)),
      'clave'           => new sfValidatorPass(array('required' => false)),
      'seccion'         => new sfValidatorPass(array('required' => false)),
      'estado'          => new sfValidatorPass(array('required' => false)),
      'correo'          => new sfValidatorPass(array('required' => false)),
      'segundonombre'   => new sfValidatorPass(array('required' => false)),
      'segundoapellido' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('persona_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Persona';
  }

  public function getFields()
  {
    return array(
      'idpersona'       => 'Number',
      'nombre'          => 'Text',
      'apellido'        => 'Text',
      'tipo'            => 'Text',
      'cuenta'          => 'Text',
      'clave'           => 'Text',
      'seccion'         => 'Text',
      'estado'          => 'Text',
      'correo'          => 'Text',
      'segundonombre'   => 'Text',
      'segundoapellido' => 'Text',
    );
  }
}
