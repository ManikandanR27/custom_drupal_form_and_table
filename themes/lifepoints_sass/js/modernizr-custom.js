/*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-details-inputtypes-touchevents-webp-addtest-prefixes-setclasses-teststyles !*/
!function(e,t,n){function o(e,t){return typeof e===t}function i(){var e,t,n,i,a,s,A;for(var r in u)if(u.hasOwnProperty(r)){if(e=[],t=u[r],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(i=o(t.fn,"function")?t.fn():t.fn,a=0;a<e.length;a++)s=e[a],A=s.split("."),1===A.length?Modernizr[A[0]]=i:(!Modernizr[A[0]]||Modernizr[A[0]]instanceof Boolean||(Modernizr[A[0]]=new Boolean(Modernizr[A[0]])),Modernizr[A[0]][A[1]]=i),f.push((i?"":"no-")+A.join("-"))}}function a(e){var t=p.className,n=Modernizr._config.classPrefix||"";if(h&&(t=t.baseVal),Modernizr._config.enableJSClass){var o=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(o,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),h?p.className.baseVal=t:p.className=t)}function s(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):h?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function A(e,t){if("object"==typeof e)for(var n in e)y(e,n)&&A(n,e[n]);else{e=e.toLowerCase();var o=e.split("."),i=Modernizr[o[0]];if(2==o.length&&(i=i[o[1]]),"undefined"!=typeof i)return Modernizr;t="function"==typeof t?t():t,1==o.length?Modernizr[o[0]]=t:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=t),a([(t&&0!=t?"":"no-")+o.join("-")]),Modernizr._trigger(e,t)}return Modernizr}function r(){var e=t.body;return e||(e=s(h?"svg":"body"),e.fake=!0),e}function l(e,n,o,i){var a,A,l,f,u="modernizr",d=s("div"),c=r();if(parseInt(o,10))for(;o--;)l=s("div"),l.id=i?i[o]:u+(o+1),d.appendChild(l);return a=s("style"),a.type="text/css",a.id="s"+u,(c.fake?c:d).appendChild(a),c.appendChild(d),a.styleSheet?a.styleSheet.cssText=e:a.appendChild(t.createTextNode(e)),d.id=u,c.fake&&(c.style.background="",c.style.overflow="hidden",f=p.style.overflow,p.style.overflow="hidden",p.appendChild(c)),A=n(d,e),c.fake?(c.parentNode.removeChild(c),p.style.overflow=f,p.offsetHeight):d.parentNode.removeChild(d),!!A}var f=[],u=[],d={_version:"3.6.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){u.push({name:e,fn:t,options:n})},addAsyncTest:function(e){u.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=d,Modernizr=new Modernizr;var c=d._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];d._prefixes=c;var p=t.documentElement,h="svg"===p.nodeName.toLowerCase(),m=s("input"),g="search tel url email datetime date month week time datetime-local number range color".split(" "),v={};Modernizr.inputtypes=function(e){for(var o,i,a,s=e.length,A="1)",r=0;s>r;r++)m.setAttribute("type",o=e[r]),a="text"!==m.type&&"style"in m,a&&(m.value=A,m.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(o)&&m.style.WebkitAppearance!==n?(p.appendChild(m),i=t.defaultView,a=i.getComputedStyle&&"textfield"!==i.getComputedStyle(m,null).WebkitAppearance&&0!==m.offsetHeight,p.removeChild(m)):/^(search|tel)$/.test(o)||(a=/^(url|email)$/.test(o)?m.checkValidity&&m.checkValidity()===!1:m.value!=A)),v[e[r]]=!!a;return v}(g);var y;!function(){var e={}.hasOwnProperty;y=o(e,"undefined")||o(e.call,"undefined")?function(e,t){return t in e&&o(e.constructor.prototype[t],"undefined")}:function(t,n){return e.call(t,n)}}(),d._l={},d.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},d._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e,o;for(e=0;e<n.length;e++)(o=n[e])(t)},0),delete this._l[e]}},Modernizr._q.push(function(){d.addTest=A}),Modernizr.addAsyncTest(function(){function e(e,t,n){function o(t){var o=t&&"load"===t.type?1==i.width:!1,a="webp"===e;A(e,a&&o?new Boolean(o):o),n&&n(t)}var i=new Image;i.onerror=o,i.onload=o,i.src=t}var t=[{uri:"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",name:"webp"},{uri:"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",name:"webp.alpha"},{uri:"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",name:"webp.animation"},{uri:"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",name:"webp.lossless"}],n=t.shift();e(n.name,n.uri,function(n){if(n&&"load"===n.type)for(var o=0;o<t.length;o++)e(t[o].name,t[o].uri)})});var w=d.testStyles=l;Modernizr.addTest("details",function(){var e,t=s("details");return"open"in t?(w("#modernizr details{display:block}",function(n){n.appendChild(t),t.innerHTML="<summary>a</summary>b",e=t.offsetHeight,t.open=!0,e=e!=t.offsetHeight}),e):!1}),Modernizr.addTest("touchevents",function(){var n;if("ontouchstart"in e||e.DocumentTouch&&t instanceof DocumentTouch)n=!0;else{var o=["@media (",c.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");w(o,function(e){n=9===e.offsetTop})}return n}),i(),a(f),delete d.addTest,delete d.addAsyncTest;for(var b=0;b<Modernizr._q.length;b++)Modernizr._q[b]();e.Modernizr=Modernizr}(window,document);