<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-peserta.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_peserta WHERE id=$id";
$query = mysqli_query($db, $sql);
$peserta = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
    <header>
        <h3>Formulir Edit Peserta</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $peserta['id'] ?>" />

            <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $peserta['nama'] ?>"/>
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="email" value="<?php echo $peserta['email'] ?>"/>
        </p>
        <p>
            <label for="sekolah">Sekolah: </label>
            <input type="text" name="sekolah" placeholder="nama sekolah" value="<?php echo $peserta['sekolah'] ?>"/>
        </p>
        <p>
            <label for="no_handphone">No.Handphone: </label>
            <input type="text" name="no_handphone" placeholder="no handphone" value="<?php echo $peserta['no_handphone'] ?>"/>
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"><?php echo $peserta['alamat'] ?></textarea>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>