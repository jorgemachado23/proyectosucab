<?php

class Nota extends BaseNota
{
    public function __toString()
    {
        return $this->getName();
    }


     public function save(PropelPDO $con = null)
    {

        $nota = comparar($this->getNota());
        $this->setNota($nota);
        return parent::save($con);
    }

       public function comparar($cad1){

        if ($cad1=='A'){
           $cade=5;

        }else if($cad1=='B'){
            $cade=4;

        }
        return $cade;

    }

}
