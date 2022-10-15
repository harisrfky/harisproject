<?php
$barangdikamar = array ("kasur,", "lemari,", "kaca,", "meja.");
$identitas = array ("nama" => "Muhammad Haris", "prodi"=>"Informatika");
$biodata = [
    'nama' => 'Haris',
    'mail' => 'haris.example.com',
    'phone' => '082111112222',
    'hobi' => ['football', 'tennis'],
    'favoritefood' => ['soto', 'nasgor']
];

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
     <!--Indexed Array-->
    <b><?php echo "1. Indexded Array"?></b>
    <br>
    <?php echo "Barang-barang yang ada dikamar ="?>
    <?php echo "$barangdikamar[0]"?>
    <?php echo "$barangdikamar[1]"?>
    <?php echo "$barangdikamar[2]"?>
    <?php echo "$barangdikamar[3]"?>
    <br><br><br>
    <!--Associative Array-->
    <b><?php echo "2. Associative Array"?></b>
    <br>
    <?php echo "Nama ="?>
    <?php echo "$identitas[nama]"?>
    <br>
    <?php echo "Program Studi ="?>
    <?php echo "$identitas[prodi]"?>
    <br><br><br>
    <!--Multidimensional Array-->
    <b><?php echo "3. Multidimensional Array"?></b>
    <br>
    <?php echo "Biodataku"?>
    <br>
    <?php echo "Nama ="?>
    <?php echo $biodata['nama'];?>
    <br>
    <?php echo "Email ="?>
    <?php echo $biodata['mail'];?>
    <br>
    <?php echo "No. Telp ="?>
    <?php echo $biodata['phone'];?>
    <br>
    <?php echo "Hobi ="?>
    <?php echo $biodata['hobi'][0];?>
    <br>
    <?php echo "Makanan Favorit ="?>
    <?php echo $biodata['favoritefood'][1];?>
</body>
</html>