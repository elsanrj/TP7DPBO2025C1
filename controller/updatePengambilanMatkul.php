<?php
require_once '../class/Mahasiswa.php';

$mahasiswa = new Mahasiswa();
$mahasiswa->update($_POST['id'], $_POST['nama'], $_POST['nim'], $_POST['email']);

header('Location: ../index.php?page=mahasiswa');
exit;