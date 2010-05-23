<?php

class Persona extends BasePersona
{
    public function __toString()
    {
        return $this->getName();
    }
}
