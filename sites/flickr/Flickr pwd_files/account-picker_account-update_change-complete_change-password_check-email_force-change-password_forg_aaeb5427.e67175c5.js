(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["account-picker~account-update~change-complete~change-password~check-email~force-change-password~forg~aaeb5427"],{"05a5":function(t,e,n){"use strict";n("49b3")},"077f":function(t,e,n){"use strict";n.r(e),e["default"]={id:"circle-check-usage",viewBox:"0 0 24 24",url:n.p+"img/icons.c121c832.svg#circle-check",toString:function(){return this.url}}},"111e":function(t,e,n){"use strict";n.r(e),e["default"]={id:"circle-tiny-usage",viewBox:"0 0 24 24",url:n.p+"img/icons.c121c832.svg#circle-tiny",toString:function(){return this.url}}},"1c68":function(t,e,n){"use strict";var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{style:{height:t.dimension,width:t.dimension}},[n("svg",{attrs:{viewBox:"0 0 24 24",xmlns:"http://www.w3.org/2000/svg"}},[n("circle",{staticClass:"pink-ball",attrs:{cx:"18",cy:"12",r:"5",fill:"#ff0084"}}),n("circle",{staticClass:"blue-ball",attrs:{cx:"18",cy:"12",r:"5",fill:"#005fde"}})])])},i=[],a={name:"FlickrLoaderBalls",props:{size:{type:String,validator:function(t){return["small","medium","large"].includes(t)},default:"medium"}},computed:{dimension:function(){var t={small:"1rem",medium:"1.5rem",large:"2rem"};return t[this.size]}}},o=a,s=(n("3606"),n("2877")),c=Object(s["a"])(o,r,i,!1,null,"3641adf0",null);e["a"]=c.exports},"1f29":function(t,e,n){"use strict";n.r(e),e["default"]={id:"ring-usage",viewBox:"0 0 24 24",url:n.p+"img/icons.c121c832.svg#ring",toString:function(){return this.url}}},2686:function(t,e,n){"use strict";n("bc8d")},3080:function(t,e){},3606:function(t,e,n){"use strict";n("3dba")},"3ae9":function(t,e,n){"use strict";n.r(e),e["default"]={id:"mail-usage",viewBox:"2 2 24 24",url:n.p+"img/icons.c121c832.svg#mail",toString:function(){return this.url}}},"3dba":function(t,e,n){},"47dd":function(t,e,n){},"49a1":function(t,e){},"49b3":function(t,e,n){},"4b7d":function(t,e,n){"use strict";n.r(e),e["default"]={id:"circle-person-usage",viewBox:"0 0 24 24",url:n.p+"img/icons.c121c832.svg#circle-person",toString:function(){return this.url}}},5872:function(t,e,n){"use strict";var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("button",t._g(t._b({class:t.buttonState,attrs:{disabled:t.isDisabled}},"button",t.$attrs,!1),t.$listeners),[t.icon?n("flickr-icon",{attrs:{name:t.icon}}):t._e(),n("transition",{attrs:{name:"fade-zoom",mode:"out-in"}},[t.isShowingDefaultText?n("span",{key:"default-slot",staticClass:"user-select-none"},[t._t("default")],2):n("span",{key:"loader-slot"},[n("transition",{attrs:{name:"fade-zoom",mode:"out-in"}},[t.isShowingLoadedText?n("span",{staticClass:"flex align-center user-select-none"},[n("flickr-icon",{staticClass:"mr-2",attrs:{name:"check",size:"small"}}),n("span",{staticClass:"loading-text user-select-none"},[t._v(t._s(t.loadedText))])],1):n("flickr-loader-balls")],1)],1)])],1)},i=[],a=n("1c68"),o=n("871e"),s={name:"FlickrButton",components:{FlickrIcon:o["a"],FlickrLoaderBalls:a["a"]},props:{colorClass:{type:String,default:"c-white"},bgColorClass:{type:String,default:"bg-blue"},block:{type:Boolean,default:!1},icon:{type:String,default:""},disabled:{type:Boolean,default:!1},loading:{type:Boolean,default:!1},loadedText:{type:String,default:""}},data:function(){return{isShowingLoadedText:!1,loadedMessageDuration:3e3}},computed:{buttonState:function(){var t=[this.colorClass,this.bgColorClass,"flickr-button","flex","align-center","justify-center","f-size-3","f-weight-bold","over-y-hidden"];return this.block&&t.push("block","w-100"),this.icon?t.push("icon","b-rad-50","pa-2","elevation-0"):t.push("b-rad-1","py-2","px-4"),t},isDisabled:function(){return this.disabled||this.loading||this.isShowingLoadedText},isShowingDefaultText:function(){return!this.loading&&!this.isShowingLoadedText}},watch:{loading:function(t,e){var n=this;!t&&e&&this.loadedText&&(this.isShowingLoadedText=!0,setTimeout((function(){n.isShowingLoadedText=!1}),this.loadedMessageDuration))}}},c=s,l=(n("2686"),n("2877")),u=n("3080"),f=n.n(u),g=Object(l["a"])(c,r,i,!1,null,"40558ae2",null);"function"===typeof f.a&&f()(g);e["a"]=g.exports},"5b5e":function(t,e,n){"use strict";n.r(e),e["default"]={id:"arrow-drop-down-usage",viewBox:"0 0 24 24",url:n.p+"img/icons.c121c832.svg#arrow-drop-down",toString:function(){return this.url}}},"5ed1":function(t,e,n){},"6f32":function(t,e,n){var r={"./arrow-back.svg":"b8a8","./arrow-drop-down.svg":"5b5e","./blue-pink-balls.svg":"8cb1","./check.svg":"7bae","./circle-check.svg":"077f","./circle-person.svg":"4b7d","./circle-tiny.svg":"111e","./circle.svg":"b289","./eye-hide.svg":"a2a9","./eye-show.svg":"824a","./lock.svg":"9619","./mail.svg":"3ae9","./pencil.svg":"e51f","./ring.svg":"1f29","./warning.svg":"daa9"};function i(t){var e=a(t);return n(e)}function a(t){var e=r[t];if(!(e+1)){var n=new Error("Cannot find module '"+t+"'");throw n.code="MODULE_NOT_FOUND",n}return e}i.keys=function(){return Object.keys(r)},i.resolve=a,t.exports=i,i.id="6f32"},"76fd":function(t,e,n){"use strict";n("c286")},"7bae":function(t,e,n){"use strict";n.r(e),e["default"]={id:"check-usage",viewBox:"2 2 24 24",url:n.p+"img/icons.c121c832.svg#check",toString:function(){return this.url}}},"824a":function(t,e,n){"use strict";n.r(e),e["default"]={id:"eye-show-usage",viewBox:"0 0 24 24",url:n.p+"img/icons.c121c832.svg#eye-show",toString:function(){return this.url}}},"871e":function(t,e,n){"use strict";var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("svg",t._g({style:t.iconStyles,attrs:{xmlns:"http://www.w3.org/2000/svg"}},t.$listeners),[t.title?n("title",[t._v(t._s(t.title))]):t._e(),n("use",{attrs:{"xlink:href":t.iconPath,"xmlns:xlink":"http://www.w3.org/1999/xlink"}})])},i=[],a={name:"FlickrIcon",props:{name:{type:String,required:!0},title:{type:String,default:null},size:{type:String,default:"medium",validator:function(t){var e=["small","medium","large","extraLarge"];return e.includes(t)}}},data:function(){return{sizeDimensionMap:{small:"1rem",medium:"1.5rem",large:"2rem",extraLarge:"2.5rem"}}},computed:{iconPath:function(){return n("6f32")("./".concat(this.name,".svg")).default.url},iconStyles:function(){return{fill:"currentColor",height:this.sizeDimensionMap[this.size],width:this.sizeDimensionMap[this.size]}}}},o=a,s=n("2877"),c=Object(s["a"])(o,r,i,!1,null,null,null);e["a"]=c.exports},"8cb1":function(t,e,n){"use strict";n.r(e),e["default"]={id:"blue-pink-balls-usage",viewBox:"0 0 24 24",url:n.p+"img/icons.c121c832.svg#blue-pink-balls",toString:function(){return this.url}}},9619:function(t,e,n){"use strict";n.r(e),e["default"]={id:"lock-usage",viewBox:"2 2 24 24",url:n.p+"img/icons.c121c832.svg#lock",toString:function(){return this.url}}},"9e73":function(t,e,n){t.exports=n.p+"img/flickr_logo_dots.3c6f3e13.svg"},a2a9:function(t,e,n){"use strict";n.r(e),e["default"]={id:"eye-hide-usage",viewBox:"0 0 24 24",url:n.p+"img/icons.c121c832.svg#eye-hide",toString:function(){return this.url}}},b289:function(t,e,n){"use strict";n.r(e),e["default"]={id:"circle-usage",viewBox:"0 0 24 24",url:n.p+"img/icons.c121c832.svg#circle",toString:function(){return this.url}}},b2b5:function(t,e,n){"use strict";var r=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"layout-centered-card flex column h-100-vh pos-relative",class:{"bg-grey-page":!t.loginPageEntryType},style:t.loginPageEntryType?{"background-image":"url("+t.bgImage+")"}:null},[n("flickr-toolbar-global",{staticClass:"toolbar"}),n("div",{staticClass:"card-container flex align-center justify-center grow over-y-auto w-100 pa-5 pb-6"},[n("flickr-card",{staticClass:"card pos-relative",attrs:{outline:!t.loginPageEntryType,slim:!t.wideCardStyle,wide:t.wideCardStyle}},[t.$slots["card-back-button"]?n("div",{staticClass:"pos-absolute back-button"},[t._t("card-back-button")],2):t._e(),n("div",{staticClass:"content-container"},[t.$slots["card-icon"]?n("div",{staticClass:"flex justify-center mb-2"},[t._t("card-icon")],2):t._e(),t.title?n("h6",{staticClass:"f-size-4 f-weight-normal mb-3 text-center",attrs:{"data-testid":t.cardTitleTestId}},[t._v(" "+t._s(t.title)+" ")]):t._e(),t._t("card-content"),n("div",{class:{"mt-3":t.$slots["card-footer"]}},[t._t("card-footer")],2)],2),n("div",{staticClass:"space-buffer w-100 pb-5 d-none-small-and-up"}),n("flickr-footer-language-links",{staticClass:"mt-2 d-none-mobile-only footer-offset pos-absolute",attrs:{color:t.langFooterColor}}),n("flickr-footer-language-links",{staticClass:"mt-2 d-none-small-and-up",attrs:{color:"black"}})],1),t.loginPageEntryType?n("i18n",{staticClass:"bg-attribution pos-absolute f-size-2 c-grey d-none-mobile-only",attrs:{tag:"p",path:"login-bg-photo-attribution"}},[n("span",{attrs:{place:"title"}},[t._v(" "+t._s(t.bgPhotoTitle)+" ")]),n("span",{attrs:{place:"photographer"}},[t._v(" "+t._s(t.bgPhotographer)+" ")])]):t._e()],1)],1)},i=[],a=n("2f62"),o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"flex align-center justify-space-between w-100 footer"},[n("flickr-input-language-selector",{attrs:{color:t.color}}),n("div",[n("a",{staticClass:"mr-3 ma-0",class:t.colorClass,attrs:{href:t.help,target:"_blank"}},[t._v(t._s(t.$t("general-help")))]),n("a",{staticClass:"mr-3 ma-0",class:t.colorClass,attrs:{href:t.privacy,target:"_blank"}},[t._v(t._s(t.$t("general-privacy")))]),n("a",{staticClass:"ma-0",class:t.colorClass,attrs:{href:t.termsOfService,target:"_blank"}},[t._v(t._s(t.$t("general-terms")))])])],1)},s=[],c=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"pos-relative"},[n("button",{staticClass:"flex align-center",class:t.colorClass,on:{click:function(e){t.isShowingMenu=!t.isShowingMenu},blur:function(e){t.isShowingMenu=!1}}},[n("span",[t._v(t._s(t.langs[t.$i18n.locale]))]),n("flickr-icon",{attrs:{name:"arrow-drop-down"}})],1),n("transition",{attrs:{name:"fade"}},[t.isShowingMenu?n("div",{ref:"menu-container",staticClass:"menu-container bg-white b-rad-1 elevation-4 pos-absolute"},[n("span",{staticClass:"flex column"},t._l(t.langs,(function(e,r){return n("button",{key:"lang"+r,staticClass:"bg-hover-grey c-black px-2 py-2",on:{click:function(e){return e.stopPropagation(),t.handleLangChange(r)}}},[t._v(" "+t._s(e)+" ")])})),0)]):t._e()])],1)},l=[],u=n("a34a"),f=n.n(u),g=n("871e"),d=n("c381");function p(t,e,n,r,i,a,o){try{var s=t[a](o),c=s.value}catch(l){return void n(l)}s.done?e(c):Promise.resolve(c).then(r,i)}function b(t){return function(){var e=this,n=arguments;return new Promise((function(r,i){var a=t.apply(e,n);function o(t){p(a,r,i,o,s,"next",t)}function s(t){p(a,r,i,o,s,"throw",t)}o(void 0)}))}}function h(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{},r=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(r=r.concat(Object.getOwnPropertySymbols(n).filter((function(t){return Object.getOwnPropertyDescriptor(n,t).enumerable})))),r.forEach((function(e){m(t,e,n[e])}))}return t}function m(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var v={name:"FlickrInputLanguageSelector",components:{FlickrIcon:g["a"]},props:{color:{type:String,default:"white"}},data:function(){var t;return{langs:(t={},m(t,d["ENGLISH_LANG_CODE"],"English"),m(t,d["DEUTSCH_LANG_CODE"],"Deutsch"),m(t,d["CHINESE_LANG_CODE"],"繁體中文"),m(t,d["SPANISH_LANG_CODE"],"Español"),m(t,d["FRENCH_LANG_CODE"],"Français"),m(t,d["KOREAN_LANG_CODE"],"한글"),m(t,d["ITALIAN_LANG_CODE"],"Italiano"),m(t,d["PORTUGUESE_LANG_CODE"],"Português"),m(t,d["VIETNAMESE_LANG_CODE"],"Tiếng Việt"),m(t,d["INDONESIAN_LANG_CODE"],"Bahasa Indonesia"),t),isShowingMenu:!1}},computed:{colorClass:function(){return"c-".concat(this.color)}},methods:h({},Object(a["b"])("user",["loadLanguageAsync"]),{handleLangChange:function(){var t=b(f.a.mark((function t(e){return f.a.wrap((function(t){while(1)switch(t.prev=t.next){case 0:return this.isShowingMenu=!1,t.prev=1,t.next=4,this.loadLanguageAsync(e);case 4:t.next=10;break;case 6:return t.prev=6,t.t0=t["catch"](1),t.next=10,this.loadLanguageAsync("en-us");case 10:case"end":return t.stop()}}),t,this,[[1,6]])})));function e(e){return t.apply(this,arguments)}return e}()})},y=v,w=(n("d7b5"),n("2877")),k=Object(w["a"])(y,c,l,!1,null,"664babbd",null),_=k.exports;function C(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{},r=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(r=r.concat(Object.getOwnPropertySymbols(n).filter((function(t){return Object.getOwnPropertyDescriptor(n,t).enumerable})))),r.forEach((function(e){x(t,e,n[e])}))}return t}function x(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var S={name:"FlickrFooterLanguageLinks",components:{FlickrInputLanguageSelector:_},props:{color:{type:String,default:"grey"}},computed:C({},Object(a["c"])("links",["help","privacy","termsOfService"]),{colorClass:function(){return"c-".concat(this.color)}})},O=S,E=(n("b5a0"),Object(w["a"])(O,o,s,!1,null,"5c277b76",null)),P=E.exports,T=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"global-toolbar w-100 bg-black"},[n("div",{staticClass:"toolbar-content flex align-stretch h-100 w-80 m-auto"},[n("span",{staticClass:"flex align-center"},[n("img",{staticClass:"global-toolbar-logo",attrs:{src:t.logoPath,alt:"Flickr Logo"}})])])])},j=[];function L(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{},r=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(r=r.concat(Object.getOwnPropertySymbols(n).filter((function(t){return Object.getOwnPropertyDescriptor(n,t).enumerable})))),r.forEach((function(e){B(t,e,n[e])}))}return t}function B(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var D={name:"FlickrToolbarGlobal",data:function(){return{logoPath:n("9e73")}},computed:L({},Object(a["c"])("links",["homePage"]))},F=D,I=(n("cb36"),Object(w["a"])(F,T,j,!1,null,"31ac4aa6",null)),N=I.exports,A=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"pa-4 b-rad-1 bg-white",class:t.cardClasses},[t._t("default")],2)},$=[],z={name:"FlickrCard",props:{slim:{type:Boolean,default:!1},wide:{type:Boolean,default:!1},raised:{type:Boolean,default:!1},outline:{type:Boolean,default:!1}},computed:{cardClasses:function(){return{"flickr-card--slim":this.slim,"flickr-card--wide":this.wide,"elevation-1":this.raised,"b-grey":this.outline}}}},G=z,M=(n("05a5"),n("49a1")),H=n.n(M),U=Object(w["a"])(G,A,$,!1,null,"0f36bfa4",null);"function"===typeof H.a&&H()(U);var R=U.exports,J=n("5872"),V=n("5dc8"),q=n("ab28");function K(t){for(var e=1;e<arguments.length;e++){var n=null!=arguments[e]?arguments[e]:{},r=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(r=r.concat(Object.getOwnPropertySymbols(n).filter((function(t){return Object.getOwnPropertyDescriptor(n,t).enumerable})))),r.forEach((function(e){Y(t,e,n[e])}))}return t}function Y(t,e,n){return e in t?Object.defineProperty(t,e,{value:n,enumerable:!0,configurable:!0,writable:!0}):t[e]=n,t}var Q={name:"FlickrLayoutCenteredCard",components:{FlickrFooterLanguageLinks:P,FlickrIcon:g["a"],FlickrToolbarGlobal:N,FlickrButton:J["a"],FlickrCard:R},props:{title:{type:String,default:""},noImage:{type:Boolean,default:!1},wideCardStyle:{type:Boolean,default:!1}},data:function(){return{cardTitleTestId:V["IDENTITY_CARD_TITLE"],bgPhotoTitle:"033120190455",bgPhotographer:"Henry"}},computed:K({},Object(a["e"])("user",["entryPageType"]),{loginPageEntryType:function(){return this.entryPageType===q["a"]},bgImage:function(){return this.loginPageEntryType?n("df26"):null},langFooterColor:function(){return this.loginPageEntryType?"white":"grey"}})},W=Q,X=(n("76fd"),Object(w["a"])(W,r,i,!1,null,"25bd855c",null));e["a"]=X.exports},b5a0:function(t,e,n){"use strict";n("5ed1")},b8a8:function(t,e,n){"use strict";n.r(e),e["default"]={id:"arrow-back-usage",viewBox:"0 0 24 24",url:n.p+"img/icons.c121c832.svg#arrow-back",toString:function(){return this.url}}},bc8d:function(t,e,n){},c239:function(t,e,n){},c286:function(t,e,n){},cb36:function(t,e,n){"use strict";n("c239")},d7b5:function(t,e,n){"use strict";n("47dd")},daa9:function(t,e,n){"use strict";n.r(e),e["default"]={id:"warning-usage",viewBox:"0 0 24 24",url:n.p+"img/icons.c121c832.svg#warning",toString:function(){return this.url}}},df26:function(t,e,n){t.exports=n.p+"img/033120190455-by-Henry.26d9f56a.jpg"},e51f:function(t,e,n){"use strict";n.r(e),e["default"]={id:"pencil-usage",viewBox:"2 2 24 24",url:n.p+"img/icons.c121c832.svg#pencil",toString:function(){return this.url}}}}]);