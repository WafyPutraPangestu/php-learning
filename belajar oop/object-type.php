<?php
class pelajar 
{
// bisa di simpan property dan methode
//PROPERTY
// UNTUK MEMPRESENTASIKAN DATA / KEADAAN DALAM SEBUAH OBJECT
public $nama ;
public $alamat;
public $jenis_kelamin;
public $tingkat_sekolah ;
// METHODE
// MEMPRESENTASIKAN PRILAKU DARI SEBUAH OBJECT
// FUNGCTION YANG ADA DI DALAM OBJECT
// SAMA SEPERTI FUNGCTION DALAM PHP, DITAMBAH DENGAN VISIBILITY DIDEPANNYA
public function __construct($nama, $alamat,$jenis_kelamin,$tingkat_sekolah){
    $this->nama = $nama;
    $this->alamat =$alamat;
    $this->jenis_kelamin = $jenis_kelamin;
    $this->tingkat_sekolah = $tingkat_sekolah;
}
public function getPelajar(){
    return "$this->alamat, $this->jenis_kelamin";
//     // HARUS MENGGUNAKAN $THIS KARENA DALAM FUNGCTION MALAH AKAN MENAMBAHKAN VARIABLE BARU 
 }
}

class CetakInfoPelajar {
    public function cetak(pelajar $pelajar){
        $str = " {$pelajar->nama} | {$pelajar->getPelajar()}, {$pelajar->tingkat_sekolah}";
        return ($str);
    } 
     
}


// OBJECT
// DIBAWAH INI ADALAH OBJECT
$pelajar1 = new pelajar("Wafy","ledug","Laki-Laki","SMK");
// var_dump($pelajar1);

$pelajar2 = new pelajar("Rangga","jatake","Laki-Laki","SMP");
// var_dump($pelajar2);

echo "Pelajar1: " . $pelajar1->getPelajar();
echo "<br>";
echo "Pelajar2: " . $pelajar2->getPelajar();
echo "<br>";
$inpoPelajar1 = new CetakInfoPelajar();
echo $inpoPelajar1->cetak($pelajar1);
echo "<br>";
echo $inpoPelajar1->cetak($pelajar2);


?>