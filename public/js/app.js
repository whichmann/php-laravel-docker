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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nError: error:0308010C:digital envelope routines::unsupported\n    at new Hash (node:internal/crypto/hash:79:19)\n    at Object.createHash (node:crypto:139:10)\n    at filename (/Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:94:23)\n    at /Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:120:39\n    at Generator.next (<anonymous>)\n    at asyncGeneratorStep (/Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:3:103)\n    at _next (/Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:5:194)\n    at /Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:5:364\n    at new Promise (<anonymous>)\n    at /Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:5:97\n    at handleCache (/Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:159:18)\n    at /Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:204:18\n    at Generator.next (<anonymous>)\n    at asyncGeneratorStep (/Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:3:103)\n    at _next (/Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:5:194)\n    at /Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:5:364\n    at new Promise (<anonymous>)\n    at /Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:5:97\n    at /Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/cache.js:208:18\n    at Object.<anonymous> (/Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/index.js:191:24)\n    at Generator.next (<anonymous>)\n    at asyncGeneratorStep (/Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/index.js:3:103)\n    at _next (/Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/node_modules/babel-loader/lib/index.js:5:194)");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Users/karolwichmann/Downloads/spaceblog/be/php-laravel-docker/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });