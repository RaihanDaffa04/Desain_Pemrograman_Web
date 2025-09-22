<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

array_shift($nilaiSiswa);
array_shift($nilaiSiswa);

array_pop($nilaiSiswa);
array_pop($nilaiSiswa);

$totalNilai = array_sum($nilaiSiswa);

$rataRata = $totalNilai / count($nilaiSiswa);

echo "Total nilai setelah buang 2 tertinggi & 2 terendah: $totalNilai <br>";
echo "Rata-rata nilai: $rataRata";

echo "<br>";

$hargaProduk = 120000;
$diskon = 0;
$hargaAkhir = $hargaProduk;

if ($hargaProduk > 100000) {
    $diskon = $hargaProduk * 0.20;
    $hargaAkhir = $hargaProduk - $diskon;
}

echo "Harga produk: Rp " . $hargaProduk . "<br>";
echo "Diskon: Rp " . $diskon . "<br>";
echo "Harga yang harus dibayar: Rp " . $hargaAkhir;

echo "<br>";

$poin = 550;
echo "Total skor pemain adalah: $poin<br>";

$hadiah = ($poin > 500) ? "YA" : "TIDAK";

echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah";
?>
