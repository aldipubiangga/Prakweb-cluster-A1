<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil</title>
</head>
<body>
    <p> Berikut merupakan hasil dari setiap operasi </p>
    <br>
    <?php

    $bilangan1 = $_GET ['bilangan1'];
    $bilangan2 = $_GET ['bilangan2'];
    $penjumlahan = $bilangan1 + $bilangan2;
    $pengurangan = $bilangan1 - $bilangan2;
    $perkalian = $bilangan1 * $bilangan2;
    $pembagian = $bilangan1 / $bilangan2;

    echo "Hasil Penjumlahan : ",$penjumlahan;
    echo "<br>","<br>";
    echo "Hasil Pengurangan : ",$pengurangan;
    echo "<br>","<br>";
    echo "Hasil Perkalian : ",$perkalian;
    echo "<br>","<br>";
    echo "Hasil Pembagian: ",$pembagian;
    echo "<br>","<br>";
    ?>
</body>
</html>