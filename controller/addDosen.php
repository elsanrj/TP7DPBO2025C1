<?php
require_once '../class/Dosen.php';

$dosen = new Dosen();
$dosen->add($_POST['nama_dosen'], $_POST['nip'], $_POST['email']);

header('Location: ../index.php?page=dosen');