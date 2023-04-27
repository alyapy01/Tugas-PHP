<?php
//Menghitung Volume Kubus
echo "Menghitung Volume Kubus";
echo "<hr>";

$sisi =10;
$volume_kubus = $sisi ** 3;

echo "sisi = $sisi<br>";
echo "Volume kubus = $sisi x $sisi x $sisi = $volume_kubus <br>";
echo "<br><br>";

//Menghitung Volume Balok
echo "Menghitung Volume Balok";
echo "<hr>";

$panjang = 25;
$lebar = 15;
$tinggi = 5;
$volume_balok = $panjang * $lebar * $tinggi;

echo "panjang = $panjang<br>";
echo "lebar = $lebar<br>";
echo "tinggi = $tinggi<br>";
echo "Volume balok = $panjang x $lebar x $tinggi = $volume_balok<br>";
echo "<br><br>";

//Menghitung Volume Tabung
echo "Mengihitung Volume Tabung";
echo "<hr>";

$jari_jari = 7;
$tinggi_tabung = 15;
$volume_tabung = 3.14 * ($jari_jari ** 2) * $tinggi_tabung;

echo "jari-jari= $jari_jari<br>";
echo "tinggi tabung = $tinggi_tabung<br>";
echo "volume_tabung = 3.14 x ($jari_jari x $jari_jari) x $tinggi_tabung = $volume_tabung<br>";
echo "<br><br>";

?>