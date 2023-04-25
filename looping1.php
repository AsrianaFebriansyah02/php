<?php
for ($i = 1; $i <= 10; $i++) {
    //Ini merupakan perulangan for yang akan dijalankan sebanyak 10 kali, 
    //dimulai dari variabel $i yang diinisialisasikan dengan nilai 1, 
    //kemudian perulangan akan terus dijalankan selama nilai $i kurang dari atau sama dengan 10,  
    //dimana setiap kali perulangan dilakukan $i akan ditambahkan dengan 1($++)
    $total = $i * 1; 
    //Ini adalah operasi perkalian variabel $i dengan 1, dan hasilnya disimpan dalam variabel $total
    echo "1 x $i = $total <br>"; 
    //Ini mencetak hasil perkalian 1 x $i dan hasilnya adalah variabel ($total).
    //Tag HTML <br> digunakan untuk memberi jeda baris setelah setiap baris hasil perkalian.
}

