<?php

/**
 * comentario actions.
 *
 * @package    aulaVirtual
 * @subpackage comentario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class comentarioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->comentarios_list = ComentariosPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->comentarios = ComentariosPeer::retrieveByPk($request->getParameter('idcomentarios'));
    $this->forward404Unless($this->comentarios);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ComentariosForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ComentariosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($comentarios = ComentariosPeer::retrieveByPk($request->getParameter('idcomentarios')), sprintf('Object comentarios does not exist (%s).', $request->getParameter('idcomentarios')));
    $this->form = new ComentariosForm($comentarios);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($comentarios = ComentariosPeer::retrieveByPk($request->getParameter('idcomentarios')), sprintf('Object comentarios does not exist (%s).', $request->getParameter('idcomentarios')));
    $this->form = new ComentariosForm($comentarios);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($comentarios = ComentariosPeer::retrieveByPk($request->getParameter('idcomentarios')), sprintf('Object comentarios does not exist (%s).', $request->getParameter('idcomentarios')));
    $comentarios->delete();

    $this->redirect('comentario/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $comentarios = $form->save();

      $this->redirect('comentario/edit?idcomentarios='.$comentarios->getIdcomentarios());
    }
  }
}
