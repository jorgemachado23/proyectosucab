<?php

class Comentarios extends BaseComentarios
{
    public function __toString()
    {
        return $this->getName();
    }
}
