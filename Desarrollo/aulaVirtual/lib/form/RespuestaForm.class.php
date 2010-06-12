<?php

/**
 * Respuesta form.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class RespuestaForm extends BaseRespuestaForm
{
  public function configure()
  {
      /*
       * Se agrega los tipos de respuesta (correcta e incorrecta) como
       * radiobutton.
       */

      $this->widgetSchema['tipo'] = new sfWidgetFormChoice(array(
        'choices' => RespuestaPeer::$tipo,
        'multiple' => false,
        'expanded' => false,
        ));

      /*
       * Se valida que el tipo seleccionado este dentro del rango aceptado.
       */
      $this->validatorSchema['tipo'] = new sfValidatorChoice(array(
        'choices' => array_keys(RespuestaPeer::$tipo),
        ));


      $this->widgetSchema['respuesta']->setAttribute('size', '70');

      $this->validatorSchema['respuesta']->addMessage('max_length',
                'La respuesta no puede exceder de 100 caracteres.');

      $this->validatorSchema['respuesta']->addMessage('required',
                'Debe indicar la respuesta.');
      $this->validatorSchema['tipo']->addMessage('required',
                'Debe indicar si la respuesta es correcta o incorrecta.');
  }
}
