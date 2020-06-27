(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/mesa"],{

/***/ "./resources/js/mesa.js":
/*!******************************!*\
  !*** ./resources/js/mesa.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(function () {\n  $(\".aww-board__board\").on('load', function () {\n    // Esconde a tela de carregamento ao terminar de carregar o iframe AWW\n    $('.screen-loader').addClass(\"puff-out-center\");\n    setTimeout(function () {\n      $('.screen-loader').addClass(\"invisible\");\n    }, 100); // Exibe e, logo em seguida, desativa o popover do usuario conectado\n\n    setTimeout(function () {\n      $('.user-icon__image img').popover('show');\n    }, 700);\n    setTimeout(function () {\n      $('.user-icon__image img').popover('hide');\n    }, 7000);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbWVzYS5qcz83MTA3Il0sIm5hbWVzIjpbIiQiLCJvbiIsImFkZENsYXNzIiwic2V0VGltZW91dCIsInBvcG92ZXIiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUMsWUFBVztBQUNUQSxHQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QkMsRUFBdkIsQ0FBMEIsTUFBMUIsRUFBa0MsWUFBVztBQUN6QztBQUNBRCxLQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQkUsUUFBcEIsQ0FBNkIsaUJBQTdCO0FBQ0FDLGNBQVUsQ0FBQyxZQUFXO0FBQ2xCSCxPQUFDLENBQUMsZ0JBQUQsQ0FBRCxDQUFvQkUsUUFBcEIsQ0FBNkIsV0FBN0I7QUFDSCxLQUZTLEVBRVAsR0FGTyxDQUFWLENBSHlDLENBT3pDOztBQUNBQyxjQUFVLENBQUMsWUFBVztBQUNsQkgsT0FBQyxDQUFDLHVCQUFELENBQUQsQ0FBMkJJLE9BQTNCLENBQW1DLE1BQW5DO0FBQ0gsS0FGUyxFQUVQLEdBRk8sQ0FBVjtBQUdBRCxjQUFVLENBQUMsWUFBVztBQUNsQkgsT0FBQyxDQUFDLHVCQUFELENBQUQsQ0FBMkJJLE9BQTNCLENBQW1DLE1BQW5DO0FBQ0gsS0FGUyxFQUVQLElBRk8sQ0FBVjtBQUdILEdBZEQ7QUFlSCxDQWhCQSxDQUFEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL21lc2EuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIkKGZ1bmN0aW9uKCkge1xuICAgICQoXCIuYXd3LWJvYXJkX19ib2FyZFwiKS5vbignbG9hZCcsIGZ1bmN0aW9uKCkge1xuICAgICAgICAvLyBFc2NvbmRlIGEgdGVsYSBkZSBjYXJyZWdhbWVudG8gYW8gdGVybWluYXIgZGUgY2FycmVnYXIgbyBpZnJhbWUgQVdXXG4gICAgICAgICQoJy5zY3JlZW4tbG9hZGVyJykuYWRkQ2xhc3MoXCJwdWZmLW91dC1jZW50ZXJcIilcbiAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbigpIHtcbiAgICAgICAgICAgICQoJy5zY3JlZW4tbG9hZGVyJykuYWRkQ2xhc3MoXCJpbnZpc2libGVcIilcbiAgICAgICAgfSwgMTAwKVxuXG4gICAgICAgIC8vIEV4aWJlIGUsIGxvZ28gZW0gc2VndWlkYSwgZGVzYXRpdmEgbyBwb3BvdmVyIGRvIHVzdWFyaW8gY29uZWN0YWRvXG4gICAgICAgIHNldFRpbWVvdXQoZnVuY3Rpb24oKSB7XG4gICAgICAgICAgICAkKCcudXNlci1pY29uX19pbWFnZSBpbWcnKS5wb3BvdmVyKCdzaG93JylcbiAgICAgICAgfSwgNzAwKVxuICAgICAgICBzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgJCgnLnVzZXItaWNvbl9faW1hZ2UgaW1nJykucG9wb3ZlcignaGlkZScpXG4gICAgICAgIH0sIDcwMDApXG4gICAgfSlcbn0pIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/mesa.js\n");

/***/ }),

/***/ 3:
/*!************************************!*\
  !*** multi ./resources/js/mesa.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/mateusbmp/Projetos/RPG-Arretado/resources/js/mesa.js */"./resources/js/mesa.js");


/***/ })

},[[3,"/js/manifest"]]]);