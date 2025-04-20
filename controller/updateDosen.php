<?php
require_once '../class/Sosen.php';

$dosen = new Dosen();
$dosen->update($_POST['id'], $_POST['nama'], $_POST['nip'], $_POST['email']);

header('Location: ../index.php?page=dosen');
exit;