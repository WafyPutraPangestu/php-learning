<?php
class Category
{
    private string $nama;
    private $expensiv;

    public function getName():string
    {
        return $this->nama;

    }
    public function setName(string $nama):void
    {
        if (trim($nama) !="") {
            $this->nama = $nama;
        }
        
    }

    public function isExpensiv():bool
    {
        return $this->expensiv;
    }

    public function setExpensiv(bool $expensiv):void
    {
        $this->expensiv = $expensiv;
    }
}
?>