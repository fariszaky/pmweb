<?php
$arrayBuah =["Jeruk","Mangga","Pisang","Apel"];

// mengurutkan nilai suatu array
sort($arrayBuah);

// menghapus nilai array yang paling akhir
array_pop($arrayBuah);


// menghapus keseluruhan isi variabek
// bisa juga menghapus spesifikasi nilai variabel tertentu
unset($arrayBuah[1]);

// untuk menambahkan nilai array paling belakang
array_push($arrayBuah, "Durian");

// menghapus nilai array yang paling depan/awal
array_shift($arrayBuah);

// menambahkan nilai array di paling depan
array_unshift($arrayBuah, "Semangka", "Buah Naga");

// menghapus spesifik nilai array tertentu
$arrayBuah[0] = "Manggis";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}