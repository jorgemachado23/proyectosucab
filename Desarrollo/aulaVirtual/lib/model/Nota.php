<?php

class Nota extends BaseNota
{
    public function __toString()
    {
        return $this->getName();
    }

     public function save(PropelPDO $con = null)
    {

        if ($this->isNew())
        {  
            if($this->getNota()==A){
                $this->setNota(5);
            }
            if($this->getNota()==B){
                $this->setNota(4);
            }

        }
        return parent::save($con);
    }

}
