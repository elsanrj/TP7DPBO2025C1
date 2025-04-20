<?php
require_once '../class/Dosen.php';

$dosen = new Dosen();
$dosen->delete($_GET['id']);

header('Location: ../index.php?page=dosen');
exit;