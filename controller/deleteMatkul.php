<?php
require_once '../class/Matkul.php';

$matkul = new Matkul();
$matkul->delete($_GET['id']);

header('Location: ../index.php?page=matkul');
exit;