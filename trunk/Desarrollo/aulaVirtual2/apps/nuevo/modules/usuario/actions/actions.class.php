<?php

/**
 * usuario actions.
 *
 * @package    aulaVirtual
 * @subpackage usuario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class usuarioActions extends sfActions
{

  public function executeLogin(sfWebRequest $request)
  {
    $this->persona_list = PersonaPeer::doSelect(new Criteria());
  }

  public function executeIndex(sfWebRequest $request)
  {
    $this->persona_list = PersonaPeer::doSelect(new Criteria());
  }
  
}