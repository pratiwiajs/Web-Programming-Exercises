<?php
$baris = 4;
$kolom = 5;
$nomor = 1;
echo "<table border='1'>";
for($i =1; $i <= $baris; $i++){
 	echo "<tr>";
 	for ($j = 0; $j < $kolom; $j++){
 		echo "<td>$nomor</td>";
 		$nomor = $nomor + 1;
 	}
  	echo "</tr>";
}
echo "</table>";
?>