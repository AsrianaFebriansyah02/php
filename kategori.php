<?php

$nama = 'Febriansyah';
$tinggi = '160';
$berat = '41';

//menghitung BMI
$bmi_hasil = $berat / ($tinggi / 100 * $tinggi / 100);

//menentukan kategori BMI
if ($bmi_hasil < 18.5) {
    $kategori = "kurus";
} elseif ($bmi_hasil >= 18.5 && $bmi_hasil <= 24.9) {
    $kategori = "sedang";
} elseif ($bmi_hasil >= 25 && $bmi_hasil <= 29.9) {
    $kategori = "gemuk";
} else {
    $kategori = "obesitas";
}

//menampilkan hasil
echo "Halo, " . $nama . ". Nilai BMI anda adalah " . $bmi_hasil . ". Anda termasuk " . $kategori . ".";
