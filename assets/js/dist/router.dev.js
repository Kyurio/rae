"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports["default"] = void 0;

var _default = new Router({
  mode: '',
  base: ProcessingInstruction.env.BASE_URL,
  routes: [{
    path: '/',
    name: 'home',
    component: Home
  }, {
    path: '/',
    name: 'detalle',
    component: Home
  }]
});

exports["default"] = _default;