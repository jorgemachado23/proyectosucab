<?php

/**
 * resp actions.
 *
 * @package    aulaVirtual
 * @subpackage resp
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class respActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->respuesta_list = RespuestaPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->respuesta = RespuestaPeer::retrieveByPk($request->getParameter('idrespuesta'),
                               $request->getParameter('idpregunta'));
    $this->forward404Unless($this->respuesta);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new RespuestaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new RespuestaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($respuesta = RespuestaPeer::retrieveByPk($request->getParameter('idrespuesta'),
                         $request->getParameter('idpregunta')), sprintf('Object respuesta does not exist (%s).', $request->getParameter('idrespuesta'),
                         $request->getParameter('idpregunta')));
    $this->form = new RespuestaForm($respuesta);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($respuesta = RespuestaPeer::retrieveByPk($request->getParameter('idrespuesta'),
                         $request->getParameter('idpregunta')), sprintf('Object respuesta does not exist (%s).', $request->getParameter('idrespuesta'),
                         $request->getParameter('idpregunta')));
    $this->form = new RespuestaForm($respuesta);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($respuesta = RespuestaPeer::retrieveByPk($request->getParameter('idrespuesta'),
                         $request->getParameter('idpregunta')), sprintf('Object respuesta does not exist (%s).', $request->getParameter('idrespuesta'),
                         $request->getParameter('idpregunta')));
    $respuesta->delete();

    $this->redirect('resp/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $respuesta = $form->save();

      $this->redirect('resp/edit?idrespuesta='.$respuesta->getIdrespuesta().'&idpregunta='.$respuesta->getIdpregunta());
    }
  }
}
