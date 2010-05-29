<?php

/*
 * Los objetos de esta clase representan un registro de la tabla Comentarios
 */

class Comentarios extends BaseComentarios
{
    public function __toString()
    {
        return $this->getName();
    }

    public function save(PropelPDO $con = null){

        if ($this->isNew()){
            $this->setIdpersona($_SESSION["id"]);
            $this->setIdtema($_SESSION["idtema"]);
        }

        return parent::save($con);
    }
}
