<?php

class Nota extends BaseNota
{
    public function __toString()
    {
        return $this->getName();
    }
}
