<?php

$umur = 20;
$punyaKTP = true;

// && keduanya harus bernilai true
if ($umur >= 17 && $punyaKTP == true) {
    echo "Boleh membuat SIM";
} else {
    echo "Tidak boleh membuat SIM";
}

echo "<br>";

// || salah satu harus bernilai true
$hari = "sabtu";
if ($hari == "sabtu" || $hari == "minggu") {
    echo "Hari libur";
} else {
    echo "Hari kerja";
}

echo "<br>";

// ! untuk negasi (kebalikan)
$login = false;

var_dump("status login: " , !$login);
?>