<?php

/**
 * doc actions.
 *
 * @package    aulaVirtual
 * @subpackage doc
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class docActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->documento_list = DocumentoPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->documento = DocumentoPeer::retrieveByPk($request->getParameter('created_at'));
    $this->forward404Unless($this->documento);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new DocumentoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new DocumentoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($documento = DocumentoPeer::retrieveByPk($request->getParameter('created_at')), sprintf('Object documento does not exist (%s).', $request->getParameter('created_at')));
    $this->form = new DocumentoForm($documento);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($documento = DocumentoPeer::retrieveByPk($request->getParameter('created_at')), sprintf('Object documento does not exist (%s).', $request->getParameter('created_at')));
    $this->form = new DocumentoForm($documento);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($documento = DocumentoPeer::retrieveByPk($request->getParameter('created_at')), sprintf('Object documento does not exist (%s).', $request->getParameter('created_at')));
    $documento->delete();

    $this->redirect('doc/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $documento = $form->save();

      $this->redirect('doc/edit?created_at='.$documento->getCreatedAt());
    }
  }
}
