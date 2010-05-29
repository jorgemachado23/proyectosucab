<?php

class JobeetJobPeer extends BaseJobeetJobPeer
{
    public function __toString()
    {
        return $this->getName();
    }
}
