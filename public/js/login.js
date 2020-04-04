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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/login.js":
/*!*************************************!*\
  !*** ./resources/js/pages/login.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.loginModal = function (e) {
  var html = '';
  html += "\n        <form action=\"/test.php\">\n            <div class=\"form-group\">\n                <label for=\"email\">Email address:</label>\n                <input type=\"email\" class=\"form-control\" id=\"email\">\n            </div>\n            <div class=\"form-group\">  \n                <label for=\"pwd\">Password:</label>\n                <input type=\"password\" class=\"form-control\" id=\"password\">\n            </div>\n            <div class=\"checkbox\">\n                <label><a href=\"#\" onClick=\"SignUp()\">Sign Up?<span class=\"fa fa-angle-down\"></span></a></label>\n            </div>\n\n            <button type=\"button\" onClick=\"loginPost()\" class=\"btn btn-default\">Submit</button>\n        </form>";
  $("#modalHeader").html("<h4 class=\"modal-title\">LOGIN</h4>");
  $("#modalBody").html(html);
  $("#globalModal").modal('show');
};

window.loginPost = function (e) {
  var myurl = "".concat(url, "/login-post");
  var postData = {
    _token: token,
    signIn_email: $("#email").val(),
    signIn_password: $("#password").val()
  };
  $.post(myurl, postData, function (res) {
    var data = JSON.parse(Base64.decode(res));
    if (data.succ) window.location = "".concat(url);else $("#modalError").html("<div class=\"alert alert-danger\">Invalid username or Password</div>");
  }, 'json');
};

window.SignUp = function (e) {
  var html = '';
  html += "\n        <form action=\"\">\n            <div class=\"form-group\">\n                <label for=\"email\">Email address:</label>\n                <input type=\"email\" class=\"form-control\" id=\"sup_email\">\n            </div>\n            <div class=\"form-group\">\n                <label for=\"pwd\">Password:</label>\n                <input type=\"password\" class=\"form-control\" id=\"sup_password\">\n            </div>\n            <div class=\"form-group\">\n                <label for=\"pwd\">Confirm Password:</label>\n                <input type=\"password\" class=\"form-control\" id=\"confirmpassword\">\n            </div>\n\n            <button type=\"button\" onClick=\"signUpPost()\" class=\"btn btn-default\">Submit</button>\n        </form>";
  $("#modalHeader").html("<h4 class=\"modal-title\">SIGN UP</h4>");
  $("#modalBody").html(html);
};

window.signUpPost = function (e) {
  var myurl = "".concat(url, "/signup-post");
  var postData = {
    _token: token,
    email: $("#sup_email").val(),
    password: $("#sup_password").val(),
    password_confirmation: $("#confirmpassword").val()
  };
  $.post(myurl, postData, function (res) {
    var data = JSON.parse(Base64.decode(res));
    if (data.succ) window.location = "".concat(url);
  }, 'json');
};

/***/ }),

/***/ 1:
/*!*******************************************!*\
  !*** multi ./resources/js/pages/login.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\booking\resources\js\pages\login.js */"./resources/js/pages/login.js");


/***/ })

/******/ });