<?php

/*
 * Los objetos de esta clase representan un registro de la tabla Persona
 */

class Persona extends BasePersona
{
    
    
    public function __toString()
    {
        return $this->getName();
    }

    public function inhabilitar(){

        $this->setEstado("Inactivo");

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

             $contador = 0;
             $cuenta=strtoupper($this->generarNombre($contador));
             $this->setCuenta($cuenta);

             $clave=$this->generarClave();
             $this->setClave($clave);
             
        }
        else if($_SESSION["flag"] == 1){
            $this->setEstado("Inactivo");
            $_SESSION["flag"]=0;

        }
        
        return parent::save($con);
    }

    public function generarNombre($contador){



        $nombreAlumno = $this->getNombre();
        $apellidoAlumno = $this->getApellido();
        $cuentaAlumno = $nombreAlumno."_". $apellidoAlumno;

        $personas = PersonaPeer::getActiveEstudiantes();
        foreach ($personas as $persona) {
            if(($nombreAlumno == $persona->getNombre()) && ($apellidoAlumno == $persona->getApellido())){
                ++$contador;

            }
        }
        if($contador > 0){
        $cuentaAlumno = $cuentaAlumno."_".$contador;
        }
        return $cuentaAlumno;
    }

    public function generarClave(){

        $clave = rand(111111, 999999);

        return $clave;
    }
}
