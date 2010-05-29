<?php

/**
 * resp_dad actions.
 *
 * @package    aulaVirtual
 * @subpackage resp_dad
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class resp_dadActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->res_dada_list = ResDadaPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->res_dada = ResDadaPeer::retrieveByPk($request->getParameter('num_pregunta'),
                                  $request->getParameter('idnota'),
                                  $request->getParameter('idpersona'),
                                  $request->getParameter('idevaluacion'));
    $this->forward404Unless($this->res_dada);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ResDadaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ResDadaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($res_dada = ResDadaPeer::retrieveByPk($request->getParameter('num_pregunta'),
                            $request->getParameter('idnota'),
                            $request->getParameter('idpersona'),
                            $request->getParameter('idevaluacion')), sprintf('Object res_dada does not exist (%s).', $request->getParameter('num_pregunta'),
                            $request->getParameter('idnota'),
                            $request->getParameter('idpersona'),
                            $request->getParameter('idevaluacion')));
    $this->form = new ResDadaForm($res_dada);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($res_dada = ResDadaPeer::retrieveByPk($request->getParameter('num_pregunta'),
                            $request->getParameter('idnota'),
                            $request->getParameter('idpersona'),
                            $request->getParameter('idevaluacion')), sprintf('Object res_dada does not exist (%s).', $request->getParameter('num_pregunta'),
                            $request->getParameter('idnota'),
                            $request->getParameter('idpersona'),
                            $request->getParameter('idevaluacion')));
    $this->form = new ResDadaForm($res_dada);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($res_dada = ResDadaPeer::retrieveByPk($request->getParameter('num_pregunta'),
                            $request->getParameter('idnota'),
                            $request->getParameter('idpersona'),
                            $request->getParameter('idevaluacion')), sprintf('Object res_dada does not exist (%s).', $request->getParameter('num_pregunta'),
                            $request->getParameter('idnota'),
                            $request->getParameter('idpersona'),
                            $request->getParameter('idevaluacion')));
    $res_dada->delete();

    $this->redirect('resp_dad/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $res_dada = $form->save();

      $this->redirect('resp_dad/edit?num_pregunta='.$res_dada->getNumPregunta().'&idnota='.$res_dada->getIdnota().'&idpersona='.$res_dada->getIdpersona().'&idevaluacion='.$res_dada->getIdevaluacion());
    }
  }
}
