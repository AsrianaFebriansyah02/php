<?php
for ($i = 1; $i <= 9; $i++) {
     // perulangan  pertama dimulai dari variabel $i yang diinisialisasikan dengan nilai 1, 
    //kemudian perulangan akan terus dijalankan selama nilai $i kurang dari atau sama dengan 9,  
    //perulangan akan terus berlanjut dan variabel $i akan ditambah 1 setiap kali loop berakhir.
    for ($j = $i; $j <= 9; $j++) {
         //perulangan kedua yang dimulai dengan variabel $j sama dengan $i. 
        //Selama nilai $j kurang dari atau sama dengan 9, perulangan akan terus berlanjut.
        //dan variabel $j akan ditambah 1 setiap kali loop berakhir.
        echo "* ";
        //Pada setiap perulangan kedua, program mencetak karakter bintang (*) pada layar
    }
    echo "<br/>";
    //Setelah perulangan kedua selesai, program mencetak tag HTML <br/> untuk pindah ke baris berikutnya.
}
