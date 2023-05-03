<?php
echo "<table border='1' cellspacing='0' >";
echo "<thead bgcolor='#0597F2'>";
echo "<th>No</th>";
echo "<th>Nama</th>";
echo "<th>Kelas</th>";
echo "</thead>";

echo "<tbody>";
for ($no = 1, $i = 1, $a = 10; $i <= 10, $a > 0; $no++, $i++, $a--) {
    if ($no % 2 == 1) {
        echo "<tr style='background-color:#e9e9e9;'>";
        echo "<td>$no</td>";
        echo "<td>Nama ke $i</td>";
        echo "<td>Kelas $a</td>";
        echo "</tr>";
    } else {
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>Nama ke $i</td>";
        echo "<td>Kelas $a</td>";
        echo "</tr>";
    }
}
echo "</tbody>";
echo "</table>";
