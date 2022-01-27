/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "../../../../../../../wbu-atomique/scss/organisme/sections/theme_builder/vesperr/section__count.scss":
/*!***********************************************************************************************************!*\
  !*** ../../../../../../../wbu-atomique/scss/organisme/sections/theme_builder/vesperr/section__count.scss ***!
  \***********************************************************************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "../../../../../../../wbu-atomique/scss/organisme/sections/theme_builder/vesperr/vesperr.scss":
/*!****************************************************************************************************!*\
  !*** ../../../../../../../wbu-atomique/scss/organisme/sections/theme_builder/vesperr/vesperr.scss ***!
  \****************************************************************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
!function() {
/*!******************************************!*\
  !*** ./src/js/sections/vesperr_count.js ***!
  \******************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _stephane888_wbu_atomique_scss_organisme_sections_theme_builder_vesperr_vesperr_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @stephane888/wbu-atomique/scss/organisme/sections/theme_builder/vesperr/vesperr.scss */ "../../../../../../../wbu-atomique/scss/organisme/sections/theme_builder/vesperr/vesperr.scss");
/* harmony import */ var _stephane888_wbu_atomique_scss_organisme_sections_theme_builder_vesperr_section_count_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @stephane888/wbu-atomique/scss/organisme/sections/theme_builder/vesperr/section__count.scss */ "../../../../../../../wbu-atomique/scss/organisme/sections/theme_builder/vesperr/section__count.scss");


/*!
* purecounter.js - A simple yet configurable native javascript counter which you can count on.
* Author: Stig Rex
* Version: 1.1.4
* Url: https://github.com/srexi/purecounterjs
* License: MIT
*/

