<?php

/*
 * Los objetos de esta clase representan un registro de la tabla Tema
 */

class Tema extends BaseTema
{
    public function __toString()
    {
        return $this->getName();
    }

    public function save(PropelPDO $con = null){

        if ($this->isNew()){

            $this->setIdpersona($_SESSION["id"]);
        }

        return parent::save($con);
    }
 

}

