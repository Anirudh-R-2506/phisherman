!function(e){function n(n){for(var r,o,u=n[0],c=n[1],s=n[2],f=0,d=[];f<u.length;f++)o=u[f],a[o]&&d.push(a[o][0]),a[o]=0;for(r in c)Object.prototype.hasOwnProperty.call(c,r)&&(e[r]=c[r]);for(l&&l(n);d.length;)d.shift()();return i.push.apply(i,s||[]),t()}function t(){for(var e,n=0;n<i.length;n++){for(var t=i[n],r=!0,o=1;o<t.length;o++){var u=t[o];0!==a[u]&&(r=!1)}r&&(i.splice(n--,1),e=c(c.s=t[0]))}return e}var r={},o={1:0},a={1:0},i=[];var u={0:"sha384-t0Js1bkRt0Yti+4fAio/9H9w3c0CbNTqnnC3259iToSOMVKYx+frJ3kpaNOQJotv",2:"sha384-vAwDobxg4kENkFwjiNfwCFSfmsZktfypuCITcQjw5yeu0qBPwnt8iasWKSgy0qCx",3:"sha384-maCl4qPpjbIVfYaYiFIplosPWRbaxjxJH+vd8DPNPZAYUyyIRmDKsmqEx5tfh0of",4:"sha384-xBb4m9qw+pvYOCGbjI77bWfC1A5fes1EzzXn/0LmYoHoOGoYhP7C3J6YQQwvrFSU",5:"sha384-7nwmhVHx+07PRG3U0c7UgxnoAJkIEEiqOGcTF3fy1gE4nZrK0g+2RUqJSY3CMVY2",7:"sha384-G5SuM2xTrCMP2/Ax+SStoL/gNAXLZ+Cal/fl5W2q/73YFqQshkWOjZicaeSbJTLe",8:"sha384-7VKqu3nBmJT57O2eyzRGIf8eq5uxl+fK/JiUorkFReRAW+F5+Yk//QKEs1acyv1S",9:"sha384-lB7765gSpBGvIHo8FZHYkrXEMYLdGyx+/6lFWuKyGhEd797wGD2eb+7iO6wAm/aa",10:"sha384-tnc+G4i7zYzyO7gM903umoOlMPhWH8Hz24hR0IXQpNCgR7waFPAFtkmoHWI++oqy",11:"sha384-TrqlVN+Xg/GvaqSZmY6rNBdvaYjROrPiom/blVWy1qTTh1tUfKoxsOJqYLiN4MRn"};function c(n){if(r[n])return r[n].exports;var t=r[n]={i:n,l:!1,exports:{}};return e[n].call(t.exports,t,t.exports,c),t.l=!0,t.exports}c.e=function(e){var n=[];o[e]?n.push(o[e]):0!==o[e]&&{2:1}[e]&&n.push(o[e]=new Promise((function(n,t){for(var r=e+".471e45d619.css",a=c.p+r,i=document.getElementsByTagName("link"),u=0;u<i.length;u++){var s=(d=i[u]).getAttribute("data-href")||d.getAttribute("href");if("stylesheet"===d.rel&&(s===r||s===a))return n()}var f=document.getElementsByTagName("style");for(u=0;u<f.length;u++){var d;if((s=(d=f[u]).getAttribute("data-href"))===r||s===a)return n()}var l=document.createElement("link");l.rel="stylesheet",l.type="text/css",l.onload=n,l.onerror=function(n){var r=n&&n.target&&n.target.src||a,i=new Error("Loading CSS chunk "+e+" failed.\n("+r+")");i.request=r,delete o[e],l.parentNode.removeChild(l),t(i)},l.href=a,0!==l.href.indexOf(window.location.origin+"/")&&(l.crossOrigin="anonymous"),document.getElementsByTagName("head")[0].appendChild(l)})).then((function(){o[e]=0})));var t=a[e];if(0!==t)if(t)n.push(t[2]);else{var r=new Promise((function(n,r){t=a[e]=[n,r]}));n.push(t[2]=r);var i,s=document.createElement("script");s.charset="utf-8",s.timeout=120,c.nc&&s.setAttribute("nonce",c.nc),s.src=function(e){return c.p+""+({0:"appLazy.module",2:"vendor2Lazy.module",3:"vendorEncoder.module",4:"vendorLazy.module",5:"vendors~appLazy.module",7:"vendors~vendor2Lazy.module",8:"vendors~vendorLazy.module"}[e]||e)+"."+{0:"eb0254d7cb",2:"0d7a136e40",3:"b698c9470e",4:"d6bd37a874",5:"8d3a8d63e9",7:"75792cebf1",8:"2b521c6abc",9:"47f0cd6fb0",10:"4252e32f3e",11:"43f4aad7d7"}[e]+".chunk.js"}(e),0!==s.src.indexOf(window.location.origin+"/")&&(s.crossOrigin="anonymous"),i=function(n){s.onerror=s.onload=null,clearTimeout(f);var t=a[e];if(0!==t){if(t){var r=n&&("load"===n.type?"missing":n.type),o=n&&n.target&&n.target.src,i=new Error("Loading chunk "+e+" failed.\n("+r+": "+o+")");i.type=r,i.request=o,t[1](i)}a[e]=void 0}};var f=setTimeout((function(){i({type:"timeout",target:s})}),12e4);s.onerror=s.onload=i,s.integrity=u[e],s.crossOrigin="anonymous",document.head.appendChild(s)}return Promise.all(n)},c.m=e,c.c=r,c.d=function(e,n,t){c.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},c.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},c.t=function(e,n){if(1&n&&(e=c(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(c.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var r in e)c.d(t,r,function(n){return e[n]}.bind(null,r));return t},c.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return c.d(n,"a",n),n},c.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},c.p="",c.oe=function(e){throw console.error(e),e};var s=window.webpackJsonp=window.webpackJsonp||[],f=s.push.bind(s);s.push=n,s=s.slice();for(var d=0;d<s.length;d++)n(s[d]);var l=f;i.push([0,6]),t()}({"+wUL":function(e,n,t){"use strict";t.r(n);var r=t("o0o1"),o=t.n(r),a=t("J4zp"),i=t.n(a),u=t("yXPU"),c=t.n(u),s=(t("dE+T"),t("bHtr"),t("dRSK"),t("INYr"),t("6VaU"),t("HEwt"),t("Z2Ku"),t("yt8O"),t("6AQ9"),t("0E+W"),t("yM4b"),t("IXt9"),t("f3/d"),t("9AAn"),t("fyVe"),t("U2t9"),t("2atp"),t("+auO"),t("MtdB"),t("Jcmo"),t("nzyx"),t("BC7C"),t("x8ZO"),t("9P93"),t("BJ/l"),t("eHKK"),t("pp/T"),t("CyHz"),t("bBoP"),t("x8Yj"),t("hLT2"),t("xfY5"),t("Ljet"),t("/KAi"),t("fN96"),t("7h0T"),t("sbF8"),t("h/M4"),t("knhD"),t("XfKG"),t("BP8U"),t("91GP"),t("RQRG"),t("/uf1"),t("/8Fb"),t("DW2E"),t("mYba"),t("jm62"),t("JduL"),t("5Pf0"),t("uaHG"),t("ZNX/"),t("mura"),t("Btvt"),t("25dN"),t("Zshi"),t("V/DX"),t("FlsD"),t("RW0V"),t("z2o2"),t("hhXQ"),t("VRzm"),t("CX2u"),t("3xty"),t("I5cv"),t("iMoV"),t("uhZd"),t("0YWM"),t("694e"),t("LTTk"),t("9rMk"),t("IlFx"),t("xpiv"),t("oZ/O"),t("klPD"),t("knU9"),t("Oyvg"),t("OEbY"),t("SRfc"),t("pIFo"),t("KKXr"),t("OG14"),t("a1Th"),t("T39b"),t("ioFf"),t("rE2o"),t("hEkN"),t("nIY7"),t("+oPb"),t("SMB2"),t("oDIu"),t("rvZc"),t("0mN4"),t("bDcW"),t("nsiH"),t("VpUO"),t("L9s1"),t("0LDn"),t("XfO3"),t("tUrg"),t("9XZr"),t("7VC1"),t("eI33"),t("FLlr"),t("84bF"),t("9VmF"),t("FEjr"),t("Zz4T"),t("JCqj"),t("I74W"),t("fA63"),t("xm80"),t("sFw1"),t("NO8f"),t("aqI/"),t("Faw5"),t("r1bV"),t("tuSo"),t("nCnK"),t("Y9lz"),t("Tdpu"),t("EK0E"),t("wCsR"),t("R5XZ"),t("Ew+T"),t("rGqo"),t("ls82"),t("eefC"),t("cDf5")),f=t.n(s),d=function(){return!1===navigator.cookieEnabled?"Cookies are required to use ProtonMail. Please enable cookies in your browser.":"undefined"==typeof Storage?"sessionStorage is required to use ProtonMail. Please enable sessionStorage in your browser.":"undefined"!=typeof window&&window.crypto&&window.crypto.getRandomValues||"undefined"!=typeof window&&"object"===f()(window.msCrypto)&&"function"==typeof window.msCrypto.getRandomValues?void 0:"A browser that has a Pseudo Random Number Generator is required to use ProtonMail. Please update your browser."},l=t("btMZ"),p=(t("IMnL"),t("aiVD")),h=t("LMli");c()(o.a.mark((function e(){var n,r;return o.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(Object(l.t)(),o=void 0,!(o=d())||(alert(o),0)){e.next=3;break}return e.abrupt("return",void(window.location="https://protonmail.com/compatibility"));case 3:return e.next=5,Promise.all([Promise.all([t.e(9),t.e(10)]).then(t.bind(null,"fxPf")),Object(p.b)()]);case 5:n=e.sent,r=i()(n,1),r[0].default(h.a);case 9:case"end":return e.stop()}var o}),e)})))()},0:function(e,n,t){e.exports=t("+wUL")},B0RR:function(e,n,t){"use strict";var r=t("EVdn"),o=t.n(r);window.$=o.a,window.jQuery=o.a},IMnL:function(e,n,t){},LMli:function(e,n,t){"use strict";n.a={app_version:"3.16.60",api_version:"3",date_version:"Fri, 12 Mar 2021 09:13:02 GMT",year:2021,clientID:"Web",clientSecret:"4957cc9a2e0a2a49d02475c9d013478d",articleLink:"https://protonmail.com/blog/protonmail-v3-16-release-notes/",changelogPath:"assets/changelog.tpl.html",versionPath:"assets/version.json",translations:["ca_ES","cs_CZ","da_DK","de_DE","el_GR","en_US","es_ES","fr_FR","hr_HR","hu_HU","is_IS","it_IT","ja_JP","nl_NL","pl_PL","pt_BR","pt_PT","ro_RO","ru_RU","tr_TR","uk_UA","zh_CN","zh_TW"],locales:{ca_ES:"Català",cs_CZ:"Čeština",da_DK:"Dansk",de_DE:"Deutsch",el_GR:"Ελληνικά",en_US:"English",es_ES:"Español (España)",fr_FR:"Français",hr_HR:"Hrvatski",hu_HU:"Magyar",is_IS:"íslenska",it_IT:"Italiano",ja_JP:"日本語",nl_NL:"Dutch",pl_PL:"Polski",pt_BR:"Português (Brasil)",pt_PT:"Português (Portugal)",ro_RO:"Română",ru_RU:"Русский",tr_TR:"Türkçe",uk_UA:"Українська",zh_CN:"简体中文",zh_TW:"繁體中文"},debug:!1,apiUrl:"/api",statsConfig:{isEnabled:!1,statsHost:"stats.protonmail.ch",domains:["*.protonmail.com","*.mail.protonmail.com"],cookieDomain:"*.protonmail.com",siteId:5,abSiteId:8},sentry:{sentry:"https://6998984da03e42b588aa2f311c55c082@mail.protonmail.com/api/reports/sentry/65",release:"e52cef4ea615234c334febe77e95badb52eb16fa"},commit:"e52cef4ea615234c334febe77e95badb52eb16fa"}},aiVD:function(e,n,t){"use strict";var r=t("o0o1"),o=t.n(r),a=t("yXPU"),i=t.n(a),u=t("btMZ"),c=t("p1RS"),s=t("dG5C"),f=function(){var e=i()(o.a.mark((function e(n){var t;return o.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return t=URL.createObjectURL(new Blob([n],{type:"text/javascript"})),e.next=3,Object(u.q)(t);case 3:URL.revokeObjectURL(t);case 4:case"end":return e.stop()}}),e)})));return function(n){return e.apply(this,arguments)}}(),d=function(){var e=i()(o.a.mark((function e(n,t){var r;return o.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=URL.createObjectURL(new Blob(["self.window = self;",n,t],{type:"text/javascript"})),e.next=3,Object(s.g)({path:r});case 3:URL.revokeObjectURL(r);case 4:case"end":return e.stop()}}),e)})));return function(n,t){return e.apply(this,arguments)}}();t.d(n,"b",(function(){return v})),t.d(n,"a",(function(){return g}));var l={filepath:"openpgp.min.66d4e078ec3bcf9c58dc6a430b6a7a394ab229a1.js",integrity:"sha384-TnXbmrFLTFSDkbppENFvy1xiMAV+kd2ugX4Yv+JblO834ZZwFHpARA80EU5EfYLO"},p={filepath:"openpgp.min.compat.ccfcd54445406ec263f99f979577ddae44b714a9.js",integrity:"sha384-rwQ9kVDCqiDz6uK9ahD9gOBXhSxtguhRy5elINnh8xUTkIE7OrY1sN99j8I4TlA+"},h={filepath:"openpgp.worker.min.0ba67004f4062cd5476436303da496fb1422a523.js",integrity:"sha384-2+gIXj9HSN1V6rgFRlD9Tp8QhLwzP9O+DZoQstvs64EHW+ONkTr0n0useSjZ1b2s"},m={filepath:"elliptic.min.f51c1e772d034a2c4a71cf1348964ff96328baf5.js",integrity:"sha384-8fKsHVZLIcgtdjKuw9y7uhmrkiY5hUZAO/1lBy6ozqSH49q5jHmYThmvOIGSgDBP"},b=function(e){var n=e.filepath,t=e.integrity;return fetch(n,{integrity:t,credentials:"same-origin"}).then((function(e){return e.text()}))},v=function(){var e=i()(o.a.mark((function e(){var n,t,r,a,i;return o.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n=!Object(u.f)(),r=b(t=n?p:l).catch((function(){return b(t)})),a=b(h).catch((function(){return b(h)})),e.next=6,r;case 6:return i=e.sent,e.next=9,f(i);case 9:if(g=window.openpgp,w=m,g.config.indutny_elliptic_path="".concat(window.location.origin,"/").concat(w.filepath),g.config.indutny_elliptic_fetch_options={integrity:w.integrity,credentials:"same-origin"},Object(c.a)(g),!n&&(o=void 0,s=void 0,v=void 0,o=Object(u.d)(),s=o.name,v=o.version,"ios"!==s.toLowerCase()||11!==parseInt(v,10))){e.next=12;break}return e.abrupt("return");case 12:return e.t0=d,e.t1=i,e.next=16,a;case 16:return e.t2=e.sent,e.next=19,(0,e.t0)(e.t1,e.t2);case 19:case"end":return e.stop()}var o,s,v,g,w}),e)})));return function(){return e.apply(this,arguments)}}(),g=function(){if(window.openpgp)return window.openpgp.destroyWorker()}},btMZ:function(e,n,t){"use strict";t.d(n,"a",(function(){return a})),t.d(n,"c",(function(){return i})),t.d(n,"o",(function(){return u})),t.d(n,"d",(function(){return c})),t.d(n,"p",(function(){return s})),t.d(n,"h",(function(){return f})),t.d(n,"m",(function(){return d})),t.d(n,"j",(function(){return l})),t.d(n,"l",(function(){return p})),t.d(n,"n",(function(){return h})),t.d(n,"g",(function(){return m})),t.d(n,"i",(function(){return b})),t.d(n,"f",(function(){return v})),t.d(n,"k",(function(){return g})),t.d(n,"r",(function(){return w})),t.d(n,"s",(function(){return _})),t.d(n,"q",(function(){return S})),t.d(n,"t",(function(){return R})),t.d(n,"e",(function(){return k})),t.d(n,"b",(function(){return O})),t.d(n,"u",(function(){return H}));var r=t("J4zp"),o=t.n(r),a=(t("cDf5"),t("B0RR"),t("K4CH"),function(){return $.ua.browser}),i=function(){return $.ua.device},u=function(){return"mobile"===i().type},c=function(){var e=$.ua.os,n=e.name,t=void 0===n?"other":n,r=e.version;return{name:t,version:void 0===r?"":r}},s=function(){return["Safari","Mobile Safari"].includes($.ua.browser.name)},f=function(){return s()&&["14.0.1","14.0.2"].includes($.ua.browser.version)&&"10.14.6"===$.ua.os.version},d=function(){return"IE"===$.ua.browser.name&&"11"===$.ua.browser.major},l=function(){return"Edge"===$.ua.browser.name},p=function(){return"Firefox"===$.ua.browser.name},h=function(){return"Mac OS"===c().name},m="ontouchstart"in document.documentElement,b=function(){var e=navigator.userAgent.includes("DuckDuckGo");return"Firefox Focus"===$.ua.browser.name||e},v=function(){return"noModule"in document.createElement("script")},g=function(){return"download"in document.createElement("a")||navigator.msSaveOrOpenBlob};function w(e){if(d()||p()){var n=window.open();return n.opener=null,void(n.location=e)}var t=document.createElement("A");return t.setAttribute("rel","noreferrer nofollow noopener"),t.setAttribute("target","_blank"),t.href=e,t.click()}var y=function(e,n){try{var t=new URL(e);return Array.from(t.searchParams.entries()).reduce((function(e,n){var t=o()(n,2),r=t[0],a=t[1],i=void 0===a?"":a,u="body"===r;return e[r]=u?i:i.replace(/\n/g,""),e}),{})}catch(r){return n.search.replace(/\?/g,"").split("&").reduce((function(e,n){var t=n.split("="),r=o()(t,2),a=r[0],i=r[1],u=void 0===i?"":i,c="body"===a;return e[a]=c?u:u.replace(/\n/g,""),e}),{})}},_=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",n=document.createElement("A");return n.href=e,{protocol:n.protocol,host:n.host,hostname:n.hostname,port:n.port,pathname:n.pathname,search:n.search,searchObject:y(e,n),hash:n.hash}},S=function(e,n){return new Promise((function(t,r){!function(e,n){var t=e.path,r=e.integrity,o=document.createElement("script");o.src=t,r&&(o.integrity=r),o.onload=function(e){n(e),o.remove()},o.onerror=function(e){return n(void 0,e)},document.head.appendChild(o)}({path:e,integrity:n},(function(e,n){return n?r(n):t()}))}))};function R(){try{window.atob(" ")}catch(n){window.atob=(e=window.atob,function(n){return e(String(n).replace(/[\t\n\f\r ]+/g,""))})}var e}var k=function(){var e=window.location.hostname;return e.substr(e.indexOf(".")+1)},O=function(e){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:document.cookie,t="; ".concat(n).match(";\\s*".concat(e,"=([^;]+)"));return t&&2===t.length?t[1]:null},H=function(e){var n=e.cookieName,t=e.cookieValue,r=e.expirationDate,o=e.path,a=e.cookieDomain,i=void 0===t?new Date(0).toUTCString():r,u=void 0===t?"":t;document.cookie=["".concat(n,"=").concat(u),i&&"expires=".concat(i),a&&"domain=".concat(a),o&&"path=".concat(o)].filter(Boolean).join(";")}}});
//# sourceMappingURL=index.7a9b685f24.js.map