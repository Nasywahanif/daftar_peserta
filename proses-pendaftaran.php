<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $sekolah = $_POST['sekolah'];
    $no_handphone = $_POST['no_handphone'];
    $alamat = $_POST['alamat'];

    // buat query
    $sql = "INSERT INTO calon_peserta (nama, email, sekolah, no_handphone, alamat) VALUE ('$nama', '$email', '$sekolah', '$no_handphone', '$alamat')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>