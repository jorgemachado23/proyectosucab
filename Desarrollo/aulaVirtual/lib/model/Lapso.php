<?php

class Lapso extends BaseLapso
{
    public function __toString()
    {
        return $this->getIdlapso();
    }
}
