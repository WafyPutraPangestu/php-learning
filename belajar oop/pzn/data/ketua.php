<?php
class Ketua 
{

    var string $nama;

    function sayHello(string $nama): void
    {
        echo "hi $nama, nama saya ketua $this->nama  ". PHP_EOL;
    }
}

class wakilKetua extends Ketua
{

    function sayHello(string $nama): void
    {
        echo "hi $nama, nama saya wakil ketua $this->nama  ". PHP_EOL;
    }
}
?>