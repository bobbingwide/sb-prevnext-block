(window.webpackJsonp=window.webpackJsonp||[]).push([[1],{4:function(e,t,n){}}]),function(e){function t(t){for(var r,i,l=t[0],u=t[1],s=t[2],a=0,f=[];a<l.length;a++)i=l[a],Object.prototype.hasOwnProperty.call(o,i)&&o[i]&&f.push(o[i][0]),o[i]=0;for(r in u)Object.prototype.hasOwnProperty.call(u,r)&&(e[r]=u[r]);for(p&&p(t);f.length;)f.shift()();return c.push.apply(c,s||[]),n()}function n(){for(var e,t=0;t<c.length;t++){for(var n=c[t],r=!0,l=1;l<n.length;l++){var u=n[l];0!==o[u]&&(r=!1)}r&&(c.splice(t--,1),e=i(i.s=n[0]))}return e}var r={},o={0:0},c=[];function i(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,i),n.l=!0,n.exports}i.m=e,i.c=r,i.d=function(e,t,n){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)i.d(n,r,function(t){return e[t]}.bind(null,r));return n},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="";var l=window.webpackJsonp=window.webpackJsonp||[],u=l.push.bind(l);l.push=t,l=l.slice();for(var s=0;s<l.length;s++)t(l[s]);var p=u;c.push([6,1]),n()}([function(e,t){!function(){e.exports=this.wp.element}()},function(e,t){!function(){e.exports=this.wp.i18n}()},function(e,t){!function(){e.exports=this.wp.blocks}()},function(e,t){!function(){e.exports=this.wp.blockEditor}()},,function(e,t,n){},function(e,t,n){"use strict";n.r(t);var r=n(2),o=n(1),c=(n(4),n(0)),i=n(3);n(5);Object(r.registerBlockType)("sb/sb-prevnext-block",{title:Object(o.__)("PrevNext block","sb"),description:Object(o.__)("Display Previous and Next links.","sb"),category:"widgets",icon:"leftright",supports:{html:!1},edit:function(e){var t=e.className;return Object(c.createElement)(c.Fragment,null,Object(c.createElement)(i.InspectorControls,null),Object(c.createElement)("p",{className:t},Object(o.__)("PrevNext block – hello from the editor!","sb")))},save:function(){return Object(c.createElement)("p",null,Object(o.__)("PrevNext block – hello from the saved content!","sb"))}})}]);