<?php
class Person {

    const AUTHOR = "Khanaiya Putri Andhitia";

    var string $nama;
    var int $umur;  
    var string $alamat;

    function __construct(string $namaKonstruktor, ?string $alamatKonstruktor)
    {
        $this->nama = $namaKonstruktor;
        $this->alamat = $alamatKonstruktor;
    }
    
    function sayHello(?string $nama)
    {
     if (is_null($nama)){
        echo "halo, nama saya $this->nama" . PHP_EOL;
     }else {
        echo "hallo $nama, nama saya $this->nama" . PHP_EOL;
     }   
    }

    function info(){
        echo "AUTHOR :" . self::AUTHOR . PHP_EOL;
    }
    function echoKonstruktorProperti () {
        echo "nama: " . $this->nama . " alamat: " . $this->alamat;
    }
};



?>