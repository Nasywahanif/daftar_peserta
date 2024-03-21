<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $sekolah = $_POST['sekolah'];
    $no_handphone = $_POST['no_handphone'];
    $alamat = $_POST['alamat'];

    // buat query update
    $sql = "UPDATE calon_peserta SET nama='$nama', email='$email', sekolah='$sekolah', no_handphone='$no_handphone', alamat='$alamat' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-peserta.php
        header('Location: list-peserta.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan..."); 
    }


} else {
    die("Akses dilarang...");
}

?>