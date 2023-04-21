	<?php
	$nama = 'Asriana';
	$nilai = '80';

	//menentukan kategori nilai
	if ($nilai >= 90 && $nilai <= 100) {
		$kategori = "A";
	} elseif ($nilai >= 80 && $nilai < 90) {
		$kategori = "B";
	} elseif ($nilai >= 70 && $nilai < 80) {
		$kategori = "C";
	} else {
		$kategori = "D";
	}

	//menampilkan hasil
	echo "Halo, " . $nama . ". Nilai anda adalah " . $nilai . ". Kategori nilai anda adalah " . $kategori . ".";
	?>
