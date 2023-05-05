<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 style='background-color:yellow;'> Data Nilai</h2>
    <center>
        <table border=1 cellspacing=0 width=700 height=300>
            <thead>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Kelas</th>
                <th>Nilai</th>
                <th>Hasil</th>
            </thead>

            <?php
            // mengambil data JSON dari file atau URL
            $data = file_get_contents('data.json');
            // mengubah data JSON menjadi array asosiatif
            $data = json_decode($data, true);
            $no =  1;

            foreach ($data as $siswa) {
            ?>
                <tr style=text-align:center>
                    <td> <?php echo $no ?></td>
                    <td><?php echo $siswa['nama']; ?></td>
                    <td><?php echo $siswa['tanggal_lahir']; ?></td>
                    <td><?php echo $siswa['umur']; ?></< /td>
                    <td><?php echo $siswa['alamat']; ?></td>
                    <td><?php echo $siswa['kelas']; ?></td>
                    <td><?php echo $siswa['nilai']; ?></td>
                    <td>
                        <?php
                        if ($siswa["nilai"]  >= 90 && $siswa["nilai"] <= 100) {
                            echo "A";
                        } elseif ($siswa["nilai"] >= 80 && $siswa["nilai"] < 90) {
                            echo "B";
                        } elseif ($siswa["nilai"] >= 70 && $siswa["nilai"] < 80) {
                            echo "C";
                        } else {
                            echo "D";
                        } ?>
                    </td>

                </tr>
            <?php
                $no++;
            }
            ?>

        </table>
    </center>
</body>

</html>