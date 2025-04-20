<?php
require_once '../class/PengambilanMatkul.php';

$pengambilan = new PengambilanMatkul();
$pengambilan->add($_POST['id_mahasiswa'], $_POST['id_matkul'], $_POST['semester']);

header('Location: ../index.php?page=pengambilan');