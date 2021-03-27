
// Copyright 2012 Google Inc. All rights reserved.
(function(w,g){w[g]=w[g]||{};w[g].e=function(s){return eval(s);};})(window,'google_tag_manager');(function(){

var data = {
"resource": {
  "version":"149",
  
  "macros":[{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_name":"eventCategory"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_name":"eventAction"
    },{
      "function":"__e"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_name":"eventNonInt"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_name":"eventValue"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"responseSizeInByte"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"requestSizeInByte"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":true,
      "vtp_defaultValue":"0",
      "vtp_name":"x-tr-st-1"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"pageType"
    },{
      "function":"__c",
      "vtp_value":"snapchat.com"
    },{
      "function":"__c",
      "vtp_value":"auto"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"userId"
    },{
      "function":"__jsm",
      "vtp_javascript":["template","(function(){return function(a){var g=[{name:\"EMAIL\",regex:\/[^\\\/]{4}(@|%40)(?!example\\.com)[^\\\/]{4}\/gi},{name:\"SELF-EMAIL\",regex:\/[^\\\/]{4}(@|%40)(?=example\\.com)[^\\\/]{4}\/gi},{name:\"TEL\",regex:\/((tel=)|(telephone=)|(phone=)|(mobile=)|(mob=))[\\d\\+\\s][^\u0026\\\/\\?]+\/gi},{name:\"NAME\",regex:\/((firstname=)|(lastname=)|(surname=))[^\u0026\\\/\\?]+\/gi},{name:\"PASSWORD\",regex:\/((password=)|(passwd=)|(pass=))[^\u0026\\\/\\?]+\/gi},{name:\"ZIP\",regex:\/((postcode=)|(zipcode=)|(zip=))[^\u0026\\\/\\?]+\/gi}],f=\"_\"+a.get(\"trackingId\")+\"_sendHitTask\",\nh=window[f]=window[f]||a.get(\"sendHitTask\"),b,c,d,e;a.set(\"sendHitTask\",function(a){c=a.get(\"hitPayload\").split(\"\\x26\");for(b=0;b\u003Cc.length;b++){d=c[b].split(\"\\x3d\");try{e=decodeURIComponent(decodeURIComponent(d[1]))}catch(k){e=decodeURIComponent(d[1])}g.forEach(function(a){e=e.replace(a.regex,\"[REDACTED \"+a.name+\"]\")});d[1]=encodeURIComponent(e);c[b]=d.join(\"\\x3d\")}a.set(\"hitPayload\",c.join(\"\\x26\"),!0);h(a)})}})();"]
    },{
      "function":"__jsm",
      "vtp_javascript":["template","(function(){function m(g,d,n){var b=g,c=b.split(\"?\");g=c[0];b=1\u003Cc.length?b.replace(g,\"\").substring(1):\"\";var a=b;b=a.split(\/[\u0026;]\/);c=[];var e=\"\";if(\"\"===a)d=\"\";else{for(a=0;a\u003Cb.length;a++){var h=b[a].split(\"\\x3d\"),k=h[0];h=h[1];include=!0;for(var l=0;l\u003Cd.length;l++){var f;(f=k.toLowerCase()===d[l].toLowerCase())||(f=\/(([^\u003C\u003E()\\[\\]\\\\.,;:\\s@\"]+(\\.[^\u003C\u003E()\\[\\]\\\\.,;:\\s@\"]+)*)|(\".+\"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))\/,f=f.test(k));f\u0026\u0026(include=!1)}include\u0026\u0026\nc.push({name:k,value:h,index:a})}if(1\u003Ec.length)d=e;else{for(a=0;a\u003Cc.length;a++)e+=c[a].name,-1\u003Cb[c[a].index].indexOf(\"\\x3d\")\u0026\u0026(e+=\"\\x3d\",e+=c[a].value),a!==c.length-1\u0026\u0026(e+=\"\\x26\");d=\"?\"+e}}b=g+d;return b=b.replace(\/([a-zA-Z0-9\\-\\.\\+_-`~!#\\$%\\^\u0026*\\(\\)]+(@|%40|%2540)[a-zA-Z0-9\\-\\.\\+_-`~!#\\$%\\^\u0026*\\(\\)]+\\.[a-zA-Z0-9\\.\\+_-`~!#\\$%\\^*\\(\\)]+)\/gi,n)}return m})();"]
    },{
      "function":"__jsm",
      "vtp_javascript":["template","(function(){var a=\"firstname lastname nickname address gender p e profileurl email pwd fname lname user\".split(\" \"),b=\"email_removed\",c=",["escape",["macro",13],8,16],",d=document.location.pathname+document.location.search;return c(d,a,b)})();"]
    },{
      "function":"__f",
      "vtp_component":"URL"
    },{
      "function":"__jsm",
      "vtp_javascript":["template","(function(){var c=window.location.hostname;var a=",["escape",["macro",15],8,16],";var b=document.createElement(\"a\");b.href=a;a=b;a=a.host;if(c!=a)return c=\"firstname lastname nickname address gender p e profileurl email pwd fname lname user\".split(\" \"),a=\"email_removed\",b=",["escape",["macro",13],8,16],",b(",["escape",["macro",15],8,16],",c,a)})();"]
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"errorType"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"language"
    },{
      "function":"__u",
      "vtp_component":"HOST",
      "vtp_enableMultiQueryKeys":false,
      "vtp_enableIgnoreEmptyQueryParam":false
    },{
      "function":"__smm",
      "vtp_setDefaultValue":false,
      "vtp_input":["macro",19],
      "vtp_map":["list",["map","key","forbusiness.snapchat.com","value","UA-41740027-30"],["map","key","lensstudio.snapchat.com","value","UA-41740027-31"],["map","key","grant-test-gtm-dot-dev-dot-advertising-web.appspot.com","value","UA-41740027-30"],["map","key","forbusiness-dec14-dot-dev-dot-advertising-web.appspot.com","value","UA-41740027-30"],["map","key","lens-studio-web.appspot.com","value","UA-41740027-31"],["map","key","ads.snapchat.com","value","UA-41740027-18"],["map","key","self-serve-ads.snap-dev.net","value","UA-41740027-19"],["map","key","business.snapchat.com","value","UA-41740027-22"],["map","key","business-manager.snap-dev.net","value","UA-41740027-21"],["map","key","ads-local","value","UA-41740027-19"],["map","key","business-local","value","UA-41740027-21"],["map","key","geofilters.snapchat.com","value","UA-41740027-6"],["map","key","odg-local","value","UA-41740027-29"],["map","key","staging-dot-geofilters-on-demand.appspot.com","value","UA-41740027-29"],["map","key","geofilters-on-demand-dev.appspot.com","value","UA-41740027-29"],["map","key","gtm-dot-geofilters-on-demand-dev.appspot.com","value","UA-41740027-29"],["map","key","create.snapchat.com","value","UA-41740027-6"],["map","key","create.snap-dev.net","value","UA-41740027-29"],["map","key","whatis.snapchat.com","value","UA-41740027-39"],["map","key","whatis-dot-dev-dot-it-services-temp.appspot.com","value","UA-41740027-39"],["map","key","yellowla.com","value","UA-41740027-44"],["map","key","it-services-temp.appspot.com","value","UA-41740027-45"],["map","key","www.yellowla.com","value","UA-41740027-44"],["map","key","accounts.snapchat.com","value","UA-41740027-4"],["map","key","kit.snapchat.com","value","UA-41740027-47"],["map","key","places.snap-dev.net","value","UA-41740027-52"],["map","key","places.snapchat.com","value","UA-41740027-53"],["map","key","snaporiginals.snapchat.com","value","UA-41740027-55"],["map","key","snapcamera.snapchat.com","value","UA-107043855-2"],["map","key","research.snap.com","value","UA-41740027-59"],["map","key","eng.snap.com","value","UA-41740027-61"],["map","key","newsroom.snap.com","value","UA-41740027-62"],["map","key","citizen.snap.com","value","UA-41740027-66"],["map","key","investor.snap.com","value","UA-41740027-67"],["map","key","snapsaver.sc-corp.net","value","UA-41740027-69"],["map","key","lensfest.live","value","UA-41740027-31"]]
    },{
      "function":"__gas",
      "vtp_useDebugVersion":false,
      "vtp_useHashAutoLink":false,
      "vtp_contentGroup":["list",["map","index","1","group",["macro",8]]],
      "vtp_autoLinkDomains":["macro",9],
      "vtp_decorateFormsAutoLink":false,
      "vtp_cookieDomain":["macro",10],
      "vtp_useEcommerceDataLayer":true,
      "vtp_doubleClick":false,
      "vtp_setTrackerName":false,
      "vtp_fieldsToSet":["list",["map","fieldName","userId","value",["macro",11]],["map","fieldName","legacyCookieDomain","value","false"],["map","fieldName","siteSpeedSampleRate","value","100"],["map","fieldName","customTask","value",["macro",12]],["map","fieldName","anonymizeIp","value","true"],["map","fieldName","allowLinker","value","true"],["map","fieldName","page","value",["macro",14]],["map","fieldName","referrer","value",["macro",16]]],
      "vtp_enableLinkId":true,
      "vtp_dimension":["list",["map","index","1","dimension",["macro",8]],["map","index","2","dimension",["macro",11]],["map","index","3","dimension",["macro",17]],["map","index","4","dimension",["macro",18]]],
      "vtp_enableEcommerce":true,
      "vtp_trackingId":["macro",20],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_ecommerceIsEnabled":true,
      "vtp_enableGA4Schema":false
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_name":"eventLabel"
    },{
      "function":"__v",
      "vtp_name":"gtm.elementUrl",
      "vtp_dataLayerVersion":1
    },{
      "function":"__jsm",
      "vtp_javascript":["template","(function(){var c=",["escape",["macro",9],8,16],".split(\",\"),d=",["escape",["macro",23],8,16],".toLowerCase(),a=\"false\";if(d===document.domain)a=\"true\";else for(var b=0;b\u003Cc.length;b++)if(-1\u003Cd.indexOf(c[b].trim().toLowerCase())){a=\"true\";break}return a})();"]
    },{
      "function":"__v",
      "vtp_name":"gtm.triggers",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":true,
      "vtp_defaultValue":""
    },{
      "function":"__aev",
      "vtp_varType":"TEXT"
    },{
      "function":"__u",
      "vtp_component":"PATH",
      "vtp_enableMultiQueryKeys":false,
      "vtp_enableIgnoreEmptyQueryParam":false
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"virtualPageviewPath"
    },{
      "function":"__jsm",
      "vtp_javascript":["template","(function(){var a=\"firstname lastname nickname address gender p e profileurl email pwd fname lname user\".split(\" \"),b=\"email_removed\",c=",["escape",["macro",13],8,16],";return c(",["escape",["macro",28],8,16],",a,b)})();"]
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"__BUY_REASON_REQUIRED__"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"__FOURSTEP__"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"__GEOCODER__"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"__PRICING_VERSION_TEST__"
    },{
      "function":"__aev",
      "vtp_setDefaultValue":false,
      "vtp_varType":"ATTRIBUTE",
      "vtp_attribute":"data-event-label"
    },{
      "function":"__k",
      "convert_case_to":1,
      "convert_null_to":"false",
      "convert_undefined_to":"false",
      "vtp_decodeCookie":false,
      "vtp_name":"Marketing"
    },{
      "function":"__v",
      "convert_case_to":1,
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"userLocation"
    },{
      "function":"__smm",
      "vtp_setDefaultValue":true,
      "vtp_input":["macro",36],
      "vtp_defaultValue":"false",
      "vtp_map":["list",["map","key","us-ca","value","true"]]
    },{
      "function":"__u",
      "vtp_component":"URL",
      "vtp_enableMultiQueryKeys":false,
      "vtp_enableIgnoreEmptyQueryParam":false
    },{
      "function":"__u",
      "vtp_enableMultiQueryKeys":false,
      "vtp_enableIgnoreEmptyQueryParam":false
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"eventVariable"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"conversionValue"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"orderId"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"currencyCode"
    },{
      "function":"__v",
      "vtp_name":"gtm.historyChangeSource",
      "vtp_dataLayerVersion":1
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"gtm.newUrl"
    },{
      "function":"__jsm",
      "vtp_javascript":["template","(function(){var a=window.location.hash.replace(\/.*_ga=.*$\/,\"\");return a})();"]
    },{
      "function":"__jsm",
      "vtp_javascript":["template","(function(){return ",["escape",["macro",14],8,16],"+",["escape",["macro",46],8,16],"})();"]
    },{
      "function":"__gas",
      "vtp_cookieDomain":"auto",
      "vtp_doubleClick":false,
      "vtp_setTrackerName":false,
      "vtp_useDebugVersion":false,
      "vtp_fieldsToSet":["list",["map","fieldName","page","value",["macro",14]],["map","fieldName","referrer","value",["macro",16]]],
      "vtp_useHashAutoLink":false,
      "vtp_decorateFormsAutoLink":false,
      "vtp_enableLinkId":false,
      "vtp_enableEcommerce":false,
      "vtp_trackingId":"UA-41740027-30",
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableGA4Schema":false
    },{
      "function":"__smm",
      "vtp_setDefaultValue":false,
      "vtp_input":["macro",19],
      "vtp_map":["list",["map","key","experience.snapchat.com","value","G-DLWZ0SJT28"],["map","key","experience.snap.com","value","G-KL6JEZYZ9P"],["map","key","my-lenses.snapchat.com","value","G-KKNBL4WWPH"],["map","key","snapfoundation.org","value","G-TDKMXHKFBM"],["map","key","developer.snapchat.com","value","G-5YZFCE3QV3"],["map","key","ar.snapchat.com","value","G-P1G40YQ8Q4"]]
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"useType"
    },{
      "function":"__u",
      "vtp_component":"FRAGMENT",
      "vtp_enableMultiQueryKeys":false,
      "vtp_enableIgnoreEmptyQueryParam":false
    },{
      "function":"__smm",
      "vtp_setDefaultValue":false,
      "vtp_input":["macro",51],
      "vtp_map":["list",["map","key","objectives","value","advertising objectives"],["map","key","adformats","value","advertising adformats"],["map","key","targeting","value","advertising targeting"],["map","key","measurement","value","advertising measurement"]]
    },{
      "function":"__jsm",
      "vtp_javascript":["template","(function(){return window.location.pathname+window.location.search+window.location.hash})();"]
    },{
      "function":"__k",
      "convert_case_to":1,
      "convert_null_to":"false",
      "convert_undefined_to":"false",
      "vtp_decodeCookie":false,
      "vtp_name":"Performance"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"memberId"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"organizationId"
    },{
      "function":"__v",
      "vtp_dataLayerVersion":2,
      "vtp_setDefaultValue":false,
      "vtp_name":"notificationDefinitionId"
    },{
      "function":"__e"
    },{
      "function":"__v",
      "vtp_name":"gtm.element",
      "vtp_dataLayerVersion":1
    },{
      "function":"__v",
      "vtp_name":"gtm.elementClasses",
      "vtp_dataLayerVersion":1
    },{
      "function":"__v",
      "vtp_name":"gtm.elementId",
      "vtp_dataLayerVersion":1
    },{
      "function":"__v",
      "vtp_name":"gtm.elementTarget",
      "vtp_dataLayerVersion":1
    },{
      "function":"__v",
      "vtp_name":"gtm.element",
      "vtp_dataLayerVersion":1
    },{
      "function":"__v",
      "vtp_name":"gtm.elementClasses",
      "vtp_dataLayerVersion":1
    },{
      "function":"__v",
      "vtp_name":"gtm.elementId",
      "vtp_dataLayerVersion":1
    },{
      "function":"__v",
      "vtp_name":"gtm.elementTarget",
      "vtp_dataLayerVersion":1
    },{
      "function":"__v",
      "vtp_name":"gtm.elementUrl",
      "vtp_dataLayerVersion":1
    },{
      "function":"__aev",
      "vtp_varType":"TEXT"
    },{
      "function":"__v",
      "vtp_name":"gtm.newUrlFragment",
      "vtp_dataLayerVersion":1
    }],
  "tags":[{
      "function":"__ua",
      "priority":5,
      "metadata":["map"],
      "once_per_event":true,
      "vtp_overrideGaSettings":true,
      "vtp_fieldsToSet":["list",["map","fieldName","page","value",["macro",29]],["map","fieldName","legacyHistoryImport","value","false"]],
      "vtp_trackType":"TRACK_PAGEVIEW",
      "vtp_gaSettings":["macro",21],
      "vtp_dimension":["list",["map","index","10","dimension",["macro",30]],["map","index","11","dimension",["macro",31]],["map","index","12","dimension",["macro",32]],["map","index","13","dimension",["macro",33]]],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_enableGA4Schema":false,
      "tag_id":7
    },{
      "function":"__ua",
      "priority":3,
      "vtp_nonInteraction":["macro",3],
      "vtp_overrideGaSettings":true,
      "vtp_eventValue":["macro",4],
      "vtp_fieldsToSet":["list",["map","fieldName","transport","value","beacon"],["map","fieldName","legacyHistoryImport","value","false"]],
      "vtp_eventCategory":["macro",0],
      "vtp_trackType":"TRACK_EVENT",
      "vtp_metric":["list",["map","index","1","metric",["macro",5]],["map","index","2","metric",["macro",6]],["map","index","3","metric",["macro",7]]],
      "vtp_gaSettings":["macro",21],
      "vtp_eventAction":["macro",1],
      "vtp_eventLabel":["macro",22],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_trackTypeIsEvent":true,
      "vtp_enableGA4Schema":false,
      "tag_id":2
    },{
      "function":"__ua",
      "priority":3,
      "vtp_nonInteraction":false,
      "vtp_overrideGaSettings":true,
      "vtp_fieldsToSet":["list",["map","fieldName","transport","value","beacon"],["map","fieldName","legacyHistoryImport","value","false"]],
      "vtp_eventCategory":"outbound link",
      "vtp_trackType":"TRACK_EVENT",
      "vtp_gaSettings":["macro",21],
      "vtp_eventAction":["macro",26],
      "vtp_eventLabel":["macro",23],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_trackTypeIsEvent":true,
      "vtp_enableGA4Schema":false,
      "tag_id":3
    },{
      "function":"__ua",
      "priority":3,
      "metadata":["map"],
      "vtp_overrideGaSettings":false,
      "vtp_trackType":"TRACK_PAGEVIEW",
      "vtp_gaSettings":["macro",21],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_enableGA4Schema":false,
      "tag_id":4
    },{
      "function":"__ua",
      "priority":3,
      "once_per_event":true,
      "vtp_overrideGaSettings":true,
      "vtp_fieldsToSet":["list",["map","fieldName","transport","value","beacon"],["map","fieldName","legacyHistoryImport","value","false"]],
      "vtp_trackType":"TRACK_TIMING",
      "vtp_timingLabel":["macro",22],
      "vtp_timingCategory":["macro",0],
      "vtp_gaSettings":["macro",21],
      "vtp_timingVar":["macro",40],
      "vtp_timingValue":["macro",4],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_trackTypeIsTiming":true,
      "vtp_enableGA4Schema":false,
      "tag_id":19
    },{
      "function":"__ua",
      "once_per_event":true,
      "vtp_nonInteraction":true,
      "vtp_overrideGaSettings":true,
      "vtp_fieldsToSet":["list",["map","fieldName","legacyHistoryImport","value","false"]],
      "vtp_eventCategory":["macro",0],
      "vtp_trackType":"TRACK_EVENT",
      "vtp_gaSettings":["macro",21],
      "vtp_eventAction":["macro",1],
      "vtp_eventLabel":["macro",22],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_trackTypeIsEvent":true,
      "vtp_enableGA4Schema":false,
      "tag_id":9
    },{
      "function":"__ua",
      "once_per_event":true,
      "vtp_nonInteraction":false,
      "vtp_overrideGaSettings":false,
      "vtp_eventCategory":"Viewport",
      "vtp_trackType":"TRACK_EVENT",
      "vtp_gaSettings":["macro",21],
      "vtp_eventAction":"Scroll",
      "vtp_eventLabel":["macro",34],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_trackTypeIsEvent":true,
      "vtp_enableGA4Schema":false,
      "tag_id":12
    },{
      "function":"__sp",
      "once_per_event":true,
      "vtp_conversionId":"AW-845934552",
      "vtp_customParamsFormat":"NONE",
      "vtp_enableOgtRmktParams":true,
      "vtp_enableUserId":true,
      "vtp_url":["macro",39],
      "vtp_enableRdpCheckbox":true,
      "tag_id":13
    },{
      "function":"__ua",
      "setup_tags":["list",["tag",83,0]],
      "once_per_event":true,
      "vtp_overrideGaSettings":true,
      "vtp_trackType":"TRACK_PAGEVIEW",
      "vtp_gaSettings":["macro",21],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_enableGA4Schema":false,
      "tag_id":21
    },{
      "function":"__gclidw",
      "once_per_event":true,
      "vtp_enableCrossDomain":false,
      "vtp_enableCookieOverrides":false,
      "vtp_enableCrossDomainFeature":true,
      "vtp_enableCookieUpdateFeature":false,
      "vtp_enableCookieFlagsFeature":false,
      "vtp_enableUrlPassthroughFeature":true,
      "tag_id":22
    },{
      "function":"__awct",
      "once_per_event":true,
      "vtp_enableConversionLinker":true,
      "vtp_conversionValue":["macro",41],
      "vtp_orderId":["macro",42],
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"866629025",
      "vtp_currencyCode":["macro",43],
      "vtp_conversionLabel":"yASdCMPZs2wQoeuenQM",
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":23
    },{
      "function":"__ua",
      "once_per_event":true,
      "vtp_overrideGaSettings":true,
      "vtp_trackType":"TRACK_PAGEVIEW",
      "vtp_gaSettings":["macro",21],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_enableGA4Schema":false,
      "tag_id":24
    },{
      "function":"__ua",
      "once_per_event":true,
      "vtp_nonInteraction":true,
      "vtp_overrideGaSettings":false,
      "vtp_eventCategory":"ContactUsFormSubmission",
      "vtp_trackType":"TRACK_EVENT",
      "vtp_gaSettings":["macro",21],
      "vtp_eventAction":"\/contact-us\/thank-you",
      "vtp_eventLabel":"FormSubmit",
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_trackTypeIsEvent":true,
      "vtp_enableGA4Schema":false,
      "tag_id":27
    },{
      "function":"__ua",
      "once_per_event":true,
      "vtp_overrideGaSettings":true,
      "vtp_fieldsToSet":["list",["map","fieldName","page","value","\/partners\/contact-us\/submit"],["map","fieldName","title","value","Snap Business Contact Form"]],
      "vtp_trackType":"TRACK_PAGEVIEW",
      "vtp_gaSettings":["macro",21],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_enableGA4Schema":false,
      "tag_id":28
    },{
      "function":"__ua",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_overrideGaSettings":true,
      "vtp_fieldsToSet":["list",["map","fieldName","page","value",["macro",47]]],
      "vtp_trackType":"TRACK_PAGEVIEW",
      "vtp_gaSettings":["macro",21],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_enableGA4Schema":false,
      "tag_id":29
    },{
      "function":"__awct",
      "once_per_event":true,
      "vtp_enableConversionLinker":true,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"845934552",
      "vtp_conversionLabel":"yfA6CODsxH0Q2N-vkwM",
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":43
    },{
      "function":"__ua",
      "once_per_event":true,
      "vtp_nonInteraction":false,
      "vtp_overrideGaSettings":false,
      "vtp_eventCategory":"HeaderNav",
      "vtp_trackType":"TRACK_EVENT",
      "vtp_gaSettings":["macro",48],
      "vtp_eventAction":["macro",26],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_trackTypeIsEvent":true,
      "vtp_enableGA4Schema":false,
      "tag_id":47
    },{
      "function":"__ua",
      "once_per_event":true,
      "vtp_nonInteraction":false,
      "vtp_overrideGaSettings":false,
      "vtp_eventCategory":"CTA",
      "vtp_trackType":"TRACK_EVENT",
      "vtp_gaSettings":["macro",21],
      "vtp_eventAction":["macro",26],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_trackTypeIsEvent":true,
      "vtp_enableGA4Schema":false,
      "tag_id":48
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableConversionLinker":true,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"845934552",
      "vtp_conversionLabel":"bmrZCPaGnagBENjfr5MD",
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":52
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableConversionLinker":true,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"845934552",
      "vtp_conversionLabel":"nsQ6CO7up6gBENjfr5MD",
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":53
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableConversionLinker":true,
      "vtp_enableProductReporting":false,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"845934552",
      "vtp_conversionLabel":"BxGwCLXHnKgBENjfr5MD",
      "vtp_rdp":false,
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":54
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableConversionLinker":true,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"845934552",
      "vtp_conversionLabel":"0wNICPOQvqgBENjfr5MD",
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":55
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableConversionLinker":true,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"845934552",
      "vtp_conversionLabel":"jHjhCKKbx6gBENjfr5MD",
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":56
    },{
      "function":"__twitter_website_tag",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_event_type":"PageView",
      "vtp_twitter_pixel_id":"o2ery",
      "tag_id":62
    },{
      "function":"__bzi",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_id":"69836",
      "tag_id":63
    },{
      "function":"__img",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_useCacheBuster":false,
      "vtp_url":"https:\/\/px.ads.linkedin.com\/collect\/?pid=69836\u0026conversionId=1406956\u0026fmt=gif",
      "tag_id":68
    },{
      "function":"__img",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_useCacheBuster":false,
      "vtp_url":"https:\/\/px.ads.linkedin.com\/collect\/?pid=69836\u0026conversionId=1406964\u0026fmt=gif",
      "tag_id":69
    },{
      "function":"__img",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_useCacheBuster":false,
      "vtp_url":"https:\/\/px.ads.linkedin.com\/collect\/?pid=69836\u0026conversionId=1406972\u0026fmt=gif",
      "tag_id":70
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableConversionLinker":true,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"845934552",
      "vtp_conversionLabel":"WZtPCOqJ7qwBENjfr5MD",
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":72
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableConversionLinker":true,
      "vtp_enableProductReporting":false,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"845934552",
      "vtp_conversionLabel":"jb4RCI2qqLEBENjfr5MD",
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":74
    },{
      "function":"__baut",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_tagId":"26101359",
      "vtp_uetqName":"uetq",
      "vtp_eventType":"PAGE_LOAD",
      "tag_id":78
    },{
      "function":"__baut",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_tagId":"26101359",
      "vtp_uetqName":"uetq",
      "vtp_eventType":"PAGE_LOAD",
      "tag_id":228
    },{
      "function":"__baut",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_eventCategory":"click",
      "vtp_tagId":"26101359",
      "vtp_uetqName":"uetq",
      "vtp_eventType":"CUSTOM",
      "vtp_eventAction":"create_ad_clicks",
      "vtp_eventLabel":"create_ad",
      "tag_id":229
    },{
      "function":"__baut",
      "metadata":["map"],
      "setup_tags":["list",["tag",31,0]],
      "once_per_event":true,
      "vtp_eventCategory":"Lead",
      "vtp_tagId":"26101359",
      "vtp_uetqName":"uetq",
      "vtp_eventType":"CUSTOM",
      "vtp_eventAction":"Signup_submit",
      "vtp_eventLabel":"Setup-FormSubmission",
      "tag_id":230
    },{
      "function":"__baut",
      "metadata":["map"],
      "setup_tags":["list",["tag",31,0]],
      "once_per_event":true,
      "vtp_eventCategory":"purchase",
      "vtp_tagId":"26101359",
      "vtp_uetqName":"uetq",
      "vtp_eventType":"CUSTOM",
      "vtp_eventAction":"campaign_publish_click",
      "vtp_eventLabel":"api_returned_success_upon_publish_of_first_campaign_in_28_days",
      "tag_id":231
    },{
      "function":"__cvt_7997829_232",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_event_type":"PAGE_VIEW",
      "vtp_pixel_id":"7ca67b6f-64e1-4607-afa4-8301a9a7b171",
      "vtp_page_url":["macro",39],
      "tag_id":234
    },{
      "function":"__cvt_7997829_232",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_event_type":"ADD_CART",
      "vtp_pixel_id":"7ca67b6f-64e1-4607-afa4-8301a9a7b171",
      "vtp_page_url":["macro",39],
      "tag_id":236
    },{
      "function":"__cvt_7997829_232",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_event_type":"SIGN_UP",
      "vtp_pixel_id":"7ca67b6f-64e1-4607-afa4-8301a9a7b171",
      "vtp_page_url":["macro",39],
      "tag_id":240
    },{
      "function":"__cvt_7997829_232",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_event_type":"PURCHASE",
      "vtp_pixel_id":"7ca67b6f-64e1-4607-afa4-8301a9a7b171",
      "vtp_page_url":["macro",39],
      "tag_id":242
    },{
      "function":"__cvt_7997829_232",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_event_type":"VIEW_CONTENT",
      "vtp_pixel_id":"7ca67b6f-64e1-4607-afa4-8301a9a7b171",
      "vtp_page_url":["macro",39],
      "tag_id":248
    },{
      "function":"__cvt_7997829_250",
      "metadata":["map"],
      "once_per_load":true,
      "vtp_addRevenue":false,
      "vtp_accountId":"1322290",
      "vtp_addItemUrl":false,
      "vtp_addOther":false,
      "vtp_pixelType":"page_view",
      "vtp_addCurrency":false,
      "tag_id":251
    },{
      "function":"__cvt_7997829_253",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_MarketerId":"00cee78503aae764f460dc9ec1848c374b",
      "tag_id":254
    },{
      "function":"__cvt_7997829_250",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_addRevenue":false,
      "vtp_accountId":"1322290",
      "vtp_addItemUrl":false,
      "vtp_eventName":"lead",
      "vtp_addOther":false,
      "vtp_pixelType":"event",
      "vtp_addCurrency":false,
      "tag_id":262
    },{
      "function":"__cvt_7997829_250",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_addRevenue":false,
      "vtp_accountId":"1322290",
      "vtp_addItemUrl":false,
      "vtp_eventName":"make_purchase",
      "vtp_addOther":false,
      "vtp_pixelType":"event",
      "vtp_addCurrency":false,
      "tag_id":263
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableConversionLinker":true,
      "vtp_enableProductReporting":false,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"833199441",
      "vtp_conversionLabel":"9PiNCIPr-noQ0bqmjQM",
      "vtp_rdp":false,
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":289
    },{
      "function":"__sp",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableDynamicRemarketing":false,
      "vtp_conversionId":"833199441",
      "vtp_customParamsFormat":"NONE",
      "vtp_rdp":false,
      "vtp_enableOgtRmktParams":true,
      "vtp_enableUserId":true,
      "vtp_url":["macro",39],
      "vtp_enableRdpCheckbox":true,
      "tag_id":291
    },{
      "function":"__twitter_website_tag",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_event_type":"PageView",
      "vtp_twitter_pixel_id":"o4wxm",
      "tag_id":335
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableNewCustomerReporting":false,
      "vtp_enableConversionLinker":true,
      "vtp_enableProductReporting":false,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"833199441",
      "vtp_conversionLabel":"f8fMCO2c-ukBENG6po0D",
      "vtp_rdp":false,
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":339
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableNewCustomerReporting":false,
      "vtp_enableConversionLinker":true,
      "vtp_enableProductReporting":false,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"833199441",
      "vtp_conversionLabel":"X5DPCJCT-ukBENG6po0D",
      "vtp_rdp":false,
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":342
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableNewCustomerReporting":false,
      "vtp_enableConversionLinker":true,
      "vtp_enableProductReporting":false,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"833199441",
      "vtp_conversionLabel":"ipA3CMaV2ukBENG6po0D",
      "vtp_rdp":false,
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":344
    },{
      "function":"__awct",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_enableNewCustomerReporting":false,
      "vtp_enableConversionLinker":true,
      "vtp_enableProductReporting":false,
      "vtp_conversionCookiePrefix":"_gcl",
      "vtp_conversionId":"833199441",
      "vtp_conversionLabel":"_ufuCJH21-YBENG6po0D",
      "vtp_rdp":false,
      "vtp_url":["macro",39],
      "vtp_enableProductReportingCheckbox":true,
      "vtp_enableNewCustomerReportingCheckbox":true,
      "vtp_enableEnhancedConversionsCheckbox":false,
      "vtp_enableEnhancedConversionVariable":false,
      "vtp_enableRdpCheckbox":true,
      "vtp_enableTransportUrl":false,
      "vtp_enableShoppingQualitySettings":false,
      "tag_id":347
    },{
      "function":"__ua",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_nonInteraction":false,
      "vtp_overrideGaSettings":false,
      "vtp_eventCategory":"CTA",
      "vtp_trackType":"TRACK_EVENT",
      "vtp_gaSettings":["macro",21],
      "vtp_eventAction":"Register Now",
      "vtp_eventLabel":["macro",19],
      "vtp_enableRecaptchaOption":false,
      "vtp_enableUaRlsa":false,
      "vtp_enableUseInternalVersion":false,
      "vtp_enableFirebaseCampaignData":true,
      "vtp_trackTypeIsEvent":true,
      "vtp_enableGA4Schema":false,
      "tag_id":349
    },{
      "function":"__gaawc",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_fieldsToSet":["list",["map","name","user_id","value",["macro",11]],["map","name","anonymize_ip","value","true"],["map","name","accept_incoming","value","true"]],
      "vtp_sendPageView":true,
      "vtp_measurementId":["macro",49],
      "vtp_enableUserProperties":true,
      "tag_id":352
    },{
      "function":"__gaawc",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_sendPageView":true,
      "vtp_measurementId":"G-7X9J3PYWFC",
      "vtp_enableUserProperties":true,
      "tag_id":354
    },{
      "function":"__lcl",
      "vtp_waitForTags":false,
      "vtp_checkValidation":false,
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_9",
      "tag_id":396
    },{
      "function":"__fsl",
      "vtp_waitForTags":false,
      "vtp_checkValidation":false,
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_39",
      "tag_id":397
    },{
      "function":"__evl",
      "vtp_useOnScreenDuration":false,
      "vtp_useDomChangeListener":false,
      "vtp_elementSelector":"[data-ga-section]",
      "vtp_firingFrequency":"ONCE_PER_ELEMENT",
      "vtp_selectorType":"CSS",
      "vtp_onScreenRatio":"50",
      "vtp_uniqueTriggerId":"7997829_43",
      "tag_id":398
    },{
      "function":"__evl",
      "vtp_elementId":"globalfooter",
      "vtp_useOnScreenDuration":false,
      "vtp_useDomChangeListener":false,
      "vtp_firingFrequency":"ONCE_PER_ELEMENT",
      "vtp_selectorType":"ID",
      "vtp_onScreenRatio":"100",
      "vtp_uniqueTriggerId":"7997829_44",
      "tag_id":399
    },{
      "function":"__hl",
      "tag_id":400
    },{
      "function":"__fsl",
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_89",
      "tag_id":401
    },{
      "function":"__fsl",
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_91",
      "tag_id":402
    },{
      "function":"__hl",
      "tag_id":403
    },{
      "function":"__lcl",
      "vtp_waitForTags":false,
      "vtp_checkValidation":false,
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_122",
      "tag_id":404
    },{
      "function":"__lcl",
      "vtp_waitForTags":false,
      "vtp_checkValidation":false,
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_124",
      "tag_id":405
    },{
      "function":"__lcl",
      "vtp_waitForTags":false,
      "vtp_checkValidation":false,
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_126",
      "tag_id":406
    },{
      "function":"__lcl",
      "vtp_waitForTags":false,
      "vtp_checkValidation":false,
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_338",
      "tag_id":407
    },{
      "function":"__lcl",
      "vtp_waitForTags":false,
      "vtp_checkValidation":false,
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_340",
      "tag_id":408
    },{
      "function":"__lcl",
      "vtp_waitForTags":false,
      "vtp_checkValidation":false,
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_341",
      "tag_id":409
    },{
      "function":"__lcl",
      "vtp_waitForTags":false,
      "vtp_checkValidation":false,
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_343",
      "tag_id":410
    },{
      "function":"__lcl",
      "vtp_waitForTags":false,
      "vtp_checkValidation":false,
      "vtp_waitForTagsTimeout":"2000",
      "vtp_uniqueTriggerId":"7997829_345",
      "tag_id":411
    },{
      "function":"__html",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_html":"\u003Cscript type=\"text\/gtmscript\"\u003EpiAId=\"347841\";piCId=\"18842\";piHostname=\"pi.pardot.com\";(function(){function a(){var b=document.createElement(\"script\");b.type=\"text\/javascript\";b.src=(\"https:\"==document.location.protocol?\"https:\/\/pi\":\"http:\/\/cdn\")+\".pardot.com\/pd.js\";var a=document.getElementsByTagName(\"script\")[0];a.parentNode.insertBefore(b,a)}window.attachEvent?window.attachEvent(\"onload\",a):window.addEventListener(\"load\",a,!1)})();\u003C\/script\u003E",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":46
    },{
      "function":"__html",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_html":"\n\u003Cscript data-gtmsrc=\"\/\/platform.twitter.com\/oct.js\" type=\"text\/gtmscript\"\u003E\u003C\/script\u003E\n\u003Cscript type=\"text\/gtmscript\"\u003Etwttr.conversion.trackPid(\"o2g7h\",{tw_sale_amount:0,tw_order_quantity:0});\u003C\/script\u003E\n\u003Cnoscript\u003E\n\u003Cimg height=\"1\" width=\"1\" style=\"display:none;\" alt=\"\" src=\"https:\/\/analytics.twitter.com\/i\/adsct?txn_id=o2g7h\u0026amp;p_id=Twitter\u0026amp;tw_sale_amount=0\u0026amp;tw_order_quantity=0\"\u003E\n\u003Cimg height=\"1\" width=\"1\" style=\"display:none;\" alt=\"\" src=\"\/\/t.co\/i\/adsct?txn_id=o2g7h\u0026amp;p_id=Twitter\u0026amp;tw_sale_amount=0\u0026amp;tw_order_quantity=0\"\u003E\n\u003C\/noscript\u003E\n",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":65
    },{
      "function":"__html",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_html":"\n\u003Cscript data-gtmsrc=\"\/\/platform.twitter.com\/oct.js\" type=\"text\/gtmscript\"\u003E\u003C\/script\u003E\n\u003Cscript type=\"text\/gtmscript\"\u003Etwttr.conversion.trackPid(\"o2g7i\",{tw_sale_amount:0,tw_order_quantity:0});\u003C\/script\u003E\n\u003Cnoscript\u003E\n\u003Cimg height=\"1\" width=\"1\" style=\"display:none;\" alt=\"\" src=\"https:\/\/analytics.twitter.com\/i\/adsct?txn_id=o2g7i\u0026amp;p_id=Twitter\u0026amp;tw_sale_amount=0\u0026amp;tw_order_quantity=0\"\u003E\n\u003Cimg height=\"1\" width=\"1\" style=\"display:none;\" alt=\"\" src=\"\/\/t.co\/i\/adsct?txn_id=o2g7i\u0026amp;p_id=Twitter\u0026amp;tw_sale_amount=0\u0026amp;tw_order_quantity=0\"\u003E\n\u003C\/noscript\u003E\n",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":66
    },{
      "function":"__html",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_html":"\n\u003Cscript data-gtmsrc=\"\/\/platform.twitter.com\/oct.js\" type=\"text\/gtmscript\"\u003E\u003C\/script\u003E\n\u003Cscript type=\"text\/gtmscript\"\u003Etwttr.conversion.trackPid(\"o2g7l\",{tw_sale_amount:0,tw_order_quantity:0});\u003C\/script\u003E\n\u003Cnoscript\u003E\n\u003Cimg height=\"1\" width=\"1\" style=\"display:none;\" alt=\"\" src=\"https:\/\/analytics.twitter.com\/i\/adsct?txn_id=o2g7l\u0026amp;p_id=Twitter\u0026amp;tw_sale_amount=0\u0026amp;tw_order_quantity=0\"\u003E\n\u003Cimg height=\"1\" width=\"1\" style=\"display:none;\" alt=\"\" src=\"\/\/t.co\/i\/adsct?txn_id=o2g7l\u0026amp;p_id=Twitter\u0026amp;tw_sale_amount=0\u0026amp;tw_order_quantity=0\"\u003E\n\u003C\/noscript\u003E\n",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":67
    },{
      "function":"__html",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_html":"\n\u003Cscript type=\"text\/gtmscript\"\u003E!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version=\"2.0\",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,\"script\",\"https:\/\/connect.facebook.net\/en_US\/fbevents.js\");fbq(\"init\",\"179138683368266\");fbq(\"track\",\"PageView\");\u003C\/script\u003E\n\u003Cnoscript\u003E\u003Cimg height=\"1\" width=\"1\" style=\"display:none\" src=\"https:\/\/www.facebook.com\/tr?id=179138683368266\u0026amp;ev=PageView\u0026amp;noscript=1\"\u003E\u003C\/noscript\u003E\n",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":77
    },{
      "function":"__html",
      "metadata":["map"],
      "setup_tags":["list",["tag",74,0]],
      "once_per_event":true,
      "vtp_html":"\u003Cscript type=\"text\/gtmscript\"\u003Efbq(\"track\",\"InitiateCheckout\");\u003C\/script\u003E",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":224
    },{
      "function":"__html",
      "metadata":["map"],
      "setup_tags":["list",["tag",74,0]],
      "once_per_event":true,
      "vtp_html":"\u003Cscript type=\"text\/gtmscript\"\u003Efbq(\"track\",\"Lead\");\u003C\/script\u003E",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":225
    },{
      "function":"__html",
      "metadata":["map"],
      "setup_tags":["list",["tag",74,0]],
      "once_per_event":true,
      "vtp_html":"\u003Cscript type=\"text\/gtmscript\"\u003Efbq(\"track\",\"Purchase\");\u003C\/script\u003E",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":226
    },{
      "function":"__html",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_html":"\u003Cscript type=\"text\/gtmscript\"\u003EobApi(\"track\",\"New Ad Account\");\u003C\/script\u003E",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":255
    },{
      "function":"__html",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_html":"\u003Cscript type=\"text\/gtmscript\"\u003EobApi(\"track\",\"Account Activation\");\u003C\/script\u003E",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":256
    },{
      "function":"__html",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_html":"\n\u003Cscript type=\"text\/gtmscript\"\u003E(function(b,e,g,h,c,f,k,a,d){b._ROKT_=c;b[c]=b[c]||{id:h,h:k,lc:[],it:new Date,onLoaded:function(l){b[c].lc.push(l)}};a=e.createElement(\"script\");a.type=\"text\/javascript\";a.async=!0;a.src=g;f\u0026\u0026(a.integrity=f,a.crossOrigin=\"anonymous\");d=e.getElementsByTagName(\"script\")[0];d.parentNode.insertBefore(a,d)})(window,document,\"https:\/\/apps.rokt.com\/wsdk\/integrations\/snippet.js\",\"2676863261014797649_1eaae9c9a9f04cae80dba29e9ccd53fd\",\"rokt\");rokt.onLoaded(function(b){b.setAttributes({})});\u003C\/script\u003E ",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":257
    },{
      "function":"__html",
      "metadata":["map"],
      "once_per_event":true,
      "vtp_html":"\u003Cscript type=\"text\/gtmscript\"\u003EobApi(\"track\",\"Create an Ad Clicks\");\u003C\/script\u003E",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":279
    },{
      "function":"__html",
      "metadata":["map"],
      "setup_tags":["list",["tag",74,0]],
      "once_per_event":true,
      "vtp_html":"\u003Cscript type=\"text\/gtmscript\"\u003Efbq(\"track\",\"AddToCart\");\u003C\/script\u003E",
      "vtp_supportDocumentWrite":false,
      "vtp_enableIframeMode":false,
      "vtp_enableEditJsMacroBehavior":false,
      "tag_id":395
    },{
      "function":"__opt",
      "once_per_event":true,
      "vtp_overrideGaSettings":false,
      "vtp_optimizeContainerId":"GTM-KKBPJ2N",
      "vtp_gaSettings":["macro",21],
      "tag_id":20
    }],
  "predicates":[{
      "function":"_eq",
      "arg0":["macro",0],
      "arg1":"undefined"
    },{
      "function":"_eq",
      "arg0":["macro",1],
      "arg1":"undefined"
    },{
      "function":"_eq",
      "arg0":["macro",2],
      "arg1":"analyticsEvent"
    },{
      "function":"_eq",
      "arg0":["macro",24],
      "arg1":"false"
    },{
      "function":"_eq",
      "arg0":["macro",2],
      "arg1":"gtm.linkClick"
    },{
      "function":"_re",
      "arg0":["macro",25],
      "arg1":"(^$|((^|,)7997829_9($|,)))"
    },{
      "function":"_re",
      "arg0":["macro",19],
      "arg1":"geofilters.snapchat.com|geofilters.snap-dev.net|odg-local|create.snap-dev.net|cre ate.snapchat.com|geofilters-on-demand-dev.appspot.com|staging-dot-geofilters-on-demand.appspot.com",
      "ignore_case":true
    },{
      "function":"_re",
      "arg0":["macro",27],
      "arg1":"forbusiness.snapchat.com"
    },{
      "function":"_eq",
      "arg0":["macro",2],
      "arg1":"gtm.js"
    },{
      "function":"_cn",
      "arg0":["macro",19],
      "arg1":"lensfest.live"
    },{
      "function":"_eq",
      "arg0":["macro",2],
      "arg1":"virtualPageview"
    },{
      "function":"_eq",
      "arg0":["macro",2],
      "arg1":"ecommerce"
    },{
      "function":"_eq",
      "arg0":["macro",2],
      "arg1":"gtm.elementVisibility"
    },{
      "function":"_re",
      "arg0":["macro",25],
      "arg1":"(^$|((^|,)7997829_43($|,)))"
    },{
      "function":"_re",
      "arg0":["macro",25],
      "arg1":"(^$|((^|,)7997829_44($|,)))"
    },{
      "function":"_eq",
      "arg0":["macro",35],
      "arg1":"true"
    },{
      "function":"_eq",
      "arg0":["macro",37],
      "arg1":"false"
    },{
      "function":"_re",
      "arg0":["macro",38],
      "arg1":"accounts\\.snapchat\\.com|forbusiness\\.snapchat\\.com|self-serve-ads\\.snap-dev\\.net|ads\\.snapchat\\.com"
    },{
      "function":"_eq",
      "arg0":["macro",40],
      "arg1":"undefined"
    },{
      "function":"_eq",
      "arg0":["macro",4],
      "arg1":"undefined"
    },{
      "function":"_eq",
      "arg0":["macro",22],
      "arg1":"undefined"
    },{
      "function":"_eq",
      "arg0":["macro",2],
      "arg1":"analyticsTimingEvent"
    },{
      "function":"_cn",
      "arg0":["macro",19],
      "arg1":"forbusiness.snapchat.com"
    },{
      "function":"_eq",
      "arg0":["macro",2],
      "arg1":"adConversion"
    },{
      "function":"_cn",
      "arg0":["macro",20],
      "arg1":"UA-41740027-55"
    },{
      "function":"_eq",
      "arg0":["macro",2],
      "arg1":"gtm.historyChange"
    },{
      "function":"_cn",
      "arg0":["macro",38],
      "arg1":"forbusiness.snapchat.com\/partners\/contact-us"
    },{
      "function":"_eq",
      "arg0":["macro",2],
      "arg1":"gtm.formSubmit"
    },{
      "function":"_re",
      "arg0":["macro",44],
      "arg1":"pushState|popState",
      "ignore_case":true
    },{
      "function":"_re",
      "arg0":["macro",45],
      "arg1":"forbusiness.snapchat.com(.*)",
      "ignore_case":true
    },{
      "function":"_re",
      "arg0":["macro",26],
      "arg1":"inspiration|case studies",
      "ignore_case":true
    },{
      "function":"_cn",
      "arg0":["macro",23],
      "arg1":"\/inspiration"
    },{
      "function":"_re",
      "arg0":["macro",25],
      "arg1":"(^$|((^|,)7997829_122($|,)))"
    },{
      "function":"_re",
      "arg0":["macro",26],
      "arg1":"blog|news",
      "ignore_case":true
    },{
      "function":"_cn",
      "arg0":["macro",23],
      "arg1":"\/blog"
    },{
      "function":"_re",
      "arg0":["macro",25],
      "arg1":"(^$|((^|,)7997829_124($|,)))"
    },{
      "function":"_re",
      "arg0":["macro",26],
      "arg1":"create an ad",
      "ignore_case":true
    },{
      "function":"_re",
      "arg0":["macro",25],
      "arg1":"(^$|((^|,)7997829_126($|,)))"
    },{
      "function":"_cn",
      "arg0":["macro",19],
      "arg1":"forbusiness"
    },{
      "function":"_cn",
      "arg0":["macro",22],
      "arg1":"Instant Create - Create Ad"
    },{
      "function":"_cn",
      "arg0":["macro",22],
      "arg1":"Create an Ad"
    },{
      "function":"_cn",
      "arg0":["macro",22],
      "arg1":"create ad"
    },{
      "function":"_eq",
      "arg0":["macro",22],
      "arg1":"Setup-FormSubmission"
    },{
      "function":"_cn",
      "arg0":["macro",19],
      "arg1":"ads.snapchat"
    },{
      "function":"_eq",
      "arg0":["macro",1],
      "arg1":"api returned success upon publish"
    },{
      "function":"_eq",
      "arg0":["macro",22],
      "arg1":"Instant Create V2 - Create an Ad"
    },{
      "function":"_cn",
      "arg0":["macro",22],
      "arg1":"Setup-FormSubmission"
    },{
      "function":"_cn",
      "arg0":["macro",1],
      "arg1":"api returned success upon publish of first campaign in 28 days"
    },{
      "function":"_eq",
      "arg0":["macro",22],
      "arg1":"Advanced-Create-Workflow"
    },{
      "function":"_eq",
      "arg0":["macro",22],
      "arg1":"Instant-Create-Workflow"
    },{
      "function":"_eq",
      "arg0":["macro",1],
      "arg1":"api returned success upon publish of first campaign in 28 days"
    },{
      "function":"_cn",
      "arg0":["macro",19],
      "arg1":"forbusiness.snapchat.com\/local"
    },{
      "function":"_cn",
      "arg0":["macro",19],
      "arg1":"accounts.snapchat"
    },{
      "function":"_cn",
      "arg0":["macro",1],
      "arg1":"api returned success upon publish"
    },{
      "function":"_eq",
      "arg0":["macro",0],
      "arg1":"Download"
    },{
      "function":"_cn",
      "arg0":["macro",19],
      "arg1":"lensstudio"
    },{
      "function":"_cn",
      "arg0":["macro",38],
      "arg1":"https:\/\/lensstudio.snapchat.com\/"
    },{
      "function":"_re",
      "arg0":["macro",26],
      "arg1":"(download|download now)",
      "ignore_case":true
    },{
      "function":"_cn",
      "arg0":["macro",19],
      "arg1":"lensstudio.snapchat"
    },{
      "function":"_cn",
      "arg0":["macro",23],
      "arg1":"\/download"
    },{
      "function":"_re",
      "arg0":["macro",25],
      "arg1":"(^$|((^|,)7997829_338($|,)))"
    },{
      "function":"_re",
      "arg0":["macro",26],
      "arg1":"(download lens studio)",
      "ignore_case":true
    },{
      "function":"_ew",
      "arg0":["macro",23],
      "arg1":"lensstudio.snapchat.com\/"
    },{
      "function":"_re",
      "arg0":["macro",25],
      "arg1":"(^$|((^|,)7997829_340($|,)))"
    },{
      "function":"_re",
      "arg0":["macro",26],
      "arg1":"(register now)",
      "ignore_case":true
    },{
      "function":"_cn",
      "arg0":["macro",23],
      "arg1":"experience.snapchat.com\/lensfest"
    },{
      "function":"_re",
      "arg0":["macro",25],
      "arg1":"(^$|((^|,)7997829_341($|,)))"
    },{
      "function":"_re",
      "arg0":["macro",26],
      "arg1":"(download snap camera)",
      "ignore_case":true
    },{
      "function":"_ew",
      "arg0":["macro",23],
      "arg1":"snapcamera.snapchat.com\/"
    },{
      "function":"_re",
      "arg0":["macro",25],
      "arg1":"(^$|((^|,)7997829_343($|,)))"
    },{
      "function":"_cn",
      "arg0":["macro",19],
      "arg1":"snapcamera.snapchat.com"
    },{
      "function":"_re",
      "arg0":["macro",26],
      "arg1":"(download)",
      "ignore_case":true
    },{
      "function":"_ew",
      "arg0":["macro",23],
      "arg1":"\/download"
    },{
      "function":"_re",
      "arg0":["macro",25],
      "arg1":"(^$|((^|,)7997829_345($|,)))"
    },{
      "function":"_eq",
      "arg0":["macro",1],
      "arg1":"download-start"
    },{
      "function":"_eq",
      "arg0":["macro",49],
      "arg1":"undefined"
    },{
      "function":"_sw",
      "arg0":["macro",38],
      "arg1":"https:\/\/script.google.com\/a\/snapchat.com\/macros\/s\/AKfycbwaFkyHRUWrfz2xRqvB3H3AEJEsxgep3qKGy_SWipFbcjfGq5c"
    }],
  "rules":[
    [["if",2],["unless",0,1],["add",1]],
    [["if",3,4,5],["add",2]],
    [["if",8],["unless",6,7],["add",3]],
    [["if",8,9],["add",3]],
    [["if",10],["add",0,9]],
    [["if",11],["add",5]],
    [["if",12,13],["add",6]],
    [["if",12,14],["add",6]],
    [["if",8,15,16,17],["add",7,9]],
    [["if",21],["unless",0,18,19,20],["add",4]],
    [["if",8,22],["add",8,40]],
    [["if",15,16,23],["add",10]],
    [["if",24,25],["add",11]],
    [["if",15,16,26,27],["add",12,13,15]],
    [["if",25,28,29],["add",14]],
    [["if",4,30,31,32],["add",16]],
    [["if",4,33,34,35],["add",16]],
    [["if",4,36,37],["add",17]],
    [["if",8,15,16,38],["add",18,31,41,70,23,24,30]],
    [["if",2,15,16,39],["add",19,25,71]],
    [["if",2,15,16,40],["add",20,32,81,25,71]],
    [["if",2,15,16,41],["add",20,32,71,81]],
    [["if",2,15,16,42,43],["add",21,33]],
    [["if",2,15,16,44],["add",22,27,73]],
    [["if",2,15,16,45],["add",25,71,28]],
    [["if",2,15,16,46],["add",26,72,78]],
    [["if",2,15,16,47],["add",29,34]],
    [["if",2,48],["add",34,77]],
    [["if",2,44,49],["add",34,77]],
    [["if",8,15,22],["add",35,74]],
    [["if",2,15,40],["add",36]],
    [["if",2,15,41],["add",36,75,80]],
    [["if",2,15,46],["add",37,42,76,82,80]],
    [["if",2,15,50],["add",38,77]],
    [["if",8,15,51],["add",39]],
    [["if",8,52],["add",40,74]],
    [["if",8,43],["add",40,74]],
    [["if",2,53],["add",43]],
    [["if",2,54,55],["add",44]],
    [["if",8,55],["add",45]],
    [["if",8,15,56],["add",46]],
    [["if",4,57,58,59,60],["add",47]],
    [["if",4,9,61,62,63],["add",47]],
    [["if",4,9,64,65,66],["add",48,51]],
    [["if",4,9,67,68,69],["add",49]],
    [["if",4,70,71,72,73],["add",49]],
    [["if",2,54,70,74],["add",50]],
    [["if",8],["unless",75],["add",52]],
    [["if",8,76],["add",53]],
    [["if",8],["add",54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69]],
    [["if",2,15,16,53],["add",79]],
    [["if",2,15,53],["add",80]]]
},
"runtime":[[50,"__cvt_7997829_232",[46,"a"],[41,"b","c","d","e","f","g","h","i","j"],[50,"k",[46],[41,"n","o","p"],[3,"n",[8]],[3,"o",0],[42,[23,[15,"o"],[17,[15,"arguments"],"length"]],[35,[3,"o",[0,[15,"o"],1]]],false,[46,[47,"p",[16,[15,"arguments"],[15,"o"]],[46,[43,[15,"n"],[15,"p"],[16,[16,[15,"arguments"],[15,"o"]],[15,"p"]]]]]]],[36,[15,"n"]]],[50,"l",[46],[41,"n"],[3,"n",["e","snaptr"]],[22,[15,"n"],[46,[36,[15,"n"]]]],["j","snaptr",[51,"",[7],[41,"o"],[3,"o",["e","snaptr.handleRequest"]],[22,[15,"o"],[46,["c","snaptr.handleRequest.apply",[45],[15,"arguments"]]],[46,["c","snaptr.queue.push",[15,"arguments"]]]]]],[36,["e","snaptr"]]],[50,"m",[46],[41,"n","o","p","q"],[3,"n",["l"]],["f","snaptr.queue"],["j","snaptr.sendPixelByGTM",[15,"i"],true],[43,[15,"a"],"integration","gtm"],["b","data \u003d ",[15,"a"]],[3,"o",[39,[17,[15,"a"],"additional_init_data"],["h",[17,[15,"a"],"additional_init_data"],"key","value"],[8]]],[3,"p",["k",[15,"a"],[15,"o"]]],["b","initData \u003d ",[15,"p"]],["n","init",[17,[15,"p"],"pixel_id"],[15,"p"]],["n","track",[17,[15,"p"],"pixel_id"],[17,[15,"p"],"event_type"],[15,"a"]],[3,"q","https://sc-static.net/scevent.min.js"],["g",[15,"q"],[17,[15,"a"],"gtmOnSuccess"],[17,[15,"a"],"gtmOnFailure"],[15,"q"]]],[3,"b",["require","logToConsole"]],[3,"c",["require","callInWindow"]],[3,"d",["require","callLater"]],[3,"e",["require","copyFromWindow"]],[3,"f",["require","createQueue"]],[3,"g",["require","injectScript"]],[3,"h",["require","makeTableMap"]],[3,"i",["require","sendPixel"]],[3,"j",["require","setInWindow"]],["m"]],[50,"__cvt_7997829_250",[46,"a"],[52,"b",["require","createQueue"]],[52,"c",["require","injectScript"]],[52,"d",["require","copyFromWindow"]],[52,"e",["require","makeTableMap"]],[52,"f",["require","logToConsole"]],[52,"g",["require","encodeUriComponent"]],[52,"h",["b","__tfa_pixel_init"]],[52,"i",["d","__tfa_pixel_init"]],[52,"j",["b","_tfa"]],[52,"k",[17,[15,"a"],"accountId"]],[52,"l",[17,[15,"a"],"pixelType"]],[52,"m",[39,[20,[17,[15,"a"],"eventName"],"custom"],[17,[15,"a"],"customEventName"],[17,[15,"a"],"eventName"]]],[52,"n",[39,[17,[15,"a"],"otherParams"],["e",[17,[15,"a"],"otherParams"],"name","value"],[8]]],[52,"o",[8,"notify","event","id",[15,"k"]]],[22,[17,[15,"a"],"itemUrl"],[46,[43,[15,"o"],"item-url",[17,[15,"a"],"itemUrl"]]]],[22,[17,[15,"a"],"revenue"],[46,[43,[15,"o"],"revenue",[17,[15,"a"],"revenue"]]]],[22,[17,[15,"a"],"currency"],[46,[43,[15,"o"],"currency",[17,[15,"a"],"currency"]]]],[55,"p",[15,"n"],[46,[43,[15,"o"],[15,"p"],[16,[15,"n"],[15,"p"]]]]],[22,[20,[2,[15,"i"],"indexOf",[7,[15,"k"]]],[27,1]],[46,[53,[52,"p",[8,"notify","event","id",[15,"k"],"name","page_view"]],[22,[17,[15,"a"],"itemUrl"],[46,[43,[15,"p"],"item-url",[17,[15,"a"],"itemUrl"]]]],["j",[15,"p"]],["h",[15,"k"]]]]],[22,[20,[15,"l"],"event"],[46,[43,[15,"o"],"name",[15,"m"]],["j",[15,"o"]]]],["c",[0,[0,"https://cdn.taboola.com/libtrc/unip/",["g",[15,"k"]]],"/tfa.js"],[17,[15,"a"],"gtmOnSuccess"],[17,[15,"a"],"gtmOnFailure"],"_tfa_script"]],[50,"__cvt_7997829_253",[46,"a"],[52,"b",["require","injectScript"]],[52,"c",["require","setInWindow"]],[52,"d",["require","createArgumentsQueue"]],[52,"e",["require","copyFromWindow"]],[52,"f",["require","callInWindow"]],[41,"g"],[3,"g",["e","obApi"]],[22,[28,[15,"g"]],[46,[53,[52,"h","https://amplify.outbrain.com/cp/obtp.js"],[41,"i"],[3,"g",[51,"",[7],["i",[16,[15,"arguments"],0],[16,[15,"arguments"],1],[16,[15,"arguments"],2]]]],[43,[15,"g"],"version","1.0-gtm"],[43,[15,"g"],"loaded",true],[43,[15,"g"],"marketerId",[2,[17,[15,"a"],"MarketerId"],"split",[7,","]]],["c","obApi",[15,"g"],true],[3,"i",["d","obTag","obApi.queue"]],["g","track","PAGE_VIEW"],["b",[15,"h"],[17,[15,"a"],"gtmOnSuccess"],[17,[15,"a"],"gtmOnFailure"]]]],[46,[2,[2,[17,[15,"a"],"MarketerId"],"split",[7,","]],"forEach",[7,[51,"",[7,"h"],["f","obApi.marketerId.push",[15,"h"]]]]]]]],[50,"__twitter_website_tag",[46,"a"],[50,"i",[46],[41,"l"],[3,"l",["d","twq"]],[22,[15,"l"],[46,[36,[15,"l"]]]],["h","twq",[51,"",[7],[52,"n",["d","twq.exe.apply"]],[22,[15,"n"],[46,["c","twq.exe.apply",[45],[15,"arguments"]]],[46,["c","twq.queue.push",[15,"arguments"]]]]],true],["h","twq.version","1",true],["h","twq.queue",[7],true],[52,"m",[51,"",[7]]],["e","https://static.ads-twitter.com/uwt.js",[15,"m"],[15,"m"],"twitter_website_tag"],[36,["d","twq"]]],[52,"b",["require","createArgumentsQueue"]],[52,"c",["require","callInWindow"]],[52,"d",["require","copyFromWindow"]],[52,"e",["require","injectScript"]],[52,"f",["require","makeString"]],[52,"g",["require","makeTableMap"]],[52,"h",["require","setInWindow"]],[41,"j"],[3,"j",["i"]],["j","init",["f",[17,[15,"a"],"twitter_pixel_id"]]],[52,"k",["g",[30,[17,[15,"a"],"event_parameters"],[7]],"param_table_key_column","param_table_value_column"]],[22,[1,[15,"k"],[2,[15,"k"],"hasOwnProperty",[7,"content_ids"]]],[46,[53,[41,"l"],[3,"l",[16,[15,"k"],"content_ids"]],[3,"l",[2,[2,[15,"l"],"split",[7,"\""]],"join",[7,"\u0027"]]],[41,"m"],[3,"m",[2,[2,[15,"l"],"slice",[7,[2,[15,"l"],"indexOf",[7,"["]],[2,[15,"l"],"indexOf",[7,"]"]]]],"split",[7,","]]],[3,"m",[2,[15,"m"],"map",[7,[51,"",[7,"n"],[36,[30,[16,[2,[15,"n"],"split",[7,"\u0027"]],1],""]]]]]],[43,[15,"k"],"content_ids",[15,"m"]]]]],["j","track",["f",[17,[15,"a"],"event_type"]],[15,"k"]],[2,[15,"a"],"gtmOnSuccess",[7]]],[50,"__bzi",[46,"a"],[52,"b",["require","injectScript"]],[52,"c",["require","setInWindow"]],["c","_linkedin_data_partner_id",[17,[15,"a"],"id"]],["b","https://snap.licdn.com/li.lms-analytics/insight.min.js",[17,[15,"a"],"gtmOnSuccess"],[17,[15,"a"],"gtmOnFailure"]]]]
,"permissions":{"__cvt_7997829_232":{"inject_script":{"urls":["https:\/\/sc-static.net\/*","https:\/\/tr.snapchat.com\/*"]},"logging":{"environments":"debug"},"access_globals":{"keys":[{"key":"snaptr","read":true,"write":true,"execute":true},{"key":"snaptr.handleRequest","read":true,"write":false,"execute":true},{"key":"snaptr.handleRequest.apply","read":true,"write":false,"execute":true},{"key":"snaptr.queue","read":true,"write":true,"execute":false},{"key":"snaptr.queue.push","read":true,"write":false,"execute":true},{"key":"snaptr.sendPixelByGTM","read":true,"write":true,"execute":true}]},"send_pixel":{"allowedUrls":"specific","urls":["https:\/\/tr.snapchat.com\/*"]}},"__cvt_7997829_250":{"access_globals":{"keys":[{"key":"_tfa","read":true,"write":true,"execute":false},{"key":"__tfa_pixel_init","read":true,"write":true,"execute":false}]},"inject_script":{"urls":["https:\/\/cdn.taboola.com\/libtrc\/unip\/*"]},"logging":{"environments":"debug"}},"__cvt_7997829_253":{"access_globals":{"keys":[{"key":"obApi","read":true,"write":true,"execute":false},{"key":"gtag","read":true,"write":true,"execute":false},{"key":"obApi.queue","read":true,"write":true,"execute":false},{"key":"obTag","read":true,"write":true,"execute":false},{"key":"obApi.marketerId.push","read":true,"write":true,"execute":true}]},"inject_script":{"urls":["https:\/\/amplify.outbrain.com\/*"]}},"__twitter_website_tag":{"access_globals":{"keys":[{"key":"twq","read":true,"write":true,"execute":true},{"key":"twq.exe","read":true,"write":true,"execute":true},{"key":"twq.queue","read":true,"write":true,"execute":true},{"key":"twq.queue.push","read":true,"write":true,"execute":true},{"key":"twq.version","read":true,"write":true,"execute":false},{"key":"twq.exe.apply","read":true,"write":true,"execute":true}]},"inject_script":{"urls":["https:\/\/static.ads-twitter.com\/uwt.js"]}},"__bzi":{"access_globals":{"keys":[{"key":"_linkedin_data_partner_id","read":true,"write":true,"execute":false}]},"inject_script":{"urls":["https:\/\/snap.licdn.com\/li.lms-analytics\/insight.min.js"]}}}
,"sandboxed_scripts":["__cvt_7997829_232","__cvt_7997829_250","__cvt_7997829_253"]
,"security_groups":{
"nonGoogleScripts":["__twitter_website_tag","__bzi"]}

};

/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
var aa,ca=function(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}},da=function(a){var b="undefined"!=typeof Symbol&&Symbol.iterator&&a[Symbol.iterator];return b?b.call(a):{next:ca(a)}},ea="function"==typeof Object.create?Object.create:function(a){var b=function(){};b.prototype=a;return new b},fa;
if("function"==typeof Object.setPrototypeOf)fa=Object.setPrototypeOf;else{var ha;a:{var ia={a:!0},ja={};try{ja.__proto__=ia;ha=ja.a;break a}catch(a){}ha=!1}fa=ha?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}
var la=fa,ma=function(a,b){a.prototype=ea(b.prototype);a.prototype.constructor=a;if(la)la(a,b);else for(var c in b)if("prototype"!=c)if(Object.defineProperties){var d=Object.getOwnPropertyDescriptor(b,c);d&&Object.defineProperty(a,c,d)}else a[c]=b[c];a.vi=b.prototype},na=this||self,ra=function(a){if(a&&a!=na)return oa(a.document);null===qa&&(qa=oa(na.document));return qa},sa=/^[\w+/_-]+[=]{0,2}$/,qa=null,oa=function(a){var b=a.querySelector&&a.querySelector("script[nonce]");if(b){var c=b.nonce||b.getAttribute("nonce");
if(c&&sa.test(c))return c}return""},ta=function(a){return a};var xa=function(a,b){this.g=a;this.o=b};var za=function(a){return"number"===typeof a&&0<=a&&isFinite(a)&&0===a%1||"string"===typeof a&&"-"!==a[0]&&a===""+parseInt(a,10)},Aa=function(){this.D={};this.s=!1;this.J={}};Aa.prototype.get=function(a){return this.D["dust."+a]};Aa.prototype.set=function(a,b){this.s||(a="dust."+a,this.J.hasOwnProperty(a)||(this.D[a]=b))};Aa.prototype.has=function(a){return this.D.hasOwnProperty("dust."+a)};
var Ba=function(a){var b=[],c;for(c in a.D)a.D.hasOwnProperty(c)&&b.push(c.substr(5));return b},Ca=function(a,b){b="dust."+b;a.s||a.J.hasOwnProperty(b)||delete a.D[b]};var Da=function(a){this.o=new Aa;this.g=[];a=a||[];for(var b in a)a.hasOwnProperty(b)&&(za(b)?this.g[Number(b)]=a[Number(b)]:this.o.set(b,a[b]))};aa=Da.prototype;aa.toString=function(a){if(a&&0<=a.indexOf(this))return"";for(var b=[],c=0;c<this.g.length;c++){var d=this.g[c];null===d||void 0===d?b.push(""):d instanceof Da?(a=a||[],a.push(this),b.push(d.toString(a)),a.pop()):b.push(d.toString())}return b.join(",")};
aa.set=function(a,b){if("length"===a){if(!za(b))throw Error("RangeError: Length property must be a valid integer.");this.g.length=Number(b)}else za(a)?this.g[Number(a)]=b:this.o.set(a,b)};aa.get=function(a){return"length"===a?this.length():za(a)?this.g[Number(a)]:this.o.get(a)};aa.length=function(){return this.g.length};aa.Ib=function(){for(var a=Ba(this.o),b=0;b<this.g.length;b++)a.push(b+"");return new Da(a)};var Ea=function(a,b){za(b)?delete a.g[Number(b)]:Ca(a.o,b)};aa=Da.prototype;aa.pop=function(){return this.g.pop()};
aa.push=function(a){return this.g.push.apply(this.g,Array.prototype.slice.call(arguments))};aa.shift=function(){return this.g.shift()};aa.splice=function(a,b,c){return new Da(this.g.splice.apply(this.g,arguments))};aa.unshift=function(a){return this.g.unshift.apply(this.g,Array.prototype.slice.call(arguments))};aa.has=function(a){return za(a)&&this.g.hasOwnProperty(a)||this.o.has(a)};var Ga=function(){function a(f,g){if(b[f]){if(b[f].Hc+g>b[f].max)throw Error("Quota exceeded");b[f].Hc+=g}}var b={},c=void 0,d=void 0,e={Nh:function(f){c=f},yf:function(){c&&a(c,1)},Ph:function(f){d=f},Ua:function(f){d&&a(d,f)},$h:function(f,g){b[f]=b[f]||{Hc:0};b[f].max=g},th:function(f){return b[f]&&b[f].Hc||0},reset:function(){b={}},hh:a};e.onFnConsume=e.Nh;e.consumeFn=e.yf;e.onStorageConsume=e.Ph;e.consumeStorage=e.Ua;e.setMax=e.$h;e.getConsumed=e.th;e.reset=e.reset;e.consume=e.hh;return e};var Ia=function(a,b){this.s=a;this.N=function(c,d,e){return c.apply(d,e)};this.D=b;this.o=new Aa;this.g=this.J=void 0};Ia.prototype.add=function(a,b){Ja(this,a,b,!1)};var Ja=function(a,b,c,d){if(!a.o.s)if(a.s.Ua(("string"===typeof b?b.length:1)+("string"===typeof c?c.length:1)),d){var e=a.o;e.set(b,c);e.J["dust."+b]=!0}else a.o.set(b,c)};
Ia.prototype.set=function(a,b){this.o.s||(!this.o.has(a)&&this.D&&this.D.has(a)?this.D.set(a,b):(this.s.Ua(("string"===typeof a?a.length:1)+("string"===typeof b?b.length:1)),this.o.set(a,b)))};Ia.prototype.get=function(a){return this.o.has(a)?this.o.get(a):this.D?this.D.get(a):void 0};Ia.prototype.has=function(a){return!!this.o.has(a)||!(!this.D||!this.D.has(a))};var Ka=function(a){var b=new Ia(a.s,a);a.J&&(b.J=a.J);b.N=a.N;b.g=a.g;return b};var La={},Na=function(a,b){La[a]=La[a]||[];La[a][b]=!0},Oa=function(a){for(var b=[],c=La[a]||[],d=0;d<c.length;d++)c[d]&&(b[Math.floor(d/6)]^=1<<d%6);for(var e=0;e<b.length;e++)b[e]="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_".charAt(b[e]||0);return b.join("")};var Pa=function(){},Qa=function(a){return"function"==typeof a},k=function(a){return"string"==typeof a},Ra=function(a){return"number"==typeof a&&!isNaN(a)},Sa=function(a){var b="[object Array]"==Object.prototype.toString.call(Object(a));Array.isArray?Array.isArray(a)!==b&&Na("TAGGING",4):Na("TAGGING",5);return b},Ta=function(a,b){if(Array.prototype.indexOf){var c=a.indexOf(b);return"number"==typeof c?c:-1}for(var d=0;d<a.length;d++)if(a[d]===b)return d;return-1},Ua=function(a,b){if(a&&Sa(a))for(var c=
0;c<a.length;c++)if(a[c]&&b(a[c]))return a[c]},Wa=function(a,b){if(!Ra(a)||!Ra(b)||a>b)a=0,b=2147483647;return Math.floor(Math.random()*(b-a+1)+a)},Ya=function(a,b){for(var c=new Xa,d=0;d<a.length;d++)c.set(a[d],!0);for(var e=0;e<b.length;e++)if(c.get(b[e]))return!0;return!1},Za=function(a,b){for(var c in a)Object.prototype.hasOwnProperty.call(a,c)&&b(c,a[c])},$a=function(a){return!!a&&("[object Arguments]"==Object.prototype.toString.call(a)||Object.prototype.hasOwnProperty.call(a,"callee"))},ab=
function(a){return Math.round(Number(a))||0},eb=function(a){return"false"==String(a).toLowerCase()?!1:!!a},fb=function(a){var b=[];if(Sa(a))for(var c=0;c<a.length;c++)b.push(String(a[c]));return b},gb=function(a){return a?a.replace(/^\s+|\s+$/g,""):""},hb=function(){return(new Date).getTime()},Xa=function(){this.prefix="gtm.";this.values={}};Xa.prototype.set=function(a,b){this.values[this.prefix+a]=b};Xa.prototype.get=function(a){return this.values[this.prefix+a]};
var ib=function(a,b,c){return a&&a.hasOwnProperty(b)?a[b]:c},jb=function(a){var b=a;return function(){if(b){var c=b;b=void 0;try{c()}catch(d){}}}},kb=function(a,b){for(var c in b)b.hasOwnProperty(c)&&(a[c]=b[c])},nb=function(a){for(var b in a)if(a.hasOwnProperty(b))return!0;return!1},qb=function(a,b){for(var c=[],d=0;d<a.length;d++)c.push(a[d]),c.push.apply(c,b[a[d]]||[]);return c},rb=function(a,b){var c=n;b=b||[];for(var d=c,e=0;e<a.length-1;e++){if(!d.hasOwnProperty(a[e]))return;d=d[a[e]];if(0<=
Ta(b,d))return}return d},tb=function(a,b){for(var c={},d=c,e=a.split("."),f=0;f<e.length-1;f++)d=d[e[f]]={};d[e[e.length-1]]=b;return c},vb=function(a){var b=[];Za(a,function(c,d){10>c.length&&d&&b.push(c)});return b.join(",")};var wb=function(a,b){Aa.call(this);this.N=a;this.ra=b};ma(wb,Aa);wb.prototype.toString=function(){return this.N};wb.prototype.Ib=function(){return new Da(Ba(this))};wb.prototype.g=function(a,b){a.s.yf();return this.ra.apply(new xb(this,a),Array.prototype.slice.call(arguments,1))};wb.prototype.o=function(a,b){try{return this.g.apply(this,Array.prototype.slice.call(arguments,0))}catch(c){}};
var zb=function(a,b){for(var c,d=0;d<b.length&&!(c=yb(a,b[d]),c instanceof xa);d++);return c},yb=function(a,b){try{var c=a.get(String(b[0]));if(!(c&&c instanceof wb))throw Error("Attempting to execute non-function "+b[0]+".");return c.g.apply(c,[a].concat(b.slice(1)))}catch(e){var d=a.J;d&&d(e,b.context?{id:b[0],line:b.context.line}:null);throw e;}},xb=function(a,b){this.o=a;this.g=b},z=function(a,b){var c=a.g;return Sa(b)?yb(c,b):b},F=function(a){return a.o.N};var Ab=function(){Aa.call(this)};ma(Ab,Aa);Ab.prototype.Ib=function(){return new Da(Ba(this))};var Cb={control:function(a,b){return new xa(a,z(this,b))},fn:function(a,b,c){var d=this.g,e=z(this,b);if(!(e instanceof Da))throw Error("Error: non-List value given for Fn argument names.");var f=Array.prototype.slice.call(arguments,2);this.g.s.Ua(a.length+f.length);return new wb(a,function(){return function(g){var h=Ka(d);void 0===h.g&&(h.g=this.g.g);for(var l=Array.prototype.slice.call(arguments,0),m=0;m<l.length;m++)if(l[m]=z(this,l[m]),l[m]instanceof xa)return l[m];for(var p=e.get("length"),q=
0;q<p;q++)q<l.length?h.add(e.get(q),l[q]):h.add(e.get(q),void 0);h.add("arguments",new Da(l));var r=zb(h,f);if(r instanceof xa)return"return"===r.g?r.o:r}}())},list:function(a){var b=this.g.s;b.Ua(arguments.length);for(var c=new Da,d=0;d<arguments.length;d++){var e=z(this,arguments[d]);"string"===typeof e&&b.Ua(e.length?e.length-1:0);c.push(e)}return c},map:function(a){for(var b=this.g.s,c=new Ab,d=0;d<arguments.length-1;d+=2){var e=z(this,arguments[d])+"",f=z(this,arguments[d+1]),g=e.length;g+="string"===
typeof f?f.length:1;b.Ua(g);c.set(e,f)}return c},undefined:function(){}};var Gb=function(){this.s=Ga();this.g=new Ia(this.s)},Hb=function(a,b,c){var d=new wb(b,c);d.s=!0;a.g.set(b,d)};Gb.prototype.Lc=function(a,b){var c=Array.prototype.slice.call(arguments,0);return this.o(c)};Gb.prototype.o=function(a){for(var b,c=0;c<arguments.length;c++)b=yb(this.g,arguments[c]);return b};Gb.prototype.D=function(a,b){var c=Ka(this.g);c.g=a;for(var d,e=1;e<arguments.length;e++)d=d=yb(c,arguments[e]);return d};var Ib=function(a){if(a instanceof Ib)return a;this.ya=a};Ib.prototype.toString=function(){return String(this.ya)};/*
 jQuery v1.9.1 (c) 2005, 2012 jQuery Foundation, Inc. jquery.org/license. */
var Jb=/\[object (Boolean|Number|String|Function|Array|Date|RegExp)\]/,Kb=function(a){if(null==a)return String(a);var b=Jb.exec(Object.prototype.toString.call(Object(a)));return b?b[1].toLowerCase():"object"},Lb=function(a,b){return Object.prototype.hasOwnProperty.call(Object(a),b)},Mb=function(a){if(!a||"object"!=Kb(a)||a.nodeType||a==a.window)return!1;try{if(a.constructor&&!Lb(a,"constructor")&&!Lb(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}for(var b in a);return void 0===
b||Lb(a,b)},G=function(a,b){var c=b||("array"==Kb(a)?[]:{}),d;for(d in a)if(Lb(a,d)){var e=a[d];"array"==Kb(e)?("array"!=Kb(c[d])&&(c[d]=[]),c[d]=G(e,c[d])):Mb(e)?(Mb(c[d])||(c[d]={}),c[d]=G(e,c[d])):c[d]=e}return c};var Pb=function(a,b,c){var d=[],e=[],f=function(h,l){for(var m=Ba(h),p=0;p<m.length;p++)l[m[p]]=g(h.get(m[p]))},g=function(h){var l=Ta(d,h);if(-1<l)return e[l];if(h instanceof Da){var m=[];d.push(h);e.push(m);for(var p=h.Ib(),q=0;q<p.length();q++)m[p.get(q)]=g(h.get(p.get(q)));return m}if(h instanceof Ab){var r={};d.push(h);e.push(r);f(h,r);return r}if(h instanceof wb){var u=function(){for(var t=Array.prototype.slice.call(arguments,0),v=0;v<t.length;v++)t[v]=Nb(t[v],b,!!c);var x=b?b.s:Ga(),A=new Ia(x);
b&&(A.g=b.g);return g(h.g.apply(h,[A].concat(t)))};d.push(h);e.push(u);f(h,u);return u}switch(typeof h){case "boolean":case "number":case "string":case "undefined":return h;case "object":if(null===h)return null}};return g(a)},Nb=function(a,b,c){var d=[],e=[],f=function(h,l){for(var m in h)h.hasOwnProperty(m)&&l.set(m,g(h[m]))},g=function(h){var l=Ta(d,
h);if(-1<l)return e[l];if(Sa(h)||$a(h)){var m=new Da([]);d.push(h);e.push(m);for(var p in h)h.hasOwnProperty(p)&&m.set(p,g(h[p]));return m}if(Mb(h)){var q=new Ab;d.push(h);e.push(q);f(h,q);return q}if("function"===typeof h){var r=new wb("",function(t){for(var v=Array.prototype.slice.call(arguments,0),x=0;x<v.length;x++)v[x]=Pb(z(this,v[x]),b,!!c);return g((0,this.g.N)(h,h,v))});d.push(h);e.push(r);f(h,r);return r}var u=typeof h;if(null===h||"string"===u||"number"===u||"boolean"===u)return h;};return g(a)};var Qb=function(a){for(var b=[],c=0;c<a.length();c++)a.has(c)&&(b[c]=a.get(c));return b},Rb=function(a){if(void 0===a||Sa(a)||Mb(a))return!0;switch(typeof a){case "boolean":case "number":case "string":case "function":return!0}return!1};var Sb={supportedMethods:"concat every filter forEach hasOwnProperty indexOf join lastIndexOf map pop push reduce reduceRight reverse shift slice some sort splice unshift toString".split(" "),concat:function(a,b){for(var c=[],d=0;d<this.length();d++)c.push(this.get(d));for(var e=1;e<arguments.length;e++)if(arguments[e]instanceof Da)for(var f=arguments[e],g=0;g<f.length();g++)c.push(f.get(g));else c.push(arguments[e]);return new Da(c)},every:function(a,b){for(var c=this.length(),d=0;d<this.length()&&
d<c;d++)if(this.has(d)&&!b.g(a,this.get(d),d,this))return!1;return!0},filter:function(a,b){for(var c=this.length(),d=[],e=0;e<this.length()&&e<c;e++)this.has(e)&&b.g(a,this.get(e),e,this)&&d.push(this.get(e));return new Da(d)},forEach:function(a,b){for(var c=this.length(),d=0;d<this.length()&&d<c;d++)this.has(d)&&b.g(a,this.get(d),d,this)},hasOwnProperty:function(a,b){return this.has(b)},indexOf:function(a,b,c){var d=this.length(),e=void 0===c?0:Number(c);0>e&&(e=Math.max(d+e,0));for(var f=e;f<d;f++)if(this.has(f)&&
this.get(f)===b)return f;return-1},join:function(a,b){for(var c=[],d=0;d<this.length();d++)c.push(this.get(d));return c.join(b)},lastIndexOf:function(a,b,c){var d=this.length(),e=d-1;void 0!==c&&(e=0>c?d+c:Math.min(c,e));for(var f=e;0<=f;f--)if(this.has(f)&&this.get(f)===b)return f;return-1},map:function(a,b){for(var c=this.length(),d=[],e=0;e<this.length()&&e<c;e++)this.has(e)&&(d[e]=b.g(a,this.get(e),e,this));return new Da(d)},pop:function(){return this.pop()},push:function(a,b){return this.push.apply(this,
Array.prototype.slice.call(arguments,1))},reduce:function(a,b,c){var d=this.length(),e,f=0;if(void 0!==c)e=c;else{if(0===d)throw Error("TypeError: Reduce on List with no elements.");for(var g=0;g<d;g++)if(this.has(g)){e=this.get(g);f=g+1;break}if(g===d)throw Error("TypeError: Reduce on List with no elements.");}for(var h=f;h<d;h++)this.has(h)&&(e=b.g(a,e,this.get(h),h,this));return e},reduceRight:function(a,b,c){var d=this.length(),e,f=d-1;if(void 0!==c)e=c;else{if(0===d)throw Error("TypeError: ReduceRight on List with no elements.");
for(var g=1;g<=d;g++)if(this.has(d-g)){e=this.get(d-g);f=d-(g+1);break}if(g>d)throw Error("TypeError: ReduceRight on List with no elements.");}for(var h=f;0<=h;h--)this.has(h)&&(e=b.g(a,e,this.get(h),h,this));return e},reverse:function(){for(var a=Qb(this),b=a.length-1,c=0;0<=b;b--,c++)a.hasOwnProperty(b)?this.set(c,a[b]):Ea(this,c);return this},shift:function(){return this.shift()},slice:function(a,b,c){var d=this.length();void 0===b&&(b=0);b=0>b?Math.max(d+b,0):Math.min(b,d);c=void 0===c?d:0>c?
Math.max(d+c,0):Math.min(c,d);c=Math.max(b,c);for(var e=[],f=b;f<c;f++)e.push(this.get(f));return new Da(e)},some:function(a,b){for(var c=this.length(),d=0;d<this.length()&&d<c;d++)if(this.has(d)&&b.g(a,this.get(d),d,this))return!0;return!1},sort:function(a,b){var c=Qb(this);void 0===b?c.sort():c.sort(function(e,f){return Number(b.g(a,e,f))});for(var d=0;d<c.length;d++)c.hasOwnProperty(d)?this.set(d,c[d]):Ea(this,d)},splice:function(a,b,c,d){return this.splice.apply(this,Array.prototype.splice.call(arguments,
1,arguments.length-1))},toString:function(){return this.toString()},unshift:function(a,b){return this.unshift.apply(this,Array.prototype.slice.call(arguments,1))}};var Ub="charAt concat indexOf lastIndexOf match replace search slice split substring toLowerCase toLocaleLowerCase toString toUpperCase toLocaleUpperCase trim".split(" "),Vb=new xa("break"),Wb=new xa("continue"),Xb=function(a,b){return z(this,a)+z(this,b)},Yb=function(a,b){return z(this,a)&&z(this,b)},Zb=function(a,b,c){a=z(this,a);b=z(this,b);c=z(this,c);if(!(c instanceof Da))throw Error("Error: Non-List argument given to Apply instruction.");if(null===a||void 0===a)throw Error("TypeError: Can't read property "+
b+" of "+a+".");if("boolean"===typeof a||"number"===typeof a){if("toString"===b)return a.toString();throw Error("TypeError: "+a+"."+b+" is not a function.");}if("string"===typeof a){if(0<=Ta(Ub,b)){var d=Pb(c);return Nb(a[b].apply(a,d),this.g)}throw Error("TypeError: "+b+" is not a function");}if(a instanceof Da){if(a.has(b)){var e=a.get(b);if(e instanceof wb){var f=Qb(c);f.unshift(this.g);return e.g.apply(e,f)}throw Error("TypeError: "+b+" is not a function");}if(0<=Ta(Sb.supportedMethods,b)){var g=
Qb(c);g.unshift(this.g);return Sb[b].apply(a,g)}}if(a instanceof wb||a instanceof Ab){if(a.has(b)){var h=a.get(b);if(h instanceof wb){var l=Qb(c);l.unshift(this.g);return h.g.apply(h,l)}throw Error("TypeError: "+b+" is not a function");}if("toString"===b)return a instanceof wb?a.N:a.toString();if("hasOwnProperty"===b)return a.has.apply(a,Qb(c))}if(a instanceof Ib&&"toString"===b)return a.toString();throw Error("TypeError: Object has no '"+b+"' property.");},$b=function(a,b){a=z(this,a);if("string"!==
typeof a)throw Error("Invalid key name given for assignment.");var c=this.g;if(!c.has(a))throw Error("Attempting to assign to undefined value "+b);var d=z(this,b);c.set(a,d);return d},ac=function(a){var b=Ka(this.g),c=zb(b,Array.prototype.slice.apply(arguments));if(c instanceof xa)return c},bc=function(){return Vb},cc=function(a){for(var b=z(this,a),c=0;c<b.length;c++){var d=z(this,b[c]);if(d instanceof xa)return d}},dc=function(a){for(var b=this.g,c=0;c<arguments.length-1;c+=2){var d=arguments[c];
if("string"===typeof d){var e=z(this,arguments[c+1]);Ja(b,d,e,!0)}}},ec=function(){return Wb},hc=function(a,b,c){var d=new Da;b=z(this,b);for(var e=0;e<b.length;e++)d.push(b[e]);var f=[51,a,d].concat(Array.prototype.splice.call(arguments,2,arguments.length-2));this.g.add(a,z(this,f))},ic=function(a,b){return z(this,a)/z(this,b)},jc=function(a,b){a=z(this,a);b=z(this,b);var c=a instanceof Ib,d=b instanceof Ib;return c||d?c&&d?a.ya==b.ya:!1:a==b},kc=function(a){for(var b,c=0;c<arguments.length;c++)b=
z(this,arguments[c]);return b};function lc(a,b,c,d){for(var e=0;e<b();e++){var f=a(c(e)),g=zb(f,d);if(g instanceof xa){if("break"===g.g)break;if("return"===g.g)return g}}}function mc(a,b,c){if("string"===typeof b)return lc(a,function(){return b.length},function(f){return f},c);if(b instanceof Ab||b instanceof Da||b instanceof wb){var d=b.Ib(),e=d.length();return lc(a,function(){return e},function(f){return d.get(f)},c)}}
var nc=function(a,b,c){a=z(this,a);b=z(this,b);c=z(this,c);var d=this.g;return mc(function(e){d.set(a,e);return d},b,c)},oc=function(a,b,c){a=z(this,a);b=z(this,b);c=z(this,c);var d=this.g;return mc(function(e){var f=Ka(d);Ja(f,a,e,!0);return f},b,c)},pc=function(a,b,c){a=z(this,a);b=z(this,b);c=z(this,c);var d=this.g;return mc(function(e){var f=Ka(d);f.add(a,e);return f},b,c)},rc=function(a,b,c){a=z(this,a);b=z(this,b);c=z(this,c);var d=this.g;return qc(function(e){d.set(a,e);return d},b,c)},sc=
function(a,b,c){a=z(this,a);b=z(this,b);c=z(this,c);var d=this.g;return qc(function(e){var f=Ka(d);Ja(f,a,e,!0);return f},b,c)},tc=function(a,b,c){a=z(this,a);b=z(this,b);c=z(this,c);var d=this.g;return qc(function(e){var f=Ka(d);f.add(a,e);return f},b,c)};
function qc(a,b,c){if("string"===typeof b)return lc(a,function(){return b.length},function(d){return b[d]},c);if(b instanceof Da)return lc(a,function(){return b.length()},function(d){return b.get(d)},c);throw new TypeError("The value is not iterable.");}
var uc=function(a,b,c,d){function e(p,q){for(var r=0;r<f.length();r++){var u=f.get(r);q.add(u,p.get(u))}}var f=z(this,a);if(!(f instanceof Da))throw Error("TypeError: Non-List argument given to ForLet instruction.");var g=this.g;d=z(this,d);var h=Ka(g);for(e(g,h);yb(h,b);){var l=zb(h,d);if(l instanceof xa){if("break"===l.g)break;if("return"===l.g)return l}var m=Ka(g);e(h,m);yb(m,c);h=m}},vc=function(a){a=z(this,a);var b=this.g,c=!1;if(c&&!b.has(a))throw new ReferenceError(a+" is not defined.");return b.get(a)},wc=function(a,b){var c;a=z(this,a);b=z(this,b);if(void 0===a||null===a)throw Error("TypeError: cannot access property of "+a+".");if(a instanceof Ab||a instanceof Da||a instanceof wb)c=a.get(b);else if("string"===typeof a)"length"===b?c=a.length:za(b)&&(c=a[b]);else if(a instanceof Ib)return;return c},xc=function(a,b){return z(this,a)>z(this,
b)},yc=function(a,b){return z(this,a)>=z(this,b)},Bc=function(a,b){a=z(this,a);b=z(this,b);a instanceof Ib&&(a=a.ya);b instanceof Ib&&(b=b.ya);return a===b},Cc=function(a,b){return!Bc.call(this,a,b)},Dc=function(a,b,c){var d=[];z(this,a)?d=z(this,b):c&&(d=z(this,c));var e=zb(this.g,d);if(e instanceof xa)return e},Ec=function(a,b){return z(this,a)<z(this,b)},Fc=function(a,b){return z(this,a)<=z(this,b)},Gc=function(a,b){return z(this,a)%z(this,b)},Hc=function(a,b){return z(this,a)*z(this,b)},Ic=function(a){return-z(this,
a)},Jc=function(a){return!z(this,a)},Kc=function(a,b){return!jc.call(this,a,b)},Lc=function(){return null},Pc=function(a,b){return z(this,a)||z(this,b)},Qc=function(a,b){var c=z(this,a);z(this,b);return c},Rc=function(a){return z(this,a)},Sc=function(a){return Array.prototype.slice.apply(arguments)},Tc=function(a){return new xa("return",z(this,a))},Uc=function(a,b,c){a=z(this,a);b=z(this,b);c=z(this,c);if(null===a||void 0===a)throw Error("TypeError: Can't set property "+b+" of "+a+".");(a instanceof
wb||a instanceof Da||a instanceof Ab)&&a.set(b,c);return c},Vc=function(a,b){return z(this,a)-z(this,b)},Wc=function(a,b,c){a=z(this,a);var d=z(this,b),e=z(this,c);if(!Sa(d)||!Sa(e))throw Error("Error: Malformed switch instruction.");for(var f,g=!1,h=0;h<d.length;h++)if(g||a===z(this,d[h]))if(f=z(this,e[h]),f instanceof xa){var l=f.g;if("break"===l)return;if("return"===l||"continue"===l)return f}else g=!0;if(e.length===d.length+1&&(f=z(this,e[e.length-1]),f instanceof xa&&("return"===f.g||"continue"===
f.g)))return f},Xc=function(a,b,c){return z(this,a)?z(this,b):z(this,c)},Yc=function(a){a=z(this,a);return a instanceof wb?"function":typeof a},Zc=function(a){for(var b=this.g,c=0;c<arguments.length;c++){var d=arguments[c];"string"!==typeof d||b.add(d,void 0)}},$c=function(a,b,c,d){var e=z(this,d);if(z(this,c)){var f=zb(this.g,e);if(f instanceof xa){if("break"===f.g)return;if("return"===f.g)return f}}for(;z(this,a);){var g=zb(this.g,e);if(g instanceof xa){if("break"===g.g)break;if("return"===g.g)return g}z(this,
b)}},ad=function(a){return~Number(z(this,a))},bd=function(a,b){return Number(z(this,a))<<Number(z(this,b))},cd=function(a,b){return Number(z(this,a))>>Number(z(this,b))},dd=function(a,b){return Number(z(this,a))>>>Number(z(this,b))},ed=function(a,b){return Number(z(this,a))&Number(z(this,b))},fd=function(a,b){return Number(z(this,a))^Number(z(this,b))},gd=function(a,b){return Number(z(this,a))|Number(z(this,b))};var id=function(){this.g=new Gb;hd(this)};id.prototype.Lc=function(a){return jd(this.g.o(a))};
var ld=function(a,b){return jd(kd.g.D(a,b))},hd=function(a){var b=function(d,e){var f=a.g,g=String(e);Cb.hasOwnProperty(d)&&Hb(f,g||d,Cb[d])};b("control",49);b("fn",51);b("list",7);b("map",8);b("undefined",44);var c=function(d,e){Hb(a.g,String(d),e)};c(0,Xb);c(1,Yb);c(2,Zb);c(3,$b);c(53,ac);c(4,bc);c(5,cc);c(52,dc);c(6,ec);c(9,cc);c(50,hc);c(10,ic);c(12,jc);c(13,kc);c(47,nc);c(54,oc);c(55,pc);c(63,uc);c(64,rc);c(65,sc);c(66,tc);c(15,vc);c(16,wc);c(17,wc);c(18,xc);c(19,yc);c(20,Bc);c(21,Cc);c(22,Dc);
c(23,Ec);c(24,Fc);c(25,Gc);c(26,Hc);c(27,Ic);c(28,Jc);c(29,Kc);c(45,Lc);c(30,Pc);c(32,Qc);c(33,Qc);c(34,Rc);c(35,Rc);c(46,Sc);c(36,Tc);c(43,Uc);c(37,Vc);c(38,Wc);c(39,Xc);c(40,Yc);c(41,Zc);c(42,$c);c(58,ad);c(57,bd);c(60,cd);c(61,dd);c(56,ed);c(62,fd);c(59,gd)},qd=function(){var a=kd,b=md();Hb(a.g,"require",b)},rd=function(a,b){a.g.g.N=b};
function jd(a){if(a instanceof xa||a instanceof wb||a instanceof Da||a instanceof Ab||a instanceof Ib||null===a||void 0===a||"string"===typeof a||"number"===typeof a||"boolean"===typeof a)return a};var sd=function(){var a=function(b){return{toString:function(){return b}}};return{$f:a("consent"),ad:a("consent_always_fire"),te:a("convert_case_to"),ue:a("convert_false_to"),ve:a("convert_null_to"),we:a("convert_true_to"),xe:a("convert_undefined_to"),gi:a("debug_mode_metadata"),Ta:a("function"),Og:a("instance_name"),Qg:a("live_only"),Rg:a("malware_disabled"),Sg:a("metadata"),ji:a("original_activity_id"),ki:a("original_vendor_template_id"),Ug:a("once_per_event"),kf:a("once_per_load"),qf:a("setup_tags"),
rf:a("tag_id"),sf:a("teardown_tags")}}();
var td=[],ud={"\x00":"&#0;",'"':"&quot;","&":"&amp;","'":"&#39;","<":"&lt;",">":"&gt;","\t":"&#9;","\n":"&#10;","\x0B":"&#11;","\f":"&#12;","\r":"&#13;"," ":"&#32;","-":"&#45;","/":"&#47;","=":"&#61;","`":"&#96;","\u0085":"&#133;","\u00a0":"&#160;","\u2028":"&#8232;","\u2029":"&#8233;"},vd=function(a){return ud[a]},wd=/[\x00\x22\x26\x27\x3c\x3e]/g;var Ad=/[\x00\x08-\x0d\x22\x26\x27\/\x3c-\x3e\\\x85\u2028\u2029]/g,Bd={"\x00":"\\x00","\b":"\\x08","\t":"\\t","\n":"\\n","\x0B":"\\x0b",
"\f":"\\f","\r":"\\r",'"':"\\x22","&":"\\x26","'":"\\x27","/":"\\/","<":"\\x3c","=":"\\x3d",">":"\\x3e","\\":"\\\\","\u0085":"\\x85","\u2028":"\\u2028","\u2029":"\\u2029",$:"\\x24","(":"\\x28",")":"\\x29","*":"\\x2a","+":"\\x2b",",":"\\x2c","-":"\\x2d",".":"\\x2e",":":"\\x3a","?":"\\x3f","[":"\\x5b","]":"\\x5d","^":"\\x5e","{":"\\x7b","|":"\\x7c","}":"\\x7d"},Cd=function(a){return Bd[a]};
td[8]=function(a){if(null==a)return" null ";switch(typeof a){case "boolean":case "number":return" "+a+" ";default:return"'"+String(String(a)).replace(Ad,Cd)+"'"}};var Kd=/[\x00- \x22\x27-\x29\x3c\x3e\\\x7b\x7d\x7f\x85\xa0\u2028\u2029\uff01\uff03\uff04\uff06-\uff0c\uff0f\uff1a\uff1b\uff1d\uff1f\uff20\uff3b\uff3d]/g,Ld={"\x00":"%00","\u0001":"%01","\u0002":"%02","\u0003":"%03","\u0004":"%04","\u0005":"%05","\u0006":"%06","\u0007":"%07","\b":"%08","\t":"%09","\n":"%0A","\x0B":"%0B","\f":"%0C","\r":"%0D","\u000e":"%0E","\u000f":"%0F","\u0010":"%10",
"\u0011":"%11","\u0012":"%12","\u0013":"%13","\u0014":"%14","\u0015":"%15","\u0016":"%16","\u0017":"%17","\u0018":"%18","\u0019":"%19","\u001a":"%1A","\u001b":"%1B","\u001c":"%1C","\u001d":"%1D","\u001e":"%1E","\u001f":"%1F"," ":"%20",'"':"%22","'":"%27","(":"%28",")":"%29","<":"%3C",">":"%3E","\\":"%5C","{":"%7B","}":"%7D","\u007f":"%7F","\u0085":"%C2%85","\u00a0":"%C2%A0","\u2028":"%E2%80%A8","\u2029":"%E2%80%A9","\uff01":"%EF%BC%81","\uff03":"%EF%BC%83","\uff04":"%EF%BC%84","\uff06":"%EF%BC%86",
"\uff07":"%EF%BC%87","\uff08":"%EF%BC%88","\uff09":"%EF%BC%89","\uff0a":"%EF%BC%8A","\uff0b":"%EF%BC%8B","\uff0c":"%EF%BC%8C","\uff0f":"%EF%BC%8F","\uff1a":"%EF%BC%9A","\uff1b":"%EF%BC%9B","\uff1d":"%EF%BC%9D","\uff1f":"%EF%BC%9F","\uff20":"%EF%BC%A0","\uff3b":"%EF%BC%BB","\uff3d":"%EF%BC%BD"},Md=function(a){return Ld[a]};td[16]=function(a){return a};var Od;
var Pd=[],Qd=[],Rd=[],Sd=[],Td=[],Ud={},Vd,Wd,Xd,Yd=function(a,b){var c={};c["function"]="__"+a;for(var d in b)b.hasOwnProperty(d)&&(c["vtp_"+d]=b[d]);return c},Zd=function(a,b){var c=a["function"];if(!c)throw Error("Error: No function name given for function call.");var d=Ud[c],e={},f;for(f in a)if(a.hasOwnProperty(f))if(0===f.indexOf("vtp_"))d&&b&&b.vf&&b.vf(a[f]),e[void 0!==d?f:f.substr(4)]=a[f];else if(f===sd.ad.toString()&&a[f]){}return void 0!==d?d(e):Od(c,e,b)},ae=function(a,b,c){c=c||[];var d={},e;for(e in a)a.hasOwnProperty(e)&&(d[e]=$d(a[e],b,c));return d},$d=function(a,b,c){if(Sa(a)){var d;switch(a[0]){case "function_id":return a[1];case "list":d=[];for(var e=1;e<a.length;e++)d.push($d(a[e],b,c));return d;case "macro":var f=a[1];if(c[f])return;var g=Pd[f];if(!g||b.Ud(g))return;c[f]=!0;try{var h=ae(g,b,c);h.vtp_gtmEventId=b.id;d=Zd(h,b);Xd&&(d=Xd.ih(d,h))}catch(A){b.Kf&&
b.Kf(A,Number(f)),d=!1}c[f]=!1;return d;case "map":d={};for(var l=1;l<a.length;l+=2)d[$d(a[l],b,c)]=$d(a[l+1],b,c);return d;case "template":d=[];for(var m=!1,p=1;p<a.length;p++){var q=$d(a[p],b,c);Wd&&(m=m||q===Wd.zc);d.push(q)}return Wd&&m?Wd.lh(d):d.join("");case "escape":d=$d(a[1],b,c);if(Wd&&Sa(a[1])&&"macro"===a[1][0]&&Wd.Bh(a))return Wd.Sh(d);d=String(d);for(var r=2;r<a.length;r++)td[a[r]]&&(d=td[a[r]](d));return d;case "tag":var u=a[1];if(!Sd[u])throw Error("Unable to resolve tag reference "+
u+".");return d={Cf:a[2],index:u};case "zb":var t={arg0:a[2],arg1:a[3],ignore_case:a[5]};t["function"]=a[1];var v=be(t,b,c),x=!!a[4];return x||2!==v?x!==(1===v):null;default:throw Error("Attempting to expand unknown Value type: "+a[0]+".");}}return a},be=function(a,b,c){try{return Vd(ae(a,b,c))}catch(d){JSON.stringify(a)}return 2};var ce=function(a,b,c){var d;d=Error.call(this);this.message=d.message;"stack"in d&&(this.stack=d.stack);this.o=a;this.g=c};ma(ce,Error);function de(a,b){if(Sa(a)){Object.defineProperty(a,"context",{value:{line:b[0]}});for(var c=1;c<a.length;c++)de(a[c],b[c])}};var ee=function(a,b){var c;c=Error.call(this);this.message=c.message;"stack"in c&&(this.stack=c.stack);this.s=a;this.o=b;this.g=[]};ma(ee,Error);var ge=function(){return function(a,b){a instanceof ee||(a=new ee(a,fe));b&&a.g.push(b);throw a;}};function fe(a){if(!a.length)return a;a.push({id:"main",line:0});for(var b=a.length-1;0<b;b--)Ra(a[b].id)&&a.splice(b++,1);for(var c=a.length-1;0<c;c--)a[c].line=a[c-1].line;a.splice(0,1);return a};var he=null,ke=function(a){function b(q){for(var r=0;r<q.length;r++)d[q[r]]=!0}var c=[],d=[];he=ie(a);for(var e=0;e<Qd.length;e++){var f=Qd[e],g=je(f);if(g){for(var h=f.add||[],l=0;l<h.length;l++)c[h[l]]=!0;b(f.block||[])}else null===g&&b(f.block||[])}for(var m=[],p=0;p<Sd.length;p++)c[p]&&!d[p]&&(m[p]=!0);return m},je=function(a){for(var b=a["if"]||[],c=0;c<b.length;c++){var d=he(b[c]);if(0===d)return!1;if(2===d)return null}for(var e=a.unless||[],f=0;f<e.length;f++){var g=he(e[f]);if(2===g)return null;
if(1===g)return!1}return!0},ie=function(a){var b=[];return function(c){void 0===b[c]&&(b[c]=be(Rd[c],a));return b[c]}};var le={ih:function(a,b){b[sd.te]&&"string"===typeof a&&(a=1==b[sd.te]?a.toLowerCase():a.toUpperCase());b.hasOwnProperty(sd.ve)&&null===a&&(a=b[sd.ve]);b.hasOwnProperty(sd.xe)&&void 0===a&&(a=b[sd.xe]);b.hasOwnProperty(sd.we)&&!0===a&&(a=b[sd.we]);b.hasOwnProperty(sd.ue)&&!1===a&&(a=b[sd.ue]);return a}};var me=function(){this.g={}};function ne(a,b,c,d){if(a)for(var e=0;e<a.length;e++){var f=void 0,g="A policy function denied the permission request";try{f=a[e].call(void 0,b,c,d),g+="."}catch(h){g="string"===typeof h?g+(": "+h):h instanceof Error?g+(": "+h.message):g+"."}if(!f)throw new ce(c,d,g);}}function oe(a,b,c){return function(){var d=arguments[0];if(d){var e=a.g[d],f=a.g.all;if(e||f){var g=c.apply(void 0,Array.prototype.slice.call(arguments,0));ne(e,b,d,g);ne(f,b,d,g)}}}};var se=function(a){var b=pe.F,c=this;this.o=new me;this.g={};var d={},e=oe(this.o,b,function(){var f=arguments[0];return f&&d[f]?d[f].apply(void 0,Array.prototype.slice.call(arguments,0)):{}});Za(a,function(f,g){var h={};Za(g,function(l,m){var p=qe(l,m);h[l]=p.assert;d[l]||(d[l]=p.O)});c.g[f]=function(l,m){var p=h[l];if(!p)throw re(l,{},"The requested permission "+l+" is not configured.");var q=Array.prototype.slice.call(arguments,0);p.apply(void 0,q);e.apply(void 0,q)}})},ue=function(a){return te.g[a]||
function(){}};function qe(a,b){var c=Yd(a,b);c.vtp_permissionName=a;c.vtp_createPermissionError=re;try{return Zd(c)}catch(d){return{assert:function(e){throw new ce(e,{},"Permission "+e+" is unknown.");},O:function(){for(var e={},f=0;f<arguments.length;++f)e["arg"+(f+1)]=arguments[f];return e}}}}function re(a,b,c){return new ce(a,b,c)};var ve=!1;var we={};we.fi=eb('');we.oh=eb('');var xe=ve,ye=we.oh,ze=we.fi;
var Ne=function(a,b){return a.length&&b.length&&a.lastIndexOf(b)===a.length-b.length},Oe=function(a,b){var c="*"===b.charAt(b.length-1)||"/"===b||"/*"===b;Ne(b,"/*")&&(b=b.slice(0,-2));Ne(b,"?")&&(b=b.slice(0,-1));var d=b.split("*");if(!c&&1===d.length)return a===d[0];for(var e=-1,f=0;f<d.length;f++){var g=d[f];if(g){e=a.indexOf(g,e);if(-1===e||0===f&&0!==e)return!1;e+=g.length}}if(c||e===a.length)return!0;var h=d[d.length-1];return a.lastIndexOf(h)===a.length-h.length},Pe=/^[a-z0-9-]+$/i,Qe=/^https:\/\/(\*\.|)((?:[a-z0-9-]+\.)+[a-z0-9-]+)\/(.*)$/i,
Te=function(a,b){var c;if(!(c=!Se(a))){var d;a:{var e=a.hostname.split(".");if(2>e.length)d=!1;else{for(var f=0;f<e.length;f++)if(!Pe.exec(e[f])){d=!1;break a}d=!0}}c=!d}if(c)return!1;for(var g=0;g<b.length;g++){var h;var l=a,m=b[g];if(!Qe.exec(m))throw Error("Invalid Wildcard");var p=m.slice(8),q=p.slice(0,p.indexOf("/")),r;var u=l.hostname,t=q;if(0!==t.indexOf("*."))r=u.toLowerCase()===t.toLowerCase();else{t=t.slice(2);var v=u.toLowerCase().indexOf(t.toLowerCase());r=-1===v?!1:u.length===t.length?
!0:u.length!==t.length+v?!1:"."===u[v-1]}if(r){var x=p.slice(p.indexOf("/"));h=Oe(l.pathname+l.search,x)?!0:!1}else h=!1;if(h)return!0}return!1},Se=function(a){return"https:"===a.protocol&&(!a.port||"443"===a.port)};var Ue=/^([a-z][a-z0-9]*):(!|\?)(\*|string|boolean|number|Fn|DustMap|List|OpaqueValue)$/i,Ve={Fn:"function",DustMap:"Object",List:"Array"},H=function(a,b,c){for(var d=0;d<b.length;d++){var e=Ue.exec(b[d]);if(!e)throw Error("Internal Error in "+a);var f=e[1],g="!"===e[2],h=e[3],l=c[d],m=typeof l;if(null===l||"undefined"===m){if(g)throw Error("Error in "+a+". Required argument "+f+" not supplied.");}else if("*"!==h){var p=typeof l;l instanceof wb?p="Fn":l instanceof Da?p="List":l instanceof Ab?p="DustMap":
l instanceof Ib&&(p="OpaqueValue");if(p!=h)throw Error("Error in "+a+". Argument "+f+" has type "+p+", which does not match required type "+(Ve[h]||h)+".");}}};function We(a){return""+a}
function Xe(a,b){var c=[];return c};var Ye=function(a,b){var c=new wb(a,function(){for(var d=Array.prototype.slice.call(arguments,0),e=0;e<d.length;e++)d[e]=z(this,d[e]);return b.apply(this,d)});c.s=!0;return c},Ze=function(a,b){var c=new Ab,d;for(d in b)if(b.hasOwnProperty(d)){var e=b[d];Qa(e)?c.set(d,Ye(a+"_"+d,e)):(Ra(e)||k(e)||"boolean"==typeof e)&&c.set(d,e)}c.s=!0;return c};var $e=function(a,b){H(F(this),["apiName:!string","message:?string"],arguments);var c={},d=new Ab;return d=Ze("AssertApiSubject",c)};var af=function(a,b){H(F(this),["actual:?*","message:?string"],arguments);var c={},d=new Ab;
return d=Ze("AssertThatSubject",c)};function bf(a){return function(){for(var b=[],c=this.g,d=0;d<arguments.length;++d)b.push(Pb(arguments[d],c));return Nb(a.apply(null,b))}}var df=function(){for(var a=Math,b=cf,c={},d=0;d<b.length;d++){var e=b[d];a.hasOwnProperty(e)&&(c[e]=bf(a[e].bind(a)))}return c};var ef=function(a){var b;return b};var ff=function(a){var b;return b};var gf=function(a){H(F(this),["uri:!string"],arguments);return encodeURI(a)};var hf=function(a){H(F(this),["uri:!string"],arguments);return encodeURIComponent(a)};var jf=function(a){H(F(this),["message:?string"],arguments);};var kf=function(a,b){H(F(this),["min:!number","max:!number"],arguments);return Wa(a,b)};var lf=function(a,b,c){var d=a.g.g;if(!d)throw Error("Missing program state.");d.eh.apply(null,Array.prototype.slice.call(arguments,1))};var mf=function(){lf(this,"read_container_data");var a=new Ab;a.set("containerId",'GTM-KZM6MXH');a.set("version",'149');a.set("environmentName",'');a.set("debugMode",xe);a.set("previewMode",ze);a.set("environmentMode",ye);a.s=!0;return a};var nf=function(){return(new Date).getTime()};var of=function(a){if(null===a)return"null";if(a instanceof Da)return"array";if(a instanceof wb)return"function";if(a instanceof Ib){a=a.ya;if(void 0===a.constructor||void 0===a.constructor.name){var b=String(a);return b.substring(8,b.length-1)}return String(a.constructor.name)}return typeof a};var pf=function(a){function b(c){return function(d){try{return c(d)}catch(e){(xe||ze)&&a.call(this,e.message)}}}return{parse:b(function(c){return Nb(JSON.parse(c))}),stringify:b(function(c){return JSON.stringify(Pb(c))})}};var qf=function(a){return ab(Pb(a,this.g))};var rf=function(a){return Number(Pb(a,this.g))};var sf=function(a){return null===a?"null":void 0===a?"undefined":a.toString()};var tf=function(a,b,c){var d=null,e=!1;H(F(this),["tableObj:!List","keyColumnName:!string","valueColumnName:!string"],arguments);d=new Ab;for(var f=0;f<a.length();f++){var g=a.get(f);g instanceof Ab&&g.has(b)&&g.has(c)&&(d.set(g.get(b),g.get(c)),e=!0)}return e?d:null};var cf="floor ceil round max min abs pow sqrt".split(" ");var uf=function(){var a={};return{uh:function(b){return a.hasOwnProperty(b)?a[b]:void 0},ai:function(b,c){a[b]=c},reset:function(){a={}}}},vf=function(a,b){H(F(this),["apiName:!string","mock:?*"],arguments);};var wf=function(){this.g={};this.o={};};wf.prototype.get=function(a,b){var c=this.g.hasOwnProperty(a)?this.g[a]:void 0;return c};
wf.prototype.add=function(a,b,c){if(this.g.hasOwnProperty(a))throw"Attempting to add a function which already exists: "+a+".";if(this.o.hasOwnProperty(a))throw"Attempting to add an API with an existing private API name: "+a+".";this.g[a]=c?void 0:Qa(b)?Ye(a,b):Ze(a,b)};
var xf=function(a,b,c){if(a.o.hasOwnProperty(b))throw"Attempting to add a private function which already exists: "+b+".";if(a.g.hasOwnProperty(b))throw"Attempting to add a private function with an existing API name: "+b+".";a.o[b]=Qa(c)?Ye(b,c):Ze(b,c)};function yf(){var a={};return a};var J={Fb:"_ee",Dd:"_syn",mi:"_uei",wd:"_eu",li:"_pci",jd:"event_callback",qc:"event_timeout",aa:"gtag.config",va:"gtag.get",sa:"purchase",cb:"refund",Qa:"begin_checkout",$a:"add_to_cart",ab:"remove_from_cart",ig:"view_cart",Be:"add_to_wishlist",Ea:"view_item",Ae:"view_promotion",ze:"select_promotion",dd:"select_item",mc:"view_item_list",ye:"add_payment_info",hg:"add_shipping_info",Ga:"value_key",Fa:"value_callback",ja:"allow_ad_personalization_signals",rd:"restricted_data_processing",vb:"allow_google_signals",
ka:"cookie_expires",yb:"cookie_update",Cb:"session_duration",wc:"session_engaged_time",xa:"user_properties",Ia:"transport_url",R:"ads_data_redaction",vd:"user_data",sc:"first_party_collection",C:"ad_storage",K:"analytics_storage",bd:"region",se:"wait_for_update"};
J.af=[J.sa,J.cb,J.Qa,J.$a,J.ab,J.ig,J.Be,J.Ea,J.Ae,J.ze,J.mc,J.dd,J.ye,J.hg];J.$e=[J.ja,J.vb,J.yb];J.bf=[J.ka,J.qc,J.Cb,J.wc];var Af=function(a){Na("GTM",a)};var Bf=function(a,b){var c=function(){};c.prototype=a.prototype;var d=new c;a.apply(d,Array.prototype.slice.call(arguments,1));return d},Cf=function(a){var b=a;return function(){if(b){var c=b;b=null;c()}}};var Df,Ef=function(){if(void 0===Df){var a=null,b=na.trustedTypes;if(b&&b.createPolicy){try{a=b.createPolicy("goog#html",{createHTML:ta,createScript:ta,createScriptURL:ta})}catch(c){na.console&&na.console.error(c.message)}Df=a}else Df=a}return Df};var Gf=function(a,b){this.g=b===Ff?a:""};Gf.prototype.toString=function(){return this.g+""};var Ff={},Hf=function(a){var b=Ef(),c=b?b.createScriptURL(a):a;return new Gf(c,Ff)};var If=/^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;var Jf;a:{var Kf=na.navigator;if(Kf){var Lf=Kf.userAgent;if(Lf){Jf=Lf;break a}}Jf=""}var Mf=function(a){return-1!=Jf.indexOf(a)};var Of=function(a,b,c){this.g=c===Nf?a:""};Of.prototype.toString=function(){return this.g.toString()};var Pf=function(a){return a instanceof Of&&a.constructor===Of?a.g:"type_error:SafeHtml"},Nf={},Qf=function(a){var b=Ef(),c=b?b.createHTML(a):a;return new Of(c,null,Nf)},Rf=new Of(na.trustedTypes&&na.trustedTypes.emptyHTML||"",0,Nf);var Sf=function(a){var b=!1,c;return function(){b||(c=a(),b=!0);return c}}(function(){var a=document.createElement("div"),b=document.createElement("div");b.appendChild(document.createElement("div"));a.appendChild(b);var c=a.firstChild.firstChild;a.innerHTML=Pf(Rf);return!c.parentElement}),Tf=function(a,b){if(Sf())for(;a.lastChild;)a.removeChild(a.lastChild);a.innerHTML=Pf(b)},Uf=function(a,b){a.src=b instanceof Gf&&b.constructor===Gf?b.g:"type_error:TrustedResourceUrl";var c=ra(a.ownerDocument&&a.ownerDocument.defaultView);
c&&a.setAttribute("nonce",c)};var n=window,K=document,Vf=navigator,Wf=K.currentScript&&K.currentScript.src,Xf=function(a,b){var c=n[a];n[a]=void 0===c?b:c;return n[a]},Yf=function(a){var b=K.getElementsByTagName("script")[0]||K.body||K.head;b.parentNode.insertBefore(a,b)},Zf=function(a,b){b&&(a.addEventListener?a.onload=b:a.onreadystatechange=function(){a.readyState in{loaded:1,complete:1}&&(a.onreadystatechange=null,b())})},$f=Object.freeze({async:1,nonce:1,onerror:1,onload:1,src:1,type:1}),ag=function(a,b,c,d){var e=K.createElement("script");
d&&Za(d,function(g,h){g=g.toLowerCase();$f.hasOwnProperty(g)||e.setAttribute(g,h)});e.type="text/javascript";e.async=!0;Uf(e,Hf(a));Zf(e,b);c&&(e.onerror=c);var f=ra();f&&e.setAttribute("nonce",f);Yf(e);return e},bg=function(){if(Wf){var a=Wf.toLowerCase();if(0===a.indexOf("https://"))return 2;if(0===a.indexOf("http://"))return 3}return 1},cg=function(a,b){var c=K.createElement("iframe");c.height="0";c.width="0";c.style.display="none";c.style.visibility="hidden";var d=K.body&&K.body.lastChild||K.body||
K.head;d.parentNode.insertBefore(c,d);Zf(c,b);void 0!==a&&(c.src=a);return c},dg=function(a,b,c){var d=new Image(1,1);d.onload=function(){d.onload=null;b&&b()};d.onerror=function(){d.onerror=null;c&&c()};d.src=a;return d},eg=function(a,b,c,d){a.addEventListener?a.addEventListener(b,c,!!d):a.attachEvent&&a.attachEvent("on"+b,c)},fg=function(a,b,c){a.removeEventListener?a.removeEventListener(b,c,!1):a.detachEvent&&a.detachEvent("on"+b,c)},M=function(a){n.setTimeout(a,0)},gg=function(a,b){return a&&
b&&a.attributes&&a.attributes[b]?a.attributes[b].value:null},hg=function(a){var b=a.innerText||a.textContent||"";b&&" "!=b&&(b=b.replace(/^[\s\xa0]+|[\s\xa0]+$/g,""));b&&(b=b.replace(/(\xa0+|\s{2,}|\n|\r\t)/g," "));return b},ig=function(a){var b=K.createElement("div"),c=Qf("A<div>"+a+"</div>");Tf(b,c);b=b.lastChild;for(var d=[];b.firstChild;)d.push(b.removeChild(b.firstChild));return d},jg=function(a,b,c){c=c||100;for(var d={},e=0;e<b.length;e++)d[b[e]]=!0;for(var f=a,g=0;f&&g<=c;g++){if(d[String(f.tagName).toLowerCase()])return f;
f=f.parentElement}return null},kg=function(a){Vf.sendBeacon&&Vf.sendBeacon(a)||dg(a)},lg=function(a,b){var c=a[b];c&&"string"===typeof c.animVal&&(c=c.animVal);return c};var mg=function(){var a={};this.g=function(b,c){return null!=a[b]?a[b]:c};this.o=function(){a[1933]=!0}};mg.g=void 0;mg.o=function(){return mg.g?mg.g:mg.g=new mg};var ng=function(a){var b;b=void 0===b?!1:b;return mg.o().g(a,b)};var og=[];function pg(){var a=Xf("google_tag_data",{});a.ics||(a.ics={entries:{},set:tg,update:ug,addListener:vg,notifyListeners:wg,active:!1,usedDefault:!1});return a.ics}
function tg(a,b,c,d,e,f){var g=pg();g.active=!0;g.usedDefault=!0;if(void 0!=b){var h=g.entries,l=h[a]||{},m=l.region,p=c&&k(c)?c.toUpperCase():void 0;d=d.toUpperCase();e=e.toUpperCase();if(""===d||p===e||(p===d?m!==e:!p&&!m)){var q=!!(f&&0<f&&void 0===l.update),r={region:p,initial:"granted"===b,update:l.update,quiet:q};if(""!==d||!1!==l.initial)h[a]=r;q&&n.setTimeout(function(){h[a]===r&&r.quiet&&(r.quiet=!1,xg(a),wg(),Na("TAGGING",2))},f)}}}
function ug(a,b){var c=pg();c.active=!0;if(void 0!=b){var d=yg(a),e=c.entries,f=e[a]=e[a]||{};f.update="granted"===b;var g=yg(a);f.quiet?(f.quiet=!1,xg(a)):g!==d&&xg(a)}}function vg(a,b){og.push({xf:a,qh:b})}function xg(a){for(var b=0;b<og.length;++b){var c=og[b];Sa(c.xf)&&-1!==c.xf.indexOf(a)&&(c.Mf=!0)}}function wg(a){for(var b=0;b<og.length;++b){var c=og[b];if(c.Mf){c.Mf=!1;try{c.qh({wf:a})}catch(d){}}}}
var yg=function(a){var b=pg().entries[a]||{};return void 0!==b.update?b.update:void 0!==b.initial?b.initial:void 0},zg=function(a){return(pg().entries[a]||{}).initial},Ag=function(a){return!(pg().entries[a]||{}).quiet},Bg=function(){return ng(1933)?pg().active:!1},Cg=function(){return pg().usedDefault},Dg=function(a,b){pg().addListener(a,b)},Eg=function(a,b){function c(){for(var e=0;e<b.length;e++)if(!Ag(b[e]))return!0;return!1}if(c()){var d=!1;Dg(b,function(e){d||c()||(d=!0,a(e))})}else a({})},Fg=
function(a,b){if(!1===yg(b)){var c=!1;Dg([b],function(d){!c&&yg(b)&&(a(d),c=!0)})}};function Gg(a){for(var b=[],c=0;c<Hg.length;c++){var d=a(Hg[c]);b[c]=!0===d?"1":!1===d?"0":"-"}return b.join("")}
var Hg=[J.C,J.K],Ig=function(a){var b=a[J.bd];b&&Af(40);var c=a[J.se];c&&Af(41);for(var d=Sa(b)?b:[b],e=0;e<d.length;++e)for(var f in a)if(a.hasOwnProperty(f)&&f!==J.bd&&f!==J.se)if(-1<Ta(Hg,f)){var g=f,h=a[f],l=d[e];pg().set(g,h,l,"IN","IN-TN",c)}else{}},Jg=function(a,
b){for(var c in a)if(a.hasOwnProperty(c))if(-1<Ta(Hg,c)){var d=c,e=a[c];pg().update(d,e)}else{}pg().notifyListeners(b)},Kg=function(a){var b=yg(a);return void 0!=b?b:!0},Lg=function(){return"G1"+Gg(yg)},Mg=function(a,b){Dg(a,b)},Ng=function(a,b){Eg(a,b)};var Pg=function(a){return Og?K.querySelectorAll(a):null},Qg=function(a,b){if(!Og)return null;if(Element.prototype.closest)try{return a.closest(b)}catch(e){return null}var c=Element.prototype.matches||Element.prototype.webkitMatchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector||Element.prototype.oMatchesSelector,d=a;if(!K.documentElement.contains(d))return null;do{try{if(c.call(d,b))return d}catch(e){break}d=d.parentElement||d.parentNode}while(null!==d&&1===d.nodeType);
return null},Rg=!1;if(K.querySelectorAll)try{var Sg=K.querySelectorAll(":root");Sg&&1==Sg.length&&Sg[0]==K.documentElement&&(Rg=!0)}catch(a){}var Og=Rg;var Tg=function(a){if(K.hidden)return!0;var b=a.getBoundingClientRect();if(b.top==b.bottom||b.left==b.right||!n.getComputedStyle)return!0;var c=n.getComputedStyle(a,null);if("hidden"===c.visibility)return!0;for(var d=a,e=c;d;){if("none"===e.display)return!0;var f=e.opacity,g=e.filter;if(g){var h=g.indexOf("opacity(");0<=h&&(g=g.substring(h+8,g.indexOf(")",h)),"%"==g.charAt(g.length-1)&&(g=g.substring(0,g.length-1)),f=Math.min(g,f))}if(void 0!==f&&0>=f)return!0;(d=d.parentElement)&&(e=n.getComputedStyle(d,
null))}return!1};
var Ug=function(){var a=K.body,b=K.documentElement||a&&a.parentElement,c,d;if(K.compatMode&&"BackCompat"!==K.compatMode)c=b?b.clientHeight:0,d=b?b.clientWidth:0;else{var e=function(f,g){return f&&g?Math.min(f,g):Math.max(f,g)};Af(7);c=e(b?b.clientHeight:0,a?a.clientHeight:0);d=e(b?b.clientWidth:0,a?a.clientWidth:0)}return{width:d,height:c}},Vg=function(a){var b=Ug(),c=b.height,d=b.width,e=a.getBoundingClientRect(),f=e.bottom-e.top,g=e.right-e.left;return f&&g?(1-Math.min((Math.max(0-e.left,0)+Math.max(e.right-
d,0))/g,1))*(1-Math.min((Math.max(0-e.top,0)+Math.max(e.bottom-c,0))/f,1)):0};var Wg=[],Xg=!(!n.IntersectionObserver||!n.IntersectionObserverEntry),Yg=function(a,b,c){for(var d=new n.IntersectionObserver(a,{threshold:c}),e=0;e<b.length;e++)d.observe(b[e]);for(var f=0;f<Wg.length;f++)if(!Wg[f])return Wg[f]=d,f;return Wg.push(d)-1},Zg=function(a,b,c){function d(h,l){var m={top:0,bottom:0,right:0,left:0,width:0,height:0},p={boundingClientRect:h.getBoundingClientRect(),
intersectionRatio:l,intersectionRect:m,isIntersecting:0<l,rootBounds:m,target:h,time:hb()};M(function(){return a(p)})}for(var e=[],f=[],g=0;g<b.length;g++)e.push(0),f.push(-1);c.sort(function(h,l){return h-l});return function(){for(var h=0;h<b.length;h++){var l=Vg(b[h]);if(l>e[h])for(;f[h]<c.length-1&&l>=c[f[h]+1];)d(b[h],l),f[h]++;else if(l<e[h])for(;0<=f[h]&&l<=c[f[h]];)d(b[h],l),f[h]--;e[h]=l}}},$g=function(a,b,c){for(var d=0;d<c.length;d++)1<c[d]?c[d]=1:0>c[d]&&(c[d]=0);if(Xg){var e=!1;M(function(){e||
Zg(a,b,c)()});return Yg(function(f){e=!0;for(var g={qb:0};g.qb<f.length;g={qb:g.qb},g.qb++)M(function(h){return function(){return a(f[h.qb])}}(g))},b,c)}return n.setInterval(Zg(a,b,c),1E3)},ah=function(a){Xg?0<=a&&a<Wg.length&&Wg[a]&&(Wg[a].disconnect(),Wg[a]=void 0):n.clearInterval(a)};var bh=/:[0-9]+$/,ch=function(a,b,c,d){for(var e=[],f=a.split("&"),g=0;g<f.length;g++){var h=f[g].split("=");if(decodeURIComponent(h[0]).replace(/\+/g," ")===b){var l=h.slice(1).join("=");if(!c)return d?l:decodeURIComponent(l).replace(/\+/g," ");e.push(d?l:decodeURIComponent(l).replace(/\+/g," "))}}return c?e:void 0},fh=function(a,b,c,d,e){b&&(b=String(b).toLowerCase());if("protocol"===b||"port"===b)a.protocol=dh(a.protocol)||dh(n.location.protocol);"port"===b?a.port=String(Number(a.hostname?a.port:
n.location.port)||("http"==a.protocol?80:"https"==a.protocol?443:"")):"host"===b&&(a.hostname=(a.hostname||n.location.hostname).replace(bh,"").toLowerCase());return eh(a,b,c,d,e)},eh=function(a,b,c,d,e){var f,g=dh(a.protocol);b&&(b=String(b).toLowerCase());switch(b){case "url_no_fragment":f=gh(a);break;case "protocol":f=g;break;case "host":f=a.hostname.replace(bh,"").toLowerCase();if(c){var h=/^www\d*\./.exec(f);h&&h[0]&&(f=f.substr(h[0].length))}break;case "port":f=String(Number(a.port)||("http"==
g?80:"https"==g?443:""));break;case "path":a.pathname||a.hostname||Na("TAGGING",1);f="/"==a.pathname.substr(0,1)?a.pathname:"/"+a.pathname;var l=f.split("/");0<=Ta(d||[],l[l.length-1])&&(l[l.length-1]="");f=l.join("/");break;case "query":f=a.search.replace("?","");e&&(f=ch(f,e,!1,void 0));break;case "extension":var m=a.pathname.split(".");f=1<m.length?m[m.length-1]:"";f=f.split("/")[0];break;case "fragment":f=a.hash.replace("#","");break;default:f=a&&a.href}return f},dh=function(a){return a?a.replace(":",
"").toLowerCase():""},gh=function(a){var b="";if(a&&a.href){var c=a.href.indexOf("#");b=0>c?a.href:a.href.substr(0,c)}return b},hh=function(a){var b=K.createElement("a");a&&(b.href=a);var c=b.pathname;"/"!==c[0]&&(a||Na("TAGGING",1),c="/"+c);var d=b.hostname.replace(bh,"");return{href:b.href,protocol:b.protocol,host:b.host,hostname:d,pathname:c,search:b.search,hash:b.hash,port:b.port}},ih=function(a){function b(m){var p=m.split("=")[0];return 0>d.indexOf(p)?m:p+"=0"}function c(m){return m.split("&").map(b).filter(function(p){return void 0!=
p}).join("&")}var d="gclid dclid gbraid wbraid gclaw gcldc gclha gclgf gclgb _gl".split(" "),e=hh(a),f=a.split(/[?#]/)[0],g=e.search,h=e.hash;"?"===g[0]&&(g=g.substring(1));"#"===h[0]&&(h=h.substring(1));g=c(g);h=c(h);""!==g&&(g="?"+g);""!==h&&(h="#"+h);var l=""+f+g+h;"/"===l[l.length-1]&&(l=l.substring(0,l.length-1));return l};var jh=new RegExp(/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}/i),kh=new RegExp(/support|noreply/i),lh=["SCRIPT","IMG","SVG","PATH","BR"],mh=["BR"];function nh(a){var b;if(a===K.body)b="body";else{var c;if(a.id)c="#"+a.id;else{var d;if(a.parentElement){var e;a:{var f=a.parentElement;if(f){for(var g=0;g<f.childElementCount;g++)if(f.children[g]===a){e=g+1;break a}e=-1}else e=1}d=nh(a.parentElement)+">:nth-child("+e+")"}else d="";c=d}b=c}return b}
function oh(a,b){if(1>=a.length)return a;var c=a.filter(b);return 0==c.length?a:c}function ph(a){if(0==a.length)return null;var b;b=oh(a,function(c){return!kh.test(c.$c)});b=oh(b,function(c){return"INPUT"===c.element.tagName.toUpperCase()});b=oh(b,function(c){return!Tg(c.element)});return b[0]}
function qh(){var a;var b=[],c=K.body;if(c){for(var d=c.querySelectorAll("*"),e=0;e<d.length&&1E4>e;e++){var f=d[e];if(!(0<=lh.indexOf(f.tagName.toUpperCase()))){for(var g=!1,h=0;h<f.childElementCount&&1E4>h;h++)if(!(0<=mh.indexOf(f.children[h].tagName.toUpperCase()))){g=!0;break}g||b.push(f)}}a={elements:b,status:1E4<d.length?"2":"1"}}else a={elements:b,status:"4"};for(var l=a,m=l.elements,p=[],q=0;q<m.length;q++){var r=m[q],u=r.textContent;r.value&&(u=r.value);if(u){var t=u.match(jh);if(t){var v=
t[0],x;if(n.location){var A=eh(n.location,"host",!0);x=0<=v.toLowerCase().indexOf(A)}else x=!1;x||p.push({element:r,$c:v})}}}var w=ph(p),y=[];if(w){var B=w.element;y.push({$c:w.$c,querySelector:nh(B),tagName:B.tagName,isVisible:!Tg(B),type:1,Jf:!0})}return{elements:y,status:10<p.length?"3":l.status}}var pe={},N=null,Eh=Math.random();pe.F="GTM-KZM6MXH";pe.Dc="3h0";pe.ii="";pe.bg="ChEI8MbrggYQ6a3R+ozjq6O1ARIkAIZsYIJ4tPSe9ugvWRux427P/bjMyJAonkWjvrNY3gPMSc0zGgIWgQ\x3d\x3d";var Fh={__cl:!0,__ecl:!0,__ehl:!0,__evl:!0,__fal:!0,__fil:!0,__fsl:!0,__hl:!0,__jel:!0,__lcl:!0,__sdl:!0,__tl:!0,__ytl:!0},Gh={__paused:!0,__tg:!0},Hh;for(Hh in Fh)Fh.hasOwnProperty(Hh)&&(Gh[Hh]=!0);var Ih="www.googletagmanager.com/gtm.js";
var Jh=Ih,Kh=eb(""),Lh=null,Mh=null,Nh="//www.googletagmanager.com/a?id="+pe.F+"&cv=149",Oh={},Ph={},Qh=function(){var a=N.sequence||1;N.sequence=a+1;return a};pe.ag="";var Rh={},Sh=new Xa,Th={},Uh={},Xh={name:"dataLayer",set:function(a,b){G(tb(a,b),Th);Vh()},get:function(a){return Wh(a,2)},reset:function(){Sh=new Xa;Th={};Vh()}},Wh=function(a,b){return 2!=b?Sh.get(a):Yh(a)},Yh=function(a,b){var c=a.split(".");b=b||[];for(var d=Th,e=0;e<c.length;e++){if(null===d)return!1;if(void 0===d)break;d=d[c[e]];if(-1!==Ta(b,d))return}return d},Zh=function(a,b){Uh.hasOwnProperty(a)||(Sh.set(a,b),G(tb(a,b),Th),Vh())},$h=function(){for(var a=["gtm.allowlist","gtm.blocklist",
"gtm.whitelist","gtm.blacklist","tagTypeBlacklist"],b=0;b<a.length;b++){var c=a[b],d=Wh(c,1);if(Sa(d)||Mb(d))d=G(d);Uh[c]=d}},Vh=function(a){Za(Uh,function(b,c){Sh.set(b,c);G(tb(b,void 0),Th);G(tb(b,c),Th);a&&delete Uh[b]})},ai=function(a,b,c){Rh[a]=Rh[a]||{};var d=1!==c?Yh(b):Sh.get(b);"array"===Kb(d)||"object"===Kb(d)?Rh[a][b]=G(d):Rh[a][b]=d},bi=function(a,b){if(Rh[a])return Rh[a][b]},ci=function(a,b){Rh[a]&&delete Rh[a][b]};var fi={},gi=function(a,b){if(n._gtmexpgrp&&n._gtmexpgrp.hasOwnProperty(a))return n._gtmexpgrp[a];void 0===fi[a]&&(fi[a]=Math.floor(Math.random()*b));return fi[a]};var hi=function(a){var b=1,c,d,e;if(a)for(b=0,d=a.length-1;0<=d;d--)e=a.charCodeAt(d),b=(b<<6&268435455)+e+(e<<14),c=b&266338304,b=0!=c?b^c>>21:b;return b};function ii(a,b,c){for(var d=[],e=b.split(";"),f=0;f<e.length;f++){var g=e[f].split("="),h=g[0].replace(/^\s*|\s*$/g,"");if(h&&h==a){var l=g.slice(1).join("=").replace(/^\s*|\s*$/g,"");l&&c&&(l=decodeURIComponent(l));d.push(l)}}return d};var ji=function(a){ji[" "](a);return a};ji[" "]=function(){};function ki(a){if(!ng(1937))return!0;try{return ji(a.cookie),!0}catch(b){return!1}};var ni=function(a,b,c,d){return li(d)?ii(a,String(b||mi()),c):[]},qi=function(a,b,c,d,e){if(li(e)){var f=oi(a,d,e);if(1===f.length)return f[0].id;if(0!==f.length){f=pi(f,function(g){return g.Kc},b);if(1===f.length)return f[0].id;f=pi(f,function(g){return g.Yb},c);return f[0]?f[0].id:void 0}}};function ri(a,b,c,d){var e=mi(),f=document;ki(f)&&(f.cookie=a);var g=mi();return e!=g||void 0!=c&&0<=ni(b,g,!1,d).indexOf(c)}
var vi=function(a,b,c,d){function e(x,A,w){if(null==w)return delete h[A],x;h[A]=w;return x+"; "+A+"="+w}function f(x,A){if(null==A)return delete h[A],x;h[A]=!0;return x+"; "+A}if(!li(c.Ca))return 2;var g;void 0==b?g=a+"=deleted; expires="+(new Date(0)).toUTCString():(c.encode&&(b=encodeURIComponent(b)),b=si(b),g=a+"="+b);var h={};g=e(g,"path",c.path);var l;c.expires instanceof Date?l=c.expires.toUTCString():null!=c.expires&&(l=""+c.expires);g=e(g,"expires",l);g=e(g,"max-age",c.Lh);g=e(g,"samesite",
c.Wh);c.Yh&&(g=f(g,"secure"));var m=c.domain;if("auto"===m){for(var p=ti(),q=void 0,r=!1,u=0;u<p.length;++u){var t="none"!==p[u]?p[u]:void 0,v=e(g,"domain",t);v=f(v,c.flags);try{d&&d(a,h)}catch(x){q=x;continue}r=!0;if(!ui(t,c.path)&&ri(v,a,b,c.Ca))return 0}if(q&&!r)throw q;return 1}m&&"none"!==m&&(g=e(g,"domain",m));g=f(g,c.flags);d&&d(a,h);return ui(m,c.path)?1:ri(g,a,b,c.Ca)?0:1},wi=function(a,b,c){null==c.path&&(c.path="/");c.domain||(c.domain="auto");return vi(a,b,c)};
function pi(a,b,c){for(var d=[],e=[],f,g=0;g<a.length;g++){var h=a[g],l=b(h);l===c?d.push(h):void 0===f||l<f?(e=[h],f=l):l===f&&e.push(h)}return 0<d.length?d:e}function oi(a,b,c){for(var d=[],e=ni(a,void 0,void 0,c),f=0;f<e.length;f++){var g=e[f].split("."),h=g.shift();if(!b||-1!==b.indexOf(h)){var l=g.shift();l&&(l=l.split("-"),d.push({id:g.join("."),Kc:1*l[0]||1,Yb:1*l[1]||1}))}}return d}
var si=function(a){a&&1200<a.length&&(a=a.substring(0,1200));return a},xi=/^(www\.)?google(\.com?)?(\.[a-z]{2})?$/,yi=/(^|\.)doubleclick\.net$/i,ui=function(a,b){return yi.test(document.location.hostname)||"/"===b&&xi.test(a)},mi=function(){return ki(document)?document.cookie:""},ti=function(){var a=[],b=document.location.hostname.split(".");if(4===b.length){var c=b[b.length-1];if(parseInt(c,10).toString()===c)return["none"]}for(var d=b.length-2;0<=d;d--)a.push(b.slice(d).join("."));var e=document.location.hostname;
yi.test(e)||xi.test(e)||a.push("none");return a},li=function(a){if(!ng(1933)||!a||!Bg())return!0;if(!Ag(a))return!1;var b=yg(a);return null==b?!0:!!b};var zi=function(){for(var a=Math.round(2147483647*Math.random()),b=ki(K)?K.cookie:null,c=Vf.userAgent+(b||"")+(K.referrer||""),d=c.length,e=n.history.length;0<e;)c+=e--^d++;return[a^hi(c)&2147483647,Math.round(hb()/1E3)].join(".")},Ci=function(a,b,c,d,e){var f=Ai(b);return qi(a,f,Bi(c),d,e)},Di=function(a,b,c,d){var e=""+Ai(c),f=Bi(d);1<f&&(e+="-"+f);return[b,e,a].join(".")},Ai=function(a){if(!a)return 1;a=0===a.indexOf(".")?a.substr(1):a;return a.split(".").length},Bi=function(a){if(!a||"/"===a)return 1;
"/"!==a[0]&&(a="/"+a);"/"!==a[a.length-1]&&(a+="/");return a.split("/").length-1};function Ei(a,b,c){var d,e=a.Xb;null==e&&(e=7776E3);0!==e&&(d=new Date((b||hb())+1E3*e));return{path:a.path,domain:a.domain,flags:a.flags,encode:!!c,expires:d}};var Fi=["1"],Gi={},Ji=function(a){var b=Hi(a.prefix),c=Gi[b];c&&Ii(b,c,a)},Li=function(a){var b=Hi(a.prefix);if(!Gi[b]&&!Ki(b,a.path,a.domain)){var c=zi();if(0===Ii(b,c,a)){var d=Xf("google_tag_data",{});d._gcl_au?Na("GTM",57):d._gcl_au=c}Ki(b,a.path,a.domain)}};function Ii(a,b,c){var d=Di(b,"1",c.domain,c.path),e=Ei(c);e.Ca="ad_storage";return wi(a,d,e)}function Ki(a,b,c){var d=Ci(a,b,c,Fi,"ad_storage");d&&(Gi[a]=d);return d}function Hi(a){return(a||"_gcl")+"_au"};var Mi=function(a){for(var b=[],c=K.cookie.split(";"),d=new RegExp("^\\s*"+(a||"_gac")+"_(UA-\\d+-\\d+)=\\s*(.+?)\\s*$"),e=0;e<c.length;e++){var f=c[e].match(d);f&&b.push({ne:f[1],value:f[2],timestamp:Number(f[2].split(".")[1])||0})}b.sort(function(g,h){return h.timestamp-g.timestamp});return b};
function Ni(a,b){var c=Mi(a),d={};if(!c||!c.length)return d;for(var e=0;e<c.length;e++){var f=c[e].value.split(".");if(!("1"!=f[0]||b&&3>f.length||!b&&3!==f.length)&&Number(f[1])){d[c[e].ne]||(d[c[e].ne]=[]);var g={version:f[0],timestamp:1E3*Number(f[1]),na:f[2]};b&&3<f.length&&(g.labels=f.slice(3));d[c[e].ne].push(g)}}return d};function Oi(){for(var a=Pi,b={},c=0;c<a.length;++c)b[a[c]]=c;return b}function Qi(){var a="ABCDEFGHIJKLMNOPQRSTUVWXYZ";a+=a.toLowerCase()+"0123456789-_";return a+"."}var Pi,Ri;
function Si(a){function b(l){for(;d<a.length;){var m=a.charAt(d++),p=Ri[m];if(null!=p)return p;if(!/^[\s\xa0]*$/.test(m))throw Error("Unknown base64 encoding at char: "+m);}return l}Pi=Pi||Qi();Ri=Ri||Oi();for(var c="",d=0;;){var e=b(-1),f=b(0),g=b(64),h=b(64);if(64===h&&-1===e)return c;c+=String.fromCharCode(e<<2|f>>4);64!=g&&(c+=String.fromCharCode(f<<4&240|g>>2),64!=h&&(c+=String.fromCharCode(g<<6&192|h)))}};var Ti;var Xi=function(){var a=Ui,b=Vi,c=Wi(),d=function(g){a(g.target||g.srcElement||{})},e=function(g){b(g.target||g.srcElement||{})};if(!c.init){eg(K,"mousedown",d);eg(K,"keyup",d);eg(K,"submit",e);var f=HTMLFormElement.prototype.submit;HTMLFormElement.prototype.submit=function(){b(this);f.call(this)};c.init=!0}},Yi=function(a,b,c,d,e){var f={callback:a,domains:b,fragment:2===c,placement:c,forms:d,sameHost:e};Wi().decorators.push(f)},Zi=function(a,b,c){for(var d=Wi().decorators,e={},f=0;f<d.length;++f){var g=
d[f],h;if(h=!c||g.forms)a:{var l=g.domains,m=a,p=!!g.sameHost;if(l&&(p||m!==K.location.hostname))for(var q=0;q<l.length;q++)if(l[q]instanceof RegExp){if(l[q].test(m)){h=!0;break a}}else if(0<=m.indexOf(l[q])||p&&0<=l[q].indexOf(m)){h=!0;break a}h=!1}if(h){var r=g.placement;void 0==r&&(r=g.fragment?2:1);r===b&&kb(e,g.callback())}}return e},Wi=function(){var a=Xf("google_tag_data",{}),b=a.gl;b&&b.decorators||(b={decorators:[]},a.gl=b);return b};var $i=/(.*?)\*(.*?)\*(.*)/,aj=/^https?:\/\/([^\/]*?)\.?cdn\.ampproject\.org\/?(.*)/,bj=/^(?:www\.|m\.|amp\.)+/,cj=/([^?#]+)(\?[^#]*)?(#.*)?/;function hj(a){return new RegExp("(.*?)(^|&)"+a+"=([^&]*)&?(.*)")}
var jj=function(a){var b=[],c;for(c in a)if(a.hasOwnProperty(c)){var d=a[c];if(void 0!==d&&d===d&&null!==d&&"[object Object]"!==d.toString()){b.push(c);var e=b,f=e.push,g,h=String(d);Pi=Pi||Qi();Ri=Ri||Oi();for(var l=[],m=0;m<h.length;m+=3){var p=m+1<h.length,q=m+2<h.length,r=h.charCodeAt(m),u=p?h.charCodeAt(m+1):0,t=q?h.charCodeAt(m+2):0,v=r>>2,x=(r&3)<<4|u>>4,A=(u&15)<<2|t>>6,w=t&63;q||(w=64,p||(A=64));l.push(Pi[v],Pi[x],Pi[A],Pi[w])}g=l.join("");f.call(e,g)}}var y=b.join("*");return["1",ij(y),
y].join("*")},ij=function(a,b){var c=[window.navigator.userAgent,(new Date).getTimezoneOffset(),window.navigator.userLanguage||window.navigator.language,Math.floor((new Date).getTime()/60/1E3)-(void 0===b?0:b),a].join("*"),d;if(!(d=Ti)){for(var e=Array(256),f=0;256>f;f++){for(var g=f,h=0;8>h;h++)g=g&1?g>>>1^3988292384:g>>>1;e[f]=g}d=e}Ti=d;for(var l=4294967295,m=0;m<c.length;m++)l=l>>>8^Ti[(l^c.charCodeAt(m))&255];return((l^-1)>>>0).toString(36)},lj=function(){return function(a){var b=hh(n.location.href),
c=b.search.replace("?",""),d=ch(c,"_gl",!1,!0)||"";a.query=kj(d)||{};var e=fh(b,"fragment").match(hj("_gl"));a.fragment=kj(e&&e[3]||"")||{}}},mj=function(a){var b=lj(),c=Wi();c.data||(c.data={query:{},fragment:{}},b(c.data));var d={},e=c.data;e&&(kb(d,e.query),a&&kb(d,e.fragment));return d},kj=function(a){var b;b=void 0===b?3:b;try{if(a){var c;a:{for(var d=a,e=0;3>e;++e){var f=$i.exec(d);if(f){c=f;break a}d=decodeURIComponent(d)}c=void 0}var g=c;if(g&&"1"===g[1]){var h=g[3],l;a:{for(var m=g[2],p=
0;p<b;++p)if(m===ij(h,p)){l=!0;break a}l=!1}if(l){for(var q={},r=h?h.split("*"):[],u=0;u<r.length;u+=2)q[r[u]]=Si(r[u+1]);return q}}}}catch(t){}};function nj(a,b,c,d){function e(p){var q=p,r=hj(a).exec(q),u=q;if(r){var t=r[2],v=r[4];u=r[1];v&&(u=u+t+v)}p=u;var x=p.charAt(p.length-1);p&&"&"!==x&&(p+="&");return p+m}d=void 0===d?!1:d;var f=cj.exec(c);if(!f)return"";var g=f[1],h=f[2]||"",l=f[3]||"",m=a+"="+b;d?l="#"+e(l.substring(1)):h="?"+e(h.substring(1));return""+g+h+l}
function oj(a,b){var c="FORM"===(a.tagName||"").toUpperCase(),d=Zi(b,1,c),e=Zi(b,2,c),f=Zi(b,3,c);if(nb(d)){var g=jj(d);c?pj("_gl",g,a):qj("_gl",g,a,!1)}if(!c&&nb(e)){var h=jj(e);qj("_gl",h,a,!0)}for(var l in f)if(f.hasOwnProperty(l))a:{var m=l,p=f[l],q=a;if(q.tagName){if("a"===q.tagName.toLowerCase()){qj(m,p,q,void 0);break a}if("form"===q.tagName.toLowerCase()){pj(m,p,q);break a}}"string"==typeof q&&nj(m,p,q,void 0)}}
function qj(a,b,c,d){if(c.href){var e=nj(a,b,c.href,void 0===d?!1:d);If.test(e)&&(c.href=e)}}
function pj(a,b,c){if(c&&c.action){var d=(c.method||"").toLowerCase();if("get"===d){for(var e=c.childNodes||[],f=!1,g=0;g<e.length;g++){var h=e[g];if(h.name===a){h.setAttribute("value",b);f=!0;break}}if(!f){var l=K.createElement("input");l.setAttribute("type","hidden");l.setAttribute("name",a);l.setAttribute("value",b);c.appendChild(l)}}else if("post"===d){var m=nj(a,b,c.action);If.test(m)&&(c.action=m)}}}
var Ui=function(a){try{var b;a:{for(var c=a,d=100;c&&0<d;){if(c.href&&c.nodeName.match(/^a(?:rea)?$/i)){b=c;break a}c=c.parentNode;d--}b=null}var e=b;if(e){var f=e.protocol;"http:"!==f&&"https:"!==f||oj(e,e.hostname)}}catch(g){}},Vi=function(a){try{if(a.action){var b=fh(hh(a.action),"host");oj(a,b)}}catch(c){}},rj=function(a,b,c,d){Xi();Yi(a,b,"fragment"===c?2:1,!!d,!1)},sj=function(a,b){Xi();Yi(a,[eh(n.location,"host",!0)],b,!0,!0)},tj=function(){var a=K.location.hostname,b=aj.exec(K.referrer);if(!b)return!1;
var c=b[2],d=b[1],e="";if(c){var f=c.split("/"),g=f[1];e="s"===g?decodeURIComponent(f[2]):decodeURIComponent(g)}else if(d){if(0===d.indexOf("xn--"))return!1;e=d.replace(/-/g,".").replace(/\.\./g,"-")}var h=a.replace(bj,""),l=e.replace(bj,""),m;if(!(m=h===l)){var p="."+l;m=h.substring(h.length-p.length,h.length)===p}return m},uj=function(a,b){return!1===a?!1:a||b||tj()};var vj={};var wj=/^\w+$/,xj=/^[\w-]+$/,yj=/^~?[\w-]+$/,zj={aw:"_aw",dc:"_dc",gf:"_gf",ha:"_ha",gp:"_gp",gb:"_gb"},Aj=function(){if(!ng(1933)||!Bg())return!0;var a=yg("ad_storage");return null==a?!0:!!a},Bj=function(a,b){Ag("ad_storage")?Aj()?a():Fg(a,"ad_storage"):b?Na("TAGGING",3):Eg(function(){Bj(a,!0)},["ad_storage"])},Dj=function(a){return Cj(a).map(function(b){return b.na})},Cj=function(a){var b=[];if(!ki(K)||!K.cookie)return b;var c=ni(a,K.cookie,void 0,"ad_storage");if(!c||0==c.length)return b;for(var d=
{},e=0;e<c.length;d={ic:d.ic},e++){var f=Ej(c[e]);if(null!=f){var g=f,h=g.version;d.ic=g.na;var l=g.timestamp,m=g.labels,p=Ua(b,function(q){return function(r){return r.na===q.ic}}(d));p?(p.timestamp=Math.max(p.timestamp,l),p.labels=Fj(p.labels,m||[])):b.push({version:h,na:d.ic,timestamp:l,labels:m})}}b.sort(function(q,r){return r.timestamp-q.timestamp});return Gj(b)};
function Fj(a,b){for(var c={},d=[],e=0;e<a.length;e++)c[a[e]]=!0,d.push(a[e]);for(var f=0;f<b.length;f++)c[b[f]]||d.push(b[f]);return d}function Hj(a){return a&&"string"==typeof a&&a.match(wj)?a:"_gcl"}
var Jj=function(){var a=hh(n.location.href),b=fh(a,"query",!1,void 0,"gclid"),c=fh(a,"query",!1,void 0,"gclsrc"),d=fh(a,"query",!1,void 0,"wbraid"),e=fh(a,"query",!1,void 0,"dclid");if(!b||!c||!d){var f=a.hash.replace("#","");b=b||ch(f,"gclid",!1,void 0);c=c||ch(f,"gclsrc",!1,void 0);d=d||ch(f,"wbraid",!1,void 0)}return Ij(b,c,e,d)},Ij=function(a,b,c,d){var e={},f=function(g,h){e[h]||(e[h]=[]);e[h].push(g)};e.gclid=a;e.gclsrc=b;e.dclid=c;void 0!==d&&xj.test(d)&&(e.gbraid=d,f(d,"gb"));if(void 0!==
a&&a.match(xj))switch(b){case void 0:f(a,"aw");break;case "aw.ds":f(a,"aw");f(a,"dc");break;case "ds":f(a,"dc");break;case "3p.ds":f(a,"dc");break;case "gf":f(a,"gf");break;case "ha":f(a,"ha")}c&&f(c,"dc");return e},Kj=function(a,b){switch(a){case void 0:case "aw":return"aw"===b;case "aw.ds":return"aw"===b||"dc"===b;case "ds":case "3p.ds":return"dc"===b;case "gf":return"gf"===b;case "ha":return"ha"===b}return!1},Mj=function(a){var b=Jj();Bj(function(){Lj(b,a)})};
function Lj(a,b,c,d){function e(p,q){var r=Nj(p,f);r&&(wi(r,q,g),h=!0)}b=b||{};d=d||[];var f=Hj(b.prefix);c=c||hb();var g=Ei(b,c,!0);g.Ca="ad_storage";var h=!1,l=Math.round(c/1E3),m=function(p){var q=["GCL",l,p];0<d.length&&q.push(d.join("."));return q.join(".")};a.aw&&(!0===b.wi?e("aw",m("~"+a.aw[0])):e("aw",m(a.aw[0])));a.dc&&e("dc",m(a.dc[0]));a.gf&&e("gf",m(a.gf[0]));a.ha&&e("ha",m(a.ha[0]));a.gp&&e("gp",m(a.gp[0]));(void 0==vj.enable_gbraid_cookie_write?0:vj.enable_gbraid_cookie_write)&&!h&&
a.gb&&e("gb",m(a.gb[0]))}
var Pj=function(a,b){var c=mj(!0);Bj(function(){for(var d=Hj(b.prefix),e=0;e<a.length;++e){var f=a[e];if(void 0!==zj[f]){var g=Nj(f,d),h=c[g];if(h){var l=Math.min(Oj(h),hb()),m;b:{var p=l,q=g;if(ki(K))for(var r=ni(q,K.cookie,void 0,"ad_storage"),u=0;u<r.length;++u)if(Oj(r[u])>p){m=!0;break b}m=!1}if(!m){var t=Ei(b,l,!0);t.Ca="ad_storage";wi(g,h,t)}}}}Lj(Ij(c.gclid,c.gclsrc),b)})},Nj=function(a,b){var c=zj[a];if(void 0!==c)return b+c},Oj=function(a){return 0!==Qj(a.split(".")).length?1E3*(Number(a.split(".")[1])||
0):0};function Ej(a){var b=Qj(a.split("."));return 0===b.length?null:{version:b[0],na:b[2],timestamp:1E3*(Number(b[1])||0),labels:b.slice(3)}}function Qj(a){return 3>a.length||"GCL"!==a[0]&&"1"!==a[0]||!/^\d+$/.test(a[1])||!yj.test(a[2])?[]:a}
var Rj=function(a,b,c,d,e){if(Sa(b)&&ki(K)){var f=Hj(e),g=function(){for(var h={},l=0;l<a.length;++l){var m=Nj(a[l],f);if(m){var p=ni(m,K.cookie,void 0,"ad_storage");p.length&&(h[m]=p.sort()[p.length-1])}}return h};Bj(function(){rj(g,b,c,d)})}},Gj=function(a){return a.filter(function(b){return yj.test(b.na)})},Sj=function(a,b){if(ki(K)){for(var c=Hj(b.prefix),d={},e=0;e<a.length;e++)zj[a[e]]&&(d[a[e]]=zj[a[e]]);Bj(function(){Za(d,function(f,g){var h=ni(c+g,K.cookie,void 0,"ad_storage");h.sort(function(u,
t){return Oj(t)-Oj(u)});if(h.length){var l=h[0],m=Oj(l),p=0!==Qj(l.split(".")).length?l.split(".").slice(3):[],q={},r;r=0!==Qj(l.split(".")).length?l.split(".")[2]:void 0;q[f]=[r];Lj(q,b,m,p)}})})}};function Tj(a,b){for(var c=0;c<b.length;++c)if(a[b[c]])return!0;return!1}
var Uj=function(){function a(e,f,g){g&&(e[f]=g)}var b=["aw","dc"];if(Bg()){var c=Jj();if(Tj(c,b)){var d={};a(d,"gclid",c.gclid);a(d,"dclid",c.dclid);a(d,"gclsrc",c.gclsrc);sj(function(){return d},3);sj(function(){var e={};return e._up="1",e},1)}}};function Vj(a,b){var c=Hj(b),d=Nj(a,c);if(!d)return 0;for(var e=Cj(d),f=0,g=0;g<e.length;g++)f=Math.max(f,e[g].timestamp);return f}function Wj(a){var b=0,c;for(c in a)for(var d=a[c],e=0;e<d.length;e++)b=Math.max(b,Number(d[e].timestamp));return b};var Xj=/^\d+\.fls\.doubleclick\.net$/,Yj=!1;Yj=!0;function Zj(a,b){Ag(J.C)?Kg(J.C)?a():Fg(a,J.C):b?Af(42):Ng(function(){Zj(a,!0)},[J.C])}function ak(a){var b=hh(n.location.href),c=fh(b,"host",!1);if(c&&c.match(Xj)){var d=fh(b,"path").split(a+"=");if(1<d.length)return d[1].split(";")[0].split("?")[0]}}
function bk(a,b,c){if("aw"===a||"dc"===a||"gb"===a){var d=ak("gcl"+a);if(d)return d.split(".")}var e=Hj(b);if("_gcl"==e){c=void 0===c?!0:c;var f=!Kg(J.C)&&c,g;g=Jj()[a]||[];if(0<g.length)return f?["0"]:g}var h=Nj(a,e);return h?Dj(h):[]}function ck(a){var b=[];Za(a,function(c,d){d=Gj(d);for(var e=[],f=0;f<d.length;f++)e.push(d[f].na);e.length&&b.push(c+":"+e.join(","))});return b.join(";")}
var dk=function(a){var b=ak("gac");return b?!Kg(J.C)&&a?"0":decodeURIComponent(b):ck(Aj()?Ni():{})},ek=function(a){var b=ak("gacgb");return b?!Kg(J.C)&&a?"0":decodeURIComponent(b):ck(Aj()?Ni("_gac_gb",!0):{})},gk=function(a,b){if(Yj)fk(a,b,"dc");else{var c=Jj().dc||[];Zj(function(){Li(b);var d=Gi[Hi(b.prefix)],e=!1;if(d&&0<c.length){var f=N.joined_au=N.joined_au||{},g=b.prefix||"_gcl";if(!f[g])for(var h=0;h<c.length;h++){var l="https://adservice.google.com/ddm/regclk";l=l+"?gclid="+c[h]+"&auiddc="+d;kg(l);e=f[g]=
!0}}null==a&&(a=e);a&&d&&Ji(b)})}},fk=function(a,b,c){var d=Jj(),e=[],f=d.gclid,g=d.dclid,h=d.gclsrc||"aw";!f||"aw.ds"!==h&&"aw"!==h&&"ds"!==h||c&&!Kj(h,c)||e.push({na:f,Ff:h});!g||c&&"dc"!==c||e.push({na:g,Ff:"ds"});Zj(function(){Li(b);var l=Gi[Hi(b.prefix)],m=!1;if(l&&0<e.length)for(var p=N.joined_auid=N.joined_auid||{},q=0;q<e.length;q++){var r=e[q],u=r.na,t=r.Ff,v=(b.prefix||"_gcl")+"."+t+"."+u;if(!p[v]){var x="https://adservice.google.com/pagead/regclk";x=x+"?gclid="+u+"&auid="+l+"&gclsrc="+t;kg(x);m=p[v]=!0}}null==
a&&(a=m);a&&l&&Ji(b)})},hk=function(a){var b;if(ak("gclaw")||ak("gac"))b=!1;else{var c=Math.max(Vj("aw",a),Wj(Aj()?Ni():{}));b=Math.max(Vj("gb",a),Wj(Aj()?Ni("_gac_gb",!0):{}))>c}return b};var ik=/[A-Z]+/,jk=/\s/,kk=function(a){if(k(a)&&(a=gb(a),!jk.test(a))){var b=a.indexOf("-");if(!(0>b)){var c=a.substring(0,b);if(ik.test(c)){for(var d=a.substring(b+1).split("/"),e=0;e<d.length;e++)if(!d[e])return;return{id:a,prefix:c,containerId:c+"-"+d[0],H:d}}}}},mk=function(a){for(var b={},c=0;c<a.length;++c){var d=kk(a[c]);d&&(b[d.id]=d)}lk(b);var e=[];Za(b,function(f,g){e.push(g)});return e};
function lk(a){var b=[],c;for(c in a)if(a.hasOwnProperty(c)){var d=a[c];"AW"===d.prefix&&d.H[1]&&b.push(d.containerId)}for(var e=0;e<b.length;++e)delete a[b[e]]};var nk=function(){var a=!1;return a};var pk=function(a,b,c,d){return(2===ok()||d||"http:"!=n.location.protocol?a:b)+c},ok=function(){var a=bg(),b;if(1===a)a:{var c=Jh;c=c.toLowerCase();for(var d="https://"+c,e="http://"+c,f=1,g=K.getElementsByTagName("script"),h=0;h<g.length&&100>h;h++){var l=g[h].src;if(l){l=l.toLowerCase();if(0===l.indexOf(e)){b=3;break a}1===f&&0===l.indexOf(d)&&(f=2)}}b=f}else b=a;return b};
var Dk=function(a){return Kg(J.C)?a:a.replace(/&url=([^&#]+)/,function(b,c){var d=ih(decodeURIComponent(c));return"&url="+encodeURIComponent(d)})},Ek=function(){var a;if(!(a=Kh)){var b;if(!0===n._gtmdgs)b=!0;else{var c=Vf&&Vf.userAgent||"";b=0>c.indexOf("Safari")||/Chrome|Coast|Opera|Edg|Silk|Android/.test(c)||11>((/Version\/([\d]+)/.exec(c)||[])[1]||"")?!1:!0}a=!b}if(a)return-1;var d=ab("1");return gi(1,100)<d?gi(2,2):-1},Fk=function(a){var b;
if(!a||!a.length)return;for(var c=[],d=0;d<a.length;++d){var e=a[d];e&&e.estimated_delivery_date?c.push(""+e.estimated_delivery_date):c.push("")}b=c.join(",");return b};var Gk=new RegExp(/^(.*\.)?(google|youtube|blogger|withgoogle)(\.com?)?(\.[a-z]{2})?\.?$/),Hk={cl:["ecl"],customPixels:["nonGooglePixels"],ecl:["cl"],ehl:["hl"],hl:["ehl"],html:["customScripts","customPixels","nonGooglePixels","nonGoogleScripts","nonGoogleIframes"],customScripts:["html","customPixels","nonGooglePixels","nonGoogleScripts","nonGoogleIframes"],nonGooglePixels:[],nonGoogleScripts:["nonGooglePixels"],nonGoogleIframes:["nonGooglePixels"]},Ik={cl:["ecl"],customPixels:["customScripts","html"],
ecl:["cl"],ehl:["hl"],hl:["ehl"],html:["customScripts"],customScripts:["html"],nonGooglePixels:["customPixels","customScripts","html","nonGoogleScripts","nonGoogleIframes"],nonGoogleScripts:["customScripts","html"],nonGoogleIframes:["customScripts","html","nonGoogleScripts"]},Jk="google customPixels customScripts html nonGooglePixels nonGoogleScripts nonGoogleIframes".split(" ");
var Kk=function(){var a=!1;return a},Mk=function(a){var b=Wh("gtm.allowlist")||Wh("gtm.whitelist");b&&Af(9);Kk()&&(b="google gtagfl lcl zone oid op".split(" "));var c=b&&qb(fb(b),Hk),d=Wh("gtm.blocklist")||
Wh("gtm.blacklist");d||(d=Wh("tagTypeBlacklist"))&&Af(3);d?Af(8):d=[];Lk()&&(d=fb(d),d.push("nonGooglePixels","nonGoogleScripts","sandboxedScripts"));0<=Ta(fb(d),"google")&&Af(2);var e=d&&qb(fb(d),Ik),f={};return function(g){var h=g&&g[sd.Ta];if(!h||"string"!=typeof h)return!0;h=h.replace(/^_*/,"");if(void 0!==f[h])return f[h];var l=Ph[h]||[],m=a(h,l);if(b){var p;if(p=
m)a:{if(0>Ta(c,h))if(l&&0<l.length)for(var q=0;q<l.length;q++){if(0>Ta(c,l[q])){Af(11);p=!1;break a}}else{p=!1;break a}p=!0}m=p}var r=!1;if(d){var u=0<=Ta(e,h);if(u)r=u;else{var t=Ya(e,l||[]);t&&Af(10);r=t}}var v=!m||r;v||!(0<=Ta(l,"sandboxedScripts"))||c&&-1!==Ta(c,"sandboxedScripts")||(v=Ya(e,Jk));return f[h]=v}},Lk=function(){return Gk.test(n.location&&n.location.hostname)};var Nk={active:!0,isAllowed:function(){return!0}},Ok=function(a){var b=N.zones;return b?b.checkState(pe.F,a):Nk},Pk=function(a){var b=N.zones;!b&&a&&(b=N.zones=a());return b};var Qk=function(){},Rk=function(){};var Sk=!1,Tk=0,Uk=[];function Vk(a){if(!Sk){var b=K.createEventObject,c="complete"==K.readyState,d="interactive"==K.readyState;if(!a||"readystatechange"!=a.type||c||!b&&d){Sk=!0;for(var e=0;e<Uk.length;e++)M(Uk[e])}Uk.push=function(){for(var f=0;f<arguments.length;f++)M(arguments[f]);return 0}}}function Wk(){if(!Sk&&140>Tk){Tk++;try{K.documentElement.doScroll("left"),Vk()}catch(a){n.setTimeout(Wk,50)}}}var Xk=function(a){Sk?a():Uk.push(a)};var Zk=function(a,b){this.g=!1;this.D=[];this.J={tags:[]};this.N=!1;this.o=this.s=0;Yk(this,a,b)},$k=function(a,b,c,d){if(Gh.hasOwnProperty(b)||"__zone"===b)return-1;var e={};Mb(d)&&(e=G(d,e));e.id=c;e.status="timeout";return a.J.tags.push(e)-1},al=function(a,b,c,d){var e=a.J.tags[b];e&&(e.status=c,e.executionTime=d)},bl=function(a){if(!a.g){for(var b=a.D,c=0;c<b.length;c++)b[c]();a.g=!0;a.D.length=0}},Yk=function(a,b,c){Qa(b)&&a.Mb(b);c&&n.setTimeout(function(){return bl(a)},Number(c))};
Zk.prototype.Mb=function(a){var b=this,c=jb(function(){return M(function(){a(pe.F,b.J)})});this.g?c():this.D.push(c)};var cl=function(a){a.s++;return jb(function(){a.o++;a.N&&a.o>=a.s&&bl(a)})};var dl=function(){function a(d){return!Ra(d)||0>d?0:d}if(!N._li&&n.performance&&n.performance.timing){var b=n.performance.timing.navigationStart,c=Ra(Xh.get("gtm.start"))?Xh.get("gtm.start"):0;N._li={cst:a(c-b),cbt:a(Mh-b)}}};var hl={},il=function(){return n.GoogleAnalyticsObject&&n[n.GoogleAnalyticsObject]},jl=!1;
var kl=function(a){n.GoogleAnalyticsObject||(n.GoogleAnalyticsObject=a||"ga");var b=n.GoogleAnalyticsObject;if(n[b])n.hasOwnProperty(b)||Af(12);else{var c=function(){c.q=c.q||[];c.q.push(arguments)};c.l=Number(new Date);n[b]=c}dl();return n[b]},ll=function(a,b,c,d){b=String(b).replace(/\s+/g,"").split(",");var e=il();e(a+"require","linker");e(a+"linker:autoLink",b,c,d)},ml=function(a){if(!Bg())return;var b=il();b(a+"require","linker");b(a+
"linker:passthrough",!0);};
var ol=function(a){},nl=function(){return n.GoogleAnalyticsObject||"ga"},pl=function(a,b){return function(){var c=il(),d=c&&c.getByName&&c.getByName(a);if(d){var e=d.get("sendHitTask");d.set("sendHitTask",function(f){var g=f.get("hitPayload"),h=f.get("hitCallback"),l=0>g.indexOf("&tid="+b);l&&(f.set("hitPayload",g.replace(/&tid=UA-[0-9]+-[0-9]+/,"&tid="+
b),!0),f.set("hitCallback",void 0,!0));e(f);l&&(f.set("hitPayload",g,!0),f.set("hitCallback",h,!0),f.set("_x_19",void 0,!0),e(f))})}}};
var ul=function(){return"&tc="+Sd.filter(function(a){return a}).length},xl=function(){2022<=vl().length&&wl()},zl=function(){yl||(yl=n.setTimeout(wl,500))},wl=function(){yl&&(n.clearTimeout(yl),yl=void 0);void 0===Al||Bl[Al]&&!Cl&&!Dl||(El[Al]||Fl.Ch()||0>=Gl--?(Af(1),El[Al]=!0):(Fl.Uh(),dg(vl()),Bl[Al]=!0,Hl=Il=Jl=Dl=Cl=""))},vl=function(){var a=Al;if(void 0===a)return"";var b=Oa("GTM"),c=Oa("TAGGING");return[Kl,Bl[a]?"":"&es=1",Ll[a],b?"&u="+b:"",c?"&ut="+c:"",ul(),Cl,Dl,Jl?Jl:"",Il,Hl,"&z=0"].join("")},
Ml=function(){return[Nh,"&v=3&t=t","&pid="+Wa(),"&rv="+pe.Dc].join("")},Nl="0.005000">Math.random(),Kl=Ml(),Ol=function(){Kl=Ml()},Bl={},Cl="",Dl="",Hl="",Il="",Jl="",Al=void 0,Ll={},El={},yl=void 0,Fl=function(a,b){var c=0,d=0;return{Ch:function(){if(c<a)return!1;hb()-d>=b&&(c=0);return c>=a},Uh:function(){hb()-d>=b&&(c=0);c++;d=hb()}}}(2,1E3),Gl=1E3,Pl=function(a,b,c){if(Nl&&!El[a]&&b){a!==Al&&(wl(),Al=a);var d,e=String(b[sd.Ta]||"").replace(/_/g,"");0===e.indexOf("cvt")&&(e="cvt");
d=e;var f=c+d;Cl=Cl?Cl+"."+f:"&tr="+f;var g=b["function"];if(!g)throw Error("Error: No function name given for function call.");var h=(Ud[g]?"1":"2")+d;Hl=Hl?Hl+"."+h:"&ti="+h;zl();xl()}},Ql=function(a,b,c){if(Nl&&!El[a]){a!==Al&&(wl(),Al=a);var d=c+b;Dl=Dl?Dl+"."+d:"&epr="+d;zl();xl()}},Rl=function(a,b,c){};
var Sl=function(){return!1},Tl=function(){var a={};return function(b,c,d){}};function Ul(a,b,c,d){var e=Sd[a],f=Vl(a,b,c,d);if(!f)return null;var g=$d(e[sd.qf],c,[]);if(g&&g.length){var h=g[0];f=Ul(h.index,{onSuccess:f,onFailure:1===h.Cf?b.terminate:f,terminate:b.terminate},c,d)}return f}
function Vl(a,b,c,d){function e(){if(f[sd.Rg])h();else{var x=ae(f,c,[]);var y=$k(c.La,String(f[sd.Ta]),Number(f[sd.rf]),x[sd.Sg]),B=!1;x.vtp_gtmOnSuccess=function(){if(!B){B=!0;var E=hb()-D;Pl(c.id,Sd[a],"5");al(c.La,y,"success",
E);g()}};x.vtp_gtmOnFailure=function(){if(!B){B=!0;var E=hb()-D;Pl(c.id,Sd[a],"6");al(c.La,y,"failure",E);h()}};x.vtp_gtmTagId=f.tag_id;x.vtp_gtmEventId=c.id;Pl(c.id,f,"1");var C=function(){var E=hb()-D;Pl(c.id,f,"7");al(c.La,y,"exception",E);B||(B=!0,h())};var D=hb();try{Zd(x,c)}catch(E){C(E)}}}var f=Sd[a],g=b.onSuccess,h=b.onFailure,l=b.terminate;if(c.Ud(f))return null;var m=$d(f[sd.sf],c,[]);if(m&&m.length){var p=m[0],q=Ul(p.index,{onSuccess:g,onFailure:h,terminate:l},c,d);if(!q)return null;g=q;h=2===p.Cf?l:q}if(f[sd.kf]||f[sd.Ug]){var r=f[sd.kf]?Td:
c.bi,u=g,t=h;if(!r[a]){e=jb(e);var v=Wl(a,r,e);g=v.onSuccess;h=v.onFailure}return function(){r[a](u,t)}}return e}function Wl(a,b,c){var d=[],e=[];b[a]=Xl(d,e,c);return{onSuccess:function(){b[a]=Yl;for(var f=0;f<d.length;f++)d[f]()},onFailure:function(){b[a]=Zl;for(var f=0;f<e.length;f++)e[f]()}}}function Xl(a,b,c){return function(d,e){a.push(d);b.push(e);c()}}function Yl(a){a()}function Zl(a,b){b()};var bm=function(a,b){for(var c=[],d=0;d<Sd.length;d++)if(a[d]){var e=Sd[d];var f=cl(b.La);try{var g=Ul(d,{onSuccess:f,onFailure:f,terminate:f},b,d);if(g){var h=c,l=h.push,m=d,p=e["function"];if(!p)throw"Error: No function name given for function call.";var q=Ud[p];l.call(h,{Uf:m,Nf:q?q.priorityOverride||0:0,Lc:g})}else $l(d,b),f()}catch(t){f()}}var r=b.La;r.N=!0;r.o>=r.s&&bl(r);c.sort(am);for(var u=0;u<c.length;u++)c[u].Lc();
return 0<c.length};function am(a,b){var c,d=b.Nf,e=a.Nf;c=d>e?1:d<e?-1:0;var f;if(0!==c)f=c;else{var g=a.Uf,h=b.Uf;f=g>h?1:g<h?-1:0}return f}function $l(a,b){if(!Nl)return;var c=function(d){var e=b.Ud(Sd[d])?"3":"4",f=$d(Sd[d][sd.qf],b,[]);f&&f.length&&c(f[0].index);Pl(b.id,Sd[d],e);var g=$d(Sd[d][sd.sf],b,[]);g&&g.length&&c(g[0].index)};c(a);}
var cm=!1,hm=function(a){var b=a["gtm.uniqueEventId"],c=a.event;if("gtm.js"===c){if(cm)return!1;cm=!0}var d=Ok(b),e=!1;if(!d.active){if("gtm.js"!==c)return!1;e=!0;d=Ok(Number.MAX_SAFE_INTEGER)}Nl&&!El[b]&&Al!==b&&(wl(),Al=b,Hl=Cl="",Ll[b]="&e="+(0===c.indexOf("gtm.")?encodeURIComponent(c):"*")+"&eid="+b,zl());var f=a.eventCallback,g=a.eventTimeout,h={id:b,name:c,Ud:Mk(d.isAllowed),bi:[],Kf:function(){Af(6)},vf:dm(b),La:new Zk(f,
g)};em(b,h.La);var l=ke(h);e&&(l=fm(l));var m=bm(l,h);"gtm.js"!==c&&"gtm.sync"!==c||ol(pe.F);switch(c){case "gtm.init":m&&Af(20)}return gm(l,m)};function dm(a){return function(b){Nl&&(Rb(b)||Rl(a,"input",b))}}
function em(a,b){ai(a,"event",1);ai(a,"ecommerce",1);ai(a,"gtm");ai(a,"eventModel");}function fm(a){for(var b=[],c=0;c<a.length;c++)a[c]&&Fh[String(Sd[c][sd.Ta])]&&(b[c]=!0);return b}function gm(a,b){if(!b)return b;for(var c=0;c<a.length;c++)if(a[c]&&Sd[c]&&!Gh[String(Sd[c][sd.Ta])])return!0;return!1}function im(a,b){if(a){var c=""+a;0!==c.indexOf("http://")&&0!==c.indexOf("https://")&&(c="https://"+c);"/"===c[c.length-1]&&(c=c.substring(0,c.length-1));return hh(""+c+b).href}}function jm(a,b){return km()?im(a,b):void 0}function km(){var a=!1;return a};var lm=function(){this.eventModel={};this.targetConfig={};this.containerConfig={};this.remoteConfig={};this.globalConfig={};this.onSuccess=function(){};this.onFailure=function(){};this.setContainerTypeLoaded=function(){};this.getContainerTypeLoaded=function(){};this.eventId=void 0},mm=function(a){var b=new lm;b.eventModel=a;return b},nm=function(a,b){a.targetConfig=b;return a},om=function(a,b){a.containerConfig=b;return a},pm=function(a,b){a.remoteConfig=b;return a},qm=function(a,b){a.globalConfig=
b;return a},rm=function(a,b){a.onSuccess=b;return a},sm=function(a,b){a.setContainerTypeLoaded=b;return a},tm=function(a,b){a.getContainerTypeLoaded=b;return a},um=function(a,b){a.onFailure=b;return a};lm.prototype.getWithConfig=function(a){if(void 0!==this.eventModel[a])return this.eventModel[a];if(void 0!==this.targetConfig[a])return this.targetConfig[a];if(void 0!==this.containerConfig[a])return this.containerConfig[a];if(void 0!==this.remoteConfig[a])return this.remoteConfig[a];if(void 0!==this.globalConfig[a])return this.globalConfig[a]};
var vm=function(a){function b(e){Za(e,function(f){c[f]=null})}var c={};b(a.eventModel);b(a.targetConfig);b(a.containerConfig);b(a.globalConfig);var d=[];Za(c,function(e){d.push(e)});return d};var wm;if(3===pe.Dc.length)wm="g";else{var xm="G";wm=xm}
var ym={"":"n",UA:"u",AW:"a",DC:"d",G:"e",GF:"f",HA:"h",GTM:wm,OPT:"o"},zm=function(a){var b=pe.F.split("-"),c=b[0].toUpperCase(),d=ym[c]||"i",e=a&&"GTM"===c?b[1]:"OPT"===c?b[1]:"",f;if(3===pe.Dc.length){var g="w";f="2"+g}else f="";return f+d+pe.Dc+e};var Am=function(a,b){a.addEventListener&&a.addEventListener.call(a,"message",b,!1)};var Bm=function(){return Mf("iPhone")&&!Mf("iPod")&&!Mf("iPad")};Mf("Opera");Mf("Trident")||Mf("MSIE");Mf("Edge");!Mf("Gecko")||-1!=Jf.toLowerCase().indexOf("webkit")&&!Mf("Edge")||Mf("Trident")||Mf("MSIE")||Mf("Edge");-1!=Jf.toLowerCase().indexOf("webkit")&&!Mf("Edge")&&Mf("Mobile");Mf("Macintosh");Mf("Windows");Mf("Linux")||Mf("CrOS");var Cm=na.navigator||null;Cm&&(Cm.appVersion||"").indexOf("X11");Mf("Android");Bm();Mf("iPad");Mf("iPod");Bm()||Mf("iPad")||Mf("iPod");Jf.toLowerCase().indexOf("kaios");var Dm=function(a,b){for(var c=a,d=0;50>d;++d){var e;try{e=!(!c.frames||!c.frames[b])}catch(h){e=!1}if(e)return c;var f;a:{try{var g=c.parent;if(g&&g!=c){f=g;break a}}catch(h){}f=null}if(!(c=f))break}return null};var Em=function(){};var Fm=function(a){void 0!==a.addtlConsent&&"string"!==typeof a.addtlConsent&&(a.addtlConsent=void 0);void 0!==a.gdprApplies&&"boolean"!==typeof a.gdprApplies&&(a.gdprApplies=void 0);return void 0!==a.tcString&&"string"!==typeof a.tcString||void 0!==a.listenerId&&"number"!==typeof a.listenerId?2:a.cmpStatus&&"error"!==a.cmpStatus?0:3},Gm=function(a,b){this.o=a;this.g=null;this.D={};this.N=0;this.J=void 0===b?500:b;this.s=null};ma(Gm,Em);
var Im=function(a){return"function"===typeof a.o.__tcfapi||null!=Hm(a)};
Gm.prototype.addEventListener=function(a){var b={},c=Cf(function(){return a(b)}),d=0;-1!==this.J&&(d=setTimeout(function(){b.tcString="tcunavailable";b.internalErrorState=1;c()},this.J));var e=function(f,g){clearTimeout(d);f?(b=f,b.internalErrorState=Fm(b),g&&0===b.internalErrorState||(b.tcString="tcunavailable",g||(b.internalErrorState=3))):(b.tcString="tcunavailable",b.internalErrorState=3);a(b)};try{Jm(this,"addEventListener",e)}catch(f){b.tcString="tcunavailable",b.internalErrorState=3,d&&(clearTimeout(d),
d=0),c()}};Gm.prototype.removeEventListener=function(a){a&&a.listenerId&&Jm(this,"removeEventListener",null,a.listenerId)};
var Lm=function(a,b,c){var d;d=void 0===d?"755":d;var e;a:{if(a.publisher&&a.publisher.restrictions){var f=a.publisher.restrictions[b];if(void 0!==f){e=f[void 0===d?"755":d];break a}}e=void 0}var g=e;if(0===g)return!1;var h=c;2===c?(h=0,2===g&&(h=1)):3===c&&(h=1,1===g&&(h=0));var l;if(0===h)if(a.purpose&&a.vendor){var m=Km(a.vendor.consents,void 0===d?"755":d);l=m&&"1"===b&&a.purposeOneTreatment&&("DE"===a.publisherCC||ng(1936)&&"CH"===a.publisherCC)?!0:m&&Km(a.purpose.consents,b)}else l=!0;else l=
1===h?a.purpose&&a.vendor?Km(a.purpose.legitimateInterests,b)&&Km(a.vendor.legitimateInterests,void 0===d?"755":d):!0:!0;return l},Km=function(a,b){return!(!a||!a[b])},Jm=function(a,b,c,d){c||(c=function(){});if("function"===typeof a.o.__tcfapi){var e=a.o.__tcfapi;e(b,2,c,d)}else if(Hm(a)){Mm(a);var f=++a.N;a.D[f]=c;if(a.g){var g={};a.g.postMessage((g.__tcfapiCall={command:b,version:2,callId:f,parameter:d},g),"*")}}else c({},!1)},Hm=function(a){if(a.g)return a.g;a.g=Dm(a.o,"__tcfapiLocator");return a.g},
Mm=function(a){a.s||(a.s=function(b){try{var c;c=("string"===typeof b.data?JSON.parse(b.data):b.data).__tcfapiReturn;a.D[c.callId](c.returnValue,c.success)}catch(d){}},Am(a.o,a.s))};var Nm=!0;var Om={1:0,3:0,4:0,7:3,9:3,10:3};function Pm(a,b){if(""===a)return b;var c=Number(a);return isNaN(c)?b:c}var Qm=Pm("",550),Rm=Pm("",500);function Sm(){var a=N.tcf||{};return N.tcf=a}
var Tm=function(a,b){this.s=a;this.g=b;this.o=hb();},Um=function(a){},Vm=function(a){},an=function(){var a=Sm(),b=new Gm(n,Nm?3E3:-1),c=new Tm(b,a);if((Wm()?!0===n.gtag_enable_tcf_support:!1!==n.gtag_enable_tcf_support)&&!a.active&&("function"===typeof n.__tcfapi||Im(b))){a.active=!0;a.$b={};Xm();var d=null;Nm?d=n.setTimeout(function(){Ym(a);Zm(a);d=null},Rm):a.tcString="tcunavailable";try{b.addEventListener(function(e){d&&(clearTimeout(d),d=null);if(0!==e.internalErrorState)Ym(a),Zm(a),Um(c);
else{var f;a.gdprApplies=e.gdprApplies;if(!1===e.gdprApplies)f=$m(),b.removeEventListener(e);else if("tcloaded"===e.eventStatus||"useractioncomplete"===e.eventStatus||"cmpuishown"===e.eventStatus){var g={},h;for(h in Om)if(Om.hasOwnProperty(h))if("1"===h){var l,m=e,p=!0;p=void 0===p?!1:p;var q;var r=m;!1===r.gdprApplies?q=!0:(void 0===r.internalErrorState&&(r.internalErrorState=Fm(r)),q="error"===r.cmpStatus||0!==r.internalErrorState||"loaded"===r.cmpStatus&&("tcloaded"===r.eventStatus||"useractioncomplete"===
r.eventStatus)?!0:!1);l=q?!1===m.gdprApplies||"tcunavailable"===m.tcString||void 0===m.gdprApplies&&!p||"string"!==typeof m.tcString||!m.tcString.length?!0:Lm(m,"1",0):!1;g["1"]=l}else g[h]=Lm(e,h,Om[h]);f=g}f&&(a.tcString=e.tcString||"tcempty",a.$b=f,Zm(a),Um(c))}}),Vm(c)}catch(e){d&&(clearTimeout(d),d=null),Ym(a),Zm(a)}}};function Ym(a){a.type="e";a.tcString="tcunavailable";Nm&&(a.$b=$m())}function Xm(){var a={};Ig((a.ad_storage="denied",a.wait_for_update=Qm,a))}
var Wm=function(){var a=!1;a=!0;return a};function $m(){var a={},b;for(b in Om)Om.hasOwnProperty(b)&&(a[b]=!0);return a}function Zm(a){var b={};Jg((b.ad_storage=a.$b["1"]?"granted":"denied",b))}
var bn=function(){var a=Sm();if(a.active&&void 0!==a.loadTime)return Number(a.loadTime)},cn=function(){var a=Sm();return a.active?a.tcString||"":""},dn=function(){var a=Sm();return a.active&&void 0!==a.gdprApplies?a.gdprApplies?"1":"0":""},en=function(a){if(!Om.hasOwnProperty(String(a)))return!0;var b=Sm();return b.active&&b.$b?!!b.$b[String(a)]:!0};var fn=!1;function gn(a){var b=String(n.location).split(/[?#]/)[0],c=pe.bg||n._CONSENT_MODE_SALT;return a?c?String(hi(b+a+c)):"0":""}
function hn(a){function b(t){var v;N.reported_gclid||(N.reported_gclid={});v=N.reported_gclid;var x;x=fn&&g&&(!Bg()||Kg(J.C))?l+"."+(f.prefix||"_gcl")+(t?"gcu":"gcs"):l+(t?"gcu":"gcs");if(!v[x]){v[x]=!0;var A=[],w={},y=function(Q,T){T&&(A.push(Q+"="+encodeURIComponent(T)),w[Q]=!0)},B="https://www.google.com";if(Bg()){var C=Kg(J.C);y("gcs",Lg());t&&y("gcu","1");Cg()&&y("gcd","G1"+Gg(zg));N.dedupe_gclid||
(N.dedupe_gclid=""+zi());y("rnd",N.dedupe_gclid);if((!l||m&&"aw.ds"!==m)&&Kg(J.C)){var D=Dj("_gcl_aw");y("gclaw",D.join("."))}y("url",String(n.location).split(/[?#]/)[0]);y("dclid",jn(d,p));var E=!1;E=!0;C||!d&&!E||(B="https://pagead2.googlesyndication.com")}
y("gdpr_consent",cn()),y("gdpr",dn());"1"===mj(!1)._up&&y("gtm_up","1");y("gclid",jn(d,l));y("gclsrc",m);if(!(w.gclid||w.dclid||w.gclaw)&&(y("gbraid",jn(d,q)),!w.gbraid&&Bg()&&Kg(J.C))){var I=Dj("_gcl_gb");y("gclgb",I.join("."))}y("gtm",zm(!e));fn&&g&&Kg(J.C)&&(Li(f||{}),y("auid",Gi[Hi(f.prefix)]||""));
a.Bf&&y("did",a.Bf);var P=B+"/pagead/landing?"+A.join("&");kg(P)}}var c=!!a.Id,d=!!a.oa,e=a.U,f=void 0===a.Ic?{}:a.Ic,g=void 0===a.Pc?!0:a.Pc,h=Jj(),l=h.gclid||"",m=h.gclsrc,p=h.dclid||"",q=h.gbraid||"",r=!c&&((!l||m&&"aw.ds"!==m?!1:!0)||q),u=Bg();if(r||u)u?Ng(function(){b();Kg(J.C)||Fg(function(t){return b(!0,t.wf)},J.C)},[J.C]):b()}function jn(a,b){var c=a&&!Kg(J.C);return b&&c?"0":b}var Un=function(){var a=!0;en(7)&&en(9)&&en(10)||(a=!1);var b=!0;b=!1;b&&!Tn()&&(a=!1);return a},Tn=function(){var a=!0;en(3)&&en(4)||(a=!1);return a};var so=!1;function to(){var a=N;return a.gcq=a.gcq||new uo}
var vo=function(a,b,c){to().register(a,b,c)},wo=function(a,b,c,d){to().push("event",[b,a],c,d)},xo=function(a,b){to().push("config",[a],b)},yo=function(a,b,c,d){to().push("get",[a,b],c,d)},zo=function(a){return to().getRemoteConfig(a)},Ao={},Bo=function(){this.status=1;this.containerConfig={};this.targetConfig={};this.remoteConfig={};this.o=null;this.g=!1},Co=function(a,b,c,d,e){this.type=a;this.s=b;this.U=c||"";this.g=d;this.o=e},uo=function(){this.D={};this.o={};this.g=[];this.s={AW:!1,UA:!1}},
Do=function(a,b){var c=kk(b);return a.D[c.containerId]=a.D[c.containerId]||new Bo},Eo=function(a,b,c){if(b){var d=kk(b);if(d&&1===Do(a,b).status){Do(a,b).status=2;var e={};Nl&&(e.timeoutId=n.setTimeout(function(){Af(38);zl()},3E3));a.push("require",[e],d.containerId);Ao[d.containerId]=hb();if(nk()){}else{var g="/gtag/js?id="+encodeURIComponent(d.containerId)+"&l=dataLayer&cx=c",h=("http:"!=n.location.protocol?"https:":"http:")+("//www.googletagmanager.com"+g),l=jm(c,g)||h;ag(l)}}}},Fo=function(a,b,c,d){if(d.U){var e=Do(a,d.U),f=e.o;if(f){var g=G(c),h=G(e.targetConfig[d.U]),l=G(e.containerConfig),m=G(e.remoteConfig),p=G(a.o),q=Wh("gtm.uniqueEventId"),r=kk(d.U).prefix,u=tm(sm(um(rm(qm(pm(om(nm(mm(g),h),l),m),p),function(){
Ql(q,r,"2");}),function(){Ql(q,r,"3");}),function(t,v){a.s[t]=v}),function(t){return a.s[t]});try{Ql(q,r,"1");f(d.U,b,d.s,u)}catch(t){Ql(q,r,"4");}}}};aa=uo.prototype;
aa.register=function(a,b,c){var d=Do(this,a);if(3!==d.status){d.o=b;d.status=3;if(c){G(d.remoteConfig,c);d.remoteConfig=c}var e=kk(a),f=Ao[e.containerId];if(void 0!==f){var g=N[e.containerId].bootstrap,h=e.prefix.toUpperCase();N[e.containerId]._spx&&(h=h.toLowerCase());var l=Wh("gtm.uniqueEventId"),m=h,p=hb()-g;if(Nl&&!El[l]){l!==Al&&(wl(),Al=l);var q=m+"."+Math.floor(g-f)+
"."+Math.floor(p);Il=Il?Il+","+q:"&cl="+q}delete Ao[e.containerId]}this.flush()}};aa.push=function(a,b,c,d){var e=Math.floor(hb()/1E3);Eo(this,c,b[0][J.Ia]||this.o[J.Ia]);so&&c&&Do(this,c).g&&(d=!1);this.g.push(new Co(a,e,c,b,d));d||this.flush()};aa.insert=function(a,b,c){var d=Math.floor(hb()/1E3);0<this.g.length?this.g.splice(1,0,new Co(a,d,c,b,!1)):this.g.push(new Co(a,d,c,b,!1))};
aa.flush=function(a){for(var b=this,c=[],d=!1,e={};this.g.length;){var f=this.g[0];if(f.o)so?!f.U||Do(this,f.U).g?(f.o=!1,this.g.push(f)):c.push(f):(f.o=!1,this.g.push(f));else switch(f.type){case "require":if(3!==Do(this,f.U).status&&!a){so&&this.g.push.apply(this.g,c);return}Nl&&n.clearTimeout(f.g[0].timeoutId);break;case "set":Za(f.g[0],function(r,u){G(tb(r,u),b.o)});break;case "config":e.qa={};Za(f.g[0],function(r){return function(u,t){G(tb(u,t),r.qa)}}(e));var g=!!e.qa[J.yc];delete e.qa[J.yc];
var h=Do(this,f.U),l=kk(f.U),m=l.containerId===l.id;g||(m?h.containerConfig={}:h.targetConfig[f.U]={});h.g&&g||Fo(this,J.aa,e.qa,f);h.g=!0;delete e.qa[J.Fb];m?G(e.qa,h.containerConfig):G(e.qa,h.targetConfig[f.U]);so&&(d=!0);break;case "event":e.hc={};Za(f.g[0],function(r){return function(u,t){G(tb(u,t),r.hc)}}(e));Fo(this,f.g[1],e.hc,f);break;case "get":var p={},q=(p[J.Ga]=f.g[0],p[J.Fa]=f.g[1],p);Fo(this,J.va,q,f)}this.g.shift();e={qa:e.qa,hc:e.hc}}so&&(this.g.push.apply(this.g,c),d&&this.flush())};
aa.getRemoteConfig=function(a){return Do(this,a).remoteConfig};function Go(a,b){var c=this;};function Ho(a,b,c){};function Io(a,b,c,d){};function Jo(a){};var Ko=function(a,b,c){var d={event:b,"gtm.element":a,"gtm.elementClasses":lg(a,"className"),"gtm.elementId":a["for"]||gg(a,"id")||"","gtm.elementTarget":a.formTarget||lg(a,"target")||""};c&&(d["gtm.triggers"]=c.join(","));d["gtm.elementUrl"]=(a.attributes&&a.attributes.formaction?a.formAction:"")||a.action||lg(a,"href")||a.src||a.code||a.codebase||"";return d},Lo=function(a){N.hasOwnProperty("autoEventsSettings")||(N.autoEventsSettings={});var b=N.autoEventsSettings;b.hasOwnProperty(a)||(b[a]={});
return b[a]},Mo=function(a,b,c){Lo(a)[b]=c},No=function(a,b,c,d){var e=Lo(a),f=ib(e,b,d);e[b]=c(f)},Oo=function(a,b,c){var d=Lo(a);return ib(d,b,c)};var Po={},Qo=[];
var Xo=function(a,b){};

function $o(a,b){};var ap=/^\s*$/,bp,cp=!1;
function np(a,b){}function op(a,b,c){};var pp=!!n.MutationObserver,qp=void 0,rp=function(a){if(!qp){var b=function(){var c=K.body;if(c)if(pp)(new MutationObserver(function(){for(var e=0;e<qp.length;e++)M(qp[e])})).observe(c,{childList:!0,subtree:!0});else{var d=!1;eg(c,"DOMNodeInserted",function(){d||(d=!0,M(function(){d=!1;for(var e=0;e<qp.length;e++)M(qp[e])}))})}};qp=[];K.body?b():M(b)}qp.push(a)};var tp=["www.youtube.com","www.youtube-nocookie.com"],up,vp=!1,wp=0;
function Gp(a,b){}function Hp(a,b){return!0};function Ip(a,b,c){};function Jp(a,b){var c;H(F(this),["path:!string"],[a]);lf(this,"access_globals","execute",a);for(var d=a.split("."),e=n,f=e[d[0]],g=1;f&&g<d.length;g++)if(e=f,f=f[d[g]],e===n||e===K)return;if("function"!==Kb(f))return;var h=!1;for(var l=[],m=1;m<arguments.length;m++)l.push(Pb(arguments[m],this.g,h));var p=(0,this.g.N)(f,e,l);
c=Nb(p,this.g);void 0===c&&void 0!==p&&Af(45);return c};function Kp(a){H(F(this),["fn:!Fn"],arguments);var b=this.g;M(function(){a instanceof wb&&a.o(b)});};function Lp(a){};var Mp=!1,Np=[];function Op(){if(!Mp){Mp=!0;for(var a=0;a<Np.length;a++)M(Np[a])}}var Pp=function(a){Mp?M(a):Np.push(a)};function Qp(a){H(F(this),["listener:!Fn"],arguments);lf(this,"process_dom_events","window","load");Pp(Pb(a))};function Rp(a){var b;return b};function Sp(a,b){var c;var d=!1;var e=Nb(c,this.g,d);void 0===e&&void 0!==c&&Af(45);return e};function Tp(a){var b;H(F(this),["path:!string"],arguments);lf(this,"access_globals","read",a);var c=a.split("."),d=n,e;for(e=0;e<c.length-1;e++)if(d=d[c[e]],null==d||d===n||d===K)return;b=d[c[e]];var f=!1;var g=Nb(b,this.g,f);void 0===g&&void 0!==b&&Af(45);return g};function Up(a,b){var c=null,d=!1;H(F(this),["functionPath:!string","arrayPath:!string"],arguments);lf(this,"access_globals","readwrite",a);lf(this,"access_globals","readwrite",b);var e=[n,K],f=a.split("."),g=rb(f,e),h=f[f.length-1];if(void 0===g)throw Error("Path "+a+" does not exist.");var l=g[h];if(l&&!Qa(l))return null;
if(l)return Nb(l,this.g,d);var m;l=function(){if(!Qa(m.push))throw Error("Object at "+b+" in window is not an array.");m.push.call(m,arguments)};g[h]=l;var p=b.split("."),q=rb(p,e),r=p[p.length-1];if(void 0===q)throw Error("Path "+p+" does not exist.");m=q[r];void 0===m&&(m=[],q[r]=m);c=function(){l.apply(l,Array.prototype.slice.call(arguments,0))};return Nb(c,this.g,d)};function Vp(a){var b;H(F(this),["path:!string"],arguments);lf(this,"access_globals","readwrite",a);var c=a.split("."),d=rb(c,[n,K]),e=c[c.length-1];if(void 0===d)throw Error("Path "+a+" does not exist.");var f=d[e];void 0===f&&(f=[],d[e]=f);b=function(){if(!Qa(f.push))throw Error("Object at "+a+" in window is not an array.");f.push.apply(f,Array.prototype.slice.call(arguments,0))};var g=!1;return Nb(b,this.g,g)};var Wp=function(a){var b;return b};function Xp(a,b){b=void 0===b?!0:b;var c;return c};function Yp(a){var b=null;return b};function Zp(a,b){var c;return c};function $p(a,b){var c;return c};function aq(a){var b="";return b};function bq(a,b){var c;return c};function cq(a){var b="";return b};function dq(){lf(this,"get_user_agent");return n.navigator.userAgent};function eq(a,b){};var fq={};function gq(a,b,c,d,e,f){f?e[f]?(e[f][0].push(c),e[f][1].push(d)):(e[f]=[[c],[d]],ag(a,function(){for(var g=e[f][0],h=0;h<g.length;h++)M(g[h]);g.push=function(l){M(l);return 0}},function(){for(var g=e[f][1],h=0;h<g.length;h++)M(g[h]);e[f]=null},b)):ag(a,c,d,b)}
function hq(a,b,c,d){H(F(this),["url:!string","onSuccess:?Fn","onFailure:?Fn","cacheToken:?string"],arguments);lf(this,"inject_script",a);var e=this.g;gq(a,void 0,function(){b&&b.o(e)},function(){c&&c.o(e)},fq,d);}var iq=Object.freeze({dl:1,id:1}),jq={};
function kq(a,b,c,d){};function lq(a){var b=!0;return b};var mq=function(){return!1},nq={getItem:function(a){var b=null;return b},setItem:function(a,
b){return!1},removeItem:function(a){}};function oq(){try{lf(this,"logging")}catch(c){return}if(!console)return;for(var a=Array.prototype.slice.call(arguments,0),b=0;b<a.length;b++)a[b]=Pb(a[b],this.g);console.log.apply(console,a);};function pq(a){var b=void 0;return b};function qq(a,b){var c=!1;return c};function rq(){var a="";return a};function sq(){var a="";return a};function tq(){};function uq(a,b,c,d){d=void 0===d?!1:d;};function vq(a,b,c){H(F(this),["url:!string","onSuccess:?Fn","onFailure:?Fn"],arguments);lf(this,"send_pixel",a);var d=this.g;dg(a,function(){b instanceof wb&&b.o(d)},function(){c instanceof wb&&c.o(d)});};function wq(a,b,c,d){var e=this;d=void 0===d?!0:d;var f=!1;return f};function xq(a){H(F(this),["consentSettings:!DustMap"],arguments);for(var b=a.Ib(),c=b.length(),d=0;d<c;d++){var e=b.get(d);e!==J.bd&&lf(this,"access_consent",e,"write")}Ig(Pb(a))};function yq(a,b,c){H(F(this),["path:!string","value:?*","overrideExisting:?boolean"],arguments);lf(this,"access_globals","readwrite",a);var d=!1;var e=a.split("."),f=n,g;for(g=0;g<e.length-1;g++)if(f=f[e[g]],void 0===f||f===n||f===K)return!1;if(void 0===f[e[g]]||c)return f[e[g]]=Pb(b,this.g,d),!0;
return!1};function zq(a,b,c){}
;var Aq=function(a){for(var b=[],c=0,d=0;d<a.length;d++){var e=a.charCodeAt(d);128>e?b[c++]=e:(2048>e?b[c++]=e>>6|192:(55296==(e&64512)&&d+1<a.length&&56320==(a.charCodeAt(d+1)&64512)?(e=65536+((e&1023)<<10)+(a.charCodeAt(++d)&1023),b[c++]=e>>18|240,b[c++]=e>>12&63|128):b[c++]=e>>12|224,b[c++]=e>>6&63|128),b[c++]=e&63|128)}return b};function Bq(a,b,c,d){var e=this;};function Cq(a,b,c){}
;var Dq={},Eq={};Dq.getItem=function(a){var b=null;return b};
Dq.setItem=function(a,b){};
Dq.removeItem=function(a){};Dq.clear=function(){};var Fq=function(a){var b;return b};function Gq(a){H(F(this),["consentSettings:!DustMap"],arguments);var b=Pb(a),c;for(c in b)b.hasOwnProperty(c)&&lf(this,"access_consent",c,"write");Jg(b)};var md=function(){var a=new wf;nk()?(a.add("injectHiddenIframe",Pa),a.add("injectScript",Pa)):(a.add("injectHiddenIframe",eq),a.add("injectScript",hq));var b=vq;a.add("Math",df());a.add("TestHelper",yf());a.add("addEventCallback",Jo);a.add("aliasInWindow",Hp);a.add("assertApi",$e);a.add("assertThat",af);a.add("callInWindow",
Jp);a.add("callLater",Kp);a.add("copyFromDataLayer",Sp);a.add("copyFromWindow",Tp);a.add("createArgumentsQueue",Up);a.add("createQueue",Vp);a.add("decodeUri",ef);a.add("decodeUriComponent",ff);a.add("encodeUri",gf);a.add("encodeUriComponent",hf);a.add("fail",jf);a.add("fromBase64",Wp,!("atob"in n));a.add("generateRandom",kf);a.add("getContainerVersion",mf);a.add("getCookieValues",Xp);a.add("getQueryParameters",Zp);a.add("getReferrerQueryParameters",$p);a.add("getReferrerUrl",aq);a.add("getTimestamp",
nf);a.add("getTimestampMillis",nf);a.add("getType",of);a.add("getUrl",cq);a.add("localStorage",nq,!mq());a.add("logToConsole",oq);a.add("makeInteger",qf);a.add("makeNumber",rf);a.add("makeString",sf);a.add("makeTableMap",tf);a.add("mock",vf);a.add("parseUrl",pq);a.add("queryPermission",qq);a.add("readCharacterSet",rq);a.add("readTitle",sq);a.add("sendPixel",b);a.add("setCookie",wq);a.add("setInWindow",yq);a.add("sha256",Bq);a.add("templateStorage",Dq);a.add("toBase64",Fq,!("btoa"in n));a.add("JSON",
pf(function(c){var d=this.g.g;d&&d.log.call(this,"error",c)}));
nk()?xf(a,
"internal.injectScript",Pa):xf(a,"internal.injectScript",kq);return function(c){var d;if(a.g.hasOwnProperty(c))d=a.get(c,this);else{var e;if(e=a.o.hasOwnProperty(c)){var f=!1,g=this.g.g;if(g){var h=g.Sb();if(h){0!==h.indexOf("__cvt_")&&(f=!0);}}e=f}if(e)d=
a.o.hasOwnProperty(c)?a.o[c]:void 0;else throw Error(c+" is not a valid API name.");}return d}};var kd,te;
function Hq(){var a=data.runtime||[],b=data.runtime_lines;kd=new id;Iq();Od=function(e,f,g){Jq(f);var h=new Ab;Za(f,function(u,t){var v=Nb(t);void 0===v&&void 0!==t&&Af(44);h.set(u,v)});kd.g.g.J=ge();var l={eh:ue(e),eventId:void 0!==g?g.id:void 0,Mb:void 0!==g?function(u){return g.La.Mb(u)}:void 0,Sb:function(){return e},log:function(){}};if(Sl()){var m=Tl(),
p=void 0,q=void 0;l.ia={Nb:{},mb:function(u,t,v){1===t&&(p=u);7===t&&(q=v);m(u,t,v)},Xd:uf()};l.log=function(u,t){if(p){var v=Array.prototype.slice.call(arguments,1);m(p,4,{level:u,source:q,message:v})}}}var r=ld(l,[e,h]);kd.g.g.J=void 0;r instanceof xa&&"return"===r.g&&(r=r.o);return Pb(r)};qd();for(var c=0;c<a.length;c++){var d=a[c];if(!Sa(d)||3>d.length){if(0===d.length)continue;break}b&&b[c]&&b[c].length&&de(d,b[c]);kd.Lc(d)}}
function Jq(a){var b=a.gtmOnSuccess,c=a.gtmOnFailure;Qa(b)&&(a.gtmOnSuccess=function(){M(b)});Qa(c)&&(a.gtmOnFailure=function(){M(c)})}function Iq(){var a=kd;N.SANDBOXED_JS_SEMAPHORE=N.SANDBOXED_JS_SEMAPHORE||0;rd(a,function(b,c,d){N.SANDBOXED_JS_SEMAPHORE++;try{return b.apply(c,d)}finally{N.SANDBOXED_JS_SEMAPHORE--}})}function Kq(a){void 0!==a&&Za(a,function(b,c){for(var d=0;d<c.length;d++){var e=c[d].replace(/^_*/,"");Ph[e]=Ph[e]||[];Ph[e].push(b)}})};var Lq="HA GF G UA AW DC".split(" "),Mq=!1,Nq={},Oq=!1;function Pq(a,b){var c={event:a};b&&(c.eventModel=G(b),b[J.jd]&&(c.eventCallback=b[J.jd]),b[J.qc]&&(c.eventTimeout=b[J.qc]));return c}function Qq(){return Mq}
var Tq={config:function(a){var b;return b},consent:function(a){function b(){Qq()&&
G(a[2],{subcommand:a[1]})}if(3===a.length){Af(39);var c=Qh(),d=a[1];"default"===d?(b(),Ig(a[2])):"update"===d&&(b(),Jg(a[2],c))}},event:function(a){var b=a[1];if(!(2>a.length)&&k(b)){var c;if(2<a.length){if(!Mb(a[2])&&void 0!=a[2]||3<a.length)return;c=a[2]}var d=Pq(b,c);return d}},get:function(a){},js:function(a){if(2==a.length&&a[1].getTime)return Oq=!0,Qq(),{event:"gtm.js","gtm.start":a[1].getTime()}},policy:function(a){if(3===a.length){var b=a[1],c=a[2],d=te.o;d.g[b]?d.g[b].push(c):d.g[b]=[c]}},set:function(a){var b;2==a.length&&Mb(a[1])?b=G(a[1]):3==a.length&&k(a[1])&&(b={},Mb(a[2])||Sa(a[2])?b[a[1]]=
G(a[2]):b[a[1]]=a[2]);if(b){b._clear=!0;return b}}},Uq={policy:!0};var Vq=function(a,b){var c=a.hide;if(c&&void 0!==c[b]&&c.end){c[b]=!1;var d=!0,e;for(e in c)if(c.hasOwnProperty(e)&&!0===c[e]){d=!1;break}d&&(c.end(),c.end=null)}},Xq=function(a){var b=Wq(),c=b&&b.hide;c&&c.end&&(c[a]=!0)};var nr=function(a){if(mr(a))return a;this.g=a};nr.prototype.xh=function(){return this.g};var mr=function(a){return!a||"object"!==Kb(a)||Mb(a)?!1:"getUntrustedUpdateValue"in a};nr.prototype.getUntrustedUpdateValue=nr.prototype.xh;var or=[],pr=!1,qr=!1,rr=!1,sr=function(a){return n["dataLayer"].push(a)},tr=function(a){var b=N["dataLayer"],c=b?b.subscribers:1,d=0;return function(){++d===c&&a()}};
function ur(a){var b=a._clear;Za(a,function(d,e){"_clear"!==d&&(b&&Zh(d,void 0),Zh(d,e))});Lh||(Lh=a["gtm.start"]);var c=a["gtm.uniqueEventId"];if(!a.event)return!1;c||(c=Qh(),a["gtm.uniqueEventId"]=c,Zh("gtm.uniqueEventId",c));return hm(a)}function vr(){var a=or[0];if(null==a||"object"!==typeof a)return!1;if(a.event)return!0;if($a(a)){var b=a[0];if("config"===b||"event"===b||"js"===b)return!0}return!1}
function wr(){for(var a=!1;!rr&&0<or.length;){var b=!1;if(b&&!qr&&vr()){var c={};or.unshift((c.event=
"gtm.init",c));qr=!0}var d=!1;if(d&&!pr&&vr()){var e={};or.unshift((e.event="gtm.init_consent",e));pr=!0}rr=!0;delete Th.eventModel;Vh();var f=or.shift();if(null!=f){var g=mr(f);
if(g){var h=f;f=mr(h)?h.getUntrustedUpdateValue():void 0;$h()}try{if(Qa(f))try{f.call(Xh)}catch(v){}else if(Sa(f)){var l=f;if(k(l[0])){var m=l[0].split("."),p=m.pop(),q=l.slice(1),r=Wh(m.join("."),2);if(void 0!==r&&null!==r)try{r[p].apply(r,q)}catch(v){}}}else{if($a(f)){a:{var u=f;if(u.length&&k(u[0])){var t=Tq[u[0]];if(t&&(!g||!Uq[u[0]])){f=t(u);break a}}f=void 0}if(!f){rr=!1;continue}}a=ur(f)||a}}finally{g&&Vh(!0)}}rr=!1}
return!a}function xr(){var a=wr();try{Vq(n["dataLayer"],pe.F)}catch(b){}return a}
var zr=function(){var a=Xf("dataLayer",[]),b=Xf("google_tag_manager",{});b=b["dataLayer"]=b["dataLayer"]||{};Xk(function(){b.gtmDom||(b.gtmDom=!0,a.push({event:"gtm.dom"}))});Pp(function(){b.gtmLoad||(b.gtmLoad=!0,a.push({event:"gtm.load"}))});b.subscribers=(b.subscribers||0)+1;var c=a.push;a.push=function(){var e;if(0<N.SANDBOXED_JS_SEMAPHORE){e=[];for(var f=0;f<arguments.length;f++)e[f]=new nr(arguments[f])}else e=[].slice.call(arguments,0);var g=c.apply(a,e);or.push.apply(or,e);if(300<
this.length)for(Af(4);300<this.length;)this.shift();var h="boolean"!==typeof g||g;return wr()&&h};var d=a.slice(0);or.push.apply(or,d);yr()&&M(xr)},yr=function(){var a=!0;return a};var Ar={};Ar.zc=new String("undefined");
var Br=function(a){this.g=function(b){for(var c=[],d=0;d<a.length;d++)c.push(a[d]===Ar.zc?b:a[d]);return c.join("")}};Br.prototype.toString=function(){return this.g("undefined")};Br.prototype.valueOf=Br.prototype.toString;Ar.Xg=Br;Ar.Bd={};Ar.lh=function(a){return new Br(a)};var Cr={};Ar.Vh=function(a,b){var c=Qh();Cr[c]=[a,b];return c};Ar.zf=function(a){var b=a?0:1;return function(c){var d=Cr[c];if(d&&"function"===typeof d[b])d[b]();Cr[c]=void 0}};Ar.Bh=function(a){for(var b=!1,c=!1,d=2;d<a.length;d++)b=
b||8===a[d],c=c||16===a[d];return b&&c};Ar.Sh=function(a){if(a===Ar.zc)return a;var b=Qh();Ar.Bd[b]=a;return'google_tag_manager["'+pe.F+'"].macro('+b+")"};Ar.Mh=function(a,b,c){a instanceof Ar.Xg&&(a=a.g(Ar.Vh(b,c)),b=Pa);return{yh:a,onSuccess:b}};var Dr=["input","select","textarea"],Er=["button","hidden","image","reset","submit"],Fr=function(a){var b=a.tagName.toLowerCase();return!Ua(Dr,function(c){return c===b})||"input"===b&&Ua(Er,function(c){return c===a.type.toLowerCase()})?!1:!0},Gr=function(a){return a.form?a.form.tagName?a.form:K.getElementById(a.form):jg(a,["form"],100)},Hr=function(a,b,c){if(!a.elements)return 0;for(var d=b.getAttribute(c),e=0,f=1;e<a.elements.length;e++){var g=a.elements[e];if(Fr(g)){if(g.getAttribute(c)===d)return f;
f++}}return 0};var Sr=n.clearTimeout,Tr=n.setTimeout,O=function(a,b,c){if(nk()){b&&M(b)}else return ag(a,b,c)},Ur=function(){return new Date},Vr=function(){return n.location.href},Wr=function(a){return fh(hh(a),"fragment")},Xr=function(a){return gh(hh(a))},Yr=function(a,b){return Wh(a,b||2)},Zr=function(a,b,c){var d;b?(a.eventCallback=b,c&&(a.eventTimeout=c),d=sr(a)):d=sr(a);return d},$r=function(a,b){n[a]=b},R=function(a,b,c){b&&
(void 0===n[a]||c&&!n[a])&&(n[a]=b);return n[a]},as=function(a,b,c){return ni(a,b,void 0===c?!0:!!c)},bs=function(a,b,c){return 0===wi(a,b,c)},cs=function(a,b){if(nk()){b&&M(b)}else cg(a,b)},ds=function(a){return!!Oo(a,"init",!1)},es=function(a){Mo(a,"init",!0)},fs=function(a,b){var c=(void 0===b?0:b)?"www.googletagmanager.com/gtag/js":Jh;c+="?id="+encodeURIComponent(a)+"&l=dataLayer";O(pk("https://","http://",c))},gs=function(a,
b,c){Nl&&(Rb(a)||Rl(c,b,a))};
var hs=Ar.Mh;function Es(a,b){a=String(a);b=String(b);var c=a.length-b.length;return 0<=c&&a.indexOf(b,c)==c}var Fs=new Xa;function Gs(a,b,c){var d=c?"i":void 0;try{var e=String(b)+d,f=Fs.get(e);f||(f=new RegExp(b,d),Fs.set(e,f));return f.test(a)}catch(g){return!1}}
function Hs(a,b){function c(g){var h=hh(g),l=fh(h,"protocol"),m=fh(h,"host",!0),p=fh(h,"port"),q=fh(h,"path").toLowerCase().replace(/\/$/,"");if(void 0===l||"http"==l&&"80"==p||"https"==l&&"443"==p)l="web",p="default";return[l,m,p,q]}for(var d=c(String(a)),e=c(String(b)),f=0;f<d.length;f++)if(d[f]!==e[f])return!1;return!0}
function Is(a){return Js(a)?1:0}
function Js(a){var b=a.arg0,c=a.arg1;if(a.any_of&&Sa(c)){for(var d=0;d<c.length;d++){var e=G(a,{});G({arg1:c[d],any_of:void 0},e);if(Is(e))return!0}return!1}switch(a["function"]){case "_cn":return 0<=String(b).indexOf(String(c));case "_css":var f;a:{if(b){var g=["matches","webkitMatchesSelector","mozMatchesSelector","msMatchesSelector","oMatchesSelector"];try{for(var h=0;h<g.length;h++)if(b[g[h]]){f=b[g[h]](c);break a}}catch(m){}}f=!1}return f;case "_ew":return Es(b,c);case "_eq":return String(b)==
String(c);case "_ge":return Number(b)>=Number(c);case "_gt":return Number(b)>Number(c);case "_lc":var l;l=String(b).split(",");return 0<=Ta(l,String(c));case "_le":return Number(b)<=Number(c);case "_lt":return Number(b)<Number(c);case "_re":return Gs(b,c,a.ignore_case);case "_sw":return 0==String(b).indexOf(String(c));case "_um":return Hs(b,c)}return!1};var Ks=encodeURI,W=encodeURIComponent,Ls=dg;var Ms=function(a,b){if(!a)return!1;var c=fh(hh(a),"host");if(!c)return!1;for(var d=0;b&&d<b.length;d++){var e=b[d]&&b[d].toLowerCase();if(e){var f=c.length-e.length;0<f&&"."!=e.charAt(0)&&(f--,e="."+e);if(0<=f&&c.indexOf(e,f)==f)return!0}}return!1};
var Ns=function(a,b,c){for(var d={},e=!1,f=0;a&&f<a.length;f++)a[f]&&a[f].hasOwnProperty(b)&&a[f].hasOwnProperty(c)&&(d[a[f][b]]=a[f][c],e=!0);return e?d:null};function su(){return n.gaGlobal=n.gaGlobal||{}}var tu=function(){var a=su();a.hid=a.hid||Wa();return a.hid},uu=function(a,b){var c=su();if(void 0==c.vid||b&&!c.from_cookie)c.vid=a,c.from_cookie=b};var ev=window,fv=document,gv=function(a){var b=ev._gaUserPrefs;if(b&&b.ioo&&b.ioo()||a&&!0===ev["ga-disable-"+a])return!0;try{var c=ev.external;if(c&&c._gaUserPrefs&&"oo"==c._gaUserPrefs)return!0}catch(f){}for(var d=ii("AMP_TOKEN",String(fv.cookie),!0),e=0;e<d.length;e++)if("$OPT_OUT"==d[e])return!0;return fv.getElementById("__gaOptOutExtension")?!0:!1};var hv={};function jv(a){delete a.eventModel[J.Fb];lv(a.eventModel)}var lv=function(a){Za(a,function(c){"_"===c.charAt(0)&&delete a[c]});var b=a[J.xa]||{};Za(b,function(c){"_"===c.charAt(0)&&delete b[c]})};var ov=function(a,b,c){wo(b,c,a)},pv=function(a,b,c){wo(b,c,a,!0)},vv=function(a,b){};
function qv(a,b){}var Y={h:{}};
Y.h.gaawc=["google"],function(){function a(b,c,d){for(var e=0;e<c.length;e++)b.hasOwnProperty(c[e])&&(b[c[e]]=d(b[c[e]]))}(function(b){Y.__gaawc=b;Y.__gaawc.i="gaawc";Y.__gaawc.m=!0;Y.__gaawc.priorityOverride=10})(function(b){var c=String(b.vtp_measurementId),d=Ns(b.vtp_fieldsToSet,"name","value")||{};if(d.hasOwnProperty(J.xa)||b.vtp_userProperties){var e=d[J.xa]||{};G(Ns(b.vtp_userProperties,"name","value"),e);d[J.xa]=e}a(d,J.$e,function(f){return eb(f)});a(d,J.bf,function(f){return Number(f)});
d.send_page_view=b.vtp_sendPageView;xo(d,c);M(b.vtp_gtmOnSuccess)})}();
Y.h.send_pixel=["google"],function(){function a(b,c){return{url:c}}(function(b){Y.__send_pixel=b;Y.__send_pixel.i="send_pixel";Y.__send_pixel.m=!0;Y.__send_pixel.priorityOverride=0})(function(b){var c=b.vtp_allowedUrls||"specific",d=b.vtp_urls||[],e=b.vtp_createPermissionError;return{assert:function(f,g){if(!k(g))throw e(f,{},"URL must be a string.");try{if("any"===c&&Se(hh(g))||"specific"===c&&Te(hh(g),d))return}catch(h){throw e(f,{},"Invalid URL filter.");}throw e(f,{},"Prohibited URL: "+g+".");
},O:a}})}();

Y.h.jsm=["customScripts"],function(){(function(a){Y.__jsm=a;Y.__jsm.i="jsm";Y.__jsm.m=!0;Y.__jsm.priorityOverride=0})(function(a){if(void 0!==a.vtp_javascript){var b=a.vtp_javascript;try{var c=R("google_tag_manager");var d=c&&c.e&&c.e(b);gs(d,"jsm",a.vtp_gtmEventId);return d}catch(e){}}})}();
Y.h.sp=["google"],function(){(function(a){Y.__sp=a;Y.__sp.i="sp";Y.__sp.m=!0;Y.__sp.priorityOverride=0})(function(a){var b=-1==navigator.userAgent.toLowerCase().indexOf("firefox")?"//www.googleadservices.com/pagead/conversion_async.js":"https://www.google.com/pagead/conversion_async.js",c=a.vtp_gtmOnFailure,d=function(){var g=R("google_trackConversion");if(Qa(g)){var h={};"DATA_LAYER"==a.vtp_customParamsFormat?h=a.vtp_dataLayerVariable:"USER_SPECIFIED"==a.vtp_customParamsFormat&&(h=Ns(a.vtp_customParams,
"key","value"));var l={google_conversion_id:a.vtp_conversionId,google_conversion_label:a.vtp_conversionLabel,google_custom_params:h,google_remarketing_only:!0,onload_callback:a.vtp_gtmOnSuccess,google_gtm:zm()};a.vtp_enableDynamicRemarketing&&(a.vtp_eventName&&(h.event=a.vtp_eventName),a.vtp_eventValue&&(l.google_conversion_value=a.vtp_eventValue),a.vtp_eventItems&&(l.google_gtag_event_data={items:a.vtp_eventItems}));var m=function(p,q){(l.google_additional_params=l.google_additional_params||{})[p]=
q};a.vtp_rdp&&(l.google_restricted_data_processing=!0);a.vtp_userId&&(l.google_user_id=a.vtp_userId);m("gdpr_consent",cn()),m("gdpr",dn());g(l)||c()}else c()},e=function(){O(b,d,c)},f=!1;Bg()&&!f?Ng(function(){Kg(J.C)?e():Fg(e,J.C)},[J.C]):(dl(),e())})}();
Y.h.c=["google"],function(){(function(a){Y.__c=a;Y.__c.i="c";Y.__c.m=!0;Y.__c.priorityOverride=0})(function(a){gs(a.vtp_value,"c",a.vtp_gtmEventId);return a.vtp_value})}();
Y.h.e=["google"],function(){(function(a){Y.__e=a;Y.__e.i="e";Y.__e.m=!0;Y.__e.priorityOverride=0})(function(a){return String(bi(a.vtp_gtmEventId,"event"))})}();
Y.h.f=["google"],function(){(function(a){Y.__f=a;Y.__f.i="f";Y.__f.m=!0;Y.__f.priorityOverride=0})(function(a){var b=Yr("gtm.referrer",1)||K.referrer;return b?a.vtp_component&&"URL"!=a.vtp_component?fh(hh(String(b)),a.vtp_component,a.vtp_stripWww,a.vtp_defaultPages,a.vtp_queryKey):Xr(String(b)):String(b)})}();Y.h.k=["google"],function(){(function(a){Y.__k=a;Y.__k.i="k";Y.__k.m=!0;Y.__k.priorityOverride=0})(function(a){return as(a.vtp_name,Yr("gtm.cookie",1),!!a.vtp_decodeCookie)[0]})}();

Y.h.access_globals=["google"],function(){function a(b,c,d){var e={key:d,read:!1,write:!1,execute:!1};switch(c){case "read":e.read=!0;break;case "write":e.write=!0;break;case "readwrite":e.read=e.write=!0;break;case "execute":e.execute=!0;break;default:throw Error("Invalid access_globals request "+c);}return e}(function(b){Y.__access_globals=b;Y.__access_globals.i="access_globals";Y.__access_globals.m=!0;Y.__access_globals.priorityOverride=0})(function(b){for(var c=b.vtp_keys||[],d=b.vtp_createPermissionError,
e=[],f=[],g=[],h=0;h<c.length;h++){var l=c[h],m=l.key;l.read&&e.push(m);l.write&&f.push(m);l.execute&&g.push(m)}return{assert:function(p,q,r){if(!k(r))throw d(p,{},"Key must be a string.");if("read"===q){if(-1<Ta(e,r))return}else if("write"===q){if(-1<Ta(f,r))return}else if("readwrite"===q){if(-1<Ta(f,r)&&-1<Ta(e,r))return}else if("execute"===q){if(-1<Ta(g,r))return}else throw d(p,{},"Operation must be either 'read', 'write', or 'execute', was "+q);throw d(p,{},"Prohibited "+q+" on global variable: "+
r+".");},O:a}})}();
Y.h.u=["google"],function(){var a=function(b){return{toString:function(){return b}}};(function(b){Y.__u=b;Y.__u.i="u";Y.__u.m=!0;Y.__u.priorityOverride=0})(function(b){var c;c=(c=b.vtp_customUrlSource?b.vtp_customUrlSource:Yr("gtm.url",1))||Vr();var d=b[a("vtp_component")];if(!d||"URL"==d)return Xr(String(c));var e=hh(String(c)),f;if("QUERY"===d)a:{var g=b[a("vtp_multiQueryKeys").toString()],h=b[a("vtp_queryKey").toString()]||"",l=b[a("vtp_ignoreEmptyQueryParam").toString()],m;g?Sa(h)?m=h:m=String(h).replace(/\s+/g,
"").split(","):m=[String(h)];for(var p=0;p<m.length;p++){var q=fh(e,"QUERY",void 0,void 0,m[p]);if(void 0!=q&&(!l||""!==q)){f=q;break a}}f=void 0}else f=fh(e,d,"HOST"==d?b[a("vtp_stripWww")]:void 0,"PATH"==d?b[a("vtp_defaultPages")]:void 0,void 0);return f})}();
Y.h.v=["google"],function(){(function(a){Y.__v=a;Y.__v.i="v";Y.__v.m=!0;Y.__v.priorityOverride=0})(function(a){var b=a.vtp_name;if(!b||!b.replace)return!1;var c=Yr(b.replace(/\\\./g,"."),a.vtp_dataLayerVersion||1),d=void 0!==c?c:a.vtp_defaultValue;gs(d,"v",a.vtp_gtmEventId);return d})}();
Y.h.ua=["google"],function(){function a(q){return Kg(q)}function b(q,r){var u=!1;if(Bg()&&!u&&!e[q]){var t=function(){var v=il(),x="gtm"+Qh(),A=m(r),w={name:x};l(A,w,!0);v("create",q,w);v(function(){v.remove(x)})};Fg(t,J.K);Fg(t,J.C);e[q]=!0}}var c,d={},e={},f={name:!0,clientId:!0,sampleRate:!0,siteSpeedSampleRate:!0,alwaysSendReferrer:!0,allowAnchor:!0,
allowLinker:!0,cookieName:!0,cookieDomain:!0,cookieExpires:!0,cookiePath:!0,cookieUpdate:!0,cookieFlags:!0,legacyCookieDomain:!0,legacyHistoryImport:!0,storage:!0,useAmpClientId:!0,storeGac:!0,_cd2l:!0,_useUp:!0,_cs:!0},g={allowAnchor:!0,allowLinker:!0,alwaysSendReferrer:!0,anonymizeIp:!0,cookieUpdate:!0,exFatal:!0,forceSSL:!0,javaEnabled:!0,legacyHistoryImport:!0,nonInteraction:!0,useAmpClientId:!0,useBeacon:!0,storeGac:!0,allowAdFeatures:!0,allowAdPersonalizationSignals:!0,_cd2l:!0},h={urlPassthrough:!0},
l=function(q,r,u){var t=0;if(q)for(var v in q)if(!h[v]&&q.hasOwnProperty(v)&&(u&&f[v]||!u&&void 0===f[v])){var x=g[v]?eb(q[v]):q[v];"anonymizeIp"!=v||x||(x=void 0);r[v]=x;t++}return t},m=function(q){var r={};q.vtp_gaSettings&&G(Ns(q.vtp_gaSettings.vtp_fieldsToSet,"fieldName","value"),r);G(Ns(q.vtp_fieldsToSet,"fieldName","value"),r);Kg(J.K)||(r.storage="none");Kg(J.C)||(r.allowAdFeatures=!1,r.storeGac=!1);Un()||(r.allowAdFeatures=!1);Tn()||(r.allowAdPersonalizationSignals=!1);q.vtp_transportUrl&&
(r._x_19=q.vtp_transportUrl);if(eb(r.urlPassthrough)){r._useUp=!0;var u=!1;Bg()&&!u&&(r._cs=a)}return r},
p=function(q){function r(pa,ba){void 0!==ba&&E("set",pa,ba)}var u={},t={},v={},x={};if(q.vtp_gaSettings){var A=q.vtp_gaSettings;G(Ns(A.vtp_contentGroup,"index","group"),t);G(Ns(A.vtp_dimension,"index","dimension"),v);G(Ns(A.vtp_metric,"index","metric"),x);var w=G(A);w.vtp_fieldsToSet=void 0;w.vtp_contentGroup=void 0;w.vtp_dimension=void 0;w.vtp_metric=void 0;q=G(q,w)}G(Ns(q.vtp_contentGroup,"index","group"),t);G(Ns(q.vtp_dimension,"index","dimension"),v);G(Ns(q.vtp_metric,"index","metric"),x);var y=
m(q),B=kl(q.vtp_functionName);if(Qa(B)){var C="",D="";q.vtp_setTrackerName&&"string"==typeof q.vtp_trackerName?""!==q.vtp_trackerName&&(D=q.vtp_trackerName,C=D+"."):(D="gtm"+Qh(),C=D+".");var E=function(pa){var ba=[].slice.call(arguments,0);ba[0]=C+ba[0];B.apply(window,ba)},I=function(pa,ba){return void 0===ba?ba:pa(ba)},P=function(pa,ba){if(ba)for(var Db in ba)ba.hasOwnProperty(Db)&&E("set",pa+Db,ba[Db])},Q=function(){var pa=
{transaction_id:"id",affiliation:"affiliation",value:"revenue",tax:"tax",shipping:"shipping",coupon:"coupon",item_list_name:"list"},ba={},Db=(ba[J.dd]="click",ba[J.Ea]="detail",ba[J.$a]="add",ba[J.ab]="remove",ba[J.Qa]="checkout",ba[J.sa]="purchase",ba[J.cb]="refund",ba),fc={item_id:"id",item_name:"name",item_list_name:"list",item_brand:"brand",item_category:"category",item_variant:"variant",index:"position",promotion_id:"id",promotion_name:"name",creative_name:"creative",creative_slot:"position"},
gc=function(cb,ob){for(var db in cb)pa.hasOwnProperty(db)&&(cb[ob]=cb[ob]||{},cb[ob].actionField=cb[ob].actionField||{},cb[ob].actionField[pa[db]]=cb[db])},Eb=function(cb){for(var ob=[],db={},pb=0;pb<cb.length;db={tb:db.tb},pb++)db.tb={},Za(cb[pb],function(Tb){return function(Nc,rg){fc.hasOwnProperty(Nc)?Tb.tb[fc[Nc]]=rg:Tb.tb[Nc]=rg}}(db)),ob.push(db.tb);return ob},bb=function(cb,ob,db){if(!Mb(ob))return!1;for(var pb=ib(Object(ob),db,[]),Tb=0;pb&&Tb<pb.length;Tb++)E(cb,pb[Tb]);return!!pb&&0<pb.length},
U;if(q.vtp_useEcommerceDataLayer){var ub=!1;q.vtp_useGA4SchemaForEcommerce&&(U=bi(q.vtp_gtmEventId,"eventModel"),ub=!!U);ub||(U=Yr("ecommerce",1))}else q.vtp_ecommerceMacroData&&(U=q.vtp_ecommerceMacroData.ecommerce,!U&&q.vtp_useGA4SchemaForEcommerce&&(U=q.vtp_ecommerceMacroData));if(!Mb(U))return;U=Object(U);if(q.vtp_useGA4SchemaForEcommerce){U=
G(U);U.currencyCode=U.currencyCode||U.currency;var Fb=String(bi(q.vtp_gtmEventId,"event"));if("view_item_list"===Fb&&!U.impressions&&U.items)U.impressions=Eb(U.items);else if("view_promotion"===Fb&&!U.promoView&&U.items)U.promoView={},U.promoView.promotions=Eb(U.items);else if("select_promotion"===Fb&&!U.promoClick)U.items&&(U.promoClick={},U.promoClick.promotions=Eb(U.items)),gc(U,"promoClick");else if(Db.hasOwnProperty(Fb)){var zc=Db[Fb];U[zc]||(U.items&&(U[zc]={},U[zc].products=Eb(U.items)),gc(U,
zc))}}var Re=ib(y,"currencyCode",U.currencyCode);void 0!==Re&&E("set","&cu",Re);bb("ec:addImpression",U,"impressions");if(bb("ec:addPromo",U[U.promoClick?"promoClick":"promoView"],"promotions")&&U.promoClick){E("ec:setAction","promo_click",U.promoClick.actionField);return}for(var nd="detail checkout checkout_option click add remove purchase refund".split(" "),qg="refund purchase remove checkout checkout_option add click detail".split(" "),Mc=0;Mc<nd.length;Mc++){var od=U[nd[Mc]];if(od){bb("ec:addProduct",
od,"products");E("ec:setAction",nd[Mc],od.actionField);if(Nl)for(var pd=0;pd<qg.length;pd++){var Ac=U[qg[pd]];if(Ac){Ac!==od&&Af(13);break}}break}}},T={name:D};l(y,T,!0);var va=q.vtp_trackingId||u.trackingId;B("create",va,T);E("set","&gtm",zm(!0));var V=!1;Bg()&&!V&&(E("set","&gcs",Lg()),b(va,q));y._x_19&&(null==Wf&&delete y._x_19,y._x_20&&!d[D]&&(d[D]=!0,B(pl(D,String(y._x_20)))));q.vtp_enableRecaptcha&&E("require","recaptcha","recaptcha.js");(function(pa,ba){void 0!==q[ba]&&E("set",pa,q[ba])})("nonInteraction","vtp_nonInteraction");P("contentGroup",t);P("dimension",v);P("metric",x);var L={};l(y,L,!1)&&E("set",L);var X;q.vtp_enableLinkId&&E("require","linkid","linkid.js");E("set","hitCallback",function(){var pa=y&&y.hitCallback;Qa(pa)&&pa();q.vtp_gtmOnSuccess()});var Z=function(pa,ba){return void 0===q[pa]?u[ba]:q[pa]};if("TRACK_EVENT"==q.vtp_trackType){q.vtp_enableEcommerce&&(E("require","ec","ec.js"),Q());var wa={hitType:"event",eventCategory:String(Z("vtp_eventCategory",
"category")),eventAction:String(Z("vtp_eventAction","action")),eventLabel:I(String,Z("vtp_eventLabel","label")),eventValue:I(ab,Z("vtp_eventValue","value"))};l(X,wa,!1);E("send",wa);}else if("TRACK_SOCIAL"==q.vtp_trackType){}else if("TRACK_TRANSACTION"==q.vtp_trackType){}else if("TRACK_TIMING"==q.vtp_trackType){var ua={hitType:"timing",timingCategory:String(Z("vtp_timingCategory","category")),timingVar:String(Z("vtp_timingVar","name")),timingValue:ab(Z("vtp_timingValue",
"value")),timingLabel:I(String,Z("vtp_timingLabel","label"))};l(X,ua,!1);E("send",ua);}else if("DECORATE_LINK"==q.vtp_trackType){}else if("DECORATE_FORM"==
q.vtp_trackType){}else if("TRACK_DATA"==q.vtp_trackType){}else{q.vtp_enableEcommerce&&(E("require","ec","ec.js"),Q());if(q.vtp_doubleClick||"DISPLAY_FEATURES"==q.vtp_advertisingFeaturesType){var Va="_dc_gtm_"+String(q.vtp_trackingId).replace(/[^A-Za-z0-9-]/g,"");E("require","displayfeatures",void 0,{cookieName:Va})}if("DISPLAY_FEATURES_WITH_REMARKETING_LISTS"==q.vtp_advertisingFeaturesType){var lb="_dc_gtm_"+String(q.vtp_trackingId).replace(/[^A-Za-z0-9-]/g,"");E("require","adfeatures",
{cookieName:lb})}X?E("send","pageview",X):E("send","pageview");q.vtp_autoLinkDomains&&ll(C,q.vtp_autoLinkDomains,!!q.vtp_useHashAutoLink,!!q.vtp_decorateFormsAutoLink);eb(y.urlPassthrough)&&ml(C)}if(!c){var sb=q.vtp_useDebugVersion?"u/analytics_debug.js":"analytics.js";q.vtp_useInternalVersion&&!q.vtp_useDebugVersion&&(sb="internal/"+sb);c=!0;var Ob=jm(y._x_19,"/analytics.js"),
mb=pk("https:","http:","//www.google-analytics.com/"+sb,y&&!!y.forceSSL);O("analytics.js"===sb&&Ob?Ob:mb,function(){var pa=il();pa&&pa.loaded||q.vtp_gtmOnFailure();},q.vtp_gtmOnFailure)}}else M(q.vtp_gtmOnFailure)};(function(q){Y.__ua=q;Y.__ua.i="ua";Y.__ua.m=!0;Y.__ua.priorityOverride=0})(function(q){Ng(function(){p(q)},[J.K,J.C])})}();


Y.h.inject_script=["google"],function(){function a(b,c){return{url:c}}(function(b){Y.__inject_script=b;Y.__inject_script.i="inject_script";Y.__inject_script.m=!0;Y.__inject_script.priorityOverride=0})(function(b){var c=b.vtp_urls||[],d=b.vtp_createPermissionError;return{assert:function(e,f){if(!k(f))throw d(e,{},"Script URL must be a string.");try{if(Te(hh(f),c))return}catch(g){throw d(e,{},"Invalid script URL filter.");}throw d(e,{},"Prohibited script URL: "+f);},O:a}})}();


Y.h.opt=["google"],function(){var a;(function(b){Y.__opt=b;Y.__opt.i="opt";Y.__opt.m=!0;Y.__opt.priorityOverride=0})(function(b){var c={};if(b.vtp_gaSettings){var d=b.vtp_gaSettings;G(Ns(d.vtp_fieldsToSet,"fieldName","value"),c);b.vtp_gaSettings=null;d.vtp_fieldsToSet=void 0;var e=G(d);b=G(b,e)||{}}G(Ns(b.vtp_fieldsToSet,"fieldName","value"),c);var f=kl(b.vtp_functionName);if(Qa(f)){f.r=!0;var g="",h="";b.vtp_setTrackerName&&
"string"===typeof b.vtp_trackerName?""!==b.vtp_trackerName&&(h=b.vtp_trackerName,g=h+"."):(h="gtm"+Qh(),g=h+".");var l={name:!0,clientId:!0,sampleRate:!0,siteSpeedSampleRate:!0,alwaysSendReferrer:!0,allowAnchor:!0,allowLinker:!0,cookieName:!0,cookieDomain:!0,cookieExpires:!0,cookiePath:!0,cookieUpdate:!0,legacyCookieDomain:!0,legacyHistoryImport:!0,storage:!0,useAmpClientId:!0,storeGac:!0},m={allowAnchor:!0,allowLinker:!0,alwaysSendReferrer:!0,anonymizeIp:!0,cookieUpdate:!0,exFatal:!0,forceSSL:!0,
javaEnabled:!0,legacyHistoryImport:!0,nonInteraction:!0,useAmpClientId:!0,useBeacon:!0,storeGac:!0},p=function(x,A,w){var y=0,B;for(B in x)if(x.hasOwnProperty(B)&&(w&&l[B]||!w&&void 0===l[B])){var C=m[B]?eb(x[B]):x[B];"anonymizeIp"!==B||C||(C=void 0);A[B]=C;y++}return y},q={name:h};p(c,q,!0);var r={"&gtm":zm(!0)};p(c,r,!1);var u=encodeURI(pk("https:","http:","//www.google-analytics.com/"+(b.vtp_useDebugVersion?"u/analytics_debug.js":"analytics.js"),!!c.forceSSL));f("create",b.vtp_trackingId,q);f(g+
"set",r);f(g+"require",b.vtp_optimizeContainerId,{dataLayer:"dataLayer"});f(b.vtp_gtmOnSuccess);f(g+"require","render");a||(a=!0,O(u,function(){return il().loaded||b.vtp_gtmOnFailure()},b.vtp_gtmOnFailure));var t=R("dataLayer"),v=t&&t.hide;v&&(v.end||!0===v["GTM-KZM6MXH"])&&(v[b.vtp_optimizeContainerId]=!0)}else M(b.vtp_gtmOnFailure)})}();


Y.h.gclidw=["google"],function(){var a=["aw","dc","gf","ha","gb"],b=!1;(function(c){Y.__gclidw=c;Y.__gclidw.i="gclidw";Y.__gclidw.m=!0;Y.__gclidw.priorityOverride=100})(function(c){M(c.vtp_gtmOnSuccess);var d,e,f,g;c.vtp_enableCookieOverrides&&(f=c.vtp_cookiePrefix,d=c.vtp_path,e=c.vtp_domain,c.vtp_enableCookieFlagsFeature&&(g=c.vtp_cookieFlags));var h=null;c.vtp_enableCookieUpdateFeature&&(h=
!0,void 0!==c.vtp_cookieUpdate&&(h=!!c.vtp_cookieUpdate));var l={prefix:f,path:d,domain:e,flags:g};c.vtp_enableCrossDomainFeature&&(c.vtp_enableCrossDomain&&!1===c.vtp_acceptIncoming||(c.vtp_enableCrossDomain||tj())&&Pj(a,l));Mj(l);Sj(["aw","dc"],l);b?fk(h,l):gk(h,l);var m=f;if(c.vtp_enableCrossDomainFeature&&c.vtp_enableCrossDomain&&c.vtp_linkerDomains){var p=c.vtp_linkerDomains.toString().replace(/\s+/g,"").split(",");Rj(a,p,c.vtp_urlPosition,!!c.vtp_formDecoration,m)}var q=Yr(J.R);hn({Id:!1,oa:void 0!=
q&&!1!==q,Ic:l,Pc:!0});c.vtp_enableUrlPassthroughFeature&&c.vtp_enableUrlPassthrough&&Uj()});}();


Y.h.aev=["google"],function(){function a(u,t){var v=bi(u,"gtm");if(v)return v[t]}function b(u,t,v,x){x||(x="element");var A=u+"."+t,w;if(p.hasOwnProperty(A))w=p[A];else{var y=a(u,x);if(y&&(w=v(y),p[A]=w,q.push(A),35<q.length)){var B=q.shift();delete p[B]}}return w}function c(u,t,v){var x=a(u,r[t]);return void 0!==x?x:v}function d(u,t){if(!u)return!1;var v=e(Vr());Sa(t)||(t=String(t||"").replace(/\s+/g,"").split(","));for(var x=[v],A=0;A<t.length;A++){var w=t[A];if(w.hasOwnProperty("is_regex"))if(w.is_regex)try{w=
new RegExp(w.domain)}catch(B){continue}else w=w.domain;if(w instanceof RegExp){if(w.test(u))return!1}else{var y=w;if(0!=y.length){if(0<=e(u).indexOf(y))return!1;x.push(e(y))}}}return!Ms(u,x)}function e(u){m.test(u)||(u="http://"+u);return fh(hh(u),"HOST",!0)}function f(u,t,v){switch(u){case "SUBMIT_TEXT":return b(t,"FORM."+u,g,"formSubmitElement")||v;case "LENGTH":var x=b(t,"FORM."+u,h);return void 0===x?v:x;case "INTERACTED_FIELD_ID":return l(t,"id",v);case "INTERACTED_FIELD_NAME":return l(t,"name",
v);case "INTERACTED_FIELD_TYPE":return l(t,"type",v);case "INTERACTED_FIELD_POSITION":var A=a(t,"interactedFormFieldPosition");return void 0===A?v:A;case "INTERACT_SEQUENCE_NUMBER":var w=a(t,"interactSequenceNumber");return void 0===w?v:w;default:return v}}function g(u){switch(u.tagName.toLowerCase()){case "input":return gg(u,"value");case "button":return hg(u);default:return null}}function h(u){if("form"===u.tagName.toLowerCase()&&u.elements){for(var t=0,v=0;v<u.elements.length;v++)Fr(u.elements[v])&&
t++;return t}}function l(u,t,v){var x=a(u,"interactedFormField");return x&&gg(x,t)||v}var m=/^https?:\/\//i,p={},q=[],r={ATTRIBUTE:"elementAttribute",CLASSES:"elementClasses",ELEMENT:"element",ID:"elementId",HISTORY_CHANGE_SOURCE:"historyChangeSource",HISTORY_NEW_STATE:"newHistoryState",HISTORY_NEW_URL_FRAGMENT:"newUrlFragment",HISTORY_OLD_STATE:"oldHistoryState",HISTORY_OLD_URL_FRAGMENT:"oldUrlFragment",TARGET:"elementTarget"};(function(u){Y.__aev=u;Y.__aev.i="aev";Y.__aev.m=!0;Y.__aev.priorityOverride=
0})(function(u){var t=u.vtp_gtmEventId,v=u.vtp_defaultValue,x=u.vtp_varType;switch(x){case "TAG_NAME":var A=a(t,"element");return A&&A.tagName||v;case "TEXT":return b(t,x,hg)||v;case "URL":var w;a:{var y=String(a(t,"elementUrl")||v||""),B=hh(y),C=String(u.vtp_component||"URL");switch(C){case "URL":w=y;break a;case "IS_OUTBOUND":w=d(y,u.vtp_affiliatedDomains);break a;default:w=fh(B,C,u.vtp_stripWww,u.vtp_defaultPages,u.vtp_queryKey)}}return w;case "ATTRIBUTE":var D;if(void 0===u.vtp_attribute)D=c(t,
x,v);else{var E=u.vtp_attribute,I=a(t,"element");D=I&&gg(I,E)||v||""}return D;case "MD":var P=u.vtp_mdValue,Q=b(t,"MD",Or);return P&&Q?Rr(Q,P)||v:Q||v;case "FORM":return f(String(u.vtp_component||"SUBMIT_TEXT"),t,v);default:var T=c(t,x,v);gs(T,"aev",u.vtp_gtmEventId);return T}})}();Y.h.gas=["google"],function(){(function(a){Y.__gas=a;Y.__gas.i="gas";Y.__gas.m=!0;Y.__gas.priorityOverride=0})(function(a){var b=G(a),c=b;c[sd.Ta]=null;c[sd.Og]=null;var d=b=c;d.vtp_fieldsToSet=d.vtp_fieldsToSet||[];var e=d.vtp_cookieDomain;void 0!==e&&(d.vtp_fieldsToSet.push({fieldName:"cookieDomain",value:e}),delete d.vtp_cookieDomain);return b})}();
Y.h.hl=["google"],function(){function a(f){return f.target&&f.target.location&&f.target.location.href?f.target.location.href:Vr()}function b(f,g){eg(f,"hashchange",function(h){var l=a(h);g({source:"hashchange",state:null,url:Xr(l),L:Wr(l)})})}function c(f,g){eg(f,"popstate",function(h){var l=a(h);g({source:"popstate",state:h.state,url:Xr(l),L:Wr(l)})})}function d(f,g,h){var l=g.history,m=l[f];if(Qa(m))try{l[f]=function(p,q,r){m.apply(l,[].slice.call(arguments,0));h({source:f,state:p,url:Xr(Vr()),
L:Wr(Vr())})}}catch(p){}}function e(){var f={source:null,state:R("history").state||null,url:Xr(Vr()),L:Wr(Vr())};return function(g){var h=f,l={};l[h.source]=!0;l[g.source]=!0;if(!l.popstate||!l.hashchange||h.L!=g.L){var m={event:"gtm.historyChange","gtm.historyChangeSource":g.source,"gtm.oldUrlFragment":f.L,"gtm.newUrlFragment":g.L,"gtm.oldHistoryState":f.state,"gtm.newHistoryState":g.state,"gtm.oldUrl":f.url,"gtm.newUrl":g.url};f=g;Zr(m)}}}(function(f){Y.__hl=f;Y.__hl.i="hl";Y.__hl.m=!0;Y.__hl.priorityOverride=
0})(function(f){var g=R("self");if(!ds("hl")){var h=e();b(g,h);c(g,h);d("pushState",g,h);d("replaceState",g,h);es("hl")}M(f.vtp_gtmOnSuccess)})}();
Y.h.awct=["google"],function(){var a=!1,b=[],c=function(g){var h=R("google_trackConversion"),l=g.gtm_onFailure;"function"==typeof h?h(g)||l():l()},d=function(){for(;0<b.length;)c(b.shift())},e=function(){return function(){d();a=!1}},f=function(){return function(){d();b={push:c};}};(function(g){Y.__awct=g;Y.__awct.i="awct";Y.__awct.m=!0;Y.__awct.priorityOverride=
0})(function(g){function h(C,D,E){return"DATA_LAYER"===C?Yr(E):g[D]}function l(){v("gdpr_consent",cn()),v("gdpr",dn());}function m(){var C=[];return C}function p(C){var D=!0,E=[];if(C){E=m();}D&&b.push(r)}function q(){Cg()&&v("gcd","G1"+Gg(zg));}dl();var r={google_basket_transaction_type:"purchase",google_conversion_domain:"",google_conversion_id:g.vtp_conversionId,google_conversion_label:g.vtp_conversionLabel,
google_conversion_value:g.vtp_conversionValue||0,google_remarketing_only:!1,onload_callback:g.vtp_gtmOnSuccess,gtm_onFailure:g.vtp_gtmOnFailure,google_gtm:zm()};r.google_gtm_experiments={capi:!0};g.vtp_rdp&&(r.google_restricted_data_processing=!0);void 0!=Yr(J.R)&&!1!==Yr(J.R)&&(r.google_gtm_url_processor=function(C){return C=Dk(C)});var u=function(C){return function(D,E,I){var P=h(C,E,I);P&&(r[D]=P)}},
t=u("JSON");t("google_conversion_currency","vtp_currencyCode");t("google_conversion_order_id","vtp_orderId");g.vtp_enableProductReporting&&(t=u(g.vtp_productReportingDataSource),t("google_conversion_merchant_id","vtp_awMerchantId","aw_merchant_id"),t("google_basket_feed_country","vtp_awFeedCountry","aw_feed_country"),t("google_basket_feed_language","vtp_awFeedLanguage","aw_feed_language"),t("google_basket_discount","vtp_discount","discount"),t("google_conversion_items","vtp_items","items"),r.google_conversion_items&&
r.google_conversion_items.map&&(r.google_conversion_items=r.google_conversion_items.map(function(C){return{value:C.price,quantity:C.quantity,item_id:C.id}})));var v=function(C,D){void 0!==D&&((r.google_additional_conversion_params=r.google_additional_conversion_params||{})[C]=D)},x=function(C){return function(D,E,I,P){var Q=h(C,E,I);P(Q)&&v(D,Q)}};var A=Yr("developer_id"),w=vb(Mb(A)?A:{});w&&v("did",w);
(function(){if(!g.vtp_enableShippingData)return;v("delopc",g.vtp_deliveryPostalCode);v("oedeld",g.vtp_estimatedDeliveryDate);v("delc",g.vtp_deliveryCountry);v("shf",g.vtp_shippingFee);if(g.vtp_enableProductReporting){var C=h(g.vtp_productReportingDataSource,"vtp_items","items");v("iedeld",Fk(C))}})();g.vtp_transportUrl&&(r.google_transport_url=g.vtp_transportUrl);var y=jm(g.vtp_transportUrl,"/pagead/conversion_async.js");
y||(y=-1==navigator.userAgent.toLowerCase().indexOf("firefox")?"//www.googleadservices.com/pagead/conversion_async.js":"https://www.google.com/pagead/conversion_async.js");g.vtp_enableNewCustomerReporting&&(t=x(g.vtp_newCustomerReportingDataSource),t("vdnc","vtp_awNewCustomer","new_customer",function(C){return void 0!=C&&""!==C}),t("vdltv","vtp_awCustomerLTV","customer_lifetime_value",function(C){return void 0!=C&&""!==C}));var B=!g.hasOwnProperty("vtp_enableConversionLinker")||g.vtp_enableConversionLinker;
B?(g.vtp_conversionCookiePrefix&&(r.google_gcl_cookie_prefix=g.vtp_conversionCookiePrefix),r.google_read_gcl_cookie_opt_out=!1):r.google_read_gcl_cookie_opt_out=!0;"1"===mj(!1)._up&&v("gtm_up","1");l();(function(){var C=!1;!Bg()||C?p(!0):Ng(function(){l();var D=Kg(J.C),E=void 0!=Yr(J.R)&&!1!==Yr(J.R),I=!1;
I=!0;g.vtp_transportUrl||D||!E&&!I||(r.google_transport_url="https://pagead2.googlesyndication.com/");v("gcs",Lg());q();p(D);D||Fg(function(){l();r=G(r);!g.vtp_transportUrl&&r.google_transport_url&&delete r.google_transport_url;v("gcs",Lg());q();v("gcu","1");p(!0)},J.C)},[J.C])})();a||(a=!0,O(y,f(),e(y)))})}();
Y.h.baut=["nonGoogleScripts"],function(){var a=!1;(function(b){Y.__baut=b;Y.__baut.i="baut";Y.__baut.m=!0;Y.__baut.priorityOverride=0})(function(b){function c(){var h=R(d);if(Array.isArray(h)){var l;try{l=Bf(R("UET"),{ti:b.vtp_tagId,q:h,tm:"gtm001"})}catch(m){}l?(n[d]=l,l.push("pageLoad"),b.vtp_gtmOnSuccess()):M(b.vtp_gtmOnFailure)}else b.vtp_gtmOnSuccess()}var d=b.vtp_uetqName||"uetq",e=R(d,[],!0);if("VARIABLE_REVENUE"==b.vtp_eventType)e.push({gv:b.vtp_goalValue}),
b.vtp_gtmOnSuccess();else if("CUSTOM"==b.vtp_eventType){var f={},g=function(h,l){void 0!==b[h]&&(f[l]=b[h])};g("vtp_goalValue","gv");g("vtp_eventCategory","ec");g("vtp_eventAction","ea");g("vtp_eventLabel","el");g("vtp_eventValue","ev");e.push(f);b.vtp_gtmOnSuccess()}else if(Array.isArray(e))if(a)c();else try{O("https://bat.bing.com/bat.js",function(){a=!0;c()},b.vtp_gtmOnFailure)}catch(h){M(b.vtp_gtmOnFailure)}else b.vtp_gtmOnSuccess()})}();
Y.h.logging=["google"],function(){function a(){return{}}(function(b){Y.__logging=b;Y.__logging.i="logging";Y.__logging.m=!0;Y.__logging.priorityOverride=0})(function(b){var c=b.vtp_environments||"debug",d=b.vtp_createPermissionError;return{assert:function(e){var f;if(f="all"!==c&&!0){var g=!1;f=!g}if(f)throw d(e,{},"Logging is not enabled in all environments");},O:a}})}();
Y.h.fsl=[],function(){function a(){var e=R("document"),f=c(),g=HTMLFormElement.prototype.submit;eg(e,"click",function(h){var l=h.target;if(l&&(l=jg(l,["button","input"],100))&&("submit"==l.type||"image"==l.type)&&l.name&&gg(l,"value")){var m;l.form?l.form.tagName?m=l.form:m=K.getElementById(l.form):m=jg(l,["form"],100);m&&f.store(m,l)}},!1);eg(e,"submit",function(h){var l=h.target;if(!l)return h.returnValue;var m=h.defaultPrevented||!1===h.returnValue,p=b(l)&&!m,q=f.get(l),r=!0;if(d(l,function(){if(r){var u;
q&&(u=e.createElement("input"),u.type="hidden",u.name=q.name,u.value=q.value,l.appendChild(u));g.call(l);u&&l.removeChild(u)}},m,p,q))r=!1;else return m||(h.preventDefault&&h.preventDefault(),h.returnValue=!1),!1;return h.returnValue},!1);HTMLFormElement.prototype.submit=function(){var h=this,l=b(h),m=!0;d(h,function(){m&&g.call(h)},!1,l)&&(g.call(h),m=!1)}}function b(e){var f=e.target;return f&&"_self"!==f&&"_parent"!==f&&"_top"!==f?!1:!0}function c(){var e=[],f=function(g){return Ua(e,function(h){return h.form===
g})};return{store:function(g,h){var l=f(g);l?l.button=h:e.push({form:g,button:h})},get:function(g){var h=f(g);return h?h.button:null}}}function d(e,f,g,h,l){var m=Oo("fsl",g?"nv.mwt":"mwt",0),p;p=g?Oo("fsl","nv.ids",[]):Oo("fsl","ids",[]);if(!p.length)return!0;var q=Ko(e,"gtm.formSubmit",p),r=e.action;r&&r.tagName&&(r=e.cloneNode(!1).action);q["gtm.elementUrl"]=r;l&&(q["gtm.formSubmitElement"]=l);if(h&&m){if(!Zr(q,tr(f),m))return!1}else Zr(q,function(){},m||2E3);return!0}(function(e){Y.__fsl=e;Y.__fsl.i=
"fsl";Y.__fsl.m=!0;Y.__fsl.priorityOverride=0})(function(e){var f=e.vtp_waitForTags,g=e.vtp_checkValidation,h=Number(e.vtp_waitForTagsTimeout);if(!h||0>=h)h=2E3;var l=e.vtp_uniqueTriggerId||"0";if(f){var m=function(q){return Math.max(h,q)};No("fsl","mwt",m,0);g||No("fsl","nv.mwt",m,0)}var p=function(q){q.push(l);return q};No("fsl","ids",p,[]);g||No("fsl","nv.ids",p,[]);ds("fsl")||(a(),es("fsl"));M(e.vtp_gtmOnSuccess)})}();Y.h.smm=["google"],function(){(function(a){Y.__smm=a;Y.__smm.i="smm";Y.__smm.m=!0;Y.__smm.priorityOverride=0})(function(a){var b=a.vtp_input,c=Ns(a.vtp_map,"key","value")||{},d=c.hasOwnProperty(b)?c[b]:a.vtp_defaultValue;gs(d,"smm",a.vtp_gtmEventId);return d})}();





Y.h.html=["customScripts"],function(){function a(d,e,f,g){return function(){try{if(0<e.length){var h=e.shift(),l=a(d,e,f,g);if("SCRIPT"==String(h.nodeName).toUpperCase()&&"text/gtmscript"==h.type){var m=K.createElement("script");m.async=!1;m.type="text/javascript";m.id=h.id;m.text=h.text||h.textContent||h.innerHTML||"";h.charset&&(m.charset=h.charset);var p=h.getAttribute("data-gtmsrc");p&&(m.src=p,Zf(m,l));d.insertBefore(m,null);p||l()}else if(h.innerHTML&&0<=h.innerHTML.toLowerCase().indexOf("<script")){for(var q=
[];h.firstChild;)q.push(h.removeChild(h.firstChild));d.insertBefore(h,null);a(h,q,l,g)()}else d.insertBefore(h,null),l()}else f()}catch(r){M(g)}}}var c=function(d){if(K.body){var e=
d.vtp_gtmOnFailure,f=hs(d.vtp_html,d.vtp_gtmOnSuccess,e),g=f.yh,h=f.onSuccess;if(d.vtp_useIframe){}else d.vtp_supportDocumentWrite?b(g,h,e):a(K.body,ig(g),h,e)()}else Tr(function(){c(d)},
200)};Y.__html=c;Y.__html.i="html";Y.__html.m=!0;Y.__html.priorityOverride=0}();




Y.h.img=["customPixels"],function(){(function(a){Y.__img=a;Y.__img.i="img";Y.__img.m=!0;Y.__img.priorityOverride=0})(function(a){var b=ig('<a href="'+a.vtp_url+'"></a>')[0].href,c=a.vtp_cacheBusterQueryParam;if(a.vtp_useCacheBuster){c||(c="gtmcb");var d=b.charAt(b.length-1),e=0<=b.indexOf("?")?"?"==d||"&"==d?"":"&":"?";b+=e+c+"="+a.vtp_randomNumber}Ls(b,a.vtp_gtmOnSuccess,a.vtp_gtmOnFailure)})}();


Y.h.lcl=[],function(){function a(){var c=R("document"),d=0,e=function(f){var g=f.target;if(g&&3!==f.which&&!(f.If||f.timeStamp&&f.timeStamp===d)){d=f.timeStamp;g=jg(g,["a","area"],100);if(!g)return f.returnValue;var h=f.defaultPrevented||!1===f.returnValue,l=Oo("lcl",h?"nv.mwt":"mwt",0),m;m=h?Oo("lcl","nv.ids",[]):Oo("lcl","ids",[]);if(m.length){var p=Ko(g,"gtm.linkClick",m);if(b(f,g,c)&&!h&&l&&g.href){var q=!!Ua(String(lg(g,"rel")||"").split(" "),function(t){return"noreferrer"===t.toLowerCase()});
q&&Af(36);var r=R((lg(g,"target")||"_self").substring(1)),u=!0;if(Zr(p,tr(function(){var t;if(t=u&&r){var v;a:if(q){var x;try{x=new MouseEvent(f.type,{bubbles:!0})}catch(A){if(!c.createEvent){v=!1;break a}x=c.createEvent("MouseEvents");x.initEvent(f.type,!0,!0)}x.If=!0;f.target.dispatchEvent(x);v=!0}else v=!1;t=!v}t&&(r.location.href=lg(g,"href"))}),l))u=!1;else return f.preventDefault&&f.preventDefault(),f.returnValue=!1}else Zr(p,function(){},l||2E3);return!0}}};eg(c,"click",e,!1);eg(c,"auxclick",
e,!1)}function b(c,d,e){if(2===c.which||c.ctrlKey||c.shiftKey||c.altKey||c.metaKey)return!1;var f=lg(d,"href"),g=f.indexOf("#"),h=lg(d,"target");if(h&&"_self"!==h&&"_parent"!==h&&"_top"!==h||0===g)return!1;if(0<g){var l=Xr(f),m=Xr(e.location);return l!==m}return!0}(function(c){Y.__lcl=c;Y.__lcl.i="lcl";Y.__lcl.m=!0;Y.__lcl.priorityOverride=0})(function(c){var d=void 0===c.vtp_waitForTags?!0:c.vtp_waitForTags,e=void 0===c.vtp_checkValidation?!0:c.vtp_checkValidation,f=Number(c.vtp_waitForTagsTimeout);
if(!f||0>=f)f=2E3;var g=c.vtp_uniqueTriggerId||"0";if(d){var h=function(m){return Math.max(f,m)};No("lcl","mwt",h,0);e||No("lcl","nv.mwt",h,0)}var l=function(m){m.push(g);return m};No("lcl","ids",l,[]);e||No("lcl","nv.ids",l,[]);ds("lcl")||(a(),es("lcl"));M(c.vtp_gtmOnSuccess)})}();
Y.h.evl=["google"],function(){function a(){var f=Number(Yr("gtm.start"))||0;return Ur().getTime()-f}function b(f,g,h,l){function m(){if(!Tg(f.target)){g.has(d.Cc)||g.set(d.Cc,""+a());g.has(d.xd)||g.set(d.xd,""+a());var q=0;g.has(d.Ec)&&(q=Number(g.get(d.Ec)));q+=100;g.set(d.Ec,""+q);if(q>=h){var r=Ko(f.target,"gtm.elementVisibility",[g.g]),u=Vg(f.target);r["gtm.visibleRatio"]=Math.round(1E3*u)/10;r["gtm.visibleTime"]=h;r["gtm.visibleFirstTime"]=Number(g.get(d.xd));r["gtm.visibleLastTime"]=Number(g.get(d.Cc));
Zr(r);l()}}}if(!g.has(d.Jb)&&(0==h&&m(),!g.has(d.kb))){var p=R("self").setInterval(m,100);g.set(d.Jb,p)}}function c(f){f.has(d.Jb)&&(R("self").clearInterval(Number(f.get(d.Jb))),f.o(d.Jb))}var d={Jb:"polling-id-",xd:"first-on-screen-",Cc:"recent-on-screen-",Ec:"total-visible-time-",kb:"has-fired-"},e=function(f,g){this.element=f;this.g=g};e.prototype.has=function(f){return!!this.element.getAttribute("data-gtm-vis-"+f+this.g)};e.prototype.get=function(f){return this.element.getAttribute("data-gtm-vis-"+
f+this.g)};e.prototype.set=function(f,g){this.element.setAttribute("data-gtm-vis-"+f+this.g,g)};e.prototype.o=function(f){this.element.removeAttribute("data-gtm-vis-"+f+this.g)};(function(f){Y.__evl=f;Y.__evl.i="evl";Y.__evl.m=!0;Y.__evl.priorityOverride=0})(function(f){function g(){var A=!1,w=null;if("CSS"===l){try{w=Pg(m)}catch(E){Af(46)}A=!!w&&v.length!=w.length}else if("ID"===l){var y=K.getElementById(m);y&&(w=[y],A=1!=v.length||v[0]!==y)}w||(w=[],A=0<v.length);if(A){for(var B=0;B<v.length;B++){var C=
new e(v[B],u);c(C)}v=[];for(var D=0;D<w.length;D++)v.push(w[D]);0<=x&&ah(x);0<v.length&&(x=$g(h,v,[r]))}}function h(A){var w=new e(A.target,u);A.intersectionRatio>=r?w.has(d.kb)||b(A,w,q,"ONCE"===t?function(){for(var y=0;y<v.length;y++){var B=new e(v[y],u);B.set(d.kb,"1");c(B)}ah(x);if(p&&qp)for(var C=0;C<qp.length;C++)qp[C]===g&&qp.splice(C,1)}:function(){w.set(d.kb,"1");c(w)}):(c(w),"MANY_PER_ELEMENT"===t&&w.has(d.kb)&&(w.o(d.kb),w.o(d.Ec)),w.o(d.Cc))}var l=f.vtp_selectorType,m;"ID"===l?m=String(f.vtp_elementId):
"CSS"===l&&(m=String(f.vtp_elementSelector));var p=!!f.vtp_useDomChangeListener,q=f.vtp_useOnScreenDuration&&Number(f.vtp_onScreenDuration)||0,r=(Number(f.vtp_onScreenRatio)||50)/100,u=f.vtp_uniqueTriggerId,t=f.vtp_firingFrequency,v=[],x=-1;g();p&&rp(g);M(f.vtp_gtmOnSuccess)})}();


var wv={};wv.macro=function(a){if(Ar.Bd.hasOwnProperty(a))return Ar.Bd[a]},wv.onHtmlSuccess=Ar.zf(!0),wv.onHtmlFailure=Ar.zf(!1);wv.dataLayer=Xh;wv.callback=function(a){Oh.hasOwnProperty(a)&&Qa(Oh[a])&&Oh[a]();delete Oh[a]};wv.bootstrap=0;wv._spx=!1;function xv(){N[pe.F]=wv;kb(Ph,Y.h);Wd=Wd||Ar;Xd=le}
function yv(){mg.o().o();N=n.google_tag_manager=n.google_tag_manager||{};an();vj.enable_gbraid_cookie_write=!0;if(N[pe.F]){var a=N.zones;a&&a.unregisterChild(pe.F);}else{for(var b=data.resource||{},c=b.macros||[],d=0;d<c.length;d++)Pd.push(c[d]);for(var e=b.tags||[],f=0;f<e.length;f++)Sd.push(e[f]);for(var g=b.predicates||[],h=0;h<g.length;h++)Rd.push(g[h]);for(var l=b.rules||[],m=0;m<l.length;m++){for(var p=l[m],q={},r=0;r<p.length;r++)q[p[r][0]]=Array.prototype.slice.call(p[r],1);Qd.push(q)}Ud=Y;Vd=Is;var u=data.permissions||{},t=data.sandboxed_scripts,v=data.security_groups;Hq();te=new se(u);if(void 0!==
t)for(var x=["sandboxedScripts"],A=0;A<t.length;A++){var w=t[A].replace(/^_*/,"");Ph[w]=x}Kq(v);xv();zr();Sk=!1;Tk=0;if("interactive"==K.readyState&&!K.createEventObject||"complete"==K.readyState)Vk();else{eg(K,"DOMContentLoaded",Vk);eg(K,"readystatechange",Vk);if(K.createEventObject&&K.documentElement.doScroll){var y=!0;try{y=!n.frameElement}catch(E){}y&&Wk()}eg(n,"load",Vk)}Mp=!1;"complete"===K.readyState?Op():eg(n,"load",Op);a:{if(!Nl)break a;n.setInterval(Ol,864E5);}
Mh=(new Date).getTime();}}
(function(a){if(!n["__TAGGY_INSTALLED"]){var b=!1;if(K.referrer){var c=hh(K.referrer);b="cct.google"===eh(c,"host")}if(!b){var d=ni("googTaggyReferrer");b=d.length&&d[0].length}b&&(n["__TAGGY_INSTALLED"]=!0,ag("https://cct.google/taggy/agent.js"))}var f=function(){var q=n["google.tagmanager.debugui2.queue"];q||(q=[],n["google.tagmanager.debugui2.queue"]=q,ag("https://www.googletagmanager.com/debug/bootstrap"));return q},g="x"===fh(n.location,"query",!1,void 0,"gtm_debug");if(!g&&K.referrer){var h=hh(K.referrer);g="tagassistant.google.com"===eh(h,"host")}if(!g){var l=ni("__TAG_ASSISTANT");g=l.length&&l[0].length}n.__TAG_ASSISTANT_API&&(g=!0);if(g&&Wf){var m=f(),p={messageType:"CONTAINER_STARTING",
data:{scriptSource:Wf,resume:function(){a()}}};pe.ag&&(p.data.initialPublish=!0);m.push(p)}else a()})(yv);

})()
