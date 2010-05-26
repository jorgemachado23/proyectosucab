<?php

class Persona extends BasePersona
{
    public function __toString()
    {
        return $this->getName();
    }

    public function save(PropelPDO $con = null)
    {
        $nombreA=strtoupper($this->getNombre());
        $this->setNombre($nombreA);

        $segundonombreA=strtoupper($this->getSegundonombre());
        $this->setSegundonombre($segundonombreA);

        $apellidoA=strtoupper($this->getApellido());
        $this->setApellido($apellidoA);

        $segundoapellidoA=strtoupper($this->getSegundoapellido());
        $this->setSegundoapellido($segundoapellidoA);

        $cuenta=strtoupper($this->getCuenta());
        $this->setCuenta($cuenta);

        $correo=strtoupper($this->getCorreo());
        $this->setCorreo($correo);

        if (($this->isNew()) && (!$this->getTipo()))
        {
             $this->setTipo("ALUM");
        }
        
        return parent::save($con);
    }
}
