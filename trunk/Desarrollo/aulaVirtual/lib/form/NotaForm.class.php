<?php
/**
 * Nota form.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class NotaForm extends BaseNotaForm
{
  public function configure()
  {
 
    //      $this->widgetSchema['nota']->setAttribute('size', '10');

   //       $seccion = new Criteria();
   //       $seccion->add(PersonaPeer::SECCION,$_SESSION["seccion"]);
        //  $this->widgetSchema['idpersona'] = new sfWidgetFormPropelChoice(array('label' => 'Nombre:', 'model' => 'Persona', 'criteria' => $seccion));
   //       $this->validatorSchema['nota']->addMessage('max_length',
   //         'Solo puede introducir una letra para la nota');

          unset ($this['created_at']);
          unset ($this['updated_at']);



  }
}
