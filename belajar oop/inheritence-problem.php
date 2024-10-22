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
public $waktu;

// ____________________________________________________________
// METHODE
// MEMPRESENTASIKAN PRILAKU DARI SEBUAH OBJECT
// FUNGCTION YANG ADA DI DALAM OBJECT
// SAMA SEPERTI FUNGCTION DALAM PHP, DITAMBAH DENGAN VISIBILITY DIDEPANNYA
public function __construct($nama, $alamat,$jenis_kelamin,$tingkat_sekolah,$waktu = 0){
    $this->nama = $nama;
    $this->alamat =$alamat;
    $this->jenis_kelamin =$jenis_kelamin;
    $this->tingkat_sekolah =$tingkat_sekolah;
    $this->waktu =$waktu;
}
public function getPelajar(){
    return "$this->alamat, $this->jenis_kelamin";
//     // HARUS MENGGUNAKAN $THIS KARENA DALAM FUNGCTION MALAH AKAN MENAMBAHKAN VARIABLE BARU 
 }
 public function GetInfoLengkap() {
    // Metode untuk mendapatkan informasi lengkap pelajar termasuk waktu
    $str = "{$this->nama} | {$this->getPelajar()}, {$this->tingkat_sekolah}, {$this->waktu} Tahun";
    return $str;
}
}

class CetakInfoPelajar {
    public function cetak(pelajar $pelajar){
        $str = " {$pelajar->nama} | {$pelajar->getPelajar()}, {$pelajar->tingkat_sekolah}";
        return ($str);
    } 
}
// ______________________________________________________

// OBJECT
// DIBAWAH INI ADALAH OBJECT
$pelajar1 = new pelajar("Wafy","ledug","Laki-Laki","SMK","3");
$pelajar2 = new pelajar("Rangga","jatake","Laki-Laki","SMP","3");
// $inpoPelajar = new CetakInfoPelajar();
// var_dump($pelajar1);
// var_dump($pelajar2);

// ___________________________
// MENAMPILKAN 
//__________________________________________ 
// echo "Pelajar1: " . $pelajar1->getPelajar();
// echo "<br>";
// echo "Pelajar2: " . $pelajar2->getPelajar();
// echo "<br>";
// echo $inpoPelajar1->cetak($pelajar1);
// echo "<br>";
// echo $inpoPelajar1->cetak($pelajar2);
echo $pelajar1->GetInfoLengkap();
echo "<br>";
echo $pelajar2->GetInfoLengkap();
?>