!function(e){function t(t){for(var r,l,i=t[0],c=t[1],s=t[2],p=0,g=[];p<i.length;p++)l=i[p],Object.prototype.hasOwnProperty.call(o,l)&&o[l]&&g.push(o[l][0]),o[l]=0;for(r in c)Object.prototype.hasOwnProperty.call(c,r)&&(e[r]=c[r]);for(u&&u(t);g.length;)g.shift()();return a.push.apply(a,s||[]),n()}function n(){for(var e,t=0;t<a.length;t++){for(var n=a[t],r=!0,i=1;i<n.length;i++){var c=n[i];0!==o[c]&&(r=!1)}r&&(a.splice(t--,1),e=l(l.s=n[0]))}return e}var r={},o={13:0},a=[];function l(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,l),n.l=!0,n.exports}l.m=e,l.c=r,l.d=function(e,t,n){l.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},l.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},l.t=function(e,t){if(1&t&&(e=l(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(l.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)l.d(n,r,function(t){return e[t]}.bind(null,r));return n},l.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return l.d(t,"a",t),t},l.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},l.p="";var i=window.webpackJsonp=window.webpackJsonp||[],c=i.push.bind(i);i.push=t,i=i.slice();for(var s=0;s<i.length;s++)t(i[s]);var u=c;a.push([228,0,29]),n()}({228:function(e,t,n){"use strict";n.r(t);var r=n(177),o=n.n(r);(new class{constructor(){}init(){this.createMapBasic(),this.createMapMarkers(),this.createContextMenu(),this.createPolygons()}createMapBasic(e,t,n){return new o.a({div:"#google-map-basic",lat:-33.8569,lng:151.2152})}createMapMarkers(){var e=new o.a({el:"#google-map-marker",lat:-12.043333,lng:-77.028333});return e.addMarker({lat:-12.043333,lng:-77.03,title:"Lima",details:{database_id:42,author:"HPNeo"},click:function(e){alert("You clicked in this marker")},mouseover:function(e){console.log&&console.log(e)}}),e.addMarker({lat:-12.042,lng:-77.028333,title:"Marker with InfoWindow",infoWindow:{content:"<p>HTML Content</p>"}}),e}createContextMenu(){var e=new o.a({el:"#google-map-context-menu",lat:-12.043333,lng:-77.028333});return e.setContextMenu({control:"map",options:[{title:"Add marker",name:"add_marker",action:function(e){console.log(e.latLng.lat()),console.log(e.latLng.lng()),this.addMarker({lat:e.latLng.lat(),lng:e.latLng.lng(),title:"New marker"}),this.hideContextMenu()}},{title:"Center here",name:"center_here",action:function(e){this.setCenter(e.latLng.lat(),e.latLng.lng())}}]}),e.setContextMenu({control:"marker",options:[{title:"Center here",name:"center_here",action:function(e){this.setCenter(e.latLng.lat(),e.latLng.lng())}}]}),e}createPolygons(){var e,t,n;return n=[[[[-105.00432014465332,39.74732195489861],[-105.00715255737305,39.7462000683517],[-105.00921249389647,39.74468219277038],[-105.01067161560059,39.74362625960105],[-105.01195907592773,39.74290029616054],[-105.00989913940431,39.74078835902781],[-105.00758171081543,39.74059036160317],[-105.00346183776855,39.74059036160317],[-105.00097274780272,39.74059036160317],[-105.00062942504881,39.74072235994946],[-105.00020027160645,39.74191033368865],[-105.0007152557373,39.74276830198601],[-105.00097274780272,39.74369225589818],[-105.00097274780272,39.74461619742136],[-105.00123023986816,39.74534214278395],[-105.00183105468751,39.74613407445653],[-105.00432014465332,39.74732195489861]],[[-105.00361204147337,39.74354376414072],[-105.00301122665405,39.74278480127163],[-105.00221729278564,39.74316428375108],[-105.00283956527711,39.74390674342741],[-105.00361204147337,39.74354376414072]]],[[[-105.00942707061768,39.73989736613708],[-105.00942707061768,39.73910536278566],[-105.00685214996338,39.73923736397631],[-105.00384807586671,39.73910536278566],[-105.00174522399902,39.73903936209552],[-105.00041484832764,39.73910536278566],[-105.00041484832764,39.73979836621592],[-105.00535011291504,39.73986436617916],[-105.00942707061768,39.73989736613708]]]],t=[[-12.040397656836609,-77.03373871559225],[-12.040248585302038,-77.03993927003302],[-12.050047116528843,-77.02448169303511],[-12.044804866577001,-77.02154422636042]],(e=new o.a({el:"#google-map-polygons",lat:-12.040397656836609,lng:-77.03373871559225,click:function(e){console.log(e)}})).drawPolygon({paths:n,useGeoJSON:!0,strokeColor:"#131540",strokeOpacity:.6,strokeWeight:6}),e.drawPolygon({paths:t,strokeColor:"#131540",strokeOpacity:.6,strokeWeight:6}),e}}).init()}});