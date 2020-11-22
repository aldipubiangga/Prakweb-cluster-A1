<?php

function hitung_harga($nama, $warna)
{
    $namaa = strlen($nama);
    if ($namaa > 0 && $namaa <= 10) {
        $harga = 300;
        $hasil = $namaa * $harga;
        cetak($hasil, $nama, $warna);
    } elseif ($namaa >= 11 && $namaa <= 20) {
        $harga = 500;
        $hasil = $namaa * $harga;
        cetak($hasil, $nama, $warna);
    } elseif ($namaa > 20) {
        $harga = 700;
        $hasil = $namaa * $harga;
        cetak($hasil, $nama, $warna);
    }
}

function cetak($hasil, $nama, $warna)
{   
    $warnaa = strlen($warna);
        if( $warnaa == 0 ){
            $warna = "merah";
    }echo "<br>"."Nama bet = " . $nama . "<br>" .
          "<br>"."Harga bet = " . "Rp. " . $hasil . "<br>" .
          "<br>"."Warna font = " . $warna;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Tugas 2</title>
</head>

<body>
    <h3>Hitung harga bet</h3>
    <form action="" method="POST">
        <label for="name">Nama : </label><input type="text" name="nama" id="name" required><br>
        <br><label for="color">Warna font : </label><input type="text" name="warna" id="color" ><br>
        <br><input type="submit" name="submit" value="Hitung Harga">
    </form><br>

<?php
   
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $warna = $_POST['warna'];
        hitung_harga($nama, $warna);
    }

?>
</body>

</html>
