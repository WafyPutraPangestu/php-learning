<?php
namespace Data;

abstract class Animal
{
    public string $nama;

    abstract public function run():void;
}

class cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->nama is running". PHP_EOL;
    }
}
class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->nama is running". PHP_EOL;
    }
}
?>