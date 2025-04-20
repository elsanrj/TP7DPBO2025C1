<?php
require_once '../class/Matkul.php';

$matkul = new Matkul();
$matkul->update($_POST['id'], $_POST['nama_matkul'], $_POST['kode_matkul'], $_POST['id_dosen']);

header('Location: ../index.php?page=matkul');
exit;