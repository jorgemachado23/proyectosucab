<?php

/**
 * Persona form.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class PersonaForm extends BasePersonaForm
{
  public function configure()
  {
      $this->validatorSchema['correo'] = new sfValidatorEmail();

      $this->widgetSchema['seccion'] = new sfWidgetFormChoice(array(
        'choices' => PersonaPeer::$seccion,
        'multiple' => false,
        'expanded' => false,
        ));

      $this->validatorSchema['seccion'] = new sfValidatorChoice(array(
        'choices' => array_keys(PersonaPeer::$seccion),
        ));

      unset(
         $this['tipo']
        );

      $this->widgetSchema->setLabels(array(
       'segundonombre' => 'Segundo Nombre',
       'segundoapellido' => 'Segundo Apellido',
      ));

      

  }
}
