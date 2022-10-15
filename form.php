<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
    <fieldset>
    <p>Formulir Biodata Mahasiswa</p>
    </fieldset>
    <form action="welcome.php" method="post">
        <fieldset>
        Nama: <input type="text" name="nama" required>
        <br><br>
        Umur: <input type="text" name="umur"required>
        <br><br>
        Gender : <br><input type="radio" name="gender" required>
        <label for="gender">Laki-laki</label><br>
        <input type="radio" name="gender" value="Perempuan">
        </table><label for="gender">Perempuan</label><br><br>
        Mabna : <input type="text" name="mabna" required>
        <br><br>
        E-Mail: <input type="text" name="email" required>
        <br><br>
        <input type="submit" name="submit">
        <input type="reset" name="reset">
        </fieldset>

    </form>
</body>
</html>