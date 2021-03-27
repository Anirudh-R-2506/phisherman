/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

var origin;
var public_key;
var source;
var source_to_fc = {};
window.addEventListener("message", function (event) {
    if (event.data && (event.data.event === "load" || event.data.event === "play")) {
        origin = event.data.origin;
        public_key = event.data.public_key;
        source = event.data.source;
        if (event.data.event === "load") {
            buildFunCaptchaURI(public_key);
        }
        else if (event.data.event === "play") {
            if (source in source_to_fc) {
                source_to_fc[source].run();
            }
            else {
                buildFunCaptchaURI(public_key);
            }
        }
    }
});
window.funCaptchaOnloadCallback = function (fc_enforcement) {
    fc_enforcement.setConfig({
        onCompleted: function (response) {
            var fc_token = response.token;
            window.parent.postMessage({ origin: origin, fc_token: fc_token, event: "played" }, "*");
        },
        onShown: function () {
            window.parent.postMessage({ origin: origin, event: "loaded" }, "*");
        },
        onReady: function () {
            if (!(source in source_to_fc)) {
                fc_enforcement.run();
                source_to_fc[source] = fc_enforcement;
            }
        }
    });
};
function buildFunCaptchaURI(public_key) {
    var funCaptchaScript = document.createElement('script');
    var funCaptchaURI = "https://dropbox-api.arkoselabs.com/v2/" + public_key + "/api.js";
    funCaptchaScript.setAttribute('src', funCaptchaURI);
    funCaptchaScript.setAttribute('data-callback', "funCaptchaOnloadCallback");
    document.getElementsByTagName("head")[0].appendChild(funCaptchaScript);
}


/***/ })
/******/ ]);