<?php

    function hitungDenda($tglHarusKembali, $tglKembali)
    {
        $tgl1 = explode("-", $tglHarusKembali);
        $tgl2 = explode("-", $tglKembali);

        $year1 = $tgl1[0];
        $month1 = $tgl1[1];
        $date1 = $tgl1[2];

        $year2 = $tgl2[0];
        $month2 = $tgl2[1];
        $date2 = $tgl2[2];

        $h1 = gregoriantojd($month1,$date1,$year1);
        $h2 = gregoriantojd($month2,$date2,$year2);

        $selisih = $h2 - $h1;

        $denda = 3000;
        return $selisih * $denda;
    }

    echo "Denda yang harus dibayarkan sejumlah: Rp.", hitungDenda("2021-01-01", "2021-01-04"),",-";

?>
