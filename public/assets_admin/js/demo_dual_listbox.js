!function(e){function t(t){for(var n,i,a=t[0],u=t[1],c=t[2],s=0,p=[];s<a.length;s++)i=a[s],Object.prototype.hasOwnProperty.call(o,i)&&o[i]&&p.push(o[i][0]),o[i]=0;for(n in u)Object.prototype.hasOwnProperty.call(u,n)&&(e[n]=u[n]);for(f&&f(t);p.length;)p.shift()();return l.push.apply(l,c||[]),r()}function r(){for(var e,t=0;t<l.length;t++){for(var r=l[t],n=!0,a=1;a<r.length;a++){var u=r[a];0!==o[u]&&(n=!1)}n&&(l.splice(t--,1),e=i(i.s=r[0]))}return e}var n={},o={12:0},l=[];function i(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,i),r.l=!0,r.exports}i.m=e,i.c=n,i.d=function(e,t,r){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(i.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)i.d(r,n,function(t){return e[t]}.bind(null,n));return r},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="";var a=window.webpackJsonp=window.webpackJsonp||[],u=a.push.bind(a);a.push=t,a=a.slice();for(var c=0;c<a.length;c++)t(a[c]);var f=u;l.push([227,0,28]),r()}({227:function(e,t,r){"use strict";r.r(t);var n=r(201);(new class{constructor(){}init(){let e=document.querySelector("#dual-listbox-demo");if(!e)return!1;new n.a(e,{addEvent:function(e){},removeEvent:function(e){},availableTitle:"Available items",selectedTitle:"Selected items",addButtonText:'<i class="far fa-chevron-right"></i>',removeButtonText:'<i class="far fa-chevron-left"></i>',addAllButtonText:'<i class="far fa-chevron-double-right"></i>',removeAllButtonText:'<i class="far fa-chevron-double-left"></i>'}).search.remove()}}).init()}});