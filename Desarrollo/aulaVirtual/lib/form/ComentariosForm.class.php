<?php

/**
 * Comentarios form.
 *
 * @package    aulaVirtual
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class ComentariosForm extends BaseComentariosForm
{
  public function configure()
  {
         unset ($this['created_at']);
         unset ($this['updated_at']);
         unset ($this['idpersona']);
         unset ($this['idtema']);
  }
}
