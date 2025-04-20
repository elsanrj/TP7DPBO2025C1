<?php
require_once '../class/Mahasiswa.php';

$mahasiswa = new Mahasiswa();
$mahasiswa->add($_POST['nama'], $_POST['nim'], $_POST['email']);

header('Location: ../index.php?page=mahasiswa');