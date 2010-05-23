<?php

/**
 * temas actions.
 *
 * @package    aulaVirtual
 * @subpackage temas
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class temasActions extends sfActions
{

  public function executeDeleteForo(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tema = ComentariosPeer::doSelect(new Criteria()));
    $tema->delete();

    $this->redirect('temas/index');
  }


  public function executeDeleteComen(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($comentarios = ComentariosPeer::retrieveByPk($request->getParameter('idcomentarios')), sprintf('Object comentarios does not exist (%s).', $request->getParameter('idcomentarios')));
    $comentarios->delete();

    $this->redirect('temas/index');
  }

  public function executeIndex(sfWebRequest $request)
  {
    $this->tema_list = TemaPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->tema = TemaPeer::retrieveByPk($request->getParameter('idtema'));
    $this->forward404Unless($this->tema);
    $this->comentarios_list = ComentariosPeer::doSelect(new Criteria());
    $this->persona_list = PersonaPeer::doSelect(new Criteria());
    $this->persona = PersonaPeer::retrieveByPk($request->getParameter('idpersona'));
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TemaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new TemaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tema = TemaPeer::retrieveByPk($request->getParameter('idtema')), sprintf('Object tema does not exist (%s).', $request->getParameter('idtema')));
    $this->form = new TemaForm($tema);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($tema = TemaPeer::retrieveByPk($request->getParameter('idtema')), sprintf('Object tema does not exist (%s).', $request->getParameter('idtema')));
    $this->form = new TemaForm($tema);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tema = TemaPeer::retrieveByPk($request->getParameter('idtema')), sprintf('Object tema does not exist (%s).', $request->getParameter('idtema')));
    $tema->delete();

    $this->redirect('temas/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tema = $form->save();

      $this->redirect('temas/edit?idtema='.$tema->getIdtema());
    }
  }
}
