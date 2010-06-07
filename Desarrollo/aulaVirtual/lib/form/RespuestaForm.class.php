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
        'expanded' => true,
        ));

      /*
       * Se valida que el tipo seleccionado este dentro del rango aceptado.
       */
      $this->validatorSchema['seccion'] = new sfValidatorChoice(array(
        'choices' => array_keys(PersonaPeer::$seccion),
        ));
  }
}
