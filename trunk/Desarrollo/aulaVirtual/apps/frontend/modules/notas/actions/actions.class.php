<?php

/**
 * notas actions.
 *
 * @package    aulaVirtual
 * @subpackage notas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class notasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->nota_list = NotaPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->nota = NotaPeer::retrieveByPk($request->getParameter('idnota'),
                                         $request->getParameter('idpersona'),
                                         $request->getParameter('idevaluacion'));
    $this->forward404Unless($this->nota);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new NotaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new NotaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($nota = NotaPeer::retrieveByPk($request->getParameter('idnota'),
                                   $request->getParameter('idpersona'),
                                   $request->getParameter('idevaluacion')), sprintf('Object nota does not exist (%s).', $request->getParameter('idnota'),
                                   $request->getParameter('idpersona'),
                                   $request->getParameter('idevaluacion')));
    $this->form = new NotaForm($nota);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($nota = NotaPeer::retrieveByPk($request->getParameter('idnota'),
                                   $request->getParameter('idpersona'),
                                   $request->getParameter('idevaluacion')), sprintf('Object nota does not exist (%s).', $request->getParameter('idnota'),
                                   $request->getParameter('idpersona'),
                                   $request->getParameter('idevaluacion')));
    $this->form = new NotaForm($nota);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($nota = NotaPeer::retrieveByPk($request->getParameter('idnota'),
                                   $request->getParameter('idpersona'),
                                   $request->getParameter('idevaluacion')), sprintf('Object nota does not exist (%s).', $request->getParameter('idnota'),
                                   $request->getParameter('idpersona'),
                                   $request->getParameter('idevaluacion')));
    $nota->delete();

    $this->redirect('notas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $nota = $form->save();

      $this->redirect('notas/edit?idnota='.$nota->getIdnota().'&idpersona='.$nota->getIdpersona().'&idevaluacion='.$nota->getIdevaluacion());
    }
  }
}
