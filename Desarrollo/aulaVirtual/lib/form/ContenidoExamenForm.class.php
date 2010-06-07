<?php

/**
 * ContenidoExamen form.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class ContenidoExamenForm extends BaseContenidoExamenForm
{
  public function configure()
  {
      $this->widgetSchema['pregunta']->setAttribute('size', '70');

      $this->validatorSchema['pregunta']->addMessage('max_length',
                'La pregunta no puede exceder de 100 caracteres.');

      $this->validatorSchema['pregunta']->addMessage('required',
                'Debe indicar la pregunta.');
  }
}
