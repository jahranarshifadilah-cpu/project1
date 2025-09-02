<?php

$totalBelanja = 600000;
$diskon       = 0;

if ($totalBelanja >= 500000) {
    $diskon = 0.20 * $totalBelanja;
} elseif ($totalBelanja >= 250000) {
    $diskon = 0.10 * $totalBelanja;
} else {
    $diskon = 0;
}

$totalBayar = $totalBelanja - $diskon;

echo "Total Belanja : Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
echo "Diskon        : Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total Bayar   : Rp " . number_format($totalBayar, 0, ',', '.');
?>