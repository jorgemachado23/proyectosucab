<?php

class Evaluacion extends BaseEvaluacion
{
    public function __toString()
    {
        return $this->getName();
    }
}
