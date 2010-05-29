<?php

class ContenidoExamen extends BaseContenidoExamen
{
    public function __toString()
    {
        return $this->getName();
    }
}
