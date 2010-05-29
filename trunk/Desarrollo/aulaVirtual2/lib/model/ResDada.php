<?php

class ResDada extends BaseResDada
{
    public function __toString()
    {
        return $this->getName();
    }
}
