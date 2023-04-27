<?php
$nama = "Alya Putri Yoanda";
$nilai =95;
switch ($nilai){
    case ($nilai >= 90 && $nilai <= 100):
        $kategori = "A";
        break;
      case ($nilai >= 80 && $nilai < 90):
        $kategori = "B";
        break;
      case ($nilai >= 70 && $nilai < 80):
        $kategori = "C";
        break;
      case ($nilai >= 0 && $nilai < 70):
        $kategori = "D";
        break;
    }
    
    // tampilkan hasil
    echo "Halo, $nama. Nilai anda adalah $nilai, kategori nilai anda adalah $kategori.";
    ?>