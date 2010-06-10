<?php

/**
 * eval actions.
 *
 * @package    aulaVirtual
 * @subpackage eval
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class evalActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->evaluacion_list = EvaluacionPeer::doSelect(new Criteria());
  }

    public function executeBorrar(sfWebRequest $request)
  {
    $this->evaluacion_list = EvaluacionPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->evaluacion = EvaluacionPeer::retrieveByPk($request->getParameter('idevaluacion'));
    $this->forward404Unless($this->evaluacion);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new EvaluacionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new EvaluacionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($evaluacion = EvaluacionPeer::retrieveByPk($request->getParameter('idevaluacion')), sprintf('Object evaluacion does not exist (%s).', $request->getParameter('idevaluacion')));
    $this->form = new EvaluacionForm($evaluacion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($evaluacion = EvaluacionPeer::retrieveByPk($request->getParameter('idevaluacion')), sprintf('Object evaluacion does not exist (%s).', $request->getParameter('idevaluacion')));
    $this->form = new EvaluacionForm($evaluacion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    //$request->checkCSRFProtection();

    $this->forward404Unless($evaluacion = EvaluacionPeer::retrieveByPk($request->getParameter('idevaluacion')), sprintf('Object evaluacion does not exist (%s).', $request->getParameter('idevaluacion')));
    $evaluacion->delete();

    $this->redirect('eval/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $evaluacion = $form->save();

      $this->redirect('eval/index');
    }
  }
}
