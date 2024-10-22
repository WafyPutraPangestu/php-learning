<?php

namespace Data;
class shape
{

    public function getCorner()
    {
        return 1110;
    }

}

class rectangle extends shape
{
    public function getCorner()
    {
        return 10;
    }
    public function getParentCorner()
    {
        return parent::getCorner();
    }
}

?>