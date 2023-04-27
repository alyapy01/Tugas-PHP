<?php
// ambil data input dari form
$nama = "Alya Putri Yoanda";
$tinggi_badan = 160;
$berat_badan = 50;

// hitung nilai BMI
$tinggi_badan_meter = $tinggi_badan / 100;
$bmi = $berat_badan / ($tinggi_badan_meter ** 2);

// tentukan kategori BMI
if ($bmi < 18.5) {
  $kategori = "kurus";
} else if ($bmi >= 18.5 && $bmi <= 24.9) {
  $kategori = "normal";
} else if ($bmi >= 25 && $bmi <= 29.9) {
  $kategori = "gemuk";
} else {
  $kategori = "obesitas";
}

// tampilkan hasil
echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk $kategori.";
?>
