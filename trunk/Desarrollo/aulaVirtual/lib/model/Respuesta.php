<?php

class Respuesta extends BaseRespuesta
{
    public function __toString()
    {
        return $this->getName();
    }
}
