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
         $this['tipo'],
         $this['cuenta'],
         $this['clave'],
         $this['estado']
        );

      $this->widgetSchema->setLabels(array(
       'segundonombre' => 'Segundo Nombre',
       'segundoapellido' => 'Segundo Apellido',
      ));

      //    Validadores de tipo de requerimiento//
        $this->validatorSchema['nombre']->addMessage('required',
                'Debes indicar el Nombre');
        $this->validatorSchema['segundonombre']->addMessage('required',
                'Debes indicar el Segundo Nombre');
        $this->validatorSchema['apellido']->addMessage('required',
                'Debes indicar el Apellido');
        $this->validatorSchema['correo']->addMessage('required',
                'Debes indicar el Correo');
        $this->validatorSchema['segundoapellido']->addMessage('required',
                'Debes indicar el Segundo Apellido');
        


  }
}
