<?php

/**
 * personas actions.
 *
 * @package    aulaVirtual
 * @subpackage personas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class personasActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->persona_list = PersonaPeer::doSelect(new Criteria());
  }

  public function executeSeccion(sfWebRequest $request)
  {
    $this->persona_list = PersonaPeer::doSelect(new Criteria());
  }


  public function executeShow(sfWebRequest $request)
  {
    $this->persona = PersonaPeer::retrieveByPk($request->getParameter('idpersona'));
    $this->forward404Unless($this->persona);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PersonaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new PersonaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($persona = PersonaPeer::retrieveByPk($request->getParameter('idpersona')), sprintf('Object persona does not exist (%s).', $request->getParameter('idpersona')));
    $this->form = new PersonaForm($persona);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($persona = PersonaPeer::retrieveByPk($request->getParameter('idpersona')), sprintf('Object persona does not exist (%s).', $request->getParameter('idpersona')));
    $this->form = new PersonaForm($persona);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($persona = PersonaPeer::retrieveByPk($request->getParameter('idpersona')), sprintf('Object persona does not exist (%s).', $request->getParameter('idpersona')));
    $persona->delete();

    $this->redirect('personas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $persona = $form->save();

      $this->redirect('personas/edit?idpersona='.$persona->getIdpersona());
    }
  }
}
