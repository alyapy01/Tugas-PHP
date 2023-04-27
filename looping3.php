<?php
    for($i=0; $i < 10; $i++){ // looping untuk baris ke bawah. Dimana memulai looping for dengan variabel $i yang dimulai dari 0, nilai $i akan bertambah satu per satu hingga mencapai 10. 
        for($a=0; $a < $i; $a++){ // looping untuk menampilkan angka. Dimana memulai looping for kedua dengan variabel $a yang dimulai dari 0, nilai $a akan bertambah satu per satu hingga mencapai nilai $i.
            echo $a; //perintah echo untuk menampilkan angka ($a) setiap kali looping for kedua dijalankan.
        }
        echo "<br>"; //perintah echo "<br>" untuk membuat baris baru setiap kali looping for pertama dijalankan.
    }
?>