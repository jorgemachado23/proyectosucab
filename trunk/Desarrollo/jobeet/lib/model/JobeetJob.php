<?php

class JobeetJob extends BaseJobeetJob
{
     public function __toString()
    {
        return $this->getName();
    }
}
