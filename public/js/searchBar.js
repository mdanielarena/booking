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

/***/ "./resources/js/pages/global.js":
/*!**************************************!*\
  !*** ./resources/js/pages/global.js ***!
  \**************************************/
/*! exports provided: searchFilter, cookie */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "searchFilter", function() { return searchFilter; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "cookie", function() { return cookie; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var searchFilter = /*#__PURE__*/function () {
  function searchFilter(data) {
    _classCallCheck(this, searchFilter);

    this._data = data;
  }

  _createClass(searchFilter, [{
    key: "filter",
    value: function filter() {
      var input, filter, ul, li, a, i, txtValue;
      input = this._data;
      filter = this._data.toUpperCase();
      ul = document.getElementById("filterData");
      li = ul.getElementsByTagName("li");

      for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
        } else {
          li[i].style.display = "none";
        }
      }
    } // constructor(name) {
    //   // invokes the setter
    //   this.name = name;
    // }
    // get name() {
    //   return this._name;
    // }
    // set name(value) {
    //     let myUrl = `${url}/search-data`
    //     let postData = {data:value,_token:token}
    //     $.post(myUrl,postData, (res) => {
    //       this._name = res;
    //     },'json')
    // }

  }]);

  return searchFilter;
}();
var cookie = /*#__PURE__*/function () {
  function cookie() {
    _classCallCheck(this, cookie);
  }

  _createClass(cookie, [{
    key: "setCookie",
    value: function setCookie(name, value, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
      var expires = "expires=" + d.toUTCString();
      document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }
  }, {
    key: "getCookie",
    value: function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');

      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];

        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }

        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }

      return "";
    }
  }]);

  return cookie;
}();

/***/ }),

/***/ "./resources/js/pages/searchBar.js":
/*!*****************************************!*\
  !*** ./resources/js/pages/searchBar.js ***!
  \*****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _global_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./global.js */ "./resources/js/pages/global.js");
 //use global if non-ajax return

var mycookie = new _global_js__WEBPACK_IMPORTED_MODULE_0__["cookie"]();
$(function () {
  $("#checkIn").val(mycookie.getCookie('checkIn'));
  $("#checkOut").val(mycookie.getCookie('checkOut'));
  $("#searchInput").attr('placeholder', mycookie.getCookie('searchInput'));
});
$("#searchInput").keyup(function (event) {
  var searchInput = $("#searchInput").val();
  var myUrl = "".concat(url, "/search-data");
  var postData = {
    data: "".concat(searchInput),
    _token: token
  };
  $.post(myUrl, postData, function (res) {
    new _global_js__WEBPACK_IMPORTED_MODULE_0__["searchFilter"](searchInput).filter();
    var html = "";
    var data = JSON.parse(Base64.decode(res));

    if (data.succ) {
      var code = data.val.code;
      var name = data.val.name;
      html += "<li><a href='#' onClick='filterData(\"" + code + "\",\"" + name + "\")'>" + name + "</a></li>";
      $("#filterData").html(html);
    } else {
      html += "<li><a href=\"#\" >none</a></li>";
      $("#filterData").html(html);
    }
  }, 'json');
});

window.filterData = function (code, name) {
  $("#filterValue").val(code);
  mycookie.setCookie('searchInput', name, 31);
  $("#searchInput").attr('placeholder', mycookie.getCookie('searchInput'));
};

/***/ }),

/***/ 1:
/*!***********************************************!*\
  !*** multi ./resources/js/pages/searchBar.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /srv/www/booking/resources/js/pages/searchBar.js */"./resources/js/pages/searchBar.js");


/***/ })

/******/ });