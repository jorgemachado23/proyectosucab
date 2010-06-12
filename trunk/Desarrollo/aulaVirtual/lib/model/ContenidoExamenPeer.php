<?php

class ContenidoExamenPeer extends BaseContenidoExamenPeer
{
   static public function getPreguntasSegunExamen($evaluacion){

        $criteria = new Criteria();
        $criteria->add(self::IDEVALUACION, $evaluacion, Criteria::EQUAL);
        return self::doSelect($criteria);


    }

}
