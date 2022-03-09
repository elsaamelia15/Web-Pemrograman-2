<?php

// Membuat if else
$nilai = 90;

if ($nilai >= 85 && $nilai <= 100) {
    echo 'Nilai Anda : A';
} elseif ($nilai >= 70 && $nilai <= 84) {
    echo 'Nilai Anda : B';
} elseif ($nilai >= 56 && $nilai <= 69) {
    echo 'Nilai Anda : C';
} elseif ($nilai >= 36 && $nilai <= 55) {
    echo 'Nilai Anda : D';
} elseif ($nilai >= 0 && $nilai <= 35) {
    echo 'Nilai Anda : E';
} else {
    echo 'Nilai Anda : I';
};


// Menggunakan syntax switch

switch ($nilai) {
    case $nilai >= 85 && $nilai <= 100:
        echo 'Sangat Memuaskan';
        break;
    case $nilai >= 70 && $nilai <= 84:
        echo 'Memuaskan';
        break;
    case $nilai >= 56 && $nilai <= 69:
        echo 'Cukup';
        break;
    case $nilai >= 36 && $nilai <= 55:
        echo 'Kurang';
        break;
    case $nilai >= 0 && $nilai <= 35:
        echo 'Sangat Kurang';
        break;
    default:
        echo 'Tidak Ada';
        break;
}