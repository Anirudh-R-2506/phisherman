(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["change-password~force-change-password~forgot-password~forgot-password-confirm~login~migration~sign-u~237584b0"],{"019c":function(e,t,n){},"1ecc":function(e,t,n){"use strict";n("019c")},"5e62":function(e,t,n){"use strict";n("9a4b")},"76b7":function(e,t,n){"use strict";var i=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("form",e._g(e._b({ref:"flickr-form",attrs:{id:e.id,"data-testid":e.formTestId},on:{keypress:function(t){return!t.type.indexOf("key")&&e._k(t.keyCode,"enter",13,t.key,"Enter")?null:(t.preventDefault(),e.submit(t))},submit:function(t){return t.preventDefault(),e.submit(t)}}},"form",e.$attrs,!1),e.$listeners),[e.$slots["form-header"]?n("div",{staticClass:"mb-3"},[e._t("form-header")],2):e._e(),n("flickr-alert-error",{staticClass:"mb-3",attrs:{show:e.genericErrorOccurred||e.unknownErrorOccurred,message:e.errorMessage,"unknown-error-type":e.unknownErrorOccurred}}),e._t("form-inputs"),e._t("form-footer"),n("flickr-button",{staticClass:"mt-5",attrs:{loading:e.loading,"loaded-text":e.loadedText,disabled:e.disabled,"data-testid":e.buttonTestId,block:""},on:{click:function(t){return t.preventDefault(),e.submit(t)}}},[e._v(" "+e._s(e.submitText)+" ")])],2)},r=[],s=n("2f62"),a=n("ea96"),o=n("5872"),l=n("5dc8");function u(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},i=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(i=i.concat(Object.getOwnPropertySymbols(n).filter((function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable})))),i.forEach((function(t){c(e,t,n[t])}))}return e}function c(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var d={name:"FlickrForm",components:{FlickrAlertError:a["a"],FlickrButton:o["a"]},inheritAttrs:!1,props:{loading:{type:Boolean,default:!1},loadedText:{type:String,default:""},disabled:{type:Boolean,default:!1},submitText:{type:String,default:"submit"},id:{type:String,required:!0}},data:function(){return{buttonTestId:l["IDENTITY_FORM_SUBMIT_BUTTON"],formTestId:l["IDENTITY_FORM"],listOfInputs:[]}},computed:u({},Object(s["e"])("error",["errorMessage","genericErrorOccurred","unknownErrorOccurred"])),mounted:function(){this.getListOfInputs(this)},beforeDestroy:function(){this.clearErrorState()},methods:u({},Object(s["d"])("error",["clearErrorState"]),{getListOfInputs:function(e){var t=this;if("FlickrInput"!==e.$options.name&&"FlickrRecaptcha"!==e.$options.name||this.listOfInputs.push(e),!e.$children||"FlickrInput"===e.$options.name||"FlickrRecaptcha"===e.$options.name)return null;e.$children.map((function(e){t.getListOfInputs(e)}))},submit:function(){this.clearErrorState(),this.validateForm()&&this.$emit("submit",!0)},validateForm:function(){var e=!0;return this.listOfInputs.map((function(t){t.performValidation()||(e=!1)})),e}})},p=d,f=n("2877"),h=Object(f["a"])(p,i,r,!1,null,null,null);t["a"]=h.exports},"9a4b":function(e,t,n){},cac5:function(e,t,n){"use strict";var i=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"flex column pos-relative mb-2",class:e.stateColorClass,on:{keydown:e.selectKeyboardNav}},[n("div",{ref:"input-container",staticClass:"input-container flex align-center justify-center pos-relative b-rad-1 b-current-color b-solid b-box b-width-1",class:[e.cursorClass],on:{click:e.showSelectOptions,mousedown:e.setInputFocus}},[n("label",{staticClass:"flickr-input-label pos-absolute user-select-none",class:{"animation-shake":e.isShakingLabel,"flickr-input-label--floating":e.isLabelFloating,"cursor-text":!e.select,"cursor-pointer":e.select},attrs:{for:e.id}},[e._v(" "+e._s(e.label)+" ")]),"checkbox"===e.type?n("input",{directives:[{name:"auto-focus",rawName:"v-auto-focus",value:e.autoFocus,expression:"autoFocus"},{name:"model",rawName:"v-model",value:e.baseValue,expression:"baseValue"}],ref:"input",staticClass:"flickr-input b-rad-1 outline-none grow c-black elevation-0",class:[e.inputModifierClasses,e.cursorClass],attrs:{"data-error":!!e.error||null,"data-testid":e.dataTestid,maxlength:e.inputMaxLength,readonly:e.select,id:e.id,type:"checkbox"},domProps:{checked:Array.isArray(e.baseValue)?e._i(e.baseValue,null)>-1:e.baseValue},on:{focus:e.handleFocus,blur:e.handleBlur,keydown:e.handleKeydown,change:function(t){var n=e.baseValue,i=t.target,r=!!i.checked;if(Array.isArray(n)){var s=null,a=e._i(n,s);i.checked?a<0&&(e.baseValue=n.concat([s])):a>-1&&(e.baseValue=n.slice(0,a).concat(n.slice(a+1)))}else e.baseValue=r}}}):"radio"===e.type?n("input",{directives:[{name:"auto-focus",rawName:"v-auto-focus",value:e.autoFocus,expression:"autoFocus"},{name:"model",rawName:"v-model",value:e.baseValue,expression:"baseValue"}],ref:"input",staticClass:"flickr-input b-rad-1 outline-none grow c-black elevation-0",class:[e.inputModifierClasses,e.cursorClass],attrs:{"data-error":!!e.error||null,"data-testid":e.dataTestid,maxlength:e.inputMaxLength,readonly:e.select,id:e.id,type:"radio"},domProps:{checked:e._q(e.baseValue,null)},on:{focus:e.handleFocus,blur:e.handleBlur,keydown:e.handleKeydown,change:function(t){e.baseValue=null}}}):n("input",{directives:[{name:"auto-focus",rawName:"v-auto-focus",value:e.autoFocus,expression:"autoFocus"},{name:"model",rawName:"v-model",value:e.baseValue,expression:"baseValue"}],ref:"input",staticClass:"flickr-input b-rad-1 outline-none grow c-black elevation-0",class:[e.inputModifierClasses,e.cursorClass],attrs:{"data-error":!!e.error||null,"data-testid":e.dataTestid,maxlength:e.inputMaxLength,readonly:e.select,id:e.id,type:e.type},domProps:{value:e.baseValue},on:{focus:e.handleFocus,blur:e.handleBlur,keydown:e.handleKeydown,input:function(t){t.target.composing||(e.baseValue=t.target.value)}}}),e.$slots["append"]?n("div",{staticClass:"flickr-input-append-slot flex align-center justify-center pa-3"},[e._t("append")],2):e._e(),e.select?n("div",{staticClass:"flickr-input-append-slot flex align-center justify-center pa-3"},[n("flickr-icon",{staticClass:"drop-down-icon",class:{open:e.isShowingOptions},attrs:{name:"arrow-drop-down"}})],1):e._e(),n("transition",{attrs:{name:"fade"}},[e.$slots["loader"]&&e.isFocused?n("div",{staticClass:"flickr-input-loader-slot pos-absolute"},[e._t("loader")],2):e._e()]),n("transition",{attrs:{name:"fade"}},[e.mask&&e.isFocused?n("div",{staticClass:"flickr-input-mask-placeholder pos-absolute flex c-grey"},e._l(e.maskPlaceholder,(function(t,i){return n("span",{key:i+"-"+t,staticClass:"ma-0 pa-0 flex align-center justify-center",class:{"o-hidden":!e.isShowingMaskPlaceholder(i),"o-visible":e.isShowingMaskPlaceholder(i)}},[e._v(" "+e._s(t)+" ")])})),0):e._e()])],1),n("transition",{attrs:{name:"message-container-height",mode:"out-in"}},[e.isShowingMessageContainer?n("div",{staticClass:"message-container px-3 mt-2 over-y-hidden"},[n("transition",{attrs:{name:"message-container-height",mode:"out-in"}},[e.error?n("p",{key:e.displayedErrorMessage,staticClass:"ma-0 f-size-1 c-red"},[e._v(" "+e._s(e.displayedErrorMessage)+" ")]):n("p",{key:"hintState",staticClass:"f-size-1 c-grey ma-0"},[e._v(" "+e._s(e.hintText)+" ")])])],1):e._e()]),n("transition",{attrs:{name:"fade",mode:"out-in"}},[e.isShowingOptions?n("div",{staticClass:"options-container flex bg-white c-black column over-y-auto w-100 pos-absolute b-rad-1 elevation-3 cursor-pointer"},e._l(e.options,(function(t,i){return n("div",{key:t,ref:"option-"+(i+1),refInFor:!0,staticClass:"option-item px-3 py-1 user-select-none outline-none",class:{active:e.activeOption===t},attrs:{tabindex:i+1},on:{click:function(n){return e.handleSelectedOption(t)},mouseenter:function(n){return e.updateActiveOption(t)}}},[e._v(" "+e._s(t)+" ")])})),0):e._e()])],1)},r=[],s=n("2f62"),a=n("b279"),o=n("871e");function l(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},i=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(i=i.concat(Object.getOwnPropertySymbols(n).filter((function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable})))),i.forEach((function(t){u(e,t,n[t])}))}return e}function u(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var c={name:"FlickrInput",directives:{"auto-focus":{inserted:function(e,t){t.value&&e.focus()}}},components:{FlickrIcon:o["a"]},props:{id:{type:String,required:!0},label:{type:String,required:!0},autoFocus:{type:Boolean,default:!1},hintText:{type:String,default:""},type:{type:String,default:"text"},rules:{type:Array,default:function(){return[]}},value:{type:[String,Number],default:""},dataTestid:{type:String,default:"no-test-id-given",validator:a["c"]},source:{type:String,default:"no-source-type-given",validator:a["b"]},forcedErrorState:{type:Boolean,default:!1},forcedSuccessState:{type:Boolean,default:!1},validateOnInput:{type:Boolean,default:!1},mask:{type:String,default:""},maskPlaceholder:{type:String,default:""},maxLength:{type:Number,default:null},select:{type:Boolean,default:!1},options:{type:Array,default:function(){return[]}}},data:function(){return{isDirty:!1,isFocused:!1,isShakingLabel:!1,ruleValidationError:"",isShowingOptions:!1,activeOption:""}},computed:l({},Object(s["e"])("error",["inputErrorSources","errorMessage"]),{baseValue:{get:function(){return this.value},set:function(e){this.$emit("input",e)}},displayedErrorMessage:function(){return this.ruleValidationError?this.ruleValidationError:this.source&&this.inputErrorSources.includes(this.source)?this.errorMessage:""},error:function(){return!this.forcedSuccessState&&(this.displayedErrorMessage.length>0||this.forcedErrorState)},cursorClass:function(){return this.select?"cursor-pointer":"cursor-text"},stateColorClass:function(){return this.error?"c-red":this.isFocused?"c-blue":"c-grey-dark"},isShowingMessageContainer:function(){return this.error||this.hintText.length>0},isLabelFloating:function(){return this.isFocused||""!==this.baseValue},inputMaxLength:function(){return this.mask?this.mask.length:this.maxLength},inputModifierClasses:function(){var e=[];return this.maskPlaceholder&&e.push("flickr-input--with-mask-placeholder"),this.select&&e.push("user-select-none"),e}}),watch:{value:function(e,t){this.updateIsDirtyStatus(e,t),this.validateOnInput&&this.performValidation()}},mounted:function(){this.isFocused=this.checkAutoFocus(document.activeElement)},methods:{selectKeyboardNav:function(e){if(this.select){var t=e.key;switch(t){case" ":this.showSelectOptions();break;case"ArrowDown":this.activeNextOption();break;case"ArrowUp":this.activePreviousOption();break;case"Enter":e.preventDefault(),this.handleSelectedOption(this.activeOption);break;default:var n=this.options.filter((function(e){return e.toLowerCase().startsWith(t.toLowerCase())}));n.length>0&&this.handleSelectedOption(n[0]);break}}},updateActiveOption:function(e){this.activeOption=e},activeNextOption:function(){var e=this.options.indexOf(this.activeOption);this.activeOption=this.options[e+1],this.$emit("input",this.activeOption)},activePreviousOption:function(){var e=this.options.indexOf(this.activeOption);this.activeOption=this.options[e-1],this.$emit("input",this.activeOption)},showSelectOptions:function(){this.select&&this.options.length>0&&(this.isShowingOptions=!0)},handleSelectedOption:function(e){this.$emit("input",e),this.activeOption=e,this.isShowingOptions=!1},isShowingMaskPlaceholder:function(e){return e>=this.baseValue.length},checkAutoFocus:function(e){return this.$refs.input===e},setInputFocus:function(e){e.target!==this.$refs.input&&(e.preventDefault(),this.isFocused=!0,this.$refs.input.focus(),this.$emit("focus",!0))},handleFocus:function(){this.isFocused=!0,this.$emit("focus",!0)},handleBlur:function(){this.select&&this.isShowingOptions&&(this.isShowingOptions=!1),this.isDirty&&this.performValidation(),this.isFocused=!1,this.$emit("blur",!0)},handleKeydown:function(e){var t=[9,37,38,39,40];if(!t.includes(e.keyCode)&&this.mask&&this.mask.length!==e.target.value.length){var n=e.target.value,i=e.key,r="Backspace"!==e.key&&"Delete"!==e.key,s=/[-!$%^&*()_+|~=`{}[\]:";'<>?,./\\ ]/,a=this.mask.split("")[n.length],o=this.mask.split("")[r?n.length+1:n.length-1],l={"#":/^\d+$/};if(r){if(l[a]instanceof RegExp&&!l[a].test(i))return e.preventDefault();if(s.test(o)){var u=n+i+o;return e.preventDefault(),this.$emit("input",u)}}if(s.test(o))return e.preventDefault(),this.$emit("input",n.substring(0,n.length-2))}},performValidation:function(){var e=this,t="",n=!1;return this.rules.forEach((function(i){var r=i(e.baseValue);!0===r||n||(n=!0,t=r,e.triggerLabelShake())})),this.ruleValidationError=t,!n},triggerLabelShake:function(){this.isShakingLabel=!1,this.isShakingLabel=!0},updateIsDirtyStatus:function(e,t){e!==t&&(this.isDirty=!0)}}},d=c,p=(n("5e62"),n("2877")),f=n("d8c4"),h=n.n(f),m=Object(p["a"])(d,i,r,!1,null,"69f686f3",null);"function"===typeof h.a&&h()(m);t["a"]=m.exports},d8c4:function(e,t){},ea96:function(e,t,n){"use strict";var i=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("transition",{attrs:{name:"fade-down",mode:"out-in"}},[e.show?n("div",{staticClass:"bg-red-light pa-2 b-rad-1",attrs:{"data-testid":e.testId}},[e.isShowingProvidedMessage?n("p",{staticClass:"text-center ma-0 f-size-3 c-black"},[e._v(" "+e._s(e.message)+" ")]):e._e(),e.unknownErrorType?n("i18n",{staticClass:"text-center ma-0 f-size-3 c-black",attrs:{path:"general-oops-something-went-wrong",tag:"p"}},[n("a",{attrs:{href:e.genericErrorHelp,target:"_blank",place:"learn-more-link"}},[e._v(" "+e._s(e.$t("learn-more"))+" ")])]):e._e()],1):e._e()])},r=[],s=n("2f62"),a=n("5dc8");function o(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{},i=Object.keys(n);"function"===typeof Object.getOwnPropertySymbols&&(i=i.concat(Object.getOwnPropertySymbols(n).filter((function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable})))),i.forEach((function(t){l(e,t,n[t])}))}return e}function l(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var u={name:"FlickrAlertError",props:{message:{type:String,default:""},show:{type:Boolean,default:!1},unknownErrorType:{type:Boolean,default:!1}},data:function(){return{testId:a["IDENTITY_ERROR_ALERT"]}},computed:o({},Object(s["e"])("links",["genericErrorHelp"]),{isShowingProvidedMessage:function(){return!this.unknownErrorType&&""!==this.message}})},c=u,d=(n("1ecc"),n("2877")),p=Object(d["a"])(c,i,r,!1,null,"56ed3198",null);t["a"]=p.exports}}]);