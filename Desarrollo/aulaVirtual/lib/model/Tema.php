<?php

class Tema extends BaseTema
{
    public function __toString()
    {
        return $this->getName();
    }
}
