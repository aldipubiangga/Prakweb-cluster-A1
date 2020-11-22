<!DOCTYPE html>
<html>

<head>
    <title>Tugas 1</title>
</head>

<body>
    <?php

function faktorial($nilai)
{
    if ($nilai == 0 || $nilai == 1) {
        echo  $nilai . " = ";
        return 1;
    } else {
        echo $nilai . " x ";
        return $nilai * faktorial($nilai - 1);
    }
}

?>

    <form action="" method="POST">
        ======================================<br>
        <label for="angka">Masukkan Angka : </label><input type="text" name="angka" id="angka">
        <input type="submit" value="hitung">
        <br>======================================<br>
    </form>

    <?php
    if (isset($_POST['angka'])) {
        $angka = $_POST['angka'];
        echo $angka . "! : ";
        echo faktorial($angka);
    }
    ?>
</body>

</html>