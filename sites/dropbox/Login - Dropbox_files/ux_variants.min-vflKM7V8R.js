define(["require","exports"],(function(t,e){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.getVariant=e.addConfig=e.parseJWTToDict=e.addMatchedVariantsToEvent=e.addConfigsFromDOM=e.resetMetaTagConfigQueryCount=e.DROPBOX_VARIANTS_ISSUER=e.ADOBE_TARGET_FEATURE_CONFIG_DATA_ATTRIBUTE=e.ADOBE_TARGET_MATCHER_CONFIG_DATA_ATTRIBUTE=void 0,e.ADOBE_TARGET_MATCHER_CONFIG_DATA_ATTRIBUTE="data-uxa-matcher-configs",e.ADOBE_TARGET_FEATURE_CONFIG_DATA_ATTRIBUTE="data-uxa-variant-tokens";e.DROPBOX_VARIANTS_ISSUER="https://dropbox.com/ux_analytics";var a=0;e.resetMetaTagConfigQueryCount=function(){a=0},e.addConfigsFromDOM=function(t){void 0===t&&(t=!1);var n=function(t,e){var a=[],n=document.head.querySelectorAll("meta["+t+"]");return n?(Array.prototype.forEach.call(n,(function(n){try{var r=n.getAttribute(t);if(!r)return;e?a.push.apply(a,JSON.parse(r)):a.push(r)}catch(t){}})),a):[]};if(!(t&&a>1||!t&&a)){a++;var r=n(e.ADOBE_TARGET_MATCHER_CONFIG_DATA_ATTRIBUTE,!0),o=n(e.ADOBE_TARGET_FEATURE_CONFIG_DATA_ATTRIBUTE,!1);if(r.length&&o.length)i({variant_tokens:o.join(","),matchers:r})}};e.addMatchedVariantsToEvent=function(t){var a=function(t,e){return void 0===t||(function(t,e){if(void 0===t)return!0;var a=t;for(var n in a)if(String(e[n])!==String(a[n]))return!1;return!0})(t.extra,e.extra)};if("undefined"!=typeof self&&self){var n;e.addConfigsFromDOM();var r,i,o,s=self._DBX_UX_variants_configStore,_={};if(t&&s&&s.matchers&&t.eventName&&(n=s.matchers[t.eventName]))for(var f in n)if(s.assignments&&n.hasOwnProperty(f)){var v=n[f],T=s.assignments[v.feature_name];T&&void 0===_[T.variantToken]&&a(v.like,t)&&(t.extra||(t.extra={}),r=T.variantToken,i=t.extra,o=void 0,i[o=r.startsWith("adobetarget")?"adobe_target_variants":"variants"]?i[o]+=","+r:i[o]=r,_[T.variantToken]=!0)}}};var n=function(t,a){var n=function(t){return decodeURIComponent(escape(t))},r=t.split(".").map((function(t){return atob(t.split("_").join("/").split("-").join("+"))})),i=r[0],o=r[1];if(r[2]&&"JWT"===JSON.parse(n(i)).typ){var s=JSON.parse(n(o)),_=s[a];if(s.iss===e.DROPBOX_VARIANTS_ISSUER)return _}};e.parseJWTToDict=function(t){for(var e={},a=0,r=n(t,"variants").split(",");a<r.length;a++){var i=r[a].split(":");2===i.length&&(e[decodeURIComponent(i[0])]=decodeURIComponent(i[1]))}return e};var r=function(t){return t.startsWith("adobetarget:")?(function(t){for(var e=[],a=0,n=t.split(",");a<n.length;a++){var r=n[a];try{var i=r.split(":"),o=i[0],s=i[1],_=i[2];e.push([o+":"+decodeURIComponent(s),decodeURIComponent(_)])}catch(t){continue}}return e})(t):(function(t){for(var e=[],a=0,r=n(t,"variants").split(",");a<r.length;a++){var i=r[a].split(":");2===i.length&&e.push(i.map(decodeURIComponent))}return e})(t)};function i(t){if(t){self._DBX_UX_variants_configStore=self._DBX_UX_variants_configStore||{};var e=self._DBX_UX_variants_configStore,a=t.variant_tokens,n=t.matchers;if(a)for(var i=0,o=a.split(",");i<o.length;i++){var s=o[i],_=r(s);if(_)for(var f=0,v=_;f<v.length;f++){var T=v[f],c=T[0],u=T[1];e.assignments=e.assignments||{},e.assignments[c]={variant:u,variantToken:s}}}if(n)for(var d=0,A=n;d<A.length;d++){var g=A[d];e.matchers=e.matchers||{};var p=g.event_name;e.matchers[p]=e.matchers[p]||{};var l={feature_name:g.feature_name,event_name:p,is_pre_tti:g.is_pre_tti,like:g.like},m=JSON.stringify(l);e.matchers[p][m]=l}}}e.addConfig=i,e.getVariant=function(t){var e=self._DBX_UX_variants_configStore;return(e&&e.assignments&&e.assignments[t]||{}).variant||"OFF"}}));
//# sourceMappingURL=ux_variants.min.js-vflJWnqbM.map