!function () {
  "use strict";

  function e(e, t) {
    var r = Object.keys(e);

    if (Object.getOwnPropertySymbols) {
      var n = Object.getOwnPropertySymbols(e);
      t && (n = n.filter(function (t) {
        return Object.getOwnPropertyDescriptor(e, t).enumerable;
      })), r.push.apply(r, n);
    }

    return r;
  }

  function t(e, t, r) {
    return t in e ? Object.defineProperty(e, t, {
      value: r,
      enumerable: !0,
      configurable: !0,
      writable: !0
    }) : e[t] = r, e;
  }

  function r(e, t) {
    for (var r = 0; r < t.length; r++) {
      var n = t[r];
      n.enumerable = n.enumerable || !1, n.configurable = !0, "value" in n && (n.writable = !0), Object.defineProperty(e, n.key, n);
    }
  }

  new (function () {
    function n(e) {
      !function (e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function");
      }(this, n), this.defaults = {
        start: 0,
        end: 100,
        duration: 2e3,
        delay: 10,
        once: !0,
        decimals: 0,
        legacy: !0,
        currency: !1,
        currencysymbol: !1,
        separator: !1,
        separatorsymbol: ",",
        selector: ".purecounter"
      }, this.configOptions = Object.assign({}, this.defaults, e || {}), this.registerEventListeners();
    }

    var a, i, o;
    return a = n, (i = [{
      key: "registerEventListeners",
      value: function () {
        var e = document.querySelectorAll(this.configOptions.selector);

        if (this.intersectionListenerSupported()) {
          var t = new IntersectionObserver(this.animateElements.bind(this), {
            root: null,
            rootMargin: "20px",
            threshold: .5
          });
          e.forEach(function (e) {
            t.observe(e);
          });
        } else window.addEventListener && (this.animateLegacy(e), window.addEventListener("scroll", function (t) {
          this.animateLegacy(e);
        }, {
          passive: !0
        }));
      }
    }, {
      key: "animateLegacy",
      value: function (e) {
        var t = this;
        e.forEach(function (e) {
          !0 === t.parseConfig(e).legacy && t.elementIsInView(e) && t.animateElements([e]);
        });
      }
    }, {
      key: "animateElements",
      value: function (e, t) {
        var r = this;
        e.forEach(function (e) {
          var n = e.target || e,
              a = r.parseConfig(n);
          if (a.duration <= 0) return n.innerHTML = r.formatNumber(a.end, a);

          if (!t && !r.elementIsInView(e) || t && e.intersectionRatio < .5) {
            var i = a.start > a.end ? a.end : a.start;
            return n.innerHTML = r.formatNumber(i, a);
          }

          setTimeout(function () {
            return r.startCounter(n, a);
          }, a.delay);
        });
      }
    }, {
      key: "startCounter",
      value: function (e, t) {
        var r = this,
            n = (t.end - t.start) / (t.duration / t.delay),
            a = "inc";
        t.start > t.end && (a = "dec", n *= -1);
        var i = this.parseValue(t.start);
        e.innerHTML = this.formatNumber(i, t), !0 === t.once && e.setAttribute("data-purecounter-duration", 0);
        var o = setInterval(function () {
          var s = r.nextNumber(i, n, a);
          e.innerHTML = r.formatNumber(s, t), ((i = s) >= t.end && "inc" == a || i <= t.end && "dec" == a) && (e.innerHTML = r.formatNumber(t.end, t), clearInterval(o));
        }, t.delay);
      }
    }, {
      key: "parseConfig",
      value: function (r) {
        var n = this,
            a = function (r) {
          for (var n = 1; n < arguments.length; n++) {
            var a = null != arguments[n] ? arguments[n] : {};
            n % 2 ? e(Object(a), !0).forEach(function (e) {
              t(r, e, a[e]);
            }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(r, Object.getOwnPropertyDescriptors(a)) : e(Object(a)).forEach(function (e) {
              Object.defineProperty(r, e, Object.getOwnPropertyDescriptor(a, e));
            });
          }

          return r;
        }({}, this.configOptions),
            i = [].filter.call(r.attributes, function (e) {
          return /^data-purecounter-/.test(e.name);
        }),
            o = {};

        return i.forEach(function (e) {
          var t = e.name.replace("data-purecounter-", "").toLowerCase(),
              r = "duration" == t ? parseInt(1e3 * n.parseValue(e.value)) : n.parseValue(e.value);
          o[t] = r;
        }), Object.assign(a, o);
      }
    }, {
      key: "nextNumber",
      value: function (e, t) {
        var r = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "inc";
        return e = this.parseValue(e), t = this.parseValue(t), parseFloat("inc" === r ? e + t : e - t);
      }
    }, {
      key: "convertToCurrencySystem",
      value: function (e, t) {
        var r = t.currencysymbol || "",
            n = t.decimals || 1;
        return r + ((e = Math.abs(Number(e))) >= 1e12 ? "".concat((e / 1e12).toFixed(n), " T") : e >= 1e9 ? "".concat((e / 1e9).toFixed(n), " B") : e >= 1e6 ? "".concat((e / 1e6).toFixed(n), " M") : e >= 1e3 ? "".concat((e / 1e12).toFixed(n), " K") : e.toFixed(n));
      }
    }, {
      key: "applySeparator",
      value: function (e, t) {
        return t.separator ? e.replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,").replace(new RegExp(/,/gi, "gi"), t.separatorsymbol) : e.replace(new RegExp(/,/gi, "gi"), "");
      }
    }, {
      key: "formatNumber",
      value: function (e, t) {
        var r = {
          minimumFractionDigits: t.decimals,
          maximumFractionDigits: t.decimals
        };
        return e = t.currency ? this.convertToCurrencySystem(e, t) : parseFloat(e), this.applySeparator(e.toLocaleString(void 0, r), t);
      }
    }, {
      key: "parseValue",
      value: function (e) {
        return /^[0-9]+\.[0-9]+$/.test(e) ? parseFloat(e) : /^[0-9]+$/.test(e) ? parseInt(e) : /^true|false/i.test(e) ? /^true/i.test(e) : e;
      }
    }, {
      key: "elementIsInView",
      value: function (e) {
        for (var t = e.offsetTop, r = e.offsetLeft, n = e.offsetWidth, a = e.offsetHeight; e.offsetParent;) t += (e = e.offsetParent).offsetTop, r += e.offsetLeft;

        return t >= window.pageYOffset && r >= window.pageXOffset && t + a <= window.pageYOffset + window.innerHeight && r + n <= window.pageXOffset + window.innerWidth;
      }
    }, {
      key: "intersectionListenerSupported",
      value: function () {
        return "IntersectionObserver" in window && "IntersectionObserverEntry" in window && "intersectionRatio" in window.IntersectionObserverEntry.prototype;
      }
    }]) && r(a.prototype, i), o && r(a, o), n;
  }())();
}();
}();
/******/ })()
;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QzhDLFdBQVAsR0FBbUI5QyxNQUFNLENBQUNnRCxVQUFoSTtBQUEySTtBQUExVCxLQUF6b0csRUFBcThHO0FBQUNoRixNQUFBQSxHQUFHLEVBQUMsK0JBQUw7QUFBcUNKLE1BQUFBLEtBQUssRUFBQyxZQUFVO0FBQUMsZUFBTSwwQkFBeUJvQyxNQUF6QixJQUFpQywrQkFBOEJBLE1BQS9ELElBQXVFLHVCQUFzQkEsTUFBTSxDQUFDaUQseUJBQVAsQ0FBaUNDLFNBQXBJO0FBQThJO0FBQXBNLEtBQXI4RyxDQUFILEtBQWlwSGpHLENBQUMsQ0FBQ2lDLENBQUMsQ0FBQ2dFLFNBQUgsRUFBYS9ELENBQWIsQ0FBdHBILEVBQXNxSEMsQ0FBQyxJQUFFbkMsQ0FBQyxDQUFDaUMsQ0FBRCxFQUFHRSxDQUFILENBQTFxSCxFQUFnckgvQixDQUF2ckg7QUFBeXJILEdBQW5rSSxFQUFKO0FBQTJrSSxDQUEvbEosRUFBRCxDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vc3Rhbi1jb21waWxlci8uLi8uLi8uLi8uLi8uLi8uLi8uLi93YnUtYXRvbWlxdWUvc2Nzcy9vcmdhbmlzbWUvc2VjdGlvbnMvdGhlbWVfYnVpbGRlci92ZXNwZXJyL3NlY3Rpb25fX2NvdW50LnNjc3MiLCJ3ZWJwYWNrOi8vc3Rhbi1jb21waWxlci8uLi8uLi8uLi8uLi8uLi8uLi8uLi93YnUtYXRvbWlxdWUvc2Nzcy9vcmdhbmlzbWUvc2VjdGlvbnMvdGhlbWVfYnVpbGRlci92ZXNwZXJyL3Zlc3BlcnIuc2NzcyIsIndlYnBhY2s6Ly9zdGFuLWNvbXBpbGVyL3dlYnBhY2svYm9vdHN0cmFwIiwid2VicGFjazovL3N0YW4tY29tcGlsZXIvd2VicGFjay9ydW50aW1lL21ha2UgbmFtZXNwYWNlIG9iamVjdCIsIndlYnBhY2s6Ly9zdGFuLWNvbXBpbGVyLy4vc3JjL2pzL3NlY3Rpb25zL3Zlc3BlcnJfY291bnQuanMiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiLy8gVGhlIG1vZHVsZSBjYWNoZVxudmFyIF9fd2VicGFja19tb2R1bGVfY2FjaGVfXyA9IHt9O1xuXG4vLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcblx0dmFyIGNhY2hlZE1vZHVsZSA9IF9fd2VicGFja19tb2R1bGVfY2FjaGVfX1ttb2R1bGVJZF07XG5cdGlmIChjYWNoZWRNb2R1bGUgIT09IHVuZGVmaW5lZCkge1xuXHRcdHJldHVybiBjYWNoZWRNb2R1bGUuZXhwb3J0cztcblx0fVxuXHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuXHR2YXIgbW9kdWxlID0gX193ZWJwYWNrX21vZHVsZV9jYWNoZV9fW21vZHVsZUlkXSA9IHtcblx0XHQvLyBubyBtb2R1bGUuaWQgbmVlZGVkXG5cdFx0Ly8gbm8gbW9kdWxlLmxvYWRlZCBuZWVkZWRcblx0XHRleHBvcnRzOiB7fVxuXHR9O1xuXG5cdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuXHRfX3dlYnBhY2tfbW9kdWxlc19fW21vZHVsZUlkXShtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuXHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuXHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG59XG5cbiIsIi8vIGRlZmluZSBfX2VzTW9kdWxlIG9uIGV4cG9ydHNcbl9fd2VicGFja19yZXF1aXJlX18uciA9IGZ1bmN0aW9uKGV4cG9ydHMpIHtcblx0aWYodHlwZW9mIFN5bWJvbCAhPT0gJ3VuZGVmaW5lZCcgJiYgU3ltYm9sLnRvU3RyaW5nVGFnKSB7XG5cdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIFN5bWJvbC50b1N0cmluZ1RhZywgeyB2YWx1ZTogJ01vZHVsZScgfSk7XG5cdH1cblx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsICdfX2VzTW9kdWxlJywgeyB2YWx1ZTogdHJ1ZSB9KTtcbn07IiwiaW1wb3J0IFwiQHN0ZXBoYW5lODg4L3didS1hdG9taXF1ZS9zY3NzL29yZ2FuaXNtZS9zZWN0aW9ucy90aGVtZV9idWlsZGVyL3Zlc3BlcnIvdmVzcGVyci5zY3NzXCI7XG5pbXBvcnQgXCJAc3RlcGhhbmU4ODgvd2J1LWF0b21pcXVlL3Njc3Mvb3JnYW5pc21lL3NlY3Rpb25zL3RoZW1lX2J1aWxkZXIvdmVzcGVyci9zZWN0aW9uX19jb3VudC5zY3NzXCI7XG5cbiAgLyohXG4gKiBwdXJlY291bnRlci5qcyAtIEEgc2ltcGxlIHlldCBjb25maWd1cmFibGUgbmF0aXZlIGphdmFzY3JpcHQgY291bnRlciB3aGljaCB5b3UgY2FuIGNvdW50IG9uLlxuICogQXV0aG9yOiBTdGlnIFJleFxuICogVmVyc2lvbjogMS4xLjRcbiAqIFVybDogaHR0cHM6Ly9naXRodWIuY29tL3NyZXhpL3B1cmVjb3VudGVyanNcbiAqIExpY2Vuc2U6IE1JVFxuICAqLyFmdW5jdGlvbigpe1widXNlIHN0cmljdFwiO2Z1bmN0aW9uIGUoZSx0KXt2YXIgcj1PYmplY3Qua2V5cyhlKTtpZihPYmplY3QuZ2V0T3duUHJvcGVydHlTeW1ib2xzKXt2YXIgbj1PYmplY3QuZ2V0T3duUHJvcGVydHlTeW1ib2xzKGUpO3QmJihuPW4uZmlsdGVyKChmdW5jdGlvbih0KXtyZXR1cm4gT2JqZWN0LmdldE93blByb3BlcnR5RGVzY3JpcHRvcihlLHQpLmVudW1lcmFibGV9KSkpLHIucHVzaC5hcHBseShyLG4pfXJldHVybiByfWZ1bmN0aW9uIHQoZSx0LHIpe3JldHVybiB0IGluIGU/T2JqZWN0LmRlZmluZVByb3BlcnR5KGUsdCx7dmFsdWU6cixlbnVtZXJhYmxlOiEwLGNvbmZpZ3VyYWJsZTohMCx3cml0YWJsZTohMH0pOmVbdF09cixlfWZ1bmN0aW9uIHIoZSx0KXtmb3IodmFyIHI9MDtyPHQubGVuZ3RoO3IrKyl7dmFyIG49dFtyXTtuLmVudW1lcmFibGU9bi5lbnVtZXJhYmxlfHwhMSxuLmNvbmZpZ3VyYWJsZT0hMCxcInZhbHVlXCJpbiBuJiYobi53cml0YWJsZT0hMCksT2JqZWN0LmRlZmluZVByb3BlcnR5KGUsbi5rZXksbil9fW5ldyhmdW5jdGlvbigpe2Z1bmN0aW9uIG4oZSl7IWZ1bmN0aW9uKGUsdCl7aWYoIShlIGluc3RhbmNlb2YgdCkpdGhyb3cgbmV3IFR5cGVFcnJvcihcIkNhbm5vdCBjYWxsIGEgY2xhc3MgYXMgYSBmdW5jdGlvblwiKX0odGhpcyxuKSx0aGlzLmRlZmF1bHRzPXtzdGFydDowLGVuZDoxMDAsZHVyYXRpb246MmUzLGRlbGF5OjEwLG9uY2U6ITAsZGVjaW1hbHM6MCxsZWdhY3k6ITAsY3VycmVuY3k6ITEsY3VycmVuY3lzeW1ib2w6ITEsc2VwYXJhdG9yOiExLHNlcGFyYXRvcnN5bWJvbDpcIixcIixzZWxlY3RvcjpcIi5wdXJlY291bnRlclwifSx0aGlzLmNvbmZpZ09wdGlvbnM9T2JqZWN0LmFzc2lnbih7fSx0aGlzLmRlZmF1bHRzLGV8fHt9KSx0aGlzLnJlZ2lzdGVyRXZlbnRMaXN0ZW5lcnMoKX12YXIgYSxpLG87cmV0dXJuIGE9biwoaT1be2tleTpcInJlZ2lzdGVyRXZlbnRMaXN0ZW5lcnNcIix2YWx1ZTpmdW5jdGlvbigpe3ZhciBlPWRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwodGhpcy5jb25maWdPcHRpb25zLnNlbGVjdG9yKTtpZih0aGlzLmludGVyc2VjdGlvbkxpc3RlbmVyU3VwcG9ydGVkKCkpe3ZhciB0PW5ldyBJbnRlcnNlY3Rpb25PYnNlcnZlcih0aGlzLmFuaW1hdGVFbGVtZW50cy5iaW5kKHRoaXMpLHtyb290Om51bGwscm9vdE1hcmdpbjpcIjIwcHhcIix0aHJlc2hvbGQ6LjV9KTtlLmZvckVhY2goKGZ1bmN0aW9uKGUpe3Qub2JzZXJ2ZShlKX0pKX1lbHNlIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyJiYodGhpcy5hbmltYXRlTGVnYWN5KGUpLHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKFwic2Nyb2xsXCIsKGZ1bmN0aW9uKHQpe3RoaXMuYW5pbWF0ZUxlZ2FjeShlKX0pLHtwYXNzaXZlOiEwfSkpfX0se2tleTpcImFuaW1hdGVMZWdhY3lcIix2YWx1ZTpmdW5jdGlvbihlKXt2YXIgdD10aGlzO2UuZm9yRWFjaCgoZnVuY3Rpb24oZSl7ITA9PT10LnBhcnNlQ29uZmlnKGUpLmxlZ2FjeSYmdC5lbGVtZW50SXNJblZpZXcoZSkmJnQuYW5pbWF0ZUVsZW1lbnRzKFtlXSl9KSl9fSx7a2V5OlwiYW5pbWF0ZUVsZW1lbnRzXCIsdmFsdWU6ZnVuY3Rpb24oZSx0KXt2YXIgcj10aGlzO2UuZm9yRWFjaCgoZnVuY3Rpb24oZSl7dmFyIG49ZS50YXJnZXR8fGUsYT1yLnBhcnNlQ29uZmlnKG4pO2lmKGEuZHVyYXRpb248PTApcmV0dXJuIG4uaW5uZXJIVE1MPXIuZm9ybWF0TnVtYmVyKGEuZW5kLGEpO2lmKCF0JiYhci5lbGVtZW50SXNJblZpZXcoZSl8fHQmJmUuaW50ZXJzZWN0aW9uUmF0aW88LjUpe3ZhciBpPWEuc3RhcnQ+YS5lbmQ/YS5lbmQ6YS5zdGFydDtyZXR1cm4gbi5pbm5lckhUTUw9ci5mb3JtYXROdW1iZXIoaSxhKX1zZXRUaW1lb3V0KChmdW5jdGlvbigpe3JldHVybiByLnN0YXJ0Q291bnRlcihuLGEpfSksYS5kZWxheSl9KSl9fSx7a2V5Olwic3RhcnRDb3VudGVyXCIsdmFsdWU6ZnVuY3Rpb24oZSx0KXt2YXIgcj10aGlzLG49KHQuZW5kLXQuc3RhcnQpLyh0LmR1cmF0aW9uL3QuZGVsYXkpLGE9XCJpbmNcIjt0LnN0YXJ0PnQuZW5kJiYoYT1cImRlY1wiLG4qPS0xKTt2YXIgaT10aGlzLnBhcnNlVmFsdWUodC5zdGFydCk7ZS5pbm5lckhUTUw9dGhpcy5mb3JtYXROdW1iZXIoaSx0KSwhMD09PXQub25jZSYmZS5zZXRBdHRyaWJ1dGUoXCJkYXRhLXB1cmVjb3VudGVyLWR1cmF0aW9uXCIsMCk7dmFyIG89c2V0SW50ZXJ2YWwoKGZ1bmN0aW9uKCl7dmFyIHM9ci5uZXh0TnVtYmVyKGksbixhKTtlLmlubmVySFRNTD1yLmZvcm1hdE51bWJlcihzLHQpLCgoaT1zKT49dC5lbmQmJlwiaW5jXCI9PWF8fGk8PXQuZW5kJiZcImRlY1wiPT1hKSYmKGUuaW5uZXJIVE1MPXIuZm9ybWF0TnVtYmVyKHQuZW5kLHQpLGNsZWFySW50ZXJ2YWwobykpfSksdC5kZWxheSl9fSx7a2V5OlwicGFyc2VDb25maWdcIix2YWx1ZTpmdW5jdGlvbihyKXt2YXIgbj10aGlzLGE9ZnVuY3Rpb24ocil7Zm9yKHZhciBuPTE7bjxhcmd1bWVudHMubGVuZ3RoO24rKyl7dmFyIGE9bnVsbCE9YXJndW1lbnRzW25dP2FyZ3VtZW50c1tuXTp7fTtuJTI/ZShPYmplY3QoYSksITApLmZvckVhY2goKGZ1bmN0aW9uKGUpe3QocixlLGFbZV0pfSkpOk9iamVjdC5nZXRPd25Qcm9wZXJ0eURlc2NyaXB0b3JzP09iamVjdC5kZWZpbmVQcm9wZXJ0aWVzKHIsT2JqZWN0LmdldE93blByb3BlcnR5RGVzY3JpcHRvcnMoYSkpOmUoT2JqZWN0KGEpKS5mb3JFYWNoKChmdW5jdGlvbihlKXtPYmplY3QuZGVmaW5lUHJvcGVydHkocixlLE9iamVjdC5nZXRPd25Qcm9wZXJ0eURlc2NyaXB0b3IoYSxlKSl9KSl9cmV0dXJuIHJ9KHt9LHRoaXMuY29uZmlnT3B0aW9ucyksaT1bXS5maWx0ZXIuY2FsbChyLmF0dHJpYnV0ZXMsKGZ1bmN0aW9uKGUpe3JldHVybi9eZGF0YS1wdXJlY291bnRlci0vLnRlc3QoZS5uYW1lKX0pKSxvPXt9O3JldHVybiBpLmZvckVhY2goKGZ1bmN0aW9uKGUpe3ZhciB0PWUubmFtZS5yZXBsYWNlKFwiZGF0YS1wdXJlY291bnRlci1cIixcIlwiKS50b0xvd2VyQ2FzZSgpLHI9XCJkdXJhdGlvblwiPT10P3BhcnNlSW50KDFlMypuLnBhcnNlVmFsdWUoZS52YWx1ZSkpOm4ucGFyc2VWYWx1ZShlLnZhbHVlKTtvW3RdPXJ9KSksT2JqZWN0LmFzc2lnbihhLG8pfX0se2tleTpcIm5leHROdW1iZXJcIix2YWx1ZTpmdW5jdGlvbihlLHQpe3ZhciByPWFyZ3VtZW50cy5sZW5ndGg+MiYmdm9pZCAwIT09YXJndW1lbnRzWzJdP2FyZ3VtZW50c1syXTpcImluY1wiO3JldHVybiBlPXRoaXMucGFyc2VWYWx1ZShlKSx0PXRoaXMucGFyc2VWYWx1ZSh0KSxwYXJzZUZsb2F0KFwiaW5jXCI9PT1yP2UrdDplLXQpfX0se2tleTpcImNvbnZlcnRUb0N1cnJlbmN5U3lzdGVtXCIsdmFsdWU6ZnVuY3Rpb24oZSx0KXt2YXIgcj10LmN1cnJlbmN5c3ltYm9sfHxcIlwiLG49dC5kZWNpbWFsc3x8MTtyZXR1cm4gcisoKGU9TWF0aC5hYnMoTnVtYmVyKGUpKSk+PTFlMTI/XCJcIi5jb25jYXQoKGUvMWUxMikudG9GaXhlZChuKSxcIiBUXCIpOmU+PTFlOT9cIlwiLmNvbmNhdCgoZS8xZTkpLnRvRml4ZWQobiksXCIgQlwiKTplPj0xZTY/XCJcIi5jb25jYXQoKGUvMWU2KS50b0ZpeGVkKG4pLFwiIE1cIik6ZT49MWUzP1wiXCIuY29uY2F0KChlLzFlMTIpLnRvRml4ZWQobiksXCIgS1wiKTplLnRvRml4ZWQobikpfX0se2tleTpcImFwcGx5U2VwYXJhdG9yXCIsdmFsdWU6ZnVuY3Rpb24oZSx0KXtyZXR1cm4gdC5zZXBhcmF0b3I/ZS5yZXBsYWNlKC8oXFxkKSg/PShcXGR7M30pKyg/IVxcZCkpL2csXCIkMSxcIikucmVwbGFjZShuZXcgUmVnRXhwKC8sL2dpLFwiZ2lcIiksdC5zZXBhcmF0b3JzeW1ib2wpOmUucmVwbGFjZShuZXcgUmVnRXhwKC8sL2dpLFwiZ2lcIiksXCJcIil9fSx7a2V5OlwiZm9ybWF0TnVtYmVyXCIsdmFsdWU6ZnVuY3Rpb24oZSx0KXt2YXIgcj17bWluaW11bUZyYWN0aW9uRGlnaXRzOnQuZGVjaW1hbHMsbWF4aW11bUZyYWN0aW9uRGlnaXRzOnQuZGVjaW1hbHN9O3JldHVybiBlPXQuY3VycmVuY3k/dGhpcy5jb252ZXJ0VG9DdXJyZW5jeVN5c3RlbShlLHQpOnBhcnNlRmxvYXQoZSksdGhpcy5hcHBseVNlcGFyYXRvcihlLnRvTG9jYWxlU3RyaW5nKHZvaWQgMCxyKSx0KX19LHtrZXk6XCJwYXJzZVZhbHVlXCIsdmFsdWU6ZnVuY3Rpb24oZSl7cmV0dXJuL15bMC05XStcXC5bMC05XSskLy50ZXN0KGUpP3BhcnNlRmxvYXQoZSk6L15bMC05XSskLy50ZXN0KGUpP3BhcnNlSW50KGUpOi9edHJ1ZXxmYWxzZS9pLnRlc3QoZSk/L150cnVlL2kudGVzdChlKTplfX0se2tleTpcImVsZW1lbnRJc0luVmlld1wiLHZhbHVlOmZ1bmN0aW9uKGUpe2Zvcih2YXIgdD1lLm9mZnNldFRvcCxyPWUub2Zmc2V0TGVmdCxuPWUub2Zmc2V0V2lkdGgsYT1lLm9mZnNldEhlaWdodDtlLm9mZnNldFBhcmVudDspdCs9KGU9ZS5vZmZzZXRQYXJlbnQpLm9mZnNldFRvcCxyKz1lLm9mZnNldExlZnQ7cmV0dXJuIHQ+PXdpbmRvdy5wYWdlWU9mZnNldCYmcj49d2luZG93LnBhZ2VYT2Zmc2V0JiZ0K2E8PXdpbmRvdy5wYWdlWU9mZnNldCt3aW5kb3cuaW5uZXJIZWlnaHQmJnIrbjw9d2luZG93LnBhZ2VYT2Zmc2V0K3dpbmRvdy5pbm5lcldpZHRofX0se2tleTpcImludGVyc2VjdGlvbkxpc3RlbmVyU3VwcG9ydGVkXCIsdmFsdWU6ZnVuY3Rpb24oKXtyZXR1cm5cIkludGVyc2VjdGlvbk9ic2VydmVyXCJpbiB3aW5kb3cmJlwiSW50ZXJzZWN0aW9uT2JzZXJ2ZXJFbnRyeVwiaW4gd2luZG93JiZcImludGVyc2VjdGlvblJhdGlvXCJpbiB3aW5kb3cuSW50ZXJzZWN0aW9uT2JzZXJ2ZXJFbnRyeS5wcm90b3R5cGV9fV0pJiZyKGEucHJvdG90eXBlLGkpLG8mJnIoYSxvKSxufSgpKX0oKTtcbiAgLy8jIHNvdXJjZU1hcHBpbmdVUkw9cHVyZWNvdW50ZXIuanMubWFwIl0sIm5hbWVzIjpbImUiLCJ0IiwiciIsIk9iamVjdCIsImtleXMiLCJnZXRPd25Qcm9wZXJ0eVN5bWJvbHMiLCJuIiwiZmlsdGVyIiwiZ2V0T3duUHJvcGVydHlEZXNjcmlwdG9yIiwiZW51bWVyYWJsZSIsInB1c2giLCJhcHBseSIsImRlZmluZVByb3BlcnR5IiwidmFsdWUiLCJjb25maWd1cmFibGUiLCJ3cml0YWJsZSIsImxlbmd0aCIsImtleSIsIlR5cGVFcnJvciIsImRlZmF1bHRzIiwic3RhcnQiLCJlbmQiLCJkdXJhdGlvbiIsImRlbGF5Iiwib25jZSIsImRlY2ltYWxzIiwibGVnYWN5IiwiY3VycmVuY3kiLCJjdXJyZW5jeXN5bWJvbCIsInNlcGFyYXRvciIsInNlcGFyYXRvcnN5bWJvbCIsInNlbGVjdG9yIiwiY29uZmlnT3B0aW9ucyIsImFzc2lnbiIsInJlZ2lzdGVyRXZlbnRMaXN0ZW5lcnMiLCJhIiwiaSIsIm8iLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJpbnRlcnNlY3Rpb25MaXN0ZW5lclN1cHBvcnRlZCIsIkludGVyc2VjdGlvbk9ic2VydmVyIiwiYW5pbWF0ZUVsZW1lbnRzIiwiYmluZCIsInJvb3QiLCJyb290TWFyZ2luIiwidGhyZXNob2xkIiwiZm9yRWFjaCIsIm9ic2VydmUiLCJ3aW5kb3ciLCJhZGRFdmVudExpc3RlbmVyIiwiYW5pbWF0ZUxlZ2FjeSIsInBhc3NpdmUiLCJwYXJzZUNvbmZpZyIsImVsZW1lbnRJc0luVmlldyIsInRhcmdldCIsImlubmVySFRNTCIsImZvcm1hdE51bWJlciIsImludGVyc2VjdGlvblJhdGlvIiwic2V0VGltZW91dCIsInN0YXJ0Q291bnRlciIsInBhcnNlVmFsdWUiLCJzZXRBdHRyaWJ1dGUiLCJzZXRJbnRlcnZhbCIsInMiLCJuZXh0TnVtYmVyIiwiY2xlYXJJbnRlcnZhbCIsImFyZ3VtZW50cyIsImdldE93blByb3BlcnR5RGVzY3JpcHRvcnMiLCJkZWZpbmVQcm9wZXJ0aWVzIiwiY2FsbCIsImF0dHJpYnV0ZXMiLCJ0ZXN0IiwibmFtZSIsInJlcGxhY2UiLCJ0b0xvd2VyQ2FzZSIsInBhcnNlSW50IiwicGFyc2VGbG9hdCIsIk1hdGgiLCJhYnMiLCJOdW1iZXIiLCJjb25jYXQiLCJ0b0ZpeGVkIiwiUmVnRXhwIiwibWluaW11bUZyYWN0aW9uRGlnaXRzIiwibWF4aW11bUZyYWN0aW9uRGlnaXRzIiwiY29udmVydFRvQ3VycmVuY3lTeXN0ZW0iLCJhcHBseVNlcGFyYXRvciIsInRvTG9jYWxlU3RyaW5nIiwib2Zmc2V0VG9wIiwib2Zmc2V0TGVmdCIsIm9mZnNldFdpZHRoIiwib2Zmc2V0SGVpZ2h0Iiwib2Zmc2V0UGFyZW50IiwicGFnZVlPZmZzZXQiLCJwYWdlWE9mZnNldCIsImlubmVySGVpZ2h0IiwiaW5uZXJXaWR0aCIsIkludGVyc2VjdGlvbk9ic2VydmVyRW50cnkiLCJwcm90b3R5cGUiXSwic291cmNlUm9vdCI6IiJ9