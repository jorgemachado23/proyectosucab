<?php

class Documento extends BaseDocumento
{
    public function __toString()
    {
        return $this->getName();
    }
}
