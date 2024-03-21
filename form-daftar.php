<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h3>Formulir Pendaftaran Peserta Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="email" />
        </p>
        <p>
            <label for="sekolah">Sekolah: </label>
            <input type="text" name="sekolah" placeholder="nama sekolah" />
        </p>
        <p>
            <label for="no_handphone">No.Handphone: </label>
            <input type="text" name="no_handphone" placeholder="no handphone" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>