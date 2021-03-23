<?php
$baris = 4;
$kolom = 5;
$nomor = 1;
echo "<table border='1'>";
for ($j = 1; $j < 5; $j++){
 	echo "<tr>";
 	for ($k = 1; $k < 6; $k++){
 		if($nomor % 2 != 0){
			echo "<td bgcolor = 'white'><font color = 'red'>".$nomor."</font></td>";
		} else {
			echo "<td bgcolor = 'red'><font color = 'white'>".$nomor."</font></td>";
		}
		$nomor++;
 	}
  	echo "</tr>";
}
echo "</table>";
?>