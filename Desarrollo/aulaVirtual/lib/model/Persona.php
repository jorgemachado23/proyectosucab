<?php

/*
 * Los objetos de esta clase representan un registro de la tabla Persona
 */

class Persona extends BasePersona
{
    
    
    public function __toString()
    {
        return $this->getIdpersona();
    }

    public function inhabilitar(){

        $this->setEstado("Inactivo");
    }

 /*
  * Se modifico la funcion save que se crea por defecto para que capture los
  * datos del formulario y los convierta en mayuscula antes de ingresarlos en la
  * base de datos. Si se esta ingresando un registro nuevo se asigna por defecto
  * el tipo Alumno y se crea el nombre de usuario y clave.
  */
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
             $cuenta=strtoupper($this->generarNombre($contador,$this->getNombre(),$this->getApellido()));
             $this->setCuenta($cuenta);

             $clave=$this->generarClave();
             $this->setClave($clave);
             
        }
        
        return parent::save($con);
    }

    /*
     * Funcion que genera el nombre de sesion de un alumno nuevo.
     */

    public function generarNombre($contador,$nombreAlumno,$apellidoAlumno){



        //$nombreAlumno = $this->getNombre();
        //$apellidoAlumno = $this->getApellido();
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

    /*
     * funcion que genera una clave aleatoria cuando se ingresa un nuevo alumno.
     */
    public function generarClave(){

        $clave = rand(111111, 999999);

        return $clave;
    }
}
