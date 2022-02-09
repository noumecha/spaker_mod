/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "../../../../../../../wbu-atomique/scss/atome/typography/_default.scss":
/*!*****************************************************************************!*\
  !*** ../../../../../../../wbu-atomique/scss/atome/typography/_default.scss ***!
  \*****************************************************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "../../../../../../../wbu-atomique/scss/organisme/sections/theme_builder/vesperr/section__header.scss":
/*!************************************************************************************************************!*\
  !*** ../../../../../../../wbu-atomique/scss/organisme/sections/theme_builder/vesperr/section__header.scss ***!
  \************************************************************************************************************/
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
  !*** ./src/js/headers/vesperr_header.js ***!
  \******************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _stephane888_wbu_atomique_scss_atome_typography_default_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @stephane888/wbu-atomique/scss/atome/typography/_default.scss */ "../../../../../../../wbu-atomique/scss/atome/typography/_default.scss");
/* harmony import */ var _stephane888_wbu_atomique_scss_organisme_sections_theme_builder_vesperr_section_header_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @stephane888/wbu-atomique/scss/organisme/sections/theme_builder/vesperr/section__header.scss */ "../../../../../../../wbu-atomique/scss/organisme/sections/theme_builder/vesperr/section__header.scss");
// importation de mon scss 


