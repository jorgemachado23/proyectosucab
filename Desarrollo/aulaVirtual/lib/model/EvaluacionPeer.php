<?php

class EvaluacionPeer extends BaseEvaluacionPeer
{
        static public $tipo = array(
        'CLASE' => 'Clase',
        'VIRTUAL' => 'Virtual',
    );

   static public $idlapso = array(
       '1' => '1er Lapso',
       '2' => '2do Lapso',
       '3' => '3er Lapso',
   );
    static public function getExamenVirtual()
    {
        $criteria = new Criteria();
        $criteria->add(self::TIPO, '1', Criteria::EQUAL);
        return self::doSelect($criteria);
    }
}
