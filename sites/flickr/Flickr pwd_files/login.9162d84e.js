(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["login"],{"0d2b":function(e,t,n){},"1ffa":function(e,t,n){"use strict";var r=/^[-!#$%&'*+\/0-9=?A-Z^_a-z{|}~](\.?[-!#$%&'*+\/0-9=?A-Z^_a-z`{|}~])*@[a-zA-Z0-9](-*\.?[a-zA-Z0-9])*\.[a-zA-Z](-?[a-zA-Z0-9])+$/;t.validate=function(e){if(!e)return!1;if(e.length>254)return!1;var t=r.test(e);if(!t)return!1;var n=e.split("@");if(n[0].length>64)return!1;var i=n[1].split(".");return!i.some((function(e){return e.length>63}))}},"3dc6":function(e,t,n){},4355:function(e,t){},"46f1":function(e,t){},"46f8":function(e,t,n){"use strict";n("0d2b")},"474c":function(e,t,n){"use strict";var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"w-100 bg-grey-light my-3",style:{height:e.height}})},i=[],a={name:"FlickrDivider",props:{height:{type:String,default:"0.0625rem"}}},s=a,o=n("2877"),c=Object(o["a"])(s,r,i,!1,null,null,null);t["a"]=c.exports},"52e2":function(e,t,n){"use strict";var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"cursor-pointer flex align-center justify-center",on:{click:e.handleToggle}},[n("transition",{attrs:{name:"fade",mode:"out-in"}},[e.isShowing?n("flickr-icon",{key:"hide",attrs:{name:"eye-hide"}}):n("flickr-icon",{key:"show",attrs:{name:"eye-show"}})],1)],1)},i=[],a=n("871e"),s={name:"FlickrToggleShowHide",components:{FlickrIcon:a["a"]},data:function(){return{isShowing:!1}},methods:{handleToggle:function(){var e=this;this.isShowing=!this.isShowing,setTimeout((function(){e.$emit("toggle",!0)}),200)}}},o=s,c=(n("cb0e"),n("2877")),u=Object(c["a"])(o,r,i,!1,null,"4e963a48",null);t["a"]=u.exports},5333:function(e,t){},"6d54":function(e,t,n){"use strict";var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("flickr-input",e._g(e._b({attrs:{id:e.id,"data-testid":e.testId,rules:e.passwordRules,source:e.inputSourceType,type:e.isShowPassText?"text":"password",label:e.labelText},scopedSlots:e._u([{key:"append",fn:function(){return[n("flickr-toggle-show-hide",{on:{toggle:function(t){e.isShowPassText=!e.isShowPassText}}})]},proxy:!0}]),model:{value:e.password,callback:function(t){e.password=t},expression:"password"}},"flickr-input",e.$attrs,!1),e.$listeners))},i=[],a=n("91ba"),s=n("5dc8"),o=n("52e2"),c=n("cac5"),u={name:"FlickrInputCurrentPassword",components:{FlickrToggleShowHide:o["a"],FlickrInput:c["a"]},inheritAttrs:!1,props:{id:{type:String,required:!0},value:{type:String,default:""},label:{type:String,default:""}},data:function(){var e=this;return{isShowPassText:!1,passwordRules:[function(t){return!!t||e.$t("general-required")}],testId:s["IDENTITY_FORM_PASSWORD_INPUT"],inputSourceType:a["CURRENT_PASSWORD_INPUT"]}},computed:{password:{get:function(){return this.value},set:function(e){this.$emit("input",e)}},labelText:function(){return""!==this.label?this.label:this.$t("general-password")}}},l=u,d=n("2877"),p=n("5333"),h=n.n(p),f=Object(d["a"])(l,r,i,!1,null,null,null);"function"===typeof h.a&&h()(f);t["a"]=f.exports},"6dee":function(e,t,n){},"72d67":function(e,t,n){"use strict";n("3dc6")},"974e":function(e,t,n){"use strict";var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("flickr-input",e._g(e._b({attrs:{id:e.id,"data-testid":e.testId,rules:e.rules,source:e.inputSourceType,label:e.$t("general-email"),type:"email",autocapitalize:"none",autocomplete:"email"},model:{value:e.email,callback:function(t){e.email=t},expression:"email"}},"flickr-input",e.$attrs,!1),e.$listeners))},i=[],a=n("cac5"),s=n("1ffa"),o=n.n(s),c=n("91ba"),u=n("5dc8"),l={name:"FlickrInputEmail",components:{FlickrInput:a["a"]},props:{id:{type:String,required:!0},value:{type:String,default:""},validEmailCheck:{type:Boolean,default:!1}},data:function(){return{testId:u["IDENTITY_FORM_EMAIL_INPUT"],inputSourceType:c["EMAIL_INPUT"]}},computed:{email:{get:function(){return this.value},set:function(e){this.$emit("input",e)}},rules:function(){var e=this,t=[function(t){return!!t||e.$t("general-required")}];return this.validEmailCheck&&t.push((function(t){return o.a.validate(t)||e.$t("general-invalid-email")})),t}}},d=l,p=n("2877"),h=n("4355"),f=n.n(h),m=Object(p["a"])(d,r,i,!1,null,null,null);"function"===typeof f.a&&f()(m);t["a"]=m.exports},"9ed6":function(e,t,n){"use strict";n.r(t);var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("flickr-layout-centered-card",{attrs:{title:e.$t("login-view-page-title")},scopedSlots:e._u([{key:"card-icon",fn:function(){return[n("flickr-icon",{attrs:{name:"blue-pink-balls"}})]},proxy:!0},{key:"card-back-button",fn:function(){return[n("router-link",{attrs:{to:{name:"account-picker"},tag:"a"}},[e.hasAccountPickerBeenSeen&&e.previousAuthedAccounts?n("flickr-button",{attrs:{icon:"arrow-back"}}):e._e()],1)]},proxy:!0},{key:"card-content",fn:function(){return[n("flickr-form",{attrs:{id:"login-form","submit-text":e.isMigrated?e.$t("login-view-sign-in-button"):e.$t("general-next"),loading:e.isLoading},on:{submit:e.handleSubmit},scopedSlots:e._u([{key:"form-header",fn:function(){return[n("transition",{attrs:{name:"form-element-height",mode:"out-in"}},[e.isPostSignUp?n("p",{staticClass:"text-center f-size-3"},[e._v(" "+e._s(e.$t("login-view-post-sign-up-message"))+" ")]):e._e()])]},proxy:!0},{key:"form-inputs",fn:function(){return[n("flickr-input-email",{attrs:{id:"login-email",value:e.email,"auto-focus":""},on:{input:function(t){return e.setEmail({email:t})}}}),n("transition",{attrs:{name:"form-element-height",mode:"out-in"}},[e.showPassword?n("div",{staticClass:"flex column"},[n("flickr-input-current-password",{attrs:{id:"login-password","auto-focus":""},model:{value:e.password,callback:function(t){e.password=t},expression:"password"}}),n("flickr-input-checkbox",{attrs:{id:"remember-account",label:e.$t("general-remember-email-address"),value:e.rememberAuthedAccounts},on:{input:function(t){return e.setRememberAuthedAccounts({value:t})}}})],1):e._e()])]},proxy:!0}])})]},proxy:!0},{key:"card-footer",fn:function(){return[n("div",{staticClass:"flex column w-100"},[n("transition",{attrs:{name:"form-element-height"}},[e.showPassword?n("div",[n("p",{staticClass:"text-center f-size-2 ma-0"},[n("router-link",{attrs:{to:{name:"forgot-password"}}},[e._v(" "+e._s(e.$t("login-view-forgot-your-password"))+" ")])],1),n("flickr-divider")],1):e._e()]),n("i18n",{staticClass:"text-center f-size-2 ma-0",attrs:{path:"general-not-a-member-sign-up"}},[n("router-link",{attrs:{to:{name:"sign-up"},"data-testid":e.signupLinkTestId,place:"general-sign-up-here-link"}},[e._v(" "+e._s(e.$t("general-sign-up-here"))+" ")])],1)],1)]},proxy:!0}])})},i=[],a=n("a34a"),s=n.n(a),o=n("6562"),c=n("c8aa"),u=n("1ffa"),l=n.n(u),d=n("2f62"),p=n("b2b5"),h=n("974e"),f=n("6d54"),m=n("76b7"),b=n("871e"),g=n("474c"),k=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("label",{staticClass:"checkbox-container flex align-center over-hidden cursor-pointer",attrs:{for:e.id}},[n("span",{staticClass:"flex align-center pos-relative"},[n("input",{directives:[{name:"model",rawName:"v-model",value:e.checkboxValue,expression:"checkboxValue"}],staticClass:"checkbox-hidden",attrs:{id:e.id,"aria-checked":e.checkboxValue,type:"checkbox"},domProps:{checked:Array.isArray(e.checkboxValue)?e._i(e.checkboxValue,null)>-1:e.checkboxValue},on:{change:function(t){var n=e.checkboxValue,r=t.target,i=!!r.checked;if(Array.isArray(n)){var a=null,s=e._i(n,a);r.checked?s<0&&(e.checkboxValue=n.concat([a])):s>-1&&(e.checkboxValue=n.slice(0,s).concat(n.slice(s+1)))}else e.checkboxValue=i}}}),n("span",{staticClass:"checkbox-frame flex align-center justify-center b-grey-dark b-rad-1"},[n("transition",{attrs:{name:"fade-zoom-rounded",mode:"out-in"}},[e.checkboxValue?n("span",{key:"checked",staticClass:"checkbox-background checked b-rad-1 pos-absolute"},[n("flickr-icon",{staticClass:"c-white",attrs:{name:"check",size:"small"}})],1):n("span",{key:"nonChecked",staticClass:"checkbox-background b-rad-1 pos-absolute"})])],1)]),n("span",{staticClass:"f-size-2 text-overflow-ellipsis user-select-none pl-2"},[e._v(e._s(e.label))])])},v=[],w={name:"FlickrInputCheckbox",components:{FlickrIcon:b["a"]},props:{id:{type:String,required:!0},label:{type:String,required:!0},value:{type:Boolean,required:!0}},computed:{checkboxValue:{get:function(){return this.value},set:function(e){this.$emit("input",e)}}}},x=w,y=(n("46f8"),n("2877")),_=n("b975"),S=n.n(_),A=Object(y["a"])(x,k,v,!1,null,"0796a233",null);"function"===typeof S.a&&S()(A);var I=A.exports,T=n("5872"),$=n("5dc8"),P=n("a047");function L(e,t,n,r,i,a,s){try{var o=e[a](s),c=o.value}catch(u){return void n(u)}o.done?t(c):Promise.resolve(c).then(r,i)}function C(e){return function(){var t=this,n=arguments;return new Promise((function(r,i){var a=e.apply(t,n);function s(e){L(a,r,i,s,o,"next",e)}function o(e){L(a,r,i,s,o,"throw",e)}s(void 0)}))}}function E(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},r=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(r=r.concat(Object.getOwnPropertySymbols(n).filter((function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable})))),r.forEach((function(t){O(e,t,n[t])}))}return e}function O(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var F={name:"LoginView",components:{FlickrInputEmail:h["a"],FlickrInputCurrentPassword:f["a"],FlickrLayoutCenteredCard:p["a"],FlickrForm:m["a"],FlickrIcon:b["a"],FlickrDivider:g["a"],FlickrInputCheckbox:I,FlickrButton:T["a"]},data:function(){return{isLoading:!1,password:"",signupLinkTestId:$["IDENTITY_SIGNUP_LINK"],isMobile:P["f"],isPostSignUp:!1}},computed:E({},Object(d["c"])("links",["membershipLoginUrl"]),Object(d["e"])("user",["isMigrated","email"]),Object(d["e"])("auth",["rememberAuthedAccounts","hasAccountPickerBeenSeen","previousAuthedAccounts"]),{showPassword:function(){return this.isMigrated}}),created:function(){if(this.$route.query.postSignUp&&(this.isPostSignUp=!0),this.$route.query.migratedYahooAuth)return this.openModal({name:o["FLICKR_MODAL_USE_MIGRATED_EMAIL"],dismissible:!1});this.setRememberAuthedAccounts({value:this.isMigrated})},methods:E({},Object(d["d"])("user",["setEmail","setMigrated"]),Object(d["d"])("links",["setReferrerURL"]),Object(d["d"])("modal",["openModal"]),Object(d["d"])("auth",["setRememberAuthedAccounts","setPendingForceChangePassword","setSessionCredentials"]),Object(d["b"])("auth",["login","populateUserInfo","getPostLoginUrl"]),Object(d["b"])("error",["handleError","beaconError"]),Object(d["b"])("flickr",["checkMigration"]),{handleSubmit:function(){this.isMigrated?this.requestLogin():this.determineLoginFlow()},requestLogin:function(){var e=C(s.a.mark((function e(){var t;return s.a.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.prev=0,this.isLoading=!0,e.next=4,this.login({email:this.email,password:this.password});case 4:if(t=e.sent,"NEW_PASSWORD_REQUIRED"!==t.challengeName){e.next=9;break}return e.abrupt("return",this.directToAccountUpdate(t));case 9:return e.abrupt("return",this.directToLogin(t));case 10:e.next=15;break;case 12:e.prev=12,e.t0=e["catch"](0),this.handleError({error:e.t0});case 15:return e.prev=15,this.isLoading=!1,e.finish(15);case 18:case"end":return e.stop()}}),e,this,[[0,12,15,18]])})));function t(){return e.apply(this,arguments)}return t}(),determineLoginFlow:function(){var e=C(s.a.mark((function e(){var t;return s.a.wrap((function(e){while(1)switch(e.prev=e.next){case 0:if(e.prev=0,this.isLoading=!0,t=!1,!l.a.validate(this.email)){e.next=19;break}return e.next=6,this.checkMigration({email:this.email});case 6:if(t=e.sent,!t){e.next=12;break}this.setMigrated(),this.setRememberAuthedAccounts({value:!0}),e.next=17;break;case 12:if(t||this.isMobile){e.next=16;break}return e.abrupt("return",this.$router.push({name:"account-update"}));case 16:return e.abrupt("return",this.directToMembership());case 17:e.next=20;break;case 19:return e.abrupt("return",this.openModal({name:o["FLICKR_MODAL_USE_VALID_EMAIL"],dismissible:!1,action:this.directToMembership}));case 20:e.next=29;break;case 22:if(e.prev=22,e.t0=e["catch"](0),e.t0.code!==c["n"]){e.next=26;break}return e.abrupt("return",this.directToRegistration());case 26:this.beaconError({error:e.t0}),this.setMigrated(),this.setRememberAuthedAccounts({value:!0});case 29:return e.prev=29,this.isLoading=!1,e.finish(29);case 32:case"end":return e.stop()}}),e,this,[[0,22,29,32]])})));function t(){return e.apply(this,arguments)}return t}(),directToRegistration:function(){return this.$router.push({name:"sign-up"})},directToMembership:function(){return this.$router.push({name:"redirect",params:{externalURL:this.membershipLoginUrl}})},directToLogin:function(){var e=C(s.a.mark((function e(t){return s.a.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,this.populateUserInfo({credentials:t});case 2:return e.t0=this.$router,e.next=5,this.getPostLoginUrl();case 5:return e.t1=e.sent,e.t2={externalURL:e.t1},e.t3={name:"redirect",params:e.t2},e.abrupt("return",e.t0.push.call(e.t0,e.t3));case 9:case"end":return e.stop()}}),e,this)})));function t(t){return e.apply(this,arguments)}return t}(),directToAccountUpdate:function(e){return this.setSessionCredentials({credentials:e}),this.setPendingForceChangePassword(),this.$router.push({name:"force-change-password"})}})},M=F,R=(n("72d67"),n("46f1")),U=n.n(R),j=Object(y["a"])(M,r,i,!1,null,"e26cd3c4",null);"function"===typeof U.a&&U()(j);t["default"]=j.exports},b975:function(e,t){},cb0e:function(e,t,n){"use strict";n("6dee")}}]);