<?php

/**
 * Tema form.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class TemaForm extends BaseTemaForm
{
  public function configure()
  {
         unset ($this['created_at']);
         unset ($this['updated_at']); 
         unset ($this['idpersona']);
         $this->widgetSchema['nombre']->setAttribute('size', '50');
         $this->widgetSchema['descripcion']->setAttributes(array('style'=>"height:80px;width:370px"));

         $this->validatorSchema['nombre']->addMessage('max_length',
        'El nombre del Tema no debe exceder de 45 caracteres');
         $this->validatorSchema['descripcion']->addMessage('max_length',
        'El nombre de la Evaluación no debe exceder de 100 caracteres');

  }
}
