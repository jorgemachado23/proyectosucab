<?php

class EvaluacionPeer extends BaseEvaluacionPeer
{
    static public function getExamenVirtual()
    {
        $criteria = new Criteria();
        $criteria->add(self::TIPO, '1', Criteria::EQUAL);
        return self::doSelect($criteria);
    }
}
