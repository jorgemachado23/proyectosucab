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
      /*
       * Validaciones:
       * Se valida que el correo tenga el formato adecuado.
       * Se valida que la seccion este dentro del rango correspondiente
       */
      $this->validatorSchema['correo'] = new sfValidatorEmail();

      $this->validatorSchema['seccion'] = new sfValidatorChoice(array(
        'choices' => array_keys(PersonaPeer::$seccion),
        ));

      /*
       * Se agrega el listbox con las secciones disponibles
       */

      $this->widgetSchema['seccion'] = new sfWidgetFormChoice(array(
        'choices' => PersonaPeer::$seccion,
        'multiple' => false,
        'expanded' => false,
        ));
 /*
  * Se modifican los labels del formulario para que los nombres de los
  * atributos tengan mejor presentacion
  */
       $this->widgetSchema->setLabels(array(
       'segundonombre' => 'Segundo Nombre',
       'segundoapellido' => 'Segundo Apellido',
      ));
/*
 * Se modifica la plantilla para que no se muestre los campos tipo,cuenta,clave
 * y estado ya que estos atributos se llenan por defecto o a través de metodos
 * automatizados.
 */
      unset(
         $this['tipo'],
         $this['cuenta'],
         $this['clave'],
         $this['estado']
        );

      // Validadores de tipo de requerimiento. Los campos no pueden estar vacios //
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
        
      // Validadores del máximo de campo. Los campos no pueden exceder de un límite //
        $this->validatorSchema['nombre']->addMessage('max_length',
                'El nombre del Alumno no debe exceder de 45 caracteres');
        $this->validatorSchema['segundonombre']->addMessage('max_length',
                'El segundo nombre del Alumno no debe exceder de 45 caracteres');
        $this->validatorSchema['apellido']->addMessage('max_length',
                'El apellido del Alumno no debe exceder de 45 caracteres');
        $this->validatorSchema['segundoapellido']->addMessage('max_length',
                'El segundo apellido del Alumno no debe exceder de 45 caracteres');
        $this->validatorSchema['correo']->addMessage('max_length',
                'El correo del Alumno no debe exceder de 80 caracteres');

       // Validadores del máximo de campo. Los campos no pueden exceder de un límite //
        $this->widgetSchema['nombre']->setAttribute('size', '50');
        $this->widgetSchema['segundonombre']->setAttribute('size', '50');
        $this->widgetSchema['apellido']->setAttribute('size', '50');
        $this->widgetSchema['segundoapellido']->setAttribute('size', '50');
        $this->widgetSchema['correo']->setAttribute('size', '50');
  }
}
