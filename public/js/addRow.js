/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/addRow.js ***!
  \********************************/
$(function () {
  var cnt = 0;
  $("#add").on("click", function () {
    event.preventDefault();
    cnt++;
    $("#tableBody").append("\n            <tr class=\"bg-white\">\n             <td>" + cnt + "</td>\n                  <td class=\"col-2\"><input class=\"form-control\" type=\"text\" id=\"product_name\" name=\"product_name[]\"></td>\n                   <td class=\"col-2\"><textarea class=\"form-control \" type=\"text\" id=\"description\" name=\"description[]\">\n                  </textarea>\n                  </td>\n                  <td class=\"col-1\"><input class=\"form-control quantity\" type=\"number\" id=\"due\" name=\"quantity[]\"></td>\n                  <td class=\"col-1\"><input class=\"form-control price\" type=\"number\" id=\"due\" name=\"unit_price[]\"> <span>cent</span></td>\n                 <td class=\"col-2 sum\"></td>\n                 <td class=\"col-2\"><i class=\"fa fa-trash-o\"></i></td>\n                 </tr>\n        ");
  });
});
/******/ })()
;