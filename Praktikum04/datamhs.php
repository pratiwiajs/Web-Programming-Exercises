
<br><center><b>DATA MAHASISWA</b></center></br>
<center><table border=1> 
    <center><tr>
        <td>No.</td>
        <td>NIM</td>
        <td>Nama Mhs</td>
        <td>Tanggal Lahir</td>
        <td>Tempat Lahir</td>
        <td>Usia</td>
    </tr> </center>
    <center><?php
        $namaFile="datamhs.dat";
        $myfile=fopen($namaFile,"r") or die("Tidak bisa membuka file");
        $day= new DateTime("today");
        $no=1;
        while(!feof($myfile)){
            $data=fgets($myfile);
            $exp=explode("|",$data);
            $lahir=new DateTime($exp[2]);
            $usia=$day->diff($lahir)->y;
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$exp[0]</td>";
            echo "<td>$exp[1]</td>";
            echo "<td>$exp[2]</td>";
            echo "<td>$exp[3]</td>";
            echo "<td>$usia tahun</td>";
            echo "<tr>";
            $no++;
        }
        fclose($myfile);
    ?> </center>
</table> </center>
<center><?php
    $jumlah=count(file($namaFile));
    echo "<br>";
    echo "Jumlah Data: $jumlah"; 
?> </center>