/**
* Template Name: Vesperr - v4.7.0
* Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function () {
  "use strict";
  /**
   * Easy selector helper function
   */

  const select = function (el) {
    let all = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
    el = el.trim();

    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };
  /**
   * Easy event listener function
   */


  const on = function (type, el, listener) {
    let all = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : false;
    let selectEl = select(el, all);

    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };
  /**
   * Easy on scroll event listener 
   */


  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener);
  };
  /**
   * Navbar links active state on scroll
   */


  let navbarlinks = select('#navbar .scrollto', true);

  const navbarlinksActive = () => {
    let position = window.scrollY + 200;
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return;
      let section = select(navbarlink.hash);
      if (!section) return;

      if (position >= section.offsetTop && position <= section.offsetTop + section.offsetHeight) {
        navbarlink.classList.add('active');
      } else {
        navbarlink.classList.remove('active');
      }
    });
  };

  window.addEventListener('load', navbarlinksActive);
  onscroll(document, navbarlinksActive);
  /**
   * Scrolls to an element with header offset
   */

  const scrollto = el => {
    let header = select('#header');
    let offset = header.offsetHeight;

    if (!header.classList.contains('header-scrolled')) {
      offset -= 20;
    }

    let elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    });
  };
  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */


  let selectHeader = select('#header');

  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled');
      } else {
        selectHeader.classList.remove('header-scrolled');
      }
    };

    window.addEventListener('load', headerScrolled);
    onscroll(document, headerScrolled);
  }
  /**
   * Back to top button
   */


  let backtotop = select('.back-to-top');

  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active');
      } else {
        backtotop.classList.remove('active');
      }
    };

    window.addEventListener('load', toggleBacktotop);
    onscroll(document, toggleBacktotop);
  }
  /**
   * Mobile nav toggle
   */


  on('click', '.mobile-nav-toggle', function (e) {
    select('#navbar').classList.toggle('navbar-mobile');
    this.classList.toggle('bi-list');
    this.classList.toggle('bi-x');
  });
  /**
   * Mobile nav dropdowns activate
   */

  on('click', '.navbar .dropdown > a', function (e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault();
      this.nextElementSibling.classList.toggle('dropdown-active');
    }
  }, true);
  /**
   * Scrool with ofset on links with a class name .scrollto
   */

  on('click', '.scrollto', function (e) {
    if (select(this.hash)) {
      e.preventDefault();
      let navbar = select('#navbar');

      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile');
        let navbarToggle = select('.mobile-nav-toggle');
        navbarToggle.classList.toggle('bi-list');
        navbarToggle.classList.toggle('bi-x');
      }

      scrollto(this.hash);
    }
  }, true);
  /**
   * Scroll with ofset on page load with hash links in the url
   */

  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash);
      }
    }
  });
  /**
   * Testimonials slider
   */

  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 2,
        spaceBetween: 20
      }
    }
  });
  /**
   * Porfolio isotope and filter
   */

  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');

    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
      });
      let portfolioFilters = select('#portfolio-flters li', true);
      on('click', '#portfolio-flters li', function (e) {
        e.preventDefault();
        portfolioFilters.forEach(function (el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');
        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function () {
          AOS.refresh();
        });
      }, true);
    }
  });
  /**
   * Initiate portfolio lightbox 
   */

  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });
  /**
   * Portfolio details slider
   */

  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });
  /**
   * Animation on scroll
   */

  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  });
})();
}();
/******/ })()
;
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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LE1BQU0sRUFBRTtBQUpELEtBQVQ7QUFNRCxHQVBEO0FBU0QsQ0ExUEQsSSIsInNvdXJjZXMiOlsid2VicGFjazovL3N0YW4tY29tcGlsZXIvLi4vLi4vLi4vLi4vLi4vLi4vLi4vd2J1LWF0b21pcXVlL3Njc3MvYXRvbWUvdHlwb2dyYXBoeS9fZGVmYXVsdC5zY3NzIiwid2VicGFjazovL3N0YW4tY29tcGlsZXIvLi4vLi4vLi4vLi4vLi4vLi4vLi4vd2J1LWF0b21pcXVlL3Njc3Mvb3JnYW5pc21lL3NlY3Rpb25zL3RoZW1lX2J1aWxkZXIvdmVzcGVyci9zZWN0aW9uX19oZWFkZXIuc2NzcyIsIndlYnBhY2s6Ly9zdGFuLWNvbXBpbGVyL3dlYnBhY2svYm9vdHN0cmFwIiwid2VicGFjazovL3N0YW4tY29tcGlsZXIvd2VicGFjay9ydW50aW1lL21ha2UgbmFtZXNwYWNlIG9iamVjdCIsIndlYnBhY2s6Ly9zdGFuLWNvbXBpbGVyLy4vc3JjL2pzL2hlYWRlcnMvdmVzcGVycl9oZWFkZXIuanMiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiLy8gVGhlIG1vZHVsZSBjYWNoZVxudmFyIF9fd2VicGFja19tb2R1bGVfY2FjaGVfXyA9IHt9O1xuXG4vLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcblx0dmFyIGNhY2hlZE1vZHVsZSA9IF9fd2VicGFja19tb2R1bGVfY2FjaGVfX1ttb2R1bGVJZF07XG5cdGlmIChjYWNoZWRNb2R1bGUgIT09IHVuZGVmaW5lZCkge1xuXHRcdHJldHVybiBjYWNoZWRNb2R1bGUuZXhwb3J0cztcblx0fVxuXHQvLyBDcmVhdGUgYSBuZXcgbW9kdWxlIChhbmQgcHV0IGl0IGludG8gdGhlIGNhY2hlKVxuXHR2YXIgbW9kdWxlID0gX193ZWJwYWNrX21vZHVsZV9jYWNoZV9fW21vZHVsZUlkXSA9IHtcblx0XHQvLyBubyBtb2R1bGUuaWQgbmVlZGVkXG5cdFx0Ly8gbm8gbW9kdWxlLmxvYWRlZCBuZWVkZWRcblx0XHRleHBvcnRzOiB7fVxuXHR9O1xuXG5cdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuXHRfX3dlYnBhY2tfbW9kdWxlc19fW21vZHVsZUlkXShtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuXHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuXHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG59XG5cbiIsIi8vIGRlZmluZSBfX2VzTW9kdWxlIG9uIGV4cG9ydHNcbl9fd2VicGFja19yZXF1aXJlX18uciA9IGZ1bmN0aW9uKGV4cG9ydHMpIHtcblx0aWYodHlwZW9mIFN5bWJvbCAhPT0gJ3VuZGVmaW5lZCcgJiYgU3ltYm9sLnRvU3RyaW5nVGFnKSB7XG5cdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIFN5bWJvbC50b1N0cmluZ1RhZywgeyB2YWx1ZTogJ01vZHVsZScgfSk7XG5cdH1cblx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsICdfX2VzTW9kdWxlJywgeyB2YWx1ZTogdHJ1ZSB9KTtcbn07IiwiLy8gaW1wb3J0YXRpb24gZGUgbW9uIHNjc3MgXG5pbXBvcnQgXCJAc3RlcGhhbmU4ODgvd2J1LWF0b21pcXVlL3Njc3MvYXRvbWUvdHlwb2dyYXBoeS9fZGVmYXVsdC5zY3NzXCI7XG5pbXBvcnQgXCJAc3RlcGhhbmU4ODgvd2J1LWF0b21pcXVlL3Njc3Mvb3JnYW5pc21lL3NlY3Rpb25zL3RoZW1lX2J1aWxkZXIvdmVzcGVyci9zZWN0aW9uX19oZWFkZXIuc2Nzc1wiO1xuXG4vKipcbiogVGVtcGxhdGUgTmFtZTogVmVzcGVyciAtIHY0LjcuMFxuKiBUZW1wbGF0ZSBVUkw6IGh0dHBzOi8vYm9vdHN0cmFwbWFkZS5jb20vdmVzcGVyci1mcmVlLWJvb3RzdHJhcC10ZW1wbGF0ZS9cbiogQXV0aG9yOiBCb290c3RyYXBNYWRlLmNvbVxuKiBMaWNlbnNlOiBodHRwczovL2Jvb3RzdHJhcG1hZGUuY29tL2xpY2Vuc2UvXG4qL1xuKGZ1bmN0aW9uKCkge1xuICBcInVzZSBzdHJpY3RcIjtcblxuICAvKipcbiAgICogRWFzeSBzZWxlY3RvciBoZWxwZXIgZnVuY3Rpb25cbiAgICovXG4gIGNvbnN0IHNlbGVjdCA9IChlbCwgYWxsID0gZmFsc2UpID0+IHtcbiAgICBlbCA9IGVsLnRyaW0oKVxuICAgIGlmIChhbGwpIHtcbiAgICAgIHJldHVybiBbLi4uZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChlbCldXG4gICAgfSBlbHNlIHtcbiAgICAgIHJldHVybiBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKGVsKVxuICAgIH1cbiAgfVxuXG4gIC8qKlxuICAgKiBFYXN5IGV2ZW50IGxpc3RlbmVyIGZ1bmN0aW9uXG4gICAqL1xuICBjb25zdCBvbiA9ICh0eXBlLCBlbCwgbGlzdGVuZXIsIGFsbCA9IGZhbHNlKSA9PiB7XG4gICAgbGV0IHNlbGVjdEVsID0gc2VsZWN0KGVsLCBhbGwpXG4gICAgaWYgKHNlbGVjdEVsKSB7XG4gICAgICBpZiAoYWxsKSB7XG4gICAgICAgIHNlbGVjdEVsLmZvckVhY2goZSA9PiBlLmFkZEV2ZW50TGlzdGVuZXIodHlwZSwgbGlzdGVuZXIpKVxuICAgICAgfSBlbHNlIHtcbiAgICAgICAgc2VsZWN0RWwuYWRkRXZlbnRMaXN0ZW5lcih0eXBlLCBsaXN0ZW5lcilcbiAgICAgIH1cbiAgICB9XG4gIH1cblxuICAvKipcbiAgICogRWFzeSBvbiBzY3JvbGwgZXZlbnQgbGlzdGVuZXIgXG4gICAqL1xuICBjb25zdCBvbnNjcm9sbCA9IChlbCwgbGlzdGVuZXIpID0+IHtcbiAgICBlbC5hZGRFdmVudExpc3RlbmVyKCdzY3JvbGwnLCBsaXN0ZW5lcilcbiAgfVxuXG4gIC8qKlxuICAgKiBOYXZiYXIgbGlua3MgYWN0aXZlIHN0YXRlIG9uIHNjcm9sbFxuICAgKi9cbiAgbGV0IG5hdmJhcmxpbmtzID0gc2VsZWN0KCcjbmF2YmFyIC5zY3JvbGx0bycsIHRydWUpXG4gIGNvbnN0IG5hdmJhcmxpbmtzQWN0aXZlID0gKCkgPT4ge1xuICAgIGxldCBwb3NpdGlvbiA9IHdpbmRvdy5zY3JvbGxZICsgMjAwXG4gICAgbmF2YmFybGlua3MuZm9yRWFjaChuYXZiYXJsaW5rID0+IHtcbiAgICAgIGlmICghbmF2YmFybGluay5oYXNoKSByZXR1cm5cbiAgICAgIGxldCBzZWN0aW9uID0gc2VsZWN0KG5hdmJhcmxpbmsuaGFzaClcbiAgICAgIGlmICghc2VjdGlvbikgcmV0dXJuXG4gICAgICBpZiAocG9zaXRpb24gPj0gc2VjdGlvbi5vZmZzZXRUb3AgJiYgcG9zaXRpb24gPD0gKHNlY3Rpb24ub2Zmc2V0VG9wICsgc2VjdGlvbi5vZmZzZXRIZWlnaHQpKSB7XG4gICAgICAgIG5hdmJhcmxpbmsuY2xhc3NMaXN0LmFkZCgnYWN0aXZlJylcbiAgICAgIH0gZWxzZSB7XG4gICAgICAgIG5hdmJhcmxpbmsuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJylcbiAgICAgIH1cbiAgICB9KVxuICB9XG4gIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdsb2FkJywgbmF2YmFybGlua3NBY3RpdmUpXG4gIG9uc2Nyb2xsKGRvY3VtZW50LCBuYXZiYXJsaW5rc0FjdGl2ZSlcblxuICAvKipcbiAgICogU2Nyb2xscyB0byBhbiBlbGVtZW50IHdpdGggaGVhZGVyIG9mZnNldFxuICAgKi9cbiAgY29uc3Qgc2Nyb2xsdG8gPSAoZWwpID0+IHtcbiAgICBsZXQgaGVhZGVyID0gc2VsZWN0KCcjaGVhZGVyJylcbiAgICBsZXQgb2Zmc2V0ID0gaGVhZGVyLm9mZnNldEhlaWdodFxuXG4gICAgaWYgKCFoZWFkZXIuY2xhc3NMaXN0LmNvbnRhaW5zKCdoZWFkZXItc2Nyb2xsZWQnKSkge1xuICAgICAgb2Zmc2V0IC09IDIwXG4gICAgfVxuXG4gICAgbGV0IGVsZW1lbnRQb3MgPSBzZWxlY3QoZWwpLm9mZnNldFRvcFxuICAgIHdpbmRvdy5zY3JvbGxUbyh7XG4gICAgICB0b3A6IGVsZW1lbnRQb3MgLSBvZmZzZXQsXG4gICAgICBiZWhhdmlvcjogJ3Ntb290aCdcbiAgICB9KVxuICB9XG5cbiAgLyoqXG4gICAqIFRvZ2dsZSAuaGVhZGVyLXNjcm9sbGVkIGNsYXNzIHRvICNoZWFkZXIgd2hlbiBwYWdlIGlzIHNjcm9sbGVkXG4gICAqL1xuICBsZXQgc2VsZWN0SGVhZGVyID0gc2VsZWN0KCcjaGVhZGVyJylcbiAgaWYgKHNlbGVjdEhlYWRlcikge1xuICAgIGNvbnN0IGhlYWRlclNjcm9sbGVkID0gKCkgPT4ge1xuICAgICAgaWYgKHdpbmRvdy5zY3JvbGxZID4gMTAwKSB7XG4gICAgICAgIHNlbGVjdEhlYWRlci5jbGFzc0xpc3QuYWRkKCdoZWFkZXItc2Nyb2xsZWQnKVxuICAgICAgfSBlbHNlIHtcbiAgICAgICAgc2VsZWN0SGVhZGVyLmNsYXNzTGlzdC5yZW1vdmUoJ2hlYWRlci1zY3JvbGxlZCcpXG4gICAgICB9XG4gICAgfVxuICAgIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdsb2FkJywgaGVhZGVyU2Nyb2xsZWQpXG4gICAgb25zY3JvbGwoZG9jdW1lbnQsIGhlYWRlclNjcm9sbGVkKVxuICB9XG5cbiAgLyoqXG4gICAqIEJhY2sgdG8gdG9wIGJ1dHRvblxuICAgKi9cbiAgbGV0IGJhY2t0b3RvcCA9IHNlbGVjdCgnLmJhY2stdG8tdG9wJylcbiAgaWYgKGJhY2t0b3RvcCkge1xuICAgIGNvbnN0IHRvZ2dsZUJhY2t0b3RvcCA9ICgpID0+IHtcbiAgICAgIGlmICh3aW5kb3cuc2Nyb2xsWSA+IDEwMCkge1xuICAgICAgICBiYWNrdG90b3AuY2xhc3NMaXN0LmFkZCgnYWN0aXZlJylcbiAgICAgIH0gZWxzZSB7XG4gICAgICAgIGJhY2t0b3RvcC5jbGFzc0xpc3QucmVtb3ZlKCdhY3RpdmUnKVxuICAgICAgfVxuICAgIH1cbiAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignbG9hZCcsIHRvZ2dsZUJhY2t0b3RvcClcbiAgICBvbnNjcm9sbChkb2N1bWVudCwgdG9nZ2xlQmFja3RvdG9wKVxuICB9XG5cbiAgLyoqXG4gICAqIE1vYmlsZSBuYXYgdG9nZ2xlXG4gICAqL1xuICBvbignY2xpY2snLCAnLm1vYmlsZS1uYXYtdG9nZ2xlJywgZnVuY3Rpb24oZSkge1xuICAgIHNlbGVjdCgnI25hdmJhcicpLmNsYXNzTGlzdC50b2dnbGUoJ25hdmJhci1tb2JpbGUnKVxuICAgIHRoaXMuY2xhc3NMaXN0LnRvZ2dsZSgnYmktbGlzdCcpXG4gICAgdGhpcy5jbGFzc0xpc3QudG9nZ2xlKCdiaS14JylcbiAgfSlcblxuICAvKipcbiAgICogTW9iaWxlIG5hdiBkcm9wZG93bnMgYWN0aXZhdGVcbiAgICovXG4gIG9uKCdjbGljaycsICcubmF2YmFyIC5kcm9wZG93biA+IGEnLCBmdW5jdGlvbihlKSB7XG4gICAgaWYgKHNlbGVjdCgnI25hdmJhcicpLmNsYXNzTGlzdC5jb250YWlucygnbmF2YmFyLW1vYmlsZScpKSB7XG4gICAgICBlLnByZXZlbnREZWZhdWx0KClcbiAgICAgIHRoaXMubmV4dEVsZW1lbnRTaWJsaW5nLmNsYXNzTGlzdC50b2dnbGUoJ2Ryb3Bkb3duLWFjdGl2ZScpXG4gICAgfVxuICB9LCB0cnVlKVxuXG4gIC8qKlxuICAgKiBTY3Jvb2wgd2l0aCBvZnNldCBvbiBsaW5rcyB3aXRoIGEgY2xhc3MgbmFtZSAuc2Nyb2xsdG9cbiAgICovXG4gIG9uKCdjbGljaycsICcuc2Nyb2xsdG8nLCBmdW5jdGlvbihlKSB7XG4gICAgaWYgKHNlbGVjdCh0aGlzLmhhc2gpKSB7XG4gICAgICBlLnByZXZlbnREZWZhdWx0KClcblxuICAgICAgbGV0IG5hdmJhciA9IHNlbGVjdCgnI25hdmJhcicpXG4gICAgICBpZiAobmF2YmFyLmNsYXNzTGlzdC5jb250YWlucygnbmF2YmFyLW1vYmlsZScpKSB7XG4gICAgICAgIG5hdmJhci5jbGFzc0xpc3QucmVtb3ZlKCduYXZiYXItbW9iaWxlJylcbiAgICAgICAgbGV0IG5hdmJhclRvZ2dsZSA9IHNlbGVjdCgnLm1vYmlsZS1uYXYtdG9nZ2xlJylcbiAgICAgICAgbmF2YmFyVG9nZ2xlLmNsYXNzTGlzdC50b2dnbGUoJ2JpLWxpc3QnKVxuICAgICAgICBuYXZiYXJUb2dnbGUuY2xhc3NMaXN0LnRvZ2dsZSgnYmkteCcpXG4gICAgICB9XG4gICAgICBzY3JvbGx0byh0aGlzLmhhc2gpXG4gICAgfVxuICB9LCB0cnVlKVxuXG4gIC8qKlxuICAgKiBTY3JvbGwgd2l0aCBvZnNldCBvbiBwYWdlIGxvYWQgd2l0aCBoYXNoIGxpbmtzIGluIHRoZSB1cmxcbiAgICovXG4gIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdsb2FkJywgKCkgPT4ge1xuICAgIGlmICh3aW5kb3cubG9jYXRpb24uaGFzaCkge1xuICAgICAgaWYgKHNlbGVjdCh3aW5kb3cubG9jYXRpb24uaGFzaCkpIHtcbiAgICAgICAgc2Nyb2xsdG8od2luZG93LmxvY2F0aW9uLmhhc2gpXG4gICAgICB9XG4gICAgfVxuICB9KTtcblxuICAvKipcbiAgICogVGVzdGltb25pYWxzIHNsaWRlclxuICAgKi9cbiAgbmV3IFN3aXBlcignLnRlc3RpbW9uaWFscy1zbGlkZXInLCB7XG4gICAgc3BlZWQ6IDYwMCxcbiAgICBsb29wOiB0cnVlLFxuICAgIGF1dG9wbGF5OiB7XG4gICAgICBkZWxheTogNTAwMCxcbiAgICAgIGRpc2FibGVPbkludGVyYWN0aW9uOiBmYWxzZVxuICAgIH0sXG4gICAgc2xpZGVzUGVyVmlldzogJ2F1dG8nLFxuICAgIHBhZ2luYXRpb246IHtcbiAgICAgIGVsOiAnLnN3aXBlci1wYWdpbmF0aW9uJyxcbiAgICAgIHR5cGU6ICdidWxsZXRzJyxcbiAgICAgIGNsaWNrYWJsZTogdHJ1ZVxuICAgIH0sXG4gICAgYnJlYWtwb2ludHM6IHtcbiAgICAgIDMyMDoge1xuICAgICAgICBzbGlkZXNQZXJWaWV3OiAxLFxuICAgICAgICBzcGFjZUJldHdlZW46IDIwXG4gICAgICB9LFxuXG4gICAgICAxMjAwOiB7XG4gICAgICAgIHNsaWRlc1BlclZpZXc6IDIsXG4gICAgICAgIHNwYWNlQmV0d2VlbjogMjBcbiAgICAgIH1cbiAgICB9XG4gIH0pO1xuXG4gIC8qKlxuICAgKiBQb3Jmb2xpbyBpc290b3BlIGFuZCBmaWx0ZXJcbiAgICovXG4gIHdpbmRvdy5hZGRFdmVudExpc3RlbmVyKCdsb2FkJywgKCkgPT4ge1xuICAgIGxldCBwb3J0Zm9saW9Db250YWluZXIgPSBzZWxlY3QoJy5wb3J0Zm9saW8tY29udGFpbmVyJyk7XG4gICAgaWYgKHBvcnRmb2xpb0NvbnRhaW5lcikge1xuICAgICAgbGV0IHBvcnRmb2xpb0lzb3RvcGUgPSBuZXcgSXNvdG9wZShwb3J0Zm9saW9Db250YWluZXIsIHtcbiAgICAgICAgaXRlbVNlbGVjdG9yOiAnLnBvcnRmb2xpby1pdGVtJyxcbiAgICAgICAgbGF5b3V0TW9kZTogJ2ZpdFJvd3MnXG4gICAgICB9KTtcblxuICAgICAgbGV0IHBvcnRmb2xpb0ZpbHRlcnMgPSBzZWxlY3QoJyNwb3J0Zm9saW8tZmx0ZXJzIGxpJywgdHJ1ZSk7XG5cbiAgICAgIG9uKCdjbGljaycsICcjcG9ydGZvbGlvLWZsdGVycyBsaScsIGZ1bmN0aW9uKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgICBwb3J0Zm9saW9GaWx0ZXJzLmZvckVhY2goZnVuY3Rpb24oZWwpIHtcbiAgICAgICAgICBlbC5jbGFzc0xpc3QucmVtb3ZlKCdmaWx0ZXItYWN0aXZlJyk7XG4gICAgICAgIH0pO1xuICAgICAgICB0aGlzLmNsYXNzTGlzdC5hZGQoJ2ZpbHRlci1hY3RpdmUnKTtcblxuICAgICAgICBwb3J0Zm9saW9Jc290b3BlLmFycmFuZ2Uoe1xuICAgICAgICAgIGZpbHRlcjogdGhpcy5nZXRBdHRyaWJ1dGUoJ2RhdGEtZmlsdGVyJylcbiAgICAgICAgfSk7XG4gICAgICAgIHBvcnRmb2xpb0lzb3RvcGUub24oJ2FycmFuZ2VDb21wbGV0ZScsIGZ1bmN0aW9uKCkge1xuICAgICAgICAgIEFPUy5yZWZyZXNoKClcbiAgICAgICAgfSk7XG4gICAgICB9LCB0cnVlKTtcbiAgICB9XG5cbiAgfSk7XG5cbiAgLyoqXG4gICAqIEluaXRpYXRlIHBvcnRmb2xpbyBsaWdodGJveCBcbiAgICovXG4gIGNvbnN0IHBvcnRmb2xpb0xpZ2h0Ym94ID0gR0xpZ2h0Ym94KHtcbiAgICBzZWxlY3RvcjogJy5wb3J0Zm9saW8tbGlnaHRib3gnXG4gIH0pO1xuXG4gIC8qKlxuICAgKiBQb3J0Zm9saW8gZGV0YWlscyBzbGlkZXJcbiAgICovXG4gIG5ldyBTd2lwZXIoJy5wb3J0Zm9saW8tZGV0YWlscy1zbGlkZXInLCB7XG4gICAgc3BlZWQ6IDQwMCxcbiAgICBsb29wOiB0cnVlLFxuICAgIGF1dG9wbGF5OiB7XG4gICAgICBkZWxheTogNTAwMCxcbiAgICAgIGRpc2FibGVPbkludGVyYWN0aW9uOiBmYWxzZVxuICAgIH0sXG4gICAgcGFnaW5hdGlvbjoge1xuICAgICAgZWw6ICcuc3dpcGVyLXBhZ2luYXRpb24nLFxuICAgICAgdHlwZTogJ2J1bGxldHMnLFxuICAgICAgY2xpY2thYmxlOiB0cnVlXG4gICAgfVxuICB9KTtcblxuICAvKipcbiAgICogQW5pbWF0aW9uIG9uIHNjcm9sbFxuICAgKi9cbiAgd2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ2xvYWQnLCAoKSA9PiB7XG4gICAgQU9TLmluaXQoe1xuICAgICAgZHVyYXRpb246IDEwMDAsXG4gICAgICBlYXNpbmc6ICdlYXNlLWluLW91dCcsXG4gICAgICBvbmNlOiB0cnVlLFxuICAgICAgbWlycm9yOiBmYWxzZVxuICAgIH0pXG4gIH0pO1xuXG59KSgpIl0sIm5hbWVzIjpbInNlbGVjdCIsImVsIiwiYWxsIiwidHJpbSIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsInF1ZXJ5U2VsZWN0b3IiLCJvbiIsInR5cGUiLCJsaXN0ZW5lciIsInNlbGVjdEVsIiwiZm9yRWFjaCIsImUiLCJhZGRFdmVudExpc3RlbmVyIiwib25zY3JvbGwiLCJuYXZiYXJsaW5rcyIsIm5hdmJhcmxpbmtzQWN0aXZlIiwicG9zaXRpb24iLCJ3aW5kb3ciLCJzY3JvbGxZIiwibmF2YmFybGluayIsImhhc2giLCJzZWN0aW9uIiwib2Zmc2V0VG9wIiwib2Zmc2V0SGVpZ2h0IiwiY2xhc3NMaXN0IiwiYWRkIiwicmVtb3ZlIiwic2Nyb2xsdG8iLCJoZWFkZXIiLCJvZmZzZXQiLCJjb250YWlucyIsImVsZW1lbnRQb3MiLCJzY3JvbGxUbyIsInRvcCIsImJlaGF2aW9yIiwic2VsZWN0SGVhZGVyIiwiaGVhZGVyU2Nyb2xsZWQiLCJiYWNrdG90b3AiLCJ0b2dnbGVCYWNrdG90b3AiLCJ0b2dnbGUiLCJwcmV2ZW50RGVmYXVsdCIsIm5leHRFbGVtZW50U2libGluZyIsIm5hdmJhciIsIm5hdmJhclRvZ2dsZSIsImxvY2F0aW9uIiwiU3dpcGVyIiwic3BlZWQiLCJsb29wIiwiYXV0b3BsYXkiLCJkZWxheSIsImRpc2FibGVPbkludGVyYWN0aW9uIiwic2xpZGVzUGVyVmlldyIsInBhZ2luYXRpb24iLCJjbGlja2FibGUiLCJicmVha3BvaW50cyIsInNwYWNlQmV0d2VlbiIsInBvcnRmb2xpb0NvbnRhaW5lciIsInBvcnRmb2xpb0lzb3RvcGUiLCJJc290b3BlIiwiaXRlbVNlbGVjdG9yIiwibGF5b3V0TW9kZSIsInBvcnRmb2xpb0ZpbHRlcnMiLCJhcnJhbmdlIiwiZmlsdGVyIiwiZ2V0QXR0cmlidXRlIiwiQU9TIiwicmVmcmVzaCIsInBvcnRmb2xpb0xpZ2h0Ym94IiwiR0xpZ2h0Ym94Iiwic2VsZWN0b3IiLCJpbml0IiwiZHVyYXRpb24iLCJlYXNpbmciLCJvbmNlIiwibWlycm9yIl0sInNvdXJjZVJvb3QiOiIifQ==