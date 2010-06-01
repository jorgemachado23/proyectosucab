<?php

/**
 * temas actions.
 *
 * En este archivo se encuentran todas las acciones relacionadas al CRUD de del
 * modulo temas y sus comentarios relacionados a el.
 *
 * @package    aulaVirtual
 * @subpackage temas
 * @author     Claudia Afonso
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class temasActions extends sfActions
{

    /**
     *Funcion que ejecuta el borrar comentario recibe un ID
     * como parametro a traves del $request de la peticion con el URL
     *
     * @param sfWebRequest $request: es el encargado de recibir todos los datos
     *  a traves del URL
     */
  public function executeDeleteComen(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
    $this->forward404Unless($comentarios = ComentariosPeer::retrieveByPk($request->getParameter('idcomentarios')), sprintf('Object comentarios does not exist (%s).', $request->getParameter('idcomentarios')));
    $comentarios->delete();
    $this->redirect('temas/index');
  }

  /**
   *Funcion que excuta la pagina en la se listaran todos los temas disponibles,
   * se hace un select de toda la tabla y se asigna a una lista la cual es la
   * que se utiliza para hacer el listado.
   *
   * @param sfWebRequest $request: es el encargado de recibir todos los datos
   *  a traves del URL
   */
  public function executeIndex(sfWebRequest $request)
  {
      $this->tema_list = TemaPeer::doSelect(new Criteria());
  }

  /**
   *Funcion que muestra toda la informacion relacionada a un tema y los comenta-
   * rios asociados a el.
   *
   * @param sfWebRequest $request: es el encargado de recibir todos los datos
   *  a traves del URL, en este caso recibira el id de la persona que inicio se-
   * sion como ADMIN y el id del tema que se desea desplegar
   */
  public function executeShow(sfWebRequest $request)
  {
    $this->tema = TemaPeer::retrieveByPk($request->getParameter('idtema'));
    $this->forward404Unless($this->tema);
    $this->comentarios_list = ComentariosPeer::doSelect(new Criteria());
    $this->persona_list = PersonaPeer::doSelect(new Criteria());
    $this->persona = PersonaPeer::retrieveByPk($request->getParameter('idpersona'));
  }

  /**
   *Funcion que ejecuta la creacion de un formulario para la insercion de un
   * nuevo tema en el sistema.
   *
   * @param sfWebRequest $request: es el encargado de recibir todos los datos
   *  a traves del URL
   */
  public function executeNew(sfWebRequest $request)
  {
      $this->form = new TemaForm();
  }

  /**
   *Funcion que ejecuta el formulario creado a traves del executeNew con los
   * datos necesarios, estos datos se reciben a traves de un metodo post
   *
   *
   * @param sfWebRequest $request: es el encargado de recibir todos los datos
   *  a traves del URL
   */
  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new TemaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');

  }

  /**
   *Funcion que ejecuta el formulario para la modificacion de un tema.
   *
   * @param sfWebRequest $request: es el encargado de recibir todos los datos
   *  a traves del URL
   */
  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tema = TemaPeer::retrieveByPk($request->getParameter('idtema')), sprintf('Object tema does not exist (%s).', $request->getParameter('idtema')));
    $this->form = new TemaForm($tema);
  }

  /**
   *Funcion que ejecuta el formulario creado en el executeEdit con todos los datos
   * necesarios, los cuales recibe a traves de un metodo post o put
   *
   * @param sfWebRequest $request: es el encargado de recibir todos los datos
   *  a traves del URL
   */
  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($tema = TemaPeer::retrieveByPk($request->getParameter('idtema')), sprintf('Object tema does not exist (%s).', $request->getParameter('idtema')));
    $this->form = new TemaForm($tema);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  /**
   *Funcion que ejecuta el borrar temas, recibe un ID de tema para su ejecucion
   *
   * @param sfWebRequest $request: es el encargado de recibir todos los datos
   *  a traves del URL, en este caso recibe solo el ID tema
   */
  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tema = TemaPeer::retrieveByPk($request->getParameter('idtema')), sprintf('Object tema does not exist (%s).', $request->getParameter('idtema')));
    $tema->delete();

    $this->redirect('temas/index');
  }

  /**
   *Funcion que ejecuta el archivo deleteForoSuccess.
   *
   * @param sfWebRequest $request: es el encargado de recibir todos los datos
   *  a traves del URL
   */
    public function executeDeleteForo(sfWebRequest $request)
  {
   
  }

  /**
   *Funcion que procesa los formularios.
   *
   * @param sfWebRequest $request: es el encargado de recibir todos los datos
   *  a traves del URL
   */
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