<?php
// membuat array
$arrayBuah =["Jeruk","Mangga","Pisang","Apel"];

print_r($arrayBuah);

var_dump($arrayBuah);
echo "<br>";
var_dump($arrayBuah);
echo "<br>";
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}
echo "<br>";
echo $arrayBuah[0];
