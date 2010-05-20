<?php

/**
 * lapsos actions.
 *
 * @package    aulaVirtual
 * @subpackage lapsos
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class lapsosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->lapso_list = LapsoPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->lapso = LapsoPeer::retrieveByPk($request->getParameter('idlapso'));
    $this->forward404Unless($this->lapso);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new LapsoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new LapsoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($lapso = LapsoPeer::retrieveByPk($request->getParameter('idlapso')), sprintf('Object lapso does not exist (%s).', $request->getParameter('idlapso')));
    $this->form = new LapsoForm($lapso);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($lapso = LapsoPeer::retrieveByPk($request->getParameter('idlapso')), sprintf('Object lapso does not exist (%s).', $request->getParameter('idlapso')));
    $this->form = new LapsoForm($lapso);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($lapso = LapsoPeer::retrieveByPk($request->getParameter('idlapso')), sprintf('Object lapso does not exist (%s).', $request->getParameter('idlapso')));
    $lapso->delete();

    $this->redirect('lapsos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $lapso = $form->save();

      $this->redirect('lapsos/edit?idlapso='.$lapso->getIdlapso());
    }
  }
}
