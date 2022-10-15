<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Selamat Datang <?php echo $_POST["nama"]; ?><br>
    Umurmu adalah <?php echo $_POST["umur"]; ?><br>
    Gender anda <?php echo $_POST["gender"]; ?><br>
    Anda tinggal di mabna <?php echo $_POST["mabna"]; ?><br>
    Kami akan mengirim sesuatu ke email <?php echo $_POST["email"]; ?><br>
</body>
</html>