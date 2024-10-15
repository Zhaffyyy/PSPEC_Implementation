<?php
define('PI', 3.14);

function hitungLuasLingkaran($r) {
    return PI * $r * $r;
}

$jariJari = readline("Masukkan jari-jari lingkaran: ");
$luas = hitungLuasLingkaran($jariJari);
echo "Luas lingkaran: " . number_format($luas, 2) . "\n";
?>
