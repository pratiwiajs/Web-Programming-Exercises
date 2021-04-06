<?php
function hitungGaji($gol, $masaKerja){
	if ($gol == "A") {
		if($masaKerja < 10){
			$gaji = 5000000;
		}else {
			$gaji = 7000000;
		}
	}else if ($gol == "B"){
		if($masaKerja < 10){
			$gaji = 6000000;
		}else {
			$gaji = 8000000;
		}
	}
	return $gaji;
}
echo "Gaji karyawan golongan A, masa kerja 3 tahun sebesar Rp " .hitungGaji("A", 3). ",- <br>";
echo "Gaji karyawan golongan A, masa kerja 10 tahun sebesar Rp " .hitungGaji("A", 10). ",- <br>";
echo "Gaji karyawan golongan B, masa kerja 1 tahun sebesar Rp " .hitungGaji("B", 1). ",- <br>";
echo "Gaji karyawan golongan B, masa kerja 20 tahun sebesar Rp " .hitungGaji("B", 20). ",- <br>";
?>


