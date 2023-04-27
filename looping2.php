<?php
    for($i=10; $i >1; $i--){// looping for untuk baris ke bawah. Dimana memulai looping for dengan variabel $i yang dimulai dari 10, nilai $i akan berkurang satu per satu hingga mencapai 1.
        for($a=1; $a < $i; $a++){ // looping untuk menampilkan bintang. Dimana memulai looping for kedua dengan variabel $a yang dimulai dari 1, nilai $a akan bertambah satu per satu hingga mencapai nilai $i.
            echo "*"; //perintah echo untuk menampilkan bintang (*) setiap kali looping for kedua dijalankan.
        }
        echo "<br>"; // untuk membuat baris baru setiap kali looping for pertama dijalankan.
    }
?>