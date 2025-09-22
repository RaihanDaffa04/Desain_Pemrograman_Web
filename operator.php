<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah: $hasilTambah <br>";
echo "Hasil Kurang: $hasilKurang <br>";
echo "Hasil Kali: $hasilKali <br>";
echo "Hasil Bagi: $hasilBagi <br>";
echo "Sisa Bagi: $sisaBagi <br>";
echo "Pangkat: $pangkat <br>";

echo "<br>";

$hasilSama           = $a == $b;
$hasilTidakSama      = $a != $b;
$hasilLebihKecil     = $a < $b;
$hasilLebihBesar     = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Apakah a == b? : "; var_dump($hasilSama); echo "<br>";
echo "Apakah a != b? : "; var_dump($hasilTidakSama); echo "<br>";
echo "Apakah a < b?  : "; var_dump($hasilLebihKecil); echo "<br>";
echo "Apakah a > b?  : "; var_dump($hasilLebihBesar); echo "<br>";
echo "Apakah a <= b? : "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "Apakah a >= b? : "; var_dump($hasilLebihBesarSama); echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";

echo "Nilai a = " . ($a ? "true" : "false") . "<br>";
echo "Nilai b = " . ($b ? "true" : "false") . "<br>";
echo "a AND b = " . ($hasilAnd ? "true" : "false") . "<br>";
echo "a OR b = " . ($hasilOr ? "true" : "false") . "<br>";
echo "NOT a = " . ($hasilNotA ? "true" : "false") . "<br>";
echo "NOT b = " . ($hasilNotB ? "true" : "false") . "<br>";

$a = 10;
$b = 5;

echo "<br>";

echo "Nilai awal: a = $a, b = $b <br>";

$a += $b;
echo "a += b → $a <br>";
$a -= $b;
echo "a -= b → $a <br>";
$a *= $b;
echo "a *= b → $a <br>";
$a /= $b;
echo "a /= b → $a <br>";
$a %= $b;
echo "a %= b → $a <br>";

echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "\$a === \$b → " . ($hasilIdentik ? "true" : "false") . "<br>";
echo "\$a !== \$b → " . ($hasilTidakIdentik ? "true" : "false") . "<br>";

$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;

$persenKosong = ($kursiKosong / $totalKursi) * 100;

echo "<br>";

echo "Total kursi: " . $totalKursi . "<br>";
echo "Kursi terisi: " . $kursiTerisi . "<br>";
echo "Kursi kosong: " . $kursiKosong . "<br>";
echo "Persentase kursi kosong: " . $persenKosong . "%";
?>