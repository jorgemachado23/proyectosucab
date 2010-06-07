<?php

class ContenidoExamen extends BaseContenidoExamen
{
    public function __toString()
    {
        return $this->getName();
    }

     public function save(PropelPDO $con = null)
    {
        
            $eval = $_SESSION["evaluacion"];
            $this->setIdevaluacion($eval);
        
        return parent::save($con);
    }
}
