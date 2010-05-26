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

        

        $correo=strtoupper($this->getCorreo());
        $this->setCorreo($correo);

        if ($this->isNew())
        {
             if (!$this->getTipo()){
                $this->setTipo("ALUM");
             }

             $cuenta=strtoupper($this->generarNombre());
             $this->setCuenta($cuenta);

             $clave=$this->generarClave();
             $this->setClave($clave);
             
        }
        
        return parent::save($con);
    }

    public function generarNombre(){

        $contador = 0;
        $nombreAlumno = $this->getNombre();
        $apellidoAlumno = $this->getApellido();
        $cuentaAlumno = $nombreAlumno."_". $apellidoAlumno;

        foreach ($persona_list as $persona) {
            $contador=8;
        }
       

           // if(($nombreAlumno == $persona->getNombre()) && ($apellidoAlumno == $persona->getApellido())){

       

            $cuentaAlumno = $contador;
       
        return $cuentaAlumno;
    }

    public function generarClave(){

        $clave = rand(111111, 999999);

        return $clave;
    }
}
