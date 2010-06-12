<?php

class RespuestaPeer extends BaseRespuestaPeer
{
    static public $tipo = array(
        'CORRECTA' => 'Correcta',
        'INCORRECTA' => 'Incorrecta',
    );

    static public function getRespuestasSegunPregunta($pregunta)
    {
        $criteria = new Criteria();
        $criteria->add(self::IDPREGUNTA, $pregunta, Criteria::EQUAL);
        return self::doSelect($criteria);

    }

}
