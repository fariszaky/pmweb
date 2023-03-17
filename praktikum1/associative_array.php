<?php
$profileArray = [
    "nama" => "Faris",
    "kelas" => "TI11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"];

echo "<br>";

$profileMultiArray = [
    [
        "nama" => "Faris",
        "semester" => 4
    ], [
        "nama" => "Fauzi",
        "semester" => 7
    ], [
        "nama" => "Paul",
        "semester" => 2
    ]
];

foreach($profileMultiArray as $profile){
    echo $profile ['nama'] . "<br>";
    echo $profile ['semester']. "<br>";
}
