<?php
$i = 1; //inisialisasi variabel '$i' dengan nilai 1
while ($i <= 10) { //Kondisi loop adalah $i <= 10, yang berarti loop akan berjalan selama nilai $i kurang dari atau sama dengan 10.
    $total = $i * 1; 
    //Ini adalah operasi perkalian variabel $i dengan 1, dan hasilnya disimpan dalam variabel $total
    echo "1 x $i = $total <br>"; $i++;
    //mencetak hasil perkalian 1 dengan '$1'. Setiap iterasi, $i akan bertambah 1.
    //perintah echo "<br>" untuk membuat baris baru setiap kali looping for pertama dijalankan.
}
?>