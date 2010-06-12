<?php

class Respuesta extends BaseRespuesta
{
    public function __toString()
    {
        return $this->getName();
    }

    public function save(PropelPDO $con = null)
    {

            $_SESSION["flag"]=null;
            $preg = $_SESSION["pregunta"];
            if($this->getTipo()=='CORRECTA'){
            $validez = $this->validarRespuesta($preg);
            if($validez=='0'){
                $this->setIdpregunta($preg);
                return parent::save($con);
            }
             else {
              $_SESSION["flag"] = "Usted ya ha agregado una respuesta correcta. Por favor verifique los datos.";
             }
            }else
                {
                    $this->setIdpregunta($preg);
                    return parent::save($con);
                }
//        $preg = $_SESSION["pregunta"];
//        $this->setIdpregunta($preg);
//        return parent::save($con);
    }

    /*
     * Esta funcion verifica que no se ingresen dos respuestas correctas para
     * una misma pregunta.
     */

    public function validarRespuesta($pregunta){

        $respuestas = RespuestaPeer::getRespuestasSegunPregunta($pregunta);
        $cont=0;
        foreach ($respuestas as $res) {
            if ($res->getTipo()=='CORRECTA'){
                $cont=$cont+1;
            }

        }
        return $cont;

    }
}
