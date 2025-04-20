<?php
require_once '../class/PengambilanMatkul.php';

$pengambilan = new PengambilanMatkul();
$pengambilan->delete($_GET['id']);

header('Location: ../index.php?page=pengambilan');
exit;