<?php

class JobeetCategoryPeer extends BaseJobeetCategoryPeer
{
     public function __toString()
    {
        return $this->getName();
    }
}
