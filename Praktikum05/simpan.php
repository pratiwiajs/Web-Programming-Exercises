<?php
if (isset($_POST['submit'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tglLahir = $_POST['tgllhr'];
	$tempatLahir = $_POST['tmptlhr'];

	if (empty($nim) || empty($nama) || empty($tglLahir) || empty($tempatLahir)){
		echo "Tambahkan data melaui <a href='tambahdata.html'>form</a>";
	} 
	else {
	$namafile = "datamhs.dat";
	$datamhs = fopen($namafile, "a") or die("MAAF FILE TIDAK BISA DIBUKA");
	fwrite($datamhs, $nim."|");
	fwrite($datamhs, $nama."|");
	fwrite($datamhs, $tglLahir."|");
	fwrite($datamhs, $tempatLahir."\n");
	fclose($datamhs);
	echo "Terima Kasih! Data berhasil ditambahkan";
	}
} 
else {
	echo "Silahkan mengisi data terlebih dahulu melalui <a href='tambahdata.html'>form</a>";
}
?>