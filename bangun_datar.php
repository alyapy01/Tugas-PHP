<?php
//Menghitung Luas Persegi
echo "Menghitung Luas Persegi";
echo "<hr>";

$sisi =10;
$luas_persegi = $sisi * $sisi;

echo "sisi = $sisi<br>";
echo "Luas persegi = $sisi x $sisi = $luas_persegi <br>";
echo "<br><br>";

//Menghitung Luas Persegi Panjang
echo "Menghitung Luas Persegi Panjang";
echo "<hr>";

$panjang = 25;
$lebar = 15;
$luas_persegi_panjang = $panjang * $lebar;

echo "panjang = $panjang<br>";
echo "lebar = $lebar<br>";
echo "Luas persegi panjang = $panjang x $lebar = $luas_persegi_panjang<br>";
echo "<br><br>";

//Menghitung Luas Segitiga
echo "Mengihitung Luas Segitiga";
echo "<hr>";

$alas = 16;
$tinggi = 10;
$luas_segitiga = 0.5 * $alas * $tinggi;

echo "alas = $alas<br>";
echo "tinggi = $tinggi<br>";
echo "Luas segitiga = 0.5 x $alas x $tinggi = $luas_segitiga<br>";
echo "<br><br>";

//Menghitung Luas Lingkaran
echo "Mengihitung Luas Lingkaran";
echo "<hr>";

$radius = 7;
$luas_lingkaran = 3.14 * ($radius ** 2);

echo "radius = $radius<br>";
echo "Luas lingkaran= 3.14 x ($radius x $radius) = $luas_lingkaran<br>";
echo "<br><br>";

//Menghitung Luas Trapesium
echo "Mengihitung Luas Trapesium";
echo "<hr>";

$sisi_atas = 5;
$sisi_bawah = 15;
$tinggi_trapesium = 8;
$luas_trapesium = 0.5 * ($sisi_atas + $sisi_bawah) * $tinggi_trapesium;

echo "sisi atas = $sisi_atas<br>";
echo "sisi bawah = $sisi_bawah<br>";
echo "tinggi trapesium = $tinggi_trapesium<br>";
echo "Luas Trapesium = 0.5 x ($sisi_atas + $sisi_bawah) x $tinggi_trapesium = $luas_trapesium<br>";
echo "<br><br>";
?>