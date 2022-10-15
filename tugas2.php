<?php
$angka1 = 100;
$angka2 = 25;
$penjumlahan = $angka1 + $angka2;
$pengurangan = $angka1 - $angka2;
$perkalian = $angka1 * $angka2;
$pembagian = $angka1 / $angka2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center">Tugas IT INCUBATION DAY 2</h2>
    <h3 align="center"> Bilangan yang diinput = 100 dan 25</h3>
   <table border = "1" align="center">
    <tr>
        <td>Operasi</td>
        <td>Hasil</td>
    </tr>
    <tr>
        <td>100 + 25</td>
        <td><?php echo "$penjumlahan" ?></td>
    </tr>
    <tr>
        <td>100 - 25</td>
        <td><?php echo "$pengurangan" ?></td>
    </tr>
    <tr>
        <td>100 * 25</td>
        <td><?php echo "$perkalian" ?></td>
        <tr>
        <td>100 / 25</td>
        <td><?php echo "$pembagian" ?></td>
    </tr>
   </table> 
</body>
</html>