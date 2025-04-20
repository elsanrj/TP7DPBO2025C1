<?php
require_once 'class/Mahasiswa.php';
require_once 'class/Dosen.php';
require_once 'class/MatKul.php';
require_once 'class/PengambilanMatkul.php';

$mahasiswa = new Mahasiswa();
$dosen = new Dosen();
$matkul = new Matkul();
$pengambilan = new PengambilanMatkul();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistem Akademik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'view/header.php'; ?>
    <main>
        <h2>Selamat Datang di Sistem Akademik</h2>
        <nav>
            <a href="?page=mahasiswa">Mahasiswa</a> |
            <a href="?page=dosen">Dosen</a> |
            <a href="?page=matkul">Mata Kuliah</a> |
            <a href="?page=pengambilan">Pengambilan Matkul</a>
        </nav>

        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page == 'mahasiswa') include 'view/mahasiswas.php';
            elseif ($page == 'dosen') include 'view/dosens.php';
            elseif ($page == 'matkul') include 'view/matkuls.php';
            elseif ($page == 'pengambilan') include 'view/pengambilans.php';
        }
        ?>
    </main>
    <?php include 'view/footer.php'; ?>
</body>
</html>
