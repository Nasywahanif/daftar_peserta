<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h3>Peserta yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a> 
        <a href="index.php" class="d-block mt-3">Back to Home</a> 
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Sekolah</th>
            <th>No.Handphone</th>
            <th>Alamat</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_peserta";
        $query = mysqli_query($db, $sql);

        while($peserta = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$peserta['id']."</td>";
            echo "<td>".$peserta['nama']."</td>";
            echo "<td>".$peserta['email']."</td>";
            echo "<td>".$peserta['sekolah']."</td>";
            echo "<td>".$peserta['no_handphone']."</td>";
            echo "<td>".$peserta['alamat']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$peserta['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$peserta['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
   
    </body>
</html>