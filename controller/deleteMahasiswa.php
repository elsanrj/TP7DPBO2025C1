<?php
require_once '../class/Mahasiswa.php';

$mahasiswa = new Mahasiswa();
$mahasiswa->delete($_GET['id']);

header('Location: ../index.php?page=mahasiswa');
exit;