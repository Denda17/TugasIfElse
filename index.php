<?php
// $nilai = 55; 

// if ($nilai >= 85 && $nilai <= 100) {
//     $peringkat = "A";
// } elseif ($nilai >= 75 && $nilai <= 84) {
//     $peringkat = "B";
// } elseif ($nilai >= 60 && $nilai <= 74) {
//     $peringkat = "C";
// } elseif ($nilai >= 50 && $nilai <= 59) {
//     $peringkat = "D";
// } elseif ($nilai >= 0 && $nilai <= 49) {
//     $peringkat = "E";
// } else {
//     $peringkat = "Nilai tidak valid";
// }

// echo "Nilai: $nilai" . "\n";
// echo "Peringkat Huruf: $peringkat";

function getGrade(int $nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        $getGrade = "A";
    } elseif ($nilai >= 75 && $nilai <= 84) {
        $getGrade = "B";
    } elseif ($nilai >= 60 && $nilai <= 74) {
        $getGrade = "C";
    } elseif ($nilai >= 50 && $nilai <= 59) {
        $getGrade = "D";
    } elseif ($nilai >= 0 && $nilai <= 49) {
        $getGrade = "E";
    } else {
        $getGrade = "Nilai tidak valid";
    }

    return $getGrade;
}

$peringkat  = "Nilai 100 → " . getGrade(100) . "\n";
$peringkat .= "Nilai 80 → " . getGrade(80) . "\n";
$peringkat .= "Nilai 70 → " . getGrade(70) . "\n";
$peringkat .= "Nilai 59 → " . getGrade(59) . "\n";
$peringkat .= "Nilai 45 → " . getGrade(45) . "\n";
$peringkat .= "Nilai -80 → " . getGrade(-80) . "\n";

echo $peringkat;