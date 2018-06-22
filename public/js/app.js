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
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 11);
/******/ })
/************************************************************************/
/******/ ({

/***/ 11:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(12);
module.exports = __webpack_require__(43);


/***/ }),

/***/ 12:
/***/ (function(module, exports) {

// loginSignup script
var signUp = document.querySelector('.signUp');
var logIn = document.querySelector('.logIn');
var div = document.querySelector('.signIn');
var div2 = document.querySelector('.sign-Up');
var liError = document.querySelector('.error');
var signBtn = document.querySelector('._signup');
var elForm = document.querySelector('#theForm');
// modal
var modal = document.getElementById("simpleModal");
// open modal button
var modalBtn = document.querySelector(".modalclick");
// Cancel button
var cancel = document.getElementById("cancelBtn");

// Open modal
modalBtn.addEventListener('click', function () {
  modal.style.display = 'block';
});

// Close modal
cancel.addEventListener('click', function () {
  modal.style.display = 'none';
});
// Close by outside modal
modal.addEventListener('click', function () {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
});

signUp.addEventListener('click', function () {
  if (div2.classList.contains('visible-md')) {
    div2.classList.remove('visible-md');
    div.classList.add('visible-md');
  }
});

logIn.addEventListener('click', function () {
  if (div.classList.contains('visible-md')) {
    div.classList.remove('visible-md');
    div2.classList.add('visible-md');
  }
});

// function chk(e) {
//
//   var email = document.querySelector('#email').value;
//   var dataString = 'email=' + email;
//   e.preventDefault();
//   $.ajax({
//     type: 'post',
//       data: dataString,
//       cache: false,
//       url: "<?php echo url('/signup') ?>",
//       success:function(data){
//         console.log(data);
//       }
//   });
//
// };

/***/ }),

/***/ 43:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

/******/ });