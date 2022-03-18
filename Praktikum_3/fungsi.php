<?php
// cara membuat fungsi 
function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;
}

echo'Hasilnya adalah : '. luaspersegi(10);
echo'<br>';

// fungsi nama
function nama(){
    echo'Nama saya adalah Elsa Amelia';
}

nama();
echo'<br>';
// fungsi menggunakan parameter
function perkenalan($nama){
    echo'Perkenalkan nama saya : '. $nama;
}
perkenalan('Elsa');
?>