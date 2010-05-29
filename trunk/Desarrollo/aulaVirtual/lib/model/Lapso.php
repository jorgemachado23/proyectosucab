<?php

/*
 * Los objetos de esta clase representan un registro de la tabla Lapso
 */

class Lapso extends BaseLapso
{
    public function __toString()
    {
        return $this->getIdlapso();
    }
}
