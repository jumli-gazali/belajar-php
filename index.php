<?php //wajib tag pembuka, tag penutup tidak wajib

//variabel 
//loose type = tidak terikat type data
$mahasiswa = 'Andi'; //'' dan "" sama
$usia = 20;
 //type juggling = mengubah tipe data
 $mahasiswa = 'Jumli'; //re-assign

echo $mahasiswa; //menampilkan variabel (statement)
echo ('mahasiswa'); //menampilkan variabel (function)

//konstanta = tidak bisa diubah
const FAKULTAS_TEKNIK = 'Teknik';
echo FAKULTAS_TEKNIK;

define('Prodi', 'Informatika');
echo Prodi;

//Array
//1 dimensi
$students = array();
$lectures = [
    "Andi", "Jumli", 12
];
echo $lectures[1];

//2 dimensi
$students = [
        "nama" => "Andi",
        "usia" => 20,
        "kampus" => "unib"
];
echo $students["alamat"];

//multi dimensi
$students3 = [
        
            "nama" => "Andi",
            "usia" => 20,
            "kampus" => "unib",
            "alamat" => [
                "jalan" => "jalan",
                "kota" => "kota",
                "provinsi" => "provinsi",
            ],
];
echo $students3["alamat"]["kota"];