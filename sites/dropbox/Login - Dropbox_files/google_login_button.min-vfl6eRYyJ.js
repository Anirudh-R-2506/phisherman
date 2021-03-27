define(["require","exports","tslib","react","classnames","modules/core/i18n","modules/clean/auth/common/types","modules/clean/auth/login/login_error","dig-components/buttons","modules/clean/react/image","modules/clean/static_urls"],(function(e,t,a,l,o,n,i,s,r,u,c){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.GoogleLoginButton=void 0,l=a.__importDefault(l),o=a.__importDefault(o);var m=c.static_url("/static/images/growth/biz-setup/gmail-vflKoZim9.svg"),d=function(e){var t=e.onClick,a=e.label,o=e.disabled;return l.default.createElement(r.Button,{className:"setup-button",disabled:o,onClick:t,variant:"outline",size:"large"},l.default.createElement("div",{className:"email-cta-button"},l.default.createElement(u.Image,{className:"email-cta-button__item",src:m}),l.default.createElement("div",{className:"email-cta-button__item"},a)))};t.GoogleLoginButton=function(e){var t=e.buttonProps||{},r=o.default("auth-google","button-primary",t.className),u=e.variant&&e.variant===i.AuthFormVariant.DIG20,c=t.text||n.intl.formatMessage({id:"SgtygT",defaultMessage:"Sign in with Google"});return l.default.createElement("div",{className:"login-form-container__google-div"},u?l.default.createElement(d,a.__assign({},e,{label:c})):l.default.createElement("button",{className:r,onClick:e.onClick,type:"button",disabled:e.disabled||t.disabled,"data-uxa-log":"google_login_start"},l.default.createElement("div",{className:"sign-in-text"},c)),e.error&&l.default.createElement(s.LoginError,{className:"google-login-error",message:e.error}))}}));
//# sourceMappingURL=google_login_button.min.js-vflvTxdeF.map