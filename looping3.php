<?php
for ($i = 0; $i < 10; $i++) {
    // perulangan  pertama dimulai dari variabel $i yang diinisialisasikan dengan nilai 0, 
    //kemudian perulangan akan terus dijalankan selama nilai $i kurang dari 10,  
    //perulangan akan terus berlanjut dan variabel $i akan ditambah 1 setiap kali loop berakhir.
    for ($j = 0; $j < $i; $j++) {
        // perulangan  kedua dimulai dari variabel $j yang diinisialisasikan dengan nilai 0, 
        //kemudian perulangan akan terus dijalankan selama nilai $j kurang dari $i,  
        //perulangan akan terus berlanjut dan variabel $i akan ditambah 1 setiap kali loop berakhir.
        echo $j . " ";
        //Pada setiap perulangan kedua, program mencetak nilai dari variabel $j
    }
    echo "<br/>";
    //Setelah perulangan kedua selesai, program mencetak tag HTML <br/> untuk pindah ke baris berikutnya.
}
