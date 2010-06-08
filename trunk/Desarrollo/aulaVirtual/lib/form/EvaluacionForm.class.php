<?php

/**
 * Evaluacion form.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class EvaluacionForm extends BaseEvaluacionForm
{
  public function configure()
  {
      $this->widgetSchema['tipo'] = new sfWidgetFormChoice(array(
        'choices' => EvaluacionPeer::$tipo,
        'multiple' => false,
        'expanded' => false,
        ));

     $this->widgetSchema['idlapso'] = new sfWidgetFormChoice(array(
    'choices' => EvaluacionPeer::$idlapso,
    'multiple' => false,
    'expanded' => false,
    ));

      $this->widgetSchema->setLabels(array(
       'porcentaje' => 'Porcentaje (%)',
       'duracion' => 'Duración (min)',
       'idlapso' => 'Lapso',
      ));

      $this->widgetSchema['nombre']->setAttribute('size', '72');
      $this->widgetSchema['porcentaje']->setAttribute('size', '10');
      $this->widgetSchema['descripcion']->setAttributes(array('style'=>"height:40px;width:370px"));
      $this->widgetSchema['duracion']->setAttribute('size', '10');
//      $this->widgetSchema['fecha_fin'] = new sfWidgetFormDateJQuery();
      $this->widgetSchema['estado'] = new sfWidgetFormChoice(array(
        'choices' => array('ACTIVA', 'INACTIVA'),
        ));
      $this->validatorSchema['nombre']->addMessage('max_length',
                'El nombre de la Evaluación no debe exceder de 45 caracteres');
      $this->validatorSchema['porcentaje']->addMessage('invalid','El porcentaje de la Evaluación debe contener solo números');
      $this->validatorSchema['descripcion']->addMessage('max_length',
                'La descripción de la Evaluación no debe exceder de 100 caracteres');
      $this->validatorSchema['duracion']->addMessage('invalid','La duración debe contener solo números para indicar la cantidad de minutos que durará la evaluación');
  }
}
