<?php 
// class orang 
// {
//     var $nama;
//     var $negara;
//     var $alamat;
// }
// // class orang: Ini adalah deklarasi kelas dengan nama orang.
// // var $nama;, var $negara;, var $alamat;: Ini adalah deklarasi variabel atau properti dari kelas orang. 
// // Properti ini adalah atribut yang dapat dimiliki oleh setiap objek dari kelas orang.



// // manipulasi properties
// // PROPERTIS

// $person= new orang();
// // $person = new orang();: Ini membuat sebuah objek baru dari kelas orang dan menyimpannya dalam variabel $person.

// $person->nama = "wafy";
// $person->negara = "Indonesia";
// $person->alamat = "Tangerang";
// // _____________________________
// // $person->nama = "wafy";: Ini menetapkan nilai properti nama dari objek $person menjadi "wafy".
// // $person->negara = "Indonesia";: Ini menetapkan nilai properti negara dari objek $person menjadi "Indonesia".
// // $person->alamat = "Tangerang";: Ini menetapkan nilai properti alamat dari objek $person menjadi "Tangerang".


// echo "Nama: " . $person->nama . "<br>";
// echo "Negara: " . $person->negara . "<br>";
// echo "Alamat: " . $person->alamat . "<br>";



class pelajar 
{
// bisa di simpan property dan methode
//PROPERTY
// UNTUK MEMPRESENTASIKAN DATA / KEADAAN DALAM SEBUAH OBJECT
public $nama;
public $alamat ;
public $jenis_kelamin ;
public $tingkat_sekolah ;
// METHODE
// MEMPRESENTASIKAN PRILAKU DARI SEBUAH OBJECT
// FUNGCTION YANG ADA DI DALAM OBJECT
// SAMA SEPERTI FUNGCTION DALAM PHP, DITAMBAH DENGAN VISIBILITY DIDEPANNYA
public function getPelajar(){
    return "$this->nama, $this->alamat,$this->jenis_kelamin,$this->tingkat_sekolah";
    // HARUS MENGGUNAKAN $THIS KARENA DALAM FUNGCTION MALAH AKAN MENAMBAHKAN VARIABLE BARU 
}
}


// OBJECT
// DIBAWAH INI ADALAH OBJECT
$pelajar1 = new pelajar("Wafy", "Ledug", "Laki-Laki", "SMA");
$pelajar1->nama = "wafy";
$pelajar1->alamat = "Ledug";
$pelajar1->jenis_kelamin = "Laki-Laki";
$pelajar1->tingkat_sekolah = "SMA";

// var_dump($pelajar1);

$pelajar2 = new pelajar("Rangga", "Jatake", "Laki-Laki", "SMP");
$pelajar2->nama ="rangga";
$pelajar2->alamat ="jatake";
$pelajar2->jenis_kelamin ="Laki-Laki";
$pelajar2->tingkat_sekolah ="SMP";
// var_dump($pelajar2);

// echo "pelajar1: $pelajar1->nama,alamat: $pelajar1->alamat<br>";
// echo "pelajar2: $pelajar2->nama, $pelajar2->alamat";
echo "Pelajar1: " . $pelajar1->getPelajar() . "<br>";
echo "Pelajar2: " . $pelajar2->getPelajar();
